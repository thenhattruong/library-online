<?php  
if(!isset($_SESSION['BorrowerId'])){
  redirect(web_root."index.php");
}
 $id = $_SESSION['BorrowerId'];
  $borrower = new Borrower();
  $res = $borrower->single_borrower($id)

?> 

 

 <form class="form-horizontal span6" action="controller.php?action=changepassword" method="POST" onsubmit="return validateRetypePassword()">

 
       

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_pass">Mật khẩu mới</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_pass" name="user_pass" type="Password" value="" placeholder="Nhập mật khẩu tài khoản">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_pass">Gõ lại mật khẩu</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="retype_user_pass" name="retype_user_pass" type="Password" value="" placeholder="Gõ lại mật khẩu">
                      </div>
                    </div>
                  </div> 
            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                         <button class="btn btn-primary" id="usersave" name="save" type="submit" ><i class="fa fa-save"></i> Lưu</button> 
                      </div>
                    </div>
                  </div>

              
 
        </form> 
