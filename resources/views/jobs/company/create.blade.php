@extends('layouts.main')

@section('title')
KerjaYuk | Create Job
@endsection

@section('content')
<!-- Main -->
<main>
    <section class="section-create-job">
        <div class="container">
            <div class="card card-body border-0">
                <div class="card-header text-center border-bottom-0 px-0">
                    <h5 class="text-title mb-3 font-weight-600">Tambah Lowongan</h5>
                    <img src="{{ url("img/illustration/company/logo-sociolla.jpg") }}" alt="Company Logo" width="150">
                </div>
                <form action="" method="">
                    <div class="form-group">
                        <label for="pekerjaan">Nama Pekerjaan:</label>
                        <input type="text" class="form-control" id="pekerjaan" placeholder="Nama Pekerjaan"
                            name="pekerjaan">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi:</label>
                        <input type="text" class="form-control" id="lokasi" placeholder="Lokasi" name="lokasi">
                    </div>
                    <div class="form-group">
                        <label for="jenis_pekerjaan">Jenis Pekerjaan:</label>
                        <select class="form-control" id="jenis_pekerjaan">
                            <option>Part-Time</option>
                            <option>Internship</option>
                            <option>Full-Time</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="min_gaji">Gaji:</label>
                        <div class="form-row">
                            <div class="col-6">
                                <input type="number" class="form-control" id="min_gaji" placeholder="Minimum"
                                    name="min_gaji">
                            </div>
                            <div class="col-6">
                                <input type="number" class="form-control" id="end_kerja" placeholder="Maximum"
                                    name="max_gaji">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start_kerja">Jam Kerja:</label>
                        <div class="form-row">
                            <div class="col-6">
                                <input type="time" class="form-control" id="start_kerja" placeholder="Mulai"
                                    name="start_kerja">
                            </div>
                            <div class="col-6">
                                <input type="time" class="form-control" id="max_gaji" placeholder="Selesai"
                                    name="end_kerja">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start_hari_kerja">Hari Kerja:</label>
                        <div class="form-row">
                            <div class="col-6">
                                <select class="form-control" id="start_hari_kerja">
                                    <option>Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jum'at</option>
                                    <option>Sabtu</option>
                                    <option>Minggu</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="end_hari_kerja" aria-placeholder="Yay">
                                    <option>Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jum'at</option>
                                    <option>Sabtu</option>
                                    <option>Minggu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tingkat_pekerjaan">Tingkat Pekerjaan:</label>
                        <select class="form-control" id="tingkat_pekerjaan">
                            <option>Pegawai</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kualifikasi">Kualifikasi:</label>
                        <select class="form-control" id="kualifikasi">
                            <option>S1</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pengalaman">Pengalaman Kerja:</label>
                        <select class="form-control" id="pengalaman">
                            <option>3 Tahun</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="informasi_perusahaan">Informasi Perusahaan:</label>
                        <input type="text" class="form-control" id="informasi_perusahaan"
                            placeholder="Informasi Perusahaan" name="informasi_perusahaan">
                    </div>
                    <div class="form-group">
                        <label for="tanggung_jawab">Tanggung Jawab:</label>
                        <textarea class="form-control" id="tanggung_jawab" rows="8"
                            placeholder="Tuliskan tanggung jawab pekerjaan..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="about_perusahaan">Tentang Perusahaan:</label>
                        <textarea class="form-control" id="about_perusahaan" rows="8"
                            placeholder="Tuliskan informasi perusahaan..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-orange text-white btn-block mb-2 mb-md-0">Pasang
                        Lowongan</button>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- End Main -->
@endsection