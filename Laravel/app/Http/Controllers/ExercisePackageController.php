<?php

namespace App\Http\Controllers;
use App\repo\Repository;
use App\ExercisePackage;
use App\Repo\ExercisePackageRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ExercisePackageController extends Controller
{
    protected $model;

    public function __construct(ExercisePackage $exercise_package)
    {

        $this->model = new ExercisePackageRepo($exercise_package);
    }

    public function index()
    {

        $allData=$this->model->all();
        return view('admin.exercise_package.index',['alldata'=>$allData]);
//        return $this->model->all();
    }


    public function create()
    {


        return view('admin.exercise_package.create');

    }

    public function store(Request $request){
//        $userId = Auth::user()->users_id;
        $data=[];
        $request->validate([

            'ep_name'=>'required'

        ]);

        $data['ep_name']=$request->ep_name;
        $create = $this->model->create($data);
        if ($create){
           return Redirect::back()->with(['successMsg'=>'Exercise package created successfully']);
        }
//        return response()->json([
//            'status'=>'feild',
//            'message'=>'Unable to create ! Something went wrong !'
//        ]);
        return Redirect::back()->with(['errorMsg'=>'Failed to create Exercise Package. Try again !']);
    }

    public function edit($id){

         $allData= $this->model->find($id);
//         dd($allData->ep_name);
         return view('admin.exercise_package.edit',['allData'=>$allData]);

    }
    public function update(Request $request,$id){

        $request->validate([

            'ep_name'=>'required'

        ]);
        $data=[];
//        $data['ep_id'] = $id;
        $data['ep_name']=$request->ep_name;


        $update=$this->model->update($id,$data);
        if($update)
        {
            return Redirect::back()->with(['successMsg'=>'Exercise package update successfully']);
        }
        return Redirect::back()->with(['errorMsg'=>'Failed to update Exercise Package. Try again !']);

    }

    public function delete($id){
//        dd($id);
        $delete= $this->model->delete($id);
        if($delete)
        {
            return Redirect::back()->with(['successMsg'=>'Exercise package delete successfully']);
        }
        return Redirect::back()->with(['errorMsg'=>'Failed to delete Exercise Package. Try again !']);

    }


}
