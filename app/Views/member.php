<main id="main" class="main">
    <div class="pagetitle">
    <h2>Tabel Karyawan</h2>
    <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
    </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Karyawan</h5>

        <a href= "<?= base_url('home/halaman_inputkry'.$value->id_krywn) ?>" class="btn btn-success">Tambah</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>No Handphone</th>
                    <th>Alamat</th>
                    <th>Poin</th>
                    <th>Poin</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mencret as $key => $value) {
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->nama ?></td>
                    <td><?= $value->nik ?></td>
                    <td><?= $value->username ?></td>
                    <td><?= $value->LEVEL ?></td>
                    <td>
                        <a href= "<?= base_url('home/edit_karyawan/'.$value->id_krywn) ?>" class="btn btn-warning">Edit</a>
                        <!-- <a href= "<?= base_url('home/hapus_barang/'.$value->id_user) ?>" class="btn btn-danger">Hapus</a> -->
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>