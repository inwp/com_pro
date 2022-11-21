let mode = document.getElementById("mode");
let theme = document.getElementById("theme");
mode.addEventListener("click", () => {
    theme.classList.toggle("dark");
    mode.classList.toggle("white");
});