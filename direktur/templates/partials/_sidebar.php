<div class="site-menubar-body">
  <div>
    <div>
      <ul class="site-menu" data-plugin="menu">
        <li class="site-menu-category">Login as <?php echo $nama; ?></li>
        <li class="site-menu-item <?php if($current_page=='dashboard'){echo 'active';} ?>">
          <a class="animsition-link" href="?hal=dashboard">
                  <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                  <span class="site-menu-title">Dashboard</span>
              </a>
        </li>
        <li class="site-menu-item <?php if($current_page=='pegawai'){echo 'active';} ?>">
          <a class="animsition-link" href="?hal=pegawai">
                  <i class="site-menu-icon md-accounts-alt" aria-hidden="true"></i>
                  <span class="site-menu-title">Pegawai</span>
              </a>
        </li>
        <li class="site-menu-item <?php if($current_page=='sk_kerja'){echo 'active';} ?>">
          <a class="animsition-link" href="?hal=sk_kerja">
                  <i class="site-menu-icon md-file" aria-hidden="true"></i>
                  <span class="site-menu-title">SK Kerja</span>
              </a>
        </li>
        <li class="site-menu-item <?php if($current_page=='prestasi' or $current_page=='pilih_prestasi'){echo 'active';} ?>">
          <a class="animsition-link" href="?hal=prestasi">
                  <i class="site-menu-icon md-thumb-up" aria-hidden="true"></i>
                  <span class="site-menu-title">Prestasi</span>
              </a>
        </li>
        <li class="site-menu-item <?php if($current_page=='hukuman' or $current_page=='pilih_hukuman'){echo 'active';} ?>">
          <a class="animsition-link" href="?hal=hukuman">
                  <i class="site-menu-icon md-thumb-down" aria-hidden="true"></i>
                  <span class="site-menu-title">Hukuman</span>
              </a>
        </li>
      </ul>
    </div>
  </div>
</div>
