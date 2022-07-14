var swiper = new Swiper(".swiper", {
    spaceBetween: 50,
    noSwiping: true,
    noSwipingClass: 'swiper',
    centeredSlides: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },

    breakpoints: {
        320: {
            slidesPerView: 2,
        },
        750: {
            slidesPerView: 4,
        },
        1570: {
            slidesPerView: 6,
        }
    }
});