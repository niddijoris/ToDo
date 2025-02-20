<?php

namespace App\Http\Controllers;

use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
class UserController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function index()
    {
        return $this->userRepository->all();
    }
    public function show($id)
    {
        return $this->userRepository->find($id);
    }
    public function store(Request $request)
    {
        return $this->userRepository->create($request->all());
    }
    public function update(Request $request, $id)
    {
        return $this->userRepository->update($request->all(), $id);
    }
    public function destroy($id)
    {
        return $this->userRepository->delete($id);
    }
}
