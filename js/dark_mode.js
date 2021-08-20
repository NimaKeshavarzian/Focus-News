import changeElementCssClass from "./change_el_style";

// dom variables
const body = document.body;
const darkModeSwitch = document.querySelector("#darkModeSwitch");
// system Variables
var isDarkMode = false; // Dark Mode check variable

// change theme function
function changeTheme() {
    isDarkMode = !isDarkMode;
    localStorage.setItem("is-dark-mode", isDarkMode);
    changeElementCssClass(body, ["dark"]);
    console.log("Dark Mode function");
}

// event listener 
darkModeSwitch.addEventListener("click", changeTheme);

// check mode from local storage
if (localStorage.getItem("is-dark-mode") == "true") {
    changeTheme();
}