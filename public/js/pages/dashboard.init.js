! function (s) {
    "use strict";
    var o = function () {
        this.$body = s("body"), this.$realData = []
    };
    o.prototype.createPlotGraph = function (o, t, e, i, a, l, r, n) {
        s.plot(s(o), [{
            data: t,
            label: a[0],
            color: l[0]
        }, {
            data: e,
            label: a[1],
            color: l[1]
        }, {
            data: i,
            label: a[2],
            color: l[2]
        }], {
            series: {
                lines: {
                    show: !0,
                    fill: !0,
                    lineWidth: 2,
                    fillColor: {
                        colors: [{
                            opacity: .5
                        }, {
                            opacity: .5
                        }, {
                            opacity: .8
                        }]
                    }
                },
                points: {
                    show: !0
                },
                shadowSize: 0
            },
            grid: {
                hoverable: !0,
                clickable: !0,
                borderColor: r,
                tickColor: "#f9f9f9",
                borderWidth: 1,
                labelMargin: 30,
                backgroundColor: n
            },
            legend: {
                position: "ne",
                margin: [0, -32],
                noColumns: 0,
                labelBoxBorderColor: null,
                labelFormatter: function (o, t) {
                    return o + "&nbsp;&nbsp;"
                },
                width: 30,
                height: 2
            },
            yaxis: {
                axisLabel: "Daily Visits",
                tickColor: "#f5f5f5",
                font: {
                    color: "#bdbdbd"
                }
            },
            xaxis: {
                axisLabel: "Last Days",
                tickColor: "#f5f5f5",
                font: {
                    color: "#bdbdbd"
                }
            },
            tooltip: !0,
            tooltipOpts: {
                content: "%s: Value of %x is %y",
                shifts: {
                    x: -60,
                    y: 25
                },
                defaultTheme: !1
            },
            splines: {
                show: !0,
                tension: .1,
                lineWidth: 1
            }
        })
    }, o.prototype.createDonutGraph = function (o, t, e, i) {
        var a = [{
                label: t[0],
                data: e[0]
            }, {
                label: t[1],
                data: e[1]
            }, {
                label: t[2],
                data: e[2]
            }, {
                label: t[3],
                data: e[3]
            }, {
                label: t[4],
                data: e[4]
            }],
            l = {
                series: {
                    pie: {
                        show: !0,
                        innerRadius: .7
                    }
                },
                legend: {
                    position: "sw",
                    margin: [0, 0],
                    noColumns: 2,
                    show: !1,
                    labelFormatter: function (o, t) {
                        return '<div style="font-size:14px;">&nbsp;' + o + "</div>"
                    },
                    labelBoxBorderColor: null,
                    width: 20
                },
                grid: {
                    hoverable: !0,
                    clickable: !0
                },
                colors: i,
                tooltip: !0,
                tooltipOpts: {
                    content: "%s, %p.0%"
                }
            };
        s.plot(s(o), a, l)
    }, o.prototype.createCombineGraph = function (o, t, e, i) {
        var a = [{
                label: e[0],
                data: i[0],
                lines: {
                    show: !0,
                    fill: !0
                },
                points: {
                    show: !0
                }
            }, {
                label: e[1],
                data: i[1],
                lines: {
                    show: !0
                },
                points: {
                    show: !0
                }
            }, {
                label: e[2],
                data: i[2],
                bars: {
                    show: !0
                }
            }],
            l = {
                series: {
                    shadowSize: 0
                },
                grid: {
                    hoverable: !0,
                    clickable: !0,
                    tickColor: "#f9f9f9",
                    borderWidth: 1,
                    borderColor: "#eeeeee"
                },
                colors: ["#e3eaef", "#f1556c", "#02c0ce"],
                tooltip: !0,
                tooltipOpts: {
                    defaultTheme: !1
                },
                legend: {
                    position: "ne",
                    margin: [0, -32],
                    noColumns: 0,
                    labelBoxBorderColor: null,
                    labelFormatter: function (o, t) {
                        return o + "&nbsp;&nbsp;"
                    },
                    width: 30,
                    height: 2
                },
                yaxis: {
                    axisLabel: "Point Value (1000)",
                    tickColor: "#f5f5f5",
                    font: {
                        color: "#bdbdbd"
                    }
                },
                xaxis: {
                    axisLabel: "Daily Hours",
                    ticks: t,
                    tickColor: "#f5f5f5",
                    font: {
                        color: "#bdbdbd"
                    }
                }
            };
        s.plot(s(o), a, l)
    }, o.prototype.init = function () {
        this.createPlotGraph("#website-stats", [
            [0, 13],
            [1, 13],
            [2, 14],
            [3, 62],
            [4, 13],
            [5, 10],
            [6, 56],
            [7, 13],
            [8, 12],
            [9, 20],
            [10, 48],
            [11, 16],
            [12, 14]
        ], [
            [0, 8],
            [1, 10],
            [2, 12],
            [3, 14],
            [4, 36],
            [5, 7],
            [6, 9],
            [7, 10],
            [8, 41],
            [9, 17],
            [10, 15],
            [11, 13],
            [12, 11]
        ], [
            [0, 3],
            [1, 22],
            [2, 8],
            [3, 10],
            [4, 7],
            [5, 3],
            [6, 5],
            [7, 7],
            [8, 6],
            [9, 14],
            [10, 35],
            [11, 10],
            [12, 8]
        ], ["Bitcoin", "Ethereum", "Litecoin"], ["#02c0ce", "#2d7bf4", "#f1556c"], "#f5f5f5", "#fff");
        var o = [
            [
                [0, 201],
                [1, 520],
                [2, 337],
                [3, 261],
                [4, 157],
                [5, 95],
                [6, 200],
                [7, 250],
                [8, 320],
                [9, 500],
                [10, 152],
                [11, 214],
                [12, 364],
                [13, 449],
                [14, 558],
                [15, 282],
                [16, 379],
                [17, 429],
                [18, 518],
                [19, 470],
                [20, 330],
                [21, 245],
                [22, 358],
                [23, 74]
            ],
            [
                [0, 311],
                [1, 630],
                [2, 447],
                [3, 371],
                [4, 267],
                [5, 205],
                [6, 310],
                [7, 360],
                [8, 430],
                [9, 610],
                [10, 262],
                [11, 324],
                [12, 474],
                [13, 559],
                [14, 668],
                [15, 392],
                [16, 489],
                [17, 539],
                [18, 628],
                [19, 580],
                [20, 440],
                [21, 355],
                [22, 468],
                [23, 184]
            ],
            [
                [23, 727],
                [22, 128],
                [21, 110],
                [20, 92],
                [19, 172],
                [18, 63],
                [17, 150],
                [16, 592],
                [15, 12],
                [14, 246],
                [13, 52],
                [12, 149],
                [11, 123],
                [10, 2],
                [9, 325],
                [8, 10],
                [7, 15],
                [6, 89],
                [5, 65],
                [4, 77],
                [3, 600],
                [2, 200],
                [1, 385],
                [0, 200]
            ]
        ];
        this.createCombineGraph("#combine-chart #combine-chart-container", [
            [0, "22h"],
            [1, ""],
            [2, "00h"],
            [3, ""],
            [4, "02h"],
            [5, ""],
            [6, "04h"],
            [7, ""],
            [8, "06h"],
            [9, ""],
            [10, "08h"],
            [11, ""],
            [12, "10h"],
            [13, ""],
            [14, "12h"],
            [15, ""],
            [16, "14h"],
            [17, ""],
            [18, "16h"],
            [19, ""],
            [20, "18h"],
            [21, ""],
            [22, "20h"],
            [23, ""]
        ], ["Last 24 Hours", "Last 48 Hours", "Difference"], o);
        this.createDonutGraph("#donut-chart #donut-chart-container", ["Bitcoin", "Ethereum", "Litecoin", "Bitcoin Cash", "Cardano"], [48, 30, 15, 32, 26], ["#02c0ce", "#2d7bf4", "#e3eaef", "#f1556c", "#f9bc0b"])
    }, s.dashboard = new o, s.dashboard.Constructor = o
}(window.jQuery),
function (o) {
    "use strict";
    window.jQuery.dashboard.init()
}();