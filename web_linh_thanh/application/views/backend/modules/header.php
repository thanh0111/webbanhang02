<header class="main-header">
    <a href="<?php echo base_url()?>admin" class="logo">
        <span class="logo-lg">Xin chào Admin</span>
    </a>
    <nav class="navbar navbar-static-top" style="height: 52px">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav" style="height: 52px;  padding: 1px">
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-bell-o"></i>
                      
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                        <ul class="menu">
                          <li>
                            <a href="#">
                              <i class="fa fa-users text-aqua"></i>
                              <?php echo $this->Morders->orders_count_header_not();?> 
                              Đơn hàng chưa duyệt
                          </a>
                      </li>
                  </ul>
              </li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 
                      <?php echo $this->Morders->orders_count_header();?> 
                      Đơn hàng đang giao
                  </a>
              </li>
          </ul>
      </li>
      <li class="footer"><a href="<?php echo base_url() ?>admin/orders">Xem</a></li>
  </ul>
</li>
<li style="height: 52px">
    
</li>
<?php 
$image='';
if($user['img']){
    $image=$user['img'];
}else{
    $image='user.png';
}
?>
<li class="dropdown user user-menu" style="height: 52px; padding: 0px">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="public/images/admin/<?php echo $image ?>" class="user-image" alt="User Image">
        <span class="hidden-xs"><?php echo $user['fullname'] ?></span>
    </a>
    <ul class="dropdown-menu">
        <li class="user-header">
            <img src="public/images/admin/<?php echo $image ?>" class="img-circle" alt="User Image">
            <p><?php echo $user['fullname'] ?><small><?php echo $user['phone'] ?></small></p>
        </li>
        <li class="user-footer">
            <div class="pull-left">
                <a href="<?php echo base_url()?>admin/useradmin/update/<?php echo $user['id'] ?>" class="btn btn-default btn-flat">Chi tiết</a>
            </div>
            <div class="pull-right">
                <a href="admin/user/logout.html" class="btn btn-default btn-flat">Đăng xuất</a>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
</nav>
</header>