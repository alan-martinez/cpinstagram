import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

// if(document.getElementById("dropzone")) {
    const dropzone = new Dropzone('#dropzone', {
        dictDefaultMessage: 'Sube aqui tu imagen',
        acceptedFiles: '.png, .jpg, .jpeg, .gif',
        addRemoveLinks: true,
        dictRemoveFile: 'Borrar archivo',
        maxFiles: 1,
        uploadMultiple: false,
    })
// }

dropzone.on('sending', function(file, xhr, FormData){
    console.log(FormData);
});

dropzone.on('success', function(file, response){
    console.log(response);
});

dropzone.on('removedfile', function(){
    console.log("Archivo eliminado");
});