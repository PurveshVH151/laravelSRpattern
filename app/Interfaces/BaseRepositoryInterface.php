<?php

namespace App\Interfaces;

interface BaseRepositoryInterface
{
    public function all();
    public function find($taskId);
    public function delete($taskId);
    public function create(array $taskDetails);
    public function update($taskId, array $newDetails);
}