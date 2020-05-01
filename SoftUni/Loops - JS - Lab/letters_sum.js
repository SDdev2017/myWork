function letter(product, n, budget)
{
 	n = Number(n);
  	budget = Number(budget);
  	var sum = 0;
  	for(let i = 0; i < product.length; i++)
    {
     	 switch(product[i])
         {
           case "a":
             sum = sum + 3;
             break;
           case "e":
             sum = sum + 3;
             break;
           case "i":
             sum = sum + 3;
             break;
           case "o":
             sum = sum + 3;
             break;
           case "u":
             sum = sum + 3;
             break;
           case "y":
             sum = sum + 3;
           	 break;
           default:
             sum = sum + 1;
           
         }
    }
  
  	sum = sum * n;
  	if (sum <= budget)
    {
     	     
      console.log(product + " bought. Money left: " + (budget-sum).toFixed(2)); 
    }
  
  	else if(sum > budget)
    {
     	console.log("Cannot buy " + product + ". Product value: " + sum.toFixed(2)); 
    }
 	
}