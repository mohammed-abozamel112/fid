import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.start();

window.onscroll = function () {
    const mainNav = document.getElementById("roto");
    // const upbtn = document.getElementById("upBtn");
    if (mainNav) {
        if (window.pageYOffset > 1) {
            mainNav.classList.add("active");
            // upbtn.classList.add("active");
        } else {
            mainNav.classList.remove("active");
            // upbtn.classList.remove("active");
        }
    }
};

// header background change on scroll
window.addEventListener("scroll", function () {
    const header = document.querySelector("nav");
    if (!header) return;
    if (window.scrollY > 50) {
        header.classList.add("glasseff", "shadow");
    } else {
        header.classList.remove("glasseff", "shadow");
    }
});

/* hero */
// Function to add or remove the 'scrolled' class based on scroll position
function handleScroll() {
    const scrollPosition = window.scrollY;
    const heroElements = document.querySelectorAll(".hero, .content");

    // Add 'scrolled' class if the user scrolls down past a certain point (e.g., 50px)
    if (scrollPosition > 50) {
        heroElements.forEach((target) => {
            target.classList.add("scrolled");
        });
    } else {
        heroElements.forEach((target) => {
            target.classList.remove("scrolled");
        });
    }
}

// Initial check when the page loads
document.addEventListener("DOMContentLoaded", () => {
    handleScroll();
});

// Listen for all scrolling events
window.addEventListener("scroll", handleScroll, { passive: true });

// Listen for clicks on nav items (this now just allows the default behavior)
document.querySelectorAll(".nav-scroll-trigger").forEach((link) => {
    link.addEventListener("click", () => {
        // The scroll event listener will handle adding the 'scrolled' class automatically
        // as the page scrolls to the new section.
    });
});

// Event listener for wheel (desktop) to unscroll the hero
window.addEventListener("wheel", (e) => {
    if (document.querySelector(".hero.scrolled")) {
        if (window.scrollY === 0 && e.deltaY < 0) {
            // Scrolling up and at the top
            document.querySelectorAll(".hero, .content").forEach((target) => {
                target.classList.remove("scrolled");
            });
        }
    }
});

// New: Touch event listeners for un-scrolling the hero
let windowTouchstartY = 0;
let windowTouchendY = 0;

window.addEventListener(
    "touchstart",
    (e) => {
        windowTouchstartY = e.changedTouches[0].screenY;
    },
    { passive: true }
);

window.addEventListener("touchend", (e) => {
    windowTouchendY = e.changedTouches[0].screenY;

    if (document.querySelector(".hero.scrolled")) {
        // If the hero is scrolled away and user swipes down near the top of the page
        // This simulates pulling the hero back into view.
        if (window.scrollY <= 10 && windowTouchendY > windowTouchstartY) {
            // Swiping down
            document.querySelectorAll(".hero, .content").forEach((target) => {
                target.classList.remove("scrolled");
            });
        }
    }
});

/* hero */

/*  */
/*  */
