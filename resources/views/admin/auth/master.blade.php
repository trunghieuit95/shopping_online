<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
</head>
<body>
	<div class="page-content container-fluid">
		<!-- div page-header -->
		<div class="page-header">
			<div class="lang">
			</div>

			<ul class="menu pull-right">
				<li><a title="Login">Trang chủ</a></li>
				<li class="hidden"><a href="" title="Create an acount">Create an acount</a></li>
			</ul>
		</div><!-- end div page-header -->
		
		@yield('page-content')

		<!-- div page-footer -->
		<div class="page-footer-wp">
			<div class="page-footer">
				<p class="left">Design by <a href="" title="Alice Book">LH2 Team</a></p>

				<p class="pull-right">© 2016 LH2 Team</p>
			</div>
		</div><!-- end div page-footer -->

	</div>
</body>
</html>