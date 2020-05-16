function PrimeDigit(digit)
    {
    let isPrime;
    if (typeof(digit) == ' number ')
    {
     combine(isPrime, digit);
    }
    else if (typeof(digit) == ' object ')
      {
      if (digit.length == 0){
        console.log(' Неккоректный ввод ');
      }
      else{
        for(let i = 0; i < digit.length; i++)
        {
          let num = digit[i];
          let isPrime;
          combine(isPrime, num);
        }
      }
    }
    else
    {
      console.log(' Неккоректный ввод ')
    }
  }
  
  function PrimeCheck(isPrime, digit)
  {
    for (let i = 2; i < digit; i++)
    {
    isPrime = true;
    if ((digit % i) == 0)
    {
      isPrime = false;
      break;
    }
   }
    return isPrime;
  }
  
  function PrimePrint(isPrime, digit)
    {
    if (isPrime){
      console.log(digit + ' простое число ');
    }
    else
    {
     console.log(digit + ' не простое число ');
    }
  }

  function Combine(isPrime, digit) 
  {
    isPrime = true;
    if (digit < 2)
    {
      console.log(digit + ' не простое число ');
    } else 
    {
      isPrime = isPrimeCheck(isPrime, digit);
      primePrint(isPrime, digit);
    }
  }