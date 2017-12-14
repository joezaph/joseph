
<?php error_reporting(0); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/login.css" type="text/css" />
</head>

<body>
	<div class="logokonga">
    <img src="img/images.jpg" width="200"; height="60";/>
    </div>
    
    

     <div class="sign">
     
     <div class="signn">
  <h3>please log in to continue</h3>
     </div>

     <?php 

  $con = mysql_connect("localhost","root","");
  
  mysql_select_db("konga", $con);

     if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $password= $_POST['password'];

  $sql = "SELECT email, password FROM users WHERE email ='$email' AND password = '$password'";
$result = mysql_query($sql, $con);
if(mysql_num_rows($result) > 0)
{
header('location: home.php');
}
else {
$error = " <h3 style= 'color:red;'>you have enter incorrect Username or  password </h3>";
}
}
 

     ?>
        
        <table>
        	<form action="" method="post">
            <br />
                 <tr>  
                    <td>
                    	<button class="loginBtn loginBtn--facebook">
                      Login with Facebook
                    </button>
                 
                    </td> 
                 <tr>
                 		
                 
                 <tr>  
                    <td>
                     
                                <button class="loginBtn loginBtn--google">
                          Login with Google
                        </button>
                        <p> <?php echo $error ;?> </p>
                    
                   <h3 style="margin-top:40px;"><span>OR</span></h3>
                    </td>
                 </tr> 
                    
                    
                   <tr>
                   
                       <td>
                       <input type="text" name="email" placeholder="please enter your email or phone number" height="100	" />
                      
                       </td>
                   </tr> 
                   
                   <tr>
                   		<td>
                        <input type="password" name="password" placeholder="password"
                        
                        </td>
                   </tr>
                   
                  <tr>
                   		<td>
                       <h4> <a href="#">forgot your password?</a></h4>
                        
                        </td>
                   </tr>
                   
                    <tr>
                   		<td>
                        <input type="submit" name="submit" placeholder="log in" value="log me in" /> 
                        
                        </td>
                   </tr>
                   
                  
                  
                   
                   
                    
                    
            </form>    
        </table>
        
       
     </div>
                <p> dont have an account? <a href="signin.php"><u>sign up</u></a> </p>   
</body>
</html>
