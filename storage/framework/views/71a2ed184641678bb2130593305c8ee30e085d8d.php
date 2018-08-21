<?php if(isset($pages) && is_object($pages)): ?>

<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($k%2 == 0): ?> <!-- якщо номер запису кратний 2 або рівний 0 тобто запис home -->
  <!--Hero_Section--> 
    <section id="<?php echo e($page->alias); ?>" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated"> 
             <?php echo $page->text; ?>

              <a href="<?php echo e(route('page', array('name' => 'home'))); ?>" class="read_more2">Read more</a> </div><!-- в якості ссилки передаємо ссилку на псевдонім маршура page і передаємо його параметру alias значення -->
          </div>
          <div class="col-lg-7 col-sm-5">
            <img src="img/<?php echo e($page->images); ?>" class="zoomIn wow animated" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <?php else: ?>
<!--Aboutus--> 
<section id="<?php echo e($page->alias); ?>"><!--Aboutus-->
  <div class="inner_wrapper">
    <div class="container">
      <h2><?php echo e($page->name); ?></h2>
      <div class="inner_section">
        <div class="row">
        <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="img/<?php echo e($page->images); ?>" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
          <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
            <div class=" delay-01s animated fadeInDown wow animated">
              <?php echo $page->text; ?>

            </div>
          <div class="work_bottom"> <span>Want to know more..</span> <a href="<?php echo e(route('page', array('name' => 'about'))); ?>" class="contact_btn">Contact Us</a> </div> <!-- в якості ссилки передаємо ссилку на псевдонім маршура page і передаємо його параметру alias значення -->      
          </div>
          
        </div> 
      </div>
    </div> 
    </div>
</section>

  <?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>

<?php if(isset($services) && is_object($services)): ?>

  <section id="service">
  <div class="container">
    <h2>Services</h2>
    <div class="service_wrapper">
    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($k == 0 || $k%3 == 0): ?>
      <div class="row <?php echo e(($k != 0) ? 'borderTop' : ''); ?>">
    <?php endif; ?>
        <div class = "col-lg-4 <?php echo e(($k%3> 0) ? 'borderLeft' : ''); ?> <?php echo e($k > 2 ? 'mrgTop': ''); ?>">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa <?php echo e($service->icon); ?>"></i></span> </div>
            <h3 class="animated fadeInUp wow"><?php echo e($service->name); ?></h3>
            <p class="animated fadeInDown wow"><?php echo e($service->text); ?></p>
          </div>
        </div>
        <?php if(($k + 1) %3 == 0): ?>
          </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  </section>
<?php endif; ?>
<!--Service-->
<?php if(isset($portfolios) && is_object($portfolios)): ?>

<section id="Portfolio" class="content"> 
  
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
      <h2>Portfolio</h2>
    </div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Filters -->
  <div class="portfolio"> 
 
    <?php if(isset($filters)): ?>
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5>
          </a></li>
        <?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a class="" href="#" data-filter=".<?php echo e($filter); ?>">
          <h5><?php echo e($filter); ?></h5>
          </a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
    <?php endif; ?>
    <!--/Portfolio Filters --> 
    
    <!-- Portfolio Wrapper -->
    <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper"> 
      <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   <?php echo e($portfolio->filter); ?> isotope-item">
          <div class="portfolio_img"> <img src="img/<?php echo e($portfolio->image); ?>"  alt="Portfolio 1"> </div>        
          <div class="item_overlay">
            <div class="item_info"> 
              <h4 class="project_name"><?php echo e($portfolio->name); ?></h4>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
    </div>
    <!--/Portfolio Wrapper --> 
    
  </div>
  <!--/Portfolio Filters -->
  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 
  
</section>
<!--/Portfolio --> 

<section class="page_section" id="clients"><!--page_section-->
  <h2>Clients</h2>
<!--page_section-->
<div class="client_logos"><!--client_logos-->
  <div class="container">
    <ul class="fadeInRight animated wow">
      <li><a href="javascript:void(0)"><img src="img/client_logo1.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/client_logo2.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/client_logo3.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/client_logo5.png" alt=""></a></li>
    </ul>
  </div>
</div>
</section>
<!--client_logos-->

<?php endif; ?>
<!-- Portfolio -->


<?php if(isset($peoples) && is_object($peoples)): ?>
<section class="page_section team" id="team"><!--main-section team-start-->
  <div class="container">
    <h2>Team</h2>
    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
    <div class="team_section clearfix">
    <?php $__currentLoopData = $peoples; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $people): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-03s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/<?php echo e($people->image); ?>" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-03s"><?php echo e($people->name); ?></h3>
        <span class="wow fadeInDown delay-03s"><?php echo e($people->position); ?></span>
        <p class="wow fadeInDown delay-03s"><?php echo e($people->text); ?></p>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>
<?php endif; ?>
<!--/Team-->