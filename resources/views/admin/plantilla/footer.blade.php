</div>
</div>
</main>

<script>
  $(document).ready(function() {
    menuHeader();
    $("#id_provincia").chained("#id_region");
    $("#id_distrito").chained("#id_provincia");
  });

  function scltEnlazados()
  {
    
  }

  function verDetalle()
  {
    $(document).on('click','.VerUsuario',function(){
        var url = "usuarios/show";
        var tour_id= $(this).val();
        $.get(url + '/' + tour_id, function (data) {
            //success data
            console.log(data);
            $('#tour_id').val(data.id);
            $('#name').val(data.name);
            $('#details').val(data.details);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
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