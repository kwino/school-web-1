<?php 
  session_start(); 
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dominican College of Tarlac</title>
    
	<link rel="stylesheet" href="css/about.css" type="text/css" />
    
    <!-- Navigation -->
	<script type="text/javascript" src="nav_js/jquery.js" ></script>
	<script type="text/javascript" src="nav_js/jquery-bp.js" ></script>
	<script type="text/javascript" src="nav_js/navigation.js" ></script>
    
    <!-- login_panel -->
    <script src="login_panel/js/jquery-1.3.2.min.js" type="text/css" media="screen"></script>
    <script src="login_panel/js/slide.js" type="text/css" media="screen"></script>
    <link href="login_panel/css/slide.css" rel="stylesheet" type="text/css">
    <link href="login_panel/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="header"></div>
	<div id="navigation" class="container">
        <div id="bg">
            <div id="home" class="pri-nav"><div><a href="index.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
            <div id="about" class="pri-nav"><div><a href="calendar_guest.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
            <div id="services" class="pri-nav"><div><a href="gallery_guest.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
            <div id="solutions" class="pri-nav"><div><a href="about_guest.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
            <div id="contact" class="pri-nav"><div><a href="contact_sign.php"><img src="home.jpg" width="97" height="50"/></a></div></div>
        </div>
	</div>
        
    <div class="container">
        <div class="content">
            <div id="content-title">
                <div id="goalObj">
                    <div id="objectives">
                    	<p class="obj">
                        	This college of Dominican charism is established as an institution of learning that provides integral service to the youth who are to be formed specifically according to the essential aspects of learning.<br><br>
                            <b>Congnitive (Sapientia)</b><br>
                            </p>
                            <li class="object">Possess fundamental knowledge of basic education subjects</li>
                            <li class="object">Be equipped with skills for social communication</li>
                            <li class="object">Acquired knowledge pertinent to general and basic social information</li>
                            <li class="object">Be consciously aware of Christian moral values</li>
                  
                        	<p><b>Affective (Fides)</b></p><br>
                            <li class="object">Appreciate God´s gift of life and love</li>
                            <li class="object">Manifest possible attitude towards personal work</li>
                            <li class="object">Consider and love every person as a fellow</li>
                            
                            <p><b>Psycho-Motor (Patria)</b></p><br>
                            <li class="object">Inculcate authentic Filipino Spirit in community participation</li>
                            <li class="object">Show appreciate for culture and tradition, life and arts</li>
                            <li class="object">Respect duly constituted authority</li>
                            <li class="object">Promote understanding and goodwill in the community</li>
                </div>
                </div>  
            	<div id="visionMission">
                	<div id="vision">
                    	<p class="vis">
                        	A God-loving, nationalistic and disciplined educational community for the formation of a competent person which passion for truth and compassion, for humanity.</p>
                    </div>
                    <div id="mission">
                    	<p class="mis">
                        	We, the members of the community of the Dominican College of Tarlac, conscious of our Christian vocation and faithful to God's call for evangelization, under the material guidance of the Blessed Virgin Mary and the inspiration of St. Dominic, commit ourselves to the holistic formation and the person, the promotion of truth and transformation of values for a life of dedicated service to humanity.
                        </p>
                    </div>
                 	<div id="goal">
                    	<p class="go">
 						The Dominican College of Tarlac is established, primarily, for the integral education of the person. As such, it aims to provide quality formal education within an environment conducive to learning cognitively, affectively and psycho-socially. The institution is committed to contribute academically sound and skillful individuals to the community; to form young people to be authentically God-loving Christians; and, to produce citizens who will be effectively contributing and valuable members of the society
                        </p>
                    </div>	                 
                 </div>          
            </div>
        </div>
         <div id="footer">
            <p class="foot">
            	<a href="index.php"><font color="#FF9900">home</font> </a> |
                <a href="calendar_guest.php"><font color="#FF0000">calendar </font></a> |
                <a href="gallery_guest.php"><font color="#3366CC">gallery </font></a> |
                <a href="about_guest.php"><font color="#33CC33">about</font></a> |
               <a href="contact_sign.php"><font color="#6666FF">contact</font></a>
            </p>
            
            <p class="link">
                <a href="#"><img src="img/fb.png"></a>
                <a href="#"><img src="img/twitter.png"></a>
                </p>
    			</div>
    </div>
    
    <div id="toppanel">
        <div id="panel">
        	<div class="content clearfix">
        		<div class="left">
        			<p class="grey" align="center">
        				<br><img src="../Images/logo.png" width="150" height="150"/></p>
        		</div>
                <div class="left">
                    <h2>Welcome to Dominican College of Tarlac</h2>
                    <h2>Sliding login panel Demo with jQuery</h2>		
                    <p class="grey">You can put anything you want in this sliding panel: videos, audio, images, forms... The only limit is your imagination!</p> 
                </div>
                <div class="left right">
                	<form class="clearfix" action="#" method="post">
                        <h1>Login:</h1>
                        <label class="grey" for="log">Username:</label>
                        <input class="field" type="text" name="username" id="username" value="" size="23" />
                        <label class="grey" for="pwd">Password:</label>
                        <input class="field" type="password" name="password" id="password" size="23" />
                        <label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
                        <div class="clear">	
                            <input type="submit" name="submit" value="Login" class="bt_login" />
                            <input type="submit" name="reg_submit" value="Register" class="bt_register" />
                        </div>
                	</form>             
				</div>
			</div>
		</div>        
        <div class="tab">
            <ul class="login">
                <li class="left">&nbsp;</li>
                <li>Hello Guest!</li>
                <li class="sep">|</li>
                <li id="toggle">
                <a id="open" class="open" href="#">Log In | Register </a>
                <a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
                </li><li class="right">&nbsp;</li>
            </ul> 
        </div>
    </div> 
    
