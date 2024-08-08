let optionsVisitorsProfile = {
  series: [70, 30],
  labels: ["option 1", "option 2"],
  colors: ["#0e1b4d", "#1bbca3"],
  chart: {
    type: "donut",
    width: "100%",
    height: "350px",
  },
  legend: {
    position: "right",
  },
  plotOptions: {
    pie: {
      donut: {
        size: "30%",
      },
    },
  },
}

var barOptions = {
  series: [
    {
      name: "checkbox 1",
      data: [44],
    },
    {
      name: "checkbox 2",
      data: [76],
    },
    {
      name: "checkbox 3",
      data: [35],
    },
  ],
  chart: {
    type: "bar",
    height: 350,
  },
  plotOptions: {
    bar: {
      horizontal: true,
      columnWidth: "55%",
      endingShape: "rounded",
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    show: true,
    width: 2,
    colors: ["transparent"],
  },
  xaxis: {
    categories: [""],
  },
  yaxis: {
    title: {
      text: "",
    },
  },
  fill: {
    opacity: 1,
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return val + " responden"
      },
    },
  },
}
var bar = new ApexCharts(document.querySelector("#bar"), barOptions)

var chartVisitorsProfile = new ApexCharts(
  document.getElementById("chart-visitors-profile"),
  optionsVisitorsProfile
)

chartVisitorsProfile.render()
bar.render()
