<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bimbel Cahaya</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
		<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.1/dist/css/uikit.min.css" />
	</head>

	<body>
	<nav class="navbar" role="navigation" aria-label="main navigation">
		<div class="navbar-brand">
			<a class="navbar-item" href="https://bulma.io">
			<img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
			</a>

			<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			</a>
		</div>

		<div id="navbarBasicExample" class="navbar-menu">
			<div class="navbar-start">
			<a class="navbar-item" href="/">
				Home
			</a>

			<a class="navbar-item">
				Documentation
			</a>

			{{-- <div class="navbar-item has-dropdown is-hoverable">
				<a class="navbar-link">
				More
				</a>

				<div class="navbar-dropdown">
				<a class="navbar-item">
					About
				</a>
				<a class="navbar-item">
					Jobs
				</a>
				<a class="navbar-item">
					Contact
				</a>
				<hr class="navbar-divider">
				<a class="navbar-item">
					Report an issue
				</a>
				</div>
			</div> --}}
			</div>

			{{-- <div class="navbar-end">
			<div class="navbar-item">
				<div class="buttons">
				<a class="button is-primary">
					<strong>Sign up</strong>
				</a>
				<a class="button is-light">
					Log in
				</a>
				</div>
			</div>
			</div> --}}
		</div>
		</nav>
		
		@yield('content')

		<!-- UIkit JS -->
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.1/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.1/dist/js/uikit-icons.min.js"></script>
	</body>
</html>