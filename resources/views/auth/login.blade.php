@extends('layouts.app')

@section('content')
<div class="card p-4 shadow-lg mx-auto" style="width: 400px;">
	<h3 class="text-center mb-3">Đăng nhập</h3>
	@if(session('error'))
	<div class="alert alert-danger">{{ session('error') }}</div>
	@endif
	<form action="{{ route('login.process') }}" method="POST">
		@csrf
		<div class="mb-3">
			<label class="form-label">Email</label>
			<input type="email" name="email" class="form-control" required>
		</div>
		<div class="mb-3">
			<label class="form-label">Mật khẩu</label>
			<input type="password" name="password" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
	</form>
	<p class="mt-3 text-center">
		Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký</a>
	</p>
</div>
@endsection