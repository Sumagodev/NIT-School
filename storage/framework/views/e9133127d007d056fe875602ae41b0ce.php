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
             
               
              
             
              


        
             
              

        <li class="<?php echo e(request()->is('products*')
            ? 'nav-item active' : 'nav-item'); ?>">
            <?php $currenturl = Request::url(); ?>
              <a class="nav-link" href="<?php echo e(route('products')); ?>">
                  <i class="fas fa-file menu-icon"></i>
                  <span class="menu-title">Product Master</span>
              </a>
          </li>
          <li class="<?php echo e(request()->is('devision-achievement*')
            ? 'nav-item active' : 'nav-item'); ?>">
            <?php $currenturl = Request::url(); ?>
              <a class="nav-link" href="<?php echo e(route('devision-achievement')); ?>">
                  <i class="nav-icon fas fa-list"></i>
                  <span class="menu-title">Devision Achievements</span>
              </a>
          </li>

          


           
          

          </ul>
      </nav>
<!-- partial -->
 
      <script>
       
      </script><?php /**PATH E:\xampp\htdocs\cet_project\resources\views/admin/layout/sidebar.blade.php ENDPATH**/ ?>