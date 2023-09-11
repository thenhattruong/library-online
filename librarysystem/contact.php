<style>
    .col-lg-12 p{
        font-weight: 600;
        margin-top: 10px;
    }
    .col-lg-12 button {
        font-size: 20px;
        width: 100px;
    }
 </style>
 
 <!-- Start Contact Us Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2 style="font-family: 'Plus Jakarta Sans', sans-serif;">Liên hệ với chúng tôi</h2>
                        <p style="font-family: 'Quicksand', sans-serif;">Tiếp nhận mọi thắc mắc của bạn</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="mail/email_contact.php" name="sentMessage" id="contactForm" method="POST">
                        <div class="row">
                            <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group" style="font-family: 'Quicksand', sans-serif;">
                                    <input type="text" class="form-control" placeholder="Tên của bạn *" name="name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group" style="font-family: 'Quicksand', sans-serif;">
                                    <input type="email" class="form-control" placeholder="Email *" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group" style="font-family: 'Quicksand', sans-serif;">
                                    <input type="tel" class="form-control" placeholder="Số điện thoại *" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group" style="font-family: 'Quicksand', sans-serif;">
                                    <textarea class="form-control" placeholder="Lời nhắn *" name="content_message" id="message"  required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="600ms">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary"><ion-icon name="send-outline"></ion-icon> Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>

    <div class="google-map">
        <div id="map" data-position-latitude="10.76144789013609" data-position-longitude="106.68219007757817"></div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        
        