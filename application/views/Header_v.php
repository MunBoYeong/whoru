<!DOCTYPE html>
<html class="gt-ie8 gt-ie9 not-ie pxajs"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Dashboard - PixelAdmin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

        <!-- Open Sans font from Google CDN -->
        <link href="/whoru/Static/css/css" rel="stylesheet" type="text/css">

        <!-- Pixel Admin's stylesheets -->
        <link href="/whoru/Static/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/whoru/Static/css/pixel-admin.min.css" rel="stylesheet" type="text/css">
        <link href="/whoru/Static/css/widgets.min.css" rel="stylesheet" type="text/css">
        <link href="/whoru/Static/css/rtl.min.css" rel="stylesheet" type="text/css">
        <link href="/whoru/Static/css/themes.min.css" rel="stylesheet" type="text/css">

        <!--[if lt IE 9]>
                <script src="assets/javascripts/ie.min.js"></script>
        <![endif]-->
    </head>


    <!-- 1. $BODY ======================================================================================

            Body

            Classes:
            * 'theme-{THEME NAME}'
            * 'right-to-left'      - Sets text direction to right-to-left
            * 'main-menu-right'    - Places the main menu on the right side
            * 'no-main-menu'       - Hides the main menu
            * 'main-navbar-fixed'  - Fixes the main navigation
            * 'main-menu-fixed'    - Fixes the main menu
            * 'main-menu-animated' - Animate main menu
    -->
    <body class="theme-adminflare main-menu-animated animate-mm-sm animate-mm-md animate-mm-lg" style="">

        <script>var init = [];</script>

        <div id="main-wrapper">


            <!-- 2. $MAIN_NAVIGATION ===========================================================================

                    Main navigation
            -->
            <div id="main-navbar" class="navbar navbar-inverse" role="navigation">
                <!-- Main menu toggle -->
                <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>

                <div class="navbar-inner">
                    <!-- Main navbar header -->
                    <div class="navbar-header">

                        <!-- Logo -->
                        <a href="/whoru/" class="navbar-brand">
                            <div><img alt="Pixel Admin" src="Images/main-navbar-logo.png"></div>
                            Question in Hoseo
                        </a>

                        <!-- Main navbar toggle -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

                    </div> <!-- / .navbar-header -->

                    <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
                        <div>
                            <div class="right clearfix">
                                <ul class="nav navbar-nav pull-right right-navbar-nav">

                                    <!-- 3. $NAVBAR_ICON_BUTTONS =======================================================================

                                                                                            Navbar Icon Buttons

                                                                                            NOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.

                                                                                            Classes:
                                                                                            * 'nav-icon-btn-info'
                                                                                            * 'nav-icon-btn-success'
                                                                                            * 'nav-icon-btn-warning'
                                                                                            * 'nav-icon-btn-danger' 
                                    -->
                                    <li class="nav-icon-btn nav-icon-btn-danger dropdown">
                                        <a href="http://infinite-woodland-5276.herokuapp.com/index.html#notifications" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="label">5</span>
                                            <i class="nav-icon fa fa-bullhorn"></i>
                                            <span class="small-screen-text">Notifications</span>
                                        </a>

                                        <!-- NOTIFICATIONS -->

                                        <!-- Javascript -->
                                        <script>
                                            init.push(function() {
                                                $('#main-navbar-notifications').slimScroll({height: 250});
                                            });
                                        </script>
                                        <!-- / Javascript -->

                                        <div class="dropdown-menu widget-notifications no-padding" style="width: 300px">
                                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="notifications-list" id="main-navbar-notifications" style="overflow: hidden; width: auto; height: 250px;">

                                                    <div class="notification">
                                                        <div class="notification-title text-danger">SYSTEM</div>
                                                        <div class="notification-description"><strong>Error 500</strong>: Syntax error in index.php at line <strong>461</strong>.</div>
                                                        <div class="notification-ago">12h ago</div>
                                                        <div class="notification-icon fa fa-hdd-o bg-danger"></div>
                                                    </div> <!-- / .notification -->

                                                    <div class="notification">
                                                        <div class="notification-title text-info">STORE</div>
                                                        <div class="notification-description">You have <strong>9</strong> new orders.</div>
                                                        <div class="notification-ago">12h ago</div>
                                                        <div class="notification-icon fa fa-truck bg-info"></div>
                                                    </div> <!-- / .notification -->

                                                    <div class="notification">
                                                        <div class="notification-title text-default">CRON DAEMON</div>
                                                        <div class="notification-description">Job <strong>"Clean DB"</strong> has been completed.</div>
                                                        <div class="notification-ago">12h ago</div>
                                                        <div class="notification-icon fa fa-clock-o bg-default"></div>
                                                    </div> <!-- / .notification -->

                                                    <div class="notification">
                                                        <div class="notification-title text-success">SYSTEM</div>
                                                        <div class="notification-description">Server <strong>up</strong>.</div>
                                                        <div class="notification-ago">12h ago</div>
                                                        <div class="notification-icon fa fa-hdd-o bg-success"></div>
                                                    </div> <!-- / .notification -->

                                                    <div class="notification">
                                                        <div class="notification-title text-warning">SYSTEM</div>
                                                        <div class="notification-description"><strong>Warning</strong>: Processor load <strong>92%</strong>.</div>
                                                        <div class="notification-ago">12h ago</div>
                                                        <div class="notification-icon fa fa-hdd-o bg-warning"></div>
                                                    </div> <!-- / .notification -->

                                                </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div> <!-- / .notifications-list -->
                                            <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="notifications-link">MORE NOTIFICATIONS</a>
                                        </div> <!-- / .dropdown-menu -->
                                    </li>
                                    <li class="nav-icon-btn">
                                        <a href="/whoru/user/Login" class="btn-login-join">
                                            <i class="nav-icon fa fa-power-off"></i>
                                            <span class="small-screen-text">Log In</span>
                                        </a>
                                    </li>
                                    <li class="nav-icon-btn">
                                        <a href="/whoru/user/Join" class="btn-login-join">
                                            <i class="nav-icon fa fa-users"></i>
                                            <span class="small-screen-text">Join</span>
                                        </a>
                                    </li>
                                    <!-- /3. $END_NAVBAR_ICON_BUTTONS -->
                                    <!--
        <li class="dropdown">
                                            <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                                    <img src="Images/1.jpg" alt="">
                                                    <span>John Doe</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                    <li><a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><span class="label label-warning pull-right">New</span>Profile</a></li>
                                                    <li><a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><span class="badge badge-primary pull-right">New</span>Account</a></li>
                                                    <li><a href="http://infinite-woodland-5276.herokuapp.com/index.html#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="http://infinite-woodland-5276.herokuapp.com/pages-signin.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                                            </ul>
                                    </li> 
                                    -->
                                </ul> <!-- / .navbar-nav -->
                            </div> <!-- / .right -->
                        </div>
                    </div> <!-- / #main-navbar-collapse -->
                </div> <!-- / .navbar-inner -->
            </div> <!-- / #main-navbar -->
            <!-- /2. $END_MAIN_NAVIGATION -->