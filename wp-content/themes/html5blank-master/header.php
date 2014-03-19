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
	<body <?php body_class(); ?>>
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
			<!-- / topArea -->

		</div>
		<!-- / container -->

		<div class="megamenu_container">
		<ul class="megamenu">
		<li class="megamenu_button"><a href="#">Main Menu</a></li>
		<li id="section1">
			<div class="container">
				<a href="#" class="megamenu_drop"><span>Corporate</span></a>

				<div class="dropdown_12columns dropdown_container dropdown_first"><!-- Begin Item Container -->
					<div class="inner">
						<ul>
							<li>
								<a href="/corporate-home">Home</a>

							</li>
							<li>
								<a href="/news-and-events">News and Events</a>

							</li>
							<li class="sub-dropdown">
								<a href="/company-section">Company</a>

								<ul>
									<li>
										<a href="/company">Company Overview</a>

									</li>
									<li>
										<a href="/awards-and-recognition">Awards &amp; Recognition</a>

									</li>
									<li>
										<a href="/conres-subsidiaries">Corporate Affiliates</a>

									</li>
									<li>
										<a href="/conres-credit-financing-payments">Credit, Financing and Payments</a>

									</li>
									<li>
										<a href="/conres-executive-team">Executive Team</a>

									</li>
									<li>
										<a href="/conres-history">History</a>

									</li>
									<li>
										<a href="/conres-local-contacts">Local Contacts</a>

									</li>
									<li>
										<a href="/conres-media-relations">Media Relations</a>

									</li>
									<li>
										<a href="/conres-privacy-pollicy">Privacy Policy</a>

									</li>
									<li>
										<a href="/conres-quality-policy-iso">Quality Policy - ISO</a>

									</li>
									<li>
										<a href="/conres-sustainability">Sustainability Policy</a>

									</li>
									<li>
										<a href="/conres-terms-and-conditions">Terms and Conditions</a>

									</li>
									<li>
										<a href="/conres-woman-owned-enterprise-small-business">Woman-Owned Enterprise|Small Business</a>

									</li>
									<li>
										<a href="/careers-redirect">Careers</a>

									</li>

								</ul>
							</li>
							<li>
								<a href="/resource-library-corporate">Resource Library</a>

							</li>
							<li>
								<a href="/contact-continental-resources">Contact</a>

							</li>

						</ul>
					</div>
					<div class="menuPromoBox">
						<div class="inner">
							<img src="/themes/conres/resources/images/content/menupromo1.jpg" alt=" ">

							<p>
								Your source for new and refurbished test equipment sales and rentals including oscilloscopes, signal generators, network & spectrum analyzers, wireless communications testers, field
								testing & general purpose test equipment.
							</p>
							<hr>
							<a href="#" class="moreBtn">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li id="section2">
		<div class="container">
		<a href="#" class="megamenu_drop"><span>IT Products & Solutions</span></a>

		<div class="dropdown_12columns dropdown_container"><!-- Begin Item Container -->
		<div class="inner">
		<ul>
		<li>
			<a href="/it-solutions-home">Home</a>

		</li>
		<li class="sub-dropdown">
			<a href="/solutions">Solutions</a>

			<ul>
				<li>
					<a href="/it-products-solutions-overview">Solutions Overview</a>

				</li>
				<li class="sub-dropdown">
					<a href="/cloud-computing-solutions">Cloud Computing</a>

					<ul>
						<li>
							<a href="/cloud-computing-pre-cloud-prep">Pre-Cloud Prep</a>

						</li>
						<li>
							<a href="/cloud-computing-economics">Economics</a>

						</li>
						<li>
							<a href="/cloud-computing-common-concerns">Common Concerns</a>

						</li>
						<li>
							<a href="/cloud-computing-deployment-models">Cloud Deployment Models</a>

						</li>
						<li>
							<a href="/cloud-computing-working-with-private-cloud">Working with Private Cloud</a>

						</li>
						<li>
							<a href="/cloud-statistics">Cloud Statistics</a>

						</li>

					</ul>
				</li>
				<li class="sub-dropdown">
					<a href="/data-center">Data Center</a>

					<ul>
						<li>
							<a href="/data-center-moves-migrations">Moves/Migrations</a>

						</li>
						<li>
							<a href="/data-center-staging-integration-configuration">Staging, Integration and Configuration Services</a>

						</li>

					</ul>
				</li>
				<li class="sub-dropdown">
					<a href="/data-storage-solutions">Data Storage</a>

					<ul>
						<li>
							<a href="/disaster-recovery-business-continuity-solution">Disaster Recovery/Business Continuity Solution</a>

						</li>
						<li>
							<a href="/highly-available-storage-solutions">Highly Available Storage Solutions</a>

						</li>
						<li>
							<a href="/content-and-archiving-indexing">Content and Archiving Indexing</a>

						</li>
						<li>
							<a href="/backup-restore">Backup/Restore</a>

						</li>
						<li>
							<a href="/storage-optimization">Storage Optimization</a>

						</li>
						<li>
							<a href="/storage-virtualization">Storage Virtualization</a>

						</li>
						<li>
							<a href="/data-deduplication-security-encryption">Data De-Duplication, Security, Encryption</a>

						</li>
						<li>
							<a href="/storage-equipment-moves">Storage Equipment Moves</a>

						</li>

					</ul>
				</li>
				<li>
					<a href="/desktop-mobile-server-management-solutions">Desktop Management</a>

				</li>
				<li>
					<a href="/messaging">Messaging</a>

				</li>
				<li>
					<a href="/microsoft-consulting-and-solutions">Microsoft</a>

				</li>
				<li class="sub-dropdown">
					<a href="/mobile-and-byod-security-solutions">Mobile and BYOD Security</a>

					<ul>
						<li>
							<a href="/major-concerns-in-mobile-endpoint-security">Major Concerns</a>

						</li>
						<li>
							<a href="/mobile-security-identifying-the-threat">Identifying the Threat</a>

						</li>
						<li>
							<a href="/considerations-for-mobile-security">Considerations</a>

						</li>
						<li>
							<a href="/addressing-mobile-security-now">Addressing Mobile Security Now</a>

						</li>
						<li>
							<a href="/mobile-security-statistically-speaking">Statistically Speaking...</a>

						</li>

					</ul>
				</li>
				<li>
					<a href="/networking-solutions">Networking</a>

				</li>
				<li>
					<a href="/sap-hana">SAP HANA</a>

				</li>
				<li>
					<a href="/security-solutions">Security</a>

				</li>
				<li>
					<a href="/unified-communications-solutions">Unified Communications</a>

				</li>
				<li>
					<a href="/virtualization-solutions">Virtualization</a>

				</li>
				<li>
					<a href="/wireless-solutions">Wireless</a>

				</li>

			</ul>
		</li>
		<li class="sub-dropdown">
			<a href="/it-solutions-services">Services</a>

			<ul>
				<li>
					<a href="/it-services">Services Overview</a>

				</li>
				<li>
					<a href="/it-integration-and-logistics">Integration and Logistics</a>

				</li>
				<li class="sub-dropdown">
					<a href="/managed-services-overview">Managed Services</a>

					<ul>
						<li>
							<a href="/first-call-services">1st Call Services</a>

						</li>
						<li>
							<a href="/application-management">Application Management</a>

						</li>
						<li>
							<a href="/help-desk-services">Help Desk Services</a>

						</li>
						<li>
							<a href="/iaas-saas-support">IaaS &amp; SaaS Support</a>

						</li>
						<li>
							<a href="/intrusion-detection-and-prevention">Intrusion Detection &amp; Prevention</a>

						</li>
						<li>
							<a href="/service-maintenance-contract-management">Maintenance Contract Management</a>

						</li>
						<li>
							<a href="/network-and-network-appliance-management">Network &amp; Network Appliance Management</a>

						</li>
						<li>
							<a href="/offsite-tape-vaulting">Offsite Tape Vaulting</a>

						</li>
						<li>
							<a href="/server-management">Server Management</a>

						</li>
						<li>
							<a href="/telco-circuit-management">Telco/Circuit Management</a>

						</li>
						<li>
							<a href="/vendor-escalation-and-management">Vendor Escalation/Management</a>

						</li>

					</ul>
				</li>
				<li class="sub-dropdown">
					<a href="/professional-services">Professional Services</a>

					<ul>
						<li>
							<a href="/it-consulting-services">Consulting Services</a>

						</li>
						<li>
							<a href="/data-center-moves">Data Center Moves/Migrations</a>

						</li>
						<li>
							<a href="/it-staffing">IT Staffing</a>

						</li>
						<li>
							<a href="/project-management-for-infrastructure-rollouts">Project Management</a>

						</li>

					</ul>
				</li>
				<li>
					<a href="/it-asset-recycling-disposal-upcycle">IT Asset Recycle-Disposal-Upcycle</a>

				</li>
				<li>
					<a href="/it-virtual-contract-manufacturer">Virtual/Contract Manufacturer</a>

				</li>

			</ul>
		</li>
		<li class="sub-dropdown">
			<a href="/it-solutions-partners">Partners</a>

			<ul>
				<li>
					<a href="/brocade-elite-fabric-partner">Brocade</a>

				</li>
				<li>
					<a href="/cisco-gold-certified-national-partner">Cisco</a>

				</li>
				<li>
					<a href="/emc-affiliate-elite-partner">EMC</a>

				</li>
				<li>
					<a href="/f5-networks-unity-gold-partner">F5</a>

				</li>
				<li>
					<a href="/hitachi-data-systems-platinum-partner">Hitachi</a>

				</li>
				<li>
					<a href="/hp-specialist-partner">HP</a>

				</li>
				<li>
					<a href="/ibm-premier-business-partner">IBM</a>

				</li>
				<li class="sub-dropdown">
					<a href="/netapp-platinum-partner">NetApp</a>

					<ul>
						<li>
							<a href="/fas2200">FAS2200 Series</a>

						</li>
						<li>
							<a href="/fas3100">FAS3100 Series</a>

						</li>
						<li>
							<a href="/fas3200">FAS3200 Series</a>

						</li>
						<li>
							<a href="/fas6000">FAS6000 Series</a>

						</li>
						<li>
							<a href="/fas6200">FAS6200 Series</a>

						</li>
						<li>
							<a href="/flexpod">FlexPod</a>

						</li>
						<li>
							<a href="/microsoft-exchange-server">Microsoft Exchange Server</a>

						</li>
						<li>
							<a href="/microsoftsharepointserver">Microsoft SharePoint Server</a>

						</li>
						<li>
							<a href="/microsoftsqlserver">Microsoft SQL Server</a>

						</li>
						<li>
							<a href="/netapppluginforsymantec">NetApp Plug-in for Symantec</a>

						</li>
						<li>
							<a href="/oncommand">OnCommand</a>

						</li>
						<li>
							<a href="/oncommandbalance">OnCommand Balance</a>

						</li>
						<li>
							<a href="/oncommandinsight">OnCommand Insight</a>

						</li>
						<li>
							<a href="/oncommandinsight-assure">OnCommand Insight Assure</a>

						</li>
						<li>
							<a href="/oncommandinsight-perform">OnCommand Insight Perform</a>

						</li>
						<li>
							<a href="/oncommandinsight-plan">OnCommand Insight Plan</a>

						</li>
						<li>
							<a href="/opensystems-snapvault">Open Systems SnapVault</a>

						</li>
						<li>
							<a href="/snapmanagerforsap">SAP</a>

						</li>
						<li>
							<a href="/vmwarehorizonapplicationmanager">VMware Horizon Application Manager</a>

						</li>
						<li>
							<a href="/v-series">V Series</a>

						</li>

					</ul>
				</li>
				<li class="sub-dropdown">
					<a href="/oracle-systems-storage-database-software">Oracle</a>

					<ul>
						<li>
							<a href="/sl150-tape-library">SL150 Tape Library</a>

						</li>
						<li>
							<a href="/sparc-t5">SPARC T5</a>

						</li>

					</ul>
				</li>
				<li>
					<a href="/red-hat">Red Hat</a>

				</li>
				<li>
					<a href="/symantec-platinum-partner">Symantec</a>

				</li>
				<li>
					<a href="/vmware-premier-level-solution-provider">VMware</a>

				</li>
				<li>
					<a href="/trending-partners">Trending Partners</a>

				</li>
				<li>
					<a href="/all-partners">All Partners</a>

				</li>

			</ul>
		</li>
		<li>
			<a href="/industries">Industries We Serve</a>

		</li>
		<li class="sub-dropdown">
			<a href="/news-events-section">News &amp; Events</a>

			<ul>
				<li>
					<a href="/news-events">News</a>

				</li>
				<li>
					<a href="/it-solutions-events">Events</a>

				</li>

			</ul>
		</li>
		<li>
			<a href="/it-solutions-blog">IT Solutions Blog</a>

		</li>
		<li class="sub-dropdown">
			<a href="/about-it-division">About IT Products &amp; Solutions</a>

			<ul>
				<li>
					<a href="/awards">Awards</a>

				</li>
				<li>
					<a href="/integration-center">Integration Center</a>

				</li>
				<li>
					<a href="/it-products-locations">Local Contacts and Locations</a>

				</li>

			</ul>
		</li>
		<li>
			<a href="/about-it-division2">About IT Division</a>

		</li>
		<li>
			<a href="/contact-it-team">Contact the IT Team</a>

		</li>
		<li>
			<a href="/it-solutions-resource-library">Resource Library</a>

		</li>

		</ul>
		</div>
		<div class="menuPromoBox">
			<div class="inner">
				<img src="/themes/conres/resources/images/content/menupromo2.jpg" alt=" ">

				<p>
					Build a better IT infrastructure and data center, maximize your choice of IT products and services, and strengthen your ROI – with IT solutions from ConRes, your hybrid VAR™.
				</p>
				<hr>
				<a href="#" class="moreBtn">Learn More</a>
			</div>
		</div>
		</div>
		</div>
		</li>
		<li id="section3">
			<div class="container">
				<a href="#" class="megamenu_drop"><span>OEM/Embedded Computing</span></a>

				<div class="dropdown_12columns dropdown_container"><!-- Begin Item Container -->
					<div class="inner">
						<ul>
							<li>
								<a href="/oem-home">Home</a>

							</li>
							<li class="sub-dropdown">
								<a href="/oem-embedded-computing-solutions-section">Solutions</a>

								<ul>
									<li>
										<a href="/oem-embedded-computing-solutions">Solutions Overview</a>

									</li>
									<li>
										<a href="/oem-custom-servers">Custom Servers</a>

									</li>
									<li>
										<a href="/oem-devices-and-instrumentatioin">Devices &amp; Instrumentation</a>

									</li>
									<li>
										<a href="/oem-software-appliances">Software Appliances</a>

									</li>
									<li>
										<a href="/oem-storage-appliances">Storage Appliances</a>

									</li>
									<li>
										<a href="/oem-thin-client-vdi">Thin Client &amp; VDI</a>

									</li>

								</ul>
							</li>
							<li class="sub-dropdown">
								<a href="/services-section">Services</a>

								<ul>
									<li>
										<a href="/oem-embedded-computing-services">Services Overview</a>

									</li>
									<li>
										<a href="/oem-branding-and-packaging">Branding &amp; Packaging</a>

									</li>
									<li>
										<a href="/oem-contract-manufacturing">Contract Manufacturing</a>

									</li>
									<li>
										<a href="/oem-integration-services">Integration Services</a>

									</li>
									<li>
										<a href="/oem-inventory-management">Inventory Management</a>

									</li>
									<li>
										<a href="/oem-logistics-services">Logistics</a>

									</li>
									<li>
										<a href="/oem-computer-manufacturing">OEM Computer Manufacturing</a>

									</li>
									<li>
										<a href="/oem-system-planning">System Planning</a>

									</li>
									<li>
										<a href="/oem-vendor-management">Vendor Management</a>

									</li>
									<li>
										<a href="/oem-warranty-services">Warranty Service</a>

									</li>

								</ul>
							</li>
							<li>
								<a href="/oem-industries-served">Industries Served</a>

							</li>
							<li class="sub-dropdown">
								<a href="/oem-partners">Partners</a>

								<ul>
									<li>
										<a href="/intel-premier-provider">Intel Premier Provider</a>

									</li>
									<li>
										<a href="/all-oem-partners">Partners</a>

									</li>

								</ul>
							</li>
							<li>
								<a href="/oem-about-the-oem-embedded-computer-group">About OEM</a>

							</li>
							<li>
								<a href="/oem-contact-us">Contact OEM Group</a>

							</li>
							<li>
								<a href="/resource-library-oem">Resource Library</a>

							</li>

						</ul>
					</div>
					<div class="menuPromoBox">
						<div class="inner">
							<img src="/themes/conres/resources/images/content/menupromo3.jpg" alt=" ">

							<p>
								The OEM/Embedded Division acts as a virtual factory building computer-controlled devices & custom computer solutions.
							</p>
							<hr>
							<a href="#" class="moreBtn">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li id="section4">
			<div class="container">
				<a href="#" class="megamenu_drop"><span>Test Equipment</span></a>

				<div class="dropdown_12columns dropdown_container"><!-- Begin Item Container -->
					<div class="inner">
						<ul>
							<li>
								<a href="/test-equipment-home">Home</a>

							</li>
							<li>
								<a href="/product-categories">Shop: by Category</a>

							</li>
							<li>
								<a href="/test-equipment-manufacturers">Shop: by Manufacturer</a>

							</li>
							<li>
								<a href="/metrology-lab">Metrology Lab</a>

							</li>
							<li>
								<a href="/test-equipment-rental-leasing">Rental &amp; Leasing</a>

							</li>
							<li>
								<a href="/about-test-equipment-division">About Test and Measurement</a>

							</li>
							<li>
								<a href="/te-how-to-order">How to Order</a>

							</li>
							<li>
								<a href="/about-test-equipment-division-2">About</a>

							</li>
							<li>
								<a href="/test-equipment-local-contacts">Contact</a>

							</li>
							<li>
								<a href="/the-test-equipment-blog">Blog</a>

							</li>
							<li>
								<a href="/resource-library-test-equipment">Resource Library</a>

							</li>

						</ul>
					</div>
					<div class="menuPromoBox">
						<div class="inner">
							<img src="/themes/conres/resources/images/content/menupromo4.jpg" alt=" ">

							<p>
								Your source for new and refurbished test equipment sales and rentals including oscilloscopes, signal generators, network & spectrum analyzers, wireless communications testers, field
								testing & general purpose test equipment.
							</p>
							<hr>
							<a href="#" class="moreBtn">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</li>
		</ul>
		</div>
		</nav>
		<div class="homePageTemplate">

			</div>