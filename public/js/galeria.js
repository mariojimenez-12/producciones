const images = document.querySelectorAll('.img');
const containerImg = document.querySelector('.container-img');
const imageContainer = document.querySelector('.img-show');
const copy = document.querySelector('.copy');


images.forEach(image => {
    image.addEventListener('click', ()=> {
        
        addImage(image.getAttribute('src'), image.getAttribute('alt'));
    })
})

const addImage = (src, alt) => {
    containerImg.classList.toggle('move');
    imageContainer.classList.toggle('show');
    imageContainer.src = src;
    copy.innerHTML = alt;
}

containerImg.addEventListener('click', () => {
    containerImg.classList.toggle('move');
    imageContainer.classList.toggle('show');
})