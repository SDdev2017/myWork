function func(txt)
{
    let leng = txt.length;
    var sum = 0;
  	
     for(let i = 0; i < leng; i++)
     {
        switch(txt[i])
        {
            case "a":
                sum = sum + 1;
             break;
           case "e":
                sum = sum + 2;
             break;
           case "i":
                sum = sum + 3;
             break;
           case "o":
                sum = sum + 4;
             break;
           case "u":
                sum = sum + 5;
             break;
         }       	 
     }
   
    console.log(sum);
}