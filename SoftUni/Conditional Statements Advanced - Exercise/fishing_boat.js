function fishingBoat(budget, season, fishers)
{
    budget = Number(budget);
    fishers = Number(fishers);

    switch (season)
    {
        case 'Autumn':
            var rent = 4200;  
        break;

        case 'Spring':
            var rent = 3000;  
        break;

        case 'Summer':
            var rent = 4200;  
        break;

        case 'Winter':
            var rent = 2600;  
        break;
    }
                
    if (fishers <= 6)
    {
        var totalSum = rent - (rent * 0.10);
    }
                
    else if (fishers > 6 && fishers <= 11)
    {
         var totalSum = rent - (rent * 0.15);
    }
                
    else if (fishers > 11)
    {
        var totalSum = rent - (rent * 0.25);
    }
   
    if (fishers % 2 === 0 && season !== 'Autumn')
    {
        totalSum = totalSum - (totalSum * 0.05);
    }
                
    var Total = totalSum;
    var diffrence = budget - Total;
                
    if (Total > budget)                               
    {  
        console.log("Not enough money! You need " + (Math.abs(diffrence)).toFixed(2) + ' leva.');
    }
                
    else
    {
        console.log("Yes! You have " + diffrence.toFixed(2) + " leva left.");
    }
                                
}