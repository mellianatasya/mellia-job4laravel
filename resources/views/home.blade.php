@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')

<div class="jumbotron text-center bg-light py-5">
    <h1 class="display-4">Selamat Datang di My App</h1>
    <p class="lead">Aplikasi Laravel sederhana dengan Laravel Blade</p>
    <a href="{{ route('profile')}}" class="btn btn-primary btn-lg">Lihat Profile</a>
</div>

<!-- Keunggulan Kami -->
<div class="mt-5">
    <h2 class="text-center">🪐Keunggulan MyApp</h2>
    <p class="text-center">Kami menghadirkan layanan terbaik dengan berbagai keunggulan yang dirancang untuk memberikan pengalaman digital yang luar biasa.</p>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">🚀 Performa Tinggi</h5>
                    <p class="card-text">Dibangun dengan teknologi mutakhir untuk memastikan kecepatan, keamanan, dan stabilitas dalam penggunaan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">🎨 Desain Intuitif</h5>
                    <p class="card-text">Antarmuka yang dirancang dengan baik agar mudah digunakan dan memberikan pengalaman yang nyaman.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">🔒 Keamanan Data</h5>
                    <p class="card-text">Keamanan pengguna adalah prioritas kami. Data Anda dijaga dengan sistem perlindungan tingkat tinggi.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">🌍 Akses Mudah</h5>
                    <p class="card-text">Dapat diakses dari berbagai perangkat dengan performa yang tetap optimal.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">💡 Inovasi Berkelanjutan</h5>
                    <p class="card-text">Kami terus menghadirkan fitur baru yang relevan dengan kebutuhan pengguna.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">📞 Dukungan 24/7</h5>
                    <p class="card-text">Tim kami siap membantu kapan pun Anda membutuhkan.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimoni Pengguna -->
<div class="mt-5">
    <h2 class="text-center">💬 Testimoni Pengguna</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <p class="card-text">"MyApp sangat membantu pekerjaan saya sehari-hari!"</p>
                    <h6 class="card-subtitle text-muted">- Budi Santoso</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <p class="card-text">"Desainnya intuitif dan mudah digunakan!"</p>
                    <h6 class="card-subtitle text-muted">- Siti Aisyah</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <p class="card-text">"Fitur keamanan datanya sangat bagus!"</p>
                    <h6 class="card-subtitle text-muted">- Rahmat Hidayat</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center p-3 bg-white text-dark">
        © 2025 MyApp | All Rights Reserved
    </div>
</footer>

@endsection