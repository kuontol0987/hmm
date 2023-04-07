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
        $ip = '38.27.122.103';
        $allow = 1;
    } else if ($server == "2") {
        $ip = '135.181.79.113';
        $allow = 1;
    } else if ($server == "3") {
        $ip = '85.10.195.175';
        $allow = 1;
    } else if ($server == "4") {
        $ip = '23.237.42.18';
        $allow = 1;
    } else if ($server == "5") {
        $ip = '51.15.25.208';
        $allow = 1;
    } else if ($server == "6") {
        $ip = '51.159.30.249';
        $allow = 1;
    } else if ($server == "7") {
        $ip = '109.71.9.87';
        $allow = 1;
    } else if ($server == "8") {
        $ip = '49.51.35.158';
        $allow = 1;
    } else if ($server == "9") {
        $ip = '46.166.142.81';
        $allow = 1;
    } else if ($server == "10") {
        $ip = '35.221.231.4';
        $allow = 1;
    } else if ($server == "11") {
        $ip = '69.162.108.171';
        $allow = 1;
    } else if ($server == "12") {
        $ip = '91.232.174.39';
        $allow = 1;
    } else {
        $allow = 0;
        echo 'Please select valid graph!';
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
<script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="/assets/js/highcharts.js"></script>
<script src="/assets/js/exporting.js"></script>
<script>
        $(function() {
            var mychart;
            var previous = null;
            var count = 0;
            var extra = [
                '',
                'Requests Per Second of <?php echo $ip; ?>',
                'Requests', 
            ];

            $(window).load(function(){
                initiateChart("container");
                parseFile();
            });

            function parseFile()
            {
                $.ajax({
                    url: "/graphs/reqs.php?server=1",
                    dataType: "text",
                    cache: false
                })
                .done(function(data) {
                    var current = 0;
                    var part = data.split(' ')[9];
                    var series = mychart.series[0],
                    current = parseInt(part);
                    shift = series.data.length > 40; 
                    if (previous !== null) {                        
                        series.addPoint(
                            [Math.floor($.now()), 
                                current-previous
                            ],
                            true, 
                            shift
                        );
                    }
                    previous = current;
                    count++;
                    // call it again after one second
                    setTimeout(parseFile, 900); 

                })
                .fail(function( jqXHR, textStatus, errorThrown) {
                    console.log(errorThrown);
                });
            }

            function initiateChart(divid)
            {
                Highcharts.createElement('link', {
                   href: '//fonts.googleapis.com/css?family=Unica+One',
                   rel: 'stylesheet',
                   type: 'text/css'
                }, null, document.getElementsByTagName('head')[0]);
                
                var options = {
                    colors: ['#222736', '#2a3042', '#2a3042', '#2a3042', '#2a3042', '#2a3042', '#2a3042', '#222736', '#222736', '#222736', '#222736'],
                    chart: {
                        zoomType: 'x',
                        renderTo: divid,
                        backgroundColor: {
                            linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
                            stops: [
                                [0, '#32394e'],
                                [1, '#32394e']
                            ]
                        },
                        style: {
                            fontFamily: "'Unica One', sans-serif"
                        },
                        plotBorderColor: '#606063'
                    },
                    title: {
                        text: 'DSTAT.PRO',
                        style: {
                            color: '#E0E0E3',
                            textTransform: 'uppercase',
                            fontSize: '20px'
                        }
                    },
                    subtitle: {
                        text: extra[1],
                        style: {
                            color: '#E0E0E3',
                            textTransform: 'uppercase'
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
                        },
                        area: {
                            fillColor: {
                                linearGradient: {
                                    x1: 0,
                                    y1: 0,
                                    x2: 0,
                                    y2: 1
                                },
                                stops: [
                                    [0, '#222736'],
                                    [1, Highcharts.Color('#222736').setOpacity(0).get('rgba')]
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
                    legend: {
                        enabled: false
                    },
                    credits: {
                        style: {
                            color: '#666'
                        }
                    },
                    labels: {
                        style: {
                            color: '#222736'
                        }
                    },
                    drilldown: {
                        activeAxisLabelStyle: {
                            color: '#222736'
                        },
                        activeDataLabelStyle: {
                            color: '#222736'
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
                            stroke: '#000000',
                            style: {
                                color: '#CCC'
                            },
                            states: {
                                hover: {
                                    fill: '#707073',
                                    stroke: '#000000',
                                    style: {
                                        color: 'white'
                                    }
                                },
                                select: {
                                    fill: '#000003',
                                    stroke: '#000000',
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
                            backgroundColor: '#666',
                            borderColor: '#AAA'
                        },
                        outlineColor: '#CCC',
                        maskFill: 'rgba(255,255,255,0.1)',
                        series: {
                            color: '#B0B0B3',
                            lineColor: '#A6C7ED'
                        },
                        xAxis: {
                            gridLineColor: '#707073',
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
                    maskColor: 'rgba(255,255,255,0.3)',
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
                            text: extra[2],
                            style: {
                                color: '#A0A0A3'
                            }
                        }
                    },

                    xAxis: {
                        type: 'datetime',
                        dateTimeLabelFormats: {
                            day: '%a'
                        },
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

                    series: [{
                        type: 'area',
                        name: 'Total Requests',
                        data: []
                    }]
                };

                mychart = new Highcharts.Chart(options);
                
                
            }

        });
</script>
<?php } ?>
</html>
