@extends('layouts.master')
@section('content')
<section class="content-header">
    <h1>{{__('msg.category_edit')}}</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>{{__('msg.home')}}</a></li>
        <li><a href="{{route('category')}}">{{__('msg.category')}}</a></li>
        <li class="active">{{__('msg.category_edit')}}</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-body">
                        <div class="form-add-category">
                            <form style="width: 50%; margin: auto;" method="POST" action="{{asset('')}}category/editCategory/{{$category->id}}" enctype="multipart/form-data">
                                @csrf
                                {{ csrf_field() }}
                                <h1>{{__('msg.category_edit')}}</h1>
                                <hr>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="title">{{__('msg.title')}}</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{$category->title}}" required>
                                        <p id="name_message" class="text-danger" style="font-style: italic;"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">{{__('msg.description')}}</label>
                                        <input type="text" class="form-control" id="description" name="description" value="{{$category->description}}" required>
                                        <p id="description_message" class="text-danger" style="font-style: italic;"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">{{__('msg.image')}}</label>
                                        <div class="show-image">
                                            <img class="image-fluid" src="{{ asset(\Storage::url($category->image)) }}" style="width: 100px; height: 100px; margin: 10px 0px;">
                                        </div>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                        <p id="image_message" class="text-danger" style="font-style: italic;"></p>
                                    </div>
                                    <button type="" class="btn btn-success" id="btn-edit-category">{{__('msg.category_edit')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <!-- /.box-header -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>
<script type="text/javascript" src="../../js/messagetext.js"></script>
<script src="../js/categories/editCategory.js"></script>
</script>
@endsection
