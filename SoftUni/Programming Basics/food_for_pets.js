function foodForPets(input)
           {
               var input = input.map(myFunc);
               function myFunc(value)
               {
                   return Number(value);
               }
               var days = Number(input[0]);
               var totalFood = Number(input[1]);
               var dog = 0;
               var bisc = 0;
               var cat = 0;
               var counter = 0;
               var catAndDog = 0;
               var newArray = [];
               
               for (let i = 2; i < input.length; i+=2)
               {
                   newArray.push([input[i], input[i+1]]);
               }
               
               for (let i = 0; i < newArray.length; i++)
               {
                   counter = counter + 1;
                   dog += newArray[i][0];
                   cat += newArray[i][1];
                   catAndDog += newArray[i][0] + newArray[i][1];
                   
                   if(counter % 3 === 0)
                   {
                       var forTheDay = newArray[i][0] + newArray[i][1];        
                       bisc += Math.round(forTheDay * 0.10);
                   }
                   
               }
               
               console.log("Total eaten biscuits: " + bisc + "gr.");
               var perc1  = (catAndDog / totalFood) * 100;
               console.log(perc1.toFixed(2) + "% of the food has been eaten.");
               dog = (dog / catAndDog) * 100;
               console.log(dog.toFixed(2) + "% eaten from the dog.");
               cat = (cat / catAndDog) * 100;
               console.log(cat.toFixed(2) + "% eaten from the cat.");
           }
           