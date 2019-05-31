<?php

namespace App\repo;
use Illuminate\Database\Eloquent\Model;
class Repository
{
    protected $model;



    /**
     * Repository constructor.
     * @param $model Model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create($data=[])
    {
        return $this->model->create($data);
    }

    public function insert($data=[])
    {
        return $this->model->insert($data);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function update($id, $data=[])
    {
        $obj = $this->find($id);
        if (!$obj){
            return false;
        }

        return $obj->update($data);
    }
    public function delete($id)
    {
        $obj = $this->find($id);
        if (!$obj){
            return false;
        }

        return $obj->destroy($id);
    }


    public function fillable()
    {
        return $this->model->getFillable();

    }

    public function paginate(int $perPage)
    {
        return $this->model->paginate($perPage);
    }


    public function all()
    {
        return $this->model->all();
    }





}