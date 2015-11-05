<?php
      $user = $_POST['b'];

      if(!empty($user)) {
            comprobar($user);
      }

      function comprobar($b) {
            $con = mysql_connect('localhost','cetecnet_jl', 'contram_jl1@cetecnet');
            mysql_select_db('cetecnet_mitienda', $con);

            $sql = mysql_query("SELECT * FROM comentarios WHERE email = '".$b."'",$con);

            $contar = mysql_num_rows($sql);

            if($contar == 0){
                  echo "<span style='font-weight:bold;color:green;'>Disponible.</span>";
            }else{
                  echo "<span style='font-weight:bold;color:red;'>Se ha detectado que un usuario con este email ya ha dejado un comentario.</span>";
            }
      }
?>
