function purchase(tables, height, width)
{
    tables = Number(tables);
    height = Number(height);
    width = Number(width);
  
    let pokrivka = (width + 0.60) * (height + 0.60);
    let totalPokrivka = tables * pokrivka;
    let dollarsPokrivka = totalPokrivka * 7;
    let levovePokrivka = dollarsPokrivka * 1.85;
               
    let kare = (height / 2) * (height / 2);
    let totalKare = tables * kare;
    let dollarsKare = totalKare * 9;
    let levoveKare = dollarsKare * 1.85;
               
    let totalLev = levovePokrivka + levoveKare;
    let totalDollars = dollarsPokrivka + dollarsKare;
 
    console.log(totalDollars.toFixed(2) + " USD");
    console.log(totalLev.toFixed(2) + " BGN");
}