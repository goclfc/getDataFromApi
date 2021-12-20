<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting and storing data from API</title>
    <link rel="stylesheet" href='css/style.css'>
</head>
<body>
    <header> 
    <h1> Hello World! </h1>
    </header>
    <form action="index.php" method="post"> 
    <input type="text" name="name" placeholder="Enter Endpoint url">
    <button type="submit" name="submit" id="submit">Submit</button>

    </form>
    <?php
 require_once 'database.php';

 if(isset($_POST["submit"])){ 

 $api_url = $_POST['name'];
 
 // Read JSON file
 $json_data = file_get_contents($api_url);
 
 // Decode JSON data into PHP array
 $response_data = json_decode($json_data);
 
 // All user data exists in 'data' object
 $user_data = $response_data->data;
 
 // Cut long data into small & select only first 10 records
 $user_data = array_slice($user_data, 0, 20);
 
 // Print data if need to debug
 //print_r($user_data);
 
 // Traverse array and display user data
 foreach($user_data as $user){
    $sql = "INSERT INTO empl (name, age)
    VALUES ('$user->employee_name', '$user->employee_age')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
     } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
     
    
 };
 
}
?>
</body>
</html>