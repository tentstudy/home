<section class="menu-header top">
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-3">
            <div class="logo">
                <a href="index.php"><img src="/images/logo.png" alt="" /></a>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-9">
            <nav id="desktop-menu">
                <ul class="sf-menu" id="navigation">
                    <li class="current"><a href="/"><i class="fa fa-home"></i><?php s('home') ?></a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Khóa học</a>
                        <ul class="dropdown-menu">
                            <li><a href="/web-class/">Web Development</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact.php"><i class="fa fa-envelope fa-fw"></i><?php s('contact') ?></a></li>
                    <?php if (empty($_COOKIE['name']) || empty($_COOKIE['id'])): ?>
                    <li><a href="/login.php?login_with_facebook">Đăng Nhập</a></li>
                    <?php else: ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_COOKIE['name'] ?></a>
                        <ul class="dropdown-menu">
                            <li><a href="/logout.php">Logout</a></li>
                        </ul>
                    </li>
                    <?php endif ?>
                    
                </ul>
            </nav>
        </div>
    </div>
</section>