console.log('Login');
document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    const $notification = $delete.parentNode;

    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });
});

const form = document.getElementById("formLogin");

form.addEventListener('submit', function(event){
  event.preventDefault();

  const url = form.action;
  const datos = new FormData(form);

  const fetchOptions = {
    method: form.method,
    credentials: "include",
    headers: {
      "Accept": "application/json",
      "Content-Type": "application/json;charset=UTF-8",
    },
    body: JSON.stringify(Object.fromEntries(datos))
  }

  fetch(url, fetchOptions)
  .then(response => response.json())
  .then(data => {
    console.log(data);
    if (data.status === 'Token Expired') {
      console.log(data.status);
    } else if(data.status === 'Datos NOK'){
      console.log(data.status);
    }else if(data.status === 'Usuario OK'){
      setTimeout(redirigir(), 2000);
    }
  });
}); 

function redirigir(){
  window.location.href = "/admin";
}