

<div id="blog-area" class="blog-with-sidebar-area blog-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="blog-post">

                    
                    <div class="comment-box">
                        <div class="row">
                            <div class="col-md-12">














            <?php 

                    foreach ($allpost as $key => $value) {
                        
                    
                ?>


                                <!--Start single comment box-->
                                <div class="single-comment-box">
                                    <div class="img-holder">
                                                       <a href="#"><img src="<?php echo $value['image'];?>" alt="post image"/></a>
                                    </div>
                                    <div class="text-holder">
                                        <div class="top">
                                            <div class="date pull-left">
                                                <h5><?php echo $value['title'];?></h5>
                                                <h5><?php echo $value['time'];?></h5>
                                            </div>
                                            <div class="review-box pull-right">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p><?php echo $value['description'];?>

                     </p>
                                        </div>
                                    </div>
                                </div>

<?php } ?>



                            </div>
                        </div>
                    </div>
                    

                    
                    
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
                        <ul class="categories clearfix">




                            <li>
                                <a href="#">
                                    Broken glass repair
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Game systems repair
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                   LCD TV repair
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Mac & PC repair
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Tablet & iPad repair
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                   Unlock your phone
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Water damage repair
                                </a>
                            </li>






                        </ul>
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


