<?php

namespace App\Http\Controllers;

use App\Interfaces\NotificationRepositoryInterface;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    protected $notification;

    public function __construct(NotificationRepositoryInterface $notification)
    {
        $this->notification = $notification;
    }

    public function index()
    {
        return $this->notification->all();
    }

    public function show($id)
    {
        return $this->notification->find($id);
    }

    public function store(Request $request)
    {
        return $this->notification->create($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->notification->update($request->all(), $id);
    }

    public function destroy($id)
    {
        return $this->notification->delete($id);
    }
}
