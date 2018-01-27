<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Final Year Project</a>
    </div>
    <ul class="nav navbar-nav">
      
      <li><a href="profile.php">Profile</a></li>
      <li><a href="displayProposalfS.php">Proposals</a></li>
      <li><a href="#">Projects</a></li>
      
      <li><a href="#">About</a></li>
    </ul>
      <div class="logout">
         <!--  <p style="text-align:;">Reazul</p> -->
          
            <?php 

              if(isset($_SESSION['user'])) {
                
                echo '<span style="color: black;padding: 0 8px 0 0;">'.$_SESSION['user'].'</span>';
                echo '<a href="logout.php">Logout</a>';
              } else { ?>

              <a href="login.html">Login</a>

              <?php }
              ?>


         
    </div>
  </div>
</nav>