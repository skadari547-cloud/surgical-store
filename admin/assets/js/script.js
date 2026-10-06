document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.getElementById("mobileMenuBtn");
  const sidebar = document.querySelector(".sidebar");
  const overlay = document.querySelector(".sidebar-overlay");

  if (menuButton && sidebar) {
    menuButton.addEventListener("click", function () {
      sidebar.classList.toggle("show");

      if (overlay) {
        overlay.classList.toggle("show");
      }
    });
  }

  if (overlay) {
    overlay.addEventListener("click", function () {
      sidebar.classList.remove("show");
      overlay.classList.remove("show");
    });
  }

  // Close sidebar when clicking a menu item on mobile

  const sidebarLinks = document.querySelectorAll(".sidebar-link");

  sidebarLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      if (window.innerWidth <= 991) {
        sidebar.classList.remove("show");

        if (overlay) {
          overlay.classList.remove("show");
        }
      }
    });
  });
});
