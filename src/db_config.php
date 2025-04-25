<?php
    function conecta(){
        $cs = mysqli_connect("localhost", "root", "");
        $cbd = mysqli_select_db($cs, "bd_autos");
        return($cs);    
    }

    function mensaje($msg){
        echo "
            <script type='text/JavaScript'>
                alert('".$msg."')
            </script>
        
        ";
    }

?>