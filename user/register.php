<?php
// Import PHPMailer classes into the global namespace
require 'vendor/autoload.php'; // Adjust the path if necessary
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP; // Added this line

session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: welcome.php");
    exit();
}

include 'config.php';
$msg = "";

// Handle form submission
if (isset($_POST['submit'])) {
    // Sanitize user inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
    $code = mysqli_real_escape_string($conn, md5(rand()));

    // Check if the email already exists
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
        $msg = "<div class='alert alert-danger'>{$email} - This email address already exists.</div>";
    } else {
        if ($password === $confirm_password) {
            // Insert user data into the database
            $sql = "INSERT INTO users (name, email, password, code) VALUES ('{$name}', '{$email}', '{$password}', '{$code}')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // Create an instance of PHPMailer
                $mail = new PHPMailer(true);
                try {
                    // Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_OFF; // Change to DEBUG_SERVER for verbose output
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
                    $mail->SMTPAuth   = true; // Enable SMTP authentication
                    $mail->Username   = 'francinejane.sd@gmail.com'; // Your email address
                    $mail->Password   = 'flei sfco qtgd tfgz'; // Your email password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use TLS encryption
                    $mail->Port       = 587; // TCP port to connect to

                    // Recipients
                    $mail->setFrom('your_email@gmail.com', 'Your Name'); // Your email address
                    $mail->addAddress($email); // Add the recipient's email address

                    // Content
                    $mail->isHTML(true); // Set email format to HTML
                    $mail->Subject = 'PPTS | Verification Email';
                    $mail->Body = 'Here is the verification link: <b><a href="http://localhost/login.php/?verification='.$code.'">Verify Your Email</a></b>';


                    $mail->send();
                    $msg = "<div class='alert alert-info'>We've sent a verification link to your email address.</div>";
                } catch (Exception $e) {
                    $msg = "<div class='alert alert-danger'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
                }
            } else {
                $msg = "<div class='alert alert-danger'>Something went wrong during registration.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger'>Passwords do not match.</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Flow Drive</title>
    <link href="assets/img/PPTS.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Register Form" />
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/register.css" type="text/css" media="all" />
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/image2.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Register Now</h2>
                        <p>Register now to efficiently track and manage your project progress with our platform.</p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="text" class="name" name="name" placeholder="Enter Your Name" value="<?php if (isset($_POST['submit'])) { echo htmlspecialchars($name); } ?>" required>
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" value="<?php if (isset($_POST['submit'])) { echo htmlspecialchars($email); } ?>" required>
                            <input type="password" class="password" name="password" placeholder="Enter Your Password" required>
                            <input type="password" class="confirm-password" name="confirm-password" placeholder="Enter Your Confirm Password" required>
                            <button name="submit" class="btn" type="submit">Register</button>
                        </form>
                        <div class="social-icons">
                            <p>Have an account? <a href="index.php">Sign in</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Form section end -->

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.alert-close').on('click', function () {
                $('.main-mockup').fadeOut('slow', function () {
                    $(this).remove();
                });
            });
        });
    </script>
</body>
</html>
