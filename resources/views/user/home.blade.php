@extends('layouts.user')

@section('header')
    <style>
        .full-img {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 180px;
        }
        #hero{
            background: url('{{asset('user/images/122.jpg')}}') top center;
            background-repeat: no-repeat;
            width:100%;
            background-size:cover;
        }
        .image-center{
          display: block;
          margin-left: 6.5px;
          margin-right: 6.5px;
          width: 100%;
        } 
    </style>    
@endsection

@section('hero')
    <h1>Selamat Datang di Pondok Pesantren Assalam</h1>
    <h2>Tempat belajar, berkarya, dan tumbuh bersama. Mari wujudkan generasi unggul yang berakhlak mulia dan berilmu pengetahuan.</h2>
    <a href="#about" class="btn-get-started">Bersama Kami</a>
@endsection


@section('content')

      <!--========================== About Us Section ============================-->
      <section id="about">
        <div class="container">
          <div class="row about-container">
  
            <div class="col-lg-7 content order-lg-1 order-2">
              <h2 class="title">Tentang Kami</h2>
              <p> {!!$about[0]->caption!!}</p>
            </div>
  
            <div class="col-lg-5 background order-lg-2 order-1 wow fadeInRight" 
                style="background: url('{{asset('about_image/'.$about[0]->image)}}') center top no-repeat; background-size: cover;"></div>
          </div>
  
        </div>
      </section>
  
      <!--========================== Services Section ============================-->
      <section id="services">
        <div class="container wow fadeIn">
          <div class="section-header">
            <h3 class="section-title">Mengapa Memilih Kami?</h3>
            <p class="section-description">"Kami menggabungkan ilmu pengetahuan modern dengan pendidikan berbasis nilai-nilai islami untuk membentuk generasi yang unggul secara akademik dan berkarakter."</p>
          </div>
          <div class="row">
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
        <div class="box">
            <div class="icon"><i class="fas fa-book-open"></i></div>
            <h4 class="title">Pendidikan Berkualitas dengan Nilai Islami</h4>
            <p class="description">"Kami menggabungkan ilmu pengetahuan modern dengan nilai islami untuk membentuk generasi unggul."</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
        <div class="box">
            <div class="icon"><i class="fas fa-home"></i></div>
            <h4 class="title">Lingkungan Belajar Nyaman dan Kondusif</h4>
            <p class="description">"Kami menyediakan fasilitas lengkap dan suasana yang mendukung kenyamanan belajar, memastikan setiap santri dapat berkembang dengan optimal."</p>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
        <div class="box">
            <div class="icon"><i class="fas fa-user-graduate"></i></div>
            <h4 class="title">Bimbingan oleh Tenaga Ahli dan Berpengalaman</h4>
            <p class="description">"Dibimbing oleh tenaga pengajar yang kompeten dan berpengalaman, kami siap membantu setiap santri mencapai potensi terbaiknya."</p>
        </div>
    </div>
</div>

  
        </div>
      </section><!-- #services -->
  
      <!--========================== Call To Action Section ============================-->
      <section id="call-to-action">
        <div class="container wow fadeIn">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 class="cta-title">Bergabung Bersama Kami di Pondok Pesantren ASSALAM</h3>
              <p class="cta-text"> "Jadilah bagian dari keluarga besar Pondok Pesantren Assalam dan raih masa depan yang gemilang. Kami menawarkan lingkungan belajar Islami yang kondusif, fasilitas lengkap, serta bimbingan dari tenaga pengajar yang berpengalaman dan berdedikasi.

Bergabung dengan kami berarti bergabung dengan komunitas yang berkomitmen mencetak generasi yang tidak hanya unggul dalam ilmu pengetahuan, tetapi juga memiliki akhlak mulia dan semangat untuk memberikan manfaat bagi masyarakat.

Daftarkan diri Anda sekarang dan mulailah perjalanan menuju masa depan yang cerah bersama Pondok Pesantren Assalam."</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Contact</a>
            </div>
          </div>
  
        </div>
      </section>
  
      <!--========================== category Section ============================-->
      <section id="category">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Blog Kami</h3>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
          <div class="row">
  
          <div class="row" id="category-wrapper">
            @foreach ($categories as $category)
                <div class="col-md-4 col-sm-12 category-item filter-app" >
                      <a href="">
                        <img src="{{asset('category_image/'.$category->image)}}" class="image-center">
                        <div class="details">
                          <h4>{{$category->name}}</h4>
                          <span>{{$category->description}}</span>
                        </div>
                      </a>
                </div>
            @endforeach  
          </div>
  
        </div>
      </section>

<style>
.category-card {
    transition: all 0.3s ease;
    overflow: hidden;
    border-radius: 12px;
}

