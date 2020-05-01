function cakeCompany(days, cooker, cakes, gofretti, palachinka)
{
    days = Number(days);
    cooker = Number(cooker);
    cakes = Number(cakes);
    gofretti = Number(gofretti);
    palachinka = Number(palachinka);
                
    let cakesForDay = cakes * 45;
    let gofrettiForDay = gofretti * 5.80;
    let palachinkaForDay = palachinka * 3.20;
                
    let forOneDay = (cakesForDay + gofrettiForDay + palachinkaForDay) * cooker;
    let all = forOneDay * days;
    let total = all - (all / 8);
                
    console.log(total.toFixed(2));
}