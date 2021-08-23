import changeElementCssClass from './change_el_style';

var footerCategories = document.querySelectorAll(".cat-item a");
hideCategories(footerCategories);
hideCategories(footerCategories, "مطالب پیشنهادی");
// Hide System Categories
function hideCategories(elements, categoryContent = "اسلایدر") {
    if (elements.length != 0) {
        elements.forEach(function(category) {
            if (category.textContent == categoryContent) changeElementCssClass(category.parentNode, ["hidden"]);
        })
    }
}