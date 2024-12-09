<main id="main" class="main">
    <div class="pagetitle">
    <h2>Tabel User</h2>
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
          <h5 class="card-title">User</h5>

        <a href= "<?= base_url('home/input_barang/'.$value->id_user) ?>" class="btn btn-success">Tambah</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mencret as $key => $value) {
                ?>
                <tr>
                    <!-- <td><?= $no++ ?></td> -->
                    <td><?= $value->username ?></td>
                    <td><?= $value->password ?></td>
                    <td><?= $value->level ?></td>
                    <td>
                        <a href= "<?= base_url('home/edit_barang/'.$value->id_user) ?>" class="btn btn-warning">Edit</a>
                        <a href= "<?= base_url('home/hapus_barang/'.$value->id_user) ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>