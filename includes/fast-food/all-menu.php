<?php 

echo $order;

$query="SELECT *  FROM truck_categories WHERE truck_id={$order} ";

$select_truck_category=mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_truck_category)){
   $cat_title=$row['cat_title'];
   $cat_id=$row['cat_id'];


?>

<?php 
$item_cat=$cat_title;
?>
<section class="all-menu my-5" id="all-menu">
   
         <div class="container">
         <h1 class="text-center my-5 text-white" > <?php echo $cat_title ?></h1>

               <div class="col-md-12 testimonials">
                  <div class="swiper-container">
                 

                  <div class="swiper-wrapper ">
                      
                  <?php
                   
                  $querry="SELECT *  FROM items WHERE truck_id={$order} AND item_category = '{$item_cat}' ";

                  $select_item=mysqli_query($connection,$querry);
                  
                  while($row = mysqli_fetch_assoc($select_item)){
                     $item_name=$row['item_name'];
                     $item_details=$row['item_details'];
                     $item_image=$row['item_image'];
                     
                  
                  
                  ?>
                  
                       <div class="swiper-slide">
                           <div class="card-menu">
                                 <div class="layer"></div>
                                 <div class="content">
                                 

                                    <div class="imgbx">
                                       <img src="img/uploaded/<?php echo $item_image ?>" height="250px" alt="" >
                                    </div>
                                    <div class="details mt-3">
                                       <h2><?php echo $item_name ?></h2>
                                    </div>
                                    <hr class="" style="color: white;">
                                    <p class="details-heads mx-1"> details</p>
                                    
                                    <p class="details-text "><?php echo $item_details ?></p>
                                     </div> <!-- content end -->
                              
                              </div><!-- card  end-->

                           </div><!--swiper-slide-->
               
                          

               
                           <?php } ?>

                        </div><!--swiper controll -->   
                        </div>
            
         </div>
      </section>

    <?php } ?>