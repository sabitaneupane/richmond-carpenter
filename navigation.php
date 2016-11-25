           <div id="navigation">
                  <nav class="navbar navbar-default custom_nav_bg">
                        <div class="container-fluid">
                          <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span> 
                            </button>
                           
                          </div>
                          <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                            <ul class="nav navbar-nav custom_nav_list">
                              <li><a  <?php if($page=="home") echo "class='active'"; ?> href="index.html" >Home</a></li>
                              <li> <a   <?php if($page=="aboutus") echo "class='active'"; ?> href="aboutus.php" >About&nbsp;Us</a></li>
                              <li><a  <?php if($page=="services") echo "class='active'"; ?> href="services.php"  >Services</a></li> 
                              <li><a   <?php if($page=="showroom") echo "class='active'"; ?> href="showroom.php">Showroom</a></li> 
                              <li><a   <?php if($page=="contact") echo "class='active'"; ?> href="contact.php">Contact</a></li> 
                            </ul>
                            
                          </div>
                        </div>
                      </nav>
            </div>
        </header> <div class="clearfix"></div>
 