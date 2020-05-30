let form = document.getElementById('form');                       //Получили форму
let successField = document.getElementById('success');            //Поле для вывода

form.addEventListener('submit', function(event) 
{
  let firstName = document.getElementById('first_name');
  let email = document.getElementById('email');
  let country = document.getElementById('country');
  let gender = document.getElementById('gender');
  let message = document.getElementById('message');

  let searchParams = new URLSearchParams();
  searchParams.set('FirstName', firstName.value);
  searchParams.set('Email', email.value);
  searchParams.set('Country', country.value);
  searchParams.set('Gender', gender.value);
  searchParams.set('Message', message.value);

  let promise = fetch('../php/ajax.php', 
  {
    method: 'POST',
    body: searchParams,
  })

  promise.then(
    response => 
    {
      return response.text();
    }
  ).then(
    text => {
      if (text === '2') 
      {
        delError(email);
        toError(firstName);
        successField.style.opacity = '0';
      }
      if(text === '3') 
      {
        delError(firstName);
        toError(email);
        successField.style.opacity = '0';
      }
      if (text === '23') 
      {
        toError(email);
        toError(firstName);
        successField.style.opacity = '0';
      }
      if (text === '1') 
      {
        delError(firstName);
        delError(email);
        successField.style.opacity = '1'
      }
      first_name.addEventListener('click', (e) =>
      {
        delError(firstName);
      });
      email.addEventListener('click', (e) => 
      {
        delError(email);
      });
    }
  )
  event.preventDefault();
});

function delError(element) 
{
  element.classList.remove("error_border");
  element.classList.add("focused");
}

function toError(element) 
{
  element.classList.remove("focused");
  element.classList.add("error_border");
}