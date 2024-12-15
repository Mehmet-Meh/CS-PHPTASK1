<?php
// door3.php
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hay'at Tahrir al-Sham Defeats the Assad Regime</title>
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
        <h1>Hay'at Tahrir al-Sham Defeats the Assad Regime</h1>
    </header>

    <!-- Content Section with Image on the Left and Text on the Right -->
    <section class="content-container">
        <!-- Image Section (on the left) -->
        <div class="image-section">
            <img src="hts.png" alt="HTS Defeats Assad Image" class="image-left">
            <img src="jol.png" alt="HTS Defeats Assad Image" class="image-left">
        </div>

        <!-- Text Section (on the right) -->
        <div class="text-section">
            <h2>Recent Victory: HTS and Other Militants Defeat the Assad Regime</h2>
            <p>In a major development in the Syrian Civil War, Hay'at Tahrir al-Sham (HTS), along with other militant groups, successfully defeated the Assad regime's forces in several key battles. The victory, which took place in late 2023, marked a significant shift in the balance of power in the region.</p>
            <p>HTS, once affiliated with al-Qaeda, has grown into a formidable force in northwest Syria, particularly in the Idlib region. With support from other opposition factions, HTS was able to push back the Syrian government forces and retake strategic territories that were previously under regime control.</p>
            <p>This victory has significant implications for the Syrian conflict, as it disrupts the Assad regime's control over critical areas and further complicates the geopolitical landscape. The international community continues to watch the developments closely, as the battle for Syria's future rages on.</p>
        </div>
    </section>

    <!-- Back Button Section -->
    <div class="back-button-container">
        <a href="index.html" class="back-button">Back to Home</a>
    </div>

</body>
</html>
