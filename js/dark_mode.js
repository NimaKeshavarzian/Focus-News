import changeElementCssClass from "./change_el_style";

var isDarkMode = false;
var body = document.body;
var darkModeSwitch = document.querySelector("#darkModeSwitch");

if (localStorage.getItem("isDarkMode") == true) {
    changeTheme();
}

const changeTheme = () => {
    isDarkMode = !isDarkMode;
    localStorage.setItem("isDarkMode", isDarkMode);
    changeElementCssClass(body, ["dark"]);
}

darkModeSwitch.addEventListener("click", changeTheme);