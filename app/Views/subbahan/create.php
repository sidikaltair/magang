<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<br><br><br>
<form>
    <div class="form-group">
        <label for="formGroupExampleInput">Nama_kertas</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Another label</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
</form>
<div class="container"></div>
<select class="custom-select">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>

<button type="submit" class="btn btn-primary my-1">Submit</button>
</form>
<?= $this->endSection(); ?>