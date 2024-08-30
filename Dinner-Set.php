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
            width: 300px;
            /* Increased the width to 350px */
            font-family: Arial, sans-serif;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            /* Added flex-shrink: 0 to maintain the same size in all conditions */
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
                    <button class="tab-button"
                        onclick="location.href='<?php echo strtolower(str_replace(' ', '-', $menuItem)); ?>.php'"><?php echo $menuItem; ?></button>
                <?php } ?>
                <button class="language-button" onclick="location.href='index.php'">Language</button>
            </div>
            <div class="tab-footer">
                <p>&copy;  2024 ガイレ サミル</p>
            </div>
        </div>

        <div class="content">
            <!-- Your content will be displayed here -->
            <center>
                <h1 style="font-size: 36px; font-weight: bold; color: #4CAF50;">Drink Menu!</h1>
            </center>

            <hr style="height: 5px; background-color: #4CAF50; border: none;">
            <div style="height: 100px;"></div>

            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">

                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="drink-image.jpg" alt="Drink" width="100%" height="150px" style="border-radius: 10px;">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Lassi</h3>
                    <p style="font-size: 16px; color: #666;">A yogurt-based drink, perfect for hot summer days</p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">$2.99</h4>
                </div>

                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="drink-image.jpg" alt="Drink" width="100%" height="150px" style="border-radius: 10px;">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Orange Juice</h3>
                    <p style="font-size: 16px; color: #666;">Freshly squeezed orange juice, rich in vitamin C</p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">$3.49</h4>
                </div>

                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="drink-image.jpg" alt="Drink" width="100%" height="150px" style="border-radius: 10px;">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Hot Coffee</h3>
                    <p style="font-size: 16px; color: #666;">Rich and smooth coffee, perfect for a morning pick-me-up
                    </p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">$1.99</h4>
                </div>
                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="drink-image.jpg" alt="Drink" width="100%" height="150px" style="border-radius: 10px;">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Hot Coffee</h3>
                    <p style="font-size: 16px; color: #666;">Rich and smooth coffee, perfect for a morning pick-me-up
                    </p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">$1.99</h4>
                </div>
                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="drink-image.jpg" alt="Drink" width="100%" height="150px" style="border-radius: 10px;">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Hot Coffee</h3>
                    <p style="font-size: 16px; color: #666;">Rich and smooth coffee, perfect for a morning pick-me-up
                    </p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">$1.99</h4>
                </div>
                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="drink-image.jpg" alt="Drink" width="100%" height="150px" style="border-radius: 10px;">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Hot Coffee</h3>
                    <p style="font-size: 16px; color: #666;">Rich and smooth coffee, perfect for a morning pick-me-up
                    </p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">$1.99</h4>
                </div>

                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="drink-image.jpg" alt="Drink" width="100%" height="150px" style="border-radius: 10px;">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Cold Coffee</h3>
                    <p style="font-size: 16px; color: #666;">Refreshing cold coffee, perfect for hot summer days</p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">$2.49</h4>
                </div>
                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="drink-image.jpg" alt="Drink" width="100%" height="150px" style="border-radius: 10px;">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Cold Coffee</h3>
                    <p style="font-size: 16px; color: #666;">Refreshing cold coffee, perfect for hot summer days</p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">$2.49</h4>
                </div>
                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="drink-image.jpg" alt="Drink" width="100%" height="150px" style="border-radius: 10px;">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Cold Coffee</h3>
                    <p style="font-size: 16px; color: #666;">Refreshing cold coffee, perfect for hot summer days</p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">$2.49</h4>
                </div>
            </div>
        </div>
    </div>

</body>

</html>