function journey(budget, season)
           {
               
               budget = Number(budget);
               if(budget <= 100)
               {
                   if (season === 'summer')
                   {
                       var total = budget * 0.30;
                       var holiday = "Bulgaria";
                       var place = 'Camp';
                   }
                   
                   else if (season === 'winter')
                   {
                       var place = 'Hotel';
                        var total = budget * 0.70;
                       var holiday = "Bulgaria";
                   }                                     
               }
               
                else if (budget > 100 && budget <= 1000)
                {
                   if (season === 'summer')
                   {
                       var total = budget * 0.40;
                       var holiday = "Balkans";
                       var place = 'Camp';
                   }
                   
                   else if (season === 'winter')
                   {
                       var total = budget * 0.80;
                       var holiday = "Balkans";
                       var place = 'Hotel';
                   }
                }
                
                else if (budget > 1000)
                {
                  
                       var total = budget * 0.90;
                       var holiday = "Europe";
                       var place = 'Hotel';
                }
                
                console.log("Somewhere in " + holiday);
                console.log(place + " - " + total.toFixed(2));
           }