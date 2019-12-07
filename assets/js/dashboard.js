
/*------------------- CHART KPI 1.1 --------------------*/ 
 var gaugeOptions = {

    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '80%'],
        size: '160%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.1, '#C9302C'], // red            
            [0.5, '#EC971F'], // yellow
            [0.9, '#169F85'] // green
        ],
        lineWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: -70
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-1-1', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 40,
        title: {
            text: ''
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Speed',
        data: [20],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                   '<span style="font-size:12px;color:silver">mahasiswa</span></div>'
        },
        tooltip: {
            valueSuffix: ' Mahasiswa'
        }
    }]

}));


/*------------------- CHART KPI 1.2 --------------------*/ 

 var gaugeOptions = {

    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '80%'],
        size: '160%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.1, '#C9302C'], // red            
            [0.5, '#EC971F'], // yellow
            [0.9, '#169F85'] // green
        ],
        lineWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: -70
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-1-2', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 10,
        title: {
            text: ''
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Speed',
        data: [4],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                   '<span style="font-size:12px;color:silver">sks</span></div>'
        },
        tooltip: {
            valueSuffix: ' SKS'
        }
    }]

}));
/*------------------- CHART KPI 1.3 --------------------*/ 

 var gaugeOptions = {

    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '80%'],
        size: '160%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.1, '#C9302C'], // red            
            [0.5, '#EC971F'], // yellow
            [0.9, '#169F85'] // green
        ],
        lineWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: -70
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-1-3', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 4,
        title: {
            text: ''
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Speed',
        data: [3.8],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                   '<span style="font-size:12px;color:silver">ipk</span></div>'
        },
        tooltip: {
            valueSuffix: ' ipk'
        }
    }]

}));

/*------------------- CHART KPI 2.1 --------------------*/ 
 var gaugeOptions = {

    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '85%'],
        size: '140%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.1, '#C9302C'], // red            
            [0.5, '#EC971F'], // yellow
            [0.9, '#169F85'] // green
        ],
        lineWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: -70
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-2-1', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 20,
        title: {
            text: ''
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Speed',
        data: [11],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                   '<span style="font-size:12px;color:silver">matakuliah</span></div>'
        },
        tooltip: {
            valueSuffix: ' matakuliah'
        }
    }]

}));

/*------------------- CHART KPI 2.2 --------------------*/ 
 var gaugeOptions = {

    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '85%'],
        size: '140%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.1, '#C9302C'], // red            
            [0.5, '#EC971F'], // yellow
            [0.9, '#169F85'] // green
        ],
        lineWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: -70
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-2-2', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 50,
        title: {
            text: ''
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Speed',
        data: [30],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                   '<span style="font-size:12px;color:silver">mahasiswa</span></div>'
        },
        tooltip: {
            valueSuffix: ' Mahasiswa'
        }
    }]

}));

/*------------------- CHART KPI 2.3 --------------------*/ 

 Highcharts.chart('container-2-3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false,
    },
    title: {
        text: null,
        align: 'center',
        verticalAlign: 'middle',
        y: 60
    },

    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: true,
                distance: -20,
                style: {
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '95%'],
            size: '180%'
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        type: 'pie',
        name: 'nilai',
        innerSize: '50%',
        data: [
            ['UD', 58.9],
            ['DO', 13.29],
            ['Cuti', 13],
            ['Aktif', 3.78],
            ['dst', 3.42],
        ]
    }]
});


/*------------------- CHART KPI 2.4 --------------------*/ 



/*------------------- CHART KPI 3.1 --------------------*/ 

 var gaugeOptions = {

    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '80%'],
        size: '160%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.1, '#C9302C'], // red            
            [0.5, '#EC971F'], // yellow
            [0.9, '#169F85'] // green
        ],
        lineWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: -70
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-3-1', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 40,
        title: {
            text: ''
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Speed',
        data: [21],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                   '<span style="font-size:12px;color:silver">sks</span></div>'
        },
        tooltip: {
            valueSuffix: ' sks'
        }
    }]

}));


/*------------------- CHART KPI 3.2 --------------------*/ 

 var gaugeOptions = {

    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '80%'],
        size: '160%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.1, '#C9302C'], // red            
            [0.5, '#EC971F'], // yellow
            [0.9, '#169F85'] // green
        ],
        lineWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: -70
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-3-2', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 4,
        title: {
            text: ''
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Speed',
        data: [3.15],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                   '<span style="font-size:12px;color:silver">ipk</span></div>'
        },
        tooltip: {
            valueSuffix: ' ipk'
        }
    }]

}));

/*------------------- CHART KPI 3.3 --------------------*/ 


 var gaugeOptions = {

    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '80%'],
        size: '160%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.3, '#C9302C'], // red            
            [0.5, '#EC971F'], // yellow
            [0.9, '#169F85'] // green
        ],
        lineWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: -70
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-3-3', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 4,
        title: {
            text: ''
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Speed',
        data: [1.15],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                   '<span style="font-size:12px;color:silver">ipk</span></div>'
        },
        tooltip: {
            valueSuffix: ' ipk'
        }
    }]

}));
