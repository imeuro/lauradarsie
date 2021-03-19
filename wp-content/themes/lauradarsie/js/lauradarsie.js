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

// lightbox covid&gravidanza
var promoproj = 'gigi';
let promoboxes = document.querySelectorAll('.promo-iniziativa');
Array.from(promoboxes).forEach(function(el){
    el.onclick = () => {
        promoproj = basicLightbox.create(`
            <div id="lightboxCont">
                <a class="closebtn" onclick="javascript:document.querySelector('.basicLightbox.basicLightbox--visible').click();">CHIUDI</a>
                <h3 style="text-align: center;font-size: 38px;max-width: 750px;margin: 0 auto;">Un percorso psicomusicale per affrontare con serenità il desiderio di maternità nell'epoca del coronavirus</h3>
                <p><img src="https://www.lauradarsie.it/pub/desiderare-un-figlio.jpg" width="100%" /></p>
            </div>
        `).show()
    }
});
