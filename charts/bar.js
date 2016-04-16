

AmCharts.ready(function() {


  $("#container").click(function(e) {
    e.preventDefault();
  });


var chart = AmCharts.makeChart("chartdiv", {
    "theme": "black",
    "type": "serial",
    "dataProvider": [{
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



      }],
    "valueAxes": [{
        "title": "Percentage of Repairs",
        "unit":"%",

        "maximum":100,

        "baseValue": 0
    }],

    "titles": [
    		{
    			"text": "What are the top 3 repairs you perform?",
    			"size": 24
    		}
    	],

    "graphs": [{
        "balloonText": "[[category]]:[[value]]%",
        "fillAlphas": 1,
        "lineAlpha": 1,
        "title": "Top Repairs",
        "type": "column",
        "valueField": "percentage",
        "lineThickness": 2,
        "fixedColumnWidth": 50,
        "labelText":"[[value]]%",
        "labelPosition":"inside",
        "lineAlpha":1
    }],

    "fontSize":14,
    "rotate": true,
    "categoryField": "repairtype",
      "columnSpacing": 100,
    "categoryAxis": {
        "gridPosition": "start",

        "position": "left",
        "title":"Repair Type"
    },
    "responsive": {
      "enabled": true,
      "rules": [
        // at 400px wide, we hide legend
        {
          "maxWidth": 768,
          "overrides": {
            "graphs": {
            "labelText":""
            },

          }
        }
      ]
    }

});


var apple = AmCharts.makeChart("apple", {
    "theme": "black",
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
          "unit":"%",

          "maximum":100,

          "baseValue": 0
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
          "labelText":"[[value]]%",
          "labelPosition":"inside"
      }],


      "titles": [
          {
            "text": "What percentage of your repairs are done on Apple devices?",
            "size": 24
          }
        ],

      "fontSize":14,
      "rotate": true,
      "categoryField": "percentage",
        "columnSpacing": 100,
      "categoryAxis": {
          "gridPosition": "start",

          "position": "left",
          "title":"Percentage"
      },
      "responsive": {
        "enabled": true,
        "rules": [
          // at 400px wide, we hide legend
          {
            "maxWidth": 768,
            "overrides": {
              "graphs": {
              "labelText":""
              },

            }
          }
        ]
      }

    });



var pie = AmCharts.makeChart( "pie1", {
  "type": "pie",
  "theme": "black",



  "dataProvider": [{
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



    }],

    "titles": [
        {
          "text": "What percentage of your repairs are done on Samsung devices?",
          "size": 24
        }
      ],


  "titleField": "repairtype",
  "valueField": "percentage",
  "labelRadius": 5,

  "radius": "42%",
  "innerRadius": "60%",
  "labelText": "[[repairtype]]",
  "export": {
    "enabled": true
  }
} );



  });
