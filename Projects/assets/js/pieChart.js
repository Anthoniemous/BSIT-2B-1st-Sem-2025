var ctx = document.getElementById('pendingApprovalsChart').getContext('2d');
var pendingApprovalsChart = new Chart(ctx, {
    type: 'pie', 
    data: {
        labels: ['Pending', 'Approved'],
        datasets: [{
            data: [30, 70], 
            backgroundColor: ['white', 'hsl(46, 100%, 50%)'], 
            borderWidth: 0
        }]
    },
    options: {
        responsive: false,
        width: 300,
        height: 300,
        plugins: {
            legend: {
                labels: {
                    position: 'top',
                    color: 'white',
                    font: {
                        size: 12,
                        family: 'Arial',
                        weight: 'bold'
                    }
                }
            },
            tooltip: {
                titleColor: 'orange',
                bodyColor: 'red',
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.label + ': ' + tooltipItem.raw + '%'; 
                    }
                }
            }
        }
    }
});
