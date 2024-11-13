@if($data->isNotEmpty())
@foreach ($data as $pegawai)
<div class="container">
    <div class="mb-3">
        <label class="form-label mt-3">Nomor Sertifikat :
            {{ $pegawai->kode }}</label>
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Perusahaan :
            {{ $pegawai->namapt }}</label>
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat :
            {{ $pegawai->alamat }}</label>
    </div>

    <div class="mb-3">
        <label class="form-label">Kategori :
            {{ $pegawai->kategori }}</label>
    </div>

    <div class="mb-3">
        <label class="form-label">Ruang Lingkup :
            {{ $pegawai->ruanglingkup }}</label>
    </div>

    <div class="mb-3">
        <label class="form-label">Jumlah Lokasi :
            {{ $pegawai->jumlahlokasi }}</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Diterbitkan Tanggal:
            {{ $pegawai->diterbitkan }}</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Berlaku Mulai Tanggal :
            {{ $pegawai->berlaku }}</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Berakhir Tanggal :
            {{ $pegawai->berakhir }}</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Survailen Pertama :
            {{ $pegawai->surpertama }}</label>
    </div>
    <div class="mb-3">
        <label class="form-label">Survailen Kedua :
            {{ $pegawai->surkedua }}</label>
    </div>

    <a href="/dashboard" class="btn btn-primary">Back</a>

</div>
@endforeach

@else
<p>data not found</p>
@endif