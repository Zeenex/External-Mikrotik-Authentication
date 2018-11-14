<!DOCTYPE html>
<html lang="en">
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

<style>
    .centered-form{
    margin-top: 60px;
}

.centered-form .panel{
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
</head>
<body>
<center>

<br /><br />

<div id="container">
    <ul>
            <li><img class="mySlides" src="1.jpg" style="width:100%"></li>
            <li><img class="mySlides" src="2.jpg" style="width:100%"></li>
            <li><img class="mySlides" src="4.jpg" style="width:100%"></li>
            <li><img class="mySlides" src="5.jpg" style="width:100%"></li>
            <li><img class="mySlides" src="6.jpg" style="width:100%"></li>
            <li><img class="mySlides" src="7.png" style="width:100%"></li>
            <li>
                 <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">Please sign up <small>It's free!</small></h3>
                        </div>
                        <div class="panel-body">
                        <form role="form" action="signin.php" method="post" enctype="multipart/form-data">
                            
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

                            <input type="submit" name="submit" value="Proceed to Internet" class="btn btn-info btn-block">
                        
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

</body>
</html>

