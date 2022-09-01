{{-- Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3. 
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/- --}}

<!DOCTYPE html>
<html>

<head>
	<title>ERROR</title>

	<style>

		body {
			background-image:url('image/system.gif');
			background-size:100%;
			background-repeat: repeat-y;
			background-attachment: fixed;
			height:100%;
			width:100%;
		}

		h1 {
			font-size: 4vw;
			font-family:"Arial";
			text-transform: uppercase;
			letter-spacing: 3px;
			color: orange;		
			margin-top: -20px;
			margin-left: -180px;
			left: 50%;
			top: 50%;
			position: absolute;
		}
	</style>
</head>
<body>

	<h1> {{ $msg }} </h1>

</body>
</html>