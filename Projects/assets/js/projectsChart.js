var ctx = document.getElementById('projectsBarChart').getContext('2d');
var projectsBarChart = new Chart(ctx, {
    type: 'bar', 
    data: {
        labels: ['January', 'February', 'March', 'April', 'May'], 
        datasets: [{
            label: 'Total Projects | 2024: Fourth Quarter',
            data: [10, 20, 30, 40, 50], 
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