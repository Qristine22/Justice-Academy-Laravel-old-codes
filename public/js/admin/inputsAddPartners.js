// size ----------------------------------

function create(what, where, className) {
    let elem = document.createElement(what);
    elem.classList.add(className);
    where.append(elem);
    return elem;
}


const adminInputAdd = document.querySelector(".admin__input_add");
const inputsGroup = document.querySelector(".links__group");
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


        // link 
        let newFormItem4 = create("div", newFormWrap, `form__item`);
        newFormItem4.classList.add("form__item-inp");

        let newFormLabel4 = create("label", newFormItem4, `text-20`);
        newFormLabel4.classList.add("form__item_name");
        newFormLabel4.setAttribute("for", `link${i}`);
        newFormLabel4.innerHTML = "Link";

        let newFormInp4 = create("input", newFormItem4, `admin-inp`);
        newFormInp4.setAttribute("type", `text`);
        newFormInp4.setAttribute("id", `link${i}`);
        newFormInp4.setAttribute("name", `links[]`);
        newFormInp4.setAttribute("placeholder", `Enter your text here`);
        

        // file 
        
        let newFormItem5 = create("div", newFormWrap, `form__item`);
        newFormItem5.classList.add("form__item-inp");

        let newFormLabel5 = create("span", newFormItem5, `text-20`);
        newFormLabel5.classList.add("form__item_name");
        newFormLabel5.innerHTML = "File";

        let newFormLabel6 = create("label", newFormItem5, `text-20`);
        newFormLabel6.classList.add("admin-inp");
        newFormLabel6.classList.add("admin-inp-file");
        newFormLabel6.classList.add("admin-inp-pdf");
        newFormLabel6.setAttribute("for", `pdfs${i}`);
        newFormLabel6.innerHTML = "Attach your File";

        let newFormInp5 = create("input", newFormItem5, `admin-file`);
        newFormInp5.classList.add('admin-file-pdf');
        newFormInp5.setAttribute("type", `file`);
        newFormInp5.setAttribute("id", `pdfs${i}`);
        newFormInp5.setAttribute("name", `pdfs[]`);
        newFormInp5.setAttribute("accept", `.pdf`);
        i++;




        pdfs = document.querySelectorAll('.admin-file-pdf');
        labels = document.querySelectorAll('.admin-inp-pdf');
        pdfReader(pdfs);
    });
}