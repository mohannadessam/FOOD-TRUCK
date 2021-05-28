<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="main.css">
   <title>Document</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

   <!-- font awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

   <!--swiber js-->
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>
<body class="fast-fast-fast" >
 
   <!--start header-->
   <div class="containerrr">
    <div class="navigation">
     <ul>
        <li>
           <a href="index.php">
              <span class="icon"><i class="fas fa-home"></i></span>
              <span class="title">home</span>
              <div class="back-image"></div>
           </a>
        </li>
        <li>
         <a href="#">
            <span class="icon"><i class="fas fa-truck-moving"></i></span>
            <span class="title">tracks</span>
         </a>
      </li>

        <li>
         <a href="#">
            <span class="icon"><i class="fas fa-question-circle"></i></span>
            <span class="title">help</span>
         </a>
      </li>

      <li>
         <a href="login.php">
            <span class="icon"><i class="fas fa-sign-in-alt"></i></span>
            <span class="title">login</span>
         </a>
      </li>

      
     </ul>
  </div>
     <div class="toggle"><i class="fas fa-chevron-right"></i></div>
</div>

   <!-- end header-->

   <!-- start container-->
   <main id="main-site">
    
     <?php include "includes/fast-food/menu.php" ?>

     
     <?php include "includes/fast-food/all-menu.php" ?>

     

      <section class="menu-order mt-5">
         <div class="row">
            <div class="col-md-12 ">
               <div class="order-menu mx-auto">
                  <div class="shad"></div>
                  <div class="pos">

                  <?php 
                  
                  
                  ?>


                   <form action="" method="POST"> 
                  <a href="includes/if_login.php?id=<?php echo $order ?>" class="btn1 btn1-white "> order</a>

                  
                  </form> 
                  </div>
               </div>
            </div>
         </div>
      </section>

   </main>
   <!--end container-->

   <?php include "includes/footer.php" ?>


  



   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

   <!--swiber js-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="index.js"></script>

<script>
   var swiper = new Swiper('.swiper-container', {
     effect: 'coverflow',
     grabCursor: true,
     centeredSlides: true,
     slidesPerView: 'auto',
     coverflowEffect: {
       rotate: 0,
       stretch: 10,
       depth: 20,
       modifier: 1,
       slideShadows: false,
      
     },

     autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
     pagination: {
       el: '.swiper-pagination',
        clickable: true
     },
     navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      loop: true
      
   });
 </script>


<script>
   const navigation= document.querySelector('.navigation');
   document.querySelector('.toggle').onclick = function(){
      this.classList.toggle('active');
      navigation.classList.toggle('active');
   }
</script>
</body>
</html>