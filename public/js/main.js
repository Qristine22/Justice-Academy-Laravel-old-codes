// header burger menu
const burgerMenu = document.querySelector(".burger-menu");
const burgerMenuLines = document.querySelectorAll(".burger-menu__line");
const mobileNav = document.querySelector(".mobile-nav");
let burgerMenuBool = true;

burgerMenu.addEventListener("click", (e) => {
    e.stopPropagation();
    if (burgerMenuBool) {
        mobileNav.style.display = "block";
        burgerMenu.style["justify-content"] = "center";
        burgerMenuLines[0].style.transform = "rotate(45deg)";
        burgerMenuLines[1].style.display = "none";
        burgerMenuLines[2].style.transform = "rotate(-45deg)";
        burgerMenuLines[2].style["margin-top"] = "-1px";
    }
    else {
        mobileNav.style.display = "none";
        burgerMenu.style["justify-content"] = "space-between";
        burgerMenuLines[0].style.transform = "rotate(0deg)";
        burgerMenuLines[1].style.display = "inline-block";
        burgerMenuLines[2].style.transform = "rotate(0deg)";
        burgerMenuLines[2].style["margin-top"] = "0";
    }
    burgerMenuBool = !burgerMenuBool;
});
mobileNav.addEventListener("click", (e) => {
    e.stopPropagation();
})






// header mobile
const headerMobArrows = document.querySelectorAll(".header-mob__arrow");
const headerMobMenuLists = document.querySelectorAll(".header-mob__menu_list");
let selectedElem = null;

headerMobArrows.forEach((item, i) => {
    item.addEventListener("click", () => {
        headerMobArrows.forEach((item2, j) => {
            if (i != j) {
                headerMobMenuLists[j].style.display = "none";
                headerMobArrows[j].style.transform = "rotate(0)";
            }
            else {
                headerMobMenuLists[i].style.display = "flex";
                headerMobArrows[i].style.transform = "rotate(180deg)";
            }
        })
        if (selectedElem == item) {
            headerMobMenuLists[i].style.display = "none";
            headerMobArrows[i].style.transform = "rotate(0)";
            selectedElem = null;
        } else {
            selectedElem = item;
        }
    })
})






// document click event
document.addEventListener("click", (e) => {
    mobileNav.style.display = "none";
    burgerMenu.style["justify-content"] = "space-between";
    burgerMenuLines[0].style.transform = "rotate(0deg)";
    burgerMenuLines[1].style.display = "inline-block";
    burgerMenuLines[2].style.transform = "rotate(0deg)";
    burgerMenuLines[2].style["margin-top"] = "0";
    burgerMenuBool = true;
});