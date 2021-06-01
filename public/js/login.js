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
    headers: {
      "Content-type": "application/json;charset=UTF-8",
      "Accept": "application/json"
    },
    body: JSON.stringify(datos)
  }

  fetch(url, fetchOptions)
  .then(response => response.json())
  .then(data => {
    console.log(data);
  });
}); 