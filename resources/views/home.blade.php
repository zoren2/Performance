<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{URL::asset('/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Performance Statistics
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/now-ui-dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}"  />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"  />

</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="orange">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                PS
            </a>
            <a href="{{route('home')}}" class="simple-text logo-normal">
                Performance Home
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="./user.html">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="active ">
                    <a href="./dashboard.html">
                        <i class="now-ui-icons design_app"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="./notifications.html">
                        <i class="now-ui-icons ui-1_bell-53"></i>
                        <p>Notifications</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="now-ui-icons media-2_sound-wave"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Profile</a>
                                {{-- Shortcut to implement CSRF logout --}}
                                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="panel-header panel-header-lg">
            <canvas id="bigDashboardChart"></canvas>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h5 class="card-category">Hard Disk Usage</h5>
                            <h4 class="card-title">Usage (in GiB)</h4>
                            <div class="dropdown">
                                <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                    <i class="now-ui-icons loader_gear"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="lineChartExample"></canvas>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h5 class="card-category">Virtual Memory Usage</h5>
                            <h4 class="card-title">Usage (in MiB)</h4>
                            <div class="dropdown">
                                <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                    <i class="now-ui-icons loader_gear"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h5 class="card-category">CPU performance</h5>
                            <h4 class="card-title">Most recent samples</h4>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="barChartSimpleGradientsNumbers"></canvas>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-category">List Of Performance Statistics</h5>
                            <h4 class="card-title"> Ordered by Date</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        Stat ID
                                    </th>
                                    <th>
                                        Free Hard Drive Space
                                    </th>
                                    <th>
                                        Free Virtual Memory
                                    </th>
                                    <th class="text-right">
                                        CPU Usage (Average)
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach ($performances as $performance)
                                        <tr>
                                            <td>
                                                {{$performance->id}}
                                            </td>
                                            <td>
                                                {{$performance->hard_drive_total - $performance->hard_drive_free}} GiB
                                            </td>
                                            <td>
                                                {{$performance->vmem_free}} MiB
                                            </td>
                                            <td class="text-right">
                                                {{$performance->cpu_usage}}% load
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Design by Creative Tim
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy;
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/plugins/chartjs.min.js') }}"></script>
<script src="{{ asset('/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('/js/now-ui-dashboard.min.js?v=1.3.0')}}" type="text/javascript"></script>

<script>

    /*
     * PHP Blade directives
     */

    const hard_drive_free = [{{$currentPerformance->hard_drive_total }}].pop() - [{{$currentPerformance->hard_drive_free }}].pop();
    const hard_drive_used = [{{$currentPerformance->hard_drive_free }}].pop();

    const vmem_free = [{{$currentPerformance->vmem_free }}].pop();
    const vmem_used = [{{$currentPerformance->vmem_total }}].pop() - vmem_free;

    const cpu_samples = @json($cpuSamples);

    performance = {
        initPickColor: function() {
            $('.pick-class-label').click(function() {
                var new_class = $(this).attr('new-class');
                var old_class = $('#display-buttons').attr('data-class');
                var display_div = $('#display-buttons');
                if (display_div.length) {
                    var display_buttons = display_div.find('.btn');
                    display_buttons.removeClass(old_class);
                    display_buttons.addClass(new_class);
                    display_div.attr('data-class', new_class);
                }
            });
        },

        initDocChart: function() {
            chartColor = "#FFFFFF";
            // General configuration for the charts with Line gradientStroke
            gradientChartOptionsConfiguration = {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                responsive: true,
                scales: {
                    yAxes: [{
                        display: 0,
                        gridLines: 0,
                        ticks: {
                            display: false
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                            drawTicks: false,
                            display: false,
                            drawBorder: false
                        }
                    }],
                    xAxes: [{
                        display: 0,
                        gridLines: 0,
                        ticks: {
                            display: false
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                            drawTicks: false,
                            display: false,
                            drawBorder: false
                        }
                    }]
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 15,
                        bottom: 15
                    }
                }
            };
        },

        initDashboardPageCharts: function() {
            chartColor = "#FFFFFF";
            // General configuration for the charts with Line gradientStroke
            gradientChartOptionsConfiguration = {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                responsive: 1,
                scales: {
                    yAxes: [{
                        display: 0,
                        gridLines: 0,
                        ticks: {
                            display: false
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                            drawTicks: false,
                            display: false,
                            drawBorder: false
                        }
                    }],
                    xAxes: [{
                        display: 0,
                        gridLines: 0,
                        ticks: {
                            display: false
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                            drawTicks: false,
                            display: false,
                            drawBorder: false
                        }
                    }]
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 15,
                        bottom: 15
                    }
                }
            };

            gradientChartOptionsConfigurationWithNumbersAndGrid = {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    bodySpacing: 4,
                    mode: "nearest",
                    intersect: 0,
                    position: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                responsive: true,
                scales: {
                    yAxes: [{
                        gridLines: 0,
                        gridLines: {
                            zeroLineColor: "transparent",
                            drawBorder: false
                        }
                    }],
                    xAxes: [{
                        display: 0,
                        gridLines: 0,
                        ticks: {
                            display: false
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                            drawTicks: false,
                            display: false,
                            drawBorder: false
                        }
                    }]
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 15,
                        bottom: 15
                    }
                }
            };

            /*
            *
            * Jumbo Graph at the top
            *
            */
            var ctx = document.getElementById('bigDashboardChart').getContext("2d");

            var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
            gradientStroke.addColorStop(0, '#80b6f4');
            gradientStroke.addColorStop(1, chartColor);

            var gradientFill = ctx.createLinearGradient(0, 200, 0, 50);
            gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
            gradientFill.addColorStop(1, "rgba(255, 255, 255, 0.24)");

            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
                    datasets: [{
                        label: "Data",
                        borderColor: chartColor,
                        pointBorderColor: chartColor,
                        pointBackgroundColor: "#1e3d60",
                        pointHoverBackgroundColor: "#1e3d60",
                        pointHoverBorderColor: chartColor,
                        pointBorderWidth: 1,
                        pointHoverRadius: 7,
                        pointHoverBorderWidth: 2,
                        pointRadius: 5,
                        fill: true,
                        backgroundColor: gradientFill,
                        borderWidth: 2,
                        data: [50, 150, 100, 190, 130, 90, 150, 160, 120, 140, 190, 95]
                    }]
                },
                options: {
                    layout: {
                        padding: {
                            left: 20,
                            right: 20,
                            top: 0,
                            bottom: 0
                        }
                    },
                    maintainAspectRatio: false,
                    tooltips: {
                        backgroundColor: '#fff',
                        titleFontColor: '#333',
                        bodyFontColor: '#666',
                        bodySpacing: 4,
                        xPadding: 12,
                        mode: "nearest",
                        intersect: 0,
                        position: "nearest"
                    },
                    legend: {
                        position: "bottom",
                        fillStyle: "#FFF",
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontColor: "rgba(255,255,255,0.4)",
                                fontStyle: "bold",
                                beginAtZero: true,
                                maxTicksLimit: 5,
                                padding: 10
                            },
                            gridLines: {
                                drawTicks: true,
                                drawBorder: false,
                                display: true,
                                color: "rgba(255,255,255,0.1)",
                                zeroLineColor: "transparent"
                            }

                        }],
                        xAxes: [{
                            gridLines: {
                                zeroLineColor: "transparent",
                                display: false,

                            },
                            ticks: {
                                padding: 10,
                                fontColor: "rgba(255,255,255,0.4)",
                                fontStyle: "bold"
                            }
                        }]
                    }
                }
            });

            var cardStatsMiniLineColor = "#fff",
                cardStatsMiniDotColor = "#fff";


            /*
             *
             *  Hard Disk Usage
             *
             */
            ctx = document.getElementById('lineChartExample').getContext("2d");
            //options
            var options = {
                responsive: true,
                title: {
                    display: true,
                    position: "top",
                    text: "Hard Disk Doughnut",
                    fontSize: 18,
                    fontColor: "#111"
                },
                legend: {
                    display: true,
                    position: "bottom",
                    labels: {
                        fontColor: "#333",
                        fontSize: 16
                    }
                }
            };
            var myDoughnutChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels:['Used', 'Free'],
                    datasets: [{
                        label: "Hard Drive",
                        // First item in the array
                        data:[hard_drive_used, hard_drive_free],
                        backgroundColor: [
                            "#FAEBD7",
                            "#DCDCDC"
                        ],
                        borderColor: [
                            "#E9DAC6",
                            "#CBCBCB"
                        ],
                        borderWidth: [1, 1],
                        options: options
                    }] /* End Datasets */
                } /* End Data */
            });



            /*
             *      Virtual Memory
             */
            ctx = document.getElementById('lineChartExampleWithNumbersAndGrid').getContext("2d");

            var options = {
                responsive: true,
                title: {
                    display: true,
                    position: "top",
                    text: "Hard Disk Doughnut",
                    fontSize: 18,
                    fontColor: "#111"
                },
                legend: {
                    display: true,
                    position: "bottom",
                    labels: {
                        fontColor: "#333",
                        fontSize: 16
                    }
                }
            };
            var myDoughnutChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels:['Used', 'Free'],
                    datasets: [{
                        label: "Hard Drive",
                        data:[vmem_used, vmem_free],
                        backgroundColor: [
                            "#FFEEEE",
                            "#DCDCDC"
                        ],
                        borderColor: [
                            "#E9DAC6",
                            "#CBCBCB"
                        ],
                        borderWidth: [1, 1],
                        options: options
                    }] /* End Datasets */
                } /* End Data */
            });

            /*
             *      CPU Usage
             */
            var e = document.getElementById("barChartSimpleGradientsNumbers").getContext("2d");

            gradientFill = ctx.createLinearGradient(0, 170, 0, 50);
            gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
            gradientFill.addColorStop(1, hexToRGB('#2CA8FF', 0.6));

            var a = {
                type: "bar",
                data: {
                    labels: [1,2,3,4,5],
                    datasets: [{
                        label: "CPU Usage",
                        backgroundColor: gradientFill,
                        borderColor: "#2CA8FF",
                        pointBorderColor: "#FFF",
                        pointBackgroundColor: "#2CA8FF",
                        pointBorderWidth: 2,
                        pointHoverRadius: 4,
                        pointHoverBorderWidth: 1,
                        pointRadius: 4,
                        fill: true,
                        borderWidth: 1,
                        data: cpu_samples
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        bodySpacing: 4,
                        mode: "nearest",
                        intersect: 0,
                        position: "nearest",
                        xPadding: 15,
                        yPadding: 15,
                        caretPadding: 10
                    },
                    responsive: 1,
                    scales: {
                        yAxes: [{
                            gridLines: 0,
                            gridLines: {
                                zeroLineColor: "transparent",
                                drawBorder: false
                            },
                            ticks: {
                                display: true,
                                suggestedMin: 0,
                                suggestedMax: 100,
                            },
                            scaleLabel: {
                                display: true,
                                labelString: '% CPU Usage'
                            }
                        }],
                        xAxes: [{
                            gridLines: 0,
                            gridLines: {
                                zeroLineColor: "transparent",
                                drawBorder: false
                            },
                            ticks: {
                                display: true,
                                max: 5,
                                min: 0,
                                stepSize: 1
                            }
                        }]
                    },
                    layout: {
                        padding: {
                            left: 5,
                            right: 5,
                            top: 10,
                            bottom: 10
                        }
                    }
                }
            };

            var viewsChart = new Chart(e, a);
        }
    };

    $(document).ready(function() {
        performance.initDashboardPageCharts();
    });
</script>

</body>

</html>