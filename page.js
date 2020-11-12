const pageNum = $(".section1 .list .page span");
const pageForm = $(".section1 table #pageform");
const pageHidden = $("input#pageNum");

pageNum.click(function(){
    const clickNum = pageNum.index(this);
    submitpage(clickNum);
})

function submitpage(clickNum) {
    pageHidden.val(clickNum);
    pageForm.submit();
}