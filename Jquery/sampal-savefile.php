<?php




//isme first row submit nhi ho rahi h
// $data = $_POST;

// for ($i=1; $i < count($_POST['email']); $i++) { 
    
//     $name = $data['name'][$i];
//     $email = $data['email'][$i];
//     $phone = $data['phone'][$i];  
    
//     if (!empty($name) || !empty($email) || !empty($phone)) {
//         if (empty($name)) {
//             $name = '';
//         }
//         if (empty($email)) {
//             $email = '';
//         }
//         if (empty($phone)) {
//             $phone = '';
//         }

//         $inQuery = "INSERT INTO `teams`(`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone')";
//     $con->query($inQuery);

//     $_SESSION['sucess'] = "data save successfully";

//     } else {
//          $_SESSION['error'] = "Somthing went wrong";
//     }

// }
// header("location: team-list.php");




//isse sab kuch sahi aa raha h
// if($_POST){
//     // Get form submitted data
//     $names = $_POST['name'];
//     $emails = $_POST['email'];
//     $phones = $_POST['phone'];

//     // Loop through submitted data and insert into database
//     foreach($names as $key => $value){
//         $name = $value;
//         $email = $emails[$key];
//         $phone = $phones[$key];

//         $sql = "INSERT INTO teams (name, email, phone) VALUES ('$name', '$email', '$phone')";
//         if($con->query($sql) === TRUE){
//             // Data inserted successfully
//             echo "Data inserted successfully.";
//         } else{
//             // Error while inserting data
//             echo "Error while inserting data: " . $con->error;
//         }
//     }
   
// }
// header("location: team-list.php");







    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "company_managment";

    // // Create connection
    // $conn = mysqli_connect($servername, $username, $password, $dbname);

    // // Check connection
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    // if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
    //     $names = $_POST['name'];
    //     $emails = $_POST['email'];
    //     $phones = $_POST['phone'];
    //     $totalRecords = count($names);

    //     // prepare and bind query
    //     $stmt = $conn->prepare("INSERT INTO teams (name, email, phone) VALUES (?, ?, ?)");
    //     $stmt->bind_param("sss", $name, $email, $phone);

    //     for($i=0; $i<$totalRecords; $i++) {
    //         // set parameters and execute query
    //         $name = $names[$i];
    //         $email = $emails[$i];
    //         $phone = $phones[$i];
    //         $stmt->execute();
    //     }

    //     echo "Records inserted successfully!";
    // }

    // // Close connection
    // mysqli_close($conn);



    // session_start();

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "company_managment";
    
    // // Create connection
    // $con = new mysqli($servername, $username, $password, $dbname);
    
    // // Check connection
    // if ($con->connect_error) {
    //     die("Connection failed: " . $con->connect_error);
    // }
    
    // if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
    //     $names = $_POST['name'];
    //     $emails = $_POST['email'];
    //     $phones = $_POST['phone'];
    //     $totalRecords = count($names);
    
    //     // Initialize an array to store the data
    //     $data = array();
    
    //     for ($i = 0; $i < $totalRecords; $i++) {
    //         // Store each record in the array
    //         $record = array(
    //             'name' => $names[$i],
    //             'email' => $emails[$i],
    //             'phone' => $phones[$i],
    //         );
    //         $data[] = $record;
    
    //         // Save each record to the database table
    //         $name = mysqli_real_escape_string($con, $names[$i]);
    //         $email = mysqli_real_escape_string($con, $emails[$i]);
    //         $phone = mysqli_real_escape_string($con, $phones[$i]);
    //         $inQuery = "INSERT INTO teams (name, email, phone) VALUES ('$name', '$email', '$phone')";
    //         if ($con->query($inQuery) !== TRUE) {
    //             echo "Error: " . $con->error;
    //             die();
    //         }
    //     }
    
    //     // Store the data array in a session variable
    //     $_SESSION['team_data'] = $data;
    
    //     // Redirect to a page to display the data
    //     header("location: team-list.php");
    //     exit();
    // }
    
    // $con->close();




// if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
//     $names = $_POST['name'];
//     $emails = $_POST['email'];
//     $phones = $_POST['phone'];
//     $totalRecords = count($names);

//     for($i=0; $i<$totalRecords; $i++) {
//         echo "Name: ".$names[$i]."<br>";
//         echo "Email: ".$emails[$i]."<br>";
//         echo "Phone: ".$phones[$i]."<br><br>";
//     }
// }

// try {
//     if ($names && $emails && $phones) {
//         $inQuery "INSERT INTO `teams`(`name`, `email`, `phone`) VALUES ('$names', '$emails', '$phones')";
    
//         $con->query($inQuery);
    
//         $_SESSION['success'] = "Record successfullys saved.....";
//     } else {
//         $_SESSION['success'] = "Record successfullys saved.....";
//     }
    
//     header("location: team-list.php");
// } catch (Exception $e) {
//     echo $e->getMessage();
//     die();
// }


// $data = $_POST;

// echo "<pre>";
// print_r($data);

// $name = $data['name[]'];
// $email = $data['email[]'];
// $phone = $data['phone[]'];


?>