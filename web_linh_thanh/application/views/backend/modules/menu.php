<aside class="main-sidebar">

    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin">
                <i class="glyphicon glyphicon-list"></i> <span>Thống kê</span>
                </a>
            </li>
            <!-- <li class="header">QUẢN LÝ CỬA HÀNG</li> -->
            
            <li class="treeview">
                <a href="<?php echo base_url()?>admin/product">
                <i class="	glyphicon glyphicon-briefcase"></i><span>Sản phẩm</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url()?>admin/category">
                <i class="glyphicon glyphicon-cloud"></i><span>Loại sản phẩm</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url()?>admin/producer">
                <i class="glyphicon glyphicon-remove"></i><span>Nhà cung cấp</span>
                </a>
            </li>
            <!-- <li class="header">QUẢN LÝ BÁN HÀNG</li> -->
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/coupon">
                <i class="glyphicon glyphicon-thumbs-up"></i> <span>Mã giảm giá</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/contact">
                <i class="glyphicon glyphicon-envelope"></i>Liên hệ</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/content">
                    <i class="glyphicon glyphicon-list"></i><span>Tin tức</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/orders">
                <i class="glyphicon glyphicon-shopping-cart"></i> <span>Đơn hàng</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/customer">
                <i class="glyphicon glyphicon-user"></i><span>Khách hàng</span>
                </a>
            </li>
            <li class="treeview">
             <a href="<?php echo base_url() ?>admin/sliders">
             <i class="glyphicon glyphicon-picture"></i><span>Sliders</span>
            </a>
        </li>
        <!-- <li class="header">CÀI ĐẶT</li> -->
        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-cog"></i><span>Hệ thống</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active">
                    <a href="<?php echo base_url() ?>admin/configuration/update">
                        <i class="fa fa-cogs"></i> Cấu hình
                    </a>
                </li>
                <?php if($user['role'] == 1){
                echo  '<li>
                    <a href="'.base_url().'admin/useradmin">
                        <i class="fa fa-users"></i> Nhân viên
                    </a>
                </li>';
                } ?>
            </ul>
        </li>
        <li><a href="admin/user/logout.html"><i class="fa fa-sign-out text-red"></i> <span>Đăng xuất</span></a></li>
    </ul>
</section>
<!-- /.sidebar -->
</aside>