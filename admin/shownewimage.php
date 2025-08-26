

<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html><!--<![endif]-->

<!-- Specific Page Data -->

<!-- End of Data -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <title>Bonito Panos</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, " />
    <meta name="description" content="Responsive Admin Template for e-commerce dashboard">
    <meta name="author" content="Venmond">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.php">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png">


    <!-- CSS -->

    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
    <link href="css/font-entypo.css" rel="stylesheet" type="text/css">

    <!-- Fonts CSS -->
    <link href="css/fonts.css"  rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="plugins/isotope/css/isotope.css" rel="stylesheet" type="text/css">
    <link href="plugins/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">
    <link href="plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">


    <link href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">

    <!-- Specific CSS -->
    <link href="plugins/introjs/css/introjs.min.css" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/theme.min.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->



    <!-- Responsive CSS -->
    <link href="css/theme-responsive.min.css" rel="stylesheet" type="text/css">




    <!-- for specific page in style css -->

    <!-- for specific page responsive in style css -->


    <!-- Custom CSS -->
    <link href="custom/custom.css" rel="stylesheet" type="text/css">



    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/mobile-detect.min.js"></script>
    <script type="text/javascript" src="js/mobile-detect-modernizr.js"></script>
</head>

<body id="dashboard" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix" data-active="dashboard "  data-smooth-scrolling="1">
<div class="vd_body">
    <!-- Header Start -->
    <?php include"header.php"; ?>
    <!-- Header Ends -->
    <div class="content">
        <div class="container">
            <?php include"adminleftmenu.php";?>
            <div class="vd_navbar vd_nav-width vd_navbar-chat vd_bg-black-80 vd_navbar-right   ">
                <div class="navbar-tabs-menu clearfix">
			<span class="expand-menu" data-action="expand-navbar-tabs-menu">
            	<span class="menu-icon menu-icon-left">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>
                </span>
            	<span class="menu-icon menu-icon-right">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>
                </span>
            </span>
                    <div class="menu-container">
                        <div class="navbar-search-wrapper">
                            <div class="navbar-search vd_bg-black-30">
                                <span class="append-icon"><i class="fa fa-search"></i></span>
                                <input type="text" placeholder="Search" class="vd_menu-search-text no-bg no-bd vd_white width-70" name="search">
                                <div class="pull-right search-config">
                                    <a  data-toggle="dropdown" href="javascript:void(0);" class="dropdown-toggle" ><span class="prepend-icon vd_grey"><i class="fa fa-cog"></i></span></a>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="navbar-menu clearfix">
                    <div class="content-list content-image content-chat">
                        <ul class="list-wrapper no-bd-btm pd-lr-10">
                            <li class="group-heading vd_bg-black-20">FAVORITE</li>
                            <li>
                                <a href="#">
                                    <div class="menu-icon"><img src="img/avatar/avatar.jpg" alt="example image"></div>
                                    <div class="menu-text">Jessylin
                                        <div class="menu-info">
                                            <span class="menu-date">Administrator </span>
                                        </div>
                                    </div>
                                    <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="menu-icon"><img src="img/avatar/avatar-2.jpg" alt="example image"></div>
                                    <div class="menu-text">Rodney Mc.Cardo
                                        <div class="menu-info">
                                            <span class="menu-date">Designer </span>
                                        </div>
                                    </div>
                                    <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="menu-icon"><img src="img/avatar/avatar-3.jpg" alt="example image"></div>
                                    <div class="menu-text">Theresia Minoque
                                        <div class="menu-info">
                                            <span class="menu-date">Engineering </span>
                                        </div>
                                    </div>
                                    <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                </a>
                            </li>
                            <li class="group-heading vd_bg-black-20">FRIENDS</li>
                            <li>
                                <a href="#">
                                    <div class="menu-icon"><img src="img/avatar/avatar-4.jpg" alt="example image"></div>
                                    <div class="menu-text">Greg Grog
                                        <div class="menu-info">
                                            <span class="menu-date">Developer </span>
                                        </div>
                                    </div>
                                    <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="menu-icon"><img src="img/avatar/avatar-5.jpg" alt="example image"></div>
                                    <div class="menu-text">Stefanie Imburgh
                                        <div class="menu-info">
                                            <span class="menu-date">Dancer</span>
                                        </div>
                                    </div>
                                    <div class="menu-badge"><span class="vd_grey font-sm"><i class="fa fa-mobile"></i></span></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="menu-icon"><img src="img/avatar/avatar-6.jpg" alt="example image"></div>
                                    <div class="menu-text">Matt Demon
                                        <div class="menu-info">
                                            <span class="menu-date">Musician </span>
                                        </div>
                                    </div>
                                    <div class="menu-badge"><span class="vd_grey font-sm"><i class="fa fa-mobile"></i></span></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="menu-icon"><img src="img/avatar/avatar-7.jpg" alt="example image"></div>
                                    <div class="menu-text">Jeniffer Anastasia
                                        <div class="menu-info">
                                            <span class="menu-date">Senior Developer </span>
                                        </div>
                                    </div>
                                    <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="menu-icon"><img src="img/avatar/avatar-8.jpg" alt="example image"></div>
                                    <div class="menu-text">Daniel Dreamon
                                        <div class="menu-info">
                                            <span class="menu-date">Sales Executive </span>
                                        </div>
                                    </div>
                                    <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                </a>
                            </li>

                        </ul>
                    </div>


                </div>
                <div class="navbar-spacing clearfix">
                </div>
            </div>
            <!-- Middle Content Start -->

            <div class="vd_content-wrapper">
                <div class="vd_container">
                    <div class="vd_content clearfix">
                        <div class="vd_title-section clearfix">
                            <div class="vd_panel-header">
                                <h1>User Panel</h1>
                                <small class="subtitle">List of Users</small> </div>
                        </div>
                        <div class="vd_content-section clearfix">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel widget">
                                        <div class="panel-heading vd_bg-grey">
                                            <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span> All Users </h3>
                                        </div>
                                        <div class="panel-body-list  table-responsive">
                                            <table class="table table-striped table-hover no-head-border">
                                                <thead class="vd_bg-green vd_white">
                                                <tr>
                                                    <th>S.no</th>
                                                    <th>Images</th>
                                                    <th>Content</th>
                                                    <th>edit</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                

                     <tr>
                     <?php 
                     include_once '../include/config.php';
  
