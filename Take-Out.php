<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch Set</title>
    <link rel="stylesheet" href="./style.css">

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
                    <button class="tab-button"
                        onclick="location.href='<?php echo strtolower(str_replace(' ', '-', $menuItem)); ?>.php'"><?php echo $menuItem; ?></button>
                <?php } ?>
                <button class="language-button" onclick="location.href='index.php'">Language</button>
            </div>
            <div class="tab-footer">
                <p>&copy; 2024 ガイレ サミル</p>
            </div>
        </div>

        <div class="content">
            <!-- Your content will be displayed here -->
            <center>
                <h1 style="font-size: 36px; font-weight: bold; color: #4CAF50;">Takeout Menu!</h1>
            </center>

            <hr style="height: 5px; background-color: #4CAF50; border: none;">
            <div style="height: 100px;"></div>

            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">

                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <!-- <img src="takeout-image1.jpg" alt="Takeout Set 1" width="100%" height="150px" style="border-radius: 10px;"> -->
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Nan or Rice and curry</h3>
                    <p style="font-size: 16px; color: #666;">A set containing rice or naan bread, chicken curry</p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">860円</h4>
                </div>

                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <!-- <img src="takeout-image2.jpg" alt="Takeout Set 2" width="100%" height="150px" style="border-radius: 10px;"> -->
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Naan or rice and curry + Tandoori
                        chicken</h3>
                    <p style="font-size: 16px; color: #666;">A set containing rice, chicken tikka masala, and garlic
                        naan</p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">990円</h4>
                </div>

                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <!-- <img src="takeout-image3.jpg" alt="Takeout Set 3" width="100%" height="150px" style="border-radius: 10px;"> -->
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Naan or rice and curry + chicken
                        tikka set</h3>
                    <p style="font-size: 16px; color: #666;">A set containing rice, lamb curry, and roti bread</p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">1190円</h4>
                </div>

            </div>

            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; padding-top: 5%; ">

                <div
                    style="width: auto%; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="assist/takeoutmenu.jpg" alt="Ice Cream" width="100%" height="100%" style="border-radius: 10px;">

                </div>

            </div>
        </div>
    </div>

</body>

</html>