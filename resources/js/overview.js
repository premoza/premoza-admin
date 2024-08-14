(function () {
    if (typeof overview === 'undefined') return;

    const test1 = document.getElementById("test1").getContext("2d");
    test1.canvas.width = 400; 
    createChart(test1, 
        "line", ["January", "March", "May", "July","September","November"]);

    const test2 = document.getElementById("test2").getContext("2d");
    test2.canvas.width = 400; 
    createChart(test2, "line", ["January", "March", "May", "July","September","November"]);

    const test4 = document.getElementById("test4").getContext("2d");
    test4.canvas.width = 400; 
    createChart(test4, "line", ["January", "March", "May", "July","September","November"]);
    
    // Function to create the cavans chart
    function createChart(ctx, type, labels) {
        new Chart(ctx, {
            type: type,
            data: {
                labels: labels,
                datasets: genDataSets()
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
            },
        });
    }

    // Function to return random datasets
    function genDataSets() {
        return [
            {
                label: generateRandomString(7),
                data: generateRandomIntArray(6, 1, 20),
                backgroundColor: "#7743DB",
                borderColor: "#7743DB",
                borderWidth: 3,
                tension: 0.1,
                fill: false
            },
            {
                label: generateRandomString(7),
                data: generateRandomIntArray(6, 1, 20),
                backgroundColor: "#42895f4",
                borderColor: "#42895f4",
                borderWidth: 3,
                tension: 0.1,
                fill: false
            },
            {
                label: generateRandomString(7),
                data: generateRandomIntArray(6, 1, 20),
                backgroundColor: "#4285f4",
                borderColor: "#4285f4",
                borderWidth: 3,
                tension: 0.1,
                fill: false
            },
        ];
    }

    // Function to generate a random integer array
function generateRandomIntArray(length, min, max) {
    const array = [];
    
    for (let i = 0; i < length; i++) {
      const randomInt = Math.floor(Math.random() * (max - min + 1)) + min;
      array.push(randomInt);
    }
    
    return array;
  }

  // Function to generate a random string of a given length
function generateRandomString(length) {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let result = '';
    
    for (let i = 0; i < length; i++) {
      const randomIndex = Math.floor(Math.random() * characters.length);
      result += characters[randomIndex];
    }
    
    return result;
  }
})();
