
<?php
require_once ("DBController.php");
$db_handle = new DBController();
$query = "SELECT * FROM category";
$countryResult = $db_handle->runQuery($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Nico Evolve</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
function getState2() {
    var str = $("#country-list2 option:selected").data("cat2");
       
        
    $.ajax({          
            type: "GET",
            url: "fetch.php",
            data:'cat_id='+str,
            success: function(data){
                $("#state-list2").html(data);
            }
           
    });
}
</script>
<script>
function getState3() {
 var str = $("#country-list3 option:selected").data("cat3");
        
    $.ajax({          
            type: "GET",
            url: "fetch.php",
            data:'cat_id='+str,
            success: function(data){
                $("#state-list3").html(data);
            }
    });
}
</script>
<script>
function getState4() {
var str = $("#country-list4 option:selected").data("cat4");
        
    $.ajax({          
            type: "GET",
            url: "fetch.php",
            data:'cat_id='+str,
            success: function(data){
                $("#state-list4").html(data);
            }
    });
}
</script>
<script>
function getState5() {
var str = $("#country-list5 option:selected").data("cat5");
        
    $.ajax({          
            type: "GET",
            url: "fetch.php",
            data:'cat_id='+str,
            success: function(data){
                $("#state-list5").html(data);
            }
    });
}
</script>

</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><!-- <img src="../plugins/images/admin-logo.png" alt="home" class="dark-logo" /> --><!--This is light logo icon--><img src="../plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="../plugins/images/logo.svg" alt="home" class="dark-logo" height="60px" /><!--This is light logo text--><img src="../plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
                  
                    </li> 
                 
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Admin</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="../plugins/images/users/varun.jpg" alt="user" /></div>
                                    <div class="u-text"><h4>Administrator</h4><p class="text-muted">varun@gmail.com</p><a href="#" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> Administrator<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i> <span class="hide-menu">My Profile</span></a></li>
                            <li><a href="javascript:void(0)"><i class="ti-wallet"></i> <span class="hide-menu">My Balance</span></a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> <span class="hide-menu">Inbox</span></a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> <span class="hide-menu">Account Setting</span></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard<span class="fa arrow"></span> <span class="label label-rouded label-inverse pull-right"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="index.html"><i class=" fa-fw">1</i><span class="hide-menu">Dashboard</span></a> </li>
                        </ul>
                    </li><!-- 
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-format-color-fill fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">20</span> </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="panels-wells.html"><i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Panels and Wells</span></a></li>
                            <li><a href="panel-ui-block.html"><i data-icon="&#xe025;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Panels With BlockUI</span></a></li>
                            <li><a href="buttons.html"><i class="ti-layout-menu fa-fw"></i> <span class="hide-menu">Buttons</span></a></li>
                            <li><a href="sweatalert.html"><i class="ti-alert fa-fw"></i> <span class="hide-menu">Sweat alert</span></a></li>
                            <li><a href="typography.html"><i data-icon="k" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Typography</span></a></li>
                            <li><a href="grid.html"><i data-icon="&#xe009;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Grid</span></a></li>
                            <li><a href="tabs.html"><i  class="ti-layers fa-fw"></i> <span class="hide-menu">Tabs</span></a></li>
                            <li><a href="tab-stylish.html"><i class=" ti-layers-alt fa-fw"></i> <span class="hide-menu">Stylish Tabs</span></a></li>
                            <li><a href="modals.html"><i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Modals</span></a></li>
                            <li><a href="progressbars.html"><i class="ti-line-double fa-fw"></i> <span class="hide-menu">Progress Bars</span></a></li>
                            <li><a href="notification.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Notifications</span></a></li>
                            <li><a href="carousel.html"><i class="ti-layout-slider fa-fw"></i> <span class="hide-menu">Carousel</span></a></li>
                            <li><a href="list-style.html"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">List & Media object</span></a></li>
                            <li><a href="user-cards.html"><i class="ti-user fa-fw"></i> <span class="hide-menu">User Cards</span></a></li>
                            <li><a href="timeline.html"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Timeline</span></a></li>
                            <li><a href="timeline-horizontal.html"><i class="ti-layout-list-thumb fa-fw"></i> <span class="hide-menu">Horizontal Timeline</span></a></li>
                            <li><a href="nestable.html"><i class="ti-layout-accordion-separated fa-fw"></i> <span class="hide-menu">Nesteble</span></a></li>
                            <li><a href="range-slider.html"><i class=" ti-layout-slider-alt fa-fw"></i> <span class="hide-menu">Range Slider</span></a></li>
                            <li><a href="tooltip-stylish.html"><i class="ti-comments-smiley fa-fw"></i> <span class="hide-menu">Stylish Tooltip</span></a></li>
                            <li><a href="bootstrap.html"><i class="ti-rocket fa-fw"></i> <span class="hide-menu">Bootstrap UI</span></a></li>
                        </ul>
                    </li> -->
                    <!-- <li> <a href="#" class="waves-effect"><i class="mdi mdi-content-copy fa-fw"></i> <span class="hide-menu">Sample Pages<span class="fa arrow"></span><span class="label label-rouded label-warning pull-right">30</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="starter-page.html"><i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">Starter Page</span></a></li>
                            <li><a href="blank.html"><i class="ti-layout-sidebar-left fa-fw"></i> <span class="hide-menu">Blank Page</span></a></li>
                            <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-email fa-fw"></i> <span class="hide-menu">Email Templates</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="../email-templates/basic.html"><i class="fa-fw">B</i> <span class="hide-menu">Basic</span></a></li>
                                    <li> <a href="../email-templates/alert.html"><i class="ti-alert fa-fw"></i> <span class="hide-menu">Alert</span></a></li>
                                    <li> <a href="../email-templates/billing.html"><i class="ti-wallet fa-fw"></i> <span class="hide-menu">Billing</span></a></li>
                                    <li> <a href="../email-templates/password-reset.html"><i class="ti-more fa-fw"></i> <span class="hide-menu">Reset Pwd</span></a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-lock fa-fw"></i><span class="hide-menu">Authentication</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="login.html"><i class="fa-fw">L</i> <span class="hide-menu">Login Page</span></a></li>
                                    <li><a href="login2.html"><i class="fa-fw">L</i> <span class="hide-menu">Login v2</span></a></li>
                                    <li><a href="register.html"><i class="fa-fw">R</i> <span class="hide-menu">Register</span></a></li>
                                    <li><a href="register2.html"><i class="fa-fw">R</i> <span class="hide-menu">Register v2</span></a></li>
                                    <li><a href="register3.html"><i class="fa-fw">3</i> <span class="hide-menu">3 Step Registration</span></a></li>
                                    <li><a href="recoverpw.html"><i class="fa-fw">R</i> <span class="hide-menu">Recover Password</span></a></li>
                                    <li><a href="lock-screen.html"><i class="fa-fw">L</i> <span class="hide-menu">Lock Screen</span></a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-info-alt fa-fw"></i><span class="hide-menu">Error Pages</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="400.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 400</span></a></li>
                                    <li><a href="403.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 403</span></a></li>
                                    <li><a href="404.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 404</span></a></li>
                                    <li><a href="500.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 500</span></a></li>
                                    <li><a href="503.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 503</span></a></li>
                                </ul>
                            </li>
                            <li><a href="lightbox.html"><i class="fa-fw">L</i> <span class="hide-menu">Lightbox Popup</span></a></li>
                            <li><a href="treeview.html"><i class="fa-fw">T</i> <span class="hide-menu">Treeview</span></a></li>
                            <li><a href="search-result.html"><i class="fa-fw">S</i> <span class="hide-menu">Search Result</span></a></li>
                            <li><a href="utility-classes.html"><i class="fa-fw">U</i> <span class="hide-menu">Utility Classes</span></a></li>
                            <li><a href="custom-scroll.html"><i class="fa-fw">C</i> <span class="hide-menu">Custom Scrolls</span></a></li>
                            <li><a href="animation.html"><i class="fa-fw">A</i> <span class="hide-menu">Animations</span></a></li>
                            <li><a href="profile.html"><i class="fa-fw">P</i> <span class="hide-menu">Profile</span></a></li>
                            <li><a href="invoice.html"><i class="fa-fw">I</i> <span class="hide-menu">Invoice</span></a></li>
                            <li><a href="faq.html"><i class="fa-fw">F</i> <span class="hide-menu">FAQ</span></a></li>
                            <li><a href="gallery.html"><i class="fa-fw">G</i> <span class="hide-menu">Gallery</span></a></li>
                            <li><a href="pricing.html"><i class="fa-fw">P</i> <span class="hide-menu">Pricing</span></a></li>
                        </ul>
                    </li> -->
                    <li><a href="inbox.html" class="waves-effect"><i class="mdi mdi-apps fa-fw"></i> <span class="hide-menu">Apps<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level"><!-- 
                            <li><a href="chat.html"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">Chat-message</span></a></li> -->
                            <!-- <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-desktop fa-fw"></i><span class="hide-menu">Inbox</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="inbox.html"><i class="ti-email fa-fw"></i><span class="hide-menu">Mail box</span></a></li>
                                    <li> <a href="inbox-detail.html"><i class="ti-layout-media-left-alt fa-fw"></i><span class="hide-menu">Inbox detail</span></a></li>
                                    <li> <a href="compose.html"><i class="ti-layout-media-center-alt fa-fw"></i><span class="hide-menu">Compose mail</span></a></li>
                                </ul>
                            </li> -->
                            <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-user fa-fw"></i><span class="hide-menu">SECTIONS</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="purchase.php"><i class="icon-people fa-fw"></i><span class="hide-menu">Purchases</span></a></li>
                                    <li> <a href="products.php"><i class="icon-people fa-fw"></i><span class="hide-menu">Inventory</span></a></li>
                                    <li> <a href="sales.php"><i class="icon-people fa-fw"></i><span class="hide-menu">Sales</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="devider"></li>
                    <!-- <li> <a href="forms.html" class="waves-effect active"><i class="mdi mdi-clipboard-text fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="form-basic.html"><i class="fa-fw">B</i><span class="hide-menu">Basic Forms</span></a></li>
                            <li><a href="form-layout.html"><i class="fa-fw">L</i><span class="hide-menu">Form Layout</span></a></li>
                            <li><a href="form-advanced.html"><i class="fa-fw">A</i><span class="hide-menu">Form Addons</span></a></li>
                            <li><a href="form-material-elements.html"><i class="fa-fw">M</i><span class="hide-menu">Form Material</span></a></li>
                            <li><a href="form-float-input.html"><i class="fa-fw">F</i><span class="hide-menu">Form Float Input</span></a></li>
                            <li><a href="form-upload.html"><i class="fa-fw">U</i><span class="hide-menu">File Upload</span></a></li>
                            <li><a href="form-mask.html"><i class="fa-fw">M</i><span class="hide-menu">Form Mask</span></a></li>
                            <li><a href="form-img-cropper.html"><i class="fa-fw">C</i><span class="hide-menu">Image Cropping</span></a></li>
                            <li><a href="form-validation.html"><i class="fa-fw">V</i><span class="hide-menu">Form Validation</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa-fw">D</i><span class="hide-menu">File Dropzone</span></a></li>
                            <li><a href="form-pickers.html"><i class="fa-fw">P</i><span class="hide-menu">Form-pickers</span></a></li>
                            <li><a href="form-wizard.html"><i class="fa-fw">W</i><span class="hide-menu">Form-wizards</span></a></li>
                            <li><a href="form-typehead.html"><i class="fa-fw">T</i><span class="hide-menu">Typehead</span></a></li>
                            <li><a href="form-xeditable.html"><i class="fa-fw">X</i><span class="hide-menu">X-editable</span></a></li>
                            <li><a href="form-summernote.html"><i class="fa-fw">S</i><span class="hide-menu">Summernote</span></a></li>
                            <li><a href="form-bootstrap-wysihtml5.html"><i class=" fa-fw">W</i><span class="hide-menu">Bootstrap wysihtml5</span></a></li>
                            <li><a href="form-tinymce-wysihtml5.html"><i class="fa-fw">T</i><span class="hide-menu">Tinymce wysihtml5</span></a></li>
                        </ul>
                    </li> -->
                    <!-- <li> <a href="tables.html" class="waves-effect"><i class="mdi mdi-table fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">9</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="basic-table.html"><i class="fa-fw">B</i><span class="hide-menu">Basic Tables</span></a></li>
                            <li><a href="table-layouts.html"><i class="fa-fw">L</i><span class="hide-menu">Table Layouts</span></a></li>
                            <li><a href="data-table.html"><i class="fa-fw">D</i><span class="hide-menu">Data Table</span></a></li>
                            <li><a href="bootstrap-tables.html"><i class="fa-fw">B</i><span class="hide-menu">Bootstrap Tables</span></a></li>
                            <li><a href="responsive-tables.html"><i class="fa-fw">R</i><span class="hide-menu">Responsive Tables</span></a></li>
                            <li><a href="editable-tables.html"><i class="fa-fw">E</i><span class="hide-menu">Editable Tables</span></a></li>
                            <li><a href="foo-tables.html"><i class="fa-fw">F</i><span class="hide-menu">FooTables</span></a></li>
                            <li><a href="jsgrid.html"><i class="fa-fw">J</i><span class="hide-menu">JsGrid Tables</span></a></li>
                        </ul>
                    </li> -->
                    <!-- <li> <a href="#" class="waves-effect"><i class="mdi mdi-chart-bar fa-fw"></i> <span class="hide-menu">Charts<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="flot.html"><i class="fa-fw">F</i><span class="hide-menu">Flot Charts</span></a> </li>
                            <li><a href="morris-chart.html"><i class="fa-fw">M</i><span class="hide-menu">Morris Chart</span></a></li>
                            <li><a href="chart-js.html"><i class="fa-fw">P</i><span class="hide-menu">Chart-js</span></a></li>
                            <li><a href="peity-chart.html"><i class="fa-fw">P</i><span class="hide-menu">Peity Charts</span></a></li>
                            <li><a href="chartist-js.html"><i class="fa-fw">C</i><span class="hide-menu">Chartist-js</span></a></li>
                            <li><a href="knob-chart.html"><i class="fa-fw">K</i><span class="hide-menu">Knob Charts</span></a></li>
                            <li><a href="sparkline-chart.html"><i class="fa-fw">S</i><span class="hide-menu">Sparkline charts</span></a></li>
                            <li><a href="extra-charts.html"><i class="fa-fw">E</i><span class="hide-menu">Extra Charts</span></a></li>
                        </ul>
                    </li> -->
                    <li class="devider"></li>
                    <!-- <li> <a href="widgets.html" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-emoticon fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="fontawesome.html"><i class="fa-fw">F</i><span class="hide-menu">Font awesome</span></a> </li>
                            <li> <a href="themifyicon.html"><i class="fa-fw">T</i><span class="hide-menu">Themify Icons</span></a> </li>
                            <li> <a href="simple-line.html"><i class="fa-fw">S</i><span class="hide-menu">Simple line Icons</span></a> </li>
                            <li> <a href="material-icons.html"><i class="fa-fw">M</i><span class="hide-menu">Material Icons</span></a> </li>
                            <li><a href="linea-icon.html"><i class="fa-fw">L</i><span class="hide-menu">Linea Icons</span></a></li>
                            <li><a href="weather.html"><i class="fa-fw">W</i><span class="hide-menu">Weather Icons</span></a></li>
                        </ul>
                    </li> -->
                    <!-- <li> <a href="map-google.html" class="waves-effect"><i class="mdi mdi-google-maps fa-fw"></i><span class="hide-menu">Google Map</span></a> </li>
                    <li> <a href="map-vector.html" class="waves-effect"><i class="mdi mdi-map-marker fa-fw"></i><span class="hide-menu">Vector Map</span></a> </li> -->
                    <li> <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-check fa-fw"></i> <span class="hide-menu">Calendar</span></a></li>
                    <!-- <li> <a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-checkbox-multiple-marked-outline fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a> -->
                        <!-- <ul class="nav nav-second-level">
                            <li> <a href="javascript:void(0)"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Second Level Item</span></a> </li>
                            <li> <a href="javascript:void(0)"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Second Level Item</span></a> </li>
                            <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Third Level </span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="javascript:void(0)"><i class=" fa-fw">T</i><span class="hide-menu">Third Level Item</span></a> </li>
                                    <li> <a href="javascript:void(0)"><i class=" fa-fw">M</i><span class="hide-menu">Third Level Item</span></a> </li>
                                    <li> <a href="javascript:void(0)"><i class=" fa-fw">R</i><span class="hide-menu">Third Level Item</span></a> </li>
                                    <li> <a href="javascript:void(0)"><i class=" fa-fw">G</i><span class="hide-menu">Third Level Item</span></a> </li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li><a href="login.html" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    <li class="devider"></li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">New Sell</h4> </div>
                    <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <a href="#" target="" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Ui Elements</a></li>
                            <li class="active">Notifications</li>
                        </ol>
                    </div> -->
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <p class="text-muted m-b-30 font-13"> Enter Products to sell Here </p>
                            <div class="form-group">
                                    
                                </div>
                                
                            <form action="newproductsell.php" method="post" class="form-horizontal">
<div class="row">
                <div class="form-group col-md-4">
                  <label class="col-md-12">Product1</label>
<select class="form-control" id="country-dropdown" name="product">
<option value="">Select Product</option>
<?php
require_once "confi.php";
$result = mysqli_query($connect,"SELECT * FROM category");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["category"]; ?>" data-cat="<?php echo $row["cat_id"]; ?>"><?php echo $row["category"]; ?></option>
<!--<option value="<?php echo $row['cat_id'];?>"><?php echo $row["category"];?></option>-->
<?php
}
?>
</select>
</div>
<div class="form-group col-md-3">
<label for="name">Category</label>
<select class="form-control" id="state-dropdown" name="category">
</select>
</div>
<div class="form-group col-md-2">
<label for="name">Unit_Price</label>
<select class="form-control" id="unitprice" name="stock">
</select> 

