<?php
include_once('configemp.php');


    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
        $names = $_POST['name'];
        $emails = $_POST['email'];
        $phones = $_POST['phone'];
        $totalRecords = count($names);

        // prepare and bind query
        $stmt = $conn->prepare("INSERT INTO teams (name, email, phone) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $phone);

        for($i=0; $i<$totalRecords; $i++) {
            // set parameters and execute query
            $name = $names[$i];
            $email = $emails[$i];
            $phone = $phones[$i];
            $stmt->execute();
        }

        echo "Records inserted successfully!";
    }

    // Close connection
  




// $data = $_POST;

// // echo "<pre>";
// // print_r($data);

// $name = $data['name'];
// $gender = $data['gender'];
// $age = $data['age'];
// $city = $data['city'];

// try {
//     if ($name) {
//         $inQuery = "INSERT INTO `employees` (`name`, `gender`, `age`, `city`) VALUES 
//         ('$name', '$gender', $age, '$city')";

//         $con->query($inQuery);

//         $_SESSION['success'] = "Record successfullys saved.....";

//     } else {
//         $_SESSION['error'] = "Somthing went wrong.....";
//     }
    

//         header("location: employees-list.php");
// } catch (Exception $e) {
//     echo $e->getMessage();
//     die();
// }


?>