<?php
namespace App\repo;
use Illuminate\Support\Facades\DB;

class ExerciseRepo extends Repository{
    public function getExercise($id){
        $data=DB::table('exercises')
            ->select("exercises.exercises_id","exercises.exercises_name","exercises.link","exercises.remarks","exercise_packages.ep_id","exercise_packages.ep_name")
            ->leftJoin('exercise_packages','exercise_packages.ep_id','=','exercises.fk_ep_id')
            ->where('exercises.exercises_id','=',$id)
            ->get();
        return $data;
    }

}