<div class="site-menubar-body">
  <div>
    <div>
      <ul class="site-menu" data-plugin="menu">
        <li class="site-menu-category">Login as <?php echo $nama;?></li>
        <li class="site-menu-item <?php if($current_page=='dashboard'){echo 'active';} ?>">
          <a class="animsition-link" href="?hal=dashboard">
                  <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                  <span class="site-menu-title">Dashboard</span>
              </a>
        </li>
        <li class="site-menu-item <?php if($current_page=='user'){echo 'active';} ?>">
          <a class="animsition-link" href="?hal=user">
                  <i class="site-menu-icon md-accounts-alt" aria-hidden="true"></i>
                  <span class="site-menu-title">Users</span>
              </a>
        </li>
        <li class="site-menu-item has-sub <?php if($current_page=='master_jabatan' or $current_page=='master_pangkat' or $current_page=='master_unit_kerja' or $current_page=='master_lokasi'){echo 'active';} ?>">
          <a href="javascript:void(0)">
            <i class="site-menu-icon md-folder-outline" aria-hidden="true"></i>
            <span class="site-menu-title">Master</span>
            <span class="site-menu-arrow"></span>
          </a>
          <ul class="site-menu-sub">
            <li class="site-menu-item">
              <a class="animsition-link" href="?hal=master_jabatan">
                <span class="site-menu-title">Jabatan</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="?hal=master_unit_kerja">
                <span class="site-menu-title">Unit Kerja</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="?hal=master_pangkat">
                <span class="site-menu-title">Pangkat</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="?hal=master_lokasi">
                <span class="site-menu-title">Lokasi</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
