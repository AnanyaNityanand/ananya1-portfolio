<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);
    $address = htmlspecialchars($_POST['address']);
} else {
    echo "Invalid Request!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Application Submitted</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Application Submitted Successfully 🎉</h2>
  <div class="details">
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    <p><strong>Course:</strong> <?php echo $course; ?></p>
    <p><strong>Address:</strong> <?php echo nl2br($address); ?></p>
  </div>
  <a href="index.html"><button>Back to Form</button></a>
</div>
</body>
</html>
