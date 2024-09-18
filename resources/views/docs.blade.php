@extends('layout.master')
<style>
.manual-content {
font-family: Arial, sans-serif;
line-height: 1.6;
}

.manual-content h1 {
color: #3490dc;
}

.manual-content p {
margin-bottom: 20px;
}
h2 {
            color: #555;
        }
        p {
            line-height: 1.6;
        }
        .step {
            margin-bottom: 20px;
        }
        .code-snippet {
            background-color: #eaeaea;
            padding: 10px;
            border-radius: 5px;
            font-family: monospace;
        }

</style>
@section('content')
<div class="d-flex flex-column flex-md-row rounded border p-10">
    <ul class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6">
        <li class="nav-item me-0 mb-md-2">
            <a class="nav-link btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#kt_vtab_pane_4">
               
                <span class="d-flex flex-column align-items-start">
                    <span class="fs-4 fw-bolder">Login</span>
                </span>
            </a>
        </li>
        <li class="nav-item me-0 mb-md-2">
            <a class="nav-link btn btn-flex" data-bs-toggle="tab" href="#kt_vtab_pane_5">
               
                <span class="d-flex flex-column align-items-start">
                    <span class="fs-4 fw-bolder">Pemberi Kerja</span>
                </span>
            </a>
        </li>
        <li class="nav-item me-0 mb-md-2">
            <a class="nav-link btn btn-flex" data-bs-toggle="tab" href="#kt_vtab_pane_6">
                
                <span class="d-flex flex-column align-items-start">
                    <span class="fs-4 fw-bolder">Post Lowongan</span>
                </span>
            </a>
        </li>
        <li class="nav-item me-0 mb-md-2">
            <a class="nav-link btn btn-flex" data-bs-toggle="tab" href="#kt_vtab_pane_7">
                
                <span class="d-flex flex-column align-items-start">
                    <span class="fs-4 fw-bolder">Dashboard</span>
                </span>
            </a>
        </li>
        
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" 
             id="kt_vtab_pane_4" 
             role="tabpanel">
             <h1>Dashboard Login - Panduan Pengguna</h1>

            <div class="step">
                <h2>Langkah 1: Akses Halaman Login</h2>
                <p>Untuk mengakses dashboard login, buka peramban web Anda dan pergi ke URL berikut:</p>
                <div class="code-snippet">
                    https://jingyinghunterjob.com//login
                </div>
            </div>

            <div class="step">
                <h2>Langkah 2: Masukkan Email dan Password</h2>
                <p>Pada halaman login, masukkan nama pengguna dan kata sandi Anda di kolom yang tersedia:</p>
                <img src="{{ asset('assets/media/login.png') }}" width="300px">
            </div>

            <div class="step">
                <h2>Langkah 3: Login</h2>
                <p>Setelah memasukkan kredensial, klik tombol "Login" untuk mengakses dashboard.</p>
            </div>

            <div class="step">
                <h2>Langkah 4: Menavigasi Dashboard</h2>
                <p>Setelah berhasil login, Anda akan diarahkan ke dashboard di mana Anda bisa mengelola akun, melihat laporan, dan melakukan tugas lainnya. Menu dashboard terletak di sisi kiri halaman untuk navigasi yang mudah.</p>
            </div>
        </div>
        <div class="tab-pane fade" 
             id="kt_vtab_pane_5" 
             role="tabpanel">
             <h1>Menambahkan Data Pemberi Kerja - Panduan Pengguna</h1>
             <div class="step">
                <h2>Langkah 1: Klik Menu Pemberi Kerja Disebelah Kiri</h2>  
                
             </div>
             <div class="step">
                <h2>Langkah 2: Klik Klik Tobol Add Client Disebelah kana</h2>  
                <img src="{{ asset('assets/media/peberi_kerja.png') }}" width="900px">
             </div>
             <div class="step">
                <h2>Langkah 3: Isi Form Client, kemudian submit jika sudah selesai</h2>  
                <img src="{{ asset('assets/media/add_pemberi_kerja.png') }}" width="400px">
             </div>
             <div class="step">
                <h2>Langkah 4: List Pemberi Kerja</h2>  
                <img src="{{ asset('assets/media/post_loker.png') }}" width="900px">
             </div>
            
        </div>
        <div class="tab-pane fade" 
             id="kt_vtab_pane_6" 
             role="tabpanel">
             <h1>Posting Lowongan Kerja - Panduan Pengguna</h1>
             <div class="step">
                <h2>Langkah 1: Klik Menu Pemberi Kerja Disebelah Kiri</h2>  
                
             </div>
             <div class="step">
                <h2>Langkah 2: Klik Klik Tobol Post pada baris pemberi kerja Disebelah kana</h2>  
                <img src="{{ asset('assets/media/peberi_kerja.png') }}" width="900px">
             </div>
             <div class="step">
                <h2>Langkah 3: Isi Nama lowongan dan kualifikasi</h2>  
                <img src="{{ asset('assets/media/post_loker.png') }}" width="900px">
             </div>
             <div class="step">
                <h2>Langkah 4: Tambahkan Kategori Pekerjaan Jika Belu Ada</h2>  
                <img src="{{ asset('assets/media/add_category.png') }}" width="900px">
             </div>
             <div class="step">
                <h2>Langkah 5: Pilih Kategori Pekerjaan</h2>  
                <img src="{{ asset('assets/media/pilih_kategory.png') }}" width="900px">
             </div>
             <div class="step">
                <h2>Langkah 6: submit jika sudah selesai, maka halaman akan otomatis ddipindahkan kehalaman Lowongan kerja yang tersedia</h2>
                <img src="{{ asset('assets/media/pekerjaan_tersedia.png') }}" width="900px">
             </div>
            
        </div>
        <div class="tab-pane fade" 
             id="kt_vtab_pane_7" 
             role="tabpanel">
             <h1>Dashboard - Panduan Pengguna</h1>
             <div class="step">
                <h2>Dashboard Berisika data-data pelamar yang masuk</h2>
                <img src="{{ asset('assets/media/dashboard.png') }}" width="900px">
             </div>
        </div>
    </div>
</div>
@endsection
