
Swal.fire({
 position: 'center',
 icon: 'success',
 title: 'sesión cerrada correctamente',
 showConfirmButton: true,
}).then((result) => {
  if (result.isConfirmed) {
    window.location = "../Index.php";
  } 
})
