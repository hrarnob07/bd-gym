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
            <h3 class="box-title">Exercise package list</h3>
            <a href="{{route('exercise.package.create')}}" class="btn btn-primary btn-sm btn-flat pull-right">Add
                New exercise package
            </a>
        </div>

    <div class="box-body">
        <table class="table table-bordered">


            <tbody>
            </tr>
                <th class="text-center" style="width: 15px" >Sn.</th>
                <th class="text-center">Exercise package Name</th>
                <th class="text-center"> Action</th>
            </tr>


            @foreach($alldata as $key=> $data)
            <tr>
                <td class="text-center">{{$key+1}}</td>
                <td class="text-center">{{$data->ep_name}}</td>
                <td class="text-center">
                    <a href="{{route('exercise.package.edit',['id'=>$data->ep_id])}}" class="btn btn-sm btn-warning ">edit</a>
                    <a href="{{route('exercise.package.delete',['id'=>$data->ep_id])}}" class="btn btn-sm btn-warning ">delete</a>

                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
         </div>

        </div>
        </div>
    </div>


@endsection