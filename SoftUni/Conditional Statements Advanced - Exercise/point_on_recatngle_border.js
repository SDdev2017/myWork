function coord(x1,y1,x2,y2,x,y)
{
    x1 = Number(x1);
    y1 = Number(y1);
    x2 = Number(x2);
    y2 = Number(y2);
    x = Number(x);
    y = Number(y);
  
    let firstCondition = (x === x1 || x === x2) && (y >= y1 && y <= y2);
    let secondCondition = (y === y1 || y === y2) && (x >= x1 && x <= x2);
  
    if (firstCondition || secondCondition)
    {
     	console.log("Border");
    }
  	else
    {
     	console.log("Inside / Outside");
    }
}