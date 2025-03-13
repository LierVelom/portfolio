@extends('layouts.dashboard')

@section('dashboard-content')

<h3 class="mb-4">Danh sách Portfolio</h3>

<div class="row">
	<!-- Portfolio -->
	@foreach($portfolios as $portfolio)
	<div class="mt-3 col-12 col-lg-6 col-xl-4 col-xxl-3">
		<div class="card rounded-5 text-decoration-none portfolio-card"">
			<div class="card-body rounded-5 shadow-sm">
				<div class="d-flex align-items-center">
					<span class="badge bg-default p-2 rounded-5">
						<i class="fa fa-user"></i>
					</span>
					<div class="ms-3">
						<small class="text-muted">{{ $portfolio->updated_at->format('l, d M Y') }}</small>
						<h6 class="card-title">{{ $portfolio->name }}</h6>
					</div>
					<div class="dropdown-center ms-auto">
						<button type="button" class="btn btn-link text-decoration-none text-muted" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fal fa-lg fa-ellipsis-v"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="{{ route('portfolios.edit', $portfolio->id) }}">Chỉnh sửa</a></li>
						</ul>
					</div>
				</div>

				<div class="mt-4 d-flex justify-content-between align-items-center">
					<div class="statitics">
						<span class="fs-4 text-default">{{ $portfolio->items_count }}</span>
						<span class="text-muted">/ Data</span>
					</div>
					<a href="{{ route('portfolios.show', $portfolio->id) }}" class="btn btn-outline-default btn-sm rounded-5">
						Xem chi tiết
						<i class="fal fa-arrow-right bi"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	<div class="mt-3 col-12 col-lg-6 col-xl-4 col-xxl-3 ">
		<a class="card rounded-5 text-decoration-none h-100 bg-transparent" href="{{ route('portfolios.create') }}">
			<div class="card-body rounded-5 border border-default h-100" style="border-style: dashed !important;">
				<div class="d-flex justify-content-center align-items-center h-100">
					<i class="fal fa-3x fa-plus-circle text-default"></i>
				</div>
			</div>
		</a>
	</div>

</div>
@endsection