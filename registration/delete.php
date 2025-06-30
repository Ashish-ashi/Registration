<?php
include 'db_connect.php';
$id = intval($_GET['id']);
$query =  "DELETE FROM users WHERE id = $id";
      if (mysqli_query($con, $query)) {
            echo "User with ID $id deleted successfully.";
        }
?>
<a href="data.php" 
    style="display: inline-block; padding: 6px 12px; background-color: #28a745; color: white; text-decoration: none; border-radius: 4px; font-size: 14px;"
    onmouseover="this.style.backgroundColor='#218838';" 
   onmouseout="this.style.backgroundColor='#28a745';">
   👁️ View Users After Deletion
</a>
