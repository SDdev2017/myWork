function mountainRun(input)
{
    var record = Number(input[0]);
    var distance = Number(input[1]);
    var mperSec = Number(input[2]);
  
    var total = distance * mperSec;
    var latr = Math.floor(distance / 50);
    total += latr * 30;
  	  
    if (total >= record)
    {
       	var diff = (total - record).toFixed(2);
      	console.log("No! He was " + diff + " seconds slower."); 
    }
  
    else
    {
      	console.log("Yes! The new record is " + total.toFixed(2) + " seconds."); 
    }
     
}