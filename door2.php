<?php
// door2.php
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Arrival of ISIS Militants</title>
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
        <h1>The Arrival of ISIS Militants</h1>
    </header>

    <!-- Content Section with Image on the Left and Text on the Right -->
    <section class="content-container">
        <!-- Image Section (on the left) -->
        <div class="image-section">
            <img src="isis1.png" alt="ISIS Arrival Image" class="image-left">
            <img src="isis2.png" alt="ISIS Arrival Image" class="image-left">
        </div>

        <!-- Text Section (on the right) -->
        <div class="text-section">
            <h2>The Rise of ISIS and its Arrival in Syria</h2>
            <p>In 2013, the Islamic State of Iraq and Syria (ISIS) began to make its presence felt in Syria. Originally part of al-Qaeda, ISIS sought to establish a caliphate in the region, drawing thousands of foreign militants to join their cause. The arrival of ISIS in Syria marked a turning point in the conflict, as they fought against both the Assad regime and opposition groups.</p>
            <p>ISIS' brutal tactics and strict interpretation of Islamic law quickly led to the capture of large swathes of territory across northern and eastern Syria. The group's rise contributed to further destabilization in the region, with international forces intervening to combat the ISIS threat.</p>
            <p>By 2014, ISIS declared the formation of its so-called "caliphate," further escalating tensions and shifting the course of the Syrian Civil War. Their arrival added a new layer of complexity to an already devastating conflict.</p>
        </div>
    </section>

    <!-- Back Button Section -->
    <div class="back-button-container">
        <a href="index.html" class="back-button">Back to Home</a>
    </div>

</body>
</html>