</div>                        
<div class="form-group col-md-2">
<label for="name">A_Quantity</label>
<select class="form-control" id="city-dropdown">
</select>
</div>
<div class="form-group col-md-2">
    <label for="name">NewQuantity</label>
                  <input type="text" name="serialno" class="form-control" placeholder="Fill ">
                </div>

</div>
<div class="row">
                <div class="form-group col-md-4">
                  <label class="col-md-12">Product2</label>
<select class="form-control" id="country-dropdown2" name="product2">
<option value="">Select Product</option>
<?php
require_once "confi.php";
$result = mysqli_query($connect,"SELECT * FROM category");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["category"]; ?>" data-cat2="<?php echo $row["cat_id"]; ?>"><?php echo $row["category"]; ?></option>
<!--<option value="<?php echo $row['cat_id'];?>"><?php echo $row["category"];?></option>-->
<?php
}
?>
</select>
</div>
<div class="form-group col-md-3">
<label for="name">Category</label>
<select class="form-control" id="state-dropdown2" name="category2">
</select>
</div>
<div class="form-group col-md-2">
<label for="name">Unit_Price</label>
<select class="form-control" id="unitprice2" name="stock2">
</select> 

</div>                        

<div class="form-group col-md-2">
<label for="name">A_Quantity</label>
<select class="form-control" id="city-dropdown2">
</select>
</div>
<div class="form-group col-md-2">
    <label for="name">NewQuantity</label>
                  <input type="text" name="serialno2" class="form-control" placeholder="Fill ">
                </div>
