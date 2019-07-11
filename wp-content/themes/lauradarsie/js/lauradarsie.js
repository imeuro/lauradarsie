// compact header
var headerBlock = document.getElementById('masthead');
var naviBlock = document.getElementById('site-navigation');
window.addEventListener('scroll', function(){
    var currentScrollY = this.window.scrollY;
    if (currentScrollY >= 16) {
        headerBlock.classList.add('compact');
        naviBlock.classList.add('compact');
    } else {
        headerBlock.classList.remove('compact');
        naviBlock.classList.remove('compact');
    }
});