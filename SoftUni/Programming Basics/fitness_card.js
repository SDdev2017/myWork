function fitnessCard(input)
           {
               var money = Number(input[0]);
               var sex = input[1];
               var age = Number(input[2]);
               var sport = input[3];
               var price = 0;
               switch(sport)
               {
                   case "Gym":
                       if(sex === "m") {
                           price = 42;
                       } else {
                           price = 35;
                       }
                    break;
                   
                   case "Boxing":
                       if(sex === "m") {
                           price = 41;
                       } else {
                           price = 37;
                       }
                    break;
                    
                  case "Yoga":
                       if(sex === "m") {
                           price = 45;
                       } else {
                           price = 42;
                       }
                    break;
                    
                  case "Zumba":
                       if(sex === "m") {
                           price = 34;
                       } else {
                           price = 31;
                       }
                    break;
                 
                 case "Dances":
                       if(sex === "m") {
                           price = 51;
                       } else {
                           price = 53;
                       }
                    break;
                    
                 case "Boxing":
                       if(sex === "m") {
                           price = 39;
                       } else {
                           price = 37;
                       }
                    break;   
               }
               
               if(age <= 19)
               {
                   price = price - (price * 0.20);
               }
               
               if(price > money)
               {
                   console.log("You don't have enough money! You need $" + (price - money).toFixed(2) + " more.");
               }
               else if(price <= money)
               {
                   console.log("You purchased a 1 month pass for " + sport + ".");
               }
           }
           