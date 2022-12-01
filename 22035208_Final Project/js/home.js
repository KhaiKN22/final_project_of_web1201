const productContainers = [...document.querySelectorAll('.product-container')];
const previousButton = [...document.querySelectorAll('.previous-button')];
const nextButton = [...document.querySelectorAll('.next-button')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    previousButton[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })

    nextButton[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })
})