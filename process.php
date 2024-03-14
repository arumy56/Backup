<?php 
$host = 'localhost';
$username = 'root'; 
$password = ''; 
$database = 'formi';



$conn=new mysqli($host,$username,$password,$database);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}

if(isset($_POST["submit"])){

    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];


    $sql = "INSERT INTO form_data(name,phone,product,quantity,address) VALUES(?,?,?,?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssis", $name,$phone,$product,$quantity,$address);

    if($stmt->execute()){
        echo "Your order has been received";
    } else {
        echo "error failed: ".$conn->error;

    }
$stmt->close();
$conn->close();

}
// Check if the form has been submitted
// if(isset($_POST['submit'])) {
//     // Check if all required form fields are set
//     if(isset($_POST['name'], $_POST['phone'], $_POST['product'], $_POST['quantity'], $_POST['address'])) {
        
//         // Create a new MySQLi connection
//         $conn = new mysqli($host, $username, $password, $database);

//         // Check the connection
//         if($conn->connect_error) {
//             die("Connection failed: " . $conn->connect_error);
//         }

//         // Retrieve form data
//         $name = $_POST['name'];
//         $phone = $_POST['phone'];
//         $product = $_POST['product'];
//         $quantity = $_POST['quantity'];
//         $address = $_POST['address'];

//         // Prepare SQL statement to insert data into MySQL database
//         $sql = "INSERT INTO form_data (name, phone, product, quantity, address) VALUES (?, ?, ?, ?, ?)";
//         $stmt = $conn->prepare($sql);
//         $stmt->bind_param("sssis", $name, $phone, $product, $quantity, $address);

//         // Execute prepared statement
//         if ($stmt->execute()) {
//             echo "Your order has been received"; 
//         } else {
//             echo "Error processing your order: " . $conn->error;
//         }

//         // Close statement and connection
//         $stmt->close();
//         $conn->close();
//     } else {
//         echo "All form fields are required";
//     }
// } else {
//     echo "Form not submitted";
// }
?>
