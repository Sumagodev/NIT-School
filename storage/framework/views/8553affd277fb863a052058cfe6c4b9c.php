 <!-- left sidebar -->
 <?php $data_for_url = session('data_for_url');
    //   dd($data_for_url);
      ?>
      <style>
        .sidebar li .submenu{
    list-style: none;
    margin: 0;
    padding: 0;
    padding-left: 1rem;
    padding-right: 1rem;
}
        </style>
      <nav class="sidebar sidebar-offcanvas fixed-nav" id="sidebar">
          <ul class="nav">
              <li class="nav-item nav-profile">
                  <div class="nav-link">
                      
                      <div class="profile-name">
                          <p class="name">
                              Welcome <b><?php echo e(session()->get('f_name')); ?> <?php echo e(session()->get('m_name')); ?> <?php echo e(session()->get('l_name')); ?></b>
                          </p>
                          <p class="designation">
                          <?php echo e(session()->get('role_name')); ?>

                          </p>                      </div>
                  </div>
              </li>
              <li
              class="<?php echo e(request()->is('dashboard*')
                    ? 'nav-item active' : 'nav-item'); ?>">
                  <a class="<?php echo e(request()->is('dashboard*')
                                    ? 'nav-link active' : 'nav-link'); ?>" href="<?php echo e(route('/dashboard')); ?>">
                      <i class="fa fa-home menu-icon"></i>
                      <span class="menu-title">Dashboard</span>
                  </a>
              </li>    
              
             

             
                  <li class="<?php echo e(request()->is('list-role*')
                    ? 'nav-item active' : 'nav-item'); ?>">
                      <a class="<?php echo e(request()->is('list-role*')
                                    ? 'nav-link active' : 'nav-link'); ?>" data-toggle="collapse" href="#master" aria-expanded="false"
                          aria-controls="master">
                          <i class="fa fa-th-large menu-icon"></i>
                          <span class="menu-title">Area</span>
                          <i class="menu-arrow"></i>
                      </a>
                      <div class="collapse" id="master">
                          <ul class="nav flex-column sub-menu">
                              
                                  <li class="nav-item d-none d-lg-block"><a class="<?php echo e(request()->is('list-district*')
                                    ? 'nav-link active' : 'nav-link'); ?>"
                                          href="<?php echo e(route('list-district')); ?>">District</a></li>
                              
                                  <li class="nav-item d-none d-lg-block"><a class="<?php echo e(request()->is('list-taluka*')
                                    ? 'nav-link active' : 'nav-link'); ?>"
                                          href="<?php echo e(route('list-taluka')); ?>">Taluka</a></li>
                              
                                  <li class="nav-item d-none d-lg-block"><a class="<?php echo e(request()->is('list-village*')
                                    ? 'nav-link active' : 'nav-link'); ?>"
                                          href="<?php echo e(route('list-village')); ?>">Village</a></li>
                              
                              

                          </ul>
                      </div>
                  </li>
         


        <li class="<?php echo e(request()->is('list-users*')
            ? 'nav-item active' : 'nav-item'); ?>">
            <?php $currenturl = Request::url(); ?>
              <a class="nav-link" href="<?php echo e(route('list-users')); ?>">
                  <i class="fas fa-user menu-icon"></i>
                  <span class="menu-title">Distributor Management</span>
              </a>
          </li>
             <li class="<?php echo e(request()->is('list-gramsevak-tablet-distribution*')
                ? 'nav-item active' : 'nav-item'); ?>">
                <?php $currenturl = Request::url(); ?>
                <a class="nav-link" href="<?php echo e(route('list-gramsevak-tablet-distribution')); ?>">
                    <i class="fas fa-file-alt fa-lg menu-icon"></i>
                    <span class="menu-title">Tablet Distribution</span>
                </a>
            </li>
          
           
 
      
          </ul>
      </nav>
<!-- partial -->
 
      <script>
       
      </script><?php /**PATH E:\xampp\htdocs\egs_tablet_watap\resources\views/admin/layout/sidebar.blade.php ENDPATH**/ ?>