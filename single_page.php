<?php require "inc/conn.php";?> 
<!DOCTYPE html>
<html>
<head>
<title>KassaBro @ 2018</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3mobile.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>



<div class="container" >
  <header id="header">
    <div class="row">
      <div class="col-lg-12">
        
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
          <div class="header_top_right">    
          </div>
        </div>
      </div>
      
      <div class="col-lg-12">
        <section id="contentSection">
            <div class="row">
              <div class="col-lg-8">
                <div class="left_content">
                    <form class="#">
                    <?php 
                        $item = $_GET['item'];
                        $sql1 = "SELECT * FROM `tbl_upload` WHERE up_id = '".$item."'";//  
                        $result = mysqli_query($conn,$sql1);
                        while ($row = mysqli_fetch_assoc($result)) {
                          $name = $row['up_cat_name'];
                          $title = $row['up_title'];
                          $desc = $row['up_desc'];
                          $img = $row['up_img'];
                          $link = $row['up_link'];
                        echo "<div class='#'>";
                        echo "<img src='img/".$row['up_img']."' style='width:100%;'>";
                        echo "<h2>".$title."</h2></br>";echo $desc."</br>";
                        echo "<a href='#'>";
                        echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/".$link."' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>"."</br>";
                        echo "</a>";
                        echo "</div>";
                    }?>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                  <!--ASIDE -->
               <aside class="right_content">
			        <div class="single_sidebar">
            			<h2><span>Popular Post</span></h2>
            			<ul class="spost_nav">
                		<?php 
                  		$sql1 = "SELECT * FROM `tbl_upload` WHERE up_cat_id = 1 ORDER BY up_id  DESC LIMIT 6";  
                  		$result = mysqli_query($conn,$sql1);
                  		while ($row = mysqli_fetch_assoc($result)) {  
                    	$name = $row['up_cat_name'];
                    $title = $row['up_title'];
                    $desc = $row['up_desc'];
                    $img = $row['up_img'];
                    $link = $row['up_link'];
                  $cat = $row['up_cat_id'];
                  $item = $row['up_id'];
                  $url = "single_page.php?cat={$cat}&item={$item}";
                ?>
                <div class="media wow fadeInDown">
                  <?php 
                    echo "<a href='".$url."' class='media-left'>";
                    echo "<img src='img/".$row['up_img']."''>";  
                    echo "<a href='".$url."' class=''>";echo $title;?></a>
                </div>
                  <?php
                  }
                  ?>
                </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="#" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li class="cat-item"><a href="#">Sports</a></li>
                  <li class="cat-item"><a href="#">Fashion</a></li>
                  <li class="cat-item"><a href="#">Business</a></li>
                  <li class="cat-item"><a href="#">Technology</a></li>
                  <li class="cat-item"><a href="#">Games</a></li>
                  <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                  <li class="cat-item"><a href="#">Photography</a></li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.php

" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="single_page.php

" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.php

" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="single_page.php

" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.php

" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="single_page.php

" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.php

" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="single_page.php

" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Category Archive</span></h2>
            <select class="catgArchive">
              <option>Select Category</option>
              <option>Life styles</option>
              <option>Sports</option>
              <option>Technology</option>
              <option>Treads</option>
            </select>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div>
        </aside>
       	<!--ASIDE -->
        </div>
    </div>
    </section>
    <section id="newsSection">
        <div class="row">
           <div class="col-lg-12">
 	            <div class="latest_newsarea"> <span>Latest Post</span>
                    <ul id="ticker01" class="news_sticker">
                        <?php 
                        $sql1 = "SELECT * FROM `tbl_upload` WHERE up_cat_id = 1 ORDER BY up_id DESC LIMIT 8";  
                        $result = mysqli_query($conn,$sql1);
                        while ($row = mysqli_fetch_assoc($result)) {  
                           $name = $row['up_cat_name'];
                           $title = $row['up_title'];
                           $desc = $row['up_desc'];
                           $img = $row['up_img'];
                           $link = $row['up_link'];$cat = $row['up_cat_id'];
                           $item = $row['up_id'];
                           $url = "single_page.php?cat={$cat}&item={$item}";
                        ?>
                    <li><?php 
                    echo "<a href='".$url."' class='media-left'>";echo "<img src='img/".$row['up_img']."'>";echo $title;?></a></li>
                    <?php
                      }
                    ?>
                   </ul>
                <div class="social_area">
                    <ul class="social_nav">
                        <li class="facebook"><a href="https://www.facebook.com/kassabrosl/"></a></li>
                        <!--li class="twitter"><a href="#"></a></li>
                        <li class="flickr"><a href="#"></a></li>
                        <li class="pinterest"><a href="#"></a></li>
                        <li class="googleplus"><a href="#"></a></li>
                        <li class="vimeo"><a href="#"></a></li-->
                        <li class="youtube"><a href="https://www.youtube.com/channel/UCVfmHE_GxFPzDZaiVkZ_qBA"></a></li>
                        <li class="mail"><a href="#"></a></li>
                    </ul>
                </div>
           </div>
        </div>
    </div>
</section>
<section id="sliderSection">
    <div class="row">
        <div class="col-lg-8">
        </div>
    </div>
</section>
<footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>KDil Images</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="#">News</a></li>
              <li><a href="#">Health </a></li>
              <li><a href="#">Funny</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>Email:dilkasun071@gmail.com Mobile:+94702413501</p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2018 <a href="index.html">K.dil</a></p>
      <p class="developer">Developed By Wpfreeware</p>
    </div>
  </footer>
</div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>