<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch Set</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to bottom right, #4f0d60, #666f73);
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        
        .container {
            display: flex;
            height: 100vh;
        }
        
        .vertical-tabs {
            position: relative;
            width: 200px;
            font-family: Arial, sans-serif;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
        }
        
        .logo {
            padding: 10px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            background-color: #b39267;
            color: #fff;
            border-bottom: 1px solid #ccc;
        }
        
        .tab-buttons {
            padding: 20px 0;
            overflow-y: auto;
            flex-grow: 1;
            background-color: #efefef;
        }
        
        .tab-button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #fff;
            border: none;
            border-radius: 0;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }
        
        .tab-button:hover {
            background-color: #ffd700;
            color: #333;
        }
        
        .tab-button.active {
            background-color: #4CAF50;
            color: #fff;
        }
        
        .tab-footer {
            padding: 10px;
            background-color: #766e85;
            color: #fff;
            border-top: 1px solid #ccc;
            text-align: center;
        }
        
        .language-button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #fff;
            border: none;
            border-radius: 0;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }
        
        .language-button:hover {
            background-color: #ffd700;
            color: #333;
        }
        
        .content {
            padding: 20px;
            flex-grow: 1;
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="vertical-tabs">
            <div class="logo">Menu</div>
            <div class="tab-buttons">
            <?php 
                $menuItems = array(
                    "Lunch Set",
                    "Dinner Set",
                    "Individual item",
                    "Drinks",
                    "Refills",
                    "Take Out",
                    "Dessert"
                );
                
                foreach ($menuItems as $menuItem) { ?>
                <button class="tab-button" onclick="location.href='<?php echo strtolower(str_replace(' ', '-', $menuItem)); ?>.php'"><?php echo $menuItem; ?></button>
            <?php } ?>
            <button class="language-button" onclick="location.href='index.php'">Language</button>
        </div>
        <div class="tab-footer">
            <p>&copy; 2023 samirgaire10</p>
    </div>
    </div>
        <div class="content">
            <!-- Your content will be displayed here -->
<center><h1>Lunch Menu!</h1></center>

<hr style="height: 5px; background-color: #4CAF50; border: none;">
<div style="height: 100px;"></div>

<div style="display: flex; flex-wrap: wrap; gap: 10px;">
<div style="width: 350px; height: 350px; background-color: #ccc; border: 1px solid #aaa; border-radius: 40px; display: flex; flex-direction: column; align-items: center;">
    <h2 style="text-align: center; padding: 10px;">Chicken Curry Set</h2>
    <hr style="height: 2px; background-color: #4CAF50; border: none; width: 80%;">
    <img src="curry.jpg" alt="Chicken Curry" style="width: 80%; height: 150px; object-fit: cover; border-radius: 10px; margin: 20px;">
    <ul style="list-style: none; padding: 0; margin: 0; width: 80%;">
        <li style="padding: 10px; border-bottom: 1px solid #aaa;">Chicken Curry</li>
        <li style="padding: 10px; border-bottom: 1px solid #aaa;">Nan or Rice</li>
        <li style="padding: 10px; border-bottom: 1px solid #aaa;">Soup and Salad</li>
        <li style="padding: 10px;">Drinks</li>
    </ul>
    <p style="padding: 10px; font-weight: bold;">Price: 810 yen</p>
</div>

    <div style="width: 350px; height: 350px; background-color: #ccc; border: 1px solid #aaa; border-radius: 40px;"></div>
    <div style="width: 350px; height: 350px; background-color: #ccc; border: 1px solid #aaa; border-radius: 40px;"></div>
    <div style="width: 350px; height: 350px; background-color: #ccc; border: 1px solid #aaa; border-radius: 40px;"></div>
    <!-- add more boxes as needed -->
</div>

        </div>
    </div>
</body>
</html>

