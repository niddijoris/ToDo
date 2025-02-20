<?php

namespace App\Http\Controllers;

use App\Interfaces\TaskRepositoryInterface;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $task;

    public function __construct(TaskRepositoryInterface $task)
    {
        $this->task = $task;
    }

    public function index()
    {
        return $this->task->all();
    }

    public function show($id)
    {
        return $this->task->find($id);
    }

    public function store(Request $request)
    {
        return $this->task->create($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->task->update($request->all(), $id);
    }

    public function destroy($id)
    {
        return $this->task->delete($id);
    }
}
