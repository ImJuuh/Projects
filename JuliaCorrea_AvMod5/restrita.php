<?php
if(isset( $_SESSION["user"])){
    echo "ola amigo";
}
else{
    echo "voce tem a policia atra de ti";
    exit;
}

?>