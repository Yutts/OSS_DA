if(isset($_SESSION["username"])){
  echo '<li class="sidebar-header">QUẢN LÝ</li>';
  echo '    <li>';
  echo '      <a href="user.php">';
  echo '        <i class="fa fa-users"></i> <span>Người dùng</span>';
  echo '      </a>';
  echo '    </li>';

  echo '    <li>';
  echo '      <a href="order.php">';
  echo '        <i class="fa fa-building-o"></i> <span>Đơn hàng</span>';
  echo '      </a>';
  echo '    </li>';

  echo '    <li>';
  echo '      <a href="product.php">';
  echo '        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Sản phẩm</span>';
  echo '      </a>';
  echo '    </li>';

  echo '    <li>';
  echo '      <a href="productcatalog.php">';
  echo '        <i class="fa fa-th"></i> <span>Danh mục sản phẩm</span>';
  echo '      </a>';
  echo '    </li>';

  echo '    <li>';
  echo '      <a href="post.php">';
  echo '        <i class="fa  fa-list-alt"></i> <span>Bài viết</span>';
  echo '      </a>';
  echo '    </li>';


  echo '   <li>';
  echo '      <a href="postcatalog.php">';
  echo '        <i class="zmdi zmdi-grid"></i> <span>Danh mục bài viết</span>';
  echo '      </a>';
  echo '    </li>';
}