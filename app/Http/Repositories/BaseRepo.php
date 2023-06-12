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

    public function getDataWithPigination($perPage = 10, $page = 0, $orderBy = null, $searches = null)
    {
        $query = $this->model->query();
        
        $offset = $perPage * $page;

        // Apply offset and limit
        if ($offset > 0) {
            $query->offset($offset);
        }

        if ($orderBy) {
            $query->orderBy($orderBy);
        }

        $query->limit($perPage);

        if($searches) {
            $query->where(function ($q) use ($searches) {
                foreach ($searches as $key => $value) {
                    $q->orWhere($key, 'LIKE', "%$value%");
                }
            });
        }

        // Get total count
        $totalCount = $query->count();

        // Calculate total pages
        $totalPages = ceil($totalCount / $perPage);

        $results = $query->get();

        return [
            'data' => $results,
            'total' => $totalCount,
            'per_page' => $perPage,
            'current_page' => $page,
            'total_pages' => $totalPages,
        ];
    }
}
