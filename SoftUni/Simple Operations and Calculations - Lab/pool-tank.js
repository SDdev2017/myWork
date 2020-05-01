function pool(width, height, wisochina, percent)
{
    let obem = width * height * wisochina;
    let litri = obem * 0.001;
    let procent = percent*0.01;
  
    let result = litri * (1 - procent);
  
    console.log(result.toFixed(3));
}