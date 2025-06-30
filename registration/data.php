<?php 
include 'db_connect.php';
$sql="SELECT * FROM users";
$rs=mysqli_query($con,$sql);
?>
<body>
<style>
table {
    width: 90%;
    max-width: 1200px;
    margin: 40px auto;
    border-collapse: collapse;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 15px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
}
thead th {
    padding: 16px 20px;
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    border-right: 2px solid #fff;
}
thead th:nth-child(1) { background: #ff6f91; } 
thead th:nth-child(2) { background: #ff9671; } 
thead th:nth-child(3) { background: #ffc75f; } 
thead th:nth-child(4) { background: #8ed2c9; } 
thead th:nth-child(5) { background: #1a936f; }
thead th:nth-child(6) { background: #3a86ff; }
thead th:nth-child(7) { background: #8338ec; } 
thead th:nth-child(8) { background: #ff3f00; }
thead th:nth-child(9) { background: #ffbc42; } 
thead th:nth-child(10){ background: #1982c4; } 
thead th:first-child {
    border-top-left-radius: 12px;
}
thead th:last-child {
    border-top-right-radius: 12px;
    border-right: none;
}
td {
    padding: 14px 20px;
    border-bottom: 1px solid #eee;
    color: #444;
    background-color: #fafafa;
}
tbody tr:nth-child(odd) td {
    background-color: #ffffff;
}

tbody tr:nth-child(even) td {
    background-color: #f0f8ff;
}
td:last-child {
    border-right: none;
}
@media (max-width: 768px) {
    table, thead, tbody, th, td, tr {
        display: block;
    }
    thead {
        display: none;
    }
    tr {
        margin-bottom: 18px;
        background: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
        border-radius: 10px;
        padding: 14px 20px;
    }
    td {
        position: relative;
        padding-left: 50%;
        text-align: left;
        border-bottom: none;
    }
    td::before {
        content: attr(data-label);
        position: absolute;
        left: 20px;
        top: 16px;
        font-weight: 700;
        color: #555;
    }
}
</style>
</body>
<table border ="1" width="60%">
    <tr> 
        <th>ID</th> <th>First Name</th><th>Last Name</th><th>Username</th><th>Password</th><th>Gender</th><th>Country</th><th>State</th><th>City</th> <th>Date_Time</th>
    <th>Action</th></tr>
    <?php while($row=mysqli_fetch_array($rs)){ ?>
<tr>
    <td data-label="ID"><?php echo $row['id']; ?></td>
    <td data-label="First Name"><?php echo $row['first_name']; ?></td>
    <td data-label="Last Name"><?php echo $row['last_name']; ?></td>
    <td data-label="Username"><?php echo $row['username']; ?></td>
    <td data-label="Password"><?php echo $row['password']; ?></td>
    <td data-label="Gender"><?php echo $row['gender']; ?></td>
    <td data-label="Country"><?php echo $row['country']; ?></td>
    <td data-label="State"><?php echo $row['state']; ?></td>
    <td data-label="City"><?php echo $row['city']; ?></td>
    <td data-label="Date/Time"><?php echo $row['created_at']; ?></td>
    <td data-label="Action">
        <a href="update.php?id=<?php echo $row['id'];?>">Edit</a> , <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
    </td>
</tr>
    
<?php } ?>
</table>
<a href="register.php" 
    style="display: inline-block; padding: 6px 12px; margin-left:150px ; background-color: #28a745; color: white; text-decoration: none; border-radius: 4px; font-size: 14px;"
    onmouseover="this.style.backgroundColor='#218838';" 
   onmouseout="this.style.backgroundColor='#28a745';">
   New Registration
</a>
 
