<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/framework.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/master.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
	<title>AdminSite</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"> صقر</a>
		<ul class="side-menu">
			<li><a href="{{('admin')}}" class="active"><i class='bx bxs-dashboard icon' ></i> الرئيسية</a></li>
			<li class="divider" data-text="main">Main</li>
			<li>
				<a href="#"><i class='bx bxs-inbox icon' ></i>المعرض <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="{{route('images')}}">الصور</a></li>
					<li><a href="{{route('videos')}}">الفيديوهات</a></li>
				</ul>
			</li>
			<li><a href="{{route('about')}}"><i class='bx bxs-chart icon' ></i> عن الاكاديمية</a></li>
			<li><a href="{{route('teamWork')}}"><i class='bx bxs-chart icon' ></i>فريق العمل</a></li>
			<li><a href="{{route('program')}}"><i class='bx bxs-chart icon' ></i> البرامج</a></li>
			<li><a href="{{route('admissionRequirements')}}"><i class='bx bxs-chart icon' ></i> شروط القبول</a></li>
			<li><a href="#"><i class='bx bxs-widget icon' ></i> Widgets</a></li>
			<li class="divider" data-text="table and forms">Table and forms</li>
			<li><a href="#"><i class='bx bx-table icon' ></i> Tables</a></li>
			<li>
				<a href="#"><i class='bx bxs-notepad icon' ></i> Forms <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#">Basic</a></li>
					<li><a href="#">Select</a></li>
					<li><a href="#">Checkbox</a></li>
					<li><a href="#">Radio</a></li>
				</ul>
			</li>
		</ul>
		<div class="ads">
			<div class="wrapper">
				<a href="#" class="btn-upgrade">Upgrade</a>
				<p>Become a <span>PRO</span> member and enjoy <span>All Features</span></p>
			</div>
		</div>
	</section>

    	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Search...">
					<i class='bx bx-search icon' ></i>
				</div>
			</form>
			<a href="#" class="nav-link">
				<i class='bx bxs-bell icon' ></i>
				<span class="badge">5</span>
			</a>
			<a href="#" class="nav-link">
				<i class='bx bxs-message-square-dots icon' ></i>
				<span class="badge">8</span>
			</a>
			<span class="divider"></span>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a href="#"><i class='bx bxs-cog' ></i> Settings</a></li>
					<li><a href="#"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
				</ul>
			</div>
		</nav>


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>

@yield('sidebar')