.card-image-container {
    position: relative;
    overflow: hidden;
}

.category-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.category-card:hover .category-image {
    transform: scale(1.1);
}

.category-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.category-card:hover .category-overlay {
    opacity: 1;
}

.category-overlay .btn {
    transform: translateY(20px);
    transition: transform 0.3s ease;
}

.category-card:hover .category-overlay .btn {
    transform: translateY(0);
}

.section-description {
    line-height: 1.6;
}
</style>

      <!--========================== Sejarah Section ============================-->
      <section id="sejarah" class="py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h3 class="section-title">Sejarah Pondok Pesantren Assalam</h3>
            <p class="section-description text-muted mx-auto" style="max-width: 800px;">
                Perjalanan transformasi dari TPQ sederhana menjadi lembaga pendidikan Islam yang komprehensif
            </p>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="history-timeline">
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h4>1998: Awal Perjalanan</h4>
                            <p>Pendirian TPQ Assalam, mengawali misi pendidikan dengan sistem mengaji tradisional.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h4>2000: Madrasah Diniyah</h4>
                            <p>Pengembangan sistem pembelajaran menjadi Madrasah Diniyah Assalam, dengan fokus pada pengajaran kitab-kitab Salaf yang terkoordinasi.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h4>2002: Program Wajib Belajar</h4>
                            <p>Adopsi program wajib belajar 9 tahun, dimulai dari tingkat dasar. Berkomitmen pada prinsip "Ta'awun alal birri" untuk mencerdaskan kehidupan bangsa.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h4>2003: Madrasah Tsanawiyah</h4>
                            <p>Didirikan Madrasah Tsanawiyah Assalam untuk memenuhi kebutuhan masyarakat akan lembaga pendidikan formal.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h4>2006: SMK Assalam</h4>
                            <p>Pembukaan SMK Assalam berbasis pesantren dengan program keahlian Teknik Komputer dan Informatika.</p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h4>Visi Berkelanjutan</h4>
                            <p>Fokus pada pengembangan metode pembelajaran inovatif, khususnya dalam terjemah dan pemahaman Al-Qur'an, dengan tetap mempertahankan tradisi lama yang baik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.history-timeline {
    position: relative;
    padding-left: 50px;
}

.timeline-item {
    position: relative;
    padding-bottom: 30px;
    border-left: 2px solid #007bff;
    margin-bottom: 20px;
}

.timeline-item:last-child {
    border-left: none;
}

.timeline-marker {
    position: absolute;
    left: -57px;
    top: 0;
    width: 16px;
    height: 16px;
    background: #007bff;
    border-radius: 50%;
}

.timeline-content {
    padding-left: 30px;
}

.timeline-content h4 {
    color: #007bff;
    margin-bottom: 10px;
}

.timeline-content p {
    color: #6c757d;
}
</style>

<!--========================== Visi Misi Section ============================-->
<section id="visi-misi" class="py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h3 class="section-title">Visi & Misi</h3>
            <p class="section-description text-muted mx-auto" style="max-width: 700px;">
                Terciptanya Life Skill yang handal didukung IPTEK dan IMTAQ yang berwawasan Islami
            </p>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="icon-container mb-3">
                            <i class="fas fa-eye text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="card-title mb-3">Visi</h4>
                        <p class="card-text text-muted">
                            "Mewujudkan generasi dengan keterampilan hidup (life skill) yang unggul, didukung oleh penguasaan Ilmu Pengetahuan dan Teknologi (IPTEK) serta Iman dan Taqwa (IMTAQ) yang berlandaskan nilai-nilai Islami."
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="icon-container mb-3">
                            <i class="fas fa-bullseye text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="card-title mb-3">Misi</h4>
                        <ul class="list-unstyled text-muted text-left">
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-primary mr-2"></i>
                                Menyelenggarakan pendidikan Islam yang berkualitas dan komprehensif
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-primary mr-2"></i>
                                Membina karakter Islami berdasarkan Al-Qur'an dan As-Sunnah
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-primary mr-2"></i>
                                Mengembangkan potensi santri dalam bidang akademik dan non-akademik
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-primary mr-2"></i>
                                Mempersiapkan santri untuk menjadi pemimpin masa depan
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-primary mr-2"></i>
                                Menjalin kerjasama dengan berbagai pihak untuk pengembangan pendidikan
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.icon-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 1rem;
}

.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
}

.list-unstyled li {
    display: flex;
    align-items: center;
}

.list-unstyled i {
    margin-right: 10px;
}
</style>

