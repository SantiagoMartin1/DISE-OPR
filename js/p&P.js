var _validFileExtensions = [".wav", ".mp3"];    
function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                    alert("El archivo " + sFileName + " no es valido. Los formatos validos son: " + _validFileExtensions.join(", "));
                    return false;
                }
            }
        }
    }
    return true;
}

var fileInput = document.getElementById("fileInput")
function showFileName (e) {
    fileName = "";
    path = e.target.value
    // 11
    for(let i = 12; i < path.length-4; i++){
        fileName += path[i]
    }
    document.getElementById("filename").innerText = fileName
}
fileInput.addEventListener("change", showFileName)