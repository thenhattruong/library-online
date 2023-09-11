                      <?php 
                         if (!isset($_SESSION['TYPE'])=='Administrator'){
                              redirect(web_root."index.php");
                             }

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Thêm người dùng mới</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">  

 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" onsubmit="return validateRetypePassword()">

                          <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_id">User Id:</label>

                      <div class="col-md-8"> --> 
                        <!--  <input class="form-control input-sm" id="user_id" name="user_id" placeholder=
                            "Account Id" type="hidden" value="<?php echo $res->AUTO; ?>"> -->
                    <!--   </div>
                    </div>
                  </div> -->           
                  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_name">Họ tên:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_name" name="user_name" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_email">Tên tài khoản:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_email" name="user_email" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_pass">Mật khẩu:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="user_pass" name="user_pass"  type="Password" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_pass">Nhập lại mật khẩu:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="retype_user_pass" name="retype_user_pass"  type="Password" value=""><div id="rpass_errormsg"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "user_type">Loại:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="user_type" id="user_type">
                          <option>Administrator</option>
                          <option>Thủ thư</option>  
                        </select> 
                      </div>
                    </div>
                  </div>

            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                       <button class="btn btn-primary" id="usersave" name="save" type="submit" ><i class="fa fa-save"></i>  Lưu</button> 
                          <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-left"></span> Danh sách người dùng</a>
                       </div>
                    </div>
                  </div>

          
          
        </form>
       </div>
     </div>
   </div>
