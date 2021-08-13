const changeElementCssClass = (element, elementClasses) => {
    if (Array.isArray(elementClasses)) {
        elementClasses.forEach(elementClass => {
            element.classList.toggle(elementClass);
        })
    }
}

// Show Menu: 
var menuElement = document.querySelector("#menuContainer");
var menuTransmitter = document.querySelector("#menuIcon");
var menuClasses = ["hidden", "showMenuAnimation"];
menuTransmitter.addEventListener("click", function() {
    changeElementCssClass(menuElement, menuClasses)
})

// SHow SearchBox:
var searchBoxElement = document.querySelector("#searchBox");
var searchBoxTransmitter = document.querySelector("#searchIcon");
var searchBoxClasses = ["hidden", "searchBoxAnimation"];
searchBoxTransmitter.addEventListener("click", function() {
        changeElementCssClass(searchBoxElement, searchBoxClasses);
    })
    // Close SearchBox:
var closeSearchBoxBtn = document.querySelector("#closeSearchBoxBtn");
closeSearchBoxBtn.addEventListener("click", function() {
    changeElementCssClass(searchBoxElement, searchBoxClasses);
});

export default changeElementCssClass;