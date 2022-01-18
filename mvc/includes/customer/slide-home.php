<div class="slider">
                <div class="container">
                    <div class="slider_content">
                        <div class="slider_content_left">
                            <div class="slider_content_left_top_container">
                                <div class="slider_content_left_top">
                                    <?php foreach($slide as $value) {?>
                                   
                                    <a href=""><img src="uploads/<?php echo $value['image'] ?>" alt=""></a>

                                   <?php }?>
                                </div>
                                    <div class="slider_content_left_top_btn">
                                        <i class="fa fa-caret-left" ></i>
                                        <i class="fas fa-caret-right"></i> 
                                    </div>
                                </div>
                                <div class="slider_content_left_bottom">
                                <?php foreach($slide as $value) {?>
                                    <li class="active"><?php echo $value['tieude'] ?></li>

                                <?php }?>
                                </div>
                            </div>
                         <div class="slider_content_right">
                                <li> <a href=""><img src="uploads/1.jpg" alt=""></a> </li>
                                <li> <a href=""><img src="uploads/2.jpg" alt=""></a> </li>
                                <li> <a href=""><img src="uploads/3.jpg" alt=""></a> </li>
                                <li> <a href=""><img src="uploads/4.jpg" alt=""></a> </li>
                            </div>
                    </div>

                </div>   
            </div>
            <div class="banner_one"><a href="#"><img src="uploads/1200-60-1200x60.png" alt=""></a></div>