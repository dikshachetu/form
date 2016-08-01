<?php
require_once __DIR__ . '/classApp.php';

class User extends App{
// define variables and set to empty values
//$nameErr = $emailErr = $genderErr = $websiteErr = "";
//$name = $email = $gender = $comment = $website = "";
public function profile ($name, $email, $designation, $gender) {
    if ($this->validate_profile($name, $email, $designation, $gender)) {
        $query = "UPDATE form SET name = '$name', email = '$email', designation = '$designation', gender = '$gender' WHERE name = '$name'";
         $result = mysqli_query($this->db, $query);
            if ($result) {
              return true;
            }
            else {
              return false;
            }
        } else {
            return false;
        }  
        }
        
         public function validate_profile ($name, $email, $designation, $gender) {
if (!$this->validate_name($name)) {
return false;
}
if (!$this->validate_email) {
    return false;
}
if (!$this->validate_designation) {
 return false;   
}
if (!$this->validate_gender) {
    return false;
    }
    return true;
    }
    
    
      private function validate_name($name) {
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
}
  }
  
  private function validate_email($email) {
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    }

 
private function validate_gender($gender) {
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


    

        
       
