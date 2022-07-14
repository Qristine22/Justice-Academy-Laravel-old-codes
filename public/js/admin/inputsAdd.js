function create(what, where, className) {
    let elem = document.createElement(what);
    elem.classList.add(className);
    where.append(elem);
    return elem;
}


const adminInputAdd = document.querySelector(".admin__input_add");
const inputsGroup = document.querySelector(".inputs__add_group");
let i = 1;

if (adminInputAdd) {
    adminInputAdd.addEventListener("click", () => {
        let newFormItem = create("div", inputsGroup, `form__item`);
        newFormItem.classList.add("form__item-inp");

        let newFileReader = create('img', newFormItem, 'img__file_reader');

        let newFormLabel = create("label", newFormItem, `text-20`);
        newFormLabel.classList.add("admin-inp");
        newFormLabel.classList.add("admin-inp-file");
        newFormLabel.setAttribute("for", `imgs${i}`);
        newFormLabel.innerHTML = "Attach your File";

        let newFormInp = create("input", newFormItem, `admin-file`);
        newFormInp.classList.add('admin-file-img');
        newFormInp.setAttribute("type", `file`);
        newFormInp.setAttribute("id", `imgs${i}`);
        newFormInp.setAttribute("name", `imgs[]`);

        i++;



        inputs = document.querySelectorAll('.admin-file-img');
        imgs = document.querySelectorAll('.img__file_reader');
        imgReader(inputs);
    });
}