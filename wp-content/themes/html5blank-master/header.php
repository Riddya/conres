<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(get_class_body()); ?>>
		<!-- wrapper -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="/corporate-section">ConRes</a>

				<div class="clearfix"></div>
				<!--
				<ul class="optionalTopMenu">
					<li><a href="/corporate-section">Corporate</a></li>
					<li><a href="/it-products-solutions">IT Products & Solutions</a></li>
					<li><a href="/oem-embedded-computers">OEM/Embedded Computer Solutions</a></li>
					<li><a href="/test-equipment">Test Equipment</a></li>
				</ul>
				-->
			</div>


			<div class="pull-right topArea">
				<ul class="nav navbar-right">
					<li><a href="/company">Company Info</a></li>
					<li><a href="https://conres.mua.hrdepartment.com/hr/ats/JobSearch/index">Careers</a></li>
					<li><a href="/contact-continental-resources">Contact</a></li>
					<li>800-937-4688</li>
				</ul>
				<div class="clearfix"></div>

				<form class="search-form pull-right" action="/search">
					<fieldset>
						<input name="query" type="text" value="">
						<input type="submit" value="search">
					</fieldset>
				</form>
				<div class="clearfix"></div>
				<div class="cart-shop pull-left" id="cartTopWidget">
					<a href="/login"><strong>Login</strong></a> /<a class="showCartItems" href="/cart"><strong>My Cart</strong></a>
					<a href="#" class="showCartItems">
						<span class="cart-icon">
							<em>0+0</em>
						</span>
					</a>
					<div class="cartItems" style="display:none;">
						<div class="inner">
							<span class="title">Your cart is empty</span><br>
						</div>
					</div>
					<script type="text/javascript">
						jQuery(document).ready(function () {
							jQuery('.showCartItems').click(function () {
								jQuery(this).parent().find('.cartItems').stop().slideToggle(500, "easeInOutCubic", function () {
									// Animation complete.

								});
								return false;
							});
						});
					</script>
				</div>
				<a href="/payments" class="topPaymentText pull-left">Payments</a>
				<ul class="tinySocials pull-right">
					<li class="fb"><a href="https://www.facebook.com/ContinentalResources?fref=ts" target="_blank">Facebook</a></li>
					<li class="tw"><a href="https://twitter.com/ConRes" target="_blank">Twitter</a></li>
					<li class="gg"><a href="https://plus.google.com/102846477086801625600/posts" target="_blank">Google+</a></li>
					<li class="yt"><a href="http://www.youtube.com/user/continentalresources" target="_blank">YouTube</a></li>
					<li class="ln"><a href="http://us.linkedin.com/company/continental-resources" target="_blank">LinkedIn</a></li>
					<li class="pi"><a href="http://pinterest.com/conres/" target="_blank">Pinterest</a></li>
				</ul>
			</div>
		</div>
		<div class="megamenu_container">
			<ul class="megamenu">
				<li class="megamenu_button"><a href="#">Main Menu</a></li>
					<?php
						$i = 1;
						$sites = wp_get_sites();
						foreach ($sites as $site) :
							switch_to_blog( $site['blog_id'] );
							$site_name = get_bloginfo('name');
						?>
						<li id="section<?php echo $i; $i++;?>">
							<div class="container">
								<a href="#" class="megamenu_drop"><span><?php echo $site_name; ?></span></a>
								<div class="dropdown_12columns dropdown_container dropdown_first">
									<div class="inner">
										<?php wp_nav_menu(array('menu'=>'Main menu','items_wrap'=>'<ul>%3$s</ul>')); ?>
									</div>
								</div>
							</div>
						</li>
					<?php restore_current_blog(); endforeach; ?>
			</ul>
		</div>
		</nav>