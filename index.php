<?php

include("path.php");
include(ROOT_PATH . "/app/database/db.php");

$posts = selectAll('posts', ['published' =>1]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project-1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2cb83bbf20.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- custom stylesheet file -->
    <link rel="stylesheet" href="../project-1/assets/style.css">
</head>
<body>

    <!-- navbar-start -->
   <?php include("app/includes/header.php"); ?>
   <?php include(ROOT_PATH . "/app/includes/messages.php"); ?> 

   
          <!-- Todo - header file-  -->

      <!-- navbar--end -->
      <div class="container-fluid head">
        <div class="post">
        The Blogg Post
       </div>
      <!-- <span class="float-i">Date-91-29</span> -->
      <div class="row">
        <div class="col-xl-4 qw">
         April 25, 2020
        </div>
        <div class="col-xl-4 er">
        Awaken the World to the next
        </div>
        <div class="col-xl-4 ty">
        Edition:U.S. & World|Regional
        </div>
      </div>
      
      <div class="line"></div>

      <div class="row">
     
    <span class="news">News</span>
    <span class="news">Coronavirus Updates</span>
    <span class="news">Outbreak</span>
    <span class="news">Cases</span>
    <span class="news">Covid-19 Victim</span>
    <span class="news">50,000 Deaths</span>
      </div>
      <div class="light-line"></div>
      <br> 
      <div class="light-line"></div>

      <!-- Main Content -->


        <div class="row">

        <!-- Left-container -->
     

          <div class="col-sm-5 subtext">
          <?php foreach ($posts as $post): ?>
            <a class="left-head" href="">
            <h1><?php echo substr($post['title'], 0, 500); ?></h1></a>
            <span class="left">By Rick Rojas and Richard Fausset</span>

            <p><?php echo html_entity_decode(substr($post['body'], 0, 1500)); ?></p>
             
   <hr>
   <?php endforeach; ?>
                           
   <div class="page-wrapper">
                                <!-- post-slide -->
                                <div class="post-slider">

                                    <h4 class="slider-title">Trending posts</h4>
                                            <i class="fas fa-chevron-left prev"></i>
                                            <i class="fas fa-chevron-right next"></i>

                                    <div class="post-wrapper">

                                      <div class="post">
                                        <img src="https://ichef.bbci.co.uk/news/624/cpsprodpb/C503/production/_112053405_apple2.jpg" alt="" class="slider-image">
                                          <div class="post-info">
                                            <div class="qwerty"><a href="single.html">One day your life will fly</a></div>
                                            <div class="qwe"> <i class="far fa-user qwert">POST</i>
                                              &nbsp;
                                              <i class="far fa-calendar qwert">Mat 2, 2020</i></div> 
                                          </div>
                                      </div>


                                      <div class="post">
                                        <img src="https://www.washingtonpost.com/resizer/sEAfXDgORub_b0r2IETvO0KSD_0=/1248x701/arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/CRNRIJU2MFCWNM43KTML4JJTFQ.jpg" alt="" class="slider-image">
                                          <div class="post-info">
                                            <div class="qwerty"><a href="single.html"> One day your life will fly </a></div>
                                             <div class="qwe"> <i class="far fa-user qwert">POST</i>
                                              &nbsp;
                                              <i class="far fa-calendar qwert">Mat 2, 2020</i></div>
                                          </div>
                                      </div>


                                      <div class="post">
                                        <img src="https://www.washingtonpost.com/resizer/KhEMnNbYOlV-OZET8r1-kmAZg1g=/480x270/d1i4t8bqe7zgj6.cloudfront.net/05-01-2020/t_f8da9b6cbb6f489783590580abfcd7a5_name_20200428_ParksRec_Reunion_still_2.jpg" alt="" class="slider-image">
                                          <div class="post-info">
                                            <div class="qwerty"><a href="single.html">One day your life will fly</a></div>
                                             <div class="qwe"> <i class="far fa-user qwert">POST</i>
                                              &nbsp;
                                              <i class="far fa-calendar qwert">Mat 2, 2020</i></div>
                                          </div>
                                      </div>

                                      <div class="post">
                                        <img src="https://www.washingtonpost.com/resizer/gcyDmjlgmfQOw-CFlLzMEaIcdXI=/1248x832/arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/PW74WMEGXAI6VANDS2IMTCARCE.jpg" alt="" class="slider-image">
                                          <div class="post-info">
                                            <div class="qwerty"><a href="single.html">One day your life will fly</a></div>
                                             <div class="qwe"> <i class="far fa-user qwert">POST</i>
                                              &nbsp;
                                              <i class="far fa-calendar qwert">Mat 2, 2020</i></div>
                                          </div>
                                      </div>

                                      <div class="post">
                                        <img src="https://ichef.bbci.co.uk/news/270/cpsprodpb/034B/production/_111234800_installation.g.jpg" alt="" class="slider-image">
                                          <div class="post-info">
                                            <div class="qwerty"><a href="single.html">One day your life will fly</a></div>
                                             <div class="qwe"> <i class="far fa-user qwert">POST</i>
                                              &nbsp;
                                              <i class="far fa-calendar qwert">Mat 2, 2020</i></div>
                                          </div>
                                      </div>

                                      
                                    </div>
                                </div>
                              </div>
         
          <!-- <a class="left-head" href="#">
          <h1>us official temper the world with tampeting the night of towards the bulk of text</h1> </a>
            <span class="left">By Rick Rojas and Richard Fausset</span>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas ipsa ipsam ab.
               Architecto nemo voluptatem quisquam, ducimus, 
              ipsum temporibus id quia harum, soluta voluptas molestias nihil laudantium suscipit minus.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo maiores sit totam exercitationem 
            corporis nisi esse consequuntur
             ea ratione id numquam tempore, vitae voluptate aut magni mollitia enim delectus! Dicta!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, at pariatur. Obcaecati dolores maiores assumenda placeat
             consequuntur, ipsam corrupti, 
            ad aliquam dolor hic libero culpa! Atque delectus cum cupiditate possimus!
            The openings triggered passionate criticism, some of it coming from residents and business owners and some from much higher places. Gov. Brian Kemp’s order for Georgia was criticized as premature this week by President Trump, who has generally expressed eagerness to open the American economy. In Atlanta, 
   .</p>
   <hr>

 
    <a class="left-head" href="#">
          <h1>us official temper the world with tampeting the night of towards the bulk of text</h1> </a>
            <span class="left">By Rick Rojas and Richard Fausset</span>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas ipsa ipsam ab.
               Architecto nemo voluptatem quisquam, ducimus, 
              ipsum temporibus id quia harum, soluta voluptas molestias nihil laudantium suscipit minus.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo maiores sit totam exercitationem 
            corporis nisi esse consequuntur
             ea ratione id numquam tempore, vitae voluptate aut magni mollitia enim delectus! Dicta!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, at pariatur. Obcaecati dolores maiores assumenda placeat
             consequuntur, ipsam corrupti, 
            ad aliquam dolor hic libero culpa! Atque delectus cum cupiditate possimus!
            The openings triggered passionate criticism, some of it coming from residents and business owners and some from much higher places. Gov. Brian Kemp’s order for Georgia was criticized as premature this week by President Trump, who has generally expressed eagerness to open the American economy. In Atlanta, 
   .</p>
   <hr>

   
    <a class="left-head" href="#">
          <h1>us official temper the world with tampeting the night of towards the bulk of text</h1> </a>
            <span class="left">By Rick Rojas and Richard Fausset</span>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas ipsa ipsam ab.
               Architecto nemo voluptatem quisquam, ducimus, 
              ipsum temporibus id quia harum, soluta voluptas molestias nihil laudantium suscipit minus.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo maiores sit totam exercitationem 
            corporis nisi esse consequuntur
             ea ratione id numquam tempore, vitae voluptate aut magni mollitia enim delectus! Dicta!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, at pariatur. Obcaecati dolores maiores assumenda placeat
             consequuntur, ipsam corrupti, 
            ad aliquam dolor hic libero culpa! Atque delectus cum cupiditate possimus!
            The openings triggered passionate criticism, some of it coming from residents and business owners and some from much higher places. Gov. Brian Kemp’s order for Georgia was criticized as premature this week by President Trump, who has generally expressed eagerness to open the American economy. In Atlanta, 
   .</p>
   <hr>

  
    <a class="left-head" href="#">
          <h1>us official temper the world with tampeting the night of towards the bulk of text</h1> </a>
            <span class="left">By Rick Rojas and Richard Fausset</span>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas ipsa ipsam ab.
               Architecto nemo voluptatem quisquam, ducimus, 
              ipsum temporibus id quia harum, soluta voluptas molestias nihil laudantium suscipit minus.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo maiores sit totam exercitationem 
            corporis nisi esse consequuntur
             ea ratione id numquam tempore, vitae voluptate aut magni mollitia enim delectus! Dicta!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, at pariatur. Obcaecati dolores maiores assumenda placeat
             consequuntur, ipsam corrupti, 
            ad aliquam dolor hic libero culpa! Atque delectus cum cupiditate possimus!
            The openings triggered passionate criticism, some of it coming from residents and business owners and some from much higher places. Gov. Brian Kemp’s order for Georgia was criticized as premature this week by President Trump, who has generally expressed eagerness to open the American economy. In Atlanta, 
   .</p>
   <hr>

    
    <a class="left-head" href="#">
          <h1>us official temper the world with tampeting the night of towards the bulk of text</h1> </a>
            <span class="left">By Rick Rojas and Richard Fausset</span>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas ipsa ipsam ab.
               Architecto nemo voluptatem quisquam, ducimus, 
              ipsum temporibus id quia harum, soluta voluptas molestias nihil laudantium suscipit minus.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo maiores sit totam exercitationem 
            corporis nisi esse consequuntur
             ea ratione id numquam tempore, vitae voluptate aut magni mollitia enim delectus! Dicta!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, at pariatur. Obcaecati dolores maiores assumenda placeat
             consequuntur, ipsam corrupti, 
            ad aliquam dolor hic libero culpa! Atque delectus cum cupiditate possimus!
            The openings triggered passionate criticism, some of it coming from residents and business owners and some from much higher places. Gov. Brian Kemp’s order for Georgia was criticized as premature this week by President Trump, who has generally expressed eagerness to open the American economy. In Atlanta, 
   .</p>
   <hr> -->
          </div>
         
          
          <div class="col-sm-2 subtext">
            <div class="updates">
              LIVE UPDATES 
            </div>
            <span class="sub-updates">Access to these updates</span>
            <div class="square"></div>
          

            <ul class="krishan">
              <li class=subb>
                 <div class="points"><?php echo date('F j, Y', strtotime($post['created_at']));?> </div>
                 
                 </li>
              <li>to from the best link and to all rhe ashion tools </li>
             
            </ul>
            <div class="square"></div>
            <a class="left-head" href="">
            <p>us official temper the world with tampeting the night of towards the bulk of text</p></a>

            <img width = '100%' src="https://www.washingtonpost.com/rw/WashingtonPost/Content/Epaper/2020-04-25/Ax1_module2.jpg" alt="">
              <hr>
            <div class="square"></div>
            
          

            <ul class="krishan">
              <li class=subb>
                 <div class="points">6:35 AM</div>
                 
                 </li>
              <li>to from the best link and to all rhe ashion tools </li>
             
            </ul>
            <div class="square"></div>


            <a class="left-head" href="">
            <p>us official temper the world with tampeting the night of towards the bulk of text</p></a>

            <div class="square"></div>
          

            <ul class="krishan">
              <li class=subb>
                 <div class="points">6:35 AM</div>
                 
                 </li>
              <li>to from the best link and to all rhe ashion tools </li>
             
            </ul>
            <div class="square"></div>

            <a class="left-head" href="">   <p>us official temper the world with tampeting the night of towards the bulk of text</p></a>

           
            <img width = '100%' src="https://www.washingtonpost.com/rw/WashingtonPost/Content/Epaper/2020-04-25/Ax1_module2.jpg" alt="">

            <hr>
            <div class="square"></div>
            <ul class="krishan">
              <li class="subb">
                 <div class="points">6:35 AM</div>
                 
                 </li>
              <li>to from the best link and to all rhe ashion tools </li>
             
            </ul>
            <div class="square"></div>
            <a class="left-head" href="">   <p>us official temper the world with tampeting the night of towards the bulk of text</p></a>


            <div class="square"></div>
            <ul class="krishan">
              <li class="subb">
                 <div class="points">6:35 AM</div>
                 
                 </li>
              <li>to from the best link and to all rhe ashion tools </li>
             
            </ul>
            <div class="square"></div>
            <a class="left-head" href="">   <p>us official temper the world with tampeting the night of towards the bulk of text</p></a>

            <img width = '100%' src="https://www.washingtonpost.com/rw/WashingtonPost/Content/Epaper/2020-04-25/Ax1_module2.jpg" alt="">

           
            <hr>
            <div class="square"></div>
            <ul class="krishan">
              <li class="subb">
                 <div class="points">6:35 AM</div>
                 
                 </li>
              <li>to from the best link and to all rhe ashion tools </li>
             
            </ul>
            <div class="square"></div>
            <a class="left-head" href="">   <p>us official temper the world with tampeting the night of towards the bulk of text</p></a>


            <div class="square"></div>
            <ul class="krishan">
              <li class="subb">
                 <div class="points">6:35 AM</div>
                 
                 </li>
              <li>to from the best link and to all rhe ashion tools </li>
             
            </ul>
            <div class="square"></div>
            <a class="left-head" href="">   <p>us official temper the world with tampeting the night of towards the bulk of text</p></a>



          </div>
                  

          

           <!-- 1- container -->

          <div class="col-sm-5">

            <?php foreach ($posts as $post): ?>
              <div class="postt">
              <img class="image-a" src="<?php echo BASE_URL . '/assets/images/' . $post['image'];  ?>" alt="">
            <div class="fade-text">
              towards the world end this hunger and make the globe towards the rest of the World
            </div>
            <a class="left-head" href="">
            <h3><?php echo substr($post['title'], 0, 500); ?></h3></a>
            
            <p class="by-text"><?php echo html_entity_decode(substr($post['body'], 0, 1500)); ?>
            </p>
               <div class="fade-text">
               By Cleve R. Wootson Jr. and Haisten Willis
            </div>
            <div class="light-line"></div>
            </div>

            <?php endforeach; ?>
            

            <!-- 2- container -->


            <!-- <img class="image-a" src="https://www.washingtonpost.com/resizer/PTMjHAlngDmPzk_kJntY2MtGsAU=/1248x832/www.washingtonpost.com/r/2010-2019/WashingtonPost/2020/04/24/Interactivity/Images/crop_90200424_wp_georgia_reopening_0362.jpg" alt="">
            <div class="fade-text">
            Bowlers in action at Southern Lanes bowling alley in Douglasville, Ga. (Kevin D. Liles for The Post)

            </div> <a class="left-head" href="">
            <h3>Short on cash, scared of coronavirus, Georgia businesses grapple with reopening</h3></a>
            <p class="by-text">Gov. Brian Kemp (R) was one of the last governors to issue a statewide stay-at-home order. Now, Kemp is opening more businesses more quickly than anywhere else, 
              bucking experts who warn that doing so could lead to an increase in the number of coronavirus deaths.</p>
               <div class="fade-text">
               By Cleve R. Wootson Jr. and Haisten Willis
            </div>
            <div class="light-line"></div> -->
            
          </div>
          
      </div>
      <hr>
  
    
      </div>
      
  
   <h4 style="text-align: center">Copyright © 2020 </h4>








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- keenwheeler cdn -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="../project-1/assets/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    

</body>
</html>