@extends('layouts.master')
@section('content')
<section class="content-header">
    <h1>
        {{__('msg.category_add')}}

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{__('msg.home')}}</a></li>
        <li><a href="{{route('category')}}">{{__('msg.category')}}</a></li>
        <li class="active">{{__('msg.category_add')}}</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-add-category">
                        <form style="width: 70%; margin: auto;" method="POST" action="{{ Route('addCategory') }}" enctype="multipart/form-data">
                            @csrf
                            {{ csrf_field() }}
                            <h1 class="text-center">{{__('msg.category_add')}}</h1>
                            <hr>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="title">{{__('msg.title')}}</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                    <p id="name_message" class="text-danger" style="font-style: italic;"></p>
                                </div>
                                <div class="form-group">
                                    <label for="description">{{__('msg.description')}}</label>
                                    <input type="text" class="form-control" id="description" name="description" required>
                                    <p id="description_message" class="text-danger" style="font-style: italic;"></p>
                                </div>
                                <div class="form-group">
                                    <label for="image">{{__('msg.image')}}</label>
                                    <input type="file" class="form-control-file" id="image" name="image" required>
                                    <p id="image_message" class="text-danger" style="font-style: italic;"></p>
                                </div>
                                <button type="" class="btn btn-success" id="btn-add-category">{{__('msg.category_add')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<script type="text/javascript" src="../../js/messagetext.js"></script>
<script src="../../js/categories/addCategory.js"></script>
@endsection