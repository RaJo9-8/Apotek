<main id="main" class="main">
    <div class="pagetitle">
    <h2>Tabel Barang</h2>
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
          <h5 class="card-title">Datatables</h5>

        <!-- <a href= "<?= base_url('home/halaman_inputbrg'.$value->id_brg) ?>" class="btn btn-success">Input</a> -->
        <table class="table datatable">
            <thead>
                <tr>
                    <th>no</th>
                    <th>Nama obat</th>
                    <th>Kode obat</th>
                    <th>Stok</th>
                    <th>a</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mencret as $key => $value) {
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->nama_obat ?></td>
                    <td><?= $value->kode_obat ?></td>
                    <td><?= $value->stok ?></td>
                    <td>
                        <a href= "<?= base_url('home/edit_barang/'.$value->id_brg) ?>" class="btn btn-warning">Edit</a>
                        <!-- <a href= "<?= base_url('home/hapus_barang/'.$value->id_brg) ?>" class="btn btn-danger">Hapus</a> -->
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>