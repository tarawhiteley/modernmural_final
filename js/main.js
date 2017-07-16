var sizeBox = document.getElementById('sizeBox'), // container for file size info
progress = document.getElementById('progress'); // the element we're using for a progress bar

var uploader = new ss.SimpleUpload({
button: 'uploadButton', // file upload button
url: 'uploadHandler.php', // server side handler
name: 'uploadfile', // upload parameter name
progressUrl: 'uploadProgress.php', // enables cross-browser progress support (more info below)
responseType: 'json',
allowedExtensions: ['jpg', 'jpeg', 'png', 'gif'],
maxSize: 1024, // kilobytes
hoverClass: 'ui-state-hover',
focusClass: 'ui-state-focus',
disabledClass: 'ui-state-disabled',
onSubmit: function(filename, extension) {
this.setFileSizeBox(sizeBox); // designate this element as file size container
this.setProgressBar(progress); // designate as progress bar
},
onComplete: function(filename, response) {
if (!response) {
alert(filename + 'upload failed');
return false;
}
// do something with response...
}
});  
