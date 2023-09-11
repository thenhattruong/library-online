  <style type="text/css">
    .layer{
        border-top: 1px solid #ddd;
        padding: 10px;
    }
    .layer:hover{
        background-color: #F5F8FA;
    }

    .title{
        font-weight: bold; 
    }
    .searchagain{
        font-size: 20px; 
        font-weight: bold;
        margin-bottom: 5px;
        color: #FF432E;
    }
    .desc{
      font-family: 'Quicksand', sans-serif;
    }
    .col-md-6{
      display: flex;
      justify-content: center; /* Horizontal centering */
      align-items: center; /* Vertical centering */
    }
    
</style>

        <!-- End Header Section --> 
   <?php if (!isset($_POST['search'])){   ?>
        <!-- Start Service Section -->
        <section id="service-section">
            <div class="container">
                <div class="row">
                       <div class="col-md-3"></div>
        
                        <div class="col-md-6">
                              <form class="form-horizontal span4" action="#.php" method="POST" autocomplete="off">
                            <div class="pricing">
                                <div class="pricing-header">
                                    <!-- <i class="fa fa-search"></i>   -->
                                  <h3>Tuỳ chọn truy vấn</h3>
                                </div>
                                <div class="pricing-body">

                                     <div class="form-group" id="BookTitle">
                                            <div class="row">
                                              <label class="col-md-2 control-label" for=
                                              "BookTitle">Tiêu đề:</label>

                                              <div class="col-md-10">
                                                 <input class="form-control input-lg" id="BookTitle" name="BookTitle" type="text" value="">
                                              </div>

                                            </div> 
                                          </div>
                                          <div class="form-group" id="Category">
                                            <div class="row">
                                             <label class="col-md-2 control-label" for=
                                                "Category">Thể loại:</label>

                                                <div class="col-md-10">
                                                 <select class="form-control input-lg" name="Category" id="Category">
                                                    <option value="">Chọn thể loại sách</option>
                                                    <?php
                                                    $category = new Category();
                                                    $cur = $category->listOfcategory(); 
                                                    foreach ($cur as $category) {
                                                        echo '<option>'.$category->Category .'</option>';
                                                    }

                                                    ?>
                                                        
                                                    </select>   
                                                </div>

                                            </div>

                                          </div>
                                          <div class="form-group" id="Author">
                                            <div class="row">
                                               <label class="col-md-2 control-label" for=
                                                "Author">Tác giả:</label>

                                                <div class="col-md-10">
                                                  <input class="form-control input-lg" id="Author" name="Author" type=
                                                  "text">
                                                </div>

                                            </div>

                                          </div>
                                           <div class="form-group" id="BookPublisher">
                                            <div class="row">
                                               <label class="col-md-2 control-label" for=
                                                "BookPublisher">NXB:</label>

                                                <div class="col-md-10">
                                                  <input class="form-control input-lg" id="BookPublisher" name="BookPublisher" type=
                                                  "text">
                                                </div>

                                            </div>

                                          </div>
                                          

                                        <div class="form-group" id="subjcode">
                                            <div class="row">
                                               <div class="col-md-2"></div>

                                                <div class="col-md-10"> 
                                                   <button type="submit" name="search" class="btn btn-primary btn-lg" style="width: 100%"><i class="fa fa-search"></i> Tìm kiếm</button>  
                                                </div>

                                            </div>

                                          </div>
                                     
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="col-md-3"></div>
 
                </div>
            </div>
        </section>
        <!-- Start Service Section -->
        
      

 <?php }else{ ?>

     <section id="service-section">
            <div class="container">
                <div class="row">
  <div class="searchagain">Kết quả...</div>

 
<?php 

$title = $_POST['BookTitle'];
$category = $_POST['Category'];
$author = $_POST['Author'];
$publisher = $_POST['BookPublisher'];




                $mydb->setQuery("SELECT * FROM `tblbooks` 
                        WHERE Status = 'Available' AND ( BookTitle LIKE '%{$title}%' AND  Category LIKE '%{$category}%' AND  Author LIKE '%{$author}%' AND  BookPublisher LIKE '%{$publisher}%' )"); 
                $e = $mydb->executeQuery();
                $maxrow = $mydb->num_rows($e);

                if ($maxrow  > 0) { 
                $cur = $mydb->loadResultlist();
                foreach ($cur as $result) {
              //        echo '<tr>';  
                    // echo '<td >' . $result->IBSN.'</td>';
                    // echo '<td >'. $result->BookTitle.'</td>';
                    // echo '<td>'.  $result->BookDesc.'</td>'; 
                    // echo '<td>'. $result->Category.'</td>'; 
                    // echo '<td>'. $result->Author.'</td>';
                    // echo '<td>'. $result->BookPrice.'</td>';
                    // echo '<td>'. $result->Status.'</td>'; 
                    // echo '</tr>';  

                echo '<div class="layer">
                        <a href="">
                            <div class="title"  ><a href="index.php?q=bookdetails&id='.$result->IBSN.'">'. $result->BookTitle.'</a></div> 
                            <div class="desc">IBSN : ' . $result->IBSN.'<br/>Chủ đề : '.  $result->BookDesc.'<br/>Thể loại : '.  $result->Category.'<br/>Tác giả : '. $result->Author.'</div>
                        </a>
                    </div>'; 
 
                } 
              }else{
                 echo '<div class="layer">
                        <a href="">
                        <div class="title">Không tìm thấy sách trong thư viện!</div> 
                            
                        </a>
                    </div>'; 

              }
        ?>
   
 
                </div>
            </div>
        </section>

 <?php }?>