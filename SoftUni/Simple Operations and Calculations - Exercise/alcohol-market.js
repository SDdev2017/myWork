function alcoholMarket(priceWhis, beer, wine, rakia, whiskey)
{
    priceWhis = Number(priceWhis);
    beer = Number(beer);
    wine = Number(wine);
    rakia = Number(rakia);
    whiskey = Number(whiskey);
                    
    let priceOfRakia = priceWhis / 2;
    let priceOfWine = priceOfRakia - (0.4 * priceOfRakia);
    let priceOfBeer = priceOfRakia - (0.8 * priceOfRakia);
                    
    let totalWhiskey = priceWhis * whiskey;
    let totalRakia = priceOfRakia * rakia;
    let totalWine = priceOfWine * wine;
    let totalBeer = priceOfBeer * beer; 
                    
    console.log((totalWhiskey + totalRakia + totalWine + totalBeer).toFixed(2));
}