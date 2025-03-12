document.addEventListener("DOMContentLoaded", () => {
  // Fonction pour initialiser le thème
  function initTheme() {
    const savedTheme = localStorage.getItem("theme");
    const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

    // Appliquer le thème sauvegardé ou le thème système
    if (savedTheme) {
      document.body.setAttribute("data-theme", savedTheme);
      updateIcon(savedTheme === "dark");
    } else {
      const systemTheme = prefersDarkScheme.matches ? "dark" : "light";
      document.body.setAttribute("data-theme", systemTheme);
      updateIcon(systemTheme === "dark");
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

  // Gestion de la barre de navigation
  let lastScroll = 0;
  const navbar = document.querySelector(".navbar");
  const scrollThreshold = 100;

  function handleScroll() {
    const currentScroll = window.pageYOffset;

    if (currentScroll <= 0) {
      navbar.classList.remove("hidden");
      return;
    }

    if (currentScroll > lastScroll && currentScroll > scrollThreshold) {
      // Scroll vers le bas
      navbar.classList.add("hidden");
    } else {
      // Scroll vers le haut
      navbar.classList.remove("hidden");
    }

    lastScroll = currentScroll;
  }

  // Gérer le clic sur le bouton de thème
  const themeToggle = document.querySelector(".theme-toggle");
  if (themeToggle) {
    themeToggle.addEventListener("click", () => {
      const currentTheme = document.body.getAttribute("data-theme");
      const newTheme = currentTheme === "dark" ? "light" : "dark";

      document.body.setAttribute("data-theme", newTheme);
      localStorage.setItem("theme", newTheme);
      updateIcon(newTheme === "dark");
    });
  }

  // Initialiser le thème
  initTheme();
  window.addEventListener("scroll", handleScroll);

  // Observer pour les animations de défilement
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    },
    {
      threshold: 0.1,
    }
  );

  // Observer tous les éléments avec la classe fade-in
  document.querySelectorAll(".fade-in").forEach((el) => observer.observe(el));
});
