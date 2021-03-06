<?php


/**
 * Skeleton subclass for performing query and update operations on the 'usuario' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 12/13/10 23:16:14
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class UsuarioPeer extends BaseUsuarioPeer {
	
	public static function obtenerNombreUsuario($usu_codigo) {
	//como hay usuarios que no tiene empleado, en estos casos muestra el login , si si tienen empleado entondes muetsro el nombre y apellido
		$salida='';
		$conexion = new Criteria();
		$conexion->add(EmpleadoPeer::EMPL_USU_CODIGO, $usu_codigo);
		$empleado = EmpleadoPeer::doSelectOne($conexion);
		
		if($empleado)
		{
			$salida= $empleado->getEmplNombres().' '.$empleado->getEmplApellidos();
		}
		else{
			$conexion = new Criteria();
			$conexion->add(UsuarioPeer::USU_CODIGO, $usu_codigo);
			$usuario = UsuarioPeer::doSelectOne($conexion);
			if($usuario){
				$salida= $usuario->getUsuLogin();
			}
		}
		
		return $salida;
	}
	
} // UsuarioPeer
