 <!-- Menu -->

 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
     <div class="app-brand demo">
         <a href="#" class="app-brand-link">
             <img src="<?= base_url('assets/logo/logosmamitapolosbg.png') ?>" alt="" class="img-fluid mb-2">
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
             <i class="bx bx-chevron-left bx-sm align-middle"></i>
         </a>
     </div>

     <div class="menu-inner-shadow"></div>
     <?php if ($this->session->userdata('role_id') == 1) : ?>
         <ul class="menu-inner py-1">
             <!-- Dashboard -->
             <li class="menu-item <?php if ($this->uri->segment(1) == "dashboard" || $this->uri->segment(1) == "Dashboard") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('dashboard') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-home-circle"></i>
                     <div data-i18n="Analytics">Dashboard</div>
                 </a>
             </li>


             <li class="menu-header small text-uppercase">
                 <span class="menu-header-text">Master</span>
             </li>

             <li class="menu-item <?php if ($this->uri->segment(1) == "role" || $this->uri->segment(1) == "Role") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('role') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                     <div data-i18n="Basic">Role</div>
                 </a>
             </li>


             <li class="menu-item <?php if ($this->uri->segment(1) == "account" || $this->uri->segment(1) == "Account") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('account') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                     <div data-i18n="Basic">Account</div>
                 </a>
             </li>


             <li class="menu-item <?php if ($this->uri->segment(1) == "teams_be" || $this->uri->segment(1) == "Teams_be") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('teams_be') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                     <div data-i18n="Basic">Teams</div>
                 </a>
             </li>



             <!-- KURIKULUM -->
             <li class="menu-header small text-uppercase">
                 <span class="menu-header-text">Kurikulum</span>
             </li>
             <li class="menu-item <?php if ($this->uri->segment(1) == "kurikulum_be" || $this->uri->segment(1) == "Kurikulum_be") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('kurikulum_be/index') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-collection"></i>
                     <div data-i18n="Support">Kurikulum Profile</div>
                 </a>
                 <a href="<?= base_url('kurikulum_be/struktur') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-collection"></i>
                     <div data-i18n="Support">Kurikulum Struktur</div>
                 </a>
             </li>

             <!-- KESISWAAN -->
             <li class="menu-header small text-uppercase">
                 <span class="menu-header-text">Kesiswaan</span>
             </li>
             <li class="menu-item <?php if ($this->uri->segment(1) == "kesiswaan_be" || $this->uri->segment(1) == "Kesiswaan_be") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('kesiswaan_be/index') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-collection"></i>
                     <div data-i18n="Support">Kesiswaan Profile</div>
                 </a>
                 <a href="<?= base_url('kesiswaan_be/struktur') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-collection"></i>
                     <div data-i18n="Support">Kesiswaan Struktur</div>
                 </a>
             </li>


             <!-- SARPRAS -->
             <li class="menu-header small text-uppercase">
                 <span class="menu-header-text">Sarpras</span>
             </li>
             <li class="menu-item <?php if ($this->uri->segment(1) == "sarpras_be" || $this->uri->segment(1) == "Sarpras_be") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('sarpras_be/index') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-collection"></i>
                     <div data-i18n="Support">Sarpras Profile</div>
                 </a>
                 <a href="<?= base_url('sarpras_be/struktur') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-collection"></i>
                     <div data-i18n="Support">Sarpras Struktur</div>
                 </a>
                 <a href="<?= base_url('sarpras_be/fasilitas') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-collection"></i>
                     <div data-i18n="Support">Sarpras Fasilitas</div>
                 </a>
             </li>

             <!-- HUMAS -->
             <li class="menu-header small text-uppercase">
                 <span class="menu-header-text">Humas</span>
             </li>
             <li class="menu-item <?php if ($this->uri->segment(1) == "humas_be" || $this->uri->segment(1) == "Humas_be") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('humas_be/index') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-collection"></i>
                     <div data-i18n="Support">Humas Profile</div>
                 </a>
                 <a href="<?= base_url('humas_be/struktur') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-collection"></i>
                     <div data-i18n="Support">Humas Struktur</div>
                 </a>
             </li>

             <!-- ISMUBA -->
             <li class="menu-header small text-uppercase">
                 <span class="menu-header-text">Ismuba</span>
             </li>
             <li class="menu-item <?php if ($this->uri->segment(1) == "ismuba_be" || $this->uri->segment(1) == "Ismuba_be") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('ismuba_be/index') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-collection"></i>
                     <div data-i18n="Support">Ismuba Profile</div>
                 </a>
                 <a href="<?= base_url('ismuba_be/struktur') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-collection"></i>
                     <div data-i18n="Support">Ismuba Struktur</div>
                 </a>
             </li>


             <li class="menu-header small text-uppercase">
                 <span class="menu-header-text">Published News</span>
             </li>
             <li class="menu-item <?php if ($this->uri->segment(1) == "kategori" || $this->uri->segment(1) == "Kategori") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('kategori') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-category-alt"></i>
                     <div data-i18n="Basic">Kategori Berita</div>
                 </a>
             </li>

             <li class="menu-item <?php if ($this->uri->segment(1) == "berita" || $this->uri->segment(1) == "Berita") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('berita') ?>" class="menu-link">

                     <i class="menu-icon tf-icons bx bx-book-open"></i>
                     <div data-i18n="Basic">Berita</div>
                 </a>
             </li>
             <li class="menu-item <?php if ($this->uri->segment(1) == "Banner_header" || $this->uri->segment(1) == "banner_header") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('banner_header') ?>" class="menu-link">

                     <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                     <div data-i18n="Basic">Banner Header</div>
                 </a>
             </li>


             <li class="menu-header small text-uppercase">
                 <span class="menu-header-text">Configuration</span>
             </li>
             <li class="menu-item <?php if ($this->uri->segment(1) == "configuration" || $this->uri->segment(1) == "Configuration") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('configuration') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-collection"></i>
                     <div data-i18n="Support">Configuration</div>
                 </a>
             </li>

             <li class="menu-header small text-uppercase">
                 <span class="menu-header-text">Profile</span>
             </li>
             <li class="menu-item <?php if ($this->uri->segment(1) == "profile" || $this->uri->segment(1) == "Profile") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('profile') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-coffee"></i>

                     <div data-i18n="Support">Profile</div>
                 </a>
             </li>
         </ul>

     <?php elseif ($this->session->userdata('role_id') == 2) : ?>
         <ul class="menu-inner py-1">
             <!-- Dashboard -->
             <li class="menu-item <?php if ($this->uri->segment(1) == "dashboard" || $this->uri->segment(1) == "Dashboard") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('dashboard') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-home-circle"></i>
                     <div data-i18n="Analytics">Dashboard</div>
                 </a>
             </li>


             <li class="menu-header small text-uppercase">
                 <span class="menu-header-text">Published News</span>
             </li>
             <li class="menu-item <?php if ($this->uri->segment(1) == "kategori" || $this->uri->segment(1) == "Kategori") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('kategori') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-category-alt"></i>
                     <div data-i18n="Basic">Kategori Berita</div>
                 </a>
             </li>

             <li class="menu-item <?php if ($this->uri->segment(1) == "berita" || $this->uri->segment(1) == "Berita") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('berita') ?>" class="menu-link">

                     <i class="menu-icon tf-icons bx bx-book-open"></i>
                     <div data-i18n="Basic">Berita</div>
                 </a>
             </li>
             <li class="menu-item <?php if ($this->uri->segment(1) == "Banner_header" || $this->uri->segment(1) == "banner_header") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('banner_header') ?>" class="menu-link">

                     <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                     <div data-i18n="Basic">Banner Header</div>
                 </a>
             </li>

             <li class="menu-header small text-uppercase">
                 <span class="menu-header-text">Profile</span>
             </li>
             <li class="menu-item <?php if ($this->uri->segment(1) == "profile" || $this->uri->segment(1) == "Profile") {
                                        echo "active";
                                    } ?>">
                 <a href="<?= base_url('profile') ?>" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-coffee"></i>

                     <div data-i18n="Support">Profile</div>
                 </a>
             </li>



         </ul>
     <?php endif ?>

 </aside>
 <!-- / Menu -->