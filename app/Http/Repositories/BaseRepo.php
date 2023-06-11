<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepo
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes)
    {
        $model = $this->find($id);

        if ($model) {
            $model->update($attributes);
            return $model;
        }

        return null;
    }

    public function delete($id)
    {
        $model = $this->find($id);

        if ($model) {
            $model->delete();
            return true;
        }

        return false;
    }

    public function where($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }

    public function whereFirst($column, $value)
    {
        return $this->model->where($column, $value)->first();
    }

    public function fill($id,$data)
    {
        $model = $this->find($id);
        foreach($data as $key => $value)
        {
            $model->$key = $value;
        }
        return $model->save();
    }
}
