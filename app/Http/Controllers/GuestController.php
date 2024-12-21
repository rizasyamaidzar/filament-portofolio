<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Certificate;
use App\Models\Experience;
use App\Models\Message;
use App\Models\Profil;
use App\Models\Project;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public $nama = 'Riza Afif Syamaidzar';
    public $role = 'I am a Web Developer | Junior Fullstack Developer | Backend';
    public $tools = [
        'assets/images/tools/html.png',
        'assets/images/tools/css.png',
        'assets/images/tools/js.png',
        // 'assets/images/tools/boostrap.png',
        'assets/images/tools/tailwind.png',
        // 'assets/images/tools/react.png',
        'assets/images/tools/laravel.png',
        'assets/images/tools/node.png',
        'assets/images/tools/mysql.png',
        // 'assets/images/tools/postgres.png',
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
            'nama' => 'Talent Class Batch 17 Kemnaker',
            'jurusan' => 'Fullstact Web Development',
            'tahun' => '2024',
            'experience' => [
                'Status Peserta A head of Schedule',
                'Menghadiri seluruh sesi pertemuan tanpa absen',
                'Menjadi Bangkit Student Representative',
                'Menyelesaikan course dengan tepat waktu, coursenya antara lain : The Bits and Bytes of Computer Networking System Administration and IT Infrastructure Services Belajar Dasar Pemrograman Web Google Cloud Computing Foundations Google Cloud Engineer Learning'
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
    ];
    public $popup = [
        'work-popup',
        'popup-youtube',
    ];
    public $services = [
        [
            'nama' => 'Brand Identify Design',
            'desc' => 'Bentos gives you the blocks & kits you need to create a true website within minutes.',
            'icon' => 'ri-global-fill'
        ],
        [
            'nama' => 'Website Design',
            'desc' => 'Bentos gives you the blocks & kits you need to create a true website within minutes.',
            'icon' => 'ri-pantone-fill'
        ],
        [
            'nama' => 'Application Design',
            'desc' => 'Bentos gives you the blocks & kits you need to create a true website within minutes.',
            'icon' => 'ri-quill-pen-line'
        ],
    ];
    public $testimonies = [
        [
            'nama' => 'Sahabat Ponorogo',
            'desc' => 'each out and lets make it happen ✨. Im also available for full-time or Part-time opportunities to push the boundaries of design and deliver exceptional work.',
            'logo' => 'png80x80'
        ],
        [
            'nama' => 'UD. Lancar Jaya',
            'desc' => 'each out and lets make it happen ✨. Im also available for full-time or Part-time opportunities to push the boundaries of design and deliver exceptional work.',
            'logo' => 'png80x80'
        ]
    ];

    public $experience = [
        [
            'nama' => 'Technopartner Indonesia',
            'tahun' => '2024',
            'role' => 'Backend',
        ],
        [
            'nama' => 'Sahabat Ponorogo',
            'tahun' => '2024',
            'role' => 'Web Development | Coach',
        ],
        [
            'nama' => 'ADS Multisolusindo',
            'tahun' => '2023',
            'role' => 'Backend Developer | Surveyor',
        ],
        [
            'nama' => 'Himpunan Mahasiswa Teknologi Informasi POLINEMA',
            'tahun' => '2022-2023',
            'role' => 'head of department of communication and information',
        ],
        [
            'nama' => 'Himpunan Mahasiswa Teknologi Informasi POLINEMA',
            'tahun' => '2021-2022',
            'role' => 'Organizing Committee Design Team Comunication and Information Department',
        ],
    ];
    public function about()
    {
        // dd($this->education[0]);
        return view('public.pages.about', [
            'educations' => $this->education,
            'experiences' => $this->experience
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
                'uuid' => '',
                'nama' => 'Sistem Informasi Manajemen Akademi Bola Basket Sahabat Ponorogo',
                'category' => $this->category[0],
                'popup' => $this->popup[1],
                'link' => 'https://www.youtube.com/watch?v=1ZovG1MaTXU',
                'image' => 'assets/images/projects/sahabat.png',
            ],
            [
                'uuid' => '',
                'nama' => 'Perpustakaan Gamifikasi With QRCode',
                'category' => $this->category[0],
                'popup' => $this->popup[1],
                'link' => 'https://www.youtube.com/watch?v=8El1Uzw59Xg',
                'image' => 'assets/images/projects/perpus.png',
            ],
            [
                'uuid' => '',
                'nama' => 'Sistem Pendukung Keputusan Pembelian Aset Perusahaan XYZ Metode MAUT',
                'category' => $this->category[0],
                'popup' => $this->popup[1],
                'link' => 'https://www.youtube.com/watch?v=lkJ-p7gpTKo',
                'image' => 'assets/images/projects/spk.png',
            ],
            [
                'nama' => 'Portal Berita Laravel & TailwindCSS | Full Features Demo',
                'category' => $this->category[0],
                'popup' => $this->popup[1],
                'link' => 'https://www.youtube.com/watch?v=PJ8GY4_Lwso',
                'image' => 'assets/images/projects/portal.png',
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
        // dd($this->services);
        return view('public.pages.service', [
            'services' => $this->services,
            'testimonies' => $this->testimonies,
        ]);
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
        // $category = [
        //     [
        //         'id' => '1',
        //         'nama' => 'Dicoding'
        //     ],
        //     [
        //         'id' => '2',
        //         'nama' => 'Organization'
        //     ],
        // ];
        $category = Category::with('categories')->get();
        // dd($category);
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
    public function message(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate([
            "nama" => "required|string|max:255",
            "email" => "required|email|max:255",
            "message" => "required|string|max:1000"
        ]);
        Message::create($validateData);
        return redirect('/')->with("success", "New Category has been Delete!");
    }

    public function error_page()
    {
        return view('public.pages.errorr');
    }
}
