var typed = new Typed("#textDefile", {
  strings: ["FIATUWO", "Moriel"],
  loop: 1,
  backSpeed: 100,
  startDelay: 100,
  typeSpeed: 50,
});

function openModal(modalId) {
  document.getElementById(modalId).style.display = "block";
}

function closeModal() {
  document.getElementById("cvModal").style.display = "none";
  document.getElementById("projects-modal").style.display = "none";
}

document.addEventListener("DOMContentLoaded", function () {
  const linkedinBtn = document.getElementById("linkedin-btn");

  linkedinBtn.addEventListener("click", function () {
    window.open(
      "https://www.linkedin.com/in/y-moriel-fiatuwo-51544a225/",
      "_blank"
    );
  });
});
document.getElementById("cvDownloadBtn").addEventListener("click", function () {
  document.getElementById("cvModal").style.display = "block";
});

// Gestion du mode sombre
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
const currentTheme = localStorage.getItem("theme");

if (currentTheme === "dark") {
  document.body.classList.toggle("dark-theme");
} else if (currentTheme === "light") {
  document.body.classList.toggle("light-theme");
}

// Animation au défilement
const observerOptions = {
  root: null,
  rootMargin: "0px",
  threshold: 0.1,
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
    }
  });
}, observerOptions);

document.querySelectorAll(".fade-in").forEach((element) => {
  observer.observe(element);
});

// Gestion du modal CV
const modal = document.getElementById("cvModal");
const cvBtn = document.getElementById("cvDownloadBtn");
const closeBtn = document.querySelector(".close");

cvBtn.onclick = function () {
  modal.style.display = "flex";
};

closeBtn.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// Animation du menu au défilement
let lastScroll = 0;
const header = document.querySelector(".entete");

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;

  if (currentScroll <= 0) {
    header.classList.remove("scroll-up");
    return;
  }

  if (currentScroll > lastScroll && !header.classList.contains("scroll-down")) {
    header.classList.remove("scroll-up");
    header.classList.add("scroll-down");
  } else if (
    currentScroll < lastScroll &&
    header.classList.contains("scroll-down")
  ) {
    header.classList.remove("scroll-down");
    header.classList.add("scroll-up");
  }
  lastScroll = currentScroll;
});

// Smooth scroll pour les liens d'ancrage
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }
  });
});

// Validation du formulaire de contact
const contactForm = document.querySelector(".contact-form");
if (contactForm) {
  contactForm.addEventListener("submit", function (e) {
    e.preventDefault();

    // Ajoutez ici votre logique d'envoi de formulaire
    const formData = new FormData(this);
    console.log("Envoi du formulaire...", Object.fromEntries(formData));

    // Animation de confirmation
    this.classList.add("submitted");
    setTimeout(() => {
      this.classList.remove("submitted");
      this.reset();
    }, 2000);
  });
}