<!--========================== Fasilitas Section ============================-->
<section id="fasilitas" class="py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h3 class="section-title">Fasilitas Pondok</h3>
            <p class="section-description text-muted mx-auto" style="max-width: 700px;">
                Mendukung kenyamanan belajar dan kehidupan santri dengan fasilitas komprehensif
            </p>
        </div>

        <div class="row">
            {{-- Existing Facilities --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-mosque text-primary"></i>
                    </div>
                    <h4 class="facility-title">Masjid</h4>
                    <p class="facility-description">
                        Pusat kegiatan ibadah dan pembelajaran Al-Qur'an dengan kapasitas besar dan fasilitas modern.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-bed text-primary"></i>
                    </div>
                    <h4 class="facility-title">Asrama</h4>
                    <p class="facility-description">
                        Asrama putra dan putri nyaman, terpisah, dengan fasilitas pendukung kenyamanan santri.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-chalkboard-teacher text-primary"></i>
                    </div>
                    <h4 class="facility-title">Ruang Belajar</h4>
                    <p class="facility-description">
                        Ruang kelas modern dengan fasilitas pembelajaran lengkap untuk proses belajar mengajar.
                    </p>
                </div>
            </div>

            {{-- New Facilities --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-first-aid text-primary"></i>
                    </div>
                    <h4 class="facility-title">Poskestren</h4>
                    <p class="facility-description">
                        Pusat kesehatan pesantren dengan layanan medis dasar dan tenaga kesehatan profesional.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-store text-primary"></i>
                    </div>
                    <h4 class="facility-title">Kopontren</h4>
                    <p class="facility-description">
                        Koperasi pesantren yang menyediakan kebutuhan santri dan mendukung kemandirian ekonomi.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-home text-primary"></i>
                    </div>
                    <h4 class="facility-title">Panti Asuhan</h4>
                    <p class="facility-description">
                        Tempat tinggal dan pembinaan untuk anak-anak yatim dan kurang mampu dengan perhatian penuh.
                    </p>
                </div>
            </div>

            {{-- Other Existing Facilities --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-laptop text-primary"></i>
                    </div>
                    <h4 class="facility-title">Laboratorium</h4>
                    <p class="facility-description">
                        Laboratorium komputer, bahasa, dan sains lengkap untuk menunjang pembelajaran modern.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-futbol text-primary"></i>
                    </div>
                    <h4 class="facility-title">Fasilitas Olahraga</h4>
                    <p class="facility-description">
                        Lapangan olahraga multifungsi untuk aktivitas fisik dan pengembangan bakat santri.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="facility-card">
                    <div class="facility-icon">
                        <i class="fas fa-book text-primary"></i>
                    </div>
                    <h4 class="facility-title">Perpustakaan</h4>
                    <p class="facility-description">
                        Perpustakaan dengan koleksi lengkap, dari kitab klasik hingga buku-buku modern.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.facility-card {
    background: white;
    border-radius: 10px;
    padding: 30px;
    text-align: center;
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.facility-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}

.facility-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.facility-title {
    margin-bottom: 15px;
    color: #333;
}

.facility-description {
    color: #6c757d;
    line-height: 1.6;
}
</style>
  
      <!--========================== Gallery Section ============================-->
     <section id="gallery" class="py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h3 class="section-title">Galeri Santri</h3>
            <p class="section-description text-muted">Momen-momen Inspiratif di Pondok Pesantren Assalam</p>
        </div>

        <div class="row gallery-grid">
            @php
                $galleryImages = [
                    '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', 
                    '8.jpg', '9.jpg', '10.jpg', '11.jpg', '12.jpg', '13.jpg', 
                    '14.jpg', '15.jpg','18.jpg', '19.jpg', 
                ];
            @endphp

            @foreach($galleryImages as $image)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="gallery-item">
                        <img 
                            src="{{asset('user/images/gallery/'.$image)}}" 
                            alt="Galeri Santri" 
                            class="img-fluid rounded-lg shadow-sm"
                        >
                        <div class="gallery-overlay">
                            <a 
                                href="{{asset('user/images/gallery/'.$image)}}" 
                                data-lightbox="gallery" 
                                class="gallery-zoom"
                            >
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

<style>
.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.gallery-item img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-zoom {
    color: white;
    font-size: 24px;
    background: rgba(255,255,255,0.2);
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: background 0.3s ease;
}

.gallery-zoom:hover {
    background: rgba(255,255,255,0.4);
}

.section-description {
    max-width: 600px;
    margin: 0 auto;
}
</style>

{{-- Note: For the lightbox functionality, include these in your layout --}}
{{-- 
<link href="path/to/lightbox.min.css" rel="stylesheet">
<script src="path/to/lightbox.min.js"></script> 
--}}