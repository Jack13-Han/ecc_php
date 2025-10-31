

const image = document.querySelector("#pic img")
const upload = document.querySelector("#inputFile");


console.log(image)

upload.addEventListener("change", (event) => {
  const el = event.target;
  let files = el.files[el.files.length - 1]
  let reader = new FileReader();
  reader.readAsDataURL(files)

  reader.onload = (event) => {
    let imgUrl = event.target.result;
    
    image.style.height="200px"
    image.setAttribute("src",imgUrl)

    // console.log(imgUrl);
  };

  
});