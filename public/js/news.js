const swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    direction: 'horizontal',
    
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        0: {
            slidesPerView: 2,
        },
        601: {
            slidesPerView: 3,
        }
    }
});