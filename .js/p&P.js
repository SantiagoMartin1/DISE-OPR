const $d = document;
const $main = $d.querySelector("main");
const $dropZone = $d.querySelector(".dropZone");


const uploader = (file) => {
  const xhr = new XMLHttpRequest();
  const formData = new FormData();

  formData.append("file", file);

  xhr.addEventListener("readystatechange", e => {
    if (xhr.readyState !== 4) return;

    if (xhr.status >= 200 && xhr.status < 300) {
      let json = JSON.parse(xhr.responseText)
    } else {
      let message = xhr.statusText || "Ocurrió un error";
      console.log(`Error ${xhr.status}: ${message}`);
    }
  })
  xhr.open("POST", "../.php/drag.php");
  xhr.setRequestHeader("enc-type", "multipart/form-data");
  xhr.send(formData);
}

$dropZone.addEventListener("dragover", e => {
  e.preventDefault();
  e.stopPropagation();
  e.target.classList.add("is-active")
})

$dropZone.addEventListener("dragleave", e => {
  e.preventDefault();
  e.stopPropagation();
  e.target.classList.remove("is-active")
})

$dropZone.addEventListener("drop", e => {
  e.preventDefault();
  e.stopPropagation();
  const files = Array.from(e.dataTransfer.files);
  files.forEach(el => progressUpload(el));
  e.target.classList.remove("is-active")
})

const progressUpload = (file)=> {
  const $progress = $d.createElement("progress");
  const $span = $d.createElement("span");

  $progress.value = 0;
  $progress.max = 100;

  $main.insertAdjacentElement("beforeend", $progress);
  $main.insertAdjacentElement("beforeend", $span);

  const fileReader = new FileReader();
  fileReader.readAsDataURL(file);

  fileReader.addEventListener("progress", e => {
    let progress = parseInt((e.loaded * 100) / e.total);
    $progress.value = progress;
    $span.innerHTML = `${file.name} - ${progress}%`;
  });

  fileReader.addEventListener("loadend", e => {
    uploader(file);
    setTimeout(() => {
      $main.removeChild($progress);
      $main.removeChild($span);
    }, 2000);
  });
}

function processFile(file) {
  const docType = file.type;
  const validExtensions = ['audio/.mp3', 'audio/.wav'];

  if (validExtensions.includes(docType)) {
    // archivo válido
    const fileReader = new FileReader();
    const id = `file-${Math.random().toString(32).substring(7)}`;

    fileReader.addEventListener('load', e => {
      const fileUrl = fileReader.result;
      const image = `
          <div id= "${id}" class = "file-container">
            <img src = "${fileUrl}" alt="${file.name}" width="50">
            <div class="status">
              <span>${file.name}</span>
              <span class="status-text">
                Loading...
              </span>
            </div>
          </div>
        `;

      const html = document.querySelector("#preview").innerHTML;
      document.querySelector('#preview').innerHTML = image + html;

    });

    fileReader.readAsDataURL(file);
    uploadFile(file, id);
  } else {
    // no es un archivo válido
    alert("No es un archivo válido");
  }

}


/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }

