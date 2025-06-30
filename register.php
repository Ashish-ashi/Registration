<?php 
include 'db_connect.php';
if (
    isset($_POST['firstName'], $_POST['lastName'], $_POST['username'], $_POST['password'], $_POST['gender'], $_POST['country'], $_POST['state'], $_POST['city']) &&
    !empty($_POST['username']) && !empty($_POST['password'])
) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
   // $password=md5($password);
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];

    $query = "INSERT INTO users (first_name, last_name, username, password, gender, country, state, city) 
              VALUES ('$firstName', '$lastName', '$username', '$password', '$gender', '$country', '$state', '$city')";
    
    if (mysqli_query($con, $query)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f9;
            padding: 20px;
        }

        .registration-form {
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .registration-form h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #444;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .gender-options {
            margin-top: 10px;
        }

        .gender-options label {
            margin-right: 15px;
            font-weight: normal;
        }

        button {
            margin-top: 25px;
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
        .btn-view-data {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 20px;
            background-color:rgb(15, 216, 238);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
        } 
        .btn-view-data:hover {
            background-color:rgb(12, 179, 251);
        }
    </style>
</head>
<body>

    <form class="registration-form" action="register.php" method="post">
        <h2>User Registration</h2>

        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <label>Gender:</label>
        <div class="gender-options">
            <label><input type="radio" name="gender" value="Male" required> Male</label>
            <label><input type="radio" name="gender" value="Female"> Female</label>
            <label><input type="radio" name="gender" value="Other"> Other</label>
        </div>

        <label for="country">Country:</label>
        <select id="country" name="country" required>
            <option value="">Select Country</option>
            <option value="USA">USA</option>
            <option value="India">India</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
        </select>

<label for="state">State:</label>
    <select id="state" name="state" required>
      <option value="">Select State</option>
      <option value="Bihar">Bihar</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Punjab">Punjab</option>
      <option value="Kerala">Kerala</option>
      <option value="West Bengal">West Bengal</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Karnataka">Karnataka</option>
    </select>

    <label for="city">City:</label>
    <select id="city" name="city" required>
      <option value="">Select City</option>
      <option value="Patna">Patna</option>
      <option value="Gaya">Gaya</option>
      <option value="Bhagalpur">Bhagalpur</option>
      <option value="Muzaffarpur">Muzaffarpur</option>
      <option value="Purnia">Purnia</option>
      <option value="Darbhanga">Darbhanga</option>
      <option value="Arrah">Arrah</option>
      <option value="Begusarai">Begusarai</option>
      <option value="Katihar">Katihar</option>
      <option value="Munger">Munger</option>
    </select>

     <a href="admin.html"> <button type="submit">Register</button></a>
     <a href="data.php" class="btn-view-data">👁️ View Registered Users</a>



    </form>

</body>
</html>
