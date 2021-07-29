<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<br><br>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <i class="fas fa-plus-square"></i>
                <input class="btn btn-outline-info mt-2" href="#" type="button" value="Input data">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-4">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">id_kertas</th>
                            <th scope="col">tanggal_pemesanan</th>
                            <th scope="col">Created_at</th>
                            <th scope="col">Nama_krts</th>
                            <th scope="col">Jenis_ivo</th>
                            <th scope="col">Jumlah_rim</th>
                            <th scope="col">ukuran</th>
                            <th scope="col">gramature</th>
                            <th scope="col">slug</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kertas as $k) : ?>
                            <tr>
                                <th scope="row">1</th>
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
                    </tbody>
                </table>
            </div>
        </div>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto est ut possimus. Possimus facilis accusamus in dolorem necessitatibus esse reprehenderit alias quas pariatur veritatis illum adipisci accusantium, expedita aut cupiditate.</p> -->
</body>

</html>
<?= $this->endSection(); ?>