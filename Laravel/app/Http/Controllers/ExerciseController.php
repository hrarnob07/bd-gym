<?php

namespace App\Http\Controllers;

use App\ExercisePackage;
use App\repo\ExerciseRepo;
use Illuminate\Http\Request;
use App\Exercise;
use Illuminate\Support\Facades\Redirect;

class ExerciseController extends Controller
{
    private $model;

    public function __construct(Exercise $exercise)
    {
        $this->model = new ExerciseRepo($exercise);
    }

    public function index()
    {
        $allData = $this->model->all();
        return view('admin.exercise.index', ['alldata' => $allData]);
    }

    public function create()
    {
        $allData = ExercisePackage::all();
        return view('admin.exercise.create', ['alldata' => $allData]);
    }

    public function store(Request $request)
    {
        $data = [];
        $request->validate([

            'exercises_name' => 'required',
            'fk_ep_id' => 'required',
            'link' => 'required',
            'remarks' => 'required'


        ]);

        $data['exercises_name'] = $request->exercises_name;
        $data['fk_ep_id'] = $request->fk_ep_id;
        $data['link'] = $request->link;
        $data['remarks'] = $request->remarks;
        $create = $this->model->create($data);
        if ($create) {
            return Redirect::back()->with(['successMsg' => 'Exercise  created successfully']);
        }
        return Redirect::back()->with(['errorMsg' => 'Failed to create Exercise. Try again !']);
    }

    public function edit($id){
        $allData=$this->model->getExercise($id);
        return view('admin.exercise.edit',['allData'=>$allData]);

    }

    public function update(Request $request,$id){

        $data=[];
        $request->validate([
            'exercises_name' => 'required',
            'fk_ep_id' => 'required',
            'link' => 'required',
            'remarks' => 'required'
        ]);

        $data['exercises_name'] = $request->exercises_name;
        $data['fk_ep_id'] = $request->fk_ep_id;
        $data['link'] = $request->link;
        $data['remarks'] = $request->remarks;
        $update=$this->model->update($id,$data);
        if($update){
            return Redirect::back()->with(['successMsg' => 'Exercise  updated successfully']);
        }

        return Redirect::back()->with(['errorMsg' => 'Failed to update Exercise. Try again !']);

    }

    public function delete($id){

        $delete=$this->model->delete($id);
        if($delete){
            return Redirect::back()->with(['successMsg' => 'Exercise  deleted successfully']);
        }
        return Redirect::back()->with(['errorMsg' => 'Failed to delete Exercise. Try again !']);
    }

}
