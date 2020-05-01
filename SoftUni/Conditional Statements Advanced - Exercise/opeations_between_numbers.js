function journey(n1, n2, oper)
           {
               n1 = Number(n1);
               n2 = Number(n2);
               switch(oper)
               {
                   case '+':
                       var result = n1 + n2;
                       if (result % 2 === 0)
                       {
                           console.log(n1 + " + " + n2 + " = " + result + " - even" );
                       }
                       else
                       {
                           console.log(n1 + " + " + n2 + " = " + result + " - odd" );
                       }
                       break;
                       
                   case '-':
                       var result = n1 - n2;
                       if (result % 2 === 0)
                       {
                           console.log(n1 + " - " + n2 + " = " + result + " - even" );
                       }
                       else
                       {
                           console.log(n1 + " - " + n2 + " = " + result + " - odd" );
                       }
                       break;
                       
                   case '*': 
                        var result = n1 * n2;
                            if (result % 2 === 0)
                            {
                                console.log(n1 + " * " + n2 + " = " + result + " - even" );
                            }
                            else
                            {
                                console.log(n1 + " * " + n2 + " = " + result + " - odd" );
                            }
                            break;
                    
                    case '/': 
                        var result = n1 / n2;
                        if (n2 === 0)
                        {
                           console.log('Cannot divide ' + n1 + " by zero");
                        }
                        else
                        {
                            
                            console.log(n1 + " / " + n2 + " = " + result.toFixed(2));     
                        }
                            break;
                    
                   case '%':
                       var result = n1 % n2;
                       
                       if (n2 === 0)
                       {
                           console.log('Cannot divide ' + n1 + " by zero");
                       }
                       
                       else
                       {
                           console.log(n1 + " % " + n2 + " = " + result);
                       }
               }
           }
           