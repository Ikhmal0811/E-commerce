<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-purchase page</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100..900&family=Playwrite+DK+Loopet:wght@100..400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <a href="index.html">HOME</a>
        <a href="purchase.php">PURCHASE</a>
    </div>
    <hr>    

    <div class="top">
        

        <div class="container">
            <div class="item-image">
                    <img id="item-image" src="picture/car_fragrance.webp" alt="car fragrance">
                    
            </div>
            <div class="pick-item">
                
                <h3>Pick your Item</h3>

                <select onclick="selectProduct()" id="itemSelect" name="product">
                        <option value="fragrance">Car Fragrance</option>
                        <option value="car_mat">Car Mat</option>
                        <option value="car_seat">Car Seat</option>
                </select> 
                
                <div class="price">
                    <h4>Item Price:</h4>
                    <h3>RM: </h3>
                    <input placeholder="15" id="price" readonly>
                </div>
                

                <label class="quantity">            
                    Quantity:
                    <input placeholder="1" type="number" step="1" onchange="updateQuantity(this.value) ">
                </label>

                <label class="price-label">
                    <button class="cal-button" onclick="calculate()">Calculate</button>                
                    Total Price (RM):
                    <input type="text" id="total" readonly>            
                </label>
                

            </div>
        </div>
        


    </div>

    <div class="bottom">
        
        <div class="details">
            <form>
                <h3>PURCHASER INFO</h3>

                <label>NAME:</label>                
                <input id="name" name="custName" type="text" required>

                <label>EMAIL:</label>
                <input id="email" name="custEmail" pattern="[a-z0-9._%+-]+@example\.com$" type="email" required>

                <label>ADDRESS:</label>
                <textarea id="address" name="address" required></textarea>

                <button type="submit" class="purchase-button" onclick="submitPurchase()">Purchase</button>

            </form>
            
        </div>


    </div>
    <footer>
        <div class="footer-p">Copyright © 2025 Muhammad Ikhmal Fahmi Bin Abd Ghafar</div>
    </footer>

    <script src="purchase.js"></script>
</body>
</html>