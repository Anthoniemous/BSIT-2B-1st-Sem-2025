var ctx = document.getElementById('usersBarChart').getContext('2d');
var projectsBarChart = new Chart(ctx, {
    type: 'bar', 
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'], 
        datasets: [{
            label: 'Total Users | 2025',
            data: [10, 100, 30, 40, 50, 500, 378], 
            backgroundColor: 'hsl(118, 95%, 32%)', 
            borderColor: 'hsl(118, 95%, 32%)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            x: {
                ticks: {
                    color: 'black',  
                    font: {
                        size: 10, 
                        family: 'Arial'
                    }
                }
            },
            y: {
                ticks: {
                    color: 'black',
                    font: {
                        size: 10, 
                        family: 'Arial'
                    }
                }
            }
        },
        plugins: {
            legend: {
                labels: {
                    color: 'black',
                    font: {
                        weight: 'bold'
                    }
                }
            },
            tooltip: {
                titleColor: 'orange', 
                bodyColor: 'red',
            },
            datalabels: {
                color: 'black',
                font: {
                    size: 10,
                    family: 'Arial'
                }
            }
        }
    }
})