$i=1;                         
$query="SELECT * FROM new_products";

$run = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($run)){

	$id = $row['id'];
	 $content = $row['content'];
	 $image = $row['img'];


?>
                          <td class="center"><?php echo $i++; ?></td>
                          <td class="center"><img src="../images/newproduct/<?php echo $image; ?>" width="50" height="50" ></td>
                          <td class="center"><?php echo $content; ?></td>
  <td class="center"><a href="edit5.php?edit=<?php echo $id; ?> "class=" btn btn-success btn-rounded">edit</a></td>
                          

						  
						 
                        </tr>
                        <?php } ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Panel Widget -->
                                    
                                </div>
                                <!-- col-md-12 -->
                            </div>
                            <!-- row -->
                        </div>
                        <!-- vd_head-section -->
                        <!-- vd_title-section -->
                       <!-- .vd_content-section -->
                    </div>
                    <!-- .vd_content -->
                </div>
                <!-- .vd_container -->
            </div>
            <!-- .vd_content-wrapper -->
            <!-- Middle Content End -->
        </div>
    </div>
    <!-- Footer Start -->
    <footer class="footer-1"  id="footer">
        <div class="vd_bottom ">
            <div class="container">
                <div class="row">
                    <div class=" col-xs-12">
                        <div class="copyright">
                            Copyright &copy;2015 Bonito Panos Inc. All Rights Reserved
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div>
    </footer>
    <!-- Footer END -->
    <div class="vd_chat-menu hidden-xs">
        <div class="vd_mega-menu-wrapper">

        </div>
    </div>

</div>

<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>

<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src="plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="js/caroufredsel.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<script type="text/javascript" src="plugins/breakpoints/breakpoints.js"></script>
<script type="text/javascript" src="plugins/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script>

<script type="text/javascript" src="plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="plugins/tagsInput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="plugins/pnotify/js/jquery.pnotify.min.js"></script>

<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="custom/custom.js"></script>

<!-- Specific Page Scripts Put Here -->
<!-- Flot Chart  -->
<script type="text/javascript" src="plugins/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.categories.min.js"></script>
<script type="text/javascript" src="plugins/flot/jquery.flot.animator.min.js"></script>

