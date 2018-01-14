<?php require $_SERVER['DOCUMENT_ROOT'] . '/pages/helpers/_head.php' ?>
	<body>
	<section class="material-half-bg">
		<div class="cover"></div>
	</section>
	<section class="login-content">
		<div class="logo">
			<h1>MPESPanel</h1>
		</div>
		<div class="login-box">
			<form class="login-form" action="/account/login" method="post">
				<h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>

				<?php if (isset($error)): ?>
					<div class="alert alert-danger"><?= $error ?></div>
				<?php endif; ?>

				<div class="form-group">
					<label class="control-label">USERNAME</label>
					<input class="form-control" type="text" placeholder="Steve" name="username" id="username" autofocus>
				</div>
				<div class="form-group">
					<label class="control-label">PASSWORD</label>
					<input class="form-control" type="password" placeholder="Password" name="password" id="password">
				</div>
				<div class="form-group">
					<div class="utility">
						<div class="animated-checkbox">
							<label>
								<input type="checkbox"><span class="label-text">Stay Signed in</span>
							</label>
						</div>
						<p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
					</div>
				</div>
				<div class="form-group btn-container">
					<button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
				</div>
			</form>
		</div>
	</section>

	<?php require $_SERVER['DOCUMENT_ROOT'] . '/pages/helpers/_scripts.php' ?>

	</body>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/pages/helpers/_hell.php' ?>