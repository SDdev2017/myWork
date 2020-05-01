 function garden(flowers, countFlowers, budget)
           {
               countFlowers = Number(countFlowers);
               var totalSum = 0;
               switch(flowers)
               {
                   case 'Roses':
                       if (countFlowers > 80)
                       {
                           var sumRoses = countFlowers * 5;
                           sumRoses = sumRoses - (sumRoses * 0.10);
                       }
                       else
                       {
                           var sumRoses = countFlowers * 5;
                       }
                       
                       totalSum = sumRoses;
                       break;
                  
                  case 'Dahlias':
                       if (countFlowers > 90)
                       {
                           var sumDahlias = countFlowers * 3.80;
                           sumDahlias = sumDahlias - (sumDahlias * 0.15);
                       }
                       else
                       {
                           var sumDahlias = countFlowers * 3.80;
                       }
                       
                       totalSum = sumDahlias;
                       break;
                       
                  case 'Tulips':
                       if (countFlowers > 80)
                       {
                           var sumTulips = countFlowers * 2.80;
                           sumTulips = sumTulips - (sumTulips * 0.10);
                       }
                       else
                       {
                           var sumTulips = countFlowers * 2.80;
                       }
                       totalSum = sumTulips;
                       break;
                       
                case "Narcissus":
                       if (countFlowers < 120)
                       {
                           var sumNarcissus = countFlowers * 3;
                           sumNarcissus = sumNarcissus + (sumNarcissus * 0.15);
                       }
                       else
                       {
                           var sumNarcissus = countFlowers * 3;
                       }
                       totalSum = sumNarcissus;
                       break;
                       
                case "Gladiolus":
                       if (countFlowers < 80)
                       {
                           var sumGladiolus = countFlowers * 2.50;
                           sumGladiolus = sumGladiolus + (sumGladiolus * 0.20);
                       }
                       else
                       {
                           var sumGladiolus = countFlowers * 2.50;
                       }
                       totalSum = sumGladiolus;
                       break;
               }
               
               var total = budget - totalSum;
               
               if (total >= 0)
               {
                   console.log("Hey, you have a great garden with " + countFlowers + " " + flowers + " and " + total.toFixed(2) + " leva left.");
               }
               
               else if(total < 0)
               {
                   console.log("Not enough money, you need " + (Math.abs(total)).toFixed(2) + " leva more.");
               }
           }