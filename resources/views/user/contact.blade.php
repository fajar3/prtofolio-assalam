@extends('layouts.user')

@section('header')
<style>
    #hero {
        background: url('{{asset('user/images/122.jpg')}}') top center no-repeat;
        background-size: cover;
        width: 100%;
    }
    
    .btn-youtube {
        background-color: #FF0000;
        color: #fff;
        padding: 10px 24px;
        border-radius: 50px;
        transition: background-color 0.3s ease;
    }
    
    .btn-youtube:hover {
        background-color: #FF3333;
    }
    
    .fixed-button-container {
        position: fixed;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1000;
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .fixed-button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }
    
    .fixed-button:hover {
        background-color: #0056b3;
    }
    
    .ppdb-banner {
        max-width: 200px;
        height: auto;
    }
</style>
@endsection

@section('hero')
<div class="container">
    <h1>Pendaftaran Santri Baru</h1>
    <h2>Tahun Ajaran 2025/2026</h2>
    <a href="#registration" class="btn-get-started">Lihat Informasi</a>
</div>
@endsection

@section('content')

    {{-- Registration Section --}}
    <section id="registration" class="wow fadeInUp">
        <div class="container">
            <div class="section-header text-center">
                <h3 class="section-title">Informasi Pendaftaran</h3>
                <p class="section-description">Tonton video panduan pendaftaran kami</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="registration-section">
                        <div class="d-flex justify-content-between align-items-center mb-3 p-3 border rounded">
                            <div>
                                <h5 class="mb-1">Video Panduan Pendaftaran</h5>
                                <small class="text-muted">Pelajari cara pendaftaran melalui video</small>
                            </div>
                            <a href="https://www.youtube.com/your-channel-link" target="_blank" class="btn btn-primary">
                                <i class="fa fa-youtube-play"></i> Tonton Video
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Download Section --}}
    <section id="download" class="wow fadeInUp">
        <div class="container">
            <div class="section-header text-center ">
                <h3 class="section-title">Download Berkas</h3>
                <p class="section-description">Silakan download berkas berikut</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="download-section ">
                        <div class="d-flex justify-content-between align-items-center mb-3 p-3 border rounded">
                            <div>
                                <h5 class="mb-1">Surat Pernyataan Mondok</h5>
                                <small class="text-muted">Format PDF - Wajib diisi dan ditandatangani</small>
                            </div>
                            <a href="{{ route('download.pernyataan') }}" class="btn btn-primary">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ppdb-link" class="container text-center my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="ppdb-link-container p-4 border rounded">
                <h3 class="mb-3">Kunjungi Website Resmi PPDB</h3>
                <p class="text-muted mb-4">Dapatkan informasi lengkap dan terbaru seputar Penerimaan Peserta Didik Baru</p>
                <a href="https://ppdb.yourdomain.com" target="_blank" class="btn btn-primary btn-lg px-5">
                    <i class="fa fa-external-link"></i> Buka Website PPDB
                </a>
            </div>
        </div>
    </div>
</section>
@endsection