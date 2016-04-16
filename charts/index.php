
<html>
<head>

    <script src="https://code.jquery.com/jquery-2.2.2.min.js">
    </script>
    <script src="https://www.amcharts.com/lib/3/amcharts.js">
    </script>
    <script src="https://www.amcharts.com/lib/3/serial.js">
    </script>
    <script src="https://www.amcharts.com/lib/3/pie.js">
    </script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js">
    </script>
    <script src="../../amcharts/plugins/responsive/responsive.js">
    </script>
  <script src="http://parall.ax/parallax/js/jspdf.js"></script>
    <link href="bar.css" rel="stylesheet" type="text/css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">



    <script>


    AmCharts.ready(function() {

    var chart = AmCharts.makeChart("chartdiv", {
        "theme": "light",
        "type": "serial",
        "dataProvider": [{
            "repairtype": "iPhone 6 Screen Repair",
            "percentage": 80,
        }, {
            "repairtype": "iPhone 5S Screen Repair",
            "percentage": 76,
        }, {
            "repairtype": "iPhone 5C Screen Repair",
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
        }],
        "valueAxes": [{
            "title": "Percentage of Repairs",
            "unit": "%",
            "maximum": 100,
            "baseValue": 0,
            "showFirstLabel": false,
            "showLastLabel": false,
        }],
        "titles": [{
            "size": 20
        }],
        "graphs": [{
            "balloonText": "[[category]]:[[value]]%",
            "fillAlphas": 1,
            "lineAlpha": 1,
            "title": "Top Repairs",
            "type": "column",
            "valueField": "percentage",
            "lineThickness": 2,
            "fixedColumnWidth": 35,
            "labelText": "[[value]]%",

            "lineAlpha": 1,

        }],
        "fontSize": 14,
        "rotate": true,
        "categoryField": "repairtype",
        "columnSpacing": 100,
        "categoryAxis": {
            "gridPosition": "start",
            "position": "left",
            "title": "Repair Type"
        },
        "responsive": {
            "enabled": true,
            "rules": [
                // at 400px wide, we hide legend
                {
                    "maxWidth": 768,
                    "overrides": {
                        "graphs": {
                            "labelText": "",
                            "categoryBalloonEnabled":false
                        },
                    }
                }
            ]
        }
    });
    var apple = AmCharts.makeChart("apple", {
        "theme": "light",
        "type": "serial",
        "dataProvider": [{
            "percentage": "50%-75%",
            "percentage2": 50
        }, {
            "percentage": "75%-100%",
            "percentage2": 38
        }, {
            "percentage": "25%-50%",
            "percentage2": 7
        }, {
            "percentage": "0%-25%",
            "percentage2": 6
        }],
        "valueAxes": [{
            "title": "Percentage of Repairs",
            "unit": "%",
            "maximum": 100,
            "baseValue": 0,
            "showFirstLabel": false,
            "showLastLabel": false,
        }],
        "graphs": [{
            "balloonText": "[[category]]:[[value]]%",
            "fillAlphas": 1,
            "lineAlpha": 1,
            "title": "Top Repairs",
            "type": "column",
            "valueField": "percentage2",
            "lineThickness": 2,
            "fixedColumnWidth": 50,
            "labelText": "[[value]]%",

        }],
        "titles": [{
            "size": 20
        }],
        "fontSize": 14,
        "rotate": true,
        "categoryField": "percentage",
        "columnSpacing": 50,
        "categoryAxis": {
            "gridPosition": "start",
            "position": "left",
            "title": "Percentage"
        },
        "responsive": {
            "enabled": true,
            "rules": [
                // at 400px wide, we hide legend
                {
                    "maxWidth": 768,
                    "overrides": {
                        "graphs": {
                            "labelText": ""
                        },
                    }
                }
            ]
        }
    });
    var samsung = AmCharts.makeChart("samsung", {
        "theme": "light",
        "type": "serial",
        "dataProvider": [{
            "percentage": "0%-25%",
            "percentage2": 61
        }, {
            "percentage": "25%-50%",
            "percentage2": 33
        }, {
            "percentage": "75%-100%",
            "percentage2": 3
        }, {
            "percentage": "50%-75%",
            "percentage2": 3
        }],
        "valueAxes": [{
            "title": "Percentage of Repairs",
            "unit": "%",
            "maximum": 100,
            "baseValue": 0,
            "showFirstLabel": false,
            "showLastLabel": false,
        }],
        "graphs": [{
            "balloonText": "[[category]]:[[value]]%",
            "fillAlphas": 1,
            "lineAlpha": 1,
            "title": "Top Repairs",
            "type": "column",
            "valueField": "percentage2",
            "lineThickness": 2,
            "fixedColumnWidth": 50,
            "labelText": "[[value]]%",
        }],
        "titles": [{
            "size": 20
        }],
        "fontSize": 14,
        "rotate": true,
        "categoryField": "percentage",
        "columnSpacing": 100,
        "categoryAxis": {
            "gridPosition": "start",
            "position": "left",
            "title": "Percentage"
        },
        "responsive": {
            "enabled": true,
            "rules": [
                // at 400px wide, we hide legend
                {
                    "maxWidth": 768,
                    "overrides": {
                        "graphs": {
                            "labelText": ""
                        },
                    }
                }
            ]
        }

    });


    var partSpend = AmCharts.makeChart("partSpend", {
    "theme": "light",
    "type": "serial",
    "dataProvider": [{
        "percentage": "$1,000-$5,000",
        "percentage2": 36
    }, {
      "percentage": "$0-$1,000",
      "percentage2": 31
    }, {
      "percentage": "$5,000-$10,000",
      "percentage2": 16
    }, {
        "percentage": "$10,000-$20,000",
        "percentage2": 12
    },
    {
    "percentage": "$20,000+",
    "percentage2": 6
    }
    ],
    "valueAxes": [{
        "title": "Percentage of Responses",
        "unit": "%",
        "maximum": 100,
        "baseValue": 0,
        "showFirstLabel": false,
            "showLastLabel": false,
    }],
    "graphs": [{
        "balloonText": "[[category]]:[[value]]%",
        "fillAlphas": 1,
        "lineAlpha": 1,
        "title": "Top Repairs",
        "type": "column",
        "valueField": "percentage2",
        "lineThickness": 2,
        "fixedColumnWidth": 50,
        "labelText": "[[value]]%",


    }],
    "titles": [{
        "size": 20
    }],
    "fontSize": 14,
    "rotate": true,
    "categoryField": "percentage",
    "columnSpacing": 100,
    "categoryAxis": {
        "gridPosition": "start",
        "position": "left",
        "title": "Total Spent"
    },
    "responsive": {
        "enabled": true,
        "rules": [
            // at 400px wide, we hide legend
            {
                "maxWidth": 768,
                "overrides": {
                    "graphs": {
                        "labelText": ""
                    },
                }
            }
        ]
    }
    });


    var glassOnly = AmCharts.makeChart("glassOnly", {
    "theme": "light",
    "type": "serial",
    "dataProvider": [{
        "percentage": "No Glass Only Repairs",
        "percentage2": 56
    }, {
      "percentage": "Samsung",
      "percentage2": 28
    }, {
      "percentage": "Apple",
      "percentage2": 15
    }, {
        "percentage": "Other",
        "percentage2": 2
    }
    ],
    "valueAxes": [{
        "title": "Percentage of Responses",
        "unit": "%",
        "maximum": 100,
        "baseValue": 0,
        "showFirstLabel": false,
            "showLastLabel": false,
    }],
    "graphs": [{
        "balloonText": "[[category]]:[[value]]%",
        "fillAlphas": 1,
        "lineAlpha": 1,
        "title": "Top Repairs",
        "type": "column",
        "valueField": "percentage2",
        "lineThickness": 2,
        "fixedColumnWidth": 50,
        "labelText": "[[value]]%",


    }],
    "titles": [{
        "size": 20
    }],
    "fontSize": 14,
    "rotate": true,
    "categoryField": "percentage",
    "columnSpacing": 100,
    "categoryAxis": {
        "gridPosition": "start",
        "position": "left",
        "title": "Manufacturer"
    },
    "responsive": {
        "enabled": true,
        "rules": [
            // at 400px wide, we hide legend
            {
                "maxWidth": 768,
                "overrides": {
                    "graphs": {
                        "labelText": ""
                    },
                }
            }
        ]
    }
    });


    var quality = AmCharts.makeChart("quality", {
    "theme": "light",
    "type": "serial",
    "dataProvider": [{
        "percentage": "Premium Quality",
        "percentage2": 70
    }, {
      "percentage": "Standard Quality",
      "percentage2": 30
    }
    ],
    "valueAxes": [{
        "title": "Percentage of times chosen",
        "unit": "%",
        "maximum": 100,
        "baseValue": 0,
        "showFirstLabel": false,
            "showLastLabel": false,
    }],
    "graphs": [{
        "balloonText": "[[category]]:[[value]]%",
        "fillAlphas": 1,
        "lineAlpha": 1,
        "title": "Top Repairs",
        "type": "column",
        "valueField": "percentage2",
        "lineThickness": 2,
        "fixedColumnWidth": 50,
        "labelText": "[[value]]%",


    }],
    "titles": [{
        "size": 20
    }],
    "fontSize": 14,
    "rotate": true,
    "categoryField": "percentage",
    "columnSpacing": 100,
    "categoryAxis": {
        "gridPosition": "start",
        "position": "left",
        "title": "Quality"
    },
    "responsive": {
        "enabled": true,
        "rules": [
            // at 400px wide, we hide legend
            {
                "maxWidth": 768,
                "overrides": {
                    "graphs": {
                        "labelText": ""
                    },
                }
            }
        ]
    }
    });

    var tempered = AmCharts.makeChart("tempered", {
    "theme": "light",
    "type": "serial",
    "dataProvider": [{
        "percentage": "10-50",
        "percentage2": 38
    }, {
      "percentage": "0-10",
      "percentage2": 37
    },
    {
      "percentage": "50-100",
      "percentage2": 17
    },
    {
      "percentage": "100-500",
      "percentage2": 7
    },
    {
      "percentage": "500+",
      "percentage2": 2
    }
    ],
    "valueAxes": [{
        "title": "Percentage of Responses",
        "unit": "%",
        "maximum": 100,
        "baseValue": 0,
        "showFirstLabel": false,
            "showLastLabel": false,
    }],
    "graphs": [{
        "balloonText": "[[category]]:[[value]]%",
        "fillAlphas": 1,
        "lineAlpha": 1,
        "title": "Top Repairs",
        "type": "column",
        "valueField": "percentage2",
        "lineThickness": 2,
        "fixedColumnWidth": 50,
        "labelText": "[[value]]%",


    }],
    "titles": [{
        "size": 20
    }],
    "fontSize": 14,
    "rotate": true,
    "categoryField": "percentage",
    "columnSpacing": 100,
    "categoryAxis": {
        "gridPosition": "start",
        "position": "left",
        "title": "Amount of tempereds sold"
    },
    "responsive": {
        "enabled": true,
        "rules": [
            // at 400px wide, we hide legend
            {
                "maxWidth": 768,
                "overrides": {
                    "graphs": {
                        "labelText": ""
                    },
                }
            }
        ]
    }
    });
    var topSupplier = AmCharts.makeChart("topSupplier", {
    "theme": "light",
    "type": "serial",
    "dataProvider": [{
        "repairtype": "Mobile Defenders",
        "percentage": 31,
    }, {
        "repairtype": "eTech Parts",
        "percentage": 16,
    }, {
        "repairtype": "Other",
        "percentage": 15,
    }, {
        "repairtype": "Revamp Wholesale",
        "percentage": 9,
    }, {
        "repairtype": "Wholesale Gadget Parts",
        "percentage": 9,
    }, {
        "repairtype": "iFixit",
        "percentage": 9,
    }, {
        "repairtype": "Mengtor",
        "percentage": 5,
    }, {
        "repairtype": "AnB Components",
        "percentage": 4,
    }, {
        "repairtype": "Phone Parts USA",
        "percentage": 2,
    }, {
        "repairtype": "Mobile Sentrix",
        "percentage": 2,
    }, {
        "repairtype": "Maya Network",
        "percentage": 4,
    }],
    "valueAxes": [{
        "title": "Percentage of responses",
        "unit": "%",
        "maximum": 100,
        "baseValue": 0,
        "showFirstLabel": false,
    "showLastLabel": false,
    }],
    "titles": [{
        "size": 20
    }],
    "graphs": [{
        "balloonText": "[[category]]:[[value]]%",
        "fillAlphas": 1,
        "lineAlpha": 1,
        "title": "Top Repairs",
        "type": "column",
        "valueField": "percentage",
        "lineThickness": 2,
        "fixedColumnWidth": 35,
        "labelText": "[[value]]%",
        "fontFamily":"'PT Sans', 'sans-serif",
        "lineAlpha": 1,

    }],
    "fontSize": 14,
    "rotate": true,
    "categoryField": "repairtype",
    "columnSpacing": 100,
    "categoryAxis": {
        "gridPosition": "start",
        "position": "left",
        "title": "Supplier"
    },
    "responsive": {
        "enabled": true,
        "rules": [
            // at 400px wide, we hide legend
            {
                "maxWidth": 768,
                "overrides": {
                    "graphs": {
                        "labelText": "",
                        "categoryBalloonEnabled":false
                    },
                }
            }
        ]
    }
    });

    var secondSupplier = AmCharts.makeChart("secondSupplier", {
    "theme": "light",
    "type": "serial",
    "dataProvider": [{
        "repairtype": "Mobile Defenders",
        "percentage": 16,
    },
    {
        "repairtype": "eTech Parts",
        "percentage": 16,
    },

     {
        "repairtype": "Other",
        "percentage": 15,
    }, {
        "repairtype": "Wholesale Gadget Parts",
        "percentage": 15,
    }, {
        "repairtype": "Revamp Wholesale",
        "percentage": 11,
    }, {
        "repairtype": "iFixit",
        "percentage": 10,
    }, {
        "repairtype": "Mengtor",
        "percentage": 5,
    }, {
        "repairtype": "Phone Parts USA",
        "percentage": 5,
    }, {
        "repairtype": "AnB Components",
        "percentage": 4,
    }, {
        "repairtype": "Maya Network",
        "percentage": 3,
    }, {
        "repairtype": "Mobile Sentrix",
        "percentage": 1,
    }],
    "valueAxes": [{
        "title": "Percentage of responses",
        "unit": "%",
        "maximum": 100,
        "baseValue": 0,
        "showFirstLabel": false,
    "showLastLabel": false,
    }],
    "titles": [{
        "size": 20
    }],
    "graphs": [{
        "balloonText": "[[category]]:[[value]]%",
        "fillAlphas": 1,
        "lineAlpha": 1,
        "title": "Top Repairs",
        "type": "column",
        "valueField": "percentage",
        "lineThickness": 2,
        "fixedColumnWidth": 35,
        "labelText": "[[value]]%",
        "fontFamily":"'PT Sans', 'sans-serif",
        "lineAlpha": 1,

    }],
    "fontSize": 14,
    "rotate": true,
    "categoryField": "repairtype",
    "columnSpacing": 100,
    "categoryAxis": {
        "gridPosition": "start",
        "position": "left",
        "title": "Supplier"
    },
    "responsive": {
        "enabled": true,
        "rules": [
            // at 400px wide, we hide legend
            {
                "maxWidth": 768,
                "overrides": {
                    "graphs": {
                        "labelText": "",
                        "categoryBalloonEnabled":false
                    },
                }
            }
        ]
    }
    });
    var thirdSupplier = AmCharts.makeChart("thirdSupplier", {
    "theme": "light",
    "type": "serial",
    "dataProvider": [{
        "repairtype": "Other",
        "percentage": 19,
    },
    {
        "repairtype": "iFixit",
        "percentage": 15,
    },

     {
        "repairtype": "Wholesale Gadget Parts",
        "percentage": 13,
    }, {
        "repairtype": "Mobile Defenders",
        "percentage": 13,
    },
    {
        "repairtype": "eTech Parts",
        "percentage": 11,
    },
     {
        "repairtype": "Phone Parts USA",
        "percentage": 8,
    }, {
        "repairtype": "Revamp Wholesale",
        "percentage": 8,
    }, {
        "repairtype": "Mengtor",
        "percentage": 6,
    }, {
        "repairtype": "AnB Components",
        "percentage": 4,
    }, {
        "repairtype": "Maya Network",
        "percentage": 2,
    }, {
        "repairtype": "Mobile Sentrix",
        "percentage": 2,
    }],
    "valueAxes": [{
        "title": "Percentage of responses",
        "unit": "%",
        "maximum": 100,
        "baseValue": 0,
        "showFirstLabel": false,
    "showLastLabel": false,
    }],
    "titles": [{
        "size": 20
    }],
    "graphs": [{
        "balloonText": "[[category]]:[[value]]%",
        "fillAlphas": 1,
        "lineAlpha": 1,
        "title": "Top Repairs",
        "type": "column",
        "valueField": "percentage",
        "lineThickness": 2,
        "fixedColumnWidth": 35,
        "labelText": "[[value]]%",
        "fontFamily":"'PT Sans', 'sans-serif",
        "lineAlpha": 1,

    }],
    "fontSize": 14,
    "rotate": true,
    "categoryField": "repairtype",
    "columnSpacing": 100,
    "categoryAxis": {
        "gridPosition": "start",
        "position": "left",
        "title": "Supplier"
    },
    "responsive": {
        "enabled": true,
        "rules": [
            // at 400px wide, we hide legend
            {
                "maxWidth": 768,
                "overrides": {
                    "graphs": {
                        "labelText": "",
                        "categoryBalloonEnabled":false
                    },
                }
            }
        ]
    }
    });


    var monthlySales = AmCharts.makeChart("monthlySales", {
    "theme": "light",
    "type": "serial",
    "dataProvider": [{
        "percentage": "$1,000-$5,000",
        "percentage2": 36
    }, {
      "percentage": "$0-$1,000",
      "percentage2": 31
    }, {
      "percentage": "$5,000-$10,000",
      "percentage2": 16
    }, {
        "percentage": "$10,000-$20,000",
        "percentage2": 12
    },
    {
    "percentage": "$20,000+",
    "percentage2": 6
    }
    ],
    "valueAxes": [{
        "title": "Percentage of responses",
        "unit": "%",
        "maximum": 100,
        "baseValue": 0,
        "showFirstLabel": false,
            "showLastLabel": false,
    }],
    "graphs": [{
        "balloonText": "[[category]]:[[value]]%",
        "fillAlphas": 1,
        "lineAlpha": 1,
        "title": "Top Repairs",
        "type": "column",
        "valueField": "percentage2",
        "lineThickness": 2,
        "fixedColumnWidth": 50,
        "labelText": "[[value]]%",


    }],
    "titles": [{
        "size": 20
    }],
    "fontSize": 14,
    "rotate": true,
    "categoryField": "percentage",
    "columnSpacing": 100,
    "categoryAxis": {
        "gridPosition": "start",
        "position": "left",
        "title": "Sales per Month"
    },
    "responsive": {
        "enabled": true,
        "rules": [
            // at 400px wide, we hide legend
            {
                "maxWidth": 768,
                "overrides": {
                    "graphs": {
                        "labelText": ""
                    },
                }
            }
        ]
    }
    });



    var helpYou = AmCharts.makeChart("helpYou", {
    "theme": "light",
    "type": "serial",
    "dataProvider": [{
        "percentage": "Higher Quality Parts",
        "percentage2": 67
    }, {
      "percentage": "Faster Ship Times",
      "percentage2": 38
    }, {
      "percentage": "Better Returns System",
      "percentage2": 34
    }, {
        "percentage": "Streamlined Online ordering",
        "percentage2": 18
    },
    {
    "percentage": "Better Customer Service",
    "percentage2": 15
    },{
    "percentage": "Other",
    "percentage2": 10
    }

    ],
    "valueAxes": [{
        "title": "Percentage of Responses",
        "unit": "%",
        "maximum": 100,
        "baseValue": 0,
        "showFirstLabel": false,
            "showLastLabel": false,
    }],
    "graphs": [{
        "balloonText": "[[category]]:[[value]]%",
        "fillAlphas": 1,
        "lineAlpha": 1,
        "title": "Top Repairs",
        "type": "column",
        "valueField": "percentage2",
        "lineThickness": 2,
        "fixedColumnWidth": 50,
        "labelText": "[[value]]%",


    }],
    "titles": [{
        "size": 20
    }],
    "fontSize": 14,
    "rotate": true,
    "categoryField": "percentage",
    "columnSpacing": 100,
    "categoryAxis": {
        "gridPosition": "start",
        "position": "left",
        "title": "Response"
    },
    "responsive": {
        "enabled": true,
        "rules": [
            // at 400px wide, we hide legend
            {
                "maxWidth": 768,
                "overrides": {
                    "graphs": {
                        "labelText": ""
                    },
                }
            }
        ]
    }
    });

    });


    </script>




    <title>Mobile Repair Survey Results</title>
</head>
<body>

    <div id="container">

<div id ="title">Thank you for taking the time to take this Mobile Repair Survey!
The results have been compiled below. We hope this provides insight into the mobile repair industry!
</div>
        <div id="chartdiv"></div>
        <div id="apple"></div>
        <div id="samsung"></div>
        <div id="partSpend"></div>
        <div id="glassOnly"></div>
        <div id="quality"></div>
        <div id="tempered"></div>
        <div id="topSupplier"></div>
        <div id="secondSupplier"></div>
        <div id="thirdSupplier"></div>
        <div id="monthlySales"></div>
        <div id="helpYou"></div>

    </div>

</body>
</html>
