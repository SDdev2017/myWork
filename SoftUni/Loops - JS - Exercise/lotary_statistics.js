function lotary(n)
{
 	n = Number(n);
  
  	var even = 0;
  	var odd = 0;
  	var seven = 0;
  	var sto = 0;
  
  	for(let i = 1; i <= n; i++)
    {
     	 if(i <= 9 && i % 2 !== 0)
         {
          	 odd += 1;
         }
      
      	 if(i % 2 == 0)
         {
          	even += 1;
         }
      
      	 if(i % 10 === 7 && i)
         {
          	seven += 1; 
         }
      
      	 if(100 % i === 0)
         {
          	sto = sto + 1; 
         }
    }
    
    
  
   console.log(((odd / n) * 100).toFixed(2) + "%");
   console.log(((even / n) * 100).toFixed(2) + "%");
   console.log(((seven / n) * 100).toFixed(2) + "%");
   console.log(((sto / n) * 100).toFixed(2) + "%");
  
}