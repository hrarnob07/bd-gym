@extends('admin.layouts.master')
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
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Upload Exercise list</h3>

                </div>

                <div class="box-body">

                    {!! Form::open(array('route' => 'file.import','method'=>'POST','files'=>'true')) !!}
                    <div class="row">
                        <div class="col-xs-10 col-sm-10 col-md-10">
                            @if (Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @elseif (Session::has('warnning'))
                                <div class="alert alert-warnning">{{ Session::get('warnning') }}</div>
                            @endif
                            <div class="form-group">
                                {!! Form::label('sample_file','Select File to Import:',['class'=>'col-md-3']) !!}
                                <div class="col-md-9">
                                    {!! Form::file('products', array('class' => 'form-control')) !!}
                                    {!! $errors->first('products', '<p class="alert alert-danger">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2 text-center">
                            {!! Form::submit('Upload',['class'=>'btn btn-success']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>

    <div >
        <form action="{{route('file.import')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{CSRF_Token()}}">
            <input type="file" name="products">

            <input type="submit" value="upload">
        </form>
    </div>


@endsection