let inputs = document.querySelectorAll('.admin-file-img');
let imgs = document.querySelectorAll('.img__file_reader');


function imgReader(inputs){
    inputs.forEach((item, i) => {

        item.onchange = function (evt) {
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;
        
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = function () {
                    imgs[i].src = fr.result;
                }
                fr.readAsDataURL(files[0]);
            }
        }
    });
}

imgReader(inputs);