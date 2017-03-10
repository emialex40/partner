<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name') ?></title>


<?php wp_head(); ?>

</head>

<body>

<!-- loader -->
<div class="loader">
	<div class="loader_inner"></div>
</div>
<!-- loader end -->

<!-- mobile menu -->
<div class="menu">
        <!-- icon menu -->
        <div class="icon-close">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <!-- menu -->

        <ul>
            <li><a href="#anchor1" rel="m_PageScroll2id">Чому ми</a></li>
            <li><a href="#anchor2" rel="m_PageScroll2id">Нерухомість</a></li>
            <li><a href="#anchor3" rel="m_PageScroll2id">Відгуки</a></li>
            <li><a href="#anchor4" rel="m_PageScroll2id">Контакти</a></li>
        </ul>
    </div>
<!-- mobile menu end -->

<!-- header -->
    <header>

		<div class="top_menu">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-xs-5">
						<div class="logo">
							<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo"></a>
						</div>
						<div class="phone">
							<span>тел: (067) 363 19 66</span>
							<span>(095) 213 69 55</span>
						</div>
					</div>
					<div class="col-md-7 col-xs-7">
						<ul class="navbar">
							<li><a href="<?php bloginfo('url'); ?>#anchor1" rel="m_PageScroll2id">Чому ми</a></li>
							<li><a href="<?php bloginfo('url'); ?>#anchor2" rel="m_PageScroll2id">Нерухомість</a></li>
							<li><a href="<?php bloginfo('url'); ?>#anchor3" rel="m_PageScroll2id">Відгуки</a></li>
							<li><a href="#anchor4" rel="m_PageScroll2id">Контакти</a></li>
						</ul>
						<div class="menu-btn"><i class="fa fa-bars" aria-hidden="true"></i> Menu</div>
					</div>
				</div>
			</div>
		</div>
	<div class="bg_img">
			<h1><?php bloginfo('name') ?></h1>
	</div>

    </header>