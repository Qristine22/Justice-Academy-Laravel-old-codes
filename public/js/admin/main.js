const headerArrows = document.querySelectorAll(".admin-header__arrow");
const headerMenuLists = document.querySelectorAll(".admin-header__menu-list");
let selectedElem = null;


headerArrows.forEach((item, i) => {
    item.addEventListener("click", () => {
        headerMenuLists.forEach((item2, j) => {
            if(i != j){
                item2.style.display = "none";
                headerArrows[j].style.transform = "rotate(0)";
            }
            else{
                item2.style.display = "block";
                item.style.transform = "rotate(-90deg)";
            }
        })
        if (selectedElem == item) {
            headerMenuLists[i].style.display = "none";
            item.style.transform = "rotate(0)";
            selectedElem = null;
        } else {
            selectedElem = item;
        }
    })
})