
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- Start Service Section -->
        <section id="service-section">
            <div class="container">
                <div class="row">

<style>
    .form-control {
    border-radius: 7px;
    border: 2px solid #111;
    }

    .form-horizontal .control-label {
    padding-top: 15px;
    margin-bottom: 0;
    text-align: right;
    font-size: 20px;
}

</style>

 <?php  check_message(); ?>
                      <div class="col-md-4"></div>
                        <div class="col-md-4">
                              <form class="form-horizontal span4" action="" method="POST" autocomplete="off">
                            <div class="pricing">
                                <div class="pricing-header">
                                    <h3>ĐĂNG NHẬP</h3>
                                </div>
                                <div class="pricing-body">

                                     <div class="form-group" id="Username">
                                            <div class="row">
                                              <label class="col-md-2 control-label" for=
                                              "Username"><ion-icon name="person"></ion-icon></ion-icon></label>

                                              <div class="col-md-10">
                                                 <input class="form-control input-lg" id="Username" name="Username" placeholder=
                                                                      "Tên tài khoản" type="text" value="">
                                              </div>

                                            </div> 
                                          </div> 
                                          <div class="form-group" id="password">
                                            <div class="row">
                                               <label class="col-md-2 control-label" for=
                                                "password"><ion-icon name="lock-closed"></ion-icon></ion-icon></label>

                                                <div class="col-md-10">
                                                  <input class="form-control input-lg" id="password" name="password" type=
                                                  "password" placeholder="Mật khẩu">
                                                </div>

                                            </div>

                                          </div>
                                            
                                        <div class="form-group" id="subjcode">
                                            <div class="row">
                                               <div class="col-md-2"></div>

                                                <div class="col-md-4" style="width: 300px;"> 
                                                   <button type="submit" name="btnLogin" class="btn btn-primary btn-lg" style="width: 100%"><ion-icon name="log-in-outline"></ion-icon></i> Đăng nhập</button>  
                                                </div>

                                            </div>

                                          </div>
                                     
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="col-md-4"></div>  
                </div>
            </div>
        </section>


<?php
if (isset($_SESSION['BorrowerId'])) {
    # code...
    redirect(web_root."index.php");
}
$bookid  = isset($_GET['id']) ? $_GET['id']:'';

if(isset($_POST['btnLogin'])){
    $email = trim($_POST['Username']);
    $upass  = trim($_POST['password']);
    $h_upass = sha1($upass);

        if ($email == '' OR $upass == '') {

            message("Invalid Username and Password!", "error");
            redirect("index.php?q=login&id=".$bookid);

        } else {
        //it creates a new objects of member
            $borrower = new Borrower();
            //make use of the static function, and we passed to parameters
            $res = $borrower::borrowerAuthentication($email, $h_upass);
            if ($res==true) { 

                if ($bookid=='') {
                    # code...
                 redirect(web_root."borrower/");
                }else{

                 redirect(web_root."index.php?q=checkout&id=".$bookid);
                } 
            }else{
                message("Tài khoản không tồn tại! Vui lòng liên hệ Quản trị viên.", "error");
                redirect("index.php?q=login&id=".$bookid);
            }
        }
 }
 ?> 