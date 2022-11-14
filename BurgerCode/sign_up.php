


<form method="POST">
                       <div class="row">
                           <?php
                              if(isset($errName)){
                                 echo "<p style='color:red;'>" . $errName . "</p>";
                              }
                           ?>
                          <div class="col-sm-12">
                             <input class="contactus" placeholder="Name" type="text" name="Name">
                          </div>
                          
                           <?php
                              if(isset($errEmail)){
                                 echo "<p style='color:red;'>" . $errEmail . "</p>";
                              }
                           ?>
                          <div class="col-sm-12">
                             <input class="contactus" placeholder="Email" type="text" name="Email">
                          </div>

                           <?php
                              if(isset($errPassword)){
                                 echo "<p style='color:red;'>" . $errPassword . "</p>";
                              }
                           ?>
                          <div class="col-sm-12">
                            <input class="contactus" placeholder="Password" type="password" name="Password">
                         </div>

                          <?php
                              if(isset($errPhone)){
                                 echo "<p style='color:red;'>" . $errPhone . "</p>";
                              }
                           ?>
                         <div class="col-sm-12">
                            <input class="contactus" placeholder="Telephone" type="text" name="Phone">
                         </div>
                          
                          <div class="col-sm-12">
                             <button class="send" name="Send">Sign Up</button>
                          </div>
                       </div>
                    </form>