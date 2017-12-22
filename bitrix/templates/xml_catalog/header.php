<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

 <!DOCTYPE HTML>
<html>
                        <head>
                            <title><?$APPLICATION->ShowTitle()?></title>
                            <?$APPLICATION->ShowHead()?>
                            <!--[if lte IE 8]><script src="<?=SITE_TEMPLATE_PATH?>/assets/js/ie/html5shiv.js"></script><![endif]-->
                            <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/main.css" />
                            <!--[if lte IE 8]><link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/ie8.css" /><![endif]-->
                            <!--[if lte IE 9]><link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/ie9.css" /><![endif]-->
                        </head>
                        <body>
                        <?$APPLICATION->ShowPanel();?>
                        <div id="page-wrapper">

                            <!-- Header -->
                            <div id="header">

                                <!-- Logo -->
                                <h1><a href="index.html" id="logo">Arcana <em>by HTML5 UP</em></a></h1>

                                <!-- Nav -->
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "",
                                    Array(
                                        "ALLOW_MULTI_SELECT" => "N",
                                        "CHILD_MENU_TYPE" => "left",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "1",
                                        "MENU_CACHE_GET_VARS" => array(""),
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_TYPE" => "N",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "top",
                                        "USE_EXT" => "N"
                                    )
                                );?>
                                <nav id="nav">
                                    <ul>
                                        <li class="current"><a href="index.html">Home</a></li>
                                        <li>
                                            <a href="#">Dropdown</a>
                                            <ul>
                                                <li><a href="#">Lorem dolor</a></li>
                                                <li><a href="#">Magna phasellus</a></li>
                                                <li><a href="#">Etiam sed tempus</a></li>
                                                <li>
                                                    <a href="#">Submenu</a>
                                                    <ul>
                                                        <li><a href="#">Lorem dolor</a></li>
                                                        <li><a href="#">Phasellus magna</a></li>
                                                        <li><a href="#">Magna phasellus</a></li>
                                                        <li><a href="#">Etiam nisl</a></li>
                                                        <li><a href="#">Veroeros feugiat</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Veroeros feugiat</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                        <li><a href="right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="two-sidebar.html">Two Sidebar</a></li>
                                        <li><a href="no-sidebar.html">No Sidebar</a></li>
                                    </ul>
                                </nav>

                            </div>
