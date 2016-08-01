
<?php
include 'header.php';
require_once 'classes/classUser.php';
if (isset($_POST['submit'])) {
    if ($user->profile($_POST['name'], $_POST['email'], $_POST['designation'], $_POST['gender'])) {
       header('location;index.php'); 
    } else {
        echo 'Fill in columns correctly';
    }
}

?>

<h2>PHP Form Validation Example</h2>

<form method="post" action="">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">

  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">

  <br><br>
 
  Designation: <input type="text" name="designation" value="><?php echo $comment;?>">
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?phpinclude 'footer.php';


