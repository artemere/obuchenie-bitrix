<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />


<body>



<div id="container">

<div id="header"><a href="/" title="Главная"><img src="<?=SITE_TEMPLATE_PATH?>/images/woman.jpg" id="header_logo" height="106" alt="" width="295" border="0"/></a>
	<div id="header_text">
		<?$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("include_areas/company_name.php"),
			Array(),
			Array("MODE"=>"html")
		);?>
	</div>

	<div id="company_logo"></div>

	<div id="header_menu">
		<?$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("include_areas/header_icons.php"),
			Array(),
			Array("MODE"=>"php")
		);?>
	</div>
</div>

<table width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td width="190" valign="top" height="35"><a href="/" title="Главная"><img src="<?=SITE_TEMPLATE_PATH?>/images/woman_breast.jpg" height="35" alt="" width="190" border="0" /></a></td>
		<td width="100%">
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"horizontal_multilevel_silver", 
				Array(
					"ROOT_MENU_TYPE"	=>	"top",
					"MAX_LEVEL"	=>	"3",
					"CHILD_MENU_TYPE"	=>	"left",
					"USE_EXT"	=>	"Y",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => Array()
				)
			);?>
		</td>
	</tr>
</table>

<table id="content">
	<tr>
		<td class="left-column" valign="top"><a href="/" title="Главная"><img src="<?=SITE_TEMPLATE_PATH?>/images/woman_arms.jpg" height="64" alt="" width="200" border="0"/></a><img src="<?=SITE_TEMPLATE_PATH?>/images/left-column-head.gif" width="200" height="15" border="0" alt=""><div id="content_block_container">
		<?$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"left", 
				Array(
					"ROOT_MENU_TYPE"	=>	"left",
					"MAX_LEVEL"	=>	"1",
					"CHILD_MENU_TYPE"	=>	"left",
					"USE_EXT"	=>	"Y",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(
						0 => "SECTION_ID",
						1 => "page",
					),
				)
			);?>

	<!-- SOCIALNETWORK -->

		<div class="content-block">
			<div class="content-block-head-corner"><div class="content-block-head">Авторизация</div></div>
			<div class="content-block-body">
				<?$APPLICATION->IncludeComponent(
					"bitrix:system.auth.form",
					".default",
					Array(
						"REGISTER_URL" => "/auth/", 
						"PROFILE_URL" => "/personal/profile/" 
					)
				);?>
			</div>
		</div>

		<!--SUBSCRIBE-->

		<!--BANNER_LEFT-->
		<br />
		</div><img src="<?=SITE_TEMPLATE_PATH?>/images/left-column-bottom.gif" width="200" height="3" border="0" alt=""></td>
		<td class="shadow-column" valign="top" width="10"><img src="<?=SITE_TEMPLATE_PATH?>/images/shadow.gif" width="10" height="164" border="0" alt=""></td>
		<td valign="top">
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td colspan="2">
						<table width="100%" cellpadding="0" cellspacing="0">
							<tr>
								<td width="100%" class="main-column">
									<div id="navigation">
									<?$APPLICATION->IncludeComponent(
										"bitrix:breadcrumb",
										".default",
										Array(
											"START_FROM" => "0", 
											"PATH" => "", 
											"SITE_ID" => "" 
										)
										);?>
									</div>
									<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false)?></h1></td>
								<td width="200">
									<div id="search-box">
										Поиск на сайте
										<?$APPLICATION->IncludeComponent("bitrix:search.form", "flat", Array(
											"PAGE"	=>	"/search/"
											)
										);?>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="main-column">





                        <!DOCTYPE HTML>
                        <!--
                            Arcana by HTML5 UP
                            html5up.net | @ajlkn
                            Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
                        -->
                        <html>
                        <head>
                            <title><?$APPLICATION->ShowTitle()?></title>
                            <?$APPLICATION->ShowHead()?>
                            <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
                            <link rel="stylesheet" href="assets/css/main.css" />
                            <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
                            <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
                        </head>
                        <body>
                        <?$APPLICATION->ShowPanel();?>
                        <div id="page-wrapper">

                            <!-- Header -->
                            <div id="header">

                                <!-- Logo -->
                                <h1><a href="index.html" id="logo">Arcana <em>by HTML5 UP</em></a></h1>

                                <!-- Nav -->
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
