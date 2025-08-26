import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.start();

/* ON SCROLL HEADER Nav bg-[#a31621] */
window.addEventListener("scroll", function () {
    const header = document.querySelector("header nav");
    const nav = document.querySelector("header nav");
    const links = nav.querySelectorAll("a");
    if (window.scrollY > 100) {
        nav.classList.add("glasseff-scroll");
        /* make width 80%  */
        nav.classList.add("w-[80%]");

        nav.classList.remove("w-full");

        nav.classList.remove("bg-transparent");
    } else {
        nav.classList.remove("glasseff-scroll");
        nav.classList.remove("w-[80%]");

        nav.classList.add("w-full");
        nav.classList.add("bg-transparent");
    }
});

// AJAX Service Filtering
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const tagsContainer = document.getElementById("tags-container");
    const loadingSpinner = document.getElementById("loading-spinner");

    // Get current language from URL
    const lang = window.location.pathname.split("/")[1];

    // Add click event listeners to filter buttons
    filterButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const filter = this.dataset.filter;
            const url =
                filter === "all"
                    ? `/${lang}/services/filter`
                    : `/${lang}/services/filter?filter=${filter}`;

            // Show loading spinner
            loadingSpinner.classList.remove("hidden");
            tagsContainer.classList.add("opacity-50");

            // Update active button styles
            filterButtons.forEach((btn) => {
                btn.classList.remove("bg-[#A31621]", "text-white");
                btn.classList.add("bg-[#A31621]/10", "text-[#A31621]");
            });
            this.classList.remove("bg-[#A31621]/10", "text-[#A31621]");
            this.classList.add("bg-[#A31621]", "text-white");

            // Make AJAX request
            fetch(url, {
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    Accept: "application/json",
                    "X-CSRF-TOKEN": document.querySelector(
                        'meta[name="csrf-token"]'
                    ).content,
                },
            })
                .then((response) => response.json())
                .then((data) => {
                    // Update the tags container with new content
                    tagsContainer.innerHTML = data.html;

                    // Hide loading spinner
                    loadingSpinner.classList.add("hidden");
                    tagsContainer.classList.remove("opacity-50");

                    // Smooth scroll to top
                    window.scrollTo({ top: 0, behavior: "smooth" });
                })
                .catch((error) => {
                    console.error("Error:", error);
                    loadingSpinner.classList.add("hidden");
                    tagsContainer.classList.remove("opacity-50");
                });
        });
    });
});
const stack = document.querySelector("#about .stack");
const cards = Array.from(stack.children)
    .reverse()
    .filter((child) => child.classList.contains("pictures"));

cards.forEach((card) => stack.appendChild(card));

function moveCard() {
    const lastCard = stack.lastElementChild;
    if (lastCard.classList.contains("pictures")) {
        lastCard.classList.add("swap");

        setTimeout(() => {
            lastCard.classList.remove("swap");
            stack.insertBefore(lastCard, stack.firstElementChild);
        }, 1200);
    }
}

let autoplayInterval = setInterval(moveCard, 4000);

stack.addEventListener("click", function (e) {
    const card = e.target.closest(".pictures");
    if (card && card === stack.lastElementChild) {
        card.classList.add("swap");

        setTimeout(() => {
            card.classList.remove("swap");
            stack.insertBefore(card, stack.firstElementChild);
        }, 1200);
    }
});
