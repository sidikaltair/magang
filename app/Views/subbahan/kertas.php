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
                            <th scope="col">Nama_krts</th>
                            <th scope="col">Jenis_ivo</th>
                            <th scope="col">Jumlah_rim</th>
                            <th scope="col">gramature</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>


                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto est ut possimus. Possimus facilis accusamus in dolorem necessitatibus esse reprehenderit alias quas pariatur veritatis illum adipisci accusantium, expedita aut cupiditate.</p> -->
</body>

</html>
<?= $this->endSection(); ?>