<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="/home/dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <?php
    if(session()->get('level')==1) {
     ?>

     <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="/home/user">
            <i class="bi bi-person-circle"></i><span>User</span>
          </a>
        </li>
        <li>
          <a href="/home/karyawan">
            <i class="bi bi-people-fill"></i><span>Karyawan</span>
          </a>
        </li>
        <li>
          <a href="/home/member">
            <i class="bi bi-people-fill"></i><span>Member</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->
  <?php } ?>

  <?php
  if(session()->get('level')==1 || session()->get('level')==2){
   ?>
   <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-coin"></i><span>Stok</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
          <a href="/home/obat">
            <i class="bi bi-bag"></i><span>Obat
            </span>
          </a>
        </li>
      <li>
        <a href="/home/barang_masuk">
          <i class="bi bi-bag-plus"></i><span>Obat Masuk</span>
        </a>
      </li>
      <li>
        <a href="/home/barang_keluar">
          <i class="bi bi-bag-dash"></i><span>Obat Keluar</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->
<?php } ?>

<?php
if (session()->get('level')==1 || session()->get('level')==4 || session()->get('level')==5 || session()->get('level')==2){
  ?>
  <li class="nav-item">
    <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Penjualan</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
      <li>
        <a href="/home/Laporanbm">
          <i class="bi bi-clipboard"></i><span>Transaksi</span>
        </a>
      </li>
      <li>
        <a href="/home/Laporanbm">
          <i class="bi bi-clipboard-plus"></i><span>Nota</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->
<?php } ?>
</ul>
</aside><!-- End Sidebar-->