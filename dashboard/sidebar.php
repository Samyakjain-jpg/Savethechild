<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="from.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
      
            <ul class="nav nav-treeview" id="navigation">
                <li class="nav-item"
                      <?php if ($thisPage=="Show") echo " id=\"currentpage\""; ?>
                >
                <a href="show.php" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Website Form Data</p>
                </a>
              </li>
              <li class="nav-item"<?php if ($thisPage=="MainSlider") echo " id=\"currentpage\""; ?> >
                <a href="mainslider.php" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>Main Slider</p>
                </a>
              </li>
              <li class="nav-item" <?php if ($thisPage=="IndexTitle1") echo " id=\"currentpage\""; ?> >
                <a href="indextitle1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Explore Title 1</p>
                </a>
              </li>
              <li class="nav-item" <?php if ($thisPage=="Logotitle") echo " id=\"currentpage\""; ?>>
                <a href="logotitle.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo Title 2</p>
                </a>
              </li>
              <li class="nav-item" <?php if ($thisPage=="Fromindex") echo " id=\"currentpage\""; ?>>
                <a href="fromindex.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Title 3</p>
                </a>
              </li>
               <li class="nav-item" <?php if ($thisPage=="Journeyindex") echo " id=\"currentpage\""; ?>>
                <a href="journeyindex.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>JOURNEY OF HOPE 4</p>
                </a>
              </li>
                <li class="nav-item" <?php if ($thisPage=="FooterSlider") echo " id=\"currentpage\""; ?>>
                <a href="indexsliderfooter.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Footer Slider Index</p>
                </a>
              </li>
               <li class="nav-item" <?php if ($thisPage=="ourwork") echo " id=\"currentpage\""; ?>>
                <a href="ourwork.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Our Workk</p>
                </a>
              </li> 
                <li class="nav-item" <?php if ($thisPage=="someservice") echo " id=\"currentpage\""; ?>>
                <a href="someservice.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Some services</p>
                </a>
              </li>
                <li class="nav-item" <?php if ($thisPage=="Gallary") echo " id=\"currentpage\""; ?>>
                <a href="gallary.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallary</p>
                </a>
              </li>
               <li class="nav-item" <?php if ($thisPage=="Education") echo " id=\"currentpage\""; ?>>
                <a href="education.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Education</p>
                </a>
              </li>
                <li class="nav-item" <?php if ($thisPage=="Contact") echo " id=\"currentpage\""; ?>>
                <a href="contact.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact As</p>
                </a>
              </li>
                <li class="nav-item" <?php if ($thisPage=="FooterSliderr") echo " id=\"currentpage\""; ?>>
                <a href="footerslider.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Footer Sliderss</p>
                </a>
              </li>
            </ul>
          </li>
      
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>