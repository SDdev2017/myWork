function rectangle(x1,x2,y1,y2)
{
 	x1 = Number(x1);
  	x2 = Number(x2);
        y1 = Number(y1);
        y2 = Number(y2);
  
  	let first = Math.abs(x1 - y1);
  	let second = Math.abs(x2 - y2);
  
  	let area = first * second;
  	let perimetar = 2 * (first + second);
  
  	console.log(area.toFixed(2));
  	console.log(perimetar.toFixed(2));
}