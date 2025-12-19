let currentQty = 0;

function updateQuantity(newQty){
    currentQty = newQty;
    console.log(currentQty);
    
}

function submitPurchase(){
    alert("Thank you for purchasing");
}

function calculate(){
    let totalPrice = 15 * currentQty;
    alert("Your total price = RM "+totalPrice);
}