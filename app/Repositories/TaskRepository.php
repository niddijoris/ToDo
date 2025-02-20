<?php

namespace App\Repositories;


use App\Interfaces\TaskRepositoryInterface;
use App\Models\Task;

/**
 * Class TaskRepository.
 */
class TaskRepository implements TaskRepositoryInterface
{
    protected $model;

    public function __construct(Task $model)
    {
        $this->model = $model;
    }

   
    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $record = $this->model->findOrFail($id);
        return $record->update($data);
    }

    public function delete($id)
    {
        $this->model->findOrFail($id)->delete();
    }
}
