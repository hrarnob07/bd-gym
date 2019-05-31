@extends('admin.layouts.master')
@section('extra-meta')
    <meta name="_token" content="{{ csrf_token() }}">
@endsection
@section('main-content')
    @if(Session::get('successMsg'))
        <div style="font-size: 18px" class="alert alert-success col-md-4">
            {!! Session::get('successMsg') !!}
        </div>
    @elseif(Session::get('errorMsg'))
        <div style="font-size: 18px" class="alert alert-success col-md-4">
            {!! Session::get('errorMsg') !!}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Exercise Package Entry</h3>

                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form role="form" action="{{route('exercise.package.update',['id'=>$allData->ep_id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <div class="form-group ">
                                            <label for="name">Exercise Package Name Edit</label>
                                            <input name="ep_name" type="text" class="form-control" id="name" placeholder="{{$allData->ep_name}}">
                                            <small class="text-danger">{{ $errors->first('name') }}</small>

                                        </div>

                                        <div class="box-footer">
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <button type="submit" class="btn btn-primary btn-flat pull-right btn-sm">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>


@endsection