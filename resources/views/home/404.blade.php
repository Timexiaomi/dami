<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>Metronic | Extra - 404 Page Option 3</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="{{ asset('admins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>


	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link href="{{ asset('public/error.css') }}" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL STYLES -->


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-404-3">

	<div class="page-inner">

		<img src="{{ asset('Homes\home\Images/earth.jpg') }}" alt="">
	</div>

	<div class="container error-404">

		<h1>404</h1>

		<h2>Houston, we have a problem.</h2>
		<p>
			Actually, the page you are looking for does not exist.

		</p>

		<p>
			<br>
		</p>
	</div>

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="{{ asset('public/jquery-1.8.3.min.js') }}" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="{{ asset('public/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>

	<script src="{{ asset('admins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="media/js/excanvas.js"></script>

	<script src="media/js/respond.js"></script>

	<![endif]-->



	<!-- IMPORTANT! jquery.slimscroll.min.js depends on jquery-ui-1.10.1.custom.min.js -->



	<!-- END CORE PLUGINS -->

	<script src="{{ asset('public/app.js') }}"></script>

	<script>

		jQuery(document).ready(function() {

		   App.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>
