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
		<a href="{{('admin')}}" class="brand me-4"> لوحة تحكم صقر</a>
		<ul class="side-menu">
			<li ><a href="{{('admin')}}" class="active"><i class='bx bxs-dashboard icon' ></i> الرئيسية</a></li>
			{{-- <li class="divider" data-text="main">Main</li> --}}
            <li><a href="{{route('admins')}}"><i class='bx bxs-notepad icon' ></i>المسئولين</a></li>
			<li>
				<a href="#"><i class='bx bxs-inbox icon' ></i>المعرض <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li style='padding-right: 1rem;'><a href="{{route('images')}}">الصور</a></li>
					<li style='padding-right: 1rem;'><a href="{{route('videos')}}">الفيديوهات</a></li>
				</ul>
			</li>
			<li><a href="{{route('about')}}"><i class='bx bxs-notepad icon' ></i> عن الاكاديمية</a></li>
			<li><a href="{{route('teamWork')}}"><i class='bx bxs-group icon'></i>فريق العمل</a></li>
			<li><a href="{{route('program')}}"><i class='bx bxs-select-multiple icon'></i> البرامج</a></li>
			<li><a href="{{route('admissionRequirements')}}"><i class='bx bxs-chart icon' ></i> شروط القبول</a></li>
			<li><a href="{{route('bookTrip')}}"><i class='bx bxs-train icon'></i>حجز الرحلات</a></li>
			<li><a href="{{route('slides')}}"><i class='bx bxs-widget icon' ></i> الشرائح</a></li>
			<li><a href="{{route('socialMedia')}}"><i class='bx bx-link-alt icon'></i> التواصل الاجتماعي</a></li>
			<li><a href="{{route('contact')}}"><i class='bx bx-link-alt icon'></i> تواصل معنا</a></li>
			<li><a href="{{route('commonQuestions')}}"><i class='bx bx-question-mark icon' ></i>الاسئلة الشائعة</a></li>

		</ul>

	</section>

    	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="بحث">
					<i class='bx bx-search icon' ></i>
				</div>
			</form>

			<span class="divider"></span>
					<li>
                        <a href="{{route('logout')}}">
                            تسجيل خروج
                        </a>
                    </li>

		</nav>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>

@yield('sidebar')
