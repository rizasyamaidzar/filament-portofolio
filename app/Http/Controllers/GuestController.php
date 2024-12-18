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
    public $nama = 'Riza Afif Syamaidzar';
    public $role = 'I am a Web Developer | Junior Fullstack Developer';
    public $tools = [
        'assets/images/tools/html.png',
        'assets/images/tools/css.png',
        'assets/images/tools/js.png',
        'assets/images/tools/tailwind.png',
        'assets/images/tools/laravel.png',
        'assets/images/tools/mysql.png',
    ];
    public $education = [
        [
            'nama' => 'Politeknik Negeri Malang',
            'jurusan' => 'D4 Sistem Informasi Bisnis | Teknologi Informasi',
            'tahun' => '2021-2025',
            'experience' => [
                'Mahasiswa Aktif Semester 6 Prodi D4 Sistem Informasi Bisnis Jurusan Teknologi Informasi',
                'IPK : 3.66 out of 4.00',
                'Aktif Organisasi Himpunan Mahasiswa Teknologi Informasi',
                'Program Matching Fund ADS Digital Partner X Polinema 2023',
                'MSIB Studi Independen Batch 6 2024',
                'Bangkit Student Representative Sosialisasi Bangkit Academy Kampus Politeknik Negeri Malang :Level Up Our Skills to Compete in Technology Industry with Bangkit Academy 2024',
                'Finalis Intercomp 2024'
            ]
        ],
        [
            'nama' => 'Bangkit Academy led by Google, Tokopedia, Gojek, & Traveloka',
            'jurusan' => 'Cloud Computing Learning Path',
            'tahun' => '2024',
            'experience' => [
                'Status Peserta A head of Schedule',
                'Menghadiri seluruh sesi pertemuan tanpa absen',
                'Menjadi Bangkit Student Representative',
                'Menyelesaikan course dengan tepat waktu, coursenya antara lain : The Bits and Bytes of Computer Networking System Administration and IT Infrastructure Services Belajar Dasar Pemrograman Web Google Cloud Computing Foundations Google Cloud Engineer Learning'
            ]
        ],
    ];

    // PROJECT
    public $category = [
        'website',
        'mobile',
    ];
    public $popup = [
        'work-popup',
        'popup-youtube',
    ];
    public function about()
    {
        // dd($this->education[0]);
        return view('public.pages.about', [
            'educations' => $this->education
        ]);
    }
    public function contact()
    {
        return view('public.pages.contact');
    }
    public function home()
    {
        // foreach ($this->education as $education) {
        //     dd($education['experience']);
        // }
        $projects = [
            [
                'nama' => 'Project Pertama',
                'category' => $this->category[0],
                'popup' => $this->popup[0],
                'link' => 'assets/images/profil.png',
                'image' => 'assets/images/profil.png',
            ],
            [
                'nama' => 'Project Kedua',
                'category' => $this->category[1],
                'popup' => $this->popup[1],
                'link' => 'https://www.youtube.com/watch?v=FXfqLUuVBis',
                'image' => 'assets/images/profil.png',
            ]
        ];
        // dd($projects);
        return view('public.pages.home', [
            'nama' => $this->nama,
            'role' => $this->role,
            'tools' => $this->tools,
            'popup' => 'popup-youtube',
            'projects' => $projects,
            'categories' => $this->category
        ]);
    }
    public function service()
    {
        return view('public.pages.service');
    }
    public function singleProject()
    {
        return view('public.pages.single-project');
    }
    public function works()
    {
        return view('public.pages.works');
    }
    public function certificate()
    {
        $category = Category::with('categories')->get();
        return view('public.pages.certificates', [
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
    public function certificatePage()
    {
        dd('a');
    }
    public function error_page()
    {
        dd('tidak ad');
    }
}
