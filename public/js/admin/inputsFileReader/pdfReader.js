let pdfs = document.querySelectorAll('.admin-file-pdf');
let labels = document.querySelectorAll('.admin-inp-pdf');


function pdfReader(pdfs) {
    pdfs.forEach((item, i) => {

        item.onchange = function (evt) {
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;

            if (FileReader && files && files.length) {
                var fr = new FileReader();
                if (evt.target.files[0].size < 10000000) {
                    fr.onload = function () {
                        labels[i].innerHTML = evt.target.files[0].name;
                    }
                    fr.readAsDataURL(files[0]);
                }
                else {
                    labels[i].innerHTML = "Very big file";
                    evt.target.value = null;
                }
            }
        }
    });
}

pdfReader(pdfs);