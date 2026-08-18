//
import "./kamo-loader";
const menuButton = document.getElementById("menu-button");
const mobileMenu = document.getElementById("mobile-menu");
const menuClose = document.getElementById("menu-close");

if (menuButton && mobileMenu && menuClose) {
    menuButton.addEventListener("click", () => {
        mobileMenu.classList.remove("hidden");

        document.body.classList.add("overflow-hidden");
    });

    menuClose.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");

        document.body.classList.remove("overflow-hidden");
    });

    // Close menu when a navigation link is clicked

    mobileMenu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
            mobileMenu.classList.add("hidden");

            document.body.classList.remove("overflow-hidden");
        });
    });
}
