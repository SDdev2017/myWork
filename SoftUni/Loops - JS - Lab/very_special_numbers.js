function func(start, end, n)
{
 	start = Number(start);
  	end = Number(end);
  	n = Number(n);
  
  	for (let i = start; i <= end; i++)
    {
     	if(i % n !== 0)
        {
         	console.log(i); 
        }
      
      	else if(i % n == 0)
        {
          	if((i % n**2) == 0)
            {
              console.log("Very special number: " + i);
            }
          	else
            {
         		console.log("Special number: " + i); 
            }
        }
    }
 	
  
}