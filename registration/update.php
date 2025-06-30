<?php
include 'db_connect.php';
$userData=null;
$id = intval($_GET['id']);
 $result = mysqli_query($con, "SELECT * FROM users WHERE id = $id");
        $userData = mysqli_fetch_assoc($result);     
if (
    isset($_POST['firstName'], $_POST['lastName'], $_POST['username'], $_POST['password'], $_POST['gender'], $_POST['country'], $_POST['state'], $_POST['city'])
){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
   // $password=md5($password);
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];

     $query = "UPDATE users SET 
                    first_name='$firstName', 
                    last_name='$lastName', 
                    username='$username',
                    password='$password', 
                    gender='$gender', 
                    country='$country', 
                    state='$state', 
                    city='$city' 
                    WHERE id=$id";
     if (mysqli_query($con, $query)) {
        echo "User updated successfully!!";
     }
    }
?>
<body>
    <style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.update-form {
    max-width: 600px;
    margin: 50px auto;
    padding: 30px 40px;
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
}
.update-form h2 {
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

/* Labels */
.update-form label {
    display: block;
    margin-top: 15px;
    font-weight: 600;
    color: #555;
}

/* Input Fields & Select */
.update-form input[type="text"],
.update-form select {
    width: 100%;
    padding: 10px 12px;
    margin-top: 6px;
    border: 1px solid #ccc;
    border-radius: 6px;
    background-color: #f9f9f9;
    transition: border-color 0.3s, background-color 0.3s;
}
.update-form input[type="text"]:focus,
.update-form select:focus {
    border-color: #007BFF;
    background-color: #fff;
    outline: none;
}
.gender-options {
    display: flex;
    gap: 20px;
    margin-top: 10px;
}

.gender-options label {
    font-weight: normal;
    color: #444;
}
.update-form button[type="submit"] {
    margin-top: 25px;
    width: 100%;
    padding: 12px;
    background-color: #007BFF;
    border: none;
    color: white;
    font-size: 16px;
    font-weight: 600;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.update-form button[type="submit"]:hover {
    background-color: #0056b3;
}
@media (max-width: 600px) {
    .update-form {
        padding: 20px;
    }

    .gender-options {
        flex-direction: column;
    }
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
</body>
<form class="update-form" action="update.php?id=<?= $id ?>"
method="post">
    <h2>Update User</h2>

    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required value="<?php echo $userData['first_name'];?>">

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required value="<?php echo $userData['last_name'];?>">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required value="<?php echo $userData['username'];?>">

    <label for="password">Password:</label>
    <input type="text" id="password" name="password" required value="<?php echo $userData['password'];?>">

    <label>Gender:</label>
    <div class="gender-options">
        <label><input type="radio" name="gender" value="Male" <?= $userData['gender'] === 'Male' ? 'checked' : '' ?> required> Male</label>
        <label><input type="radio" name="gender" value="Female" <?= $userData['gender'] === 'Female' ? 'checked' : '' ?>> Female</label>
        <label><input type="radio" name="gender" value="Other" <?= $userData['gender'] === 'Other' ? 'checked' : '' ?>> Other</label>
    </div>

    <label for="country">Country:</label>
    <select id="country" name="country" required>
        <option value="">Select Country</option>
        <option value="USA" <?= $userData['country'] === 'USA' ? 'selected' : '' ?>>USA</option>
        <option value="India" <?= $userData['country'] === 'India' ? 'selected' : '' ?>>India</option>
        <option value="UK" <?= $userData['country'] === 'UK' ? 'selected' : '' ?>>UK</option>
        <option value="Canada" <?= $userData['country'] === 'Canada' ? 'selected' : '' ?>>Canada</option>
    </select>

    <label for="state">State:</label>
    <select id="state" name="state" required>
      <option value="">Select State</option>
      <option value="Bihar" <?= $userData['state'] === 'Bihar' ? 'selected' : '' ?>>Bihar</option>
      <option value="Maharashtra" <?= $userData['state'] === 'Maharashtra' ? 'selected' : '' ?>>Maharashtra</option>
      <option value="Tamil Nadu" <?= $userData['state'] === 'Tamil Nadu' ? 'selected' : '' ?>>Tamil Nadu</option>
      <option value="Uttar Pradesh" <?= $userData['state'] === 'Uttar Pradesh' ? 'selected' : '' ?>>Uttar Pradesh</option>
      <option value="Gujarat" <?= $userData['state'] === 'Gujarat' ? 'selected' : '' ?>>Gujarat</option>
      <option value="Punjab" <?= $userData['state'] === 'Punjab' ? 'selected' : '' ?>>Punjab</option>
      <option value="Kerala" <?= $userData['state'] === 'Kerala' ? 'selected' : '' ?>>Kerala</option>
      <option value="West Bengal" <?= $userData['state'] === 'West Bengal' ? 'selected' : '' ?>>West Bengal</option>
      <option value="Rajasthan" <?= $userData['state'] === 'Rajasthan' ? 'selected' : '' ?>>Rajasthan</option>
      <option value="Karnataka" <?= $userData['state'] === 'Karnataka' ? 'selected' : '' ?>>Karnataka</option>
    </select>

    <label for="city">City:</label>
    <select id="city" name="city" required>
      <option value="">Select City</option>
      <option value="Patna" <?= $userData['city'] === 'Patna' ? 'selected' : '' ?>>Patna</option>
      <option value="Gaya" <?= $userData['city'] === 'Gaya' ? 'selected' : '' ?>>Gaya</option>
      <option value="Bhagalpur" <?= $userData['city'] === 'Bhagalpur' ? 'selected' : '' ?>>Bhagalpur</option>
      <option value="Muzaffarpur" <?= $userData['city'] === 'Muzaffarpur' ? 'selected' : '' ?>>Muzaffarpur</option>
      <option value="Purnia" <?= $userData['city'] === 'Purnia' ? 'selected' : '' ?>>Purnia</option>
      <option value="Darbhanga" <?= $userData['city'] === 'Darbhanga' ? 'selected' : '' ?>>Darbhanga</option>
      <option value="Arrah" <?= $userData['city'] === 'Arrah' ? 'selected' : '' ?>>Arrah</option>
      <option value="Begusarai" <?= $userData['city'] === 'Begusarai' ? 'selected' : '' ?>>Begusarai</option>
      <option value="Katihar" <?= $userData['city'] === 'Katihar' ? 'selected' : '' ?>>Katihar</option>
      <option value="Munger" <?= $userData['city'] === 'Munger' ? 'selected' : '' ?>>Munger</option>
    </select>

    <button type="submit">Update</button>
     <a href="data.php" class="btn-view-data">👁️ View Updated Users</a>

</form>                       