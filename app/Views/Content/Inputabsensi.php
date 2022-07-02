<?= $this->extend('layoutAdmin/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success mb-3" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger mb-3" role="alert">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <div class="card bg-secondary mt-3">
                <div class="container-fluid">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-white mt-3">Form Absensi Prakerin</h3>
                            </div>
                            <div class="col-6">
                                <form action="/data/simpanData" method="POST">
                                    <?= csrf_field(); ?>
                                    <div class="row mx-auto">
                                        <?php date_default_timezone_set('Asia/Jakarta'); ?>
                                        <div class="col-6">
                                            <input type="date" class="form-control mt-3" name="tgl" value="<?= date('Y-m-d'); ?>">
                                        </div>
                                        <div class="col-6">
                                            <input type="time" class="form-control mt-3" name="jam" value="<?= date('H:i:s'); ?>">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="id" class="form-label text-white">ID SISWA</label>
                                <input type="text" class="form-control" id="id" name="id" required placeholder="Masukan Id Siswa" minlength="6" maxlength="6">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="id" class="form-label text-white">NAMA SISWA</label>
                                <input type="text" class="form-control" id="id" name="nama" required placeholder="Masukan Nama Siswa">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="id" class="form-label text-white">KETERANGAN</label>
                                <select class="form-control" name="ket" required>
                                    <option selected disabled>Pilih Salah Satu</option>
                                    <option>Hadir</option>
                                    <option>Sakit</option>
                                    <option>Ijin</option>
                                    <option>Alpa</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 mx-auto mb-3">
                            <button type="submit" class="btn btn-primary form-control mt-3">SIMPAN</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>