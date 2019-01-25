let modal = document.querySelector('.modal');
let overflow = document.createElement('div');
let btn = document.querySelector('.main__header__nav__button');

function openWin() {

    overflow.className = "overflow";
    document.body.appendChild(overflow);
    modal.style.top = "20%";
    let height = modal.offsetHeight;

}

if (!Element.prototype.remove) {
    Element.prototype.remove = function remove() {
        if (this.parentNode) {
            this.parentNode.removeChild(this);
        }
    };
}

overflow.onclick = function () {
    modal.style.top = "-100%";
    overflow.remove();
};

btn.addEventListener('click',openWin);

