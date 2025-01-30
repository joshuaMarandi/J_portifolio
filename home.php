<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AI Specialist & Web Developer Portfolio</title>
    <link rel="stylesheet" href="all.css">
     <link rel="icon" type="image/jpeg" href="profile.jpeg">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="favicon-32x32.png">

    <style>
        h2{
            text-align :center;
        }
    </style>
</head>
<body>
<nav>
        <div class="logo">Marandi</div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="home">
        <div class="home-content">
            <h1>AI & Web Development Expert</h1>
            <p>Transforming Ideas into Intelligent Solutions</p>
        </div>
    </section>

    <section id="about">
    <div class="about-content">
        <div class="profile-text">
            <h2>About Me</h2>
            <p>I'm  <b>Joshua Marandi</b>, the dedicated AI specialist and web developer with expertise in creating innovative technological solutions. My journey blends cutting-edge artificial intelligence with robust web development, enabling me to craft intelligent, user-centric digital experiences.</p>
            <p>With a deep understanding of machine learning algorithms, neural networks, and modern web technologies, I specialize in developing intelligent applications that solve complex problems and drive technological innovation.</p>
        </div>
        <img src="profile.jpeg" alt="Profile Picture" class="profile-image">
    </div>
</section>

    <section id="projects">
        <h2>My Projects</h2>
        <div class="projects-container">
            <?php
            include 'connect.php';
            $result = $conn->query("SELECT * FROM projects");
            while($row = $result->fetch_assoc()) {
                echo "<div class='project-card'>";
                echo "<img src='" . $row['image_path'] . "' alt='" . $row['name'] . "'>";
                echo "<h3>" . $row['name'] . "</h3>";
                echo "<p>" . $row['description'] . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form id="contact-form" action="submit_contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <div id="message-success">Thank you! Your message has been sent successfully.</div>
    </section><footer>
    <div class="social-links">
        <a href="#" target="_blank">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.784 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
            </svg>
            LinkedIn
        </a>
        <a href="#" target="_blank">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
            </svg>
            GitHub
        </a>
        <a href="#" target="_blank">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
            </svg>
            Twitter
        </a>
        <a href="add-project.html">Add project</a>
    </div>
    <p>&copy; 2025 AI Specialist . All Rights Reserved.</p>
</footer>
    <script>
        document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(this);
    
    // Send form data via AJAX
    fetch('submit_contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        // Show success message
        document.getElementById('message-success').style.display = 'block';
        
        // Clear form
        this.reset();
        
        // Hide success message after 3 seconds
        setTimeout(() => {
            document.getElementById('message-success').style.display = 'none';
        }, 3000);
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was an error submitting your message. Please try again.');
    });
});
    </script>
</body>
</html>