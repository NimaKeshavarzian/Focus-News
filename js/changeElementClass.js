var menuElem = document.querySelector("#menu");

function showMenuToggle() {
    toggleClass(menuElem, "menuToggle");
    toggleClass(menuElem, "hidden");
}

function toggleClass(elem, className) {
    elem.classList.toggle(className);
}

export { showMenuToggle };