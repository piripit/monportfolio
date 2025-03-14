document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".hamburger-menu");
  const menu = document.querySelector(".menu");
  const body = document.body;

  // Toggle menu
  hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("active");
    menu.classList.toggle("active");
    body.style.overflow = menu.classList.contains("active") ? "hidden" : "";
  });

  // Close menu when clicking a link
  const menuLinks = document.querySelectorAll(".menu a");
  menuLinks.forEach((link) => {
    link.addEventListener("click", function () {
      hamburger.classList.remove("active");
      menu.classList.remove("active");
      body.style.overflow = "";
    });
  });

  // Close menu when clicking outside
  document.addEventListener("click", function (event) {
    if (!hamburger.contains(event.target) && !menu.contains(event.target)) {
      hamburger.classList.remove("active");
      menu.classList.remove("active");
      body.style.overflow = "";
    }
  });
});
