
document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("txt-name").addEventListener("keyup", myFunction);
    console.log(document.getElementById("txt-name"));
    function myFunction() {
        var elementValue = document.getElementById("txt-name").value;

        document.getElementById("main-tittle").innerHTML = elementValue;
    }    
})
