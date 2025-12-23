<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-purchase page</title>
    <link rel="stylesheet" href="style2.css">
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
                    <input id="price" readonly>
                </div>
                

                <label class="quantity">            
                    Quantity:
                    <input type="number" step="1" onchange="updateQuantity(this.value) ">
                </label>

                <label class="price-label">
                    <button onclick="calculate()">Calculate</button>                
                    Total Price (RM):
                    <input type="text" id="total" readonly>            
                </label>
                

            </div>
        </div>
        


    </div>

    <div class="bottom">
        
        <div class="details">
            <form>
                <h3>Purchaser Info</h3>

                <label>Name</label>                
                <input type="text">

                <label>Email:</label>
                <input type="email">

                <label>Address</label>
                <textarea></textarea>

            </form>
            <button onclick="submitPurchase()" class="submitPurchase">Purchase</button>
        </div>


    </div>

    <script src="purchase.js"></script>
</body>
</html>