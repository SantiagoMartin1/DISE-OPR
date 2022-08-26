document.addEventListener("DOMContentLoaded", () => {
    const dropArea = document.querySelector(".drag--area");
    const dragText = dropArea.querySelector("h2");
    const button = dropArea.querySelector("button");
    const input = dropArea.querySelector("#input--file");

    button.addEventListener("click", (e) => {
        input.click();
    });

    input.addEventListener("change", (e) => {
        files = this.files;
        dropArea.classList.add("active");
        showFiles(files);
        dropArea.classList.remove("active");
    })

//hacer el drag over

    dropArea.addEventListener("dragleave", (e => {
        e.preventDefault();
        dropArea.classList.remove("active");
        dragText.textContent = "Arrastra y suelta archivos";
    });

    drop
})