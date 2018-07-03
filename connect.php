<?php
include_once "header.php";
?>
<!-- <script type="text/javascript">
  $('ul li a').live('click', function() {
    let numClicked = $(this).parent('li').index();
    $("a").each(function(index) {
      if (index <= numClicked) {
        $(this).addClass('active-red');
      } else {
        $(this).removeClass('active-red');
      }
    });
  });
</script> -->

        <!-- Основная часть Хочу помочь -->

        <div class="container want_to_help_wrapper animated slideInLeft">
            <ul id="vkladki" class="nav nav-tabs" role="tablist" style="">
              <li class="nav-item">
                <a class="nav-link" href="#children" role="tab" data-toggle="tab">Дети</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#adults" role="tab" data-toggle="tab">Взрослые</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#older" role="tab" data-toggle="tab">Пожилые</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pets" role="tab" data-toggle="tab">Животные</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active show" id="children" name="children">
	             	<?php
                        //$servername = "localhost";
						//$username = "aizhurek-usr";
						//$password = "aizhurek-usr";
						//$dbname = "aizhurek-db";

	             		$servername = "srv-pleskdb35.ps.kz:3306";
						$username = "aizhu_admin";
						$password = "P@$$w0rd";
						$dbname = "aizhurek_aizhurek-db";

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						$conn->set_charset('utf8');
						// Check connection
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						}

						$sql1 = "SELECT name, auditory, direction, website, contactsname, address, phone, email, social, point, logoname FROM children";
						$result1 = $conn->query($sql1);

						$sql2 = "SELECT name, auditory, direction, website, contactsname, address, phone, email, social, point, logoname FROM adults";
						$result2 = $conn->query($sql2);

						$sql3 = "SELECT name, auditory, direction, website, contactsname, address, phone, email, social, point, logoname FROM elderly";
						$result3 = $conn->query($sql3);

						$sql4 = "SELECT name, auditory, direction, website, contactsname, address, phone, email, social, point, logoname FROM animals";
						$result4 = $conn->query($sql4);

                        if ($result1->num_rows > 0) {
						    // output data of each row
						    while($row1 = $result1->fetch_assoc()) {
						        if( null == $row1["logoname"] ) {
							        echo '<div class="my_card2">
	                                                <div class="card_inner_text"><img src="img/default1.jpg" width="10%" height="10%" class="want_to_help_image">
	                                                    <h5>' . $row1["name"] . '</h5>';}
	                            else{
	                            	echo '<div class="my_card2">
	                                                <div class="card_inner_text"><img src="img/' . $row1["logoname"] .'" width="80px" height="80px" class="want_to_help_image">
	                                                    <h5>' . $row1["name"] . '</h5>';
	                            }
                                echo '<div class="column">
                                                        ';
                                if( null != $row1["contactsname"] ) { echo '<i class="fas fa-user"></i>   ';  echo $row1["contactsname"]; echo '<br>';}

                                if( null != $row1["address"] ) { echo '<i class="fas fa-map-marker-alt"></i>   '; echo $row1["address"]; echo '<br>'; }

                                if( null !=  $row1["website"] ) { echo '<i class="fas fa-globe"></i>   <a href="'.$row1["website"].'" class="white" target="blank"><span class="accent">   '; echo $row1["website"]; echo '</span></a>'; }


                                echo '</div><div class="column">';

                                if( null != $row1["phone"] ) { echo '<i class="fas fa-phone"></i>   '; echo $row1["phone"]; echo '<br>';}

                                if( null != $row1["email"] ) { echo '<i class="fas fa-envelope-square"></i><span class="accent">   '; echo $row1["email"]; echo '</span><br>';}

                                echo '</div><div class="clear"></div>
                                                    <h6 style="text-align: left;"><i class="fas fa-bullseye"></i>   ';
                                echo $row1["direction"];
                                echo '</h6>
                                                </div>
                                            </div>
                                            <div class="clear"></div>';
						    }
						}
                    ?>
	            </div>
                <div role="tabpanel" class="tab-pane fade in active show" id="adults" name="adults">
                	<?php
                	if ($result2->num_rows > 0) {
						    // output data of each row
						    while($row2 = $result2->fetch_assoc()) {
						        if( null == $row2["logoname"] ) {
							        echo '<div class="my_card2">
	                                                <div class="card_inner_text"><img src="img/default1.jpg" width="10%" height="10%" class="want_to_help_image">
	                                                    <h5>' . $row2["name"] . '</h5>';}
	                            else{
	                            	echo '<div class="my_card2">
	                                                <div class="card_inner_text"><img src="img/' . $row2["logoname"] .'" width="80px" height="80px" class="want_to_help_image">
	                                                    <h5>' . $row2["name"] . '</h5>';
	                            }
                                echo '<div class="column">
                                                        ';
                                if( null != $row2["contactsname"] ) { echo '<i class="fas fa-user"></i>   ';  echo $row2["contactsname"]; echo '<br>';}

                                if( null != $row2["address"] ) { echo '<i class="fas fa-map-marker-alt"></i>   '; echo $row2["address"]; echo '<br>'; }

                                if( null !=  $row2["website"] ) { echo '<i class="fas fa-globe"></i>   <a href="'.$row2["website"].'" class="white" target="blank"><span class="accent">   '; echo $row2["website"]; echo '</span></a>'; }


                                echo '</div><div class="column">';

                                if( null != $row2["phone"] ) { echo '<i class="fas fa-phone"></i>   '; echo $row2["phone"]; echo '<br>';}

                                if( null != $row2["email"] ) { echo '<i class="fas fa-envelope-square"></i><span class="accent">   '; echo $row2["email"]; echo '</span><br>';}

                                echo '</div><div class="clear"></div>
                                                    <h6 style="text-align: left;"><i class="fas fa-bullseye"></i>   ';
                                echo $row2["direction"];
                                echo '</h6>
                                                </div>
                                            </div>
                                            <div class="clear"></div>';
						    }
						}
                	?>
                </div>
                <div role="tabpanel" class="tab-pane fade in active show" id="older" name="older">
                	<?php
                	if ($result3->num_rows > 0) {
						    // output data of each row
						    while($row3 = $result3->fetch_assoc()) {
						        if( null == $row3["logoname"] ) {
							        echo '<div class="my_card2">
	                                                <div class="card_inner_text"><img src="img/default1.jpg" width="10%" height="10%" class="want_to_help_image">
	                                                    <h5>' . $row3["name"] . '</h5>';}
	                            else{
	                            	echo '<div class="my_card2">
	                                                <div class="card_inner_text"><img src="img/' . $row3["logoname"] .'" width="80px" height="80px" class="want_to_help_image">
	                                                    <h5>' . $row3["name"] . '</h5>';
	                            }
                                echo '<div class="column">
                                                        ';
                                if( null != $row3["contactsname"] ) { echo '<i class="fas fa-user"></i>   ';  echo $row3["contactsname"]; echo '<br>';}

                                if( null != $row3["address"] ) { echo '<i class="fas fa-map-marker-alt"></i>   '; echo $row3["address"]; echo '<br>'; }

                                if( null !=  $row3["website"] ) { echo '<i class="fas fa-globe"></i>   <a href="'.$row3["website"].'" class="white" target="blank"><span class="accent">   '; echo $row3["website"]; echo '</span></a>'; }


                                echo '</div><div class="column">';

                                if( null != $row3["phone"] ) { echo '<i class="fas fa-phone"></i>   '; echo $row3["phone"]; echo '<br>';}

                                if( null != $row3["email"] ) { echo '<i class="fas fa-envelope-square"></i><span class="accent">   '; echo $row3["email"]; echo '</span><br>';}

                                echo '</div><div class="clear"></div>
                                                    <h6 style="text-align: left;"><i class="fas fa-bullseye"></i>   ';
                                echo $row3["direction"];
                                echo '</h6>
                                                </div>
                                            </div>
                                            <div class="clear"></div>';
						    }
						}
                	?>
                </div>
                <div role="tabpanel" class="tab-pane fade in active show" id="pets" name="pets">
                	<?php
                	if ($result4->num_rows > 0) {
						    // output data of each row
						    while($row4 = $result4->fetch_assoc()) {
						        if( null == $row4["logoname"] ) {
							        echo '<div class="my_card2">
	                                                <div class="card_inner_text"><img src="img/default1.jpg" width="10%" height="10%" class="want_to_help_image">
	                                                    <h5>' . $row4["name"] . '</h5>';}
	                            else{
	                            	echo '<div class="my_card2">
	                                                <div class="card_inner_text"><img src="img/' . $row4["logoname"] .'" width="80px" height="80px" class="want_to_help_image">
	                                                    <h5>' . $row4["name"] . '</h5>';
	                            }
                                echo '<div class="column">
                                                        ';
                                if( null != $row4["contactsname"] ) { echo '<i class="fas fa-user"></i>   ';  echo $row4["contactsname"]; echo '<br>';}

                                if( null != $row4["address"] ) { echo '<i class="fas fa-map-marker-alt"></i>   '; echo $row4["address"]; echo '<br>'; }

                                if( null !=  $row4["website"] ) { echo '<i class="fas fa-globe"></i>   <a href="'.$row4["website"].'" class="white" target="blank"><span class="accent">   '; echo $row4["website"]; echo '</span></a>'; }


                                echo '</div><div class="column">';

                                if( null != $row4["phone"] ) { echo '<i class="fas fa-phone"></i>   '; echo $row4["phone"]; echo '<br>';}

                                if( null != $row4["email"] ) { echo '<i class="fas fa-envelope-square"></i><span class="accent">   '; echo $row4["email"]; echo '</span><br>';}

                                echo '</div><div class="clear"></div>
                                                    <h6 style="text-align: left;"><i class="fas fa-bullseye"></i>   ';
                                echo $row4["direction"];
                                echo '</h6>
                                                </div>
                                            </div>
                                            <div class="clear"></div>';
						    }
						}
                	?>
                </div>
            </div>
        </div>
<div class="clear"></div>
<?php
include_once "footer.php";
?>
