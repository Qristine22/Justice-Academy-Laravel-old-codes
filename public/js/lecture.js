const lecturesItemImgs = document.querySelectorAll(".lectures__item_img");
const lectureInners = document.querySelectorAll(".lecture__inner");

lecturesItemImgs.forEach((item, i) => {
    item.style.height = lectureInners[i].clientHeight + "px";
})