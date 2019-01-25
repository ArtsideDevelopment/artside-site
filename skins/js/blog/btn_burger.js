let button = document.querySelector('.main__header__btn-burger');
let aside = document.querySelector('aside');
let main = document.querySelector('main');


button.addEventListener('click', function () {
    button.classList.toggle('active');
    if (aside.style.display === 'block') {
        aside.style.display = 'none';
        main.style.width = '100%';
    } else {
        (aside.style.display = 'block')
    }
});


