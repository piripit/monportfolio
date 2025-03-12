var typed = new Typed("#textDefile", {
  strings: ["FIATUWO", "Moriel"],
  loop: true,
  backSpeed: 100,
  startDelay: 100,
  typeSpeed: 50,
  showCursor: true,
  cursorChar: "|",
});

function openModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.add("active");
    document.body.style.overflow = "hidden";
  }
}

function closeModal() {
  const modals = document.querySelectorAll(".modal");
  modals.forEach((modal) => {
    modal.classList.remove("active");
  });
  document.body.style.overflow = "";
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
  openModal("cvModal");
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
  contactForm.addEventListener("submit", async function (e) {
    e.preventDefault();

    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.disabled = true;
    submitBtn.textContent = "Envoi en cours...";

    try {
      const formData = new FormData(this);
      const response = await fetch("process_contact.php", {
        method: "POST",
        body: formData,
      });

      if (response.ok) {
        submitBtn.textContent = "Message envoyé !";
        submitBtn.style.backgroundColor = "var(--success-color)";
        this.reset();
      } else {
        throw new Error("Erreur lors de l'envoi");
      }
    } catch (error) {
      submitBtn.textContent = "Erreur d'envoi";
      submitBtn.style.backgroundColor = "var(--error-color)";
    }

    setTimeout(() => {
      submitBtn.disabled = false;
      submitBtn.textContent = originalText;
      submitBtn.style.backgroundColor = "";
    }, 3000);
  });
}

// Gestion du mode sombre
const themeToggle = document.querySelector(".theme-toggle");
if (themeToggle) {
  themeToggle.addEventListener("click", function () {
    document.body.classList.toggle("dark-theme");
    const isDark = document.body.classList.contains("dark-theme");
    localStorage.setItem("theme", isDark ? "dark" : "light");
    themeToggle.querySelector("i").className = isDark
      ? "fas fa-sun"
      : "fas fa-moon";
  });

  // Appliquer le thème sauvegardé
  const savedTheme = localStorage.getItem("theme");
  if (savedTheme === "dark") {
    document.body.classList.add("dark-theme");
    themeToggle.querySelector("i").className = "fas fa-sun";
  }
}

// Gestion de la fermeture des modales
document.addEventListener("click", function (event) {
  if (event.target.classList.contains("modal")) {
    closeModal();
  }
});

document.querySelectorAll(".close").forEach((button) => {
  button.addEventListener("click", closeModal);
});
