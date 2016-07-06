<?php

namespace App\Http\Controllers;

use App\Department;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        $departments = Department::departments()->with('children')->get();

        return view('departments.index', compact('departments'));
    }

    /**
     * Show
     */
    public function show($department)
    {
        $department = Department::find($department);

        if ($department->isParent())
        {
            $listings = $department->departmentListings;
        }
        else
        {
            $listings = $department->listings;
        }

        return view('departments.show', compact('department', 'listings'));
    }
}