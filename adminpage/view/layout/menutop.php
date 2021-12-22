












<nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <?php
/*    
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
*/
    ?>
  </ul>
     

<?php
  session_start();
  if(isset($_SESSION["maqtv"]))
  {
    echo '<ul class="navbar-nav align-items-center right-nav-link">';
  echo '  <li class="nav-item">';
  echo '    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">';
  echo '      <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>';
  echo '    </a>';
  echo '    <ul class="dropdown-menu dropdown-menu-right">';
  echo '     <li class="dropdown-item user-details">';
  echo '      <a href="javaScript:void();">';
  echo '         <div class="media">';
  echo '           <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>';
  echo '          <div class="media-body">';
  echo '          <h6 class="mt-2 user-title"></h6>';
  echo '          <p class="user-subtitle">'.$_SESSION["tenqtv"].'</p>';
  echo '          </div>';
  echo '         </div>';
  echo '        </a>';
  echo '      </li>';
        
  echo '      <li class="dropdown-item"><a href="profile.php"><i class="zmdi zmdi-face"></i><span> Thông tin</span></a></li>';
  
  echo '      <li class="dropdown-divider"></li>';
  echo '      <li class="dropdown-item"><a href="logout.php"><i class="icon-power mr-2"></i><span> Đăng xuất</span></a></li>';
  echo '    </ul>';
  echo '  </li>';
  echo '</ul>';
  }
  else{
     echo '<ul class="navbar-nav align-items-center right-nav-link">';
  echo '  <li class="nav-item">';
  echo '    <a href="login.php" class="btn btn-outline-secondary " style="color: rgb(255 255 255 / 85%)">Đăng nhập</a>';
  echo '  </li>';
  echo '</ul>';
  }
 


  
?>


</nav>