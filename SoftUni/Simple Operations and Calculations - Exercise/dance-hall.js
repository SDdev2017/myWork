function danceHall(width, height, strana)
{
    width = Number(width);
    height = Number(height);
    strana = Number(strana);
                               
    let AreaGarderob = (strana * 100) * (strana * 100);
    let sizeOfTheHall = (width * 100) * (height * 100);
    let sizeOfThePeika = sizeOfTheHall/10;
    let freeSpace = sizeOfTheHall - AreaGarderob - sizeOfThePeika;
    let dancers = freeSpace / (40 + 7000);
                
    console.log(Math.floor(dancers));
              
}
            