</div>
<div class="row">
                <div class="form-group col-md-4">
                  <label class="col-md-12">Product3</label>
<select class="form-control" id="country-dropdown3" name="product3">
<option value="">Select Product</option>
<?php
require_once "confi.php";
$result = mysqli_query($connect,"SELECT * FROM category");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["category"]; ?>" data-cat3="<?php echo $row["cat_id"]; ?>"><?php echo $row["category"]; ?></option>
<!--<option value="<?php echo $row['cat_id'];?>"><?php echo $row["category"];?></option>-->
<?php
}
?>
</select>
</div>
<div class="form-group col-md-3">
<label for="name">Category</label>
<select class="form-control" id="state-dropdown3" name="category3">
</select>
</div>
<div class="form-group col-md-2">
<label for="name">Unit_Price</label>
<select class="form-control" id="unitprice3" name="stock3">
</select> 

</div>                        

<div class="form-group col-md-2">
<label for="name">A_Quantity</label>
<select class="form-control" id="city-dropdown3">
</select>
</div>
<div class="form-group col-md-2">
    <label for="name">NewQuantity</label>
                  <input type="text" name="serialno3" class="form-control" placeholder="Fill ">
                </div>
</div>
<div class="row">
                <div class="form-group col-md-4">
                  <label class="col-md-12">Product4</label>
