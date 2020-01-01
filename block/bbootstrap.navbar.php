<?php
/**             
* @package BBootstrap - bbootstrap.navbar.php
* @author Frank Cherry
* @copyright (c) 2019 Frank Cherry
* @creationDate 2019.07.19
* @developers 
* @lastRevision 2019.12.25
* @version BBootstrap v.0.0.1
* @license MIT License
**/

class bbootstrap_navbar extends BBootstrap {
	
	
	function navbar00(array $item, $brand, $brandCode='') {
		//if ($this->root == '') {$this->_construct();} 
		?>

<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-custom" data-spy="affix">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll col-lg-3">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
				<?php
		$html = '
                <a class="navbar-brand" href="./index.php">					
					<img src="http://bbootstrap.com/img/logos/navbar-brand-bbootstrap.png" alt="-">
					<span>'.$brand.'</span>
				</a>		
		
		';
		echo $html;
				
				?>
				

				<div class="navbar-slogan"><?php echo $brandCode; ?></div>
            </div>

            <!-- Toggling list content -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>                                       
					<?php
					for ($n=0; $n < count($item); $n++){ 
						//$title = substr($item[$n]["title"],0);
						//$link =;
						if ( substr($item[$n]["label"],0,5) == "link:") {
							$label = substr($item[$n]["label"],5);
							$target = ''; 
						}
						elseif ( substr($item[$n]["label"],0,5) == "http:") {
							$label = substr($item[$n]["label"],5);
							$target = ' target="_blank"'; 
						}
						else {							
							$label = "#".substr($item[$n]["label"],0);
							$target = '';
						}					
						?>
						<li class="page-scroll">
							<a href="<?php echo $label; ?>"<?php echo $target; ?>><?php echo (substr($item[$n]["title"],0)); ?></a>
						</li>							
					<?php }		
					?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<!--// Navigation -->				
	<?php }
	
	function navbar00_(array $item, $brand, $brandCode='') { ?>

<!-- Navigation navbar-default -->
    <nav id="mainNav" class="navbar navbar-custom" data-spy="affix">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll col-lg-3">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">					
					<img src="http://bbootstrap.com/img/logos/navbar-brand-bbootstrap.png" alt="-">
					<span><?php echo $brand; ?></span>
				</a>
				<div class="navbar-slogan"><?php echo $brandCode; ?></div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse col-lg-9" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>                                       
					<?php
					for ($n=0; $n < count($item); $n++){ 
						//$title = substr($item[$n]["title"],0);
						//$link =;
						if ( substr($item[$n]["label"],0,5) == "link:") {
							$label = substr($item[$n]["label"],5);
							$target = ' target="_blank"'; 
						}
						else {							
							$label = "#".substr($item[$n]["label"],0);
							$target = '';
						}					
						?>
						<li class="page-scroll">
							<a href="<?php echo $label; ?>"<?php echo $target; ?>><?php echo (substr($item[$n]["title"],0)); ?></a>
						</li>							
					<?php }		
					?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<!--// Navigation -->	
	<?php
	}
		
	function navbar01() { ?>

<!-- navbar01 bootstrap -->
	<nav class="navbar navbar-custom">
	  <a class="navbar-brand" href="#">
		<img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
		Bootstrap
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
		  <li class="nav-item active">
			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Features</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Pricing</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link disabled" href="#">Disabled</a>
		  </li>
		</ul>
	  </div>
	</nav>          
<!--// navbar01 bootstrap  -->
	<?php }
	
	function navbar02() {}
   
   
}
?>