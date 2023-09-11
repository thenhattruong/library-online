<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<?php
$id = $_GET['id'];

if (isset($_SESSION['BorrowerId'])) {
  # code...
  redirect("index.php?q=checkout&id=".$id);
}


$book = new Book();
$object = $book->single_books($id);

 
  $autonumber = New Autonumber();
  $auto = $autonumber->set_autonumber("BorrowerID"); 
 ?> 















 <style type="text/css">
   .stretch img {
      width: 100%;
   }
 </style> 
        
        <section id="service-section">
            <div class="container">
                <div class="row">
 

        <style type="text/css">
          .small {
            /*font-weight: bold; */

          }
          p{
            font-weight: bolder; 
            text-align: left;
          }
          .book-details{
            padding: 5px;
            padding-bottom: 20px;
            font-size: 16x;
            font-weight: bold;
            font-family: 'Maven Pro', sans-serif;
            margin-left: 10px;
          }
          .col-md-4 label {
            font-size: 16px;
            font-family: 'Quicksand', sans-serif;

          }
          .col-md-8 p {
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
          }
          .col-md-8 {
            font-family: 'Quicksand', sans-serif;
            font-weight: bolder;
          }
        </style>
        <form class="form-horizontal span4" action="proccess.php?action=add" method="POST" autocomplete="off" enctype="multipart/form-data"> 
          <div class="row">
            <div class="col-md-4">  
                  <div class="book-details">CHI TIẾT SÁCH</div> 
                <div class="form-row">
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="IBSN">IBSN</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->IBSN ?></p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="BookTitle">Tiêu đề</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->BookTitle ?></p> 
                    </div>
                    
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="Category">Thể loại</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->Category ?></p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="DeweyDecimal">Dewey</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->DeweyDecimal ?></p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="BookPrice">Giá</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->BookPrice ?> VNĐ</p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="Author">Tác giả</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->Author ?></p> 
                    </div>
                    <div class="col-md-4"> 
                          <label class="small mb-1" for="BookPublisher">NXB</label>  
                     </div> 
                    <div class="col-md-8"> 
                          <p><?php echo  $object->BookPublisher ?></p> 
                    </div>
                    
                </div> 
            </div> 
            <!-- borrowers side -->
            <div class="col-md-8">
                 <div class="row">
            <div class="col-md-8">
              <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "BorrowerId">ID người mượn</label>

              <div class="col-md-8"> 
                  <input type="hidden" name="id" value="<?php echo $id;?>">
                  <input class="form-control input-sm" id="BorrowerId" name="BorrowerId" placeholder=
                    "Employee No" type="text" value="<?php echo DATE('Y').$auto->AUTO; ?>" readonly>  
           </div>
            </div>
          </div>           
           <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "Firstname">Họ</label>

              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                 <input class="form-control input-sm" id="Firstname" name="Firstname" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "Lastname">Tên</label>

              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                <input  class="form-control input-sm" id="Lastname" name="Lastname" onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                </div>
            </div>
          </div>

       

         <div class="form-group">
          <div class="row">
            <label class="col-md-4 control-label" for=
            "Address">Địa chỉ</label>

            <div class="col-md-8">
              
               <textarea class="form-control input-sm" id="Address" name="Address" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
            </div>
          </div>
        </div> 

        <div class="form-group">
          <div class="row">
            <label class="col-md-4 control-label" for=
            "Gender">Giới tính</label>

            <div class="col-md-8 row">
               <div class="col-lg-5">
                  <div class="radio">
                    <label><input checked id="optionsRadios1" checked="True" name="optionsRadios" type="radio" value="Nữ">Nữ</label>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="radio">
                    <label><input id="optionsRadios2"   name="optionsRadios" type="radio" value="Nam"> Nam</label>
                  </div>
                </div> 
               
            </div>
          </div>
        </div>

             

           <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "ContactNo">Số điện thoại</label>

              <div class="col-md-8">
                
                 <input class="form-control input-sm" id="ContactNo" name="ContactNo" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
              </div>
            </div>
          </div> 

            

          <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "CourseYear">Mã sinh viên</label>

              <div class="col-md-8">
               <!--  <select class="form-control input-sm" name="CourseYear" id="CourseYear">
                    <option value="none" >Select</option> 
                </select>  -->
                <input class="form-control input-sm" id="CourseYear" name="CourseYear" placeholder=
                    "Ví dụ : 46.01.104.129" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
              </div>
            </div>
          </div> 


            <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "BUsername">Tên tài khoản</label>

              <div class="col-md-8">
                
                 <input class="form-control input-sm" id="BUsername" name="BUsername" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
              </div>
            </div>
          </div> 

            

          <div class="form-group">
            <div class="row">
              <label class="col-md-4 control-label" for=
              "BPassword">Mật khẩu</label>

              <div class="col-md-8">
               <!--  <select class="form-control input-sm" name="CourseYear" id="CourseYear">
                    <option value="none" >Select</option> 
                </select>  -->
                <input class="form-control input-sm" id="BPassword" name="BPassword" type="Password"  value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
              </div>
            </div>
          </div> 




          
            </div>
              <div class="col-md-4 strecth">         
                      
                     <img id="blah" title="profile image" class="img-hover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSav3zdXwA34mCyHltp_lcBPItUcrFa1RXKeNo53LApKqYmpyPh&usqp=CAU" width="300px" height="130px"> 
                      
                    <input type="file" name="picture"  id="imgInp" /> 
            </div>

          </div>

            
            </div>
          </div>     

    <hr/>   
            <div class="pull-right row">
              <p>Bạn đã có Tài khoản chưa? <a href="index.php?q=login&id=<?php echo $id;?>" ><i class="fa fa-lock"></i> Đăng nhập</a> 
                <button class="btn btn-primary btn-lg" name="save" type="submit" > Đăng ký <ion-icon name="person-add"></ion-icon></span></button></p> 
            </div>
                     
 
          </form> 
  
</div>
</div>
</section>