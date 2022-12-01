const sizeButtons = document.querySelectorAll('.size-button');
let checkedButton = 0;

sizeButtons.forEach((item, i) => {
    item.addEventListener('click', () =>{
        sizeButtons[checkedButton].classList.remove('check');
        item.classList.add('check');
        checkedButton = i;
    })
})