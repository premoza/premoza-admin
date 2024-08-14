import "./bootstrap";
import "./overview";

(function () {
    const hamBurger = document.querySelector(".toggle-btn");

    const sidebar = document.querySelector("#sidebar");

    function handleSidebar() {
        if (window.innerWidth <= 800) {
            sidebar.classList.remove("expand");
        } else {
            sidebar.classList.add("expand");
        }
    }

    hamBurger.addEventListener("click", function () {
        sidebar.classList.toggle("expand");
        this.classList.toggle("rotate-vertical");
    });

    window.addEventListener("resize", handleSidebar);

    handleSidebar();
})();
