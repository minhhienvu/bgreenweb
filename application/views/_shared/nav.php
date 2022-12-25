<div class="container-md text-center">
<a href="<?php echo BASEURL ?>">
  <img class="img-fluid" src="<?php echo BASEURL; ?>/public/assets/img/header.png" alt="banner">
</a>
</div>


<nav class="navbar navbar-expand-md site-nav sticky-top">
  <div class="container pt-2 pb-2">
  <a class="navbar-brand pl-2 pr-4 border-right" href="<?php echo BASEURL ?>">
    <i class="fa fa-home" aria-hidden="true"></i> <strong>Trang chủ</strong>
  </a>

  
  <div class="navbar-collapse">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown pl-2">
        <a class="nav-link" href="#" data-toggle="dropdown" id_ca='1'>Bình nước
          <i class="fa fa-angle-down d-inline" aria-hidden="true"></i>
        </a>
      </li>

      <li class="nav-item dropdown pl-2">
        <a class="nav-link" href="#" data-toggle="dropdown" id_ca='2'>Hộp cơm
          <i class="fa fa-angle-down d-inline" aria-hidden="true"></i>
        </a>
      </li>

      <li class="nav-item dropdown pl-2">
        <a class="nav-link" href="#" data-toggle="dropdown" id_ca='3'>Đồ cá nhân
          <i class="fa fa-angle-down d-inline" aria-hidden="true"></i>
        </a>
      </li>

      <li class="nav-item dropdown pl-2">
        <a class="nav-link" href="#" data-toggle="dropdown" id_ca='4'>Đồ khác
          <i class="fa fa-angle-down d-inline" aria-hidden="true"></i>
        </a>
      </li>
    </ul>


    <div class="form-inline pl-2">
      <input class="form-control mr-1" id="sreach" type="text" placeholder="Nhập tên sản phẩm" aria-label="Tìm kiếm">
      <button id="sreach-product" class="btn btn-outline-secondary p-2" type="button">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </div>

    <a class="nav-link pl-2" href="<?php echo BASEURL; ?>/cart/info" aria-label="Giỏ hàng">
      <i class="fa fa-shopping-cart d-inline" aria-hidden="true"></i> Giỏ hàng
    </a>
  </div>
  </div>
</nav>
