<?php

  $con = mysql_connect("localhost","root","");
  
  mysql_query("CREATE DATABASE konga ",$con);
  
  mysql_select_db("konga",$con);

  mysql_query("CREATE TABLE users

  (
  title varchar (8),
  fname varchar (30),
  lname varchar (30),
  email varchar (30),
  pnumber varchar (30),
  password varchar (30),
  cpassword varchar (6),
  
  )

  ",$con);
  if(isset($_POST["submit"])){

  $insert = mysql_query("INSERT INTO users
  
  (title,fname, lname, email, pnumber, password, cpassword)
  VALUES
  ('$_POST[title]','$_POST[email]','$_POST[pnumber]','$_POST[password]','$_POST[cpassword]')

  ",$con);

  if($insert){
  
  $print =  "YOU ARE SUCCESSFULLY REGISTERED";
  }
  }

  mysql_close($con);
  ?>