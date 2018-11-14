

<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sterling Bank</title>
<link rel="stylesheet" type="text/css" href="css/cssstyles.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>
    .centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
<body>
    <?php
if(isset($_POST["submit"])){
    global $connection;
	if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['department']) && !empty($_POST['gender'])){

    $mac=$_POST['mac'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $linklogin=$_POST['link-login'];
    $linkorig=$_POST['link-orig'];
    $error=$_POST['error'];
    $trial=$_POST['trial'];
    $loginby=$_POST['login-by'];
    $chapid=$_POST['chap-id'];
    $chapchallenge=$_POST['chap-challenge'];
    $linkloginonly=$_POST['link-login-only'];
    $linkorigesc=$_POST['link-orig-esc'];
    $macesc=$_POST['mac-esc'];
    $identity=$_POST['identity'];
    $bytesinnice=$_POST['bytes-in-nice'];
    $bytesoutnice=$_POST['bytes-out-nice'];
    $sessiontimeleft=$_POST['session-time-left'];
    $uptime=$_POST['uptime'];
    $refreshtimeout=$_POST['refresh-timeout'];   
    $linkstatus=$_POST['link-status'];  

		
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$department = $_POST['department'];
		$gender = $_POST['gender'];
		
		
		
		    //DB Connection
		$conn = new mysqli('localhost', 'gidibusi_sterling', 'sterling@2018') or die(mysqli_error());
		//Select DB From database
		$db = mysqli_select_db($conn, 'gidibusi_sterlingbank') or die("databse error");
		//Selecting database
		$query = mysqli_query($conn, "SELECT * FROM customers WHERE email='".$email."'");
		$numrows = mysqli_num_rows($query);
		if($numrows == 0)
		{
		    ob_start();
			//Insert to Mysqli Query
			$sql = "INSERT INTO customers(first_name,last_name,age,email,phone,department,gender) VALUES('$first_name','$last_name','$age','$email','$phone','$department','$gender')";
			$result = mysqli_query($conn, $sql);
			//Result Message
			if($result){
			    
            ?>
            
            <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    	    
			    	    <a class="btn btn-info btn-block" href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&amp;username=T-<?php echo $macesc; ?>">Free Trial</a>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
            
            <?php
                 
			}
			else
			{
				echo "<script language='javascript'>alert('Please Try again');</script>";
			}
			ob_end_flush();
		}
		else
		{
			
			echo "<script language='javascript'>alert('That Email already exists!');</script>";
		}

	}
	else
	{
		?>
		<!--Javascript Alert -->
        <script>alert('Required all felds');</script>
        <?php
	}
		    
		}
?>
<center>

<br /><br />

<div id="container">
	<ul>
      	<li><img src="img/1.png" /></li>
            <li><img src="img/2.png" /></li>
            <li><img src="img/3.png" /></li>
            <li>
                 <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="<?php echo $PHP_SELF;?>" method="post">
			    		    
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>
			    			 <div class="form-group">
                                            <select class="form-control" name="age">
                                                <option class="hidden"  selected disabled>Please select your Age Range</option>
                                                <option>18-22</option>
                                                <option>23-27</option>
                                                <option>28-32</option>
                                                <option>33 and above</option>
                                            </select>
                             </div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>
			    			<div class="form-group">
			    				<input type="phone" name="phone" id="phone" class="form-control input-sm" placeholder="Phone Number">
			    			</div>
			    			<div class="form-group">
			    				<input type="text" name="department" id="department" class="form-control input-sm" placeholder="Department">
			    			</div>
			    			 <div class="form-group">
                                            <select class="form-control" name="gender">
                                                <option class="hidden"  selected disabled>Please select your Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                             </div>
                             <input type="hidden" name="link-login-only" value="<?php echo $linkloginonly; ?>">
                             <input type="hidden" name="link-orig-esc" value="<?php echo $linkorigesc; ?>">
                            <input type="hidden" name="mac-esc" value="<?php echo $macesc; ?>">
			    			<input type="submit" name="submit" value="Proceed to Internet" class="btn btn-info btn-block">
			    			
			    		    <?php if($trial == 'yes') : ?> 
			    		    <a class="btn btn-info btn-block" href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&amp;username=T-<?php echo $macesc; ?>">Trial Internet</a>
			    		    <?php endif; ?>
			    		</form>
			    		
			    		
			    		
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
                
            </li>


      </ul>
      

<div id="nextbtn">

      
      <span class="button nextButton"></span>
</div>
</div>
</center>

<script src="jquery-1.4.2.min.js"></script>

<script>
$(window).load(function(){
		var pages = $('#container li'), current=0;
		var currentPage,nextPage;
		var handler=function(){
			$('#container .button').unbind('click');
			currentPage= pages.eq(current);
			

				if (current >= pages.length-1)
					current=0;
				else
					current=current+1;
				nextPage = pages.eq(current);	

				nextPage.css("marginLeft",416);
				nextPage.show();
				nextPage.animate({ marginLeft: 0 }, 800,function(){
					$('#container .button').bind('click',handler);
				});

		}



		$('#container .button').click(handler);
		
});

</script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<?php if($chapid) : ?> 
<script type="text/javascript" src="js/md5.js"></script>
<script type="text/javascript">
<!--
    function doLogin() {
    <?php if(strlen($chapid) < 1) echo "return true;\n"; ?>
    document.sendin.username.value = document.login.username.value;
    document.sendin.password.value = hexMD5('<?php echo $chapid; ?>' + document.login.password.value + '<?php echo $chapchallenge; ?>');
    document.sendin.submit();
    return false;
    }
//-->
</script>
<?php endif; ?>

<script type="text/javascript">
  document.login.username.focus();
</script>
</body>
</html>
