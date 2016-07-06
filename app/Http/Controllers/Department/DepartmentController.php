<?php

namespace App\Http\Controllers\Department;

use App\Department;

use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $departments = Department::departments()->with('children')->orderBy('name', 'asc')->get();

        return view('departments.index', compact('departments'));
    }

    /**
     * Show
     */
    public function show($department)
    {
        $department = Department::find($department);

        $listings = $department->departmentListings;

        return view('departments.show', compact('department', 'listings'));
    }
}