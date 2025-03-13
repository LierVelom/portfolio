@extends('layouts.app')

@section('content')
<!-- <div class="d-flex"> -->
<!-- Sidebar -->
<section id="navbar">
	<nav class="navbar-nav">
		<a href="#" class="nav-brand ps-3 mx-auto mx-lg-none">
			<!-- <img src="" height="30px" /> -->
			Brand
		</a>
		<div class="nav-hidden-coverplace"></div>
		<div class="nav-collapse">

			<div class="nav-profile order-last ps-lg-1">
				<div class="nav-dropdown" data-labelly="DropdownProfile">
					<div class="userAvatar avatarSize-40">
						<div class="avatarFrame f-default">
							<div class="avatarImg" style="background-image: url({{ asset('/images/avatar.png') }});"></div>
						</div>
					</div>
					<div class="userInfo ps-2">
						<div class="name fw-bold">
							{{ Auth::user()->name }}
						</div>
						<div class="d-lg-none status fst-italic text-muted">
							<small>Quản trị viên</small>
						</div>
					</div>
				</div>

				<ul class="nav-dropdown-menu" id="DropdownProfile">
					<li>
						<a class="nav-dropdown-item" href="/profile">
							<span class="icon fa-stack">
								<i class="fa fa-circle fa-stack-2x primary"></i>
								<i class="fa fa-user fa-stack-1x fa-inverse"></i>
							</span>
							<span class="text">Hồ sơ</span>
						</a>
					</li>
					<li>
						<a class="nav-dropdown-item" href="/profile/edit">
							<span class="icon fa-stack">
								<i class="fa fa-circle fa-stack-2x secondary"></i>
								<i class="fa fa-cog fa-stack-1x fa-inverse"></i>
							</span>
							<span class="text">Cài đặt tài khoản</span>
						</a>
					</li>
					<li>
						<a class="nav-dropdown-item" href="/portfolio">
							<span class="icon fa-stack">
								<i class="fa fa-circle fa-stack-2x rose"></i>
								<i class="fa fa-briefcase fa-stack-1x fa-inverse"></i>
							</span>
							<span class="text">Quản lý Portfolio</span>
						</a>
					</li>
					<li>
						<a class="nav-dropdown-item" href="/notifications">
							<span class="icon fa-stack">
								<i class="fa fa-circle fa-stack-2x purple"></i>
								<i class="fa fa-bell fa-stack-1x fa-inverse"></i>
							</span>
							<span class="text">Thông báo</span>
						</a>
					</li>
					<li>
						<a class="nav-dropdown-item" href="/logout">
							<span class="icon fa-stack">
								<i class="fa fa-circle fa-stack-2x danger"></i>
								<i class="fa fa-sign-out-alt fa-stack-1x fa-inverse"></i>
							</span>
							<span class="text">Đăng xuất</span>
						</a>
					</li>
				</ul>
			</div>

			<div class="nav-list">
				<a href="{{ route('dashboard') }}" class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
					<span class="icon fa-stack">
						<i class="fa fa-circle fa-stack-2x primary"></i>
						<i class="fa fa-tachometer-alt fa-stack-1x fa-inverse"></i>
					</span>
					<span class="text">Dashboard</span>
				</a>

				<a href="#" class="nav-item {{ Request::is('portfolio*') ? 'active' : '' }}">
					<span class="icon fa-stack">
						<i class="fa fa-circle fa-stack-2x success"></i>
						<i class="fa fa-user fa-stack-1x fa-inverse"></i>
					</span>
					<span class="text">Portfolio</span>
				</a>

				<a href="#" class="nav-item {{ Request::is('resources*') ? 'active' : '' }}">
					<span class="icon fa-stack">
						<i class="fa fa-circle fa-stack-2x purple"></i>
						<i class="fa fa-folder-open fa-stack-1x fa-inverse"></i>
					</span>
					<span class="text">Tài nguyên</span>
				</a>

				<a href="#" class="nav-item {{ Request::is('item*') ? 'active' : '' }}">
					<span class="icon fa-stack">
						<i class="fa fa-circle fa-stack-2x warning"></i>
						<i class="fa fa-database fa-stack-1x fa-inverse"></i>
					</span>
					<span class="text">Dữ liệu</span>
				</a>

				<a href="#" class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
					<span class="icon fa-stack">
						<i class="fa fa-circle fa-stack-2x info"></i>
						<i class="fa fa-list fa-stack-1x fa-inverse"></i>
					</span>
					<span class="text">Danh mục</span>
				</a>
			</div>


			<div class="nav-icon d-lg-none" id="navDrag">
				<i class="fa fa-lg fa-bars"></i>
			</div>

		</div>
	</nav>
</section>

<!-- Main Content -->
<div class="main-content">
	<!-- Nội dung dashboard -->
	<div class="container mt-4">
		@yield('dashboard-content')
	</div>
</div>
<!-- </div> -->
@endsection