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
                $menuItems = [
                    'Lunch Set',
                    'Dinner Set',
                    'Individual item',
                    'Drinks',
                    'Refills',
                    'Take Out',
                    'Dessert',
                ];

                foreach ($menuItems as $menuItem) { ?>
                    <button class="tab-button" onclick="location.href='<?php echo strtolower(
                        str_replace(' ', '-', $menuItem)
                    ); ?>.php'"><?php echo $menuItem; ?></button>
                <?php }
                ?>
                <button class="language-button" onclick="location.href='index.php'">Language</button>
            </div>
            <div class="tab-footer">
                <p>&copy; 2024 ガイレ サミル</p>
            </div>
        </div>

        <div class="content">
            <!-- Your content will be displayed here -->
            <center>
                <h1 style="font-size: 36px; font-weight: bold; color: #4CAF50;">Dessert Menu!</h1>
            </center>

            <hr style="height: 5px; background-color: #4CAF50; border: none;">
            <div style="height: 100px;"></div>

            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">

                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="vannila-ice-cream.jpg" alt="Vanilla Ice Cream" width="100%" height="150px"
                        style="border-radius: 10px;">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Vanilla Ice Cream</h3>
                    <p style="font-size: 16px; color: #666;">A classic and creamy dessert made with vanilla</p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">450円</h4>
                </div>
                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="strawberry-ice-cream.jpg" alt="Strawberry Ice Cream" width="100%" height="150px"
                        style="border-radius: 10px;">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Strawberry Ice Cream</h3>
                    <p style="font-size: 16px; color: #666;">Sweet and tangy strawberry ice cream</p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">450円</h4>
                </div>
                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="blueberry-ice-cream.jpg" alt="Blueberry Ice Cream" width="100%" height="150px"
                        style="border-radius: 10px;">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Blueberry Ice Cream</h3>
                    <p style="font-size: 16px; color: #666;">Taste the sweetness of fresh blueberries</p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">450円</h4>
                </div>
                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="mango-ice-cream.jpg" alt="Mango Ice Cream" width="100%" height="150px"
                        style="border-radius: 10px;">
                    <h3 style="font-size: 24px; font-weight: bold; margin-top: 10px;">Mango Ice Cream</h3>
                    <p style="font-size: 16px; color: #666;">Experience the tropical taste of mango</p>
                    <h4 style="font-size: 20px; font-weight: bold; color: #4CAF50;">450円</h4>
                </div>


<!-- --------------- -->


            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">

                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="assist/ice cream.webp" alt="Ice Cream" width="100%" height="100%"
                        style="border-radius: 10px;">

                </div>
                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="assist/ice cream.webp" alt="Ice Cream" width="100%" height="100%"
                        style="border-radius: 10px;">

                </div>
                <div
                    style="width: 250px; background-color: #f7f7f7; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <img src="assist/ice cream.webp" alt="Ice Cream" width="100%" height="100%"
                        style="border-radius: 10px;">

                </div>
            </div>



        </div>
    </div>

</body>

</html>