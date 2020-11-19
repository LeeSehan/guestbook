const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get("listNum");
const listNum = $("input#clickNumber");

const spanTitle = $("#span_title");
const spanUser = $("#span_user");
const spanDate = $("#span_date");
const spanContent = $("#span_content");


$(document).ready(function(){
    $.ajax({
        url: "../php/content.php",
        type: "GET",
        data: myParam,
        dataType: "json",
        success: function (data) {
            spanTitle.text(data.title);
            spanUser.text(data.user);
            spanDate.text(data.date);
            spanContent.text(data.content);
        }
    });
})

listNum.val(myParam);