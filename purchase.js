let currentQty = 1;
let productPrice = 25;




//function for the selecting product and get its value
function selectProduct(){
    let productType = document.getElementById("itemSelect").value; //get the product 
    let img = document.getElementById("item-image");

    //code to change the image
    if(productType == "fragrance"){
        document.getElementById("price").value = 15.00;
        productPrice = 15;
        img.src = "/picture/car_fragrance.webp";
    }else if(productType == "car_mat"){
        document.getElementById("price").value = 20.00;
        productPrice = 20;
        img.src = "/picture/car_mat.webp";
    }else{
        document.getElementById("price").value = 25.00;
        productPrice = 25;
        img.src = "/picture/car_seat.webp";
    }

    
}

//function to update the product quantity
function updateQuantity(newQty){
    currentQty = newQty;
    console.log(currentQty);
    
}

//function to calculate and update the total price
function calculate(){
    console.log(productPrice);
    console.log(currentQty);
        
    let totalPrice = productPrice * currentQty;
    document.getElementById("total").value = totalPrice.toFixed(2);
}



//function to alert the customer that the product have been purchased
function submitPurchase(){
    alert("Thank you for purchasing");
}