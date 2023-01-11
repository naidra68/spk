<div class="content-dashboard">
    <div class="icon-kiri-dashboard">
        <i class="fas fa-university text-left"></i>
    </div>
    <div class="kanan-dashboard">
        <h2>DAFTAR ALTERNATIF</h2>
        <p>Ini adalah halaman panel daftar alternatif</p>
    </div>
    <div class="kanan-tabel-konten">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><span>Daftar Alternatif</span></li>
                </ol>
            </nav>
        </div>
</div>
    <div class="panel-Dkriteria">
        <table class="table table-striped table-bordered" id="datatables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Alternatif</th>
                    <th>Nama Alternatif</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomer=1; ?>
                <?php $ambil_data = $conn->query("SELECT * FROM dalternatif"); ?>
                <?php while($hasil = $ambil_data->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $nomer; ?></td>
                    <td><?php echo $hasil['id_alternatif']; ?></td>
                    <td><?php echo $hasil['nama']; ?></td>
                    <td>
                        <a href="index.php?page=ubahDalternatif&id=<?php echo $hasil['id_alternatif']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt">&nbsp;</i>Ubah</a>
                        <a href="index.php?page=hapusDalternatif&id=<?php echo $hasil['id_alternatif']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i>&nbsp;Hapus</a>
                    </td>
                </tr>
                <?php $nomer++; ?>
                <?php } ?>
            </tbody>
            <thead>
                <tr>
                    <th>No</th>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
        </table>
            <div class="p-3">
                <a class="btn btn-primary" href="index.php?page=tambahDalternatif"><i class="fas fa-plus"></i>&nbsp;Tambah</a>
            </div>

        </div>
    </div>
