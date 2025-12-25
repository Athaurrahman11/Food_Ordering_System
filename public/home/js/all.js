
      const menu = document.getElementById("menu");
      const menubtn = document.getElementById("menubtn");
      const closebtn = document.getElementById("close-btn");

      // Open menu
      menubtn.addEventListener("click", (e) => {
        e.preventDefault();
        menu.classList.remove("-translate-x-full");
      });

      // Close menu
      closebtn.addEventListener("click", (e) => {
        e.preventDefault();
        menu.classList.add("-translate-x-full");
      });
    