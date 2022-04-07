

//Inputs
const iPrice = document.getElementById('i_price');
const iTitle = document.getElementById('i_title');
const iPreviewImage = document.getElementById('i_image');
const image = document.getElementById('image');

//Cards text
const cardPrice = document.querySelector('.card-price');
const cardTitle = document.querySelector('.card-title');

iPrice.addEventListener('input', () => {
    cardPrice.textContent = iPrice.value;
});

iTitle.addEventListener('input', () => {
    cardTitle.textContent = iTitle.value;
});


iPreviewImage.onchange = (e) => {
    const reader = new FileReader();

    reader.readAsDataURL(e.target.files[0]);
    reader.onload = () => {
        image.src = reader.result;
    }
}

