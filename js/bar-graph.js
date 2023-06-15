$(function(){

    //get the bar chart canvas
    var ctx = $("#myChartSide");
  
    //bar chart data
    var data = {
      labels: regdates,
      datasets: [
        {
          label: "Users Registered Per Day",
          data: regPerDay,
          backgroundColor: [
            "rgba(255,255,0,0.3)",
            "rgba(255,255,0,0.3)",
            "rgba(255,255,0,0.3)",
            "rgba(255,255,0,0.3)",
            "rgba(255,255,0,0.3)"
          ],
          borderColor: [
            "rgba(255,255,0,1)",
            "rgba(255,255,0,1)",
            "rgba(255,255,0,1)",
            "rgba(255,255,0,1)",
            "rgba(255,255,0,1)"
          ],
          borderWidth: 1,
          fill: false,
          stepped: true,
        }
      ]
    };
  
    //options
    var options = {
      responsive: true,
      interaction: {
        intersect: false,
        axis: 'x'
      },
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
      type: "line",
      data: data,
      options: options
    });
  });