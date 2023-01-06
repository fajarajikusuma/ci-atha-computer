<?= $this->extend('layoutAdmin/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card bg-secondary mt-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <h3 class="text-white mt-3">Ubah Absensi Prakerin</h3>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="col-lg-8 col-md-12 col-sm-12 mt-3" style="float: right;">
                                <form action="/data/editSimpan/<?= $absen['id']; ?>" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <?php date_default_timezone_set('Asia/Jakarta'); ?>
                                            <input type="date" class="form-control" name="tgl" value="<?= date('Y-m-d'); ?>">
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <input type="time" id="jam" class="form-control" name="jam" value="<?= $absen['jam'] ?>" required>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label text-white">ID SISWA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id" value="<?= $absen['id_siswa']; ?>" required minlength="6" maxlength="6">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label text-white">NAMA SISWA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $absen['nama_siswa']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colFormLabel" class="col-sm-2 col-form-label text-white">SEKOLAH</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="sekolah" id="sekolah" value="<?= $absen['sekolah']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ket" class="col-sm-2 col-form-label text-white">KETERANGAN</label>
                        <div class="col-sm-10">
                            <select value="<?= $absen['ket'] ?>" class="form-control" name="ket" required>
                                <option <?php if ($absen['ket'] == "Hadir") {
                                            echo "selected";
                                        } ?>>Hadir</option>
                                <option <?php if ($absen['ket'] == "Sakit") {
                                            echo "selected";
                                        } ?>>Sakit</option>
                                <option <?php if ($absen['ket'] == "Ijin") {
                                            echo "selected";
                                        } ?>>Ijin</option>
                                <option <?php if ($absen['ket'] == "Alpa") {
                                            echo "selected";
                                        } ?>>Alpa</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto mb-3">
                            <button type="submit" class="btn btn-primary form-control mt-3">SIMPAN</button>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto mb-3">
                            <a href="/data" class="btn btn-light form-control mt-3">KEMBALI</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>