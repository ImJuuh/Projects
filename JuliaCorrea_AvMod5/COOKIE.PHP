<?php
		$visitado = isset($_COOKIE['visitado']) ? $_COOKIE['visitado'] : false;
	
		if (!$visitado) {
			setcookie('visitado', '1', time() + 3600 * 24 * 30); // Válido por 30 dias
			echo '<script>alert("Bem-vindo de volta! Este é o seu primeira visita.");</script>';
		}
?>