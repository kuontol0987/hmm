<?php

define('allow', true);
define('admin', true);
include_once($_SERVER['DOCUMENT_ROOT'].'/includes.php');

if( isset($_SERVER['HTTP_SEC_FETCH_DEST']) && $_SERVER['HTTP_SEC_FETCH_DEST'] != 'iframe' ) {
    echo 'Direct access not permited!';
    die();
}

if (!isset($GET['server']) || empty(isset($GET['server']))) {
    header('Location: /home');
    die();
} else {
    $server = $GET['server'];
    if ($server == "1") {
        $ip = '117.27.239.45';
        $allow = 1;
    } else if ($server == "2") {
        $ip = "115.231.175.7";
        $allow = 1;
    } else if ($server == "3") {
        $ip = "101.71.138.0";
        $allow = 1;
    } else if ($server == "4") {
        $ip = "180.188.16.147";
        $allow = 1;
    } else if ($server == "5") {
        $ip = "43.240.204.71";
        $allow = 1;
    } else {
        $allow = 0;
        echo 'Please select available server!';
        die();
    }
    
}
?>
<meta name="robots" content="noindex">
<style>

        .full {
            width: 100%;
            height: 70%;
        }

    </style>
<body>
<?php if ($allow == 1) { ?>
<div id="container" class="full"></div>

</body>
<script src="/assets/libs/jquery/jquery.min.js"></script>
<script src="/assets/js/highcharts.js"></script>
<script>




var chart;
var pointx = null;
var target_ip;
var ip = "<?php echo $ip;  ?>";
target_ip = "<?php echo $ip;  ?>";

/*
target_ip[2] = " * ";
target_ip[3] = "0";
target_ip = target_ip.join('.');
*/

$(document).ready(function() {
    chart = new Highcharts.Chart({
        chart: {
            zoomType: 'x',
            renderTo: 'container',
            defaultSeriesType: 'spline'
        },
        title: {
            text: 'DSTAT.PRO'
        },
        subtitle: {
            text: 'MBPS PER SECOND ON ' + ip
        },
        xAxis: {
            type: 'datetime'
        },
        yAxis: {
            minPadding: 0.2,
            maxPadding: 0.2,
            title: {
                text: 'Mbps/Sec',
                margin: 80
            }
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            area: {
                fillColor: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1
                    },
                    stops: [
                        [0, Highcharts.getOptions().colors[0]],
                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                    ]
                },
                marker: {
                    radius: 2
                },
                lineWidth: 1,
                states: {
                    hover: {
                        lineWidth: 1
                    }
                },
                threshold: null
            }
        },
        series: [{
            type: 'area',
            name: 'Mbps/Sec',
            data: []
        }]
    });
		var server = 'wss://ws.yundun.com:443/ddos_report_service';
        var ws = new WebSocket(server);
        var temp_arr = [0.1];
        var max_bps = 0.1;
			
        ws.onopen = function() {
            var data = {
                "action": "getTopTrafficin",
                "task_return": false,
                "params": {
                    "addTimer": 1000,
                    "limit": 100,
                    "country": "foreign", // country china foreign
                    "source": "new_ddos",
                    "token": "",
                    "meal_flag": null,
                    "user_id": "",
                    "pub": false
                },
                "actionClose": 0
            };
            ws.send(JSON.stringify(data));
        };
		
    ws.onmessage = function(evt) {
        data = JSON.parse(evt.data);
        if (data.status != 1) {
            return
        }
        data = data.data;
        $.each(data, function(index, value) {
            if (value.host == target_ip) {
                temp_arr.push(value.trafficin);
            }
        });
        max_bps = Math.max.apply(null, temp_arr);
        temp_arr = [0.1];
        var series = chart.series[0],
            shift = series.data.length > 20;
        chart.series[0].addPoint([Math.floor($.now()), max_bps], true, shift);
        max_bps = 0.1
    }
});
Highcharts.createElement('link', {
    href: 'https://fonts.googleapis.com/css?family=Unica+One',
    rel: 'stylesheet',
    type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);
Highcharts.theme = {
    colors: ['#222736', '#2a3042', '#2a3042', '#2a3042', '#2a3042', '#2a3042', '#2a3042', '#222736', '#222736', '#222736', '#222736'],
    chart: {
        backgroundColor: {
            linearGradient: {
                x1: 0,
                y1: 0,
                x2: 1,
                y2: 1
            },
            stops: [
                [0, '#32394e'],
                [1, '#32394e']
            ]
        },
        style: {
            fontFamily: '\'Unica One\', sans-serif'
        },
        plotBorderColor: '#606063'
    },
    title: {
        style: {
            color: '#E0E0E3',
            textTransform: 'uppercase',
            fontSize: '20px'
        }
    },
    subtitle: {
        style: {
            color: '#E0E0E3',
            textTransform: 'uppercase'
        }
    },
    xAxis: {
        gridLineColor: '#707073',
        labels: {
            style: {
                color: '#E0E0E3'
            }
        },
        lineColor: '#707073',
        minorGridLineColor: '#505053',
        tickColor: '#707073',
        title: {
            style: {
                color: '#A0A0A3'
            }
        }
    },
    yAxis: {
        gridLineColor: '#707073',
        labels: {
            style: {
                color: '#E0E0E3'
            }
        },
        lineColor: '#707073',
        minorGridLineColor: '#505053',
        tickColor: '#707073',
        tickWidth: 1,
        title: {
            style: {
                color: '#A0A0A3'
            }
        }
    },
    tooltip: {
        backgroundColor: 'rgba(0, 0, 0, 0.85)',
        style: {
            color: '#F0F0F0'
        }
    },
    plotOptions: {
        series: {
            dataLabels: {
                color: '#B0B0B3'
            },
            marker: {
                lineColor: '#333'
            }
        },
        boxplot: {
            fillColor: '#505053'
        },
        candlestick: {
            lineColor: 'white'
        },
        errorbar: {
            color: 'white'
        }
    },
    legend: {
        itemStyle: {
            color: '#E0E0E3'
        },
        itemHoverStyle: {
            color: '#FFF'
        },
        itemHiddenStyle: {
            color: '#606063'
        }
    },
    credits: {
        style: {
            color: '#222736'
        }
    },
    labels: {
        style: {
            color: '#707073'
        }
    },
    drilldown: {
        activeAxisLabelStyle: {
            color: '#F0F0F3'
        },
        activeDataLabelStyle: {
            color: '#F0F0F3'
        }
    },
    navigation: {
        buttonOptions: {
            symbolStroke: '#DDDDDD',
            theme: {
                fill: '#505053'
            }
        }
    },
    rangeSelector: {
        buttonTheme: {
            fill: '#505053',
            stroke: '#32394e',
            style: {
                color: '#CCC'
            },
            states: {
                hover: {
                    fill: '#707073',
                    stroke: '#32394e',
                    style: {
                        color: 'white'
                    }
                },
                select: {
                    fill: '#000003',
                    stroke: '#32394e',
                    style: {
                        color: 'white'
                    }
                }
            }
        },
        inputBoxBorderColor: '#505053',
        inputStyle: {
            backgroundColor: '#333',
            color: 'silver'
        },
        labelStyle: {
            color: 'silver'
        }
    },
    navigator: {
        handles: {
            backgroundColor: '#222736',
            borderColor: '#AAA'
        },
        outlineColor: '#CCC',
        maskFill: 'rgba(255,255,255,0.1)',
        series: {
            color: '#7798BF',
            lineColor: '#A6C7ED'
        },
        xAxis: {
            gridLineColor: '#505053'
        }
    },
    scrollbar: {
        barBackgroundColor: '#808083',
        barBorderColor: '#808083',
        buttonArrowColor: '#CCC',
        buttonBackgroundColor: '#606063',
        buttonBorderColor: '#606063',
        rifleColor: '#FFF',
        trackBackgroundColor: '#404043',
        trackBorderColor: '#404043'
    },
    legendBackgroundColor: 'rgba(0, 0, 0, 0.5)',
    background2: '#505053',
    dataLabelsColor: '#B0B0B3',
    textColor: '#C0C0C0',
    contrastTextColor: '#F0F0F3',
    maskColor: 'rgba(255,255,255,0.3)'
};
Highcharts.setOptions(Highcharts.theme);
</script>
<?php } ?>
</html>
