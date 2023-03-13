<?php
namespace App\Services;

use App\Repositories\BaseRepository;

class BaseService
{
    protected $repository;

    public function __construct(BaseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function getPaginateAll()
    {
        return $this->repository->getPaginateAll();
    }

    public function getById($id)
    {
        return $this->repository->getById($id);
    }

    public function create($data)
    {
        return $this->repository->create($data);
    }

    public function update($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

    public function getAttributeBy($key,$value)
    {
        return $this->repository->getAttributeBy($key,$value);
    }
}