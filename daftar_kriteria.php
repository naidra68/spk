<div class="content-dashboard">
    <div class="icon-kiri-dashboard">
        <i class="fas fa-bars text-left"></i>
    </div>
    <div class="kanan-dashboard">
        <h2>DAFTAR KRITERIA</h2>
        <p>Ini adalah halaman panel daftar kriteria</p>
    </div>
    <div class="kanan-tabel-konten">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><span>Daftar Kriteria</span></li>
                </ol>
            </nav>
        </div>
</div>
    <div class="panel-Dkriteria">
        <table class="table table-striped table-bordered" id="datatables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Kriteria</th>
                    <th>Nama Kriteria</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomer=1; ?>
                <?php $ambil_data = $conn->query("SELECT * FROM dkriteria"); ?>
                <?php while($hasil = $ambil_data->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $nomer; ?></td>
                    <td><?php echo $hasil['id_kriteria']; ?></td>
                    <td><?php echo $hasil['nama_kriteria']; ?></td>
                    <td>
                        <a href="index.php?page=ubahDkriteria&id=<?php echo $hasil['id_kriteria']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt">&nbsp;</i>Ubah</a>
                        <a href="index.php?page=hapusDkriteria&id=<?php echo $hasil['id_kriteria']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i>&nbsp;Hapus</a>
                    </td>
                </tr>
                <?php $nomer++; ?>
                <?php } ?>
            </tbody>
            <thead>
                <tr>
                    <th>No</th>
                    <th scope="col">ID Kriteria</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
        </table>
            <div class="p-3">
                <a class="btn btn-primary" href="index.php?page=tambahDkriteria"><i class="fas fa-plus"></i>&nbsp;Tambah</a>
            </div>

        </div>
    </div>
