
	searchname = 'resultado.html'
	
	usebannercode=false
	ButtonCode = "<img src='searchbutton.gif' border=0>" 
	
	function templateBody() {
		document.write('<html><head><title>B�squeda</title><'+
		'script language="Javascript">'+
		'<'+'/'+'script'+'></head><body bgcolor="#ffffff" text="#000000" link="#000099" vlink="#996699" alink="#996699"><left>');
	} 

	function templateEnd() {
		document.write('</td></tr></table></font></center></body></html>');
	}
	


	add("<a href='html/bienvenida.html' target='right'> Bienvenido al sistema</a>",
		"bienvenida tpm telefono contactenos contacto quantar",
		'Bienvenida');
	
	
	add("<a href='html/iniciar/IniciarSesion.html' target='right'>Inicio sesi�n </a>",
		"session iniciar login clave",
		'Para Inicio de sesi�n');
	
	//super admin
	add("<a href='html/interfaz_superadmin/InterfazSuperAdministrador.html' target='right'>Interfaz s�per administrador </a>",
		"super administrador ingreso quantar empresas",
		'Interfaz super administrador');
		
	add("<a href='html/interfaz_superadmin/ManejoEmpresa.html' target='right'> Manejo de empresas</a>",
		"empresas certificados crear ",
		'Manejo de empresas');
	
	add("<a href='html/interfaz_superadmin/ManejoUsuario.html' target='right'> Manejo de usuarios</a>",
		"usuario empleado login clave habilitar",
		'Manejo de usuarios del sistema');
	
	add("<a href='html/interfaz_superadmin/Certificados.html' target='right'>Certificados </a>",
		"instalar desinstalar certificar computadores equipos",
		'Manejo certificados');
	
	add("<a href='html/interfaz_superadmin/MaestraEstadoEquipo.html' target='right'>Estado del equipo </a>",
		"estado del equipo bueno malo en reparaci�n",
		'Manejo de los estados');
		
	add("<a href='html/interfaz_superadmin/MaestraIndicador.html' target='right'>Indicadores </a>",
		"indicadores tp tnp tpp tf to disponibilidad calidad efectividad global aprovechamiento OE OEE AE metas",
		'Manejo de indicadores');
			
	
	add("<a href='html/interfaz_superadmin/MaestraPerfil.html' target='right'>Perfiles </a>",
		"perfil analista coordinador super administrador administrador",
		'Actualizaci�n de perfiles');
		
	add("<a href='html/interfaz_superadmin/MaestraTipoIdentificacion.html' target='right'>Indetificaci�n </a>",
		"tipo identificaci�n cedula tarjeta identidad extrangeria",
		'Manejo de tipos de identificaci�n');
	
	add("<a href='html/interfaz_superadmin/Salir.html' target='right'>Salir </a>",
		"Salir superadministrador cerrar sesion",
		'Salir del s�per administrador');
	
	