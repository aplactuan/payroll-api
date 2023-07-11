<?php

namespace App\Http\Controllers\Departments;

use App\Http\Controllers\Controller;
use App\Http\Resources\Departments\DepartmentResource;
use App\Models\Department;
use Illuminate\Http\Request;

class StoreDepartmentController extends Controller
{
    public function __invoke(Request $request)
    {
        dd($request);
        return DepartmentResource::make(
            Department::create($request->only('name', 'description'))
        );
    }
}
