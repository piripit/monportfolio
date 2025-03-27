document.addEventListener("DOMContentLoaded", () => {
  // Fonction pour initialiser le thème
  function initTheme() {
    const savedTheme = localStorage.getItem("theme");
    const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
    const themeToggle = document.getElementById("theme-toggle");

    // Appliquer le thème sauvegardé ou le thème système
    if (savedTheme) {
      document.body.setAttribute("data-theme", savedTheme);

      // Mettre à jour l'icône du bouton
      if (themeToggle) {
        if (savedTheme === "dark") {
          themeToggle.querySelector("i").classList.remove("fa-moon");
          themeToggle.querySelector("i").classList.add("fa-sun");
        } else {
          themeToggle.querySelector("i").classList.remove("fa-sun");
          themeToggle.querySelector("i").classList.add("fa-moon");
        }
      }
    } else {
      // Si pas de thème sauvegardé, utiliser la préférence du système
      const initialTheme = prefersDarkScheme.matches ? "dark" : "light";
      document.body.setAttribute("data-theme", initialTheme);

      // Mettre à jour l'icône du bouton
      if (themeToggle && initialTheme === "dark") {
        themeToggle.querySelector("i").classList.remove("fa-moon");
        themeToggle.querySelector("i").classList.add("fa-sun");
      }
    }

    // Gérer le changement de thème système
    prefersDarkScheme.addEventListener("change", (e) => {
      if (!localStorage.getItem("theme")) {
        const newTheme = e.matches ? "dark" : "light";
        document.body.setAttribute("data-theme", newTheme);
        updateIcon(newTheme === "dark");
      }
    });
  }

  // Fonction pour mettre à jour l'icône du thème
  function updateIcon(isDark) {
    const icon = document.querySelector(".theme-toggle i");
    if (icon) {
      icon.className = isDark ? "fas fa-sun" : "fas fa-moon";
    }
  }

  // Initialiser le thème
  initTheme();

  // Animations au défilement
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    },
    {
      threshold: 0.15,
      rootMargin: "0px 0px -50px 0px",
    }
  );

  // Observer tous les éléments avec les classes d'animation
  document.querySelectorAll(".fade-in, .slide-in").forEach((el) => {
    observer.observe(el);
  });

  // Gérer le changement de thème via le bouton
  const themeToggle = document.getElementById("theme-toggle");
  if (themeToggle) {
    themeToggle.addEventListener("click", () => {
      const currentTheme = document.body.getAttribute("data-theme");
      const newTheme = currentTheme === "dark" ? "light" : "dark";

      // Changer le thème
      document.body.setAttribute("data-theme", newTheme);
      localStorage.setItem("theme", newTheme);

      // Changer l'icône
      if (newTheme === "dark") {
        themeToggle.querySelector("i").classList.remove("fa-moon");
        themeToggle.querySelector("i").classList.add("fa-sun");
      } else {
        themeToggle.querySelector("i").classList.remove("fa-sun");
        themeToggle.querySelector("i").classList.add("fa-moon");
      }
    });
  }
});
