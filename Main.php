
<!DOCTYPE html>

<html>
	<head>
		<title>My First Login Page</title>	
		 

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	<style>
             body {
	         margin: 0;
	         padding: 0;
	         height: 100%;
	         background-color: #efefef;
     		}
         
        </style>
        
	</head>	
	
	<body cz-shortcut-listen="true">
	    
		<div class ="login-form" style="top: 100px; border-radius:1%;width:280px;" >
		
                <p style="color:red;">
		        <?php 
		        if(isset($_REQUEST["error"]))echo $_REQUEST["error"];
		        ?>
		        </p>
		
			
			    
                <a href="index.php">
			    <div class="row">
			  
			    <div class="col-sm-4 col-xs-12 text-center">
			    <img src="images/Logo.png"  class="img-responsive" width="100px"  height="92">
			    </div>
			    
			    <div class="col-sm-8 col-xs-12" >
			        <blockquote>
                  
			            <p>PRD Kindergarten & High School</p>
			            <small style="color:green;"><i>"Child Friendly Quality Education"<i></small>
			         
			        </blockquote>
                    </div>
                      </a>
                    </div>
                  <div>
			        <br>
			        <div class="login_header">
			            Sign in with you own valid ID
			        </div>
			  
			    <form  action="MainP.php" method="post" role="form">
			    
				<div class="form-group" >
					<p>
                       <i><b><label></label> </b></i>
                       <input class="form-control valid" type ="text" name = "uname" placeholder = "Enter username">
                       
                    </p>
				</div>
				
				<div class="form-group" >
				    <p>
                        <i><b><label></label></b></i>
				        <input class="form-control" type ="password" name = "password" placeholder = "Enter password">
				    </p>
					
				</div>
				
				<div >
					
					
					
                    <button type ="submit" id = "btn" name = "submit" class="btn btn-block btn-primary p-lg-left-right">Login</button>					
					
					<!--<a href="demo.php" id="btn">Login</a>-->
				
                
				</div>
			
                </div>
				
			</form>
			
			
		</div>
		
		<style>
                          a > div > div.col-sm-4.col-xs-12.text-center > img {
       margin-top: -4px;
   }
   form > p > input {
       width: 49%!important;
       margin-right: 2px;
   }
   form > p > a {
       width: 49%!important;
   }
    .text-center {
        text-align: center;
    }

    .login-form {
        width: 75%;
        max-width: 350px;
        margin: auto;
        position: absolute;
        left: 0;
        right: 0;
        padding: 20px;
        border: 1px solid #dddddd;
        background-color: #ffffff;
    }

    .form-group {
        margin: 0 0 10px;
    }

    blockquote {
        padding: 5px 6px;
        margin: 0 0 5px;
        font-size: 15px;
    }

    input.form-control, textarea.form-control {
        min-height: 32px;
        padding-left: 10px;
        border: 2px solid #e0e0e0;
        border-radius: 2px;
        box-shadow: none;
        color: #494949;
        font-size: 14px;
        line-height: 14px;
    }

    .form-control {
        padding: 50px;
        display: block;
        width: 98%;
        height: 35px;
        padding: 6px 12px;
        font-size: 13px;
        line-height: 1.42857;
        color: #7d7d7d;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 2px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }


        .form-control:focus {
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
        }

        .form-control::-moz-placeholder {
            color: #e0e0e0;
            opacity: 1;
        }

        .form-control:-ms-input-placeholder {
            color: #e0e0e0;
        }

        .form-control::-webkit-input-placeholder {
            color: #e0e0e0;
        }

        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
            cursor: not-allowed;
            background-color: #f2f2f2;
            opacity: 1;
        }

    input.form-control:hover, textarea.form-control:hover {
        border-color: #094F9F;
    }

    input.form-control:focus, textarea.form-control:focus {
        color: #094F9F;
        border-color: #497FAF;
    }

    .btn {
        padding: 12px 10px;
        font-size: 14px;
        line-height: 14px;
        border-radius: 2px;
        border-width: 2px;
        text-transform: capitalize;
        -webkit-font-smoothing: antialiased;
        width: 99%;
        /*float: right;*/
        /* margin:  20px 0 20px 10px; */
        cursor: pointer;
    }
    
    #CaptchaImage ~ a.btn {
        
        padding: 6px 12px;
    }
    .btn-primary:hover {
        background-color: #094F9F;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #094F9F;
        border-color: transparent;
    }

    .btn-primary, .btn-primary:focus {
        color: #fff;
        background-color: #497FAF;
    }

    .btn-primary {
        border-color: transparent;
    }

        img#CaptchaImage {
            height: 55px;
        }

    #CaptchaImage ~ a {
        display: inline;
    }
    input.form-control, textarea.form-control {
        border-color: #d1edf1;
    }
        </style>
		
	</body>
	
</html>
    
    
    
    
    
	
	

