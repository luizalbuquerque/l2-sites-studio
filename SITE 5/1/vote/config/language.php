<?php
##########################################
#				 Créditos:				 #
#	Este sistema foi desenvolvido por:	 #
#		 Ivan Pires (ICPNetworks)		 #
#		    E estilizado por:			 #
#		Hugo Felipe (ICPNetworks)		 #
#	E-mail: contato@icpnetworks.com.br	 #
#	Site: http://www.icpnetworks.com.br	 #
##########################################
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$prefix = substr($hostname,-2);
$pagina = file_get_contents('index.php');
$mensagem = 'http://icpnetworks.com.br';
$ip = strstr($pagina, $mensagem);
if($prefix == 'br' or $prefix == 'ao' or $prefix == 'cv' or $prefix == 'gw' or $prefix == 'mz' or $prefix == 'pt' or $prefix == 'st' or $prefix == 'tl'){
$language_01 = 'Bem vindo';
$language_02 = 'Sair';
$language_03 = 'VoteSystem em manutenção!';
$language_04 = 'Volte mais tarde.';
$language_05 = 'Faltam';
$language_06 = 'para votar.';
$language_07 = 'Você já votou!';
$language_08 = 'Escolha o char para receber o premio.';
$language_09 = 'Trocar';
$language_10 = 'Você ainda não criou nenhum char em nosso servidor ou seu char não está offline.';
$language_11 = 'Você não votou em todos os links.';
$language_12 = 'Todos os links devem ser votados para receber o premio!';
$language_13 = 'Você já recebeu seu premio!';
$language_14 = 'Aguarde poder votar de novo para retirar um novo premio.';
$language_15 = 'Seu char recebeu a(s)';
$language_16 = 'moeda(s) de voto. Verifique em seu ';
$language_17 = 'Obrigado e continue votando!';
$language_18 = 'Verificar e Receber';
$language_19 = 'Login: ';
$language_20 = 'Senha: ';
$language_21 = 'Entrar';
$language_22 = 'Você não preencheu todos os campos.';
$language_23 = 'Todos os campo são obrigatórios!';
$language_24 = 'Tente novamente.';
$language_25 = 'Login ou senha incorretos!';
$language_26 = 'Você não preencheu o campo login.';
$language_27 = 'Você não preencheu o campo senha.';
$language_28 = 'Validando...';
$language_29 = 'Entrando...';
$language_30 = 'Validando votos...';
$language_31 = 'Entregando premio...';
$language_32 = 'Configurações';
$language_33 = 'Voltar';
$language_34 = 'Reinstale todo o seu VoteSystem novamente.';
$language_35 = 'Baixe-o novamente no link abaixo:';
$language_36 = 'Instalar';
$language_37 = 'Cadastre-se!';
$language_38 = 'Instalando...';
$language_39 = 'Os dados informados são inválidos, a conexão com o banco de dados falhou. Tente novamente.';
$language_40 = 'VoteSystem instalado com sucesso!';
$language_41 = 'Por favor, aguarde ser redirecionado...';
$language_42 = 'Versão desatualizada!';
$language_43 = 'Baixe a nova versão:';
$language_44 = 'Instalação do VoteSystem ICPNetworks 2.0';
$language_45 = 'IP do banco de dados:';
$language_46 = 'Usuário do banco de dados:';
$language_47 = 'Senha do banco de dados:';
$language_48 = 'Nome do banco de dados:';
$language_49 = 'Endereço do seu site:';
$language_50 = 'Banners de Voto';
$language_51 = 'Moedas de voto / Quantidade';
$language_52 = 'Moeda';
$language_53 = 'Local do depósito:';
$language_54 = 'Horas para votar:';
$language_55 = 'Qtd:';
$language_56 = 'Banco de dados';
$language_57 = 'Configurações VoteSystem ICPNetworks';
$language_58 = 'Configurações salvas com sucesso!';
$language_59 = 'Salvar';
$language_60 = 'Salvando...';
$language_61 = 'Total de votos:';
$language_62 = 'Votesystem desenvolvido por';
$language_63 = 'Todos os direitos reservados';
$language_64 = 'Copyright © 2011-2012 ICP Networks - Designer e Desenvolvimentos web.';
$language_65 = 'Todo o conteúdo deste site foi desenvolvido pela';
$language_66 = 'Mostrar votos?';
$language_67 = 'Sim';
$language_68 = 'Não';
$language_69 = 'Erro na entrega do premio, informe o administrador.';
}elseif($prefix == 'ar' or $prefix == 'bo' or $prefix == 'cl' or $prefix == 'co' or $prefix == 'cr' or $prefix == 'cu' or $prefix == 'ec' or $prefix == 'sv' or $prefix == 'gt' or $prefix == 'hn' or $prefix == 'mx' or $prefix == 'ni' or $prefix == 'py' or $prefix == 'pa' or $prefix == 'pe' or $prefix == 'pr' or $prefix == 'do' or $prefix == 'uy' or $prefix == 've' or $prefix == 'es'){
$language_01 = 'Bienvenido';
$language_02 = 'Salir';
$language_03 = 'VoteSystem en mantenimiento!';
$language_04 = 'Volver más tarde.';
$language_05 = 'Faltan';
$language_06 = 'para votar.';
$language_07 = 'Usted ya ha votado!';
$language_08 = 'Elige el personaje para recibir el premio.';
$language_09 = 'Recibir';
$language_10 = 'Usted no ha creado ningun char en nuestro servidor o su char no esta offline.';
$language_11 = 'Usted no ha votado en todos los links.';
$language_12 = 'Todos los links deben ser votados para recibir el premio!';
$language_13 = 'Usted ya ha recibió su premio!';
$language_14 = 'Espere poder votar de nuevo para recibir un nuevo premio.';
$language_15 = 'Su char recibió la(s)';
$language_16 = 'moneda(s) del voto. Compruebe en su ';
$language_17 = 'Gracias y sigan votar!';
$language_18 = 'Verificar y Recibir';
$language_19 = 'Login: ';
$language_20 = 'Contraseña: ';
$language_21 = 'Entrar';
$language_22 = 'No ha rellenado todos los campos.';
$language_23 = 'Todos los campos son obligatorios!';
$language_24 = 'Inténtelo de nuevo.';
$language_25 = 'Login o contraseña incorrectos!';
$language_26 = 'No ha rellenado el campo login.';
$language_27 = 'No ha rellenado el campo contraseña.';
$language_28 = 'Validando...';
$language_29 = 'Entrando...';
$language_30 = 'Validando votos...';
$language_31 = 'Entregando premio...';
$language_32 = 'Configuración';
$language_33 = 'Volver';
$language_34 = 'Vuelva a instalar su VoteSystem todo de nuevo.';
$language_35 = 'Descárgala de nuevo en el siguiente link:';
$language_36 = 'Instalar';
$language_37 = 'Registrarse!';
$language_38 = 'Instalando...';
$language_39 = 'Los datos presentados no son válidos, la conexión a la base de datos ha fallado. Inténtelo de nuevo.';
$language_40 = 'VoteSystem instalado con éxito!';
$language_41 = 'Por favor, espere ser redirigido...';
$language_42 = 'Versión obsoleta!';
$language_43 = 'Descargue la nueva versión:';
$language_44 = 'Instalación VoteSystem ICPNetworks 2.0';
$language_45 = 'IP de base de datos:';
$language_46 = 'Login de base de datos:';
$language_47 = 'Contraseña de base de datos:';
$language_48 = 'Nombre de base de datos:';
$language_49 = 'Dirección de su página web:';
$language_50 = 'Banners del Votos';
$language_51 = 'Monedas votación / Cantidad';
$language_52 = 'Moneda';
$language_53 = 'Lugar del depósito:';
$language_54 = 'Tiempo para votar:';
$language_55 = 'Cant:';
$language_56 = 'Base de datos';
$language_57 = 'Configuración VoteSystem ICPNetworks';
$language_58 = 'Configuración guardada correctamente!';
$language_59 = 'Guardar';
$language_60 = 'Guardando...';
$language_61 = 'Total de votos:';
$language_62 = 'Votesystem desarrollado por';
$language_63 = 'Reservados todos los derechos';
$language_64 = 'Copyright © 2011-2012 ICP Networks - Diseñador y Desarrollos Web.';
$language_65 = 'Todo el contenido de este sitio ha sido desarrollado por';
$language_66 = 'Mostrar votos?';
$language_67 = 'Sí';
$language_68 = 'No';
$language_69 = 'Error en la entrega del premio, informar al administrador del sitio.';
}else{
$language_01 = 'Welcome';
$language_02 = 'Exit';
$language_03 = 'VoteSystem under maintenance!';
$language_04 = 'Check back later.';
$language_05 = 'Lacking';
$language_06 = 'to vote.';
$language_07 = 'You have already voted!';
$language_08 = 'Choose the character to receive the premium.';
$language_09 = 'Exchange';
$language_10 = 'You have not created any char on our server or your character is not offline.';
$language_11 = 'You have not voted on all links.';
$language_12 = 'All links should be voted to receive the premium!';
$language_13 = 'You have already received your premium!';
$language_14 = 'Wait able to vote again for win a new premium.';
$language_15 = 'Your char received';
$language_16 = 'coin(s) to vote. Check your ';
$language_17 = 'Thanks and keep voting!';
$language_18 = 'Check and Receive';
$language_19 = 'Login: ';
$language_20 = 'Password: ';
$language_21 = 'Enter';
$language_22 = 'You have not filled in all fields.';
$language_23 = 'All field are required!';
$language_24 = 'Try again.';
$language_25 = 'Login or password incorrect!';
$language_26 = 'You have not filled in the login field.';
$language_27 = 'You have not filled in the password field.';
$language_28 = 'Validating...';
$language_29 = 'Entering...';
$language_30 = 'Validating votes...';
$language_31 = 'Delivering award...';
$language_32 = 'Settings';
$language_33 = 'Return';
$language_34 = 'Reinstall its entire VoteSystem again.';
$language_35 = 'Download it again on the link below:';
$language_36 = 'Install';
$language_37 = 'Sign up!';
$language_38 = 'Installing...';
$language_39 = 'The data reported are invalid, the connection to the database failed. Try again.';
$language_40 = 'VoteSystem successfully installed!';
$language_41 = 'Please wait to be redirected...';
$language_42 = 'Outdated version!';
$language_43 = 'Download the new version:';
$language_44 = 'Installation VoteSystem ICPNetworks 2.0';
$language_45 = 'Database IP:';
$language_46 = 'Database User:';
$language_47 = 'Database Password:';
$language_48 = 'Database name:';
$language_49 = 'Address of your website:';
$language_50 = 'Banners Vote';
$language_51 = 'Currencies voting / Quantity';
$language_52 = 'Coin';
$language_53 = 'Location of deposit:';
$language_54 = 'Time to vote:';
$language_55 = 'Amt:';
$language_56 = 'Data base';
$language_57 = 'Settings VoteSystem ICPNetworks';
$language_58 = 'Settings saved successfully!';
$language_59 = 'Save';
$language_60 = 'Saving...';
$language_61 = 'Total votes:';
$language_62 = 'Votesystem developed by';
$language_63 = 'All rights reserved';
$language_64 = 'Copyright © 2011-2012 ICP Networks - Designer and web developments.';
$language_65 = 'All content on this site was developed by';
$language_66 = 'Show votes?';
$language_67 = 'Yes';
$language_68 = 'No';
$language_69 = 'Error in the delivery of the prize, inform the board administrator.';
}
$version = '2.6';

