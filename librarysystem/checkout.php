<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<?php
$id = $_GET['id'];

if (!isset($_SESSION['BorrowerId'])) {
  # code...
  redirect("index.php?q=borrow&id=".$id);
}


$book = new Book();
$object = $book->single_books($id);

?>

























        <style type="text/css">
          .small {
            /*font-weight: bold; */

          }
          p{
            font-weight: bolder; 
          }
          .book-details{
            padding: 5px;
            padding-bottom: 20px;
            font-size: 16x;
            font-weight: 600;
            font-family: 'Maven Pro', sans-serif;
            margin-left: 10px;
          }
        </style>
        <!-- Start Service Section -->
        <section id="service-section">
            <div class="container">
                <div class="row">

                	<div class="col-md-6">  
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
					            <div class="col-md-6">
					            	 <?php
							              // SELECT `IDNO`, `BorrowerId`, `Firstname`, `Lastname`, `MiddleName`, `Address`, `Sex`, `ContactNo`, `CourseYear`, `BorrowerPhoto`, `BorrowerType`, `Stats`, `BUsername`, `BPassword` FROM `tblborrower` WHERE 1 
							           
							                  @$borrower = new Borrower();
							                  @$res = $borrower->single_borrower($_SESSION['BorrowerId']) ;
							          
							              ?>
							              <div class="book-details">Thông tin người mượn</div> 
							                <div class="form-row">
							                    <div class="col-md-3"> 
							                          <label class="small mb-1" for="BorrowerId">ID người mượn</label>  
							                     </div> 
							                    <div class="col-md-9"> 
							                          <p><?php echo  isset($res->BorrowerId) ? $res->BorrowerId: 'None'; ?></p> 
							                          <input type="hidden" name="BorrowerId" value="<?php echo isset($res->BorrowerId) ? $res->BorrowerId: 'None'; ?>">
							                          <input type="hidden" name="IBSN" value="<?php echo $id;?>">
							                    </div>
							                    <div class="col-md-3"> 
							                          <label class="small mb-1" for="Firstname">Họ</label>  
							                     </div> 
							                    <div class="col-md-9"> 
							                          <p><?php echo  isset($res->Firstname) ? $res->Firstname: 'None'; ?></p> 
							                    </div>
							                    
							                    <div class="col-md-3"> 
							                          <label class="small mb-1" for="Lastname">Tên</label>  
							                     </div> 
							                    <div class="col-md-9"> 
							                          <p><?php echo  isset($res->Lastname) ? $res->Lastname: 'None'; ?></p> 
							                    </div>
							                    <div class="col-md-3"> 
							                          <label class="small mb-1" for="Address">Địa chỉ</label>  
							                     </div> 
							                    <div class="col-md-9"> 
							                          <p><?php echo  isset($res->Address) ? $res->Address: 'None'; ?></p> 
							                    </div>
							                    <div class="col-md-3"> 
							                          <label class="small mb-1" for="Sex">Giới tính</label>  
							                     </div> 
							                    <div class="col-md-9"> 
							                          <p><?php echo  isset($res->Sex) ? $res->Sex : 'None'; ?></p> 
							                    </div>
							                    <div class="col-md-3"> 
							                          <label class="small mb-1" for="ContactNo">Số điện thoại</label>  
							                     </div> 
							                    <div class="col-md-9"> 
							                          <p><?php echo  isset($res->ContactNo) ? $res->ContactNo : 'None'; ?></p> 
							                    </div>
							                    <div class="col-md-3"> 
							                          <label class="small mb-1" for="CourseYear">Mã sinh viên</label>  
							                     </div> 
							                    <div class="col-md-9"> 
							                          <p><?php echo  isset($res->CourseYear) ?$res->CourseYear : 'None'; ?></p> 
							                    </div> 
					            	
					            			</div>
                        
                					</div>
					            <hr/>
           					 </div>

					            <div class="pull-right">
					            	<a href="proccess.php?action=checkout&id=<?php echo $id;?>" class="btn btn-primary">Thanh toán <ion-icon name="bag-handle"></ion-icon> </i></a>
					            </div>
        </section>















        