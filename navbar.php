<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="./index.php" class="nav-link <?php if ($current_page == "index.php") { ?>active<?php } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard Admin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./admin_kelembagaan.php" class="nav-link <?php if ($current_page == "admin_kelembagaan.php") { ?>active<?php } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kelembagaan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./mailbox.php" class="nav-link <?php if ($current_page == "mailbox.php") { ?>active<?php } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Surat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./aspirasi_admin.php" class="nav-link <?php if ($current_page == "aspirasi_admin.php") { ?>active<?php } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Aspirasi Warga</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./admin_SOTK.php" class="nav-link <?php if ($current_page == "admin_SOTK.php") { ?>active<?php } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>SOTK</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./admin_pengumuman.php" class="nav-link <?php if ($current_page == "admin_pengumuman.php") { ?>active<?php } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pengumuman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./admin_kades.php" class="nav-link <?php if ($current_page == "admin_kades.php") { ?>active<?php } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Profil Kades</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./admin_slide.php" class="nav-link <?php if ($current_page == "admin_slide.php") { ?>active<?php } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Slide LP</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./admin_informasi.php" class="nav-link <?php if ($current_page == "admin_informasi.php") { ?>active<?php } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Informasi Publik</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./admin_visi.php" class="nav-link <?php if ($current_page == "admin_visi.php") { ?>active<?php } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Admin_visi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./admin_sejarah.php" class="nav-link <?php if ($current_page == "admin_sejarah.php") { ?>active<?php } ?>">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Admin_sejarah</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>