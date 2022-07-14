// loader
const loader = document.querySelector(".preloader");
document.body.onload = () => {
    loader.style.opacity = "0";
    setTimeout(() => {
        loader.style.display = "none";
    }, 500);
} 