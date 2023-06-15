$(function(){

    //get the bar chart canvas
    var ctx = $("#myChartDonut");
  
    //bar chart data
    var data = {
      labels:  regdates,
      datasets: [
        {
          data: [10, 20, 15, 5, 50],
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
          ],
        },
      ],
    };
  
    //options
    var options = {
      responsive: true,
      title: {
        display: true,
        position: "top",
        text: "Bar Graph",
        fontSize: 18,
        fontColor: "#111"
      },
      legend: {
        display: true,
        position: "bottom",
        labels: {
          fontColor: "#333",
          fontSize: 16
        }
      },
      scales: {
        yAxes: [{
          ticks: {
            min: 0
          }
        }]
      }
    };
  
    //create Chart class object
    var chart = new Chart(ctx, {
      type: "doughnut",
      data: data,
      options: options
    });
  });