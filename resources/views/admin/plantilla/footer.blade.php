</div>
</div>
</main>

<script>
  $(document).ready(function() {
    menuHeader();
    $("#id_provincia").chained("#id_region");
    $("#id_distrito").chained("#id_provincia");
    verDetalle();
  });

  function scltEnlazados()
  {
    
  }

  function verDetalle()
  {
   $( ".DetalleUsuario").click(function() {
      var id = $(this).attr("data-id");
      var nombres = $(this).attr("data-nombres");
      var apellidos = $(this).attr("data-apellidos");
      var email = $(this).attr("data-email");
      var id_documento = $(this).attr("data-id_documento");

      $('#DetalleUsuario .modal-header h1').text(nombres+' '+apellidos);
      $('#DetalleUsuario .modal-body input[name="nombres"]').val(nombres);
      $('#DetalleUsuario .modal-body input[name="apellidos"]').val(apellidos);
      $('#DetalleUsuario .modal-body input[name="email"]').val(email);
      $('#DetalleUsuario .modal-body select[name="id_documento"]').val(id_documento);
    })
  }

  function menuHeader()
  {
   // Muestra y oculta los menús
   $('header nav ul li').hover(
      function(e)
      {
         $(this).find('ul').css({display: "block"});
      },
      function(e)
      {
         $(this).find('ul').css({display: "none"});
      }
   );

  }

  function alertEliminarItem(id, mensaje,controlador,token)
  {
    swal({
      text: mensaje,
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax(
            {
                url: controlador+"/eliminar/",
                type: 'put',
                dataType: "JSON",
                data: {
                    "id": id,
                    "_method": 'put',
                    "_token": token,
                }
            });
            window.location = '/'+controlador;
          } 
      });
  }
</script>
</body>
</html>