<select class="form-control" id="country-dropdown4" name="product4">
<option value="">Select Product</option>
<?php
require_once "confi.php";
$result = mysqli_query($connect,"SELECT * FROM category");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["category"]; ?>" data-cat4="<?php echo $row["cat_id"]; ?>"><?php echo $row["category"]; ?></option>
<!--<option value="<?php echo $row['cat_id'];?>"><?php echo $row["category"];?></option>-->
<?php
}
?>
</select>
</div>
<div class="form-group col-md-3">
<label for="name">Category</label>
<select class="form-control" id="state-dropdown4" name="category4">
</select>
</div>
<div class="form-group col-md-2">
<label for="name">Unit_Price</label>
<select class="form-control" id="unitprice4" name="stock4">
</select> 

</div>                        

<div class="form-group col-md-2">
<label for="name">A_Quantity</label>
<select class="form-control" id="city-dropdown4">
</select>
</div>
<div class="form-group col-md-2">
    <label for="name">NewQuantity</label>
                  <input type="text" name="serialno4" class="form-control" placeholder="Fill ">
                </div>
</div>
<div class="row">
                <div class="form-group col-md-4">
                  <label class="col-md-12">Product5</label>
<select class="form-control" id="country-dropdown5" name="product5">
<option value="">Select Product</option>
<?php
require_once "confi.php";
$result = mysqli_query($connect,"SELECT * FROM category");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["category"]; ?>" data-cat5="<?php echo $row["cat_id"]; ?>"><?php echo $row["category"]; ?></option>
<!--<option value="<?php echo $row['cat_id'];?>"><?php echo $row["category"];?></option>-->
<?php
}
?>
</select>
</div>
<div class="form-group col-md-3">
<label for="name">Category</label>
<select class="form-control" id="state-dropdown5" name="category5">
</select>
</div>
<div class="form-group col-md-2">
<label for="name">Unit_Price</label>
<select class="form-control" id="unitprice5" name="stock5">
</select> 

