<h3>Daftar mahasiswa</h3>
<!-- Button trigger modal -->
<?= flasher::flash()?>
<br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formMahasiswa">
    Form Tambah Mahasiswa
</button>
<br>
<br>

<ul class="list-group">
    <?php foreach ($data['mhs'] as $mhs) : ?>
        <li class="list-group-item">
            <?= $mhs['nama'] ?>
            <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge bg-primary justify-content-between align-items-center">Detail</a>
            <a href="<?= BASEURL ?>/mahasiswa/hapusDataMhs/<?= $mhs['id'] ?>" class="badge bg-danger justify-content-between align-items-center" onclick="return confirm('yakin?');" >Hapus</a>
            <a href="<?= BASEURL ?>/mahasiswa/editDataMhs/<?= $mhs['id'] ?>" class="badge bg-warning justify-content-between align-items-center">Edit</a>
        </li>
    <?php endforeach; ?>

</ul>

<!-- Modal -->
<div class="modal fade" id="formMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL?>/mahasiswa/tambahDataMhs" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama" placeholder="Tulisakan nama">
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP</label>
                        <input name="nrp" type="number" class="form-control" id="nrp" placeholder="Tuliskan NRP">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <select name="prodi" class="form-select" aria-label="Default select example">
                        <option selected>Prodi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Kedokteran">Kedokteran</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                    </select>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah data</button>
            </div>
            </form>
        </div>
    </div>
</div>