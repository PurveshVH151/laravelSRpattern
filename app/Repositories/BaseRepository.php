<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;
    protected $limit = 2;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getPaginateAll()
    {
        return $this->model->paginate($this->limit);
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $model = $this->model->findOrFail($id);
        $model->update($data);

        return $model;
    }

    public function delete($id)
    {
        $model = $this->model->findOrFail($id);
        return $model->delete();
    }
    
    public function getAttributeBy($key,$value)
    {
        return $this->model->where($key,$value);
    }
}