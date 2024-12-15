<?php
// door1.php
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Beginning of the Syrian Civil War</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* General Body Styles */
        body {
            font-family: 'Cairo', sans-serif;
            background: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        /* Header Styles */
        header {
            background: linear-gradient(to right, #2c3e50, #34495e); /* Dark gradient */
            padding: 20px 0;
            text-align: center;
            color: white;
        }

        header h1 {
            font-size: 2.5em;
            font-weight: 600;
        }

        /* Content Container Styles */
        .content-container {
            display: flex;
            flex-direction: row;
            gap: 30px;
            margin: 20px;
            justify-content: center;
        }

        /* Image Section (Left) */
        .image-section {
            flex: 1;
            max-width: 400px;
        }

        .image-left {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Text Section (Right) */
        .text-section {
            flex: 2;
            max-width: 600px;
        }

        .text-section h2 {
            font-size: 1.8em;
            color: #34495e;
        }

        .text-section p {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 15px;
        }

        /* Back Button Styles */
        .back-button-container {
            text-align: center;
            margin-top: 30px;
        }

        .back-button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #2c3e50;
            color: white;
            font-size: 1.2em;
            font-weight: 600;
            text-decoration: none;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .back-button:hover {
            background-color: #34495e;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>The Beginning of the Syrian Civil War</h1>
    </header>

    <!-- Content Section with Image on the Left and Text on the Right -->
    <section class="content-container">
        <!-- Image Section (on the left) -->
        <div class="image-section">
            <img src="syrian_civil_war_image.jpg" alt="Syrian Civil War Image" class="image-left">
            <img src="syrian_civil_war_image3.jpg" alt="Syrian Civil War Image" class="image-left">
        </div>

        <!-- Text Section (on the right) -->
        <div class="text-section">
            <h2>The Arab Spring and the Birth of the Conflict</h2>
            <p>The Syrian Civil War, which began in 2011, was a direct consequence of the Arab Spring—a wave of protests across the Arab world demanding political change and reform. In Syria, these protests started as peaceful demonstrations calling for the resignation of President Bashar al-Assad, who had been in power for over a decade.</p>
            <p>Initially, the movement was inspired by successful uprisings in Tunisia, Egypt, and other countries. However, the Assad regime responded with brutal force, using security forces to suppress the protests. This crackdown led to an escalation of violence, eventually spiraling into a full-scale civil war.</p>
            <p>The war would soon involve multiple factions, both internal and external, leading to one of the most complex and devastating conflicts in modern history, with millions displaced and thousands dead.</p>
        </div>
    </section>

    <!-- Back Button Section -->
    <div class="back-button-container">
        <a href="index.html" class="back-button">Back to Home</a>
    </div>

</body>
</html>
