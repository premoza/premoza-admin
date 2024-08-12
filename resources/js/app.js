import "./bootstrap";

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

    const sales = document.getElementById("sales").getContext("2d");
    sales.canvas.width = 400;
    sales.canvas.height = 400;
    createChart(sales, "line", ["January", "February", "March", "April", "May"], "Data", [65, 59, 80, 81, 56]);

    const revenue = document.getElementById("revenue").getContext("2d");
    revenue.canvas.width = 400;
    revenue.canvas.height = 400;
    createChart(revenue, "line", ["January", "February", "March", "April", "May"], "Data", [65, 59, 80, 81, 56]);

    const test = document.getElementById("test").getContext("2d");
    test.canvas.width = 400;
    test.canvas.height = 400;
    createChart(test, "line", ["January", "February", "March", "April", "May"], "Data", [65, 59, 80, 81, 56]);

    const test1 = document.getElementById("test1").getContext("2d");
    test1.canvas.width = 400;
    test1.canvas.height = 400;
    createChart(test1, "line", ["January", "February", "March", "April", "May"], "Data", [65, 59, 80, 81, 56]);


    function createChart(ctx, type, labels, label, data) {
        new Chart(ctx, {
            type: type,
            data: {
                labels: labels,
                datasets: [
                    {
                        label: label,
                        data: data,
                        backgroundColor: "#7743DB",
                        borderColor: "#7743DB",
                        borderWidth: 3,
                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
            },
        });
    }
})();
