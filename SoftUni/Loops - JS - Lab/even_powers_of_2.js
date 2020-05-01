function func(n)
{
 	n = Number(n);
  	for(let i = 0; i <= n; i++)
    {
     	if(i % 2 == 0)
        {
         	console.log(2 ** i); 
        }
      	else
        {
         	continue; 
        }
    }
}