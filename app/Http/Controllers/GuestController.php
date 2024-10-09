<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Certificate;
use App\Models\Experience;
use App\Models\Profil;
use App\Models\Project;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function certificate()
    {
        $category = Category::with('categories')->get();
        return view('certificate', [
            'categories' => $category
        ]);
    }
    public function experience()
    {
        $experience = Experience::with(['jobdesk', 'dokumentasi'])->get();
        return view('experience', [
            'experiences' => $experience
        ]);
    }
    public function resume()
    {
        $resume = Profil::with(['educations', 'sosmed', 'skills'])->get();
        return view('resume', [
            'resumes' => $resume
        ]);
    }
    public function project()
    {
        $project = Project::with(['featurs', 'dokumentasi', 'roles', 'tools'])->get();
        return view('project.index', [
            'projects' => $project
        ]);
    }
    public function showProject($id)
    {
        $project = Project::with(['featurs', 'dokumentasi', 'roles', 'tools'])->where('id', $id)->first();
        return view('project.show', [
            'project' => $project
        ]);
    }
    public function error_page()
    {
        dd('tidak ad');
    }
}
