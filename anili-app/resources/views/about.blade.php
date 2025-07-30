<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <title>Document</title>
</head>
<body>

    <div class="about-container">
        <h1 class="about-title">About Us</h1>
        <p class="about-text">This is the about page of our application.</p>
        <p class="about-text">We are dedicated to providing the best service possible.</p>
        <p class="about-text">Contact us at: <a href="mailto:info@example.com" class="about-link">info@example.com</a></p>
        <p class="about-text">Follow us on social media:</p>
        <ul class="about-social-list">    
            <li><a href="https://twitter.com/example" class="about-social-link">Twitter</a></li>
            <li><a href="https://facebook.com/example" class="about-social-link">Facebook</a></li>
            <li><a href="https://instagram.com/example" class="about-social-link">Instagram</a></li>
            <li><a href="https://linkedin.com/company/example" class="about-social-link">LinkedIn</a></li>
        </ul>
        <p class="about-text">Thank you for visiting our about page!</p>
    </div>

    <style> 


.about-container {
    max-width: 800px;
    margin: 20px auto;
    padding: 30px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.about-title {
    font-size: 2.5em;
    color: #333;
    margin-bottom: 20px;
}

.about-text {
    font-size: 1.1em;
    color: #555;
    line-height: 1.6;
    margin-bottom: 15px;
}

.about-link {
    color: #007bff;
    text-decoration: none;
}

.about-link:hover {
    text-decoration: underline;
}

.about-social-list {
    list-style: none;
    padding: 0;
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

.about-social-list li {
    margin: 0 10px;
}

.about-social-link {
    color: #007bff;
    text-decoration: none;
    font-size: 1.2em;
}

.about-social-link:hover {
    text-decoration: underline;
}
    </style>

</body>
</html>