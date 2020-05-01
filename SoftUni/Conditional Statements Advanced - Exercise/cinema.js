function cinema(type, rows, columns)
{
	rows = Number(rows);
  	columns = Number(columns);
	
  	var koef;
  
  	if (type === 'Premiere')
    {
     	koef = 12.00; 
    }
  	
  	else if (type === 'Normal')
    {
     	koef = 7.50; 
    }

	else if (type === 'Discount')
    {
     	koef = 5.00; 
    }
  
  	console.log(((rows * columns) * koef).toFixed(2) + " leva");
}