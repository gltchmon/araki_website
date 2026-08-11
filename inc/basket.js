// <!--REG NO: MF25266-->
// get select value 

const item_total_element = document.querySelector("#item_total").textContent;
const item_total = parseFloat(item_total_element.slice(1)).toFixed(2);

// change value on display depending on what was selected
let val = 3.50;
const deliveryOption = document.querySelector("#delivery_option");;
deliveryOption.addEventListener("change", optionChange);

function optionChange(event) {
  const currentValue = event.target.value;
  val = currentValue;
  // display item subtotal with new val
  document.getElementById("basket_subtotal").innerText = `£${(parseFloat(val) + parseFloat(item_total)).toFixed(2)}`;
}

;

// get user region to add to total as estimated shipping time
let user_region_price = 0;
const user_region_element = document.getElementById("user_region");
user_region_element.addEventListener("change", (e)=>{
    const currentValue = e.target.value;
    user_region_price = currentValue;
    document.querySelector('.order_prices').innerText = `£${currentValue}`;
    document.getElementById("basket_subtotal").innerText =  `£${(parseFloat(val) + parseFloat(item_total) + parseFloat(user_region_price)).toFixed(2)}`
});
document.getElementById("basket_subtotal").innerText =  `£${(parseFloat(val) + parseFloat(item_total) + parseFloat(user_region_price)).toFixed(2)}`;
