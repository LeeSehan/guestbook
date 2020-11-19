const pageNum = $(".section1 .list .page span");
const pageForm = $(".section1 table #pageform");
const pageHidden = $("input#pageNum");

pageNum.click(function(){
    const clickPage = pageNum.index(this); /* 클릭한 페이지 번호가 몇번인지 알려준다. */
    submitpage(clickPage);
})

function submitpage(clickPage) {
    pageHidden.val(clickPage);
    pageForm.submit();
}