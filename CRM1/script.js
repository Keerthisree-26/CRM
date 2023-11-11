//side bar
var sidebarOpen=false;
var sidebar= document.getElementById("sidebar");
function openSidebar()
{
    if(!sidebarOpen)
    {
        sidebar.classList.add("sidebar-responsive");
        sidebarOpen=true;
    }
}
function closeSidebar()
{
    if(!sidebarOpen)
    {
        sidebar.classList.remove("sidebar-responsive");
        sidebarOpen =false;
    }
}
//charts
//bar chart
var barChartOptions = {
    series: [
    {
      name: 'Actual',
      data: [
        {
          x: '2011',
          y: 12,
          goals: [
            {
              name: 'Expected',
              value: 14,
              strokeWidth: 2,
              strokeDashArray: 2,
              strokeColor: '#775DD0'
            }
          ]
        },
        {
          x: '2012',
          y: 44,
          goals: [
            {
              name: 'Expected',
              value: 54,
              strokeWidth: 5,
              strokeHeight: 10,
              strokeColor: '#775DD0'
            }
          ]
        },
        {
          x: '2013',
          y: 54,
          goals: [
            {
              name: 'Expected',
              value: 52,
              strokeWidth: 10,
              strokeHeight: 0,
              strokeLineCap: 'round',
              strokeColor: '#775DD0'
            }
          ]
        },
        {
          x: '2014',
          y: 66,
          goals: [
            {
              name: 'Expected',
              value: 61,
              strokeWidth: 10,
              strokeHeight: 0,
              strokeLineCap: 'round',
              strokeColor: '#775DD0'
            }
          ]
        },
        {
          x: '2015',
          y: 81,
          goals: [
            {
              name: 'Expected',
              value: 66,
              strokeWidth: 10,
              strokeHeight: 0,
              strokeLineCap: 'round',
              strokeColor: '#775DD0'
            }
          ]
        },
        {
          x: '2016',
          y: 67,
          goals: [
            {
              name: 'Expected',
              value: 70,
              strokeWidth: 5,
              strokeHeight: 10,
              strokeColor: '#775DD0'
            }
          ]
        }
      ]
    }
  ],
    chart: {
    height: 350,
    type: 'bar'
  },
  plotOptions: {
    bar: {
      horizontal: true,
    }
  },
  colors: ['#00E396'],
  dataLabels: {
    formatter: function(val, opt) {
      const goals =
        opt.w.config.series[opt.seriesIndex].data[opt.dataPointIndex]
          .goals
  
      if (goals && goals.length) {
        return `${val} / ${goals[0].value}`
      }
      return val
    }
  },
  legend: {
    show: true,
    showForSingleSeries: true,
    customLegendItems: ['Actual', 'Expected'],
    markers: {
      fillColors: ['#00E396', '#775DD0']
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
  chart.render();
  /* charts*/
  var areachartOptions = {
    series: [{
    name: 'TEAM A',
    type: 'area',
    data: [44, 55, 31, 47, 31, 43, 26, 41, 31, 47, 33]
  }, {
    name: 'TEAM B',
    type: 'line',
    data: [55, 69, 45, 61, 43, 54, 37, 52, 44, 61, 43]
  }],
    chart: {
    height: 350,
    type: 'line',
  },
  stroke: {
    curve: 'smooth'
  },
  fill: {
    type:'solid',
    opacity: [0.35, 1],
  },
  labels: ['Dec 01', 'Dec 02','Dec 03','Dec 04','Dec 05','Dec 06','Dec 07','Dec 08','Dec 09 ','Dec 10','Dec 11'],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: 'Series A',
      },
    },
    {
      opposite: true,
      title: {
        text: 'Series B',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
    y: {
      formatter: function (y) {
        if(typeof y !== "undefined") {
          return  y.toFixed(0) + " points";
        }
        return y;
      }
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#area-chart"), areachartOptions);
  chart.render();

