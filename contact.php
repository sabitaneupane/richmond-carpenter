<?php $page="contact"; ?>
<?php include('header.php'); ?>
<?php include('navigation.php'); ?>

<div  style="margin-top:-20px;background-color:#A65A16; ">
	                        <div class="contactpage_bg" >

 							<!--google map start here-->
									
										<div id="map-container" class="contactpage_googlemap ">

											<div class="overlay" onClick="style.pointerEvents='none'"></div>

												<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26372843.225102425!2d-113.74614997781748!3d36.20690055516594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2snp!4v1475408678885"  class="img-responsive"></iframe>
														
										</div>
									
									<!--google map end here--> 
                                 

                                  
                                 	<div id="widget_content" style="width:98%;">
                                 			<h1 style="color:white;"> Contact Us </h1>
                                 		<div  class="row">
                                 			<div class="col-lg-8 col-md-8 col-sm-6 col-xm-12">
			                                       
			                                      <div class="contact_content" style="color:white;">
			                                            <div>
			                                                 
			                                                 <form id="contactForm" method="POST" class="contact_form" style="padding:20px 0px ; ">
			                                                   <div class="form-group">                                    
			                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" value='' required>
			                                                    </div>
			                                                    <div class="form-group">
			                                                          <input type="text" name="email" class="form-control" id="email" placeholder="Email" value='' required>
			                                                    </div>
			                                                    <div class="form-group">
			                                                           <textarea class="form-control" rows="4"  name="message" id="message" placeholder="Message"></textarea> 
			                                                    </div>

			                                                    <div class="contact_btn" style="width:100px;margin:auto;">
			                                                        <button type="button" id="submit" name="submit"  class="btn btn-default" >Send</button>
			                                                        <button class="btn btn-success readonly" id="load" style="display:none;">Sending..</button>
			                                                    </div>
			                                                </form>

			                                            </div>



			                                        </div>
			                                </div>

			                                <div class="col-lg-4 col-md-4 col-sm-6 col-xm-12">
			                                		<img src="img/contact_img.jpg" class="img-responsive logo" alt=" Richmond Carpenter logo " style="width:540px;height:280px;padding:10px 0px 10px 10px;">
			                                </div>

                                  	</div>

                                  </div>
                                 </div>

                           
</div>
    <script src="js/jquery.validate.min.js"></script>
    <script>
     $(document).ready(function () {
    $("#contactForm").validate({
                    //by default the error elements is a <label>
                     ignore: ".ignore",
                    errorElement: "span",
                    rules: {
                        "name": {
                            required: true,
                        },  
                        "email": {
                            required: true,
                            email:'true'
                        },
                        "message": {
                            required: true,
                           
                        },
                    },
                    messages: {
                        "name": {
                            required: "You must enter your name"
                           
                        },  
                        "email": {
                            required: "You must enter your email",
                            email: "Email must be valid email address!"
                        },
                         "message": {
                            required: "Message is required"
                            
                        }
                        
                    }
                });
   
   
   });
    
    $(document).on('click','#submit',function(){
        console.log($("#contactForm").serialize());
        var name=$("#name").val();
        var email=$("#email").val();
        var subject=$("#message").val();
        
      if($("#contactForm").valid()){
        $.ajax({
        url:'mail.php',
        method:'post',
        data:{name:name,email:email,message:message},
        dataType:'json',
         beforeSend: function(){
         $("#submit").hide();
        $("#load").show();
          },
       complete: function(){
  $("#submit").show();
         $("#load").hide();
       },
        success:function(data){
          if(data.msg=='1'){
                      
         $("#alertModel").modal("toggle");
       }
        
          }
        });
      }
    });
    
    </script>

<?php include('footer.php'); ?>

