<?php
session_start();
if(isset($_SESSION['mensagem'])): ?>

<script>
  window.onload = function(){
    $('#tos').toggleClass('toast-visivel');
  };
</script>

<?php
endif;
?>
