function func(n)
{
    n = Number(n);
  
    if(n % 2 === 0) var start = 2;
    else var start = 1;
  
    for(let i = start; i <= n; i=i+2)
    {
     	console.log("Current number: " + i + ". Cube: " + i**3); 
    }
  
}