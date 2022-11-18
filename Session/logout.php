<?php

# Para fazer o 'logout' de sessão em PHP é preciso
# utilizar funções de finalizção
session_start();
session_unset();
session_destroy();

echo "<p>Logout de SESSION de PHP </p>";

?>