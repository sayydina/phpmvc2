<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Guru
            </button>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>guru/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari guru..." name="keyword" id="keyword" aria-describedby="button-addon" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <br><br>
    <h1>Daftar Guru</h1>
    <ul class="list-group">
        <?php foreach ($data['guru'] as $guru) : ?>
            <li class="list-group-item d-flex flex-row justify-content-between">
                <?= $guru['guru']; ?>
                <div class="d-flex gap-2">
                    <a href="<?= BASEURL; ?>guru/detail/<?= $guru['id'] ?>" class="badge text-bg-primary text-decoration-none float-right">detail</a>
                    <a href="<?= BASEURL; ?>guru/ubah/<?= $guru['id'] ?>" class="badge text-bg-success text-decoration-none float-right tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $guru['id']; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>guru/hapus/<?= $guru['id'] ?>" class="badge text-bg-danger text-decoration-none float-right" onclick="return confirm('apakah anda yakin ingin mengahapus guru yang bernama <?= $guru['guru'] ?>?')">hapus</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</div>
</div>

<!-- Modal -->
<div class=" modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Guru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>guru/tambah" method="post">
                    <input type="hidden" name="id" id="id">

                    <div class="mb-3">
                        <label for="guru" class="form-label">Guru: </label>
                        <input type="text" class="form-control" id="guru" name="guru">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="umur" class="form-label">Umur: </label>
                        <input type="number" class="form-control" id="umur" name="umur">
                    </div>
                    <select class="form-select mt-4 mb-4" id="guru" name="guru" aria-label="Default select example">
                        <option selected>Guru:</option>
                        <option value="10">Guru: 10</option>
                        <option value="11">Guru: 11</option>
                        <option value="12">Guru: 12</option>
                    </select>
                    <select class="form-select mt-4 mb-4" id="guru" name="guru" aria-label="Default select example">
                    <option selected>Guru:</option>
                        <option value="Rekayasa Perangkat Lunak">Guru: Rekayasa Perangkat
                            Lunak</option>
                        <option value="Desain Komunikasi Visual (1)">Guru: Desain Komunikasi
                            Visual (1)</option>
                        <option value="Desain Komunikasi Visual (2)">Guru: Desain Komunikasi
                            Visual (2)</option>
                        <option value="Bisnis Reatail">Guru: Bisnis Retail</option>
                        <option value="Manajemen Perkantoran">Guru: Manajemen Perkantoran
                        </option>
                    </select> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>