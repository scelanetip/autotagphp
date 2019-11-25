var filename = "first";


$(document).ready(function () {
  $('#loginform').submit(function (e) {
    // Form Data
    var formData = new FormData();

    var fileSelect = document.getElementById("fileSelect");
    if(fileSelect.files && fileSelect.files.length == 1){
         var file = fileSelect.files[0]
         formData.set("file", file , file.name);
    }

    if(file.name != filename){
        filename = file.name;
        var input1 = document.getElementById("input1");
        formData.set("input1", input1.value)
        var wait = document.getElementById("wait");
        $.ajax({
                url: 'http://127.0.0.1:8000/predict',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    console.log("start")
                    console.log(wait.style.display)
                    wait.style.display = "block";
                },
                success: function(response){
    //                console.log(response);
                    var labels = document.getElementById("labels");
                    while (labels.firstChild) {
                        labels.removeChild(labels.firstChild);
                    }

                    for(var i=0; i<response.labels.length; i++){
                         var para = document.createElement("p");
                         var node = document.createTextNode(response.labels[i]);
                         para.appendChild(node);
                         labels.appendChild(para);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                    alert('An error occurred... Look at the console (F12 or Ctrl+Shift+I, Console tab) for more information!');
                    console.log('jqXHR:');
                    console.log(jqXHR);
                    console.log('textStatus:');
                    console.log(textStatus);
                    console.log('errorThrown:');
                    console.log(errorThrown);
                },
                complete: function(){
                    console.log("complete")
                    console.log(wait.style.display)
                    wait.style.display = "none";
                }
         });
    });

  });


function previewFile() {
  var preview = document.querySelector('img[id=imgedit]');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();


  if (file) {
    reader.readAsDataURL(file);
  }

    var video = document.getElementById('videdit');
    reader.addEventListener("load", function () {
    preview.src = reader.result;
    video.src = reader.result;
  }, false);

}