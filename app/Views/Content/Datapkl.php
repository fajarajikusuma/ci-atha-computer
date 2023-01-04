<?= $this->extend('layoutAdmin/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <h3 class="text-info">Daftar Absensi Prakerin</h3>
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukan Keyword Pencarian.." name="cari">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                </div>
            </form>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-6" style="margin-top: 50px;">
            <form action="" method="POST">
                <button class="btn btn-info ml-3" type="submit" name="submit" style="float: right;">OK</button>
                <select type="submit" class="col-md-6 col-lg-2 col-sm-6 form-control" name="show" required style="float: right;">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                <label class="col-form-label mr-3" style="float: right;">Show</label>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="container-fluid">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success mb-3 mt-3" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-warning mb-3 mt-3" role="alert">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <form action="/data/deleteSelectedData" method="POST">
                        <table class="table table-bordered mt-4">
                            <thead class="table-success">
                                <tr>
                                    <th class="text-center">
                                        <button class="btn btn-danger" type="submit" name="deleteData">Delete</button>
                                    </th>
                                    <th>NO</th>
                                    <th>ID</th>
                                    <th>NAMA</th>
                                    <th>TANGGAL</th>
                                    <th>JAM</th>
                                    <th>KETERANGAN</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 + (10 * ($currentPage - 1)); ?>
                                <?php foreach ($pkl as $d) { ?>
                                    <tr>
                                        <td><input type="checkbox" name="id[]" value="<?= $d['id']; ?>" class="form-control"></td>
                                        <td><?= $i++; ?></td>
                                        <td><?= $d['id_siswa'] ?></td>
                                        <td><?= $d['nama_siswa'] ?></td>
                                        <td><?= $d['tgl'] ?></td>
                                        <td><?= $d['jam'] ?></td>
                                        <td><?= $d['ket'] ?></td>
                                        <td>
                                            <a href="/data/hapus/<?= $d['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin akan di hapus?')">Hapus</a>
                                            <a href="/data/edit/<?= $d['id']; ?>" class="btn btn-warning">Edit Data</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </form>

                    <?= $pager->links('absensi', 'page'); ?>
                    <div class="col-2 mx-auto">
                        <a href="/data/reset" class="btn btn-danger form-control mb-5 mt-3" onclick="return confirm('Yakin semua data akan di reset?')">Reset</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>