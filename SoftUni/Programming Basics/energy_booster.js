function energyBooster(input)
{
    var fruit = input[0];
    var size = input[1];
    var count = Number(input[2]);
    var midPrice = 0;
                
    switch(fruit)
    {
        case "Watermelon":
            if(size === "small")
            {
                midPrice = 2 * 56;
            }
            else if(size === "big")
            {
                midPrice = 5 * 28.70;
            }
        break;
                        
        case "Mango":
            if(size === "small")
            {
                midPrice = 2 * 36.66;
            }
            else if(size === "big")
            {
                midPrice = 5 * 19.60;
            }
        break;
                        
        case "Pineapple":
            if(size === "small")
            {
                midPrice = 2 * 42.10;
            }
            else if(size === "big")
            {
                midPrice = 5 * 24.80;
            }
        break;
                        
        case "Raspberry":
            if(size === "small")
            {
                midPrice = 2 * 20;
            }
            else if(size === "big")
            {
                midPrice = 5 * 15.20;
            }
        break;    
    }
                
    var price = midPrice * count;
                
    if(price >= 400 && price <= 1000)
    {
        price = price - (price * 0.15);
    }
    else if(price > 1000)
    {
         price = price - (price * 0.50);
    }
                
    console.log(price.toFixed(2) + " lv.");
                
}