if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
 
if (isset($_SERVER["HTTP_CLIENT_IP"])) {
  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CLIENT_IP"];
}
 
 
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}


// Correção acesso top l2jbrasil

function checkOnline($domain) {
   $ch = curl_init($domain);
   curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
   curl_setopt($ch,CURLOPT_HEADER,true);
   curl_setopt($ch,CURLOPT_NOBODY,false);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   curl_setopt($ch,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT'] );
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

   //get answer
   
   $response = curl_exec($ch);
   curl_close($ch);
   if ($response) return true;
   return false;
}

function acessoSimples($url, &$info = null, $get= array() , $post=array(), $timeout = 10) {
	  $ch = curl_init();
	  curl_setopt_array($ch, array(
	    CURLOPT_CONNECTTIMEOUT => $timeout ,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $url,
		CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'] 
	));
	  
	  
   /*curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
   curl_setopt($ch,CURLOPT_HEADER,true);
   curl_setopt($ch,CURLOPT_NOBODY,false);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   curl_setopt($ch,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT'] );
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
   curl_setopt($ch,CURLOPT_URL,$url);*/
   //get answer
   
   $response = curl_exec($ch);
   // Then, after your curl_exec call:
	$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
	$header = substr($response, 0, $header_size);
	$body = substr($response, $header_size);
   $info = curl_getinfo($ch);
   curl_close($ch);
   
   return $response;
}

?>
