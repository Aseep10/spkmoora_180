@extends('layouts.ready.main')

@section('konten')
            <h4 class="page-title">Dashboard</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-stats card-warning">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="la la-users"></i>
                                    </div>
                                </div>
                                <div class="col-7 d-flex flex-column align-items-center">
                                    <div class="numbers">
                                        <p class="card-category">Data Alternatif</p>
                                        <h4 class="card-title">5</h4>
                                    </div>
                                    <!-- Tautan di bagian bawah -->
                                    <a href="{{ route('alternatifs.index') }}" class="mt-auto text-end text-white">>></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-stats card-success">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="la la-bar-chart"></i>
                                    </div>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="card-category">Data Kriteria</p>
                                        <h4 class="card-title">4</h4>
                                    </div>
                                    <a href="{{ route('kriterias.index') }}" class="mt-auto text-end text-white">>></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-stats card-danger">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="la la-newspaper-o"></i>
                                    </div>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="card-category">Matriks Keputusan</p>
                                        <h4 class="card-title">20</h4>
                                        <a href="{{ route('matriks_keputusan.index') }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                <div class="col-md-4">
                    <div class="card card-stats card-primary">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="la la-check-circle"></i>
                                    </div>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="card-category">Nilai Optimasi</p>
                                        <h4 class="card-title">20</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-stats card-info">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="la la-check-circle"></i>
                                    </div>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="card-category">Perangkingan</p>
                                        <h4 class="card-title">5</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-stats card-secondary">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="la la-check-circle"></i>
                                    </div>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="card-category">Matriks Normalisasi</p>
                                        <h4 class="card-title">20</h4>
                                        <a href=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sistem Pengambilan Keputusan</h4>
                            <p class="card-category">
                                Penerapan Metode MOORA dan Pengambilan Keputusan untuk
                                Penentuan Karyawan Terbaik</p>
                        </div>
                        <div class="card-body">
                            <p>Sistem pengambilan keputusan berbasis metode MOORA (Multi-Objective Optimization on the basis of Ratio Analysis) digunakan untuk menentukan karyawan terbaik secara objektif dan transparan. Metode ini memanfaatkan matriks keputusan yang menggabungkan bobot kriteria dan nilai performa karyawan. Dengan proses perhitungan yang terstruktur, sistem akan menghasilkan peringkat karyawan berdasarkan nilai akhir dari setiap alternatif. Sistem ini membantu perusahaan dalam membuat keputusan yang akurat dan adil, mengurangi bias subjektif dalam evaluasi kinerja karyawan.</p>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.themekita.com">
                            ThemeKita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Help
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://themewagon.com/license/#free-item">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright ml-auto">
                2018, made with <i class="la la-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a>
            </div>				
        </div>
    </footer>

@endsection

@push('javascript')
@endpush
