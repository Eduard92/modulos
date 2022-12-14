!
function() {
	"use strict";
	angular.module("app", ["app.core", "app.chart", "app.ui", "app.ui.form", "app.ui.form.validation", "app.ui.map", "app.page", "app.table", "app.pyro", "app.files", "app.cursos", "app.blog", "app.fondo", "app.partidas", "app.banner", "app.navigation", "app.centro", "app.user", "app.directores", "app.depositos", "app.ceneval", "app.equipos", "app.empleados", "app.chat", "app.streams", "app.medallero", "app.registro", "app.transparencia", "app.cuestionarios", "app.encuestas", "app.apoyos", "app.eventos", "app.oficios", "app.emails", "easypiechart", "ui.tree", "ngMap", "textAngular"])
}(), function() {
	"use strict";
	angular.module("app.chart", ["chart.js"])
}(), function() {
	"use strict";
	angular.module("app.core", ["ngAnimate", "ngAria", "ngMessages", "ngCookies", "slugifier", "app.layout", "app.i18n", "ngMaterial", "ui.router", "ui.bootstrap", , "ui.bootstrap.contextMenu", "duScroll", "ngFileUpload", "luegg.directives"])
}(), function() {
	"use strict";
	angular.module("app.ui.form", [])
}(), function() {
	"use strict";
	angular.module("app.ui.form.validation", ["validation.match"])
}(), function() {
	"use strict";
	angular.module("app.apoyos", [])
}(), function() {
	"use strict";
	angular.module("app.banner", [])
}(), function() {
	"use strict";
	angular.module("app.blog", [])
}(), function() {
	"use strict";
	angular.module("app.ceneval", [])
}(), function() {
	"use strict";
	angular.module("app.centro", [])
}(), function() {
	"use strict";
	angular.module("app.chat", [])
}(), function() {
	"use strict";
	angular.module("app.cuestionarios", [])
}(), function() {
	"use strict";
	angular.module("app.cursos", [])
}(), function() {
	"use strict";
	angular.module("app.depositos", [])
}(), function() {
	"use strict";
	angular.module("app.directores", [])
}(), function() {
	"use strict";
	angular.module("app.emails", [])
}(), function() {
	"use strict";
	angular.module("app.empleados", [])
}(), function() {
	"use strict";
	angular.module("app.encuestas", [])
}(), function() {
	"use strict";
	angular.module("app.equipos", [])
}(), function() {
	"use strict";
	angular.module("app.eventos", [])
}(), function() {
	"use strict";
	angular.module("app.files", [])
}(), function() {
	"use strict";
	angular.module("app.fondo", [])
}(), function() {
	"use strict";
	angular.module("app.medallero", [])
}(), function() {
	"use strict";
	angular.module("app.navigation", [])
}(), function() {
	"use strict";
	angular.module("app.oficios", [])
}(), function() {
	"use strict";
	angular.module("app.partidas", [])
}(), function() {
	"use strict";
	angular.module("app.pyro", [])
}(), function() {
	"use strict";
	angular.module("app.registro", [])
}(), function() {
	"use strict";
	angular.module("app.transparencia", [])
}(), function() {
	"use strict";
	angular.module("app.user", [])
}(), function() {
	"use strict";
	angular.module("app.page", [])
}(), function() {
	"use strict";
	angular.module("app.ui", ["ngMaterial"])
}(), function() {
	"use strict";
	angular.module("app.table", [])
}(), function() {
	"use strict";
	angular.module("app.ui.map", [])
}(), function() {
	"use strict";
	angular.module("app.layout", [])
}(), function() {
	"use strict";

	function e(e) {
		e.easypiechartsm1 = {}, e.easypiechartsm2 = {}, e.easypiechartsm3 = {}, e.easypiechartsm4 = {}, e.easypiechart = {}, e.easypiechart2 = {}, e.easypiechart3 = {}, e.easypiechartsm1 = {
			percent: 36,
			options: {
				animate: {
					duration: 1500,
					enabled: !1
				},
				
				barColor: e.color.primary,
				lineCap: "round",
				size: 120,
				lineWidth: 5
			}
		}, e.easypiechartsm2 = {
			percent: 45,
			options: {
				animate: {
					duration: 1500,
					enabled: !1
				},
				
				barColor: e.color.primary,
				lineCap: "round",
				size: 120,
				lineWidth: 5
			}
		}, e.easypiechartsm3 = {
			percent: 75,
			options: {
				animate: {
					duration: 1500,
					enabled: !1
				},
				
				barColor: e.color.primary,
				lineCap: "round",
				size: 120,
				lineWidth: 5
			}
		}, e.easypiechartsm4 = {
			percent: 66,
			options: {
				animate: {
					duration: 1500,
					enabled: !1
				},
				
				barColor: e.color.danger,
				lineCap: "round",
				size: 120,
				lineWidth: 5
			}
		}, e.easypiechart = {
			percent: 65,
			options: {
				animate: {
					duration: 1e3,
					enabled: !0
				},
				
				barColor: e.color.primary,
				lineCap: "round",
				size: 180,
				lineWidth: 5
			}
		}, e.easypiechart2 = {
			percent: 35,
			options: {
				animate: {
					duration: 1e3,
					enabled: !0
				},
				
				barColor: e.color.success,
				lineCap: "round",
				size: 180,
				lineWidth: 10
			}
		}, e.easypiechart3 = {
			percent: 68,
			options: {
				animate: {
					duration: 1e3,
					enabled: !0
				},
				
				barColor: e.color.info,
				lineCap: "square",
				size: 180,
				lineWidth: 20,
				scaleLength: 0
			}
		}
	}
	function t(e) {
		e.demoData1 = {}, e.simpleChart1 = {}, e.simpleChart2 = {}, e.simpleChart3 = {}, e.tristateChart1 = {}, e.largeChart1 = {}, e.largeChart2 = {}, e.largeChart3 = {}, e.demoData1 = {
			data: [3, 1, 2, 2, 4, 6, 4, 5, 2, 4, 5, 3, 4, 6, 4, 7],
			options: {
				type: "line",
				lineColor: "#fff",
				highlightLineColor: "#fff",
				fillColor: e.color.success,
				spotColor: !1,
				minSpotColor: !1,
				maxSpotColor: !1,
				width: "100%",
				height: "150px"
			}
		}, e.simpleChart1 = {
			data: [3, 1, 2, 3, 5, 3, 4, 2],
			options: {
				type: "line",
				lineColor: e.color.primary,
				fillColor: "#fafafa",
				spotColor: !1,
				minSpotColor: !1,
				maxSpotColor: !1
			}
		}, e.simpleChart2 = {
			data: [3, 1, 2, 3, 5, 3, 4, 2],
			options: {
				type: "bar",
				barColor: e.color.primary
			}
		}, e.simpleChart3 = {
			data: [3, 1, 2, 3, 5, 3, 4, 2],
			options: {
				type: "pie",
				sliceColors: [e.color.primary, e.color.success, e.color.info, e.color.infoAlt, e.color.warning, e.color.danger]
			}
		}, e.tristateChart1 = {
			data: [1, 2, -3, -5, 3, 1, -4, 2],
			options: {
				type: "tristate",
				posBarColor: e.color.success,
				negBarColor: e.color.danger
			}
		}, e.largeChart1 = {
			data: [3, 1, 2, 3, 5, 3, 4, 2],
			options: {
				type: "line",
				lineColor: e.color.info,
				highlightLineColor: "#fff",
				fillColor: e.color.info,
				spotColor: !1,
				minSpotColor: !1,
				maxSpotColor: !1,
				width: "100%",
				height: "150px"
			}
		}, e.largeChart2 = {
			data: [3, 1, 2, 3, 5, 3, 4, 2],
			options: {
				type: "bar",
				barColor: e.color.success,
				barWidth: 10,
				width: "100%",
				height: "150px"
			}
		}, e.largeChart3 = {
			data: [3, 1, 2, 3, 5],
			options: {
				type: "pie",
				sliceColors: [e.color.primary, e.color.success, e.color.info, e.color.infoAlt, e.color.warning, e.color.danger],
				width: "150px",
				height: "150px"
			}
		}, e.infoChart1 = {
			data: [10, 11, 13, 12, 11, 10, 11, 12, 13, 14, 15, 13, 14, 12, 13, 15, 11, 13, 11, 15, 6],
			options: {
				type: "bar",
				barColor: e.color.primary,
				barWidth: 3,
				width: "100%",
				height: "26px"
			}
		}, e.infoChart2 = {
			data: [10, 11, 12, 13, 14, 15, 14, 13, 12, 11, 15, 14, 13, 14, 12, 13, 15, 13, 11, 11, 12, 6],
			options: {
				type: "bar",
				barColor: e.color.success,
				barWidth: 3,
				width: "100%",
				height: "26px"
			}
		}, e.infoChart3 = {
			data: [13, 14, 15, 14, 12, 10, 11, 12, 13, 14, 15, 13, 14, 12, 13, 15, 11, 13, 11, 15, 6],
			options: {
				type: "bar",
				barColor: e.color.danger,
				barWidth: 3,
				width: "100%",
				height: "26px"
			}
		}, e.infoChart4 = {
			data: [12, 11, 13, 12, 11, 10, 11, 12, 11, 12, 15, 13, 14, 12, 13, 15, 11, 13, 11, 15, 6],
			options: {
				type: "bar",
				barColor: e.color.warning,
				barWidth: 3,
				width: "100%",
				height: "26px"
			}
		}
	}
	angular.module("app.chart").controller("EasyPieChartCtrl", ["$scope", e]).controller("SparklineCtrl", ["$scope", t])
}(), function() {
	"use strict";

	function e() {
		function e(e, t, a) {
			var o, n, r;
			o = e.data, n = e.options, r = $.plot(t[0], o, n)
		}
		var t = {
			restrict: "A",
			scope: {
				data: "=",
				options: "="
			},
			
			link: e
		};
		
		return t
	}
	function t() {
		function e(e, t, a) {
			var o, n, r, i, l, s, c, u, d;
			o = [], n = [], c = 200, d = 200, l = function(e, t, a) {
				function o() {
					var o, n, r, i;
					for (e.length > 0 && (e = e.slice(1)); e.length < c;) n = e.length > 0 ? e[e.length - 1] : (t + a) / 2, i = n + 4 * Math.random() - 2, t > i ? i = t : i > a && (i = a), e.push(i);
					for (r = [], o = 0; o < e.length;) r.push([o, e[o]]), ++o;
					return r
				}
				return o
			}, r = l(o, 28, 42), i = l(n, 56, 72), u = function() {
				s.setData([r(), i()]), s.draw(), setTimeout(u, d)
			}, s = $.plot(t[0], [r(), i()], {
				series: {
					lines: {
						show: !0,
						fill: !0
					},
					
					shadowSize: 0
				},
				
				yaxis: {
					min: 0,
					max: 100
				},
				
				xaxis: {
					show: !1
				},
				
				grid: {
					hoverable: !0,
					borderWidth: 1,
					borderColor: "#eeeeee"
				},
				
				colors: ["#3F51B5", "#C5CAE9"]
			}), u()
		}
		var t = {
			restrict: "A",
			link: e
		};
		
		return t
	}
	function a() {
		function e(e, t, a) {
			var o, n, r, i;
			o = e.data, n = e.options, r = void 0, i = function() {
				t.sparkline(o, n)
			}, $(window).resize(function(e) {
				clearTimeout(r), r = setTimeout(i, 200)
			}), i()
		}
		var t = {
			restrict: "A",
			scope: {
				data: "=",
				options: "="
			},
			
			link: e
		};
		
		return t
	}
	angular.module("app.chart").directive("flotChart", e).directive("flotChartRealtime", t).directive("sparkline", a)
}(), function() {
	"use strict";

	function e(e, t) {
		e.bar = {}, e.line = {}, e.radar = {}, e.polarArea = {}, e.doughnut = {}, e.pie = {}, Chart.defaults.global.tooltipCornerRadius = 2, Chart.defaults.global.colours = [{
			fillColor: "rgba(63,81,181,0.3)",
			strokeColor: "rgba(63,81,181,1)",
			pointColor: "rgba(63,81,181,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(63,81,181,0.8)"
		},
		{
			fillColor: "rgba(187,187,187,0.3)",
			strokeColor: "rgba(187,187,187,1)",
			pointColor: "rgba(187,187,187,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(187,187,187,0.8)"
		},
		{
			fillColor: "rgba(76,175,80,0.3)",
			strokeColor: "rgba(76,175,80,1)",
			pointColor: "rgba(76,175,80,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(76,175,80,0.8)"
		},
		{
			fillColor: "rgba(244,67,54,0.3)",
			strokeColor: "rgba(244,67,54,1)",
			pointColor: "rgba(244,67,54,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(244,67,54,0.8)"
		},
		{
			fillColor: "rgba(255,193,7,0.3)",
			strokeColor: "rgba(255,193,7,1)",
			pointColor: "rgba(255,193,7,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(255,193,7,0.8)"
		},
		{
			fillColor: "rgba(77,83,96,0.3)",
			strokeColor: "rgba(77,83,96,1)",
			pointColor: "rgba(77,83,96,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(77,83,96,1)"
		}], e.bar = {
			labels: ["2009", "2010", "2011", "2012", "2013", "2014"],
			series: ["A", "B"],
			data: [
				[59, 40, 61, 26, 55, 40],
				[38, 80, 19, 66, 27, 90]
			],
			options: {
				barValueSpacing: 15
			}
		}, e.line = {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			series: ["A", "B"],
			data: [
				[28, 48, 40, 19, 86, 27, 90],
				[65, 55, 75, 55, 65, 50, 55]
			],
			options: {}
		}, e.radar = {
			labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
			data: [
				[65, 59, 90, 81, 56, 55, 40],
				[28, 48, 40, 19, 96, 27, 100]
			]
		}, e.polarArea = {
			labels: ["Download Sales", "In-Store Sales", "Mail-Order Sales", "Tele Sales", "Corporate Sales"],
			data: [300, 500, 100, 40, 120]
		}, e.doughnut = {
			labels: ["Download Sales", "In-Store Sales", "Mail-Order Sales"],
			data: [300, 500, 100]
		}, e.pie = {
			labels: ["Download Sales", "In-Store Sales", "Mail-Order Sales"],
			data: [300, 500, 100]
		}
	}
	angular.module("app.chart").controller("ChartjsCtrl", ["$scope", "$rootScope", e])
}(), function() {
	"use strict";

	function e(e) {
		var t, a, o, n, r, i, l, s;
		e.line1 = {}, e.line2 = {}, e.area = {}, e.barChartCleanH = {}, e.barChartCleanV = {}, e.combo1 = {}, e.combo2 = {}, e.barChartStacked = {}, e.barChartVertical = {}, e.barChartHorizontal = {}, e.pieChart = {}, e.donutChart = {}, e.donutChartHarmony = {}, e.donutNationality = {}, e.combo3 = {}, e.line3 = {}, e.tmp = {}, e.line3.data = [{
			label: "Too",
			data: [
				[0, 19],
				[1, 29],
				[2, 38],
				[3, 45],
				[4, 51],
				[5, 63],
				[6, 71],
				[7, 75],
				[8, 78],
				[9, 76],
				[10, 78]
			],
			lines: {
				show: !0,
				fill: !0,
				lineWidth: 2,
				fillColor: {
					colors: ["rgba(255,255,255,.1)", "rgba(79,195,247,.8)"]
				}
			}
		}], e.line3.options = {
			grid: {
				borderWidth: 0,
				borderColor: "#f0f0f0",
				margin: 0,
				minBorderMargin: 0,
				labelMargin: 20,
				hoverable: !0,
				clickable: !0
			},
			
			tooltip: !0,
			tooltipOpts: {
				content: "%s X: %x Y: %y",
				shifts: {
					y: 25
				},
				
				defaultTheme: !1
			},
			
			legend: {
				labelBoxBorderColor: "#ccc",
				show: !1,
				noColumns: 0
			},
			
			series: {
				stack: !0,
				shadowSize: 0,
				highlightColor: "rgba(30,120,120,.5)"
			},
			
			xaxis: {
				tickLength: 0,
				tickDecimals: 0,
				show: !0,
				min: 2,
				font: {
					style: "normal",
					color: "#666666"
				}
			},
			
			yaxis: {
				ticks: 3,
				tickDecimals: 0,
				show: !0,
				tickColor: "#f0f0f0",
				font: {
					style: "normal",
					color: "#666666"
				}
			},
			
			points: {
				show: !0,
				radius: 2,
				symbol: "circle"
			},
			
			colors: [e.color.info]
		}, e.donutNationality.data = [{
			label: "United States",
			data: 40
		},
		{
			label: "United Kingdom",
			data: 10
		},
		{
			label: "Canada",
			data: 20
		},
		{
			label: "Germany",
			data: 12
		},
		{
			label: "Japan",
			data: 18
		}], e.donutNationality.options = {
			series: {
				pie: {
					show: !0,
					innerRadius: .75,
					stroke: {
						width: 0
					}
				}
			},
			
			colors: [e.color.success, e.color.primary, e.color.infoAlt, e.color.info, e.color.warning],
			grid: {
				hoverable: !0,
				clickable: !0,
				borderWidth: 0,
				color: "#ccc"
			},
			
			legend: {
				show: !0
			},
			
			tooltip: !0,
			tooltipOpts: {
				content: "%s: %p.0%",
				defaultTheme: !0
			}
		}, r = {}, r.data1 = [
			[1, 15],
			[2, 20],
			[3, 14],
			[4, 10],
			[5, 10],
			[6, 20]
		], e.line1.data = [{
			data: r.data1,
			label: "Trend"
		}], e.line1.options = {
			series: {
				lines: {
					show: !0,
					fill: !0,
					fillColor: {
						colors: [{
							opacity: 0
						},
						{
							opacity: .3
						}]
					}
				},
				
				points: {
					show: !0,
					lineWidth: 2,
					fill: !0,
					fillColor: "#ffffff",
					symbol: "circle",
					radius: 5
				}
			},
			
			colors: [e.color.primary, e.color.infoAlt],
			tooltip: !0,
			tooltipOpts: {
				defaultTheme: !1
			},
			
			grid: {
				hoverable: !0,
				clickable: !0,
				tickColor: "#f9f9f9",
				borderWidth: 1,
				borderColor: "#eeeeee"
			},
			
			xaxis: {
				ticks: [
					[1, "Jan."],
					[2, "Feb."],
					[3, "Mar."],
					[4, "Apr."],
					[5, "May"],
					[6, "June"],
					[7, "July"],
					[8, "Aug."],
					[9, "Sept."],
					[10, "Oct."],
					[11, "Nov."],
					[12, "Dec."]
				]
			}
		}, i = {}, i.data1 = [
			[1, 20],
			[2, 14],
			[3, 16],
			[4, 22],
			[5, 28],
			[6, 38]
		], i.data2 = [
			[1, 26],
			[2, 24],
			[3, 22],
			[4, 22],
			[5, 20],
			[6, 16]
		], e.line2.data = [{
			data: i.data1,
			label: "Profit"
		},
		{
			data: i.data2,
			label: "Cost",
			yaxis: 2
		}], e.line2.options = {
			series: {
				lines: {
					show: !0,
					fill: !1
				},
				
				points: {
					show: !0,
					lineWidth: 2,
					fill: !0,
					fillColor: "#fff",
					symbol: "circle",
					radius: 5
				},
				
				shadowSize: 0
			},
			
			grid: {
				hoverable: !0,
				clickable: !0,
				tickColor: "#f9f9f9",
				borderWidth: 1,
				borderColor: "#eeeeee"
			},
			
			colors: [e.color.primary, e.color.success],
			tooltip: !0,
			tooltipOpts: {
				defaultTheme: !1
			},
			
			xaxis: {
				ticks: [
					[1, "Jan."],
					[2, "Feb."],
					[3, "Mar."],
					[4, "Apr."],
					[5, "May"],
					[6, "June"],
					[7, "July"],
					[8, "Aug."],
					[9, "Sept."],
					[10, "Oct."],
					[11, "Nov."],
					[12, "Dec."]
				]
			},
			
			yaxes: [{
				min: 0,
				max: 50
			},
			{
				min: 0,
				max: 50,
				position: "right"
			}]
		}, t = {}, t.data1 = [
			[2017, 15],
			[2018, 20],
			[2019, 10],
			[2020, 5],
			[2021, 9]
		], t.data2 = [
			[2017, 15],
			[2018, 16],
			[2019, 22],
			[2020, 14],
			[2021, 12]
		], e.area.data = [{
			data: t.data1,
			label: "Value A",
			lines: {
				fill: !0
			}
		},
		{
			data: t.data2,
			label: "Value B",
			points: {
				show: !0
			},
			
			yaxis: 2
		}], e.area.options = {
			series: {
				lines: {
					show: !0,
					fill: !1
				},
				
				points: {
					show: !0,
					lineWidth: 2,
					fill: !0,
					fillColor: "#ffffff",
					symbol: "circle",
					radius: 5
				},
				
				shadowSize: 0
			},
			
			grid: {
				hoverable: !0,
				clickable: !0,
				tickColor: "#f9f9f9",
				borderWidth: 1,
				borderColor: "#eeeeee"
			},
			
			colors: [e.color.success, e.color.danger],
			tooltip: !0,
			tooltipOpts: {
				defaultTheme: !1
			},
			
			xaxis: {
				mode: "time"
			},
			
			yaxes: [{},
			{
				position: "right"
			}]
		}, o = {}, o.dataH1 = [
			[40, 1],
			[59, 2],
			[50, 3],
			[81, 4],
			[56, 5]
		], o.dataH2 = [
			[28, 1],
			[48, 2],
			[90, 3],
			[19, 4],
			[45, 5]
		], o.dataV1 = [
			[1, 28],
			[2, 48],
			[3, 90],
			[4, 19],
			[5, 45],
			[6, 58]
		], o.dataV2 = [
			[1, 40],
			[2, 59],
			[3, 50],
			[4, 81],
			[5, 56],
			[6, 49]
		], e.barChartCleanH.data = [{
			label: " A",
			data: o.dataH1,
			bars: {
				order: 0,
				fillColor: {
					colors: [{
						opacity: .3
					},
					{
						opacity: .3
					}]
				}
			}
		},
		{
			label: " B",
			data: o.dataH2,
			bars: {
				order: 1,
				fillColor: {
					colors: [{
						opacity: .3
					},
					{
						opacity: .3
					}]
				}
			}
		}], e.barChartCleanH.options = {
			series: {
				stack: !0,
				bars: {
					show: !0,
					fill: 1,
					barWidth: .35,
					align: "center",
					horizontal: !0
				}
			},
			
			grid: {
				show: !0,
				aboveData: !1,
				color: "#eaeaea",
				hoverable: !0,
				borderWidth: 1,
				borderColor: "#eaeaea"
			},
			
			tooltip: !0,
			tooltipOpts: {
				defaultTheme: !1
			},
			
			colors: [e.color.gray, e.color.primary, e.color.info, e.color.danger]
		}, e.barChartCleanV.data = [{
			label: " A",
			data: o.dataV1,
			bars: {
				order: 0,
				fillColor: {
					colors: [{
						opacity: .3
					},
					{
						opacity: .3
					}]
				}
			}
		},
		{
			label: " B",
			data: o.dataV2,
			bars: {
				order: 1,
				fillColor: {
					colors: [{
						opacity: .3
					},
					{
						opacity: .3
					}]
				}
			}
		}], e.barChartCleanV.options = {
			series: {
				stack: !0,
				bars: {
					show: !0,
					fill: 1,
					barWidth: .25,
					align: "center",
					horizontal: !1
				}
			},
			
			grid: {
				show: !0,
				aboveData: !1,
				color: "#eaeaea",
				hoverable: !0,
				borderWidth: 1,
				borderColor: "#eaeaea"
			},
			
			tooltip: !0,
			tooltipOpts: {
				defaultTheme: !1
			},
			
			colors: [e.color.gray, e.color.primary, e.color.info, e.color.danger]
		}, e.combo3.data = [{
			label: "WOM channels",
			bars: {
				show: !0,
				fill: !0,
				barWidth: .5,
				align: "center",
				order: 1,
				fillColor: {
					colors: [{
						opacity: 1
					},
					{
						opacity: 1
					}]
				}
			},
			
			data: [
				[0, 75],
				[1, 62],
				[2, 45],
				[3, 60],
				[4, 73],
				[5, 50],
				[6, 31],
				[7, 56],
				[8, 70],
				[9, 63],
				[10, 49],
				[11, 72],
				[12, 76],
				[13, 67],
				[14, 46],
				[15, 51],
				[16, 69],
				[17, 59],
				[18, 85],
				[19, 67],
				[20, 56]
			]
		},
		{
			label: "Viral channels",
			curvedLines: {
				apply: !0
			},
			
			lines: {
				show: !0,
				fill: !0,
				fillColor: {
					colors: [{
						opacity: .7
					},
					{
						opacity: 1
					}]
				}
			},
			
			data: [
				[2, 0],
				[3, 5],
				[4, 20],
				[5, 15],
				[6, 30],
				[7, 28],
				[8, 25],
				[9, 40],
				[10, 60],
				[11, 40],
				[12, 43],
				[13, 32],
				[14, 36],
				[15, 23],
				[16, 12],
				[17, 15],
				[18, 0]
			]
		},
		{
			label: "Paid channels",
			curvedLines: {
				apply: !0
			},
			
			lines: {
				show: !0,
				fill: !0,
				fillColor: {
					colors: [{
						opacity: .7
					},
					{
						opacity: 1
					}]
				}
			},
			
			data: [
				[4, 1],
				[5, 6],
				[6, 15],
				[7, 8],
				[8, 16],
				[9, 9],
				[10, 25],
				[11, 12],
				[12, 50],
				[13, 20],
				[14, 25],
				[15, 12],
				[16, 0]
			]
		}], e.combo3.options = {
			colors: [e.color.gray, e.color.success, e.color.info, e.color.info],
			series: {
				shadowSize: 1,
				curvedLines: {
					active: !0
				}
			},
			
			xaxis: {
				font: {
					color: "#607685"
				}
			},
			
			yaxis: {
				font: {
					color: "#607685"
				}
			},
			
			grid: {
				hoverable: !0,
				clickable: !0,
				borderWidth: 0,
				color: "#ccc"
			},
			
			tooltip: !0
		}, l = [
			[1, 70],
			[2, 55],
			[3, 68],
			[4, 81],
			[5, 56],
			[6, 55],
			[7, 68],
			[8, 45],
			[9, 35]
		], s = [
			[1, 28],
			[2, 48],
			[3, 30],
			[4, 60],
			[5, 100],
			[6, 50],
			[7, 10],
			[8, 25],
			[9, 50]
		], e.combo1.data = [{
			label: " A",
			data: l,
			bars: {
				order: 0,
				fillColor: {
					colors: [{
						opacity: .3
					},
					{
						opacity: .3
					}]
				},
				
				show: !0,
				fill: 1,
				barWidth: .3,
				align: "center",
				horizontal: !1
			}
		},
		{
			data: s,
			curvedLines: {
				apply: !0
			},
			
			lines: {
				show: !0,
				fill: !0,
				fillColor: {
					colors: [{
						opacity: .2
					},
					{
						opacity: .2
					}]
				}
			}
		},
		{
			data: s,
			label: "D",
			points: {
				show: !0
			}
		}], e.combo1.options = {
			series: {
				curvedLines: {
					active: !0
				},
				
				points: {
					lineWidth: 2,
					fill: !0,
					fillColor: "#ffffff",
					symbol: "circle",
					radius: 4
				}
			},
			
			grid: {
				hoverable: !0,
				clickable: !0,
				tickColor: "#f9f9f9",
				borderWidth: 1,
				borderColor: "#eeeeee"
			},
			
			tooltip: !0,
			tooltipOpts: {
				defaultTheme: !1
			},
			
			colors: [e.color.gray, e.color.primary, e.color.primary]
		}, e.combo2.data = [{
			data: l,
			curvedLines: {
				apply: !0
			},
			
			lines: {
				show: !0,
				fill: !0,
				fillColor: {
					colors: [{
						opacity: .2
					},
					{
						opacity: .2
					}]
				}
			}
		},
		{
			data: l,
			label: "C",
			points: {
				show: !0
			}
		},
		{
			data: s,
			curvedLines: {
				apply: !0
			},
			
			lines: {
				show: !0,
				fill: !0,
				fillColor: {
					colors: [{
						opacity: .2
					},
					{
						opacity: .2
					}]
				}
			}
		},
		{
			data: s,
			label: "D",
			points: {
				show: !0
			}
		}], e.combo2.options = {
			series: {
				curvedLines: {
					active: !0
				},
				
				points: {
					lineWidth: 2,
					fill: !0,
					fillColor: "#ffffff",
					symbol: "circle",
					radius: 4
				}
			},
			
			grid: {
				hoverable: !0,
				clickable: !0,
				tickColor: "#f9f9f9",
				borderWidth: 1,
				borderColor: "#eeeeee"
			},
			
			tooltip: !0,
			tooltipOpts: {
				defaultTheme: !1
			},
			
			colors: [e.color.gray, e.color.gray, e.color.primary, e.color.primary]
		}, a = {}, a.data1 = [
			[2009, 10],
			[2010, 5],
			[2011, 5],
			[2012, 20],
			[2013, 28]
		], a.data2 = [
			[2009, 22],
			[2010, 14],
			[2011, 12],
			[2012, 19],
			[2013, 22]
		], a.data3 = [
			[2009, 30],
			[2010, 20],
			[2011, 19],
			[2012, 13],
			[2013, 20]
		], e.barChartStacked.data = [{
			label: "Value A",
			data: a.data1
		},
		{
			label: "Value B",
			data: a.data2
		},
		{
			label: "Value C",
			data: a.data3
		}], e.barChartStacked.options = {
			series: {
				stack: !0,
				bars: {
					show: !0,
					fill: 1,
					barWidth: .3,
					align: "center",
					horizontal: !1,
					order: 1
				}
			},
			
			grid: {
				hoverable: !0,
				borderWidth: 1,
				borderColor: "#eeeeee"
			},
			
			tooltip: !0,
			tooltipOpts: {
				defaultTheme: !1
			},
			
			colors: [e.color.success, e.color.info, e.color.warning, e.color.danger]
		}, e.barChartVertical.data = [{
			label: "Value A",
			data: a.data1,
			bars: {
				order: 0
			}
		},
		{
			label: "Value B",
			data: a.data2,
			bars: {
				order: 1
			}
		},
		{
			label: "Value C",
			data: a.data3,
			bars: {
				order: 2
			}
		}], e.barChartVertical.options = {
			series: {
				stack: !0,
				bars: {
					show: !0,
					fill: 1,
					barWidth: .2,
					align: "center",
					horizontal: !1
				}
			},
			
			grid: {
				hoverable: !0,
				borderWidth: 1,
				borderColor: "#eeeeee"
			},
			
			yaxis: {
				max: 40
			},
			
			tooltip: !0,
			tooltipOpts: {
				defaultTheme: !1
			},
			
			colors: [e.color.success, e.color.info, e.color.warning, e.color.danger]
		}, n = {}, n.data1 = [
			[85, 10],
			[50, 20],
			[55, 30]
		], n.data2 = [
			[77, 10],
			[60, 20],
			[70, 30]
		], n.data3 = [
			[100, 10],
			[70, 20],
			[55, 30]
		], e.barChartHorizontal.data = [{
			label: "Value A",
			data: n.data1,
			bars: {
				order: 1
			}
		},
		{
			label: "Value B",
			data: n.data2,
			bars: {
				order: 2
			}
		},
		{
			label: "Value C",
			data: n.data3,
			bars: {
				order: 3
			}
		}], e.barChartHorizontal.options = {
			series: {
				stack: !0,
				bars: {
					show: !0,
					fill: 1,
					barWidth: 1,
					align: "center",
					horizontal: !0
				}
			},
			
			grid: {
				hoverable: !0,
				borderWidth: 1,
				borderColor: "#eeeeee"
			},
			
			tooltip: !0,
			tooltipOpts: {
				defaultTheme: !1
			},
			
			colors: [e.color.success, e.color.info, e.color.warning, e.color.danger]
		}, e.pieChart.data = [{
			label: "New User",
			data: 22
		},
		{
			label: "Returning User",
			data: 78
		}], e.pieChart.options = {
			series: {
				pie: {
					show: !0
				}
			},
			
			legend: {
				show: !0
			},
			
			grid: {
				hoverable: !0,
				clickable: !0
			},
			
			colors: [e.color.gray, e.color.info],
			tooltip: !0,
			tooltipOpts: {
				content: "%p.0%, %s",
				defaultTheme: !1
			}
		}, e.donutChart.data = [{
			label: "Download Sales",
			data: 12
		},
		{
			label: "In-Store Sales",
			data: 30
		},
		{
			label: "Mail-Order Sales",
			data: 20
		},
		{
			label: "Online Sales",
			data: 19
		}], e.donutChart.options = {
			series: {
				pie: {
					show: !0,
					innerRadius: .5
				}
			},
			
			legend: {
				show: !0
			},
			
			grid: {
				hoverable: !0,
				clickable: !0
			},
			
			colors: [e.color.primary, e.color.success, e.color.info, e.color.warning, e.color.danger],
			tooltip: !0,
			tooltipOpts: {
				content: "%p.0%, %s",
				defaultTheme: !1
			}
		}, e.donutChartHarmony.data = [{
			label: "Direct Traffic",
			data: 12
		},
		{
			label: "Referrals Traffic",
			data: 30
		},
		{
			label: "Search Traffic",
			data: 20
		},
		{
			label: "Social Traffic",
			data: 19
		},
		{
			label: "Mail Traffic",
			data: 15
		}], e.donutChartHarmony.options = {
			series: {
				pie: {
					show: !0,
					innerRadius: .55
				}
			},
			
			legend: {
				show: !1
			},
			
			grid: {
				hoverable: !0,
				clickable: !0
			},
			
			colors: ["#1BB7A0", "#39B5B9", "#52A3BB", "#619CC4", "#6D90C5"],
			tooltip: !0,
			tooltipOpts: {
				content: "%p.0%, %s",
				defaultTheme: !1
			}
		}
	}
	angular.module("app.chart").controller("FlotChartCtrl", ["$scope", e])
}(), function() {
	"use strict";

	function e() {
		var e = [{
			name: "Fade up",
			"class": "animate-fade-up"
		},
		{
			name: "Scale up",
			"class": "ainmate-scale-up"
		},
		{
			name: "Slide in from right",
			"class": "ainmate-slide-in-right"
		},
		{
			name: "Flip Y",
			"class": "animate-flip-y"
		}],
			t = new Date,
			a = t.getFullYear(),
			o = {
				brand: "Material",
				name: "Lisa",
				year: a,
				layout: "wide",
				menu: "vertical",
				fixedHeader: !0,
				fixedSidebar: !0,
				pageTransition: e[0],
				skin: "23"
			},
			n = {
				primary: "#009688",
				success: "#8BC34A",
				info: "#00BCD4",
				infoAlt: "#7E57C2",
				warning: "#FFCA28",
				danger: "#F44336",
				gray: "#EDF0F1"
			};
		
		return {
			pageTransitionOpts: e,
			main: o,
			color: n
		}
	}
	function t(e) {
		var t = e.extendPalette("cyan", {
			contrastLightColors: "500 600 700 800 900",
			contrastStrongLightColors: "500 600 700 800 900"
		}),
			a = e.extendPalette("light-green", {
				contrastLightColors: "500 600 700 800 900",
				contrastStrongLightColors: "500 600 700 800 900"
			});
		
		e.definePalette("cyanAlt", t).definePalette("lightGreenAlt", a), e.theme("default").primaryPalette("teal", {
			"default": "500"
		}).accentPalette("cyanAlt", {
			"default": "500"
		}).warnPalette("red", {
			"default": "500"
		}).backgroundPalette("grey")
	}
	angular.module("app.core").factory("appConfig", [e]).config(["$mdThemingProvider", t])
}(), function() {
	"use strict";

	function e(e, t, a, o, n, r) {
		var i = n.get("main") ? angular.fromJson(n.get("main")) : !1;
		e.pageTransitionOpts = r.pageTransitionOpts, e.main = i ? i : r.main, e.color = r.color, e.$watch("main", function(a, o) {
			a !== o && n.put("main", angular.toJson(a)), "horizontal" === a.menu && "vertical" === o.menu && t.$broadcast("nav:reset"), a.fixedHeader === !1 && a.fixedSidebar === !0 && (o.fixedHeader === !1 && o.fixedSidebar === !1 && (e.main.fixedHeader = !0, e.main.fixedSidebar = !0), o.fixedHeader === !0 && o.fixedSidebar === !0 && (e.main.fixedHeader = !1, e.main.fixedSidebar = !1)), a.fixedSidebar === !0 && (e.main.fixedHeader = !0), a.fixedHeader === !1 && (e.main.fixedSidebar = !1)
		}, !0), t.$on("$stateChangeSuccess", function(e, t, a) {
			o.scrollTo(0, 0)
		})
	}
	angular.module("app").controller("AppCtrl", ["$scope", "$rootScope", "$state", "$document", "$cookies", "appConfig", e])
}(), function() {
	function e(e) {
		e.useStaticFilesLoader({
			prefix: "/i18n/",
			suffix: ".json"
		}), e.preferredLanguage("en")
	}
	function t(e, t) {
		function a(a) {
			switch (a) {
				case "English":
					t.use("en");
					break;
				case "Espa??ol":
					t.use("es");
					break;
				case "??????":
					t.use("zh");
					break;
				case "?????????":
					t.use("ja");
					break;
				case "Portugal":
					t.use("pt");
					break;
				case "?????????????? ????????":
					t.use("ru")
			}
			return e.lang = a
		}
		function o() {
			var t;
			switch (t = e.lang) {
				case "English":
					return "flags-american";
				case "Espa??ol":
					return "flags-spain";
				case "??????":
					return "flags-china";
				case "Portugal":
					return "flags-portugal";
				case "?????????":
					return "flags-japan";
				case "?????????????? ????????":
					return "flags-russia"
			}
		}
		e.lang = "English", e.setLang = a, e.getFlag = o
	}
	angular.module("app.i18n", ["pascalprecht.translate"]).config(["$translateProvider", e]).controller("LangCtrl", ["$scope", "$translate", t])
}(), function() {
	"use strict";

	function e(e) {
		e.user = {
			title: "Developer",
			email: "ipsum@lorem.com",
			firstName: "",
			lastName: "",
			company: "Google",
			address: "1600 Amphitheatre Pkwy",
			city: "Mountain View",
			state: "CA",
			biography: "Loves kittens, snowboarding, and can type at 130 WPM.\n\nAnd rumor has it she bouldered up Castle Craig!",
			postalCode: "94043"
		}, e.states = "AL AK AZ AR CA CO CT DE FL GA HI ID IL IN IA KS KY LA ME MD MA MI MN MS MO MT NE NV NH NJ NM NY NC ND OH OK OR PA RI SC SD TN TX UT VT VA WA WV WI WY".split(" ").map(function(e) {
			return {
				abbrev: e
			}
		})
	}
	function t(e) {
		e.checkbox = {}, e.checkbox.cb1 = !0, e.checkbox.cb2 = !1, e.checkbox.cb3 = !1, e.checkbox.cb4 = !1, e.checkbox.cb5 = !1, e.checkbox.cb6 = !0, e.checkbox.cb7 = !0, e.checkbox.cb8 = !0, e.items = [1, 2, 3, 4, 5], e.selected = [], e.toggle = function(e, t) {
			var a = t.indexOf(e);
			a > -1 ? t.splice(a, 1) : t.push(e)
		}, e.exists = function(e, t) {
			return t.indexOf(e) > -1
		}
	}
	function a(e) {
		e.radio = {
			group1: "Banana",
			group2: "2",
			group3: "Primary"
		}, e.radioData = [{
			label: "Radio: disabled",
			value: "1",
			isDisabled: !0
		},
		{
			label: "Radio: disabled, Checked",
			value: "2",
			isDisabled: !0
		}], e.contacts = [{
			id: 1,
			fullName: "Maria Guadalupe",
			lastName: "Guadalupe",
			title: "CEO, Found"
		},
		{
			id: 2,
			fullName: "Gabriel Garc??a Marqu??z",
			lastName: "Marqu??z",
			title: "VP Sales & Marketing"
		},
		{
			id: 3,
			fullName: "Miguel de Cervantes",
			lastName: "Cervantes",
			title: "Manager, Operations"
		},
		{
			id: 4,
			fullName: "Pacorro de Castel",
			lastName: "Castel",
			title: "Security"
		}], e.selectedIndex = 2, e.selectedUser = function() {
			var t = e.selectedIndex - 1;
			return e.contacts[t].lastName
		}
	}
	function o(e) {
		e.color = {
			red: 97,
			green: 211,
			blue: 140
		}, e.rating1 = 3, e.rating2 = 2, e.rating3 = 4, e.disabled1 = 0, e.disabled2 = 70, e.user = {
			title: "Developer",
			email: "ipsum@lorem.com",
			firstName: "",
			lastName: "",
			company: "Google",
			address: "1600 Amphitheatre Pkwy",
			city: "Mountain View",
			state: "CA",
			biography: "Loves kittens, snowboarding, and can type at 130 WPM.\n\nAnd rumor has it she bouldered up Castle Craig!",
			postalCode: "94043"
		}, e.select1 = "1", e.toppings = [{
			category: "meat",
			name: "Pepperoni"
		},
		{
			category: "meat",
			name: "Sausage"
		},
		{
			category: "meat",
			name: "Ground Beef"
		},
		{
			category: "meat",
			name: "Bacon"
		},
		{
			category: "veg",
			name: "Mushrooms"
		},
		{
			category: "veg",
			name: "Onion"
		},
		{
			category: "veg",
			name: "Green Pepper"
		},
		{
			category: "veg",
			name: "Green Olives"
		}], e.favoriteTopping = e.toppings[0].name, e.switchData = {
			cb1: !0,
			cbs: !1,
			cb4: !0,
			color1: !0,
			color2: !0,
			color3: !0
		}, e.switchOnChange = function(t) {
			e.message = "The switch is now: " + t
		}
	}
	function n(e, t, a, o) {
		function n(e) {
			alert("Sorry! You'll need to create a Constituion for " + e + " first!")
		}
		function r(o) {
			var n, r = o ? e.states.filter(c(o)) : e.states;
			return e.simulateQuery ? (n = a.defer(), t(function() {
				n.resolve(r)
			}, 1e3 * Math.random(), !1), n.promise) : r
		}
		function i(e) {}
		function l(e) {}
		function s() {
			var e = "Alabama, Alaska, Arizona, Arkansas, California, Colorado, Connecticut, Delaware,                            Florida, Georgia, Hawaii, Idaho, Illinois, Indiana, Iowa, Kansas, Kentucky, Louisiana,                            Maine, Maryland, Massachusetts, Michigan, Minnesota, Mississippi, Missouri, Montana,                            Nebraska, Nevada, New Hampshire, New Jersey, New Mexico, New York, North Carolina,                            North Dakota, Ohio, Oklahoma, Oregon, Pennsylvania, Rhode Island, South Carolina,                            South Dakota, Tennessee, Texas, Utah, Vermont, Virginia, Washington, West Virginia,                            Wisconsin, Wyoming";
			return e.split(/, +/g).map(function(e) {
				return {
					value: e.toLowerCase(),
					display: e
				}
			})
		}
		function c(e) {
			var t = angular.lowercase(e);
			return function(e) {
				return 0 === e.value.indexOf(t)
			}
		}
		var e = this;
		e.simulateQuery = !1, e.isDisabled = !1, e.states = s(), e.querySearch = r, e.selectedItemChange = l, e.searchTextChange = i, e.newState = n
	}
	function r(e) {
		e.myDate = new Date, e.minDate = new Date(e.myDate.getFullYear(), e.myDate.getMonth() - 2, e.myDate.getDate()), e.maxDate = new Date(e.myDate.getFullYear(), e.myDate.getMonth() + 2, e.myDate.getDate())
	}
	function i(e) {
		e.today = function() {
			e.dt = new Date
		}, e.today(), e.clear = function() {
			e.dt = null
		}, e.disabled = function(e, t) {
			return "day" === t && (0 === e.getDay() || 6 === e.getDay())
		}, e.toggleMin = function() {
			e.minDate = e.minDate ? null : new Date
		}, e.toggleMin(), e.maxDate = new Date(2020, 5, 22), e.open = function(t) {
			e.status.opened = !0
		}, e.setDate = function(t, a, o) {
			e.dt = new Date(t, a, o)
		}, e.dateOptions = {
			formatYear: "yy",
			startingDay: 1
		}, e.formats = ["dd-MMMM-yyyy", "yyyy/MM/dd", "dd.MM.yyyy", "shortDate"], e.format = e.formats[0], e.status = {
			opened: !1
		};
		
		var t = new Date;
		t.setDate(t.getDate() + 1);
		var a = new Date;
		a.setDate(t.getDate() + 2), e.events = [{
			date: t,
			status: "full"
		},
		{
			date: a,
			status: "partially"
		}], e.getDayClass = function(t, a) {
			if ("day" === a) for (var o = new Date(t).setHours(0, 0, 0, 0), n = 0; n < e.events.length; n++) {
				var r = new Date(e.events[n].date).setHours(0, 0, 0, 0);
				if (o === r) return e.events[n].status
			}
			return ""
		}
	}
	function l(e) {
		e.mytime = new Date, e.hstep = 1, e.mstep = 15, e.options = {
			hstep: [1, 2, 3],
			mstep: [1, 5, 10, 15, 25, 30]
		}, e.ismeridian = !0, e.toggleMode = function() {
			return e.ismeridian = !e.ismeridian
		}, e.update = function() {
			var t;
			return t = new Date, t.setHours(14), t.setMinutes(0), e.mytime = t
		}, e.changed = function() {}, e.clear = function() {
			return e.mytime = null
		}
	}
	function s(e) {
		e.selected = void 0, e.states = ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Dakota", "North Carolina", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"]
	}
	function c(e) {
		e.rate = 7, e.max = 10, e.isReadonly = !1, e.hoveringOver = function(t) {
			return e.overStar = t, e.percent = 100 * (t / e.max)
		}, e.ratingStates = [{
			stateOn: "glyphicon-ok-sign",
			stateOff: "glyphicon-ok-circle"
		},
		{
			stateOn: "glyphicon-star",
			stateOff: "glyphicon-star-empty"
		},
		{
			stateOn: "glyphicon-heart",
			stateOff: "glyphicon-ban-circle"
		},
		{
			stateOn: "glyphicon-heart"
		},
		{
			stateOff: "glyphicon-off"
		}]
	}
	angular.module("app.ui.form").controller("InputCtrl", ["$scope", e]).controller("CheckboxCtrl", ["$scope", t]).controller("RadioCtrl", ["$scope", a]).controller("FormCtrl", ["$scope", o]).controller("MaterialAutocompleteCtrl", ["$scope", "$timeout", "$q", "$log", n]).controller("MaterialDatepickerCtrl", ["$scope", r]).controller("DatepickerDemoCtrl", ["$scope", i]).controller("TimepickerDemoCtrl", ["$scope", l]).controller("TypeaheadCtrl", ["$scope", s]).controller("RatingDemoCtrl", ["$scope", c])
}(), function() {
	"use strict";

	function e() {
		return {
			restrict: "A",
			link: function(e, t) {
				t.slider()
			}
		}
	}
	function t() {
		return {
			restrict: "A",
			compile: function(e, t) {
				return e.addClass("ui-spinner"), {
					post: function() {
						e.spinner()
					}
				}
			}
		}
	}
	function a() {
		return {
			restrict: "A",
			link: function(e, t) {
				t.steps()
			}
		}
	}
	angular.module("app.ui.form").directive("uiRangeSlider", e).directive("uiSpinner", t).directive("uiWizardForm", a)
}(), function() {
	"use strict";

	function e(e) {
		var t;
		e.form = {
			required: "",
			minlength: "",
			maxlength: "",
			length_rage: "",
			type_something: "",
			confirm_type: "",
			foo: "",
			email: "",
			url: "",
			num: "",
			minVal: "",
			maxVal: "",
			valRange: "",
			pattern: ""
		}, t = angular.copy(e.form), e.revert = function() {
			return e.form = angular.copy(t), e.form_constraints.$setPristine()
		}, e.canRevert = function() {
			return !angular.equals(e.form, t) || !e.form_constraints.$pristine
		}, e.canSubmit = function() {
			return e.form_constraints.$valid && !angular.equals(e.form, t)
		}, e.submitForm = function() {
			return e.showInfoOnSubmit = !0, e.revert()
		}
	}
	function t(e) {
		var t;
		e.user = {
			email: "",
			passowrd: ""
		}, t = angular.copy(e.user), e.revert = function() {
			e.user = angular.copy(t), e.materialLoginForm.$setPristine(), e.materialLoginForm.$setUntouched()
		}, e.canRevert = function() {
			return !angular.equals(e.user, t) || !e.materialLoginForm.$pristine
		}, e.canSubmit = function() {
			return e.materialLoginForm.$valid && !angular.equals(e.user, t)
		}, e.submitForm = function() {
			return e.showInfoOnSubmit = !0, e.revert()
		}
	}
	function a(e) {
		var t;
		e.user = {
			name: "",
			email: "",
			passowrd: ""
		}, t = angular.copy(e.user), e.revert = function() {
			e.user = angular.copy(t), e.materialSignUpForm.$setPristine(), e.materialSignUpForm.$setUntouched()
		}, e.canRevert = function() {
			return !angular.equals(e.user, t) || !e.materialSignUpForm.$pristine
		}, e.canSubmit = function() {
			return e.materialSignUpForm.$valid && !angular.equals(e.user, t)
		}, e.submitForm = function() {
			return e.showInfoOnSubmit = !0, e.revert()
		}
	}
	function o(e) {
		var t;
		e.user = {
			email: "",
			password: ""
		}, e.showInfoOnSubmit = !1, t = angular.copy(e.user), e.revert = function() {
			return e.user = angular.copy(t), e.form_signin.$setPristine()
		}, e.canRevert = function() {
			return !angular.equals(e.user, t) || !e.form_signin.$pristine
		}, e.canSubmit = function() {
			return e.form_signin.$valid && !angular.equals(e.user, t)
		}, e.submitForm = function() {
			return e.showInfoOnSubmit = !0, e.revert()
		}
	}
	function n(e) {
		var t;
		e.user = {
			name: "",
			email: "",
			password: "",
			confirmPassword: "",
			age: ""
		}, e.showInfoOnSubmit = !1, t = angular.copy(e.user), e.revert = function() {
			return e.user = angular.copy(t), e.form_signup.$setPristine(), e.form_signup.confirmPassword.$setPristine()
		}, e.canRevert = function() {
			return !angular.equals(e.user, t) || !e.form_signup.$pristine
		}, e.canSubmit = function() {
			return e.form_signup.$valid && !angular.equals(e.user, t)
		}, e.submitForm = function() {
			return e.showInfoOnSubmit = !0, e.revert()
		}
	}
	angular.module("app.ui.form.validation").controller("FormConstraintsCtrl", ["$scope", e]).controller("MaterialLoginCtrl", ["$scope", t]).controller("MaterialSignUpCtrl", ["$scope", a]).controller("SigninCtrl", ["$scope", o]).controller("SignupCtrl", ["$scope", n])
}(), function() {
	"use strict";
	angular.module("app.streams", [])
}(), function() {
	"use strict";

	function e(e, t) {
		var a, o, n;
		e.printInvoice = function() {
			a = document.getElementById("invoice").innerHTML, o = document.body.innerHTML, n = window.open(), n.document.open(), n.document.write('<html><head><link rel="stylesheet" type="text/css" href="styles/main.css" /></head><body onload="window.print()">' + a + "</html>"), n.document.close()
		}
	}
	function t(e, t, a, o) {
		e.login = function() {
			a.url("/")
		}, e.signup = function() {
			a.url("/")
		}, e.reset = function() {
			a.url("/")
		}, e.unlock = function() {
			a.url("/")
		};
		
		var n = this;
		n.messages = [{
			username: "Matt",
			content: "Hi!"
		},
		{
			username: "Elisa",
			content: "Whats up?"
		},
		{
			username: "Matt",
			content: "I found this nice AngularJS Directive"
		},
		{
			username: "Elisa",
			content: "Looks Great!"
		}], n.username = "Matt", n.sendMessage = function(e, t) {
			e && "" !== e && t && n.messages.push({
				username: t,
				content: e
			})
		}
	}
	angular.module("app.page").controller("invoiceCtrl", ["$scope", "$window", e]).controller("authCtrl", ["$scope", "$window", "$location", "$cookies", t])
}(), function() {
	"use strict";

	function e() {
		function e(e, t, a) {
			var o, n;
			n = function() {
				return a.path()
			}, o = function(e) {
				switch (t.removeClass("body-wide body-err body-lock body-auth"), e) {
					case "/404":
					case "/page/404":
					case "/page/500":
						return t.addClass("body-wide body-err");
					case "/page/signin":
					case "/page/signup":
					case "/page/forgot-password":
						return t.addClass("body-wide body-auth");
					case "/page/lock-screen":
						return t.addClass("body-wide body-lock")
				}
			}, o(a.path()), e.$watch(n, function(e, t) {
				return e !== t ? o(a.path()) : void 0
			})
		}
		var t = {
			restrict: "A",
			controller: ["$scope", "$element", "$location", e]
		};
		
		return t
	}
	angular.module("app.page").directive("customPage", e)
}(), function() {
	"use strict";

	function e() {
		var e = this;
		e.readonly = !1, e.fruitNames = ["Apple", "Banana", "Orange"], e.roFruitNames = angular.copy(e.fruitNames), e.tags = [], e.vegObjs = [{
			name: "Broccoli",
			type: "Brassica"
		},
		{
			name: "Cabbage",
			type: "Brassica"
		},
		{
			name: "Carrot",
			type: "Umbelliferous"
		}], e.newVeg = function(e) {
			return {
				name: e,
				type: "unknown"
			}
		}
	}
	function t(e, t) {
		e.status = "  ", e.showAlert = function(e) {
			t.show(t.alert().parent(angular.element(document.querySelector("#popupContainer"))).clickOutsideToClose(!0).title("This is an alert title").content("You can specify some description text in here.").ariaLabel("Alert Dialog Demo").ok("Got it!").targetEvent(e))
		}, e.showConfirm = function(a) {
			var o = t.confirm().title("Would you like to delete your debt?").content('All of the banks have agreed to <span class="debt-be-gone">forgive</span> you your debts.').ariaLabel("Lucky day").targetEvent(a).ok("Please do it!").cancel("Sounds like a scam");
			t.show(o).then(function() {
				e.status = "You decided to get rid of your debt."
			}, function() {
				e.status = "You decided to keep your debt."
			})
		}, e.showAdvanced = function(o) {
			t.show({
				controller: a,
				templateUrl: "dialog1.tmpl.html",
				parent: angular.element(document.body),
				targetEvent: o,
				clickOutsideToClose: !0
			}).then(function(t) {
				e.status = 'You said the information was "' + t + '".'
			}, function() {
				e.status = "You cancelled the dialog."
			})
		}, e.openOffscreen = function() {
			t.show(t.alert().clickOutsideToClose(!0).title("Opening from offscreen").content("Closing to offscreen").ariaLabel("Offscreen Demo").ok("Amazing!").openFrom({
				top: 50,
				width: 30,
				height: 80
			}).closeTo({
				left: 1500
			}))
		}
	}
	function a(e, t) {
		e.hide = function() {
			t.hide()
		}, e.cancel = function() {
			t.cancel()
		}, e.answer = function(e) {
			t.hide(e)
		}
	}
	function o(e, t) {
		var a = [{
			title: "One",
			content: "Tabs will become paginated if there isn't enough room for them."
		},
		{
			title: "Two",
			content: "You can swipe left and right on a mobile device to change tabs."
		},
		{
			title: "Three",
			content: "You can bind the selected tab via the selected attribute on the md-tabs element."
		},
		{
			title: "Four",
			content: "If you set the selected tab binding to -1, it will leave no tab selected."
		},
		{
			title: "Five",
			content: "If you remove a tab, it will try to select a new one."
		},
		{
			title: "Six",
			content: "There's an ink bar that follows the selected tab, you can turn it off if you want."
		},
		{
			title: "Seven",
			content: "If you set ng-disabled on a tab, it becomes unselectable. If the currently selected tab becomes disabled, it will try to select the next tab."
		},
		{
			title: "Eight",
			content: "If you look at the source, you're using tabs to look at a demo for tabs. Recursion!"
		},
		{
			title: "Nine",
			content: 'If you set md-theme="green" on the md-tabs element, you\'ll get green tabs.'
		},
		{
			title: "Ten",
			content: "If you're still reading this, you should just go check out the API docs for tabs!"
		}],
			o = null,
			n = null;
		e.tabs = a, e.selectedIndex = 2, e.$watch("selectedIndex", function(e, t) {
			n = o, o = a[e]
		}), e.addTab = function(e, t) {
			t = t || e + " Content View", a.push({
				title: e,
				content: t,
				disabled: !1
			})
		}, e.removeTab = function(e) {
			var t = a.indexOf(e);
			a.splice(t, 1)
		}
	}
	function n(e, t) {
		var a = this,
			o = 0,
			n = 0;
		a.modes = [], a.activated = !0, a.determinateValue = 30, a.toggleActivation = function() {
			a.activated || (a.modes = []), a.activated && (o = n = 0)
		}, t(function() {
			a.determinateValue += 1, a.determinateValue > 100 && (a.determinateValue = 30), 5 > o && !a.modes[o] && a.activated && (a.modes[o] = "indeterminate"), n++ % 4 == 0 && o++
		}, 100, 0, !0)
	}
	function r(e, t) {
		var a = this,
			o = 0,
			n = 0;
		a.mode = "query", a.activated = !0, a.determinateValue = 30, a.determinateValue2 = 30, a.modes = [], a.toggleActivation = function() {
			a.activated || (a.modes = []), a.activated && (o = n = 0, a.determinateValue = 30, a.determinateValue2 = 30)
		}, t(function() {
			a.determinateValue += 1, a.determinateValue2 += 1.5, a.determinateValue > 100 && (a.determinateValue = 30), a.determinateValue2 > 100 && (a.determinateValue2 = 30), 2 > o && !a.modes[o] && a.activated && (a.modes[o] = 0 == o ? "buffer" : "query"), n++ % 4 == 0 && o++, 2 == o && (a.contained = "indeterminate")
		}, 100, 0, !0), t(function() {
			a.mode = "query" == a.mode ? "determinate" : "query"
		}, 7200, 0, !0)
	}
	function i(e, t, a) {
		function o() {
			var t = e.toastPosition;
			t.bottom && n.top && (t.top = !1), t.top && n.bottom && (t.bottom = !1), t.right && n.left && (t.left = !1), t.left && n.right && (t.right = !1), n = angular.extend({}, t)
		}
		var n = {
			bottom: !1,
			top: !0,
			left: !1,
			right: !0
		};
		
		e.toastPosition = angular.extend({}, n), e.getToastPosition = function() {
			return o(), Object.keys(e.toastPosition).filter(function(t) {
				return e.toastPosition[t]
			}).join(" ")
		}, e.showCustomToast = function() {
			t.show({
				controller: "ToastCustomDemo",
				templateUrl: "toast-template.html",
				parent: a[0].querySelector("#toastBounds"),
				hideDelay: 6e3,
				position: e.getToastPosition()
			})
		}, e.showSimpleToast = function() {
			t.show(t.simple().content("Simple Toast!").position(e.getToastPosition()).hideDelay(3e3))
		}, e.showActionToast = function() {
			var a = t.simple().content("Action Toast!").action("OK").highlightAction(!1).position(e.getToastPosition());
			t.show(a).then(function(e) {
				"ok" == e && alert("You clicked 'OK'.")
			})
		}
	}
	function l(e, t) {
		e.closeToast = function() {
			t.hide()
		}
	}
	function s(e) {
		e.demo = {
			showTooltip: !1,
			tipDirection: ""
		}, e.$watch("demo.tipDirection", function(t) {
			t && t.length && (e.demo.showTooltip = !0)
		})
	}
	function c(e) {
		var t = "images/g1.jpg";
		e.messages = [{
			face: t,
			what: "Brunch this weekend?",
			who: "Min Li Chan",
			when: "3:08PM",
			notes: " I'll be in your neighborhood doing errands"
		},
		{
			face: t,
			what: "Brunch this weekend?",
			who: "Min Li Chan",
			when: "3:08PM",
			notes: " I'll be in your neighborhood doing errands"
		},
		{
			face: t,
			what: "Brunch this weekend?",
			who: "Min Li Chan",
			when: "3:08PM",
			notes: " I'll be in your neighborhood doing errands"
		},
		{
			face: t,
			what: "Brunch this weekend?",
			who: "Min Li Chan",
			when: "3:08PM",
			notes: " I'll be in your neighborhood doing errands"
		},
		{
			face: t,
			what: "Brunch this weekend?",
			who: "Min Li Chan",
			when: "3:08PM",
			notes: " I'll be in your neighborhood doing errands"
		},
		{
			face: t,
			what: "Brunch this weekend?",
			who: "Min Li Chan",
			when: "3:08PM",
			notes: " I'll be in your neighborhood doing errands"
		},
		{
			face: t,
			what: "Brunch this weekend?",
			who: "Min Li Chan",
			when: "3:08PM",
			notes: " I'll be in your neighborhood doing errands"
		},
		{
			face: t,
			what: "Brunch this weekend?",
			who: "Min Li Chan",
			when: "3:08PM",
			notes: " I'll be in your neighborhood doing errands"
		},
		{
			face: t,
			what: "Brunch this weekend?",
			who: "Min Li Chan",
			when: "3:08PM",
			notes: " I'll be in your neighborhood doing errands"
		},
		{
			face: t,
			what: "Brunch this weekend?",
			who: "Min Li Chan",
			when: "3:08PM",
			notes: " I'll be in your neighborhood doing errands"
		},
		{
			face: t,
			what: "Brunch this weekend?",
			who: "Min Li Chan",
			when: "3:08PM",
			notes: " I'll be in your neighborhood doing errands"
		}]
	}
	function u() {
		var e = this;
		e.userState = "", e.states = "AL AK AZ AR CA CO CT DE FL GA HI ID IL IN IA KS KY LA ME MD MA MI MN MS MO MT NE NV NH NJ NM NY NC ND OH OK OR PA RI SC SD TN TX UT VT VA WA WV WI WY".split(" ").map(function(e) {
			return {
				abbrev: e
			}
		}), e.sizes = ["small (12-inch)", "medium (14-inch)", "large (16-inch)", "insane (42-inch)"], e.toppings = [{
			category: "meat",
			name: "Pepperoni"
		},
		{
			category: "meat",
			name: "Sausage"
		},
		{
			category: "meat",
			name: "Ground Beef"
		},
		{
			category: "meat",
			name: "Bacon"
		},
		{
			category: "veg",
			name: "Mushrooms"
		},
		{
			category: "veg",
			name: "Onion"
		},
		{
			category: "veg",
			name: "Green Pepper"
		},
		{
			category: "veg",
			name: "Green Olives"
		}]
	}
	angular.module("app.ui").controller("ChipsBasicDemoCtrl", e).controller("DialogDemo", ["$scope", "$mdDialog", t]).controller("TabsDemo", ["$scope", "$log", o]).controller("ProgressCircularDemo", ["$scope", "$interval", n]).controller("ProgressLinearDemo", ["$scope", "$interval", r]).controller("ToastDemo", ["$scope", "$mdToast", "$document", i]).controller("ToastCustomDemo", ["$scope", "$mdToast", l]).controller("TooltipDemo", ["$scope", s]).controller("SubheaderDemo", ["$scope", c]).controller("SelectDemo", u)
}(), function() {
	"use strict";

	function e(e, t) {
		e.start = function() {
			t.$broadcast("preloader:active")
		}, e.complete = function() {
			t.$broadcast("preloader:hide")
		}
	}
	function t(e, t) {
		e.toppings = [{
			name: "Pepperoni",
			wanted: !0
		},
		{
			name: "Sausage",
			wanted: !1
		},
		{
			name: "Black Olives",
			wanted: !0
		}], e.settings = [{
			name: "Wi-Fi",
			extraScreen: "Wi-fi menu",
			icon: "zmdi zmdi-wifi-alt",
			enabled: !0
		},
		{
			name: "Bluetooth",
			extraScreen: "Bluetooth menu",
			icon: "zmdi zmdi-bluetooth",
			enabled: !1
		}], e.messages = [{
			id: 1,
			title: "Message A",
			selected: !1
		},
		{
			id: 2,
			title: "Message B",
			selected: !0
		},
		{
			id: 3,
			title: "Message C",
			selected: !0
		}], e.people = [{
			name: "Janet Perkins",
			img: "img/100-0.jpeg",
			newMessage: !0
		},
		{
			name: "Mary Johnson",
			img: "img/100-1.jpeg",
			newMessage: !1
		},
		{
			name: "Peter Carlsson",
			img: "img/100-2.jpeg",
			newMessage: !1
		}], e.goToPerson = function(e, a) {
			t.show(t.alert().title("Navigating").content("Inspect " + e).ariaLabel("Person inspect demo").ok("Neat!").targetEvent(a))
		}, e.navigateTo = function(e, a) {
			t.show(t.alert().title("Navigating").content("Imagine being taken to " + e).ariaLabel("Navigation demo").ok("Neat!").targetEvent(a))
		}, e.doSecondaryAction = function(e) {
			t.show(t.alert().title("Secondary Action").content("Secondary actions can be used for one click actions").ariaLabel("Secondary click demo").ok("Neat!").targetEvent(e))
		}
	}
	function a(e, t) {
		e.notify = function(e) {
			switch (e) {
				case "info":
					return t.log("Heads up! This alert needs your attention, but it's not super important.");
				case "success":
					return t.logSuccess("Well done! You successfully read this important alert message.");
				case "warning":
					return t.logWarning("Warning! Best check yo self, you're not looking too good.");
				case "error":
					return t.logError("Oh snap! Change a few things up and try submitting again.")
			}
		}
	}
	function o(e) {
		e.alerts = [{
			type: "success",
			msg: "Well done! You successfully read this important alert message."
		},
		{
			type: "info",
			msg: "Heads up! This alert needs your attention, but it is not super important."
		},
		{
			type: "warning",
			msg: "Warning! Best check yo self, you're not looking too good."
		},
		{
			type: "danger",
			msg: "Oh snap! Change a few things up and try submitting again."
		}], e.addAlert = function() {
			var t, a;
			switch (t = Math.ceil(4 * Math.random()), a = void 0, t) {
				case 0:
					a = "info";
					break;
				case 1:
					a = "success";
					break;
				case 2:
					a = "info";
					break;
				case 3:
					a = "warning";
					break;
				case 4:
					a = "danger"
			}
			return e.alerts.push({
				type: a,
				msg: "Another alert!"
			})
		}, e.closeAlert = function(t) {
			return e.alerts.splice(t, 1)
		}
	}
	function n(e) {
		e.max = 200, e.random = function() {
			var t, a;
			a = Math.floor(100 * Math.random()), t = void 0, t = 25 > a ? "success" : 50 > a ? "info" : 75 > a ? "warning" : "danger", e.showWarning = "danger" === t || "warning" === t, e.dynamic = a, e.type = t
		}, e.random()
	}
	function r(e) {
		e.oneAtATime = !0, e.groups = [{
			title: "Dynamic Group Header - 1",
			content: "Dynamic Group Body - 1"
		},
		{
			title: "Dynamic Group Header - 2",
			content: "Dynamic Group Body - 2"
		},
		{
			title: "Dynamic Group Header - 3",
			content: "Dynamic Group Body - 3"
		}], e.items = ["Item 1", "Item 2", "Item 3"], e.status = {
			isFirstOpen: !0,
			isFirstOpen1: !0
		}, e.addItem = function() {
			var t;
			t = e.items.length + 1, e.items.push("Item " + t)
		}
	}
	function i(e) {
		e.isCollapsed = !1
	}
	function l(e, t, a) {
		e.items = ["item1", "item2", "item3"], e.animationsEnabled = !0, e.open = function(o) {
			var n = t.open({
				animation: e.animationsEnabled,
				templateUrl: "myModalContent.html",
				controller: "ModalInstanceCtrl",
				size: o,
				resolve: {
					items: function() {
						return e.items
					}
				}
			});
			
			n.result.then(function(t) {
				e.selected = t
			}, function() {
				a.info("Modal dismissed at: " + new Date)
			})
		}, e.toggleAnimation = function() {
			e.animationsEnabled = !e.animationsEnabled
		}
	}
	function s(e, t, a) {
		e.items = a, e.selected = {
			item: e.items[0]
		}, e.ok = function() {
			t.close(e.selected.item)
		}, e.cancel = function() {
			t.dismiss("cancel")
		}
	}
	function c(e) {
		e.totalItems = 64, e.currentPage = 4, e.setPage = function(t) {
			e.currentPage = t
		}, e.maxSize = 5, e.bigTotalItems = 175, e.bigCurrentPage = 1
	}
	function u(e) {
		e.tabs = [{
			title: "Dynamic Title 1",
			content: "Dynamic content 1.    Consectetur adipisicing elit. Nihil, quidem, officiis, et ex laudantium sed cupiditate voluptatum libero nobis sit illum voluptates beatae ab. Ad, repellendus non sequi et at."
		},
		{
			title: "Disabled",
			content: "Dynamic content 2.    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, quidem, officiis, et ex laudantium sed cupiditate voluptatum libero nobis sit illum voluptates beatae ab. Ad, repellendus non sequi et at.",
			disabled: !0
		}], e.navType = "pills"
	}
	function d(e) {
		e.list = [{
			id: 1,
			title: "Item 1",
			items: []
		},
		{
			id: 2,
			title: "Item 2",
			items: [{
				id: 21,
				title: "Item 2.1",
				items: [{
					id: 211,
					title: "Item 2.1.1",
					items: []
				},
				{
					id: 212,
					title: "Item 2.1.2",
					items: []
				}]
			}]
		},
		{
			id: 3,
			title: "Item 3",
			items: []
		},
		{
			id: 4,
			title: "Item 4",
			items: [{
				id: 41,
				title: "Item 4.1",
				items: []
			}]
		},
		{
			id: 5,
			title: "Item 5",
			items: []
		}], e.selectedItem = {}, e.options = {}, e.remove = function(e) {
			e.remove()
		}, e.toggle = function(e) {
			e.toggle()
		}, e.newSubItem = function(e) {
			var t;
			t = e.$modelValue, t.items.push({
				id: 10 * t.id + t.items.length,
				title: t.title + "." + (t.items.length + 1),
				items: []
			})
		}
	}
	function p(e, t, a) {
		var o, n;
		for (n = [], o = 0; 8 > o;) n[o] = new google.maps.Marker({
			title: "Marker: " + o
		}), o++;
		e.GenerateMapMarkers = function() {
			var t, a, r, i, l;
			for (t = new Date, e.date = t.toLocaleString(), l = Math.floor(4 * Math.random()) + 4, o = 0; l > o;) a = 43.66 + Math.random() / 100, r = -79.4103 + Math.random() / 100, i = new google.maps.LatLng(a, r), n[o].setPosition(i), n[o].setMap(e.map), o++
		}, a(e.GenerateMapMarkers, 2e3)
	}
	angular.module("app.ui").controller("LoaderCtrl", ["$scope", "$rootScope", e]).controller("ListCtrl", ["$scope", "$mdDialog", t]).controller("NotifyCtrl", ["$scope", "logger", a]).controller("AlertDemoCtrl", ["$scope", o]).controller("ProgressDemoCtrl", ["$scope", n]).controller("AccordionDemoCtrl", ["$scope", r]).controller("CollapseDemoCtrl", ["$scope", i]).controller("ModalDemoCtrl", ["$scope", "$uibModal", "$log", l]).controller("ModalInstanceCtrl", ["$scope", "$uibModalInstance", "items", s]).controller("PaginationDemoCtrl", ["$scope", c]).controller("TabsDemoCtrl", ["$scope", u]).controller("TreeDemoCtrl", ["$scope", d]).controller("MapDemoCtrl", ["$scope", "$http", "$interval", p])
}(), function() {
	"use strict";

	function e() {
		function e(e, t) {
			e.addClass("ui-wave");
			var a, o, n, r;
			e.off("click").on("click", function(e) {
				var t = $(this);
				0 === t.find(".ink").length && t.prepend("<span class='ink'></span>"), a = t.find(".ink"), a.removeClass("wave-animate"), a.height() || a.width() || (o = Math.max(t.outerWidth(), t.outerHeight()), a.css({
					height: o,
					width: o
				})), n = e.pageX - t.offset().left - a.width() / 2, r = e.pageY - t.offset().top - a.height() / 2, a.css({
					top: r + "px",
					left: n + "px"
				}).addClass("wave-animate")
			})
		}
		var t = {
			restrict: "A",
			compile: e
		};
		
		return t
	}
	function t() {
		function e(e, t) {
			var a, o;
			o = function() {
				var e, n, r, i, l, s;
				return s = new Date, e = s.getHours(), n = s.getMinutes(), r = s.getSeconds(), n = a(n), r = a(r), l = e + ":" + n + ":" + r, t.html(l), i = setTimeout(o, 500)
			}, a = function(e) {
				return 10 > e && (e = "0" + e), e
			}, o()
		}
		var t = {
			restrict: "A",
			link: e
		};
		
		return t
	}
	function a() {
		return {
			restrict: "A",
			compile: function(e, t) {
				return e.on("click", function(e) {
					e.stopPropagation()
				})
			}
		}
	}
	function o() {
		return {
			restrict: "A",
			link: function(e, t, a) {
				return t.slimScroll({
					height: a.scrollHeight || "100%"
				})
			}
		}
	}
	angular.module("app.ui").directive("uiWave", e).directive("uiTime", t).directive("uiNotCloseOnClick", a).directive("slimScroll", o)
}(), function() {
	"use strict";

	function e() {
		var e;
		return toastr.options = {
			closeButton: !0,
			positionClass: "toast-bottom-right",
			timeOut: "3000"
		}, e = function(e, t) {
			return toastr[t](e)
		}, {
			log: function(t) {
				e(t, "info")
			},
			
			logWarning: function(t) {
				e(t, "warning")
			},
			
			logSuccess: function(t) {
				e(t, "success")
			},
			
			logError: function(t) {
				e(t, "error")
			}
		}
	}
	angular.module("app.ui").factory("logger", e)
}(), function() {
	"use strict";

	function e(e, t) {
		function a(t) {
			var a, o;
			return o = (t - 1) * e.numPerPage, a = o + e.numPerPage, e.currentPageStores = e.filteredStores.slice(o, a)
		}
		function o() {
			return e.select(1), e.currentPage = 1, e.row = ""
		}
		function n() {
			return e.select(1), e.currentPage = 1
		}
		function r() {
			return e.select(1), e.currentPage = 1
		}
		function i() {
			return e.filteredStores = t("filter")(e.stores, e.searchKeywords), e.onFilterChange()
		}
		function l(a) {
			return e.row !== a ? (e.row = a, e.filteredStores = t("orderBy")(e.stores, a), e.onOrderChange()) : void 0
		}
		var s;
		e.stores = [], e.searchKeywords = "", e.filteredStores = [], e.row = "", e.select = a, e.onFilterChange = o, e.onNumPerPageChange = n, e.onOrderChange = r, e.search = i, e.order = l, e.numPerPageOpt = [3, 5, 10, 20], e.numPerPage = e.numPerPageOpt[2], e.currentPage = 1, e.currentPage = [], e.stores = [{
			name: "Nijiya Market",
			price: "$$",
			sales: 292,
			rating: 4
		},
		{
			name: "Eat On Monday Truck",
			price: "$",
			sales: 119,
			rating: 4.3
		},
		{
			name: "Tea Era",
			price: "$",
			sales: 874,
			rating: 4
		},
		{
			name: "Rogers Deli",
			price: "$",
			sales: 347,
			rating: 4.2
		},
		{
			name: "MoBowl",
			price: "$$$",
			sales: 24,
			rating: 4.6
		},
		{
			name: "The Milk Pail Market",
			price: "$",
			sales: 543,
			rating: 4.5
		},
		{
			name: "Nob Hill Foods",
			price: "$$",
			sales: 874,
			rating: 4
		},
		{
			name: "Scratch",
			price: "$$$",
			sales: 643,
			rating: 3.6
		},
		{
			name: "Gochi Japanese Fusion Tapas",
			price: "$$$",
			sales: 56,
			rating: 4.1
		},
		{
			name: "Cost Plus World Market",
			price: "$$",
			sales: 79,
			rating: 4
		},
		{
			name: "Bumble Bee Health Foods",
			price: "$$",
			sales: 43,
			rating: 4.3
		},
		{
			name: "Costco",
			price: "$$",
			sales: 219,
			rating: 3.6
		},
		{
			name: "Red Rock Coffee Co",
			price: "$",
			sales: 765,
			rating: 4.1
		},
		{
			name: "99 Ranch Market",
			price: "$",
			sales: 181,
			rating: 3.4
		},
		{
			name: "Mi Pueblo Food Center",
			price: "$",
			sales: 78,
			rating: 4
		},
		{
			name: "Cucina Venti",
			price: "$$",
			sales: 163,
			rating: 3.3
		},
		{
			name: "Sufi Coffee Shop",
			price: "$",
			sales: 113,
			rating: 3.3
		},
		{
			name: "Dana Street Roasting",
			price: "$",
			sales: 316,
			rating: 4.1
		},
		{
			name: "Pearl Cafe",
			price: "$",
			sales: 173,
			rating: 3.4
		},
		{
			name: "Posh Bagel",
			price: "$",
			sales: 140,
			rating: 4
		},
		{
			name: "Artisan Wine Depot",
			price: "$$",
			sales: 26,
			rating: 4.1
		},
		{
			name: "Hong Kong Chinese Bakery",
			price: "$",
			sales: 182,
			rating: 3.4
		},
		{
			name: "Starbucks",
			price: "$$",
			sales: 97,
			rating: 3.7
		},
		{
			name: "Tapioca Express",
			price: "$",
			sales: 301,
			rating: 3
		},
		{
			name: "House of Bagels",
			price: "$",
			sales: 82,
			rating: 4.4
		}], (s = function() {
			return e.search(), e.select(e.currentPage)
		})()
	}
	angular.module("app.table").controller("TableCtrl", ["$scope", "$filter", e])
}(), function() {
	"use strict";

	function e(e) {
		var t;
		e.worldMap = {}, t = [{
			latLng: [40.71, -74],
			name: "New York"
		},
		{
			latLng: [39.9, 116.4],
			name: "Beijing"
		},
		{
			latLng: [31.23, 121.47],
			name: "Shanghai"
		},
		{
			latLng: [-33.86, 151.2],
			name: "Sydney"
		},
		{
			latLng: [-37.81, 144.96],
			name: "Melboune"
		},
		{
			latLng: [37.33, -121.89],
			name: "San Jose"
		},
		{
			latLng: [1.3, 103.8],
			name: "Singapore"
		},
		{
			latLng: [47.6, -122.33],
			name: "Seattle"
		},
		{
			latLng: [41.87, -87.62],
			name: "Chicago"
		},
		{
			latLng: [37.77, -122.41],
			name: "San Francisco"
		},
		{
			latLng: [32.71, -117.16],
			name: "San Diego"
		},
		{
			latLng: [51.5, -.12],
			name: "London"
		},
		{
			latLng: [48.85, 2.35],
			name: "Paris"
		},
		{
			latLng: [52.52, 13.4],
			name: "Berlin"
		},
		{
			latLng: [-26.2, 28.04],
			name: "Johannesburg"
		},
		{
			latLng: [35.68, 139.69],
			name: "Tokyo"
		},
		{
			latLng: [13.72, 100.52],
			name: "Bangkok"
		},
		{
			latLng: [37.56, 126.97],
			name: "Seoul"
		},
		{
			latLng: [41.87, 12.48],
			name: "Roma"
		},
		{
			latLng: [45.42, -75.69],
			name: "Ottawa"
		},
		{
			latLng: [55.75, 37.61],
			name: "Moscow"
		},
		{
			latLng: [-22.9, -43.19],
			name: "Rio de Janeiro"
		}], e.worldMap = {
			map: "world_mill_en",
			markers: t,
			normalizeFunction: "polynomial",
			backgroundColor: null,
			zoomOnScroll: !1,
			regionStyle: {
				initial: {
					fill: "#EEEFF3"
				},
				
				hover: {
					fill: e.color.primary
				}
			},
			
			markerStyle: {
				initial: {
					fill: "#BF616A",
					stroke: "rgba(191,97,106,.8)",
					"fill-opacity": 1,
					"stroke-width": 9,
					"stroke-opacity": .5
				},
				
				hover: {
					stroke: "black",
					"stroke-width": 2
				}
			}
		}
	}
	angular.module("app.ui.map").controller("jvectormapCtrl", ["$scope", e])
}(), function() {
	"use strict";

	function e() {
		return {
			restrict: "A",
			scope: {
				options: "="
			},
			
			link: function(e, t, a) {
				var o;
				o = e.options, t.vectorMap(o)
			}
		}
	}
	angular.module("app.ui.map").directive("uiJvectormap", e)
}(), function() {
	"use strict";

	function e(e) {
		return {
			restrict: "A",
			template: '<span class="bar"></span>',
			link: function(e, t, a) {
				t.addClass("preloaderbar hide"), e.$on("$stateChangeStart", function(e) {
					t.removeClass("hide").addClass("active")
				}), e.$on("$stateChangeSuccess", function(e, a, o, n) {
					e.targetScope.$watch("$viewContentLoaded", function() {
						t.addClass("hide").removeClass("active")
					})
				}), e.$on("preloader:active", function(e) {
					t.removeClass("hide").addClass("active")
				}), e.$on("preloader:hide", function(e) {
					t.addClass("hide").removeClass("active")
				})
			}
		}
	}
	angular.module("app.layout").directive("uiPreloader", ["$rootScope", e])
}(), function() {
	function e() {
		$("#loader-container").fadeOut("slow")
	}
	$(window).load(function() {
		setTimeout(e, 1e3)
	})
}(),
function() {
	"use strict";
	angular.module("app").controller("DashboardCtrl", ["$scope", function(e) {
		e.combo = {}, e.combo.options = {
			legend: {
				show: !0,
				x: "right",
				y: "top",
				data: ["WOM", "Viral", "Paid"]
			},
			
			grid: {
				x: 40,
				y: 60,
				x2: 40,
				y2: 30,
				borderWidth: 0
			},
			
			tooltip: {
				show: !0,
				trigger: "axis",
				axisPointer: {
					lineStyle: {
						color: e.color.gray
					}
				}
			},
			
			xAxis: [{
				type: "category",
				axisLine: {
					show: !1
				},
				
				axisTick: {
					show: !1
				},
				
				axisLabel: {
					textStyle: {
						color: "#607685"
					}
				},
				
				splitLine: {
					show: !1,
					lineStyle: {
						color: "#f3f3f3"
					}
				},
				
				data: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]
			}],
			yAxis: [{
				type: "value",
				axisLine: {
					show: !1
				},
				
				axisTick: {
					show: !1
				},
				
				axisLabel: {
					textStyle: {
						color: "#607685"
					}
				},
				
				splitLine: {
					show: !0,
					lineStyle: {
						color: "#f3f3f3"
					}
				}
			}],
			series: [{
				name: "WOM",
				type: "bar",
				clickable: !1,
				itemStyle: {
					normal: {
						color: e.color.gray
					},
					
					emphasis: {
						color: "rgba(237,240,241,.7)"
					}
				},
				
				barCategoryGap: "50%",
				data: [75, 62, 45, 60, 73, 50, 31, 56, 70, 63, 49, 72, 76, 67, 46, 51, 69, 59, 85, 67, 56],
				legendHoverLink: !1,
				z: 2
			},
			{
				name: "Viral",
				type: "line",
				smooth: !0,
				itemStyle: {
					normal: {
						color: e.color.success,
						areaStyle: {
							color: "rgba(139,195,74,.7)",
							type: "default"
						}
					}
				},
				
				data: [0, 0, 0, 5, 20, 15, 30, 28, 25, 40, 60, 40, 43, 32, 36, 23, 12, 15, 2, 0, 0],
				symbol: "none",
				legendHoverLink: !1,
				z: 3
			},
			{
				name: "Paid",
				type: "line",
				smooth: !0,
				itemStyle: {
					normal: {
						color: e.color.info,
						areaStyle: {
							color: "rgba(0,188,212,.7)",
							type: "default"
						}
					}
				},
				
				data: [0, 0, 0, 0, 1, 6, 15, 8, 16, 9, 25, 12, 50, 20, 25, 12, 2, 1, 0, 0, 0],
				symbol: "none",
				legendHoverLink: !1,
				z: 4
			}]
		}, e.smline1 = {}, e.smline2 = {}, e.smline3 = {}, e.smline4 = {}, e.smline1.options = {
			tooltip: {
				show: !1,
				trigger: "axis",
				axisPointer: {
					lineStyle: {
						color: e.color.gray
					}
				}
			},
			
			grid: {
				x: 1,
				y: 1,
				x2: 1,
				y2: 1,
				borderWidth: 0
			},
			
			xAxis: [{
				type: "category",
				show: !1,
				boundaryGap: !1,
				data: [1, 2, 3, 4, 5, 6, 7]
			}],
			yAxis: [{
				type: "value",
				show: !1,
				axisLabel: {
					formatter: "{value} ??C"
				}
			}],
			series: [{
				name: "*",
				type: "line",
				symbol: "none",
				data: [11, 11, 15, 13, 12, 13, 10],
				itemStyle: {
					normal: {
						color: e.color.info
					}
				}
			}]
		}, e.smline2.options = {
			tooltip: {
				show: !1,
				trigger: "axis",
				axisPointer: {
					lineStyle: {
						color: e.color.gray
					}
				}
			},
			
			grid: {
				x: 1,
				y: 1,
				x2: 1,
				y2: 1,
				borderWidth: 0
			},
			
			xAxis: [{
				type: "category",
				show: !1,
				boundaryGap: !1,
				data: [1, 2, 3, 4, 5, 6, 7]
			}],
			yAxis: [{
				type: "value",
				show: !1,
				axisLabel: {
					formatter: "{value} ??C"
				}
			}],
			series: [{
				name: "*",
				type: "line",
				symbol: "none",
				data: [11, 10, 14, 12, 13, 11, 12],
				itemStyle: {
					normal: {
						color: e.color.success
					}
				}
			}]
		}, e.smline3.options = {
			tooltip: {
				show: !1,
				trigger: "axis",
				axisPointer: {
					lineStyle: {
						color: e.color.gray
					}
				}
			},
			
			grid: {
				x: 1,
				y: 1,
				x2: 1,
				y2: 1,
				borderWidth: 0
			},
			
			xAxis: [{
				type: "category",
				show: !1,
				boundaryGap: !1,
				data: [1, 2, 3, 4, 5, 6, 7]
			}],
			yAxis: [{
				type: "value",
				show: !1,
				axisLabel: {
					formatter: "{value} ??C"
				}
			}],
			series: [{
				name: "*",
				type: "line",
				symbol: "none",
				data: [11, 10, 15, 13, 12, 13, 10],
				itemStyle: {
					normal: {
						color: e.color.danger
					}
				}
			}]
		}, e.smline4.options = {
			tooltip: {
				show: !1,
				trigger: "axis",
				axisPointer: {
					lineStyle: {
						color: e.color.gray
					}
				}
			},
			
			grid: {
				x: 1,
				y: 1,
				x2: 1,
				y2: 1,
				borderWidth: 0
			},
			
			xAxis: [{
				type: "category",
				show: !1,
				boundaryGap: !1,
				data: [1, 2, 3, 4, 5, 6, 7]
			}],
			yAxis: [{
				type: "value",
				show: !1,
				axisLabel: {
					formatter: "{value} ??C"
				}
			}],
			series: [{
				name: "*",
				type: "line",
				symbol: "none",
				data: [11, 12, 8, 10, 15, 12, 10],
				itemStyle: {
					normal: {
						color: e.color.warning
					}
				}
			}]
		};
		
		var t = {
			normal: {
				color: e.color.primary,
				label: {
					show: !0,
					position: "center",
					formatter: "{b}",
					textStyle: {
						color: "#999",
						baseline: "top",
						fontSize: 12
					}
				},
				
				labelLine: {
					show: !1
				}
			}
		},
			a = {
				normal: {
					label: {
						formatter: function(e) {
							return 100 - e.value + "%"
						},
						
						textStyle: {
							color: e.color.text,
							baseline: "bottom",
							fontSize: 20
						}
					}
				}
			},
			o = {
				normal: {
					color: "#f1f1f1",
					label: {
						show: !0,
						position: "center"
					},
					
					labelLine: {
						show: !1
					}
				}
			},
			n = [55, 60];
		e.pie = {}, e.pie.options = {
			series: [{
				type: "pie",
				center: ["12.5%", "50%"],
				radius: n,
				itemStyle: a,
				data: [{
					name: "Bounce",
					value: 36,
					itemStyle: t
				},
				{
					name: "other",
					value: 64,
					itemStyle: o
				}]
			},
			{
				type: "pie",
				center: ["37.5%", "50%"],
				radius: n,
				itemStyle: a,
				data: [{
					name: "Activation",
					value: 45,
					itemStyle: t
				},
				{
					name: "other",
					value: 55,
					itemStyle: o
				}]
			},
			{
				type: "pie",
				center: ["62.5%", "50%"],
				radius: n,
				itemStyle: a,
				data: [{
					name: "Retention",
					value: 25,
					itemStyle: t
				},
				{
					name: "other",
					value: 75,
					itemStyle: o
				}]
			},
			{
				type: "pie",
				center: ["87.5%", "50%"],
				radius: n,
				itemStyle: a,
				data: [{
					name: "Referral",
					value: 75,
					itemStyle: t
				},
				{
					name: "other",
					value: 25,
					itemStyle: o
				}]
			}]
		}
	}])
}(), function() {
	"use strict";

	function e(e) {
		function t(t, a, o) {
			var n;
			n = $("#app"), a.on("click", function(t) {
				return n.hasClass("nav-collapsed-min") ? n.removeClass("nav-collapsed-min") : (n.addClass("nav-collapsed-min"), e.$broadcast("nav:reset")), t.preventDefault()
			})
		}
		var a = {
			restrict: "A",
			link: t
		};
		
		return a
	}
	function t() {
		function e(e, t, a) {
			var o, n, r, i, l, s, c, u, d, p, m;
			p = 250, c = $(window), i = t.find("ul").parent("li"), i.append('<i class="fa fa-angle-down icon-has-ul-h"></i>'), o = i.children("a"), o.append('<i class="fa fa-angle-down icon-has-ul"></i>'), l = t.children("li").not(i), n = l.children("a"), r = $("#app"), s = $("#nav-container"), o.on("click", function(e) {
				var t, a;
				return r.hasClass("nav-collapsed-min") || s.hasClass("nav-horizontal") && c.width() >= 768 ? !1 : (a = $(this), t = a.parent("li"), i.not(t).removeClass("open").find("ul").slideUp(p), t.toggleClass("open").find("ul").stop().slideToggle(p), void e.preventDefault())
			}), n.on("click", function(e) {
				i.removeClass("open").find("ul").slideUp(p)
			}), e.$on("nav:reset", function(e) {
				i.removeClass("open").find("ul").slideUp(p)
			}), u = void 0, d = c.width(), m = function() {
				var e;
				e = c.width(), 768 > e && r.removeClass("nav-collapsed-min"), 768 > d && e >= 768 && s.hasClass("nav-horizontal") && i.removeClass("open").find("ul").slideUp(p), d = e
			}, c.resize(function() {
				var e;
				clearTimeout(e), e = setTimeout(m, 300)
			})
		}
		var t = {
			restrict: "A",
			link: e
		};
		
		return t
	}
	function a() {
		function e(e, t, a, o) {
			var n, r, i;
			r = t.find("a"), i = function() {
				return o.path()
			}, n = function(e, t) {
				return t = "#" + t, angular.forEach(e, function(e) {
					var a, o, n;
					return o = angular.element(e), a = o.parent("li"), n = o.attr("href"), a.hasClass("active") && a.removeClass("active"), 0 === t.indexOf(n) ? a.addClass("active") : void 0
				})
			}, n(r, o.path()), e.$watch(i, function(e, t) {
				return e !== t ? n(r, o.path()) : void 0
			})
		}
		var t = {
			restrict: "A",
			controller: ["$scope", "$element", "$attrs", "$location", e]
		};
		
		return t
	}
	function o() {
		function e(e, t, a) {
			t.on("click", function() {
				return $("#app").toggleClass("on-canvas")
			})
		}
		var t = {
			restrict: "A",
			link: e
		};
		
		return t
	}
	angular.module("app.layout").directive("toggleNavCollapsedMin", ["$rootScope", e]).directive("collapseNav", t).directive("highlightActive", a).directive("toggleOffCanvas", o)
}();