<?php include_once 'header.php';?>

<div id="blog-area" class="blog-with-sidebar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="blog-post">





            <?php 

                    foreach ($allpost as $key => $value) {
                        
                    
                ?>



                    <!--Start single latest blog-->
                    <div class="single-blog-post">
                        <div class="img-holder">
                       <a href="#"><img src="<?php echo $value['image'];?>" alt="post image"/></a>
                            <div class="published-date">
                                <h3>11 Dec</h3>
                            </div> 
                        </div>
                        <div class="text-holder">
                            <a href="<?php echo BASE_URL;?>/index.php?url=Showpage/postdetails/<?php echo $value['id']; ?>">
                                <h3 class="blog-title"><?php echo $value['title'];?></h3>


                            </a>
                         
                            <div class="text">
                                <p>                    <?php

                            $text=$value['description'];

                            if(strlen($text)>200){

                                $text=substr($text,0,200);

                                echo $text;
                            }

                     ?></p>
        <a href="<?php echo BASE_URL;?>/index.php?url=Showpage/postdetails/<?php echo $value['id']; ?>">Read More</a>
                            </div> 
                        </div>
                    </div>
                    <!--End single latest blog--> 
            
            <?php  }  ?>















                </div>
            </div>

            <!--Start sidebar Wrapper-->
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="sidebar-wrapper">

                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Categories</h3>
                            <span class="border"></span>
                        </div>

<div class="sidebar clear">
            <div class="samesidebar clear container">
        
                   <ul class="categories clearfix">

                    <?php 

                        foreach ($catlist as $key => $value) {
                        
                    ?>
                        <li><a href="<?php echo BASE_URL;?>/index.php?url=Showpage/showpostbycat/<?php echo $value['id']; ?>"><?php echo $value['name'];?></a></li>


                        <?php } ?>                  
                    </ul>
            </div>
            
    

                    </div>
                    <!--End single sidebar-->



                </div>    
            </div>
            <!--End Sidebar Wrapper-->  
        </div>
    </div>
</div>

<div class="call-out2">
    <div class="container">
        <div class="clearfix">
            <div class="float_left">
                <h4>Have any question or need any business consultation?</h4>
            </div>
            <div class="float_right">
                <a href="contact.html" class="thm-btn bg-clr2">Request Quote</a>
            </div>
        </div>
                
    </div>
</div>



<?php
    
    include_once 'footer.php';
?>
