import './bootstrap';

const hamBurger = document.querySelector(".toggle-btn");

const sidebar = document.querySelector("#sidebar");

function handleSidebar() {
  if (window.innerWidth <= 750) {
    sidebar.classList.remove("expand");
  } else {
    sidebar.classList.add("expand");
  }
}

hamBurger.addEventListener("click", function () {
  sidebar.classList.toggle("expand");
  this.classList.toggle('rotate-vertical');
});

window.addEventListener("resize", handleSidebar);

handleSidebar();
var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'Data',
                    data: [65, 59, 80, 81, 56],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });