<?php 


  if (isset($Selim ['Submit'])) {

    $firstname = $Selim['Firstname'];
    
    $lastname = $Selim['Lastname'];

    $Email = $Selim['E-mail'];
    
    $address = $Selim['Address'];
    
    $age = $Selim['Age'];

    $Password = $Selim['Password'];

    $Gender = $Selim['Gender'];
    
    $Employed = $Selim['Employed'];
    
    $descritpion = $Selim['Description'];
    
    $sql = "INSERT INTO `users`(`Firstname`, `Lastname`,`E-mail`, `Address` , ` Age ` , Password`, `Gender` ,`Description`,`Employed`) VALUES ('$firstname','$lastname','$Email','$Password','$gender')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New person created successfully.";

    }else{

      echo "Warning,Error!:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2> Selim's Sign-up Form</h2>

<form action="" method="Selim">

  <fieldset>

    <legend>Personal Information:</legend>

    First Name:<br>

    <input type="text" name="Firstname">

    <br>

    Last Name:<br>

    <input type="text" name="Lastname">

    <br>

    E-mail:<br>

    <input type="E-mail" name="E-mail">

    <br>
    Address:<br>

    <input type="Address" name="Address">

    <br>
    Age:<br>

    <input type="Age" name="Age">

    <br>

    Password:<br>

    <input type="Password" name="Password">

    <br>
    Description:<br>

    <input type="Description" name="Description">

    <br>
    <br>
    Employed:<br>

<input type="checkbox" name="check" checked="true" value="1" />

<br>

    Gender:<br>

    <input type="Radio" name="Gender" value="Male">Male

    <input type="Radio" name="Gender" value="Female">Female

    <br><br>

    <input type="Submit" name="Submit" value="Submit">

  </fieldset>

</form>

</body>

</html>


