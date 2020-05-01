function sum(n)
{
    n = Number(n);
  
    var result = 0;
  
    for(let i = 1; i <= n; i++)
    {
     	result = result + (i * i); 
    }
  
    console.log(result);
}