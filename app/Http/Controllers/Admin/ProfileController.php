<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileControlle extends Controller
{
    //
    public function add()
    {
        return view('admin.prpfile.create');
        
    }
    
    public function create()
    {
        return view('admin/prpfile/create');
        
    }
    
    public function edit()
    {
        return view('admin.prpfile.create');
        
    }
    
    public function update()
    {
        return view('admin/prpfile/create');
        
    }
    
}
