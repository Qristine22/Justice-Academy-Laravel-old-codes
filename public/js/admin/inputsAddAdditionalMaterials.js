// size ----------------------------------

function create(what, where, className) {
    let elem = document.createElement(what);
    elem.classList.add(className);
    where.append(elem);
    return elem;
}


const adminInputAdd = document.querySelector(".admin__input_add");
const inputsGroup = document.querySelector(".additional-material__group");
let i = 1;

if (adminInputAdd) {
    adminInputAdd.addEventListener("click", () => {
        let newFormWrap = create("div", inputsGroup, `flex`);
        newFormWrap.classList.add("form__item-wrap");

        // pdf
        let newFormItem = create("div", newFormWrap, `form__item`);
        newFormItem.classList.add("form__item-inp");

        let newFormSpan3 = create("span", newFormItem, `text-20`);
        newFormSpan3.classList.add("form__item_name");
        newFormSpan3.innerHTML = "File";

        let newFormLabel = create("label", newFormItem, `text-20`);
        newFormLabel.classList.add("admin-inp");
        newFormLabel.classList.add("admin-inp-file");
        newFormLabel.classList.add("admin-inp-pdf");
        newFormLabel.setAttribute("for", `pdf${i}`);
        newFormLabel.innerHTML = "Attach your File";

        let newFormInp = create("input", newFormItem, `admin-file`);
        newFormInp.classList.add('admin-file-pdf');
        newFormInp.setAttribute("type", `file`);
        newFormInp.setAttribute("id", `pdf${i}`);
        newFormInp.setAttribute("name", `pdfs[]`);
        newFormInp.setAttribute("accept", `.pdf`);


        
        
        
        
        // link 
        let newFormItem2 = create("div", newFormWrap, `form__item`);
        newFormItem2.classList.add("form__item-inp");

        let newFormLabel2 = create("label", newFormItem2, `text-20`);
        newFormLabel2.classList.add("form__item_name");
        newFormLabel2.setAttribute("for", `link${i}`);
        newFormLabel2.innerHTML = "Link";

        let newFormInp2 = create("input", newFormItem2, `admin-inp`);
        newFormInp2.setAttribute("type", `text`);
        newFormInp2.setAttribute("id", `link${i}`);
        newFormInp2.setAttribute("name", `links[]`);
        newFormInp2.setAttribute("placeholder", `Enter your text here`);
        
        
        
        
        
        
        
        // link name
        let newFormItem3 = create("div", newFormWrap, `form__item`);
        newFormItem3.classList.add("form__item-inp");

        let newFormLabel3 = create("label", newFormItem3, `text-20`);
        newFormLabel3.classList.add("form__item_name");
        newFormLabel3.setAttribute("for", `link__name${i}`);
        newFormLabel3.innerHTML = "Link Name";

        let newFormInp3 = create("input", newFormItem3, `admin-inp`);
        newFormInp3.setAttribute("type", `text`);
        newFormInp3.setAttribute("id", `link__name${i}`);
        newFormInp3.setAttribute("name", `linkNames[]`);
        newFormInp3.setAttribute("placeholder", `Enter your text here`);
        i++;
        



        pdfs = document.querySelectorAll('.admin-file-pdf');
        labels = document.querySelectorAll('.admin-inp-pdf');
        pdfReader(pdfs);
    });
}