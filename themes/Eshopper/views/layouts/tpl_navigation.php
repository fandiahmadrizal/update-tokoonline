<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +6289667917114</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> fandiahmadrizal@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								
							</div>
							
							<div class="btn-group">
								
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=pelanggantbl/register"><i class="fa fa-user"></i> Sign Up</a></li>
								<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=pelanggantbl/check""><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=pelanggantbl/cart&id=<?php echo Yii::app()->user->name;?>"><i class="fa fa-shopping-cart"></i> Cart  </a></li>
								<?php if (Yii::app()->user->isGuest) {?>
								<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/login"><i class="fa fa-lock"></i> Login</a></li>
								<?php } else { ?>
								<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/logout"><i class="fa fa-eject"></i><?php echo Yii::app()->user->name;?> Logout</a></li>
								<?php }?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/index" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=barangtbl/tampil">Products</a></li>
										<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=pelanggantbl/check">Checkout</a></li> 
										<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=pelanggantbl/cart&id=<?php echo Yii::app()->user->name;?>"></i> Cart  </a></li>
										<?php if (Yii::app()->user->isGuest) {?>
										<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/login"></i> Login</a></li>
										<?php } else { ?>
										<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/logout"><?php echo Yii::app()->user->name;?> Logout</a></li>
										<?php }?>
                                    </ul>
                                </li> 
								
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	