<?php
  session_start();
  if( isset($_SESSION["mysession"]))
  {
      session_destroy();
      $_SESSION["mysession"]="";
       echo
              '
                <script type="text/javascript">                        
                  window.location.href="home.php";
                </script>
              ';
  }

?>