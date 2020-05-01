function HotelRoom(month, nights)
           {
               nights = Number(nights);
               
               if(month === 'May' || month === "October")
               {
                   var priceOfStudio = 50;
                   var priceOfApt = 65;
                   
                   if (nights > 7 && nights <= 14)
                   {
                       var totalStudio = priceOfStudio * nights;
                       totalStudio = totalStudio - totalStudio * 0.05;
                   }
                   
                   else if (nights > 14)
                   {
                       var totalStudio = priceOfStudio * nights;
                       totalStudio = totalStudio - totalStudio * 0.30;
                   }
               }
               
               else if (month === 'June' || month === "September")
               {
                   var priceOfStudio = 75.20;
                   var priceOfApt = 68.70;
                   
                   if (nights > 14)
                   {
                       var totalStudio = priceOfStudio * nights;
                       totalStudio = totalStudio - totalStudio * 0.20;
                   }
                   else
                   {
                   
                   var totalStudio = priceOfStudio * nights;
                    }
               }
               
               else if (month === 'July' || month === "August")
               {
                   var priceOfStudio = 76;
                   var priceOfApt = 77;
                   
                   var totalStudio = priceOfStudio * nights;
               }
               
               if (nights > 14)
               {
                    var totalApt = priceOfApt * nights;
                    totalApt = totalApt - totalApt * 0.10;
               }
               
               else
               {
                    var totalApt = priceOfApt * nights;
               }
               
               console.log("Apartment: " + totalApt.toFixed(2) + " lv." );
               console.log("Studio: " + totalStudio.toFixed(2) + " lv." );
           }
           