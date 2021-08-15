<?php
/*Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3.
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/-*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('/usuarios', function () {
	return 'USUARIOS';
})->name('usuarios');

Route::get('/usuarios/{id}', function ($id) {
	return 'Mostrar detalle del usuario: ' . $id;
})->where('id', '[0-9]+')->name('muestra_usuario');

Route::get('/usuarios/nuevo', function () {
	return 'CREAR NUEVO USUARIO';
})->name('nuevo_usuario');

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
	$name = ucfirst($name);

	if ($nickname) {
		return "Bienvenido {$name}, tu apodo es {$nickname}";
	} else {
		return "Bienvenido {$name}";
	}
})->name('saludo');

 Route::view('/error', 'error', ['msg' => 'La Cagaste'])->name('error');

/* Route::get('usuarios', 'UserController@inicio_usuarios')->name('usuarios'); */

/* Route::get('usuarios/{id}', 'UserController@show_usuario')->where('id', '[0-9]+')->name('muestra_usuario'); */

/* Route::get('usuarios/nuevo', 'UserController@create_usuario')->name('nuevo_usuario'); */

/* Route::get('saludo/{name}/{nickname?}', 'SaludoController')->name('saludo'); */

/* Route::get('error', 'ErrorController@mostrar')->name('error'); */
