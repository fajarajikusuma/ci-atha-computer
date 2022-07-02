<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <div class="container-fluid">
                    <h3 class="text-info mt-3">Daftar Absensi Prakerin</h3>
                    <table class="table table-bordered">
                        <thead class="table-success">
                            <tr>
                                <?php $i = 1; ?>
                                <th>NO</th>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>TANGGAL</th>
                                <th>KETERANGAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pkl as $d) { ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $d['id_siswa'] ?></td>
                                    <td><?= $d['nama_siswa'] ?></td>
                                    <td><?= $d['tgl'] ?></td>
                                    <td><?= $d['ket'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <script>
                        window.print();
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>