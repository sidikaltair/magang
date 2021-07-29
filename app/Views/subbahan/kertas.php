<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<br><br>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <i class="fas fa-plus-square"></i> -->
                <a class="btn btn-outline-info mt-2" href="/CreateBtn/btnKertas">input Supplier</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
            <div class="col-lg-12 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id_kertas</th>
                            <th scope="col">tanggal_pemesanan</th>
                            <th scope="col">created_at</th>
                            <th scope="col">Nama_krts</th>
                            <th scope="col">Jenis_ivo</th>
                            <th scope="col">Jumlah_rim</th>
                            <th scope="col">ukuran</th>
                            <th scope="col">gramature</th>
                            <th scope="col">slug</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $i = 1; ?>
                        <?php if (is_array($kertas)) : ?>
                            <?php foreach ($kertas as $k) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $k['id_kertas']; ?></td>
                                    <td><?= $k['tanggal_pemesanan']; ?></td>
                                    <td><?= $k['created_at']; ?></td>
                                    <td><?= $k['Nama_krts']; ?></td>
                                    <td><?= $k['Jenis_ivo']; ?></td>
                                    <td><?= $k['jumlah_rim']; ?></td>
                                    <td><?= $k['ukuran']; ?></td>
                                    <td><?= $k['gramature']; ?></td>
                                    <td><?= $k['slug']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

</body>

</html>
<?= $this->endSection(); ?>