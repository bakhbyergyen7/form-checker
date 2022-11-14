<html>
<head>
  <title>Thank You For Your Order</title>
</head>
<body>
<h2 class="text-center">Order Confirmation</h2><br><br>
            <?php
            $username = $_POST['uname'];
            $password = $_POST['psw'];

            $answer1 = $_POST['shipping-answers'];

            $gatorade = $_POST['gatorade'];
            $sprite = $_POST['sprite'];
            $sparklingwater = $_POST['sparkling-water'];

            $gatoradeprice = $gatorade * 1.50;
            $spriteprice = $sprite * 2.50;
            $sparklingwaterprice = $sparklingwater * 1.00;
        
            echo "Welcome, $username !\n";
            echo "<br>";
            echo "Your password is $password \n";
            echo "<br>";
            if ($answer1 == "A") {echo "Shipping: Free 7 day \n"; }
            if ($answer1 == "B") {echo "Shipping: $50.00 over night"; }
            if ($answer1 == "C") {echo "Shipping: $5.00 three day"; }

            if ($answer1 == "A") {$shippingfee = 0;}
            if ($answer1 == "B") {$shippingfee = 50;}
            if ($answer1 == "C") {$shippingfee = 5;}


            echo "<br>";
            echo "<b>Order details: </b>\n";
            echo "<br>";
            echo "<u>Product | Quantity | Price</u>";
            echo "<br>";
            echo "Gatorade | $gatorade | $ $gatoradeprice";
            echo "<br>";
            echo "Sprite | $sprite | $ $spriteprice";
            echo "<br>";
            echo "Sparkling Water | $sparklingwater | $ $sparklingwaterprice";
            echo "<br>";
            $netprice = $gatoradeprice+$spriteprice+$sparklingwaterprice+$shippingfee;
            echo "<b>Net Price: $ $netprice</b>";
            echo "<br>";
            ?>
</body>
</html>