﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Dashboard | Tugboat Admin</title>
    <link rel="stylesheet" type="text/css" href="<?php echo admin_asset_css('reset.css');?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo admin_asset_css('text.css');?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo admin_asset_css('grid.css');?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo admin_asset_css('layout.css');?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo admin_asset_css('nav.css');?>" media="screen" />
    
	
    <script src="<?php echo admin_asset_js('jquery-1.6.4.min.js');?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo admin_asset_js('jquery-ui/jquery.ui.core.min.js');?>"></script>
    <script src="<?php echo admin_asset_js('jquery-ui/jquery.ui.widget.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo admin_asset_js('jquery-ui/jquery.ui.accordion.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo admin_asset_js('jquery-ui/jquery.effects.core.min.js');?>" type="text/javascript"></script>
    <script src="<?php echo admin_asset_js('jquery-ui/jquery.effects.slide.min.js');?>" type="text/javascript"></script>
    
	
	
    <script src="<?php echo admin_asset_js('setup.js');?>" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            //setupDashboardChart('chart1');
            setupLeftMenu();
			setSidebarHeight();


        });
    </script>

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft">
                    <img height="50" width="214" src="<?php echo asset_img("logo.png");?>" alt="Logo" /></div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="<?php echo admin_asset_img('img-profile.jpg');?>" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello Admin</li>
                            <li><a href="#">Config</a></li>
                            <li><a href="<?php echo base_url();?>admin/auth/logout">Logout</a></li>
                        </ul>
                        <br />
                        <span class="small grey">Last Login: 3 hours ago</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="<?php echo base_url();?>admin/dashboard"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href=""><span>Users</span></a>
                    <ul>
                        <li><a href="#">BOS</a> </li>
                        <li><a href="#">POS</a> </li>
                    </ul>
                </li>
                <!--<li class="ic-typography"><a href="#"><span>Ads Management</span></a></li>
				<li class="ic-charts"><a href="#"><span>News Letter</span></a></li>
                <li class="ic-grid-tables"><a href="table.html"><span>Data Table</span></a></li>
                <li class="ic-gallery dd"><a href="javascript:"><span>Image Galleries</span></a>
               		 <ul>
                        <li><a href="image-gallery.html">Pretty Photo</a> </li>
                        <li><a href="gallery-with-filter.html">Gallery with Filter</a> </li>
                    </ul>
                </li>
                <li class="ic-notifications"><a href="notifications.html"><span>Notifications</span></a></li>-->

            </ul>
        </div>
        <div class="clear">
        </div>
