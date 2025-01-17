import "./bootstrap";
document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("menuToggle");
    const closeMenu = document.getElementById("closeMenu");
    const navLinks = document.getElementById("navLinks");

    menuToggle.addEventListener("click", () => {
        navLinks.classList.add("active");
    });

    closeMenu.addEventListener("click", () => {
        navLinks.classList.remove("active");
    });
});
