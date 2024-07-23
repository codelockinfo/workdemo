<?php
$errors = array();


if (empty($_POST['username'])) {
    $errors['username'] = 'Username is required';
} else {
    // Additional validation if needed
    $username = $_POST['username'];
    
    
    if ($username === 'existing_username') {
        $errors['username'] = 'Username already exists';
    }
}

// Validate email
if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required';
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Invalid email format';
}

// Validate password
if (empty($_POST['password'])) {
    $errors['password'] = 'Password is required';
} elseif (strlen($_POST['password']) < 8) {
    $errors['password'] = 'Password must be at least 8 characters long';
}

// If there are no errors, return success
if (empty($errors)) {
    echo 'success';
} else
 {
    // Return errors in JSON format
    echo json_encode($errors);
}
?>
