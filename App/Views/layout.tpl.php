<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">		
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
        <meta name="msapplication-square70x70logo" content="/smalltile.png" />
        <meta name="msapplication-square150x150logo" content="/mediumtile.png" />
        <meta name="msapplication-wide310x150logo" content="/widetile.png" />
        <meta name="msapplication-square310x310logo" content="/largetile.png" />

        <!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link rel="stylesheet" href="<?= ROOT_DOMAIN ?>assets/plugins/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?= ROOT_DOMAIN ?>assets/css/font-awesome.css" />
        <link rel="stylesheet" href="<?= ROOT_DOMAIN ?>assets/plugins/owl-carousel/owl.carousel.css" />
		<link rel="stylesheet" href="<?= ROOT_DOMAIN ?>assets/plugins/owl-carousel/owl.theme.css" />
		<link rel="stylesheet" href="<?= ROOT_DOMAIN ?>assets/plugins/owl-carousel/owl.transitions.css" />
		<link rel="stylesheet" href="<?= ROOT_DOMAIN ?>assets/css/animate.css" />
        
        <!-- REVOLUTION SLIDER -->
		<link href="<?= ROOT_DOMAIN ?>assets/plugins/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link rel="stylesheet" href="<?= ROOT_DOMAIN ?>assets/css/essentials.css" />
		<link rel="stylesheet" href="<?= ROOT_DOMAIN ?>assets/css/layout.css" />
		<link rel="stylesheet" href="<?= ROOT_DOMAIN ?>assets/css/layout-responsive.css" />
		<link rel="stylesheet" href="<?= ROOT_DOMAIN ?>assets/css/color_scheme/darkblue.css" />

		<?= $tpl_header; ?>

        <script src="<?= ROOT_DOMAIN ?>assets/plugins/modernizr.min.js"></script>
	</head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<div class="wrapper">
			<?= $tpl_content; ?>
		</div>

		<!-- FOOTER -->

		<footer>
			<!-- copyright , scrollTo Top -->
			<div class="footer-bar">
				<div class="container">
					<span class="copyright">Copyright &copy; Quintero Hermanos, Ltda. All Rights Reserved.</span>
					<a class="toTop" href="#topNav">'._VOLVER_ARRIBA.' <i class="fa fa-arrow-circle-up"></i></a>
				</div>
			</div>
			<!-- copyright , scrollTo Top -->
			<!-- footer content -->
			<div class="footer-content">
				<div class="container">
					<div class="row">
						<span itemscope itemtype="http://schema.org/LocalBusiness">
						<!-- FOOTER CONTACT INFO -->
						<div class="column col-md-4">
							<h3><?= Lang::get('sicex.shared.contact') ?></h3>
							<p class="contact-desc">
								'._ABOUT_SHORT.'
							</p>
							<address class="font-opensans">
								<ul>
									<li class="footer-sprite address">
										<span itemprop="name">Quintero Hermanos Ltda.</span><br />
										<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
											<span itemprop="streetAddress">Carrera 29 No 39A - 22</span><br />
											<span itemprop="addressRegion">Bogota D.C.,</span> 
											<span itemprop="addressCountry">Colombia</span><br />
										</span>
									</li>
									<li class="footer-sprite phone">
										'._DATOSOFICINA.'
									</li>
									<li class="footer-sprite email">
										<a href="mailto:sales@sicex.com"><span itemprop="email">sales@sicex.com</span></a>
										<a class="pull-right" href="https://plus.google.com/117637601576460264683" rel="publisher">Google+</a>
									</li>
								</ul>
							</address>
						</div>
						<!-- /FOOTER CONTACT INFO -->

						<!-- FOOTER LOGO -->
						<div class="column logo col-md-4 text-center">
							<div class="logo-content">
								<img itemprop="image" class="animate_fade_in" src="<?= ROOT_DOMAIN ?>assets/images/logo_footer.png" width="200" alt="" />
								<h4>WWW.SICEX.COM</h4>
							</div>
						</div>
						<!-- /FOOTER LOGO -->
						</span><!-- /LocalBusiness -->
						<!-- FOOTER NOSOTROS -->
						<div class="column col-md-4 text-right">
							<h3>'._QCONTACT.'</h3>
							<form method="post" id="qcontact_form" role="form">
								<div class="row">
									<div class="col-md-10 col-md-offset-2">
										<div class="form-group">
											<input required type="text" name="quick_name" class="form-control" placeholder="'._NOMBRES.'" />
											<input type="hidden" name="ac" value="quick">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-10 col-md-offset-2">
										<div class="form-group">
											<input required type="text" name="quick_company" class="form-control" placeholder="'._MNUCOMPANIA.'" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-10 col-md-offset-2">
										<div class="form-group">
											<input required type="email" name="quick_email" class="form-control" placeholder="'._EMAIL.'" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-10 col-md-offset-2">
										<div class="form-group">
											<textarea required class="form-control" name="quick_comment" rows="3"  placeholder="'._MENSAJE.'" ></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<button id="qcontact_submit" class="btn btn-primary uppercase"><i class="fa fa-check"></i> '._SEND_MESSAGE.'</button>
									</div>
								</div>
							</form>

						</div>
						<!-- /FOOTER NOSOTROS -->

					</div>

				</div>
			</div>
			<!-- footer content -->

		</footer>
		<!-- /FOOTER -->

		<!-- MODALS -->
		<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header"><!-- modal header -->
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="errorModalLabel"><i class="fa fa-warning"></i>  Error!</h4>
					</div><!-- /modal header -->

					<!-- modal body -->
					<div class="modal-body">
						<div id="modal-error-msg" class="alert alert-danger margin-bottom0">
						</div>
					</div>
					<!-- /modal body -->

					<div class="modal-footer margin-top0"><!-- modal footer -->
						<button class="btn btn-default" data-dismiss="modal">'._CLOSE.'</button>
					</div><!-- /modal footer -->

				</div>
			</div>
		</div>
		<div class="modal fade" id="sucessModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header"><!-- modal header -->
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="successModalLabel"><i class="fa fa-check"></i>  Success!</h4>
					</div><!-- /modal header -->

					<!-- modal body -->
					<div class="modal-body">
						<div id="modal-success-msg" class="alert alert-success margin-bottom0">
						</div>
					</div>
					<!-- /modal body -->

					<div class="modal-footer margin-top0"><!-- modal footer -->
						<button class="btn btn-default" data-dismiss="modal">'._CLOSE.'</button>
					</div><!-- /modal footer -->

				</div>
			</div>
		</div>
		<!-- /MODALS -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= ROOT_DOMAIN ?>assets/plugins/jquery-2.0.3.min.js"><\/script>')</script>
		<script type="text/javascript" src="<?= ROOT_DOMAIN ?>assets/plugins/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?= ROOT_DOMAIN ?>assets/plugins/jquery.appear.js"></script>
		<script type="text/javascript" src="<?= ROOT_DOMAIN ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?= ROOT_DOMAIN ?>assets/plugins/owl-carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?= ROOT_DOMAIN ?>assets/js/scripts.js"></script>
		
		<?= $tpl_scripts; ?>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-15106245-1', 'sicex.com');
		  ga('send', 'pageview');

        </script>
	</body>
</html>
