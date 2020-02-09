
  <script>
    $(document).ready(function(){
      $('#botaoProprietario').click(function(){
        $('#divProprietarios').toggleClass('hide');
        $('#botaoProprietario').toggleClass('hidden');

      });

      $('#botaoImovel').click(function(){
        $('#divImoveis').toggleClass('hide');
        $('#botaoImovel').toggleClass('hidden');
      });
    });
  </script>

  <div id="tos" class="toast">Erro</div>
  </body>
</html>
