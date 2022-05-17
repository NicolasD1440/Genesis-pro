
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Datos incorrectos, por favor intentelo nuevamente',
  showConfirmButton: true,
  }).then((result) => {
   if (result.isConfirmed) {
     window.location = "../Index.php";
   }
  })
