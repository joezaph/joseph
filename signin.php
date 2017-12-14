
<?php error_reporting(0); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sign in</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
	
    
    

     <div class="sign">
     
     <div class="signn">
   <h2>sign up </h2>
     </div>

<?php

  $con = mysql_connect("localhost","root","");
  
  mysql_query("CREATE DATABASE konga ", $con);
  
  mysql_select_db("konga", $con);

  mysql_query("CREATE TABLE users

  (
  title varchar (8),
  fname varchar (30),
  lname varchar (30),
  email varchar (30),
  pnumber varchar (30),
  password varchar (30),
  cpassword varchar (30)
  
  )

  ",$con);

  if(isset($_POST["submit"])){

  $title = $_POST['title'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pnumber = $_POST['pnumber'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  if ($password == $cpassword){

  $insert = mysql_query("INSERT INTO users
  
  (title,fname, lname, email, pnumber, password, cpassword)
  VALUES
  ('$title','$fname','$lname','$email','$pnumber','$password','$cpassword')

  ",$con);

  if($insert){
  
  $print =  "YOU ARE SUCCESSFULLY REGISTERED";
  }
}
else {

  $error = "password are not matched";
}
  }

  mysql_close($con);
  ?>
           	
        
        <table >
        	<form action="" method="post" >
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
                    
                   <h3 style="margin-top:20px;"><span>OR</span></h3>
                   <h4 style="margin-top:20px; "><?php echo $print; ?></h4>
                   <h4 style="margin-top:20px;"><?php echo $error; ?></h4>
                    </td>

                 </tr> 
                 
                 <tr>
                 	<td> 
                 	  <table width="200">
                 	    <tr>
                 	      <td><label>
                          <select name="title" required>
                 	        <option>Mr</option>
                          <option>Mrs</option>
                          <option>Miss</option>
                          </select>
               	      </tr>
               	    </table></td>
                 </tr>
                 
                 
                  <tr>
                 	<td> 
                 	  <table width="395">
                 	    <tr>
                 	      <td><input type="text" placeholder="first name"  name="fname" required height="100	" /></td>
                            
                             
                            <td><input type="text" placeholder="last name" name="lname" required height="100	" /></td>
               	      </tr>
               	    </table></td>
                  </tr>
                    
                     
                   <tr>
                       <td>
                       <input type="text" placeholder=" email address"  name="email" required height="100	" />
                       </td>
                   </tr> 
                   
                  <tr>
                    <td>
                       <input type="text" placeholder="phone number" name="pnumber" required height="100	" />
                      
                       </td>
                   </tr> 
                   
                   <tr>
                   		<td>
                        <input type="password" placeholder="password" required name="password"
                        
                        </td>
                   </tr>
                   
                   <tr>
                   		<td>
                        <input type="password" placeholder="confirm password" required name="cpassword"
                        
                        </td>
                   </tr>
                   
                  <tr>
                   		<td>
                       <h4> <a href="#">forgot your password?</a></h4>
                        
                        </td>
                   </tr>
                   
                    <tr>
                   		<td>
                        <input type="submit"  name="submit" placeholder="log in" value="sign me up" /> 
                        
                        </td>
                   </tr>
                   
                
                   
                   
                    
                    
            </form>    
        </table>
        
       
     </div>
                <p> already have an account? <a href="login.php"><u>log in</u></a> </p>   
</body>
</html>

