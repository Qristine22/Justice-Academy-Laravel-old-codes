// size ----------------------------------

function create(what, where, className) {
    let elem = document.createElement(what);
    elem.classList.add(className);
    where.append(elem);
    return elem;
}


const adminInputAdd = document.querySelector(".admin__input_add");
const inputsGroup = document.querySelector(".mass-media__group");
let i = 1;

if (adminInputAdd) {
    adminInputAdd.addEventListener("click", () => {
        let newFormWrap = create("div", inputsGroup, `flex`);
        newFormWrap.classList.add("form__item-wrap");
        // site name
        let newFormItem1 = create("div", newFormWrap, `form__item`);
        newFormItem1.classList.add("form__item-inp");

        let newFormLabel1 = create("label", newFormItem1, `text-20`);
        newFormLabel1.classList.add("form__item_name");
        newFormLabel1.setAttribute("for", `site__name${i}`);
        newFormLabel1.innerHTML = "Site Name";

        let newFormInp1 = create("input", newFormItem1, `admin-inp`);
        newFormInp1.setAttribute("type", `text`);
        newFormInp1.setAttribute("id", `site__name${i}`);
        newFormInp1.setAttribute("name", `siteNames[]`);
        newFormInp1.setAttribute("placeholder", `Enter your text here`);






        // link name
        let newFormItem2 = create("div", newFormWrap, `form__item`);
        newFormItem2.classList.add("form__item-inp");

        let newFormLabel2 = create("label", newFormItem2, `text-20`);
        newFormLabel2.classList.add("form__item_name");
        newFormLabel2.setAttribute("for", `link__name${i}`);
        newFormLabel2.innerHTML = "Link Name";

        let newFormInp2 = create("input", newFormItem2, `admin-inp`);
        newFormInp2.setAttribute("type", `text`);
        newFormInp2.setAttribute("id", `link__name${i}`);
        newFormInp2.setAttribute("name", `linkNames[]`);
        newFormInp2.setAttribute("placeholder", `Enter your text here`);







        // link 
        let newFormItem3 = create("div", newFormWrap, `form__item`);
        newFormItem3.classList.add("form__item-inp");

        let newFormLabel3 = create("label", newFormItem3, `text-20`);
        newFormLabel3.classList.add("form__item_name");
        newFormLabel3.setAttribute("for", `link${i}`);
        newFormLabel3.innerHTML = "Link";

        let newFormInp3 = create("input", newFormItem3, `admin-inp`);
        newFormInp3.setAttribute("type", `text`);
        newFormInp3.setAttribute("id", `link${i}`);
        newFormInp3.setAttribute("name", `links[]`);
        newFormInp3.setAttribute("placeholder", `Enter your text here`);
        i++;
    });
}