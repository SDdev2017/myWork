function func(age, price, toyPrice)
{
 	age = Number(age); 
  	price = Number(price);
  	toyPrice = Number(toyPrice);
  	var toys = 0;
  	var present = 0;
  	var count = 0;
  
  	for(let i = 1; i <= age; i++)
    {
     	 if(i % 2 === 0)
         {
          	 count = count + 10;
           	 present = present + count;
             present = present - 1;
         }
      
      	 else if(i % 2 !== 0)
         {
          	toys = toys + 1; 
         }
    }
  
  	var total = present + (toys * toyPrice);
  
  	if(price <= total)
    {
     	console.log("Yes! " + (total - price).toFixed(2)); 
    }
  	else
    {
      	console.log("No! " + (price - total).toFixed(2)); 
    }
}