<?php

$id = $_GET['id'];
 
@$transaction = new Transaction();
@$trans = $transaction->single_transaction($id) ;
 





$book = new Book();
$object = $book->single_books($trans->IBSN);

?>
<style type="text/css">
	p{
		font-size: 16px;
		font-weight: bold;
		color: #E32639;
	}
</style>


        <style type="text/css">
          .small {
            /*font-weight: bold; */

          }
          p{
            font-weight: bolder; 
          }
          .book-details{
            padding: 5px;
            font-size: 15px;
            font-weight: bold;
            border-bottom: 1px solid #ddd;
          }
        </style>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Sách mượn </h6>

  </div>
  <div class="card-body">
    



<div class="row">
            <div class="col-md-6">  
                  <div class="book-details">Chi tiết sách</div> 
                <div class="form-row">
                    <div class="col-md-3"> 
                          <label class="small mb-1" for="IBSN">IBSN</label>  
                     </div> 
                    <div class="col-md-9"> 
                          <p><?php echo  $object->IBSN ?></p> 
                    </div>
                    <div class="col-md-3"> 
                          <label class="small mb-1" for="BookTitle">Tiêu đề</label>  
                     </div> 
                    <div class="col-md-9"> 
                          <p><?php echo  $object->BookTitle ?></p> 
                    </div>
                    <div class="col-md-3"> 
                          <label class="small mb-1" for="BookDesc">Chủ đề</label>  
                     </div> 
                    <div class="col-md-9"> 
                          <p><?php echo  $object->BookDesc ?></p> 
                    </div>
                    <div class="col-md-3"> 
                          <label class="small mb-1" for="Category">Thể loại</label>  
                     </div> 
                    <div class="col-md-9"> 
                          <p><?php echo  $object->Category ?></p> 
                    </div>
                    <div class="col-md-3"> 
                          <label class="small mb-1" for="DeweyDecimal">Dewey Decimal</label>  
                     </div> 
                    <div class="col-md-9"> 
                          <p><?php echo  $object->DeweyDecimal ?></p> 
                    </div>
                    
                    <div class="col-md-3"> 
                          <label class="small mb-1" for="BookPrice">Giá</label>  
                     </div> 
                    <div class="col-md-9"> 
                          <p><?php echo  $object->BookPrice ?> VNĐ</p> 
                    </div>
                    <div class="col-md-3"> 
                          <label class="small mb-1" for="Author">Tác giả</label>  
                     </div> 
                    <div class="col-md-9"> 
                          <p><?php echo  $object->Author ?></p> 
                    </div>
                    <div class="col-md-3"> 
                          <label class="small mb-1" for="BookPublisher">Nhà xuất bản</label>  
                     </div> 
                    <div class="col-md-9"> 
                          <p><?php echo  $object->BookPublisher ?></p>
                   
                    </div>
                    <div class="col-md-3"> 
                          <label class="small mb-1" for="PublishDate">Năm xuất bản</label>  
                     </div> 
                    <div class="col-md-9"> 
                          <p><?php echo  $object->PublishDate ?></p> 
                  


                          
                    </div>
                </div> 
            </div> 
            <!-- borrowers side -->
            <div class="col-md-6">
              <?php
              // SELECT `IDNO`, `BorrowerId`, `Firstname`, `Lastname`, `MiddleName`, `Address`, `Sex`, `ContactNo`, `CourseYear`, `BorrowerPhoto`, `BorrowerType`, `Stats`, `BUsername`, `BPassword` FROM `tblborrower` WHERE 1 
           
                  @$borrower = new Borrower();
                  @$res = $borrower->single_borrower($trans->BorrowerId) ;
          
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
            <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-3"> 
                    <label class="small mb-1" for="DateBorrowed">Ngày mượn</label>  
                    </div> 
                    <div class="col-md-9"> 
                        <p><?php echo  isset($trans->DateBorrowed) ?$trans->DateBorrowed : 'None'; ?></p> 
                    </div> 
                    <div class="col-md-3"> 
                      <label class="small mb-1" for="DueDate">Ngày đến hạn</label>  
                    </div> 
                    <div class="col-md-9"> 
                        <p><?php echo  isset($trans->DueDate) ?$trans->DueDate : 'None'; ?></p> 
                    </div>       
                </div>      
             </div> 

             
          </div>    



<!-- SELECT `TransactionID`, `IBSN`, `NoCopies`, `DateBorrowed`, `Purpose`, `Status`, `DueDate`, `BorrowerId`, `Borrowed`, `Due`, `Returned`, `DateReturned`, `Remarks` FROM `tbltransaction` WHERE 1 -->

 



<hr/>
  
        <a href="index.php" class="btn btn-success btn-sm"><i class="fa fa-arrow-left"></i> Trở lại</a>  
  </div>
</div> 