function summerTime(degrees, time)
{
    degrees = Number(degrees);
    if(degrees >= 10 && degrees <= 18)
    {
     	if (time === 'Morning')
        {
         	console.log("It's " + degrees + " degrees, get your Sweatshirt and Sneakers."); 
        }
      	
      	if (time === 'Afternoon')
        {
          	console.log("It's " + degrees + " degrees, get your Shirt and Moccasins.");
        }
      
      	if (time === 'Evening')
        {
          	console.log("It's " + degrees + " degrees, get your Shirt and Moccasins.");
        }
    }
  
  	else if (18 < degrees && degrees <= 24)
        {
     	 if (time === 'Morning')
         {
         	console.log("It's " + degrees + " degrees, get your Shirt and Moccasins."); 
         }
      
      	 else if (time === 'Afternoon')
        {
          	console.log("It's " + degrees + " degrees, get your T-Shirt and Sandals.");
        }
      
      	else if (time === 'Evening')
        {
          	console.log("It's " + degrees + " degrees, get your Shirt and Moccasins.");
        }
      	
    }
  	
  	else if (degrees >= 25)
    {
      	if (time === 'Morning')
        {
          	console.log("It's " + degrees + " degrees, get your T-Shirt and Sandals.");
        }
      	
      	if (time === 'Afternoon')
        {
          	console.log("It's " + degrees + " degrees, get your Swim suit and Barefoot.");
        }
      	
      	if (time === 'Evening')
        {
          	console.log("It's " + degrees + " degrees, get your Shirt and Moccasins.");
        }
    }
}