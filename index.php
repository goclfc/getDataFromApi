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
    <form action="#"> 
    <input type="text" name="name" placeholder="Enter movie Name">
    <button type="submit" id="submit">Submit</button>

    </form>
    <?php
    $api_url = 'http://dummy.restapiexample.com/api/v1/employees';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

print_r ($response_data['0']);
?>
</body>
</html>