<!-- Vector Map -->
<script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- Calendar -->
<script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src='plugins/fullcalendar/fullcalendar.min.js'></script>

<!-- Intro JS (Tour) -->
<script type="text/javascript" src='plugins/introjs/js/intro.min.js'></script>




<script type="text/javascript">
    $(window).load(function()
    {

        "use strict";

        $(window).on("resize", function(){
            plot.resize();
            plot.setupGrid();
            plot.draw();
        });


        $.fn.UseTooltip = function () {
            var previousPoint = null;

            $(this).bind("plothover", function (event, pos, item) {
                if (item) {
                    if (previousPoint != item.dataIndex) {

                        previousPoint = item.dataIndex;

                        $("#tooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                        showTooltip(item.pageX, item.pageY,
                            "<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + Math.round(x)  + " NOV 2013 </strong></p>" +
                            "<div style='padding: 0 10px 10px;'>" +
                            "<div>" + item.series.label +": <strong>"+ Math.round(y)  +"</strong></div>" +
                            "<div> Profit: <strong>$"+ Math.round(y)*7  +"</strong></div>" +
                            "</div>"
                        );
                    }
                } else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });
        };

        function showTooltip(x, y, contents) {
            $('<div id="tooltip">' + contents + '</div>').css({
                position: 'absolute',
                display: 'none',
                top: y + 5,
                left: x + 20,
                size: '10',
//				'border-top' : '3px solid #1FAE66',
                'background-color': '#111111',
                color: "#FFFFFF",
                opacity: 0.85
            }).appendTo("body").fadeIn(200);
        }


        /* REVENUE LINE CHART */

        var d2 = [ [1, 250],
            [2, 150],
            [3, 50],
            [4, 200],
            [5,50],
            [6, 150],
            [7, 150],
            [8, 200],
            [9, 100],
            [10, 250],
            [11,250],
            [12, 200],
            [13, 300]

        ];
        var d1 = [
            [1, 650],
            [2, 550],
            [3, 450],
            [4, 550],
            [5, 350],
            [6, 500],
            [7, 600],
            [8, 450],
            [9, 300],
            [10, 600],
            [11, 400],
            [12, 500],
            [13, 700]

        ];
        var plot = $.plotAnimator($("#revenue-line-chart"), [
            {  	label: "Revenue",
                data: d2,
                lines: {
                    fill: 0.4,
                    lineWidth: 0,
                },
                color:['#f2be3e']
            },{
                data: d1,
                animator: {steps: 60, duration: 1000, start:0},
                lines: {lineWidth:2},
                shadowSize:0,
                color: '#F85D2C'
            },{
                label: "Revenue",
                data: d1,
                points: { show: true, fill: true, radius:6,fillColor:"#F85D2C",lineWidth:3 },
                color: '#fff',
                shadowSize:0
            },
            {	label: "Cost",
                data: d2,
                points: { show: true, fill: true, radius:6,fillColor:"#f2be3e",lineWidth:3 },
                color: '#fff',
                shadowSize:0
            }
        ],{	xaxis: {
            tickLength: 0,
            tickDecimals: 0,
            min:2,

            font :{
                lineHeight: 13,
                style: "normal",
                weight: "bold",
                family: "sans-serif",
                variant: "small-caps",
                color: "#6F7B8A"
            }
        },
            yaxis: {
                ticks: 3,
                tickDecimals: 0,
                tickColor: "#f0f0f0",
                font :{
                    lineHeight: 13,
                    style: "normal",
                    weight: "bold",
                    family: "sans-serif",
                    variant: "small-caps",
                    color: "#6F7B8A"
                }
            },
            grid: {
                backgroundColor: { colors: [ "#fff", "#fff" ] },
                borderWidth:1,borderColor:"#f0f0f0",
                margin:0,
                minBorderMargin:0,
                labelMargin:20,
                hoverable: true,
                clickable: true,
                mouseActiveRadius:6
            },
            legend: { show: false}
        });

        $("#revenue-line-chart").UseTooltip();



        /* REVENUE DONUT CHART */

        var data2 = [],
            series = 3;
        var data2 = [
            { label: "Men",  data: 35},
            { label: "Women",  data: 65}
        ];
        var revenue_donut_chart = $("#revenue-donut-chart");

        $("#revenue-donut-chart").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata").text(" - click point " + item.dataIndex + " in " + item.series.label);
                plot.highlight(item.series, item.datapoint);
            }
        });
        $.plot(revenue_donut_chart, data2, {
            series: {
                pie: {
                    innerRadius: 0.4,
                    show: true
                }
            },
            grid: {
                hoverable: true,
                clickable: true,
            },
            colors: ["#1FAE66", "#F85D2C "]
        });


        /* REVENUE BAR CHART */

        var bar_chart_data = [ ["Jan", 10], ["Feb", 8], ["Mar", 4], ["Apr", 13], ["May", 17], ["Jun", 9], ["Jul", 10], ["Aug", 8], ["Sep", 4], ["Oct", 13], ["Nov", 17], ["Dec", 9] ];

        var bar_chart = $.plot(
            $("#revenue-bar-chart"), [{
                data: bar_chart_data,
                //           color: "rgba(31,174,102, 0.8)",
                color: "#F85D2C" ,
                shadowSize: 0,
                bars: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 1
                        }, {
                            opacity: 1
                        }]
                    }
                }
            }], {
                series: {
                    bars: {
                        show: true,
                        barWidth: 0.9,
                        align: "center"
                    }
                },
                grid: {
                    show: true,
                    hoverable: true,
                    borderWidth: 0
                },
                yaxis: {
                    min: 0,
                    max: 20,
                    show: false
                },
                xaxis: {
                    mode: "categories",
                    tickLength: 0,
                    color: "#FFFFFF",
                }
            });

        var previousPoint2 = null;
        $("#revenue-bar-chart").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));
            if (item) {
                if (previousPoint2 != item.dataIndex) {
                    previousPoint2 = item.dataIndex;
                    $("#tooltip").remove();
                    var x = item.datapoint[0] + 1,
                        y = item.datapoint[1].toFixed(2);
                    showTooltip(item.pageX, item.pageY,
                        "<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + x + " - 2013 </strong></p>" +
                        "<div style='padding: 0 10px 10px;'>" +
                        "<div> Sales: <strong>"+ Math.round(y)*17  +"</strong></div>" +
                        "<div> Profit: <strong>$"+ Math.round(y)*280  +"</strong></div>" +
                        "</div>"
                    );
                }
            }
        });

        $('#revenue-bar-chart').bind("mouseleave", function () {
            $("#tooltip").remove();
        });



        /* PIE CHART */

        var pie_placeholder = $("#pie-chart");

        var pie_data = [];

        pie_data[0] = {
            label: "IE",
            data: 10
        }
        pie_data[1] = {
            label: "Safari",
            data: 8
        }
        pie_data[2] = {
            label: "Opera",
            data: 8
        }
        pie_data[3] = {
            label: "Chrome",
            data: 13
        }
        pie_data[4] = {
            label: "Firefox",
            data: 17
        }
        pie_data[5] = {
            label: "Other",
            data: 3
        }
        $.plot(pie_placeholder, pie_data, {
            series: {
                pie: {
                    show: true,
                    label:{
                        show: true,
                        radius: .5,
                        formatter: labelFormatter,
                        background: {
                            opacity: 0
                        }
                    },

                }
            },
            grid: {
                hoverable: true,
                clickable: true
            },
            colors: ["#FCB660", "#ce91db", "#56A2CF", "#52D793", "#FC8660", "#CCCCCC"]
        });

        pie_placeholder.bind("plothover", function(event, pos, obj) {
            if (!obj) {
                return;
            }
            var percent = parseFloat(obj.series.percent).toFixed(2);
            $("#hover").php("<span style='font-weight:bold; color:" + obj.series.color + "'>" + obj.series.label + " (" + percent + "%)</span>");
        });

        pie_placeholder.bind("plotclick", function(event, pos, obj) {
            if (!obj) {
                return;
            }
            var percent;
            percent = parseFloat(obj.series.percent).toFixed(2);
            alert(""  + obj.series.label + ": " + percent + "%");
        });

        function labelFormatter(label, series) {
            return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
        }





// Notification
        setTimeout(function() { notification("topright","notify","fa fa-exclamation-triangle vd_yellow","Welcome to Vendroid","Click on <i class='fa fa-question-circle vd_red'></i> Question Mark beside filter to take a view layout tour guide"); },1500)	 ;


    });
</script>
<!-- Specific Page Scripts END -->
</body>
</html>
