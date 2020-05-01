function func(start, end, divider)
{
 	start = Number(start);
  	end = Number(end);
  	divider = Number(divider);
  	
  	var sum = 0;
  	for(let i = start; i <= end; i++)
    {
     	if(i % divider === 0)
        {
          sum += i;
        }
    }
  
  console.log(sum);
}