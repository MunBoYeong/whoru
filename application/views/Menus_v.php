<!-- 4. $MAIN_MENU =================================================================================

                Main menu
                
                Notes:
                * to make the menu item active, add a class 'active' to the <li>
                  example: <li class="active">...</li>
                * multilevel submenu example:
                        <li class="mm-dropdown">
                          <a href="#"><span class="mm-text">Submenu item text 1</span></a>
                          <ul>
                                <li>...</li>
                                <li class="mm-dropdown">
                                  <a href="#"><span class="mm-text">Submenu item text 2</span></a>
                                  <ul>
                                        <li>...</li>
                                        ...
                                  </ul>
                                </li>
                                ...
                          </ul>
                        </li>
-->
<div id="main-menu" role="navigation">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div id="main-menu-inner" style="overflow: hidden; width: auto; height: 100%;">
            <!-- Login info-->
            <?php
            if (@$this->session->userdata['is_login'] == TRUE) {
                ?>
                <div class="menu-content top animated fadeIn" id="menu-content-demo">
                    <!-- Menu custom content demo
                             CSS:        styles/pixel-admin-less/demo.less or styles/pixel-admin-scss/_demo.scss
                             Javascript: html/assets/demo/demo.js-->

                    <div>
                        <div class="text-bg"><span class="text-semibold"><?php echo @$this->session->userdata['userid']; ?> </span>님,<br>
                            <span class="text-slim">환영합니다.</span> </div>

                        <img src="/whoru/Images/1.jpg" alt="" class="">
                        <div class="btn-group">
                            <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></a>
                            <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
                            <a href="http://infinite-woodland-5276.herokuapp.com/index.html#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a>
                            <a href="/whoru/user/Logout" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
                        </div>
                        <a href="#" class="close">×</a>
                    </div>
                </div> 
                <?php
            }
            ?>
            <!-- example
            <ul class="navigation">
                <li class=" active">
                    <a href="#"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Dashboard</span></a>
                </li>
                <li class="mm-dropdown mm-dropdown-root">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Layouts</span><span class="label label-warning">Updated</span></a>
                    <ul class="mmc-dropdown-delay animated fadeInLeft">
                        <li>
                            <a tabindex="-1" href="#"><span class="mm-text">Grid</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="#"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">Main menu</span><span class="label label-warning">Updated</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="menu-icon fa fa-table"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">Tables</span></a>
                </li>
            </ul> <!-- / .navigation -->
            <ul class="navigation">
                <li class=" active">
                    <a href="/whoru/"><i class="menu-icon fa fa-home"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">홈</span></a>
                </li>
            <?php
            if (@$this->session->userdata['is_admin'] == TRUE) {
                ?>
                <li>
                    <a href="/whoru/admin/memlist"><i class="menu-icon fa fa-users"></i><span class="mm-text mmc-dropdown-delay animated fadeIn">회원관리</span></a>
                </li>
                <?php
            }
            ?>
            </ul>
        </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; height: 741px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div> <!-- / #main-menu-inner -->
</div> <!-- / #main-menu -->
<!-- /4. $MAIN_MENU -->