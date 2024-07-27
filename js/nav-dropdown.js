const navBtn = document.getElementById("nav-btn")
const navbar = document.getElementById("navbar")

const handleOpenNavbar = () => {
    if (window.innerWidth < 1280) {
        navbar.classList.toggle("navbar--visible")
    }
}

navBtn.addEventListener("click", handleOpenNavbar)

window.addEventListener("resize", () => {
    if (window.innerWidth >= 1280) {
        navbar.classList.remove("navbar--visible");
    }
});