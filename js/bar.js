$(function(){

    //get the bar chart canvas
    var ctx = $("#myChart");
  
    //bar chart data
    var data = {
      labels: regdates,
      datasets: [
        {
          label: "Males",
          data: males,
          backgroundColor: [
            "rgba(220,220,220,0.3)",
            "rgba(220,220,220,0.3)",
            "rgba(220,220,220,0.3)",
            "rgba(220,220,220,0.3)",
            "rgba(220,220,220,0.3)"
          ],
          
          borderWidth: 1
        },
        {
          label: "Females",
          data: females,
          backgroundColor: [
            "rgba(255,255,0,1)",
            "rgba(255,255,0,1)",
            "rgba(255,255,0,1)",
            "rgba(255,255,0,1)",
            "rgba(255,255,0,1)"
          ],
          borderWidth: 1
        }
      ]
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
      type: "bar",
      data: data,
      options: options
    });
  });