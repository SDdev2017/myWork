function change(input)
{
    var bitcoin = Number(input[0]);
    var yuan = Number(input[1]);
    var tax = Number(input[2]);
    var leva = 0;
    var dollars = 0;
    var euro = 0;
  
    leva = 1168 * bitcoin;
    dollars = yuan * 0.15;
    leva = leva + (dollars * 1.76);
    euro = leva / 1.95;
    euro = euro - ((euro / 100) * tax);
  	
    console.log(euro.toFixed(2));
  	
}