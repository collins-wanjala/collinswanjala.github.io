<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($current_page); ?>Collins Wanjala</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-brand">
                    <a href="index.php" class="brand-link">
                    <img src="assets/images/logo.jpg" alt="Logo" class="site-logo">
                        <span class="site-name">Collins Wanjala</span>
    </a>      
                    <a href="index.php">Collins Wanjala</a>
                </div>
                
                <ul class="nav-menu">
                    <li><a href="index.php" class="<?php echo $current_page == 'home' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="<?php echo $current_page == 'about' ? 'active' : ''; ?>">About</a></li>
                    <li><a href="portfolio.php" class="<?php echo $current_page == 'portfolio' ? 'active' : ''; ?>">Portfolio</a></li>
                    
                    <li><a href="contact.php" class="<?php echo $current_page == 'contact' ? 'active' : ''; ?>">Contact</a></li>
                    <li><a href="assets/cv.pdf" class="btn btn-outline" download><i class="fas fa-download"></i> CV</a></li>
                </ul>
                
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>
