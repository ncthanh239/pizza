@extends('layouts.master')
@section('content')
<section class="content-header">
	<h1>
		{{__('msg.pagePostTitle')}}
		<small>{{__('msg.subPostTitle')}}</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{asset('')}}home"><i class="fa fa-dashboard"></i>{{__('msg.breadcrumbLi1')}}</a></li>
		<li class="active">{{__('msg.breadcrumbPost')}}</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<div class="add-product">
						<a href="" class="btn btn-success btn-add-product">{{__('msg.post_add')}}</a>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">{{__('msg.id')}}</th>
								<th scope="col">{{__('msg.title')}}</th>
								<th scope="col">{{__('msg.category')}}</th>
								<th scope="col">{{__('msg.shortDes')}}</th>
								<th scope="col">{{__('msg.action')}}</th>
							</tr>
						</thead>
						<tbody>
							@foreach( $posts as $key => $value)
							<tr>
								<th scope="row">{{ $value->id }}</th>
								<td>{{$value->title}}</td>
								<td>{{$value->category_name}}</td>
								<td>{{$value->short_desc}}</td>
								<td style="display: flex;">
									<button data-id="{{$value->id}}" class="btn btn-info text-white btn-del font-weight-bold">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</button>
									<button data-id="{{$value->id}}" class="btn btn-warning text-white btn-del font-weight-bold" style="margin-left: 5px;">
										<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									</button>
									<button data-id="{{$value->id}}" class="btn btn-danger text-white btn-del font-weight-bold" style="margin-left: 5px;">
										<i class="fa fa-trash-o" aria-hidden="true"></i>
									</button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection