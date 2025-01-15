import "./bootstrap";
// app.js
document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("menuToggle");
    const closeMenu = document.getElementById("closeMenu");
    const navLinks = document.getElementById("navLinks");

    // Open Menu
    menuToggle.addEventListener("click", () => {
        navLinks.classList.add("active");
    });

    // Close Menu
    closeMenu.addEventListener("click", () => {
        navLinks.classList.remove("active");
    });
});
