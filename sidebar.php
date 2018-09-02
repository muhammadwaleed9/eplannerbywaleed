<!-- Sidebar -->
      
      <ul class="sidebar navbar-nav">
       <!-- User -->
          <?php 
        if($_SESSION['user']['type']=='User'){ ?>
          
        <li class="nav-item active">
          <a class="nav-link" href="myprofile.php">
            <i class="fa fa-user-circle"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mybooking.php">
            <i class="fas fa-fw fa-folder"></i>
            <span>My Bookings</span>
          </a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>New Offers </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dash_login.html">
            <i class="fas fa-fw fa-table"></i>
            <span>LogOut</span></a>
        </li>
        <hr>
        <?php } ?>

       <!-- Admin -->
            
            <?php 
        if($_SESSION['user']['type']=='Admin'){ ?>
          
        <li class="nav-item">
          <a class="nav-link" href="myprofile.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Profile </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Business For Approval</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>View Approve Business</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dash_login.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout</span></a>
        </li>
                    <?php } ?>  
        <!-- Admin End -->
        <hr>
         <!-- Business -->
              <?php 
        if($_SESSION['user']['type']=='Business'){ ?>
          
        <li class="nav-item">
          <a class="nav-link" href="myprofile.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Profile </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AddBusiness.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Add Business</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mybusiness.php">
            <i class="fas fa-fw fa-table"></i>
            <span>My Business</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Booking Schedule</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="createOffer.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Create Offers</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>My Offers</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>View My Clients</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout</span></a>
        </li>
   <?php } ?> 

      </ul>

