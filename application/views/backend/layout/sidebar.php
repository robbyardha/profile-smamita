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
             <span class="menu-header-text">Documentation</span>
         </li>
         <li class="menu-item <?php if ($this->uri->segment(1) == "documentation" || $this->uri->segment(1) == "Documentation") {
                                    echo "active";
                                } ?>">
             <a href="<?= base_url('documentation') ?>" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-coffee"></i>

                 <div data-i18n="Support">Documentation</div>
             </a>
         </li>

     </ul>
 </aside>
 <!-- / Menu -->