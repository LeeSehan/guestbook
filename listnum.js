const tr = $(".section1 table tbody tr");
const form = $(".section1 table #data");
const hidden = $("input#listNum");

tr.click(function(){
    const NUM = $(this).children("td:nth-child(1)");
    submit(NUM);
})

function submit(NUM) {
    hidden.val(NUM.text());
    form.submit();
}