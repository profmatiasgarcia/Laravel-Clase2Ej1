<?php
/*Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3. 
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/-*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     /**
     * Mostrar información de un usuario.
     * @param  int  $id
     * @return Response
     */
    
    public function inicio_usuarios()
    {
        return 'USUARIOS desde Controller';
    }

    public function show_usuario($id)
    {
        return 'Mostrar detalle del usuario desde Controller: ' . $id;
    }

    public function create_usuario()
    {
        return 'CREAR NUEVO USUARIO desde Controller';
    }
}
