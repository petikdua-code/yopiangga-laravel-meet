<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title')</title>
    
	<link rel="stylesheet" href="/assets/vendors/core/core.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="/assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="/assets/css/demo_1/style.css">
  {{--  <link rel="shortcut icon" href="/assets/images/favicon.png" />  --}}
	{{-- <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script> --}}
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Web<span>Dev</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item @if ($page == 'dashboard') active @else @endif">
            <a href="{{'/dashboard'}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item nav-category">Article</li>
          <li class="nav-item @if ($page == 'all_article') active @else @endif">
            <a href="{{'/all-article'}}" class="nav-link">
              <i class="link-icon" data-feather="file-text"></i>
              <span class="link-title">All Article</span>
            </a>
		  </li>
		  <li class="nav-item @if ($page == 'my_article') active @else @endif">
            <a href="{{'/my-article'}}" class="nav-link">
              <i class="link-icon" data-feather="file"></i>
              <span class="link-title">My Article</span>
            </a>
          </li>
          <li class="nav-item @if ($page == 'create_article') active @else @endif">
            <a href="{{'/create-article'}}" class="nav-link">
              <i class="link-icon" data-feather="file-plus"></i>
              <span class="link-title">Create Article</span>
            </a>
          </li>

          <li class="nav-item nav-category">User</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="link-icon" data-feather="edit"></i>
              <span class="link-title">Edit Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="link-icon" data-feather="log-out"></i>
              <span class="link-title">Log Out</span>
            </a>
          </li>

        </ul>
      </div>
    </nav>
    
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i data-feather="search"></i>
								</div>
							</div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					<ul class="navbar-nav">
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="../assets/images/faces/face1.jpg" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="../assets/images/faces/face1.jpg" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0">Amiah Burton</p>
										<p class="email text-muted mb-3">amiahburton@gmail.com</p>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="pages/general/profile.html" class="nav-link">
												<i data-feather="user"></i>
												<span>Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="edit"></i>
												<span>Edit Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="repeat"></i>
												<span>Switch User</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="log-out"></i>
												<span>Log Out</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->

			<div class="page-content">
                @yield('page-content')
			</div>

		
		</div>
	</div>
	<script src="/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="/assets/ckeditor/adapters/jquery.js"></script>
	<script type="text/javascript">
		$('textarea.texteditor').ckeditor();
	</script>
    
	<script src="/assets/js/uploadimage/plugin.js"></script>
    <script src="/assets/vendors/core/core.js"></script>
	<script src="/assets/vendors/chartjs/Chart.min.js"></script>
	<script src="/assets/vendors/jquery.flot/jquery.flot.js"></script>
	<script src="/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
	<script src="/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<script src="/assets/vendors/apexcharts/apexcharts.min.js"></script>
	<script src="/assets/vendors/progressbar.js/progressbar.min.js"></script>
	<script src="/assets/vendors/feather-icons/feather.min.js"></script>
	<script src="/assets/js/template.js"></script>
	<script src="/assets/js/dashboard.js"></script>
	<script src="/assets/js/datepicker.js"></script>

</body>

</html>    