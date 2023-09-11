     
<?php 
$id = $_GET['id'];
$book = new Book();
$result = $book->single_books($id);

 ?>     <!-- Start Blog Page Section -->
        <div class="container">
            <div class="row">
                
                <!-- Start Blog Body Section -->
                <div class="col-md-8 blog-body">
                    
                    <!-- Start Blog post -->
                    <div class="single-blog-post">
                        <div class="post-img">
                            <!-- <img src="asset/images/blog/blog-02.jpg" class="img-responsive" alt="Blog image"> -->
                        </div>
                        <h1 class="post-title"><a href="#"><?php echo $result->BookTitle;?></a></h1>
                        
                        <div class="post-meta">
                            <ul  >
                                <li><i class="fa fa-calendar"> <b style="font-family: 'Quicksand', sans-serif;">Năm xuất bản :</b></i> <?php echo $result->PublishDate;?></li>
                                <li><i class="fa fa-user"> <b style="font-family: 'Quicksand', sans-serif;">Tác giả :</b></i> <?php echo $result->Author;?></li> 
                            </ul>
                       
                        </div>
                         
                        <p class="post-content"><b>Chủ đề</b> : <?php echo $result->BookDesc;?></p><br/>
                        <p class="post-content"><b>Thể loại</b> : <?php echo $result->Category;?></p><br/>
                        <p class="post-content"><b>Dewey Decimal</b> : <?php echo $result->DeweyDecimal;?></p><br/>
                        <p class="post-content"><b>Giá</b> : <?php echo $result->BookPrice;?> VNĐ</p><br/>
                        <p class="post-content"><b>Mô tả</b> : <?php echo $result->BookType;?></p><br/>
                        <p class="post-content"><b>Nhà xuất bản</b> : <?php echo $result->BookPublisher;?></p>
                        
                        <div class="item-content-footer">
                            <ul>
                                <li> <a href="index.php?q=borrow&id=<?php echo $result->IBSN;?>" class="btn btn-primary ">Mượn sách <ion-icon name="bag-add"></ion-icon></i></a></li>
                               
                            </ul>
                        </div>
                        
                    </div>
                    <!-- End Blog Post -->
    
                    
                    
                    
                </div>
                <!-- End Blog Body Section -->
                
                    <!-- Start Sidebar Section -->
                <div class="col-md-4 sidebar right-sidebar">
                     
                    
                    <!-- Start Blog categories widget -->
                    <div class="widget widget-categories">
                        
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Danh mục sách</span>
                            </h3>
                        </div>
                        
                        <ul>
                             <?php
                                $category = new Category();
                                $cur = $category->listOfcategory(); 
                                foreach ($cur as $category) { 
                                    echo ' <li>
                                                <i class="fa fa-angle-double-right"></i>
                                                <a class="selected" href="index.php?q=books&category='.$category->Category.'">'.$category->Category .'</a> 
                                            </li> ';
                                }
                            ?>
                           
                        </ul>
                        
                    </div>
                    <!-- End Blog categories widget -->
          
                </div>
                <!-- End Sidebar Section -->
                     
                
            </div>
        </div>
        <!-- End Blog Page Section -->
        
        