</div>                        

<div class="form-group col-md-2">
<label for="name">A_Quantity</label>
<select class="form-control" id="city-dropdown5">
</select>
</div>
<div class="form-group col-md-2">
    <label for="name">NewQuantity</label>
                  <input type="text" name="serialno5" class="form-control" placeholder="Fill ">
                </div>
</div>
                                                               <!-- <div class="form-group">
                                    <label class="col-md-12">Date</label>
                                    <div class="col-md-12">
                                        <input type="date" name="date" class="form-control" placeholder="Enter Date Here"> </div>
                                </div>-->
                                
                                <div class="form-group">

                                <button type="submit"name="submit" class="btn btn-info btn-rounded"  data-target="#add-contact"><i class="fa fa-save"></i>Sell</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    
                </div>               
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2021 &copy; Grayhost Innovations </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/jasny-bootstrap.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

 <script>
$(document).ready(function() {
$('#country-dropdown').on('change', function() {
    var country_id = $("#country-dropdown option:selected").data("cat");
//var country_id = this.value;
$.ajax({
url: "states-by-country.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#state-dropdown").html(result);
//$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
});    
$('#state-dropdown').on('change', function() {
//var state_id = this.value;
var state_id = $("#state-dropdown option:selected").data("cata");

$.ajax({
url: "cities-by-states.php",
type: "POST",
data: {
state_id: state_id
},
cache: false,
success: function(result){
$("#city-dropdown").html(result);
}
});
$.ajax({
url: "unitprice.php",
type: "POST",
data: {
state_id: state_id
},
cache: false,
success: function(result){
$("#unitprice").html(result);
}
});

});
});
</script>
<!--product2-->
<script>
$(document).ready(function() {
$('#country-dropdown2').on('change', function() {
    var country_id = $("#country-dropdown2 option:selected").data("cat2");
//var country_id = this.value;
$.ajax({
url: "states-by-country.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#state-dropdown2").html(result);
//$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
});    
$('#state-dropdown2').on('change', function() {
//var state_id = this.value;
var state_id = $("#state-dropdown2 option:selected").data("cata");

$.ajax({
url: "cities-by-states.php",
type: "POST",
data: {
state_id: state_id
},
cache: false,
success: function(result){
$("#city-dropdown2").html(result);
}
});
$.ajax({
url: "unitprice.php",
type: "POST",
data: {
state_id: state_id
},
cache: false,
success: function(result){
$("#unitprice2").html(result);
}
});
});
});
</script>
<!--product3-->
<script>
$(document).ready(function() {
$('#country-dropdown3').on('change', function() {
    var country_id = $("#country-dropdown3 option:selected").data("cat3");
//var country_id = this.value;
$.ajax({
url: "states-by-country.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#state-dropdown3").html(result);
//$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
});    
$('#state-dropdown3').on('change', function() {
//var state_id = this.value;
var state_id = $("#state-dropdown3 option:selected").data("cata");

$.ajax({
url: "cities-by-states.php",
type: "POST",
data: {
state_id: state_id
},
cache: false,
success: function(result){
$("#city-dropdown3").html(result);
}
});
$.ajax({
url: "unitprice.php",
type: "POST",
data: {
state_id: state_id
},
cache: false,
success: function(result){
$("#unitprice3").html(result);
}
});
});
});
</script>
<!--product4-->
<script>
$(document).ready(function() {
$('#country-dropdown4').on('change', function() {
    var country_id = $("#country-dropdown4 option:selected").data("cat4");
//var country_id = this.value;
$.ajax({
url: "states-by-country.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#state-dropdown4").html(result);
//$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
});    
$('#state-dropdown4').on('change', function() {
//var state_id = this.value;
var state_id = $("#state-dropdown4 option:selected").data("cata");

$.ajax({
url: "cities-by-states.php",
type: "POST",
data: {
state_id: state_id
},
cache: false,
success: function(result){
$("#city-dropdown4").html(result);
}
});
$.ajax({
url: "unitprice.php",
type: "POST",
data: {
state_id: state_id
},
cache: false,
success: function(result){
$("#unitprice4").html(result);
}
});
});
});
</script>
<!--product5-->
<script>
$(document).ready(function() {
$('#country-dropdown5').on('change', function() {
    var country_id = $("#country-dropdown5 option:selected").data("cat5");
//var country_id = this.value;
$.ajax({
url: "states-by-country.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#state-dropdown5").html(result);
//$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
});    
$('#state-dropdown5').on('change', function() {
//var state_id = this.value;
var state_id = $("#state-dropdown5 option:selected").data("cata");

$.ajax({
url: "cities-by-states.php",
type: "POST",
data: {
state_id: state_id
},
cache: false,
success: function(result){
$("#city-dropdown5").html(result);
}
});
$.ajax({
url: "unitprice.php",
type: "POST",
data: {
state_id: state_id
},
cache: false,
success: function(result){
$("#unitprice5").html(result);
}
});
});
});
</script>
</body>

</html>
