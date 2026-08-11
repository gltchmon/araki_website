// <!--REG NO: MF25266-->
/*distinguish features buttons*/
const featuresbtn = document.querySelectorAll(".js-featuresbtn");

featuresbtn.forEach((button) => {
    button.addEventListener("click", ()=> {
        const itemName = button.dataset.item;
        const item = document.querySelector(`.js-${itemName}-features`)
        if (item.style.display == "none") {
            item.style.display = "block";
            button.innerHTML = "Hide description";
        } else {
            item.style.display = "none";
            button.innerHTML = "Description";
        }
    })
});

const reviewbtn = document.querySelectorAll(".js-reviewsbtn");
const cardCons = document.querySelectorAll("shop-cardCon");
// show reviews for each product div
reviewbtn.forEach((button) => {
    button.addEventListener("click", ()=> {
        const itemName = button.dataset.item;
        const item = document.querySelector(`.js-${itemName}-reviews`)
        if (item.style.display == "none") {
            item.style.display = "block";
            button.innerHTML = "Hide Reviews";
        } else {
            item.style.display = "none";
            button.innerHTML = "Reviews";
        }
    })
});

const subscribe = document.querySelector("#js-subscribe-button")
// change subscribe to subscribed when clicked 
subscribe.addEventListener("click", () => {
    subscribe.innerHTML = "Subscribed";
});

