var ctx = document.getElementById('adminEngBarChart').getContext('2d');
var projectsBarChart = new Chart(ctx, {
    type: 'bar', 
    data: {
        labels: ['January', 'February', 'March', 'April'], 
        datasets: [{
            label: 'Administrative Engagement',
            data: [50, 20, 60, 80], 
            backgroundColor: 'hsl(0, 100%, 50%)', 
            borderColor: 'hsl(0, 100%, 50%)',
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
});