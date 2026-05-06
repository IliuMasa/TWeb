const menuBtn = document.getElementById("menuBtn");
const navLinks = document.getElementById("navLinks");
const searchInput = document.getElementById("searchInput");
const filterButtons = document.querySelectorAll(".filter-btn");
const cards = document.querySelectorAll(".card");
const noResults = document.getElementById("noResults");
const topBtn = document.getElementById("topBtn");
const contactForm = document.getElementById("contactForm");
const successMessage = document.getElementById("successMessage");

let currentFilter = "all";

menuBtn.addEventListener("click", () => {
    navLinks.classList.toggle("open");
});

navLinks.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
        navLinks.classList.remove("open");
    });
});

filterButtons.forEach(button => {
    button.addEventListener("click", () => {
        filterButtons.forEach(btn => btn.classList.remove("active"));
        button.classList.add("active");
        currentFilter = button.dataset.filter;
        filterRestaurants();
    });
});

searchInput.addEventListener("input", filterRestaurants);

function filterRestaurants() {
    const searchText = searchInput.value.toLowerCase().trim();
    let visibleCards = 0;

    cards.forEach(card => {
        const category = card.dataset.category;
        const name = card.dataset.name;
        const text = card.textContent.toLowerCase();

        const matchesFilter = currentFilter === "all" || category === currentFilter;
        const matchesSearch = name.includes(searchText) || text.includes(searchText);

        if (matchesFilter && matchesSearch) {
            card.classList.remove("hidden");
            visibleCards++;
        } else {
            card.classList.add("hidden");
        }
    });

    noResults.style.display = visibleCards === 0 ? "block" : "none";
}

window.addEventListener("scroll", () => {
    if (window.scrollY > 450) {
        topBtn.classList.add("show");
    } else {
        topBtn.classList.remove("show");
    }
});

topBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

contactForm.addEventListener("submit", (event) => {
    event.preventDefault();
    successMessage.classList.add("show");
    contactForm.reset();

    setTimeout(() => {
        successMessage.classList.remove("show");
    }, 4000);
});
