@extends('layouts.dashboard')

@section('dashboard-content')

@if(session('success'))
<div class="alert alert-success">
	{{ session('success') }}
</div>
@endif
<h3 class="mb-4">Tổng quan</h3>

<div class="row">
	<div class="col-12 col-lg-8">
		<div class="row">
			<!-- Portfolio -->
			<div class="col-6 col-lg-4 mt-4">
				<div class="card rounded-5">
					<div class="card-body rounded-5 shadow-sm">
						<span class="badge bg-default p-3 rounded-5 translate-middle-y start-0 top-0 position-absolute ms-3">
							<i class="fa fa-lg fa-user"></i>
						</span>
						<h6 class="text-uppercase mt-3 fw-bold">Portfolios</h6>
						<div class="position-relative d-flex justify-content-end align-items-baseline">
							<div class="text-default fs-3 fw-bold position-relative text-end me-2">{{ count($portfolios) }}</div>
							<div class="text-black fs-5 position-relative text-end me-2 ms-auto">sites</div>
							<div class="text-muted fs-6  position-relative">/ ∞</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Resources -->
			<div class="col-6 col-lg-4 mt-4">
				<div class="card rounded-5">
					<div class="card-body rounded-5 shadow-sm">
						<span class="badge bg-default p-3 rounded-5 translate-middle-y start-0 top-0 position-absolute ms-3">
							<i class="fa fa-lg fa-folder-open"></i>
						</span>
						<h6 class="text-uppercase mt-3 fw-bold">Resources</h6>
						<div class="position-relative d-flex justify-content-end align-items-baseline">
							<div class="text-default fs-3 fw-bold position-relative text-end me-2">30</div>
							<div class="text-black fs-5 position-relative text-end me-2 ms-auto">Mb</div>
							<div class="text-muted fs-6  position-relative">/ ∞</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Items -->
			<div class="col-6 col-lg-4 mt-4">
				<div class="card rounded-5">
					<div class="card-body rounded-5 shadow-sm">
						<span class="badge bg-default p-3 rounded-5 translate-middle-y start-0 top-0 position-absolute ms-3">
							<i class="fa fa-lg fa-database"></i>
						</span>
						<h6 class="text-uppercase mt-3 fw-bold">Data</h6>
						<div class="position-relative d-flex justify-content-end align-items-baseline">
							<div class="text-default fs-3 fw-bold position-relative text-end me-2">50</div>
							<div class="text-black fs-5 position-relative text-end me-2 ms-auto">items</div>
							<div class="text-muted fs-6  position-relative">/ ∞</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<h3 class="mt-5 mb-3">Hoạt động</h3>
<div class="row">
	<div class="col-12">
		<div class="card rounded-5">
			<div class="card-body rounded-5 shadow-sm">
				<div class="table-responsive">
					<table class="table table-hover table-borderless table-striped">
						<thead>
							<tr>
								<th>Thời gian</th>
								<th>Hoạt động</th>
								<th>Người thực hiện</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>10:00 12/12/2021</td>
								<td>Thêm mới một portfolio</td>
								<td>Admin</td>
							</tr>
							<tr>
								<td>10:00 12/12/2021</td>
								<td>Thêm mới một portfolio</td>
								<td>Admin</td>
							</tr>
							<tr>
								<td>10:00 12/12/2021</td>
								<td>Thêm mới một portfolio</td>
								<td>Admin</td>
							</tr>
							<tr>
								<td>10:00 12/12/2021</td>
								<td>Thêm mới một portfolio</td>
								<td>Admin</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection