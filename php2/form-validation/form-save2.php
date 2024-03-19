
<?php
session_start();

$jobtitle =$_POST["jobtitle"];
$description =$_POST["description"];
$companyname =$_POST["companyname"];
$contactnumber =$_POST["contactnumber"];
$contactperson =$_POST["contactperson"];
$email =$_POST["email"];
$experience =$_POST["experience"];
$locations =$_POST["locations"];
$wordstatus =$_POST["wordstatus"];


if($jobtitle && $description && $companyname && $contactnumber && $contactperson && $email && $experience && $locations && $wordstatus){

 $data =$_REQUEST;

echo"<pre>";
print_r($data);
 
}else{
    $_SESSION['jobtitle'] = $jobtitle;
    $_SESSION['description'] = $description;
    $_SESSION['companyname'] = $companyname;
    $_SESSION['contactnumber'] = $contactnumber;

    $_SESSION['contactperson'] = $contactperson;
    $_SESSION['email'] = $email;
    $_SESSION['experience'] = $experience;
    $_SESSION['locations'] = $locations;
    $_SESSION['wordstatus'] = $wordstatus;
    // print_r($_SESSION['wordstatus']);
    // die;

    if(!$jobtitle) {
        $_SESSION['jobtitle_error'] = "jobtitle is required...";
    }
    if(!$description) {
        $_SESSION['description_error'] = " descriptionis required...";
    }
    if(!$companyname) {
        $_SESSION['companyname_error'] = "companyname is required...";
    }
    if(!$contactnumber) {
        $_SESSION['contactnumber_error'] = "contactnumber is required...";
    }
    if(!$contactperson) {
        $_SESSION['contactperson_error'] = "contactperson is required...";
    }
    if(!$email) {
        $_SESSION['email_error'] = "email is required...";
    }
    if(!$experience) {
        $_SESSION['experience_error'] = "experience is required...";
    }
    if(!$locations) {
        $_SESSION['locations_error'] = "locations is required...";
    }
    if(!$wordstatus) {
        $_SESSION['wordstatus_error'] = "wordstatus is required...";
    }

    $_SESSION['error'] = "All fields are required...";
    header("location: form-validation2.php");

}

?>