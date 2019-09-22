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

// Website Credits
console.log("%c October 2019 - Laura Darsié - lauradarsie.it ",'background:#5285a7;color:#acc4cc');
console.log("%c Powered by: Mauro Fioravanzi ",'background:#5285a7;color:#acc4cc');
