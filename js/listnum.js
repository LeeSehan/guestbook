const tr = $(".section1 table tbody tr");
const form = $(".section1 table #data");
const hidden = $("input#listNum");

tr.click(function(){
    const NUM = $(this).find("input:hidden[name='hidNum']").val();
    submit(NUM);
})

function submit(NUM) {
    hidden.val(NUM);
    form.submit();
}