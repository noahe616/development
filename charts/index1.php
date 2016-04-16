<html>
<head>


  <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
   <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
  <script src="https://www.amcharts.com/lib/3/serial.js"></script>
  <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<!--  <script src="chart.js" type="text/javascript"></script>-->
<!--  <link rel="stylesheet" type="text/css" href="chart.css">-->
<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>


body{
font-family: 'PT Sans', sans-serif;
}


#container{

width:100%;

}

#topRepair,#appleRepair,#samsungRepair{

width:100%;
height:100%;
margin:0% auto;


}

h1
{

text-align: center;

}

p
{

  text-align: center;
}

</style>


<script>




AmCharts.ready(function() {
  $("#container").click(function(e) {
    e.preventDefault();
  });


  var chartData = [{
      "repairtype": "iPhone 6 Screen Repair",
      "percentage": 80,

    }, {
      "repairtype": "iPhone 5S Screen Repair",
      "percentage": 76,

    }, {
      "repairtype": "iphone 5C Screen Repair",
      "percentage": 66,

    }, {
      "repairtype": "iPad 2/3/4 Screen Repair ",
      "percentage": 21,

    }, {
      "repairtype": "iPhone 5 Screen Repair",
      "percentage": 20,

    }, {
      "repairtype": "iPhone 6 Plus Screen Repair",
      "percentage": 20,

    }, {
      "repairtype": "Battery Replacement",
      "percentage": 12,

    }, {
      "repairtype": "Galaxy S4 Screen Repair",
      "percentage": 11,

    }, {
      "repairtype": "LG G2 / G3 Screen Repair",
      "percentage": 6,

    }, {
      "repairtype": "iPhone 4S Screen Repair",
      "percentage": 6,

    }, {
      "repairtype": "Other",
      "percentage": 4,



    }];

    var chart = new AmCharts.AmSerialChart();
    chart.dataProvider = chartData;
    chart.categoryField = "repairtype";
    var graph = new AmCharts.AmGraph();
    graph.valueField = "percentage";
    graph.fillColors = "#ff0000";
    graph.lineColor = "#ff0000";
    graph.type = "column";
    chart.fontSize = "14";
    chart.fontFamily = "PT Sans";
    chart.addGraph(graph);
    chart.responsive= {
    "enabled": true,
    "rules": [
      // at 400px wide, we hide legend
      {
        "maxWidth": 1368,
        "overrides": {
          "categoryAxis": {
            "labelRotation": 90
          }
        }
      }
    ]
  }

    var categoryAxis = chart.categoryAxis;

    categoryAxis.autoGridCount  = false;
      categoryAxis.parseDates  = false;
    categoryAxis.gridCount = chartData.length;
    categoryAxis.gridPosition = "start";
    categoryAxis.labelRotation = 45;

    graph.fillAlphas = 0.7;
    chart.angle = 30;
    chart.depth3D = 15;
    graph.balloonText = "[[category]]: <b>[[value]]%</b>";

    chart.write('topRepair');


  });



  </script>
  <script>
  AmCharts.ready(function() {
    $("#container").click(function(e) {
      e.preventDefault();
    });


    var chartData2 = [{
        "repairtype": "iPhone 6 Screen Repair",
        "percentage": 80,

      }, {
        "repairtype": "iPhone 5S Screen Repair",
        "percentage": 76,

      }, {
        "repairtype": "iphone 5C Screen Repair",
        "percentage": 66,

      }, {
        "repairtype": "iPad 2/3/4 Screen Repair ",
        "percentage": 21,

      }, {
        "repairtype": "iPhone 5 Screen Repair",
        "percentage": 20,

      }, {
        "repairtype": "iPhone 6 Plus Screen Repair",
        "percentage": 20,

      }, {
        "repairtype": "Battery Replacement",
        "percentage": 12,

      }, {
        "repairtype": "Galaxy S4 Screen Repair",
        "percentage": 11,

      }, {
        "repairtype": "LG G2 / G3 Screen Repair",
        "percentage": 6,

      }, {
        "repairtype": "iPhone 4S Screen Repair",
        "percentage": 6,

      }, {
        "repairtype": "Other",
        "percentage": 4,



      }];

      var chart2 = new AmCharts.AmSerialChart();
      chart2.dataProvider = chartData2;
      chart2.categoryField = "repairtype";
      var graph2 = new AmCharts.AmGraph();
      graph2.valueField = "percentage";
      graph2.fillColors = "#ff0000";
      graph2.lineColor = "#ff0000";
      graph2.type = "column";
      chart2.fontSize = "14";
      chart2.fontFamily = "PT Sans";
      chart2.addGraph(graph2);
      chart2.responsive= {
      "enabled": true,
      "rules": [
        // at 400px wide, we hide legend
        {
          "maxWidth": 1368,
          "overrides": {
            "categoryAxis": {
              "labelRotation": 90
            }
          }
        }
      ]
    }

      var categoryAxis2 = chart2.categoryAxis;

      categoryAxis2.autoGridCount  = false;
        categoryAxis2.parseDates  = false;
      categoryAxis2.gridCount = chartData2.length;
      categoryAxis2.gridPosition = "start";
      categoryAxis2.labelRotation = 45;

      graph2.fillAlphas = 0.7;
      chart2.angle = 30;
      chart2.depth3D = 15;
      graph2.balloonText = "[[category]]: <b>[[value]]%</b>";

      chart2.write('appleRepair');


    });



    </script>


    <script>
    AmCharts.ready(function() {
      $("#container").click(function(e) {
        e.preventDefault();
      });


      var chartData2 = [{
          "repairtype": "iPhone 6 Screen Repair",
          "percentage": 80,

        }, {
          "repairtype": "iPhone 5S Screen Repair",
          "percentage": 76,

        }, {
          "repairtype": "iphone 5C Screen Repair",
          "percentage": 66,

        }, {
          "repairtype": "iPad 2/3/4 Screen Repair ",
          "percentage": 21,

        }, {
          "repairtype": "iPhone 5 Screen Repair",
          "percentage": 20,

        }, {
          "repairtype": "iPhone 6 Plus Screen Repair",
          "percentage": 20,

        }, {
          "repairtype": "Battery Replacement",
          "percentage": 12,

        }, {
          "repairtype": "Galaxy S4 Screen Repair",
          "percentage": 11,

        }, {
          "repairtype": "LG G2 / G3 Screen Repair",
          "percentage": 6,

        }, {
          "repairtype": "iPhone 4S Screen Repair",
          "percentage": 6,

        }, {
          "repairtype": "Other",
          "percentage": 4,



        }];

        var chart2 = new AmCharts.AmSerialChart();
        chart2.dataProvider = chartData2;
        chart2.categoryField = "repairtype";
        var graph2 = new AmCharts.AmGraph();
        graph2.valueField = "percentage";
        graph2.fillColors = "#ff0000";
        graph2.lineColor = "#ff0000";
        graph2.type = "column";
        chart2.fontSize = "14";
        chart2.fontFamily = "PT Sans";
        chart2.addGraph(graph2);
        chart2.responsive= {
        "enabled": true,
        "rules": [
          // at 400px wide, we hide legend
          {
            "maxWidth": 1368,
            "overrides": {
              "categoryAxis": {
                "labelRotation": 90
              }
            }
          }
        ]
      }

        var categoryAxis2 = chart2.categoryAxis;

        categoryAxis2.autoGridCount  = false;
          categoryAxis2.parseDates  = false;
        categoryAxis2.gridCount = chartData2.length;
        categoryAxis2.gridPosition = "start";
        categoryAxis2.labelRotation = 45;

        graph2.fillAlphas = 0.7;
        chart2.angle = 30;
        chart2.depth3D = 15;
        graph2.balloonText = "[[category]]: <b>[[value]]%</b>";

        chart2.write('samsungRepair');


      });



      </script>
</head>


<body>

<div id ="container">

  <h1>What are the top 3 repairs you perform?</h1>
    <div id="topRepair"></div>
    <p>asdfdksjfdskfjds</p>

    <h1>What are the top 3 repairs you perform?</h1>
      <div id="appleRepair"></div>
      <p>asdfdksjfdskfjds</p>


      <h1>What are the top 3 repairs you perform?</h1>
        <div id="samsungRepair"></div>
        <p>asdfdksjfdskfjds</p>


</div>


</body>
</html>
