const coursesSlideItems = document.querySelectorAll(".courses__slide-item");
const coursesPdfsItems = document.querySelectorAll(".courses__block");
const swiperPaginationBullets = document.querySelectorAll(".swiper-pagination-bullet");
let selectedItem = 1;
coursesPdfsItems[0].style.display = "flex";



swiperPaginationBullets.forEach((item, i) => {
    item.addEventListener("click", () => {
        selectedItem = coursesSlideItems[i].getAttribute("data-id");
        coursesPdfsItems.forEach((item2) => {
            if(item2.getAttribute("data-parent-id") == selectedItem){
                item2.style.display = "flex";
            }
            else{
                item2.style.display = "none";
            }
        })
    });
})