<?php
  error_reporting (E_ALL ^ E_NOTICE);
  include('sql.php');
  mysql_select_db("prototype");
  $sql = mysql_query("CREATE TABLE register(
					  Firstname varchar(255),
					  Lastname varchar(255),
					  Age int,
					  Gender varchar(255),
					  Email varchar(255),
					  Username varchar(255),
					  Password varchar(255),
					  CPassword varchar(255),
					  Status varchar(255)
					  )");
  
  $admin = mysql_query("CREATE TABLE admin_access(
					  ADMIN_Username varchar(255),
					  ADMIN_Password varchar(255)
					  )");
  
  $mail = mysql_query("CREATE TABLE inquiry_message(
					  Name varchar(255),
					  Email varchar(255),
					  Message varchar(255)
					  )");
  
  if(isset($_POST['submit'])) {
	$username =$_POST['username'];
	$password =$_POST['password'];
	
	if(!empty($username) && !empty($password)) {  
	  $sql = mysql_query("SELECT * FROM register WHERE Username = '".$username."' AND 
	  Password = '".$password."' LIMIT 1");
	  
	  $admin = mysql_query("SELECT * FROM admin_access WHERE ADMIN_Username = '".$username."' AND 
	  ADMIN_Password = '".$password."' LIMIT 1");
  
	  if(mysql_num_rows($sql)>0) {
		$_SESSION['loggedin']= true;
		$_SESSION['username']= $username;
		$_SESSION['password']= $password;
		
		echo'<script>window.location="login_home.php"</script>';
		
		mysql_query("UPDATE register SET Status = 'IN'
		WHERE Username = '".$username."' AND Password = '".$password."'");
	  }
	  if(mysql_num_rows($admin)>0) {
		$_SESSION['username']= $username;
		$_SESSION['password']= $password;
		
		echo'<script>window.location="admin_info_reg.php"</script>';
	  } 
	  else {
		echo'<script>alert("Incorrect password or Username. Please fill it up properly")</script>';
	  }
	}
	else {
	  echo'<script>alert("You must enter a username and a password")</script>';
	}
  }	
?>
</body>
</html>

