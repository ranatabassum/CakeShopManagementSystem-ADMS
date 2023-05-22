<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cake Shop - Menu</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>
    <header>
        <nav>
           
        </nav>
    </header>

    <section class="menu-section">
        <h1>Our Menu</h1>
        <div class="menu-item">
            <img src="../images/Cake1.jpeg" alt="Cake 1">
            <h3>Deluxe Chocolate Cake</h3>
            <p>A rich and indulgent chocolate cake layered with creamy chocolate ganache.</p>
            <span class="price">250 Taka</span>
              <!-- <div class="button-heading" > -->
                <button  class="button-order-place"> 
                    Place Order
                </button>
              <!-- </div> -->
           

        </div>
        <div class="menu-item">
            <img src="../images/Cake2.jpeg" alt="Cake 2">
            <h3>Strawberry Shortcake</h3>
            <p>Light and fluffy vanilla cake filled with fresh strawberries and whipped cream.</p>
            <span class="price">200 Taka</span>
            <button class="button-order-place"> 
                    Place Order
            </button>
        </div>

        <div class="menu-item">
            <img src="../images/Cake3.jpeg" alt="Cake 2">
            <h3>Blueberry Cheesecake</h3>
            <p>Light and fluffy Blueberry cake filled with fresh cheese .</p>
            <span class="price">350 Taka</span>
            <button class="button-order-place"> 
                    Place Order
                </button>
        </div>
        <!-- Add more menu items as needed -->
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
