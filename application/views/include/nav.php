<div class="scrollbar-sidebar">
  <div class="app-sidebar__inner">
    <ul class="vertical-nav-menu">
      <li class="app-sidebar__heading">Dashboards</li>
      <li>
        <a href="<?php echo base_url('master');?>" class="mm-active">
          <i class="metismenu-icon pe-7s-rocket"></i>
            <span><?php echo $this->session->userdata('username');?></span>
        </a>
      </li>
      <li class="app-sidebar__heading">Advertise</li>
      <li>
        <a href="#">
          <i class="metismenu-icon pe-7s-diamond"></i>
          Master
          <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
        </a>
        <ul>
          <li>
            <a href="<?php echo base_url('master/category_list');?>">
              <i class="metismenu-icon">
              </i>Category
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('master/country_list');?>">
              <i class="metismenu-icon">
              </i>Country
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('master/state_list');?>">
              <i class="metismenu-icon">
              </i>State
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('master/city_list');?>">
              <i class="metismenu-icon">
              </i>City
            </a>
          </li>
        </ul>
      </li>

    </ul>
  </div>
</div>