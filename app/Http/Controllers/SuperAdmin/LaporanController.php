<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('super_admin.laporan', compact('projects'));
    }

    public function projectDetail($id)
    {
        $project = Project::findOrFail($id);
        return view('super_admin.laporan_detail', compact('project'));
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> 06f5e070467397c5ca2ce870f83d4a86044a59fc
