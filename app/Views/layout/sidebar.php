</head>

<body>
	<div id="app">
		<div id="sidebar" class="active">
			<div class="sidebar-wrapper active">
				<div class="sidebar-header">
					<div class="d-flex justify-content-between">
						<div class="logo">
							<!-- <a href="index.html"><img src="images/logo/logo.png" alt="Logo" srcset=""></a> -->
							<h3>Web Lomba</h3>
						</div>
						<div class="toggler">
							<a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
						</div>
					</div>
				</div>
				<div class="sidebar-menu">
					<ul class="menu">
						<li class="sidebar-item ">
							<a href="/admin" class='sidebar-link'>
								<i class="bi bi-grid-fill"></i>
								<span>Dashboard</span>
							</a>
						</li>
						<li class="sidebar-item ">
							<a href="/admin/lomba/info" class='sidebar-link'>
								<i class="bi bi-info-circle-fill"></i>
								<span>Informasi Lomba</span>
							</a>
						</li>
						<li class="sidebar-item has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-trophy-fill"></i>
								<span>Peserta Lomba</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="/admin/cpc">
										<i class="bi bi-chevron-right"></i>
										CPC
									</a>
								</li>
								<li class="submenu-item ">
									<a href="/admin/lct">
										<i class="bi bi-chevron-right"></i>
										LCT
									</a>
								</li>
							</ul>
						</li>
						<li class="sidebar-item ">
							<a href="/admin/akun" class='sidebar-link'>
								<i class="bi bi-person-fill"></i>
								<span>Akses Panitia</span>
							</a>
						</li>
						<li class="sidebar-item has-sub">
							<a href="#" class='sidebar-link'>
								<i class="bi bi-gear-fill"></i>
								<span>Settings</span>
							</a>
							<ul class="submenu ">
								<li class="submenu-item ">
									<a href="/settings">
										<i class="bi bi-chevron-right"></i>
										Kategori Lomba
									</a>
								</li>
								<li class="submenu-item ">
									<a href="/settings">
										<i class="bi bi-chevron-right"></i>
										Kategori Peserta
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
			</div>
		</div>
		<div id="main" class='layout-navbar'>