<?php
$current_page = 'contact';
$feedback = '';  // to hold success/error messages

// Include your DB connection file here; adjust the path as needed
include 'includes/db.php';  // This file must create $conn (mysqli connection)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // sanitize inputs
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $user_message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // basic validation
    if ($name && $email && $subject && $user_message) {
        // Prepare and bind statement
        $stmt = $conn->prepare("INSERT INTO contacts (full_name, email, subject, message, created_at) VALUES (?, ?, ?, ?, NOW())");
        if ($stmt === false) {
            $feedback = '<div class="alert alert-error">Prepare failed: ' . htmlspecialchars($conn->error) . '</div>';
        } else {
            $stmt->bind_param("ssss", $name, $email, $subject, $user_message);
            if ($stmt->execute()) {
                $feedback = '<div class="alert alert-success">Thank you for your message! I\'ll get back to you soon.</div>';
            } else {
                $feedback = '<div class="alert alert-error">Execute failed: ' . htmlspecialchars($stmt->error) . '</div>';
            }
            $stmt->close();
        }
    } else {
        $feedback = '<div class="alert alert-error">Please fill in all fields.</div>';
    }
}

include 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>Contact Me</h1>
            <p>Let's discuss your next project</p>
        </div>
    </section>
    <section class="contact-content">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Get In Touch</h2>
                    <p>I'm always interested in new opportunities and exciting projects.
                        Whether you have a question or just want to say hi, feel free to reach out!</p>
                    <!-- contact info and social links here -->
                </div>

                <div class="contact-form">
                    <h2>Send Message</h2>
                    <?php echo $feedback; ?>

                   <form method="POST" action="">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required value="<?php echo isset($subject) ? htmlspecialchars($subject) : ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required><?php echo isset($user_message) ? htmlspecialchars($user_message) : ''; ?></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
