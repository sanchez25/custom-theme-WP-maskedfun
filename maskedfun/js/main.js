window.addEventListener('load', function () {

    function checkCookies() {
        let cookieDate = localStorage.getItem('cookieDate');
        let cookieNotification = document.getElementById('cookie-block');
        let cookieBtn = cookieNotification.querySelector('.cookie-reject-button');
        let cookieBtnAccept = cookieNotification.querySelector('.cookie-accept-button');

        if( !cookieDate || (+cookieDate + 31536000000) < Date.now() ){
            cookieNotification.classList.add('show');
        }

        cookieBtn.addEventListener('click', function(){
            localStorage.setItem( 'cookieDate', Date.now() );
            cookieNotification.classList.remove('show');
        })

        cookieBtnAccept.addEventListener('click', function(){
            localStorage.setItem( 'cookieDate', Date.now() );
            cookieNotification.classList.remove('show');
        })
    }
    checkCookies();

    if (/Android/i.test(navigator.userAgent)) {
        document.getElementById("app_link").setAttribute("href", "https://play.google.com/store/apps/details?id=com.wamba.bbs");
        document.getElementById("banner_link").setAttribute("href", "https://play.google.com/store/apps/details?id=com.wamba.bbs");
    } else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
        document.getElementById("app_link").setAttribute("href", "https://apps.apple.com/us/app/masked-love-anonymous-dating/id919512287");
        document.getElementById("banner_link").setAttribute("href", "https://apps.apple.com/us/app/masked-love-anonymous-dating/id919512287");
    }
    else {
        document.getElementById("app_link").setAttribute("href", "https://masked.love");
        document.getElementById("banner_link").setAttribute("href", "https://masked.love");
    }

    let bannerContent = document.querySelector('.main-content')
    let bannerNotification = document.getElementById('fixed_header');
    let bannerBtn = bannerNotification.querySelector('.close_icon');
    bannerBtn.addEventListener('click', function(){
        bannerNotification.classList.add('hidden');
        bannerContent.classList.add('hidden');
    })

    /*function checkBanner() {
        let bannerDate = localStorage.getItem('cookieDate');
        let bannerNotification = document.getElementById('fixed_header');
        let bannerContent = document.querySelector('.main-content')
        let bannerBtn = bannerNotification.querySelector('.close_icon');

        if( !bannerDate || (+bannerDate + 31536000000) < Date.now() ){
            bannerNotification.classList.add('hidden');
            bannerContent.classList.add('hidden');
        }

        bannerBtn.addEventListener('click', function(){
            localStorage.setItem( 'cookieDate', Date.now() );
            bannerNotification.classList.remove('hidden');
            bannerContent.classList.remove('hidden');
        })
    }
    checkBanner();*/
})








