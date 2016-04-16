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
  		"repairtype": "battery Replacement",
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


    var categoryAxis = chart.categoryAxis;

    categoryAxis.autoGridCount  = false;
    categoryAxis.gridCount = chartData.length;
    categoryAxis.gridPosition = "start";
    categoryAxis.labelRotation = 60;
    graph.fillAlphas = 0.7;
    chart.angle = 30;
    chart.depth3D = 15;
    graph.balloonText = "[[category]]: <b>[[value]]%</b>";

    chart.write('chartdiv');


});
