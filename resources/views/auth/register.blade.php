@extends('layouts.app')
@section('content')
<div class="card p-4 shadow-lg mx-auto" style="width: 400px;">
	<h3 class="text-center mb-3">Đăng ký</h3>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form action="{{ route('register.process') }}" method="POST">
		@csrf
		<div class="mb-3">
			<label class="form-label">Tên</label>
			<input type="text" name="name" class="form-control" required>
		</div>
		<div class="mb-3">
			<label class="form-label">Email</label>
			<input type="email" name="email" class="form-control" required>
		</div>
		<div class="mb-3">
			<label class="form-label">Mật khẩu</label>
			<input type="password" name="password" class="form-control" required>
		</div>
		<div class="mb-3">
			<label class="form-label">Xác nhận mật khẩu</label>
			<input type="password" name="password_confirmation" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-success w-100">Đăng ký</button>
	</form>
	<p class="mt-3 text-center">
		Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập</a>
	</p>
</div>
@endsection