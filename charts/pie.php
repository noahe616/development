<!DOCTYPE html>
<html>
	<head>
		<title>pie-chart test | amCharts</title>
		<meta name="description" content="chart created using amCharts live editor" />

		<!-- amCharts custom font -->
		<link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>

		<!-- amCharts javascript sources -->
		<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
		<script type="text/javascript" src="http://cdn.amcharts.com/lib/3/pie.js"></script>
		<script type="text/javascript" src="http://www.amcharts.com/lib/3/themes/chalk.js"></script>

		<!-- amCharts javascript code -->
		<script type="text/javascript">
			AmCharts.makeChart("chartdiv",
				{
					"type": "pie",
					"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
					"titleField": "country",
					"valueField": "litres",
					"fontSize": 12,
					"theme": "chalk",
					"allLabels": [],
					"balloon": {},
					"titles": [],
					"dataProvider": [
						{
							"country": "Czech Republic",
							"litres": "356.9"
						},
						{
							"country": "Ireland",
							"litres": 131.1
						},
						{
							"country": "Germany",
							"litres": 115.8
						},
						{
							"country": "Australia",
							"litres": 109.9
						},
						{
							"country": "Austria",
							"litres": 108.3
						},
						{
							"country": "UK",
							"litres": 65
						},
						{
							"country": "Belgium",
							"litres": "20"
						}
					]
				}
			);
		</script>
	</head>
	<body>
		<div id="chartdiv" style="width: 100%; height: 400px; background-color: #282828;" ></div>
	</body>
</html>
