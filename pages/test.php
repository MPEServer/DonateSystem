<?php require 'helpers/_head.php' ?>

<body id="load" class="app sidebar-mini">
<div load>

	<!-- Navbar-->
	<header el="body" class="app-header"><a go class="app-header__logo" href="/">Vali</a>
		<!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
		<!-- Navbar Right Menu-->
		<ul class="app-nav">
			<li class="app-search">
				<input class="app-search__input" type="search" placeholder="Search">
				<button class="app-search__button"><i class="fa fa-search"></i></button>
			</li>
			<!--Notification Menu-->
			<li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i
							class="fa fa-bell-o fa-lg"></i></a>
				<ul class="app-notification dropdown-menu dropdown-menu-right">
					<li class="app-notification__title">You have 4 new notifications.</li>
					<div class="app-notification__content">
						<li><a class="app-notification__item" href="javascript:;"><span
										class="app-notification__icon"><span class="fa-stack fa-lg"><i
												class="fa fa-circle fa-stack-2x text-primary"></i><i
												class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
								<div>
									<p class="app-notification__message">Lisa sent you a mail</p>
									<p class="app-notification__meta">2 min ago</p>
								</div>
							</a></li>
						<li><a class="app-notification__item" href="javascript:;"><span
										class="app-notification__icon"><span class="fa-stack fa-lg"><i
												class="fa fa-circle fa-stack-2x text-danger"></i><i
												class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
								<div>
									<p class="app-notification__message">Mail server not working</p>
									<p class="app-notification__meta">5 min ago</p>
								</div>
							</a></li>
						<li><a class="app-notification__item" href="javascript:;"><span
										class="app-notification__icon"><span class="fa-stack fa-lg"><i
												class="fa fa-circle fa-stack-2x text-success"></i><i
												class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
								<div>
									<p class="app-notification__message">Transaction complete</p>
									<p class="app-notification__meta">2 days ago</p>
								</div>
							</a></li>
						<div class="app-notification__content">
							<li><a class="app-notification__item" href="javascript:;"><span
											class="app-notification__icon"><span class="fa-stack fa-lg"><i
													class="fa fa-circle fa-stack-2x text-primary"></i><i
													class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
									<div>
										<p class="app-notification__message">Lisa sent you a mail</p>
										<p class="app-notification__meta">2 min ago</p>
									</div>
								</a></li>
							<li><a class="app-notification__item" href="javascript:;"><span
											class="app-notification__icon"><span class="fa-stack fa-lg"><i
													class="fa fa-circle fa-stack-2x text-danger"></i><i
													class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
									<div>
										<p class="app-notification__message">Mail server not working</p>
										<p class="app-notification__meta">5 min ago</p>
									</div>
								</a></li>
							<li><a class="app-notification__item" href="javascript:;"><span
											class="app-notification__icon"><span class="fa-stack fa-lg"><i
													class="fa fa-circle fa-stack-2x text-success"></i><i
													class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
									<div>
										<p class="app-notification__message">Transaction complete</p>
										<p class="app-notification__meta">2 days ago</p>
									</div>
								</a></li>
						</div>
					</div>
					<li class="app-notification__footer"><a href="#">See all notifications.</a></li>
				</ul>
			</li>
			<!-- User Menu-->
			<li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i
							class="fa fa-user fa-lg"></i></a>
				<ul class="dropdown-menu settings-menu dropdown-menu-right">
					<li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a>
					</li>
					<li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a>
					</li>
					<li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
					</li>
				</ul>
			</li>
		</ul>
	</header>
	<!-- Sidebar menu-->
	<aside class="app-sidebar">
		<div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
											src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg"
											alt="User Image">
			<div>
				<p class="app-sidebar__user-name">John Doe</p>
				<p class="app-sidebar__user-designation">Frontend Developer</p>
			</div>
		</div>
		<ul class="app-menu">
			<li><a class="app-menu__item active" href="index.html"><i
							class="app-menu__icon fa fa-dashboard"></i><span
							class="app-menu__label">Dashboard</span></a></li>
			<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
							class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i
							class="treeview-indicator fa fa-angle-right"></i></a>
				<ul class="treeview-menu">
					<li><a class="treeview-item" href="bootstrap-components.html"><i
									class="icon fa fa-circle-o"></i>
							Bootstrap Elements</a></li>
					<li><a class="treeview-item" href="http://fontawesome.io/icons/" target="_blank"><i
									class="icon fa fa-circle-o"></i> Font Icons</a></li>
					<li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a>
					</li>
					<li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a>
					</li>
				</ul>
			</li>
			<li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span
							class="app-menu__label">Charts</span></a></li>
			<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
							class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Forms</span><i
							class="treeview-indicator fa fa-angle-right"></i></a>
				<ul class="treeview-menu">
					<li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i>
							Form
							Components</a></li>
					<li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i> Custom
							Components</a></li>
					<li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form
							Samples</a></li>
					<li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i>
							Form
							Notifications</a></li>
				</ul>
			</li>
			<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
							class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i
							class="treeview-indicator fa fa-angle-right"></i></a>
				<ul class="treeview-menu">
					<li><a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic
							Tables</a></li>
					<li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i>
							Data
							Tables</a></li>
				</ul>
			</li>
			<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
							class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i
							class="treeview-indicator fa fa-angle-right"></i></a>
				<ul class="treeview-menu">
					<li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank
							Page</a></li>
					<li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login
							Page</a></li>
					<li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i>
							Lockscreen Page</a></li>
					<li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a>
					</li>
					<li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i>
							Invoice
							Page</a></li>
					<li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i>
							Calendar
							Page</a></li>
					<li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i>
							Mailbox</a></li>
					<li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error
							Page</a></li>
				</ul>
			</li>
		</ul>
	</aside>
</div>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/pages/helpers/_scripts.php' ?>

</body>

<?php require 'helpers/_hell.php' ?>