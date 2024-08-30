<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Tabs</title>
    <style>
        /* CSS styles to beautify the vertical tabs */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2; /* slightly darker background */
        }
        
        .vertical-tabs {
            position: absolute;
            top: 0;
            left: 0;
            width: 200px; /* fixed width for better layout */
            height: 100vh; /* 100% of viewport height */
            font-family: Arial, sans-serif;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background-color: #fff; /* pure white background */
            border-radius: 10px;
            display: flex;
            flex-direction: column;
        }
        
        .logo {
            padding: 10px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            background-color: #66d9ef; /* soft blue for the logo background */
            color: #333; /* slightly darker text color */
            border-bottom: 1px solid #ccc;
        }
        
        .tab-buttons {
            padding: 20px 0;
            overflow-y: auto; /* Add scrollbar if content exceeds height */
            flex-grow: 1;
            background-color: #efefef; /* slightly darker background */
        }
        
        .tab-button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #fff; /* pure white for active tab background */
            border: none;
            border-radius: 0;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }
        
        .tab-button:hover {
            background-color: #66d9ef; /* soft blue for hover background */
            color: #333; /* slightly darker text color */
        }
        
        .tab-button.active {
            background-color: #4CAF50; /* keep green for active background */
            color: #fff; /* white text color */
        }
        
        .tab-footer {
            padding: 10px;
            background-color: #66d9ef; /* soft blue for footer background */
            color: #333; /* slightly darker text color */
            border-top: 1px solid #ccc;
            text-align: center;
        }
        
        .language-button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #fff; /* pure white for active tab background */
            border: none;
            border-radius: 0;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }
        
        .language-button:hover {
            background-color: #66d9ef; /* soft blue for hover background */
            color: #333; /* slightly darker text color */
        }
    </style>
</head>
<body>
    <div class="vertical-tabs">
        <div class="logo">Menu</div>
        <div class="tab-buttons">
            <?php 
                $menuItems = array(
                    "ランチ　セット",
                    "デイナ セット",
                    "単品",
                    "Drinks",
                    "おかわり",
                    "お持ち帰り",
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
</body>
</html>


