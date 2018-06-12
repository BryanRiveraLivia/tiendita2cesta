</main>

  <div class="clearfix"></div>

  <script>
    var altura_main = $('main').innerHeight();
    var altura_aside = $('aside').innerHeight();
    var anchura_body = $('body').innerWidth();

    if(anchura_body >= 768)
    {
      if(altura_main > altura_aside)
      {
        $('aside').css('height',altura_main);
      }
    }
  </script>

</body>
</html>