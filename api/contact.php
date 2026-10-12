<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /pages/contact.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$website = trim($_POST['website'] ?? '');
$crm = trim($_POST['crm'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $website === '') {
    header('Location: /pages/contact.php?error=1');
    exit;
}

mail('hello@aarnasystems.com', 'New GTM Audit Request', "Name: $name\nEmail: $email\nWebsite: $website\nCRM: $crm\nMessage: $message");

header('Location: /pages/contact.php?success=1');
exit;
