// size ----------------------------------

function create(what, where, className) {
    let elem = document.createElement(what);
    elem.classList.add(className);
    where.append(elem);
    return elem;
}


const adminInputAdd = document.querySelector(".admin__input_add");
const inputsGroup = document.querySelector(".book-pdf__group");
let i = 1;

if (adminInputAdd) {
    adminInputAdd.addEventListener("click", () => {
        let newFormWrap = create("div", inputsGroup, `flex`);
        newFormWrap.classList.add("form__item-wrap");
        // name en
        let newFormItem1 = create("div", newFormWrap, `form__item`);
        newFormItem1.classList.add("form__item-inp");

        let newFormLabel1 = create("label", newFormItem1, `text-20`);
        newFormLabel1.classList.add("form__item_name");
        newFormLabel1.setAttribute("for", `name__en${i}`);
        newFormLabel1.innerHTML = "Name (English)";

        let newFormInp1 = create("input", newFormItem1, `admin-inp`);
        newFormInp1.setAttribute("type", `text`);
        newFormInp1.setAttribute("id", `name__en${i}`);
        newFormInp1.setAttribute("name", `enNames[]`);
        newFormInp1.setAttribute("placeholder", `Enter your text here`);






        // name am
        let newFormItem2 = create("div", newFormWrap, `form__item`);
        newFormItem2.classList.add("form__item-inp");

        let newFormLabel2 = create("label", newFormItem2, `text-20`);
        newFormLabel2.classList.add("form__item_name");
        newFormLabel2.setAttribute("for", `name__am${i}`);
        newFormLabel2.innerHTML = "Name (Armenian)";

        let newFormInp2 = create("input", newFormItem2, `admin-inp`);
        newFormInp2.setAttribute("type", `text`);
        newFormInp2.setAttribute("id", `name__am${i}`);
        newFormInp2.setAttribute("name", `amNames[]`);
        newFormInp2.setAttribute("placeholder", `Enter your text here`);







        // name ru 
        let newFormItem3 = create("div", newFormWrap, `form__item`);
        newFormItem3.classList.add("form__item-inp");

        let newFormLabel3 = create("label", newFormItem3, `text-20`);
        newFormLabel3.classList.add("form__item_name");
        newFormLabel3.setAttribute("for", `name__ru${i}`);
        newFormLabel3.innerHTML = "Name (Russian)";

        let newFormInp3 = create("input", newFormItem3, `admin-inp`);
        newFormInp3.setAttribute("type", `text`);
        newFormInp3.setAttribute("id", `name__ru${i}`);
        newFormInp3.setAttribute("name", `ruNames[]`);
        newFormInp3.setAttribute("placeholder", `Enter your text here`);






        // pdf
        let newFormItem4 = create("div", newFormWrap, `form__item`);
        newFormItem4.classList.add("form__item-inp");

        let newFormSpan3 = create("span", newFormItem4, `text-20`);
        newFormSpan3.classList.add("form__item_name");
        newFormSpan3.innerHTML = "File";

        let newFormLabel4 = create("label", newFormItem4, `text-20`);
        newFormLabel4.classList.add("admin-inp");
        newFormLabel4.classList.add("admin-inp-file");
        newFormLabel4.classList.add("admin-inp-pdf");
        newFormLabel4.setAttribute("for", `pdf${i}`);
        newFormLabel4.innerHTML = "Attach your File";

        let newFormInp4 = create("input", newFormItem4, `admin-file`);
        newFormInp4.classList.add('admin-file-pdf');
        newFormInp4.setAttribute("type", `file`);
        newFormInp4.setAttribute("id", `pdf${i}`);
        newFormInp4.setAttribute("name", `pdfs[]`);
        newFormInp4.setAttribute("accept", `.pdf`);
        i++;




        pdfs = document.querySelectorAll('.admin-file-pdf');
        labels = document.querySelectorAll('.admin-inp-pdf');
        pdfReader(pdfs);
    });
}