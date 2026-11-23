## Entorno

    Apache2


## Requisitos

    Presentación: explicar quiénes somos, qué ofrecemos y dónde organizamos actividades,
    con la identidad de Punto de Juego.
	
	Actividades: mostrar juego, descripción, fecha, municipio, lugar, plazas y estado de encuentros y torneos.
	
	Participantes: consultar y, en las fases correspondientes, gestionar las inscripciones.
	
	Torneos: mostrar rondas y enfrentamientos presenciales, registrar resultados y calcular clasificaciones.
	
	Datos: conservar la información cuando se cierre la aplicación o se reinicien los servicios.
	
	Funcionamiento: desplegar los componentes que requiere cada funcionalidad y verificar su comunicación.
	
	Mantenimiento: disponer de documentación que permita reproducir el despliegue y diagnosticar incidencias.

## Procedimiento

	Encargo 1:
		1.1.3: 
		Necesita Apache Server, para poder servir el HTML y CSS.
		
		1.3.2: 
		Se han creado 5 actividades distintas, el concepto base es llevar los juegos a la vida real, trata de aplicar mecanicas de los juegos a entornos y situaciones que se pueden encontrar en mataro. 

		Estas actividades se coponen de un concepto inicial, algunas reglas y una frase caractersitica/promocional.

		1.3.3 y 1.3.4:
		Se Ha creado una paleta de colores basada en un color claro (blanco o cercanos), un color oscuro (gris oscuro o cercano) y un acento de color salmon.

		Se han compartido y establecido todos los cambios y actualizaciones.
		
		1.4:

		1. Usando el comadno "lsb_release -a" se identifica la distro. Apache no esta instalado.
		2. Ya esta, con el comadno "apt install -y apache2".
		3:
			- Nombre del servicio "apache2".
			- El directorio con las configuraciones es "/etc/apache2".
			- La raiz documental es "/var/www".
			- Los registros o Logs estan en "/var/log/apache2".
		4. Se incia el servicio con "systemctl start apache2" y funciona correctamente devuelve un codigo "200", esto se puede ver en "F12 > Network" al recargar la pagina.
		6. Se ha creado una carpeta llamada "html" dentro de "/var/www" de forma que apache acceda a esta y sirva el "index.html". Se han concedido permisos de ejecucion a todas las carpetas que intervienen en el enalce de forma que apache tenga permiso para servirlas en el navegador.

		Punto Extra (Comandos usados):

			sudo ln -s "/home/joel/Escritorio/Desplegament/AEA2/Punto-De-Juego/portal" "/var/www/html/portal" && sudo chmod o+x /home/joel /home/joel/Escritorio /home/joel/Escritorio/Desplegament /home/joel/Escritorio/Desplegament/AEA2 /home/joel/Escritorio/Desplegament/AEA2/Punto-De-Juego /home/joel/Escritorio/Desplegament/AEA2/Punto-De-Juego/portal && sudo chmod -R o+r "/home/joel/Escritorio/Desplegament/AEA2/Punto-De-Juego/portal"

			systemctl status apache2

			systemctl start apache2

			mv (para renombrar o mover cosas)

			cp -r (para hacer copias recursivas sin afectar al origen)

		1.5:

		1. Funciona.
		2. No se hacerlo (no lo entiendo).
		3. "http://localhost/tralalerotralala" 
		
		"Not Found
		The requested URL was not found on this server.

		Apache/2.4.66 (Ubuntu) Server at localhost Port 80"

		Esto como claramente indica el error dice que no ha encontrado esto en el server.
		Despues te dice la version, el SO y el puerto.

		4. No lo entiendo (no se hacerlo).
		5. Si responde.
		6. Si borras todas las carpetas del proyecto te lleva a un error "Not Found
		The requested URL was not found on this server.".

		Se puede revertir regenerando las carpetas pertenecientes a la URL introducida.

	
	Encargo 2:

	2.1.3: 
		Recorre el array de actividades y le da contenido a los article del HTML.

	2.1.4:
		La sitribucion de tareas se hace en base a que cada uno se encarga de organizar el trbajo de un encargo si uno no.
		Aunque trabajemos todos.

		El criterio para integrar los cambios es completar un apartado. (Integrar como en hacer commit y push).

	
	2.2.1:
		Apache 2.4.
	2.2.3:
		Hemos instalado PHP-FPM 
			Version: 8.5.
			Configuracion: /etc/php/8.5/fpm/pool.d/www.conf.
			Punto de escucha: /run/php/php8.5-fpm.sock.
	2.2.4:
		No nos ha hecho falta configurar nada de esto.
	2.2.5:
		Hemos dejado las que vienen por defecto, el socket es el del punto 2.2.3.
	2.2.6:
		Los unicos cambios serian las instlaciones (cambios en el sistema) como tal dentro de las mismas aparte de parara y arrancar los servicios no ha habido cambios.
	
	2.3.2:
		La forma de volver a la entrega estatica es el nav con links a todas las paginas.
	2.3.4:
		Se ha añadido una de las actividades de la pagina de actividades.
	2.3.5:
		Lo hemos hecho mediante pusheando todos los cambios y pulleando todos los cambios homogeneizando las versiones.



		Entrega y explicacion individual:

			4:
				El usuario accede a un link, mandando asi una peticion al servidor Apache2.
				El servidor Apache manda una peticion al servidor PHP que interpreta los archivos y devuelve HTML.
				El servidor apache recibe la respuesta y coge el CSS, los junta y le devuelve el conjunto al usuario.

			5:
				Hay que hacer un link a la carpeta /var/www/html (apuntando a "tu-pryecto").
				Dar permisos necesarios.
				Tener PHP-8.3-FPM o superior.
				Tener APACHE 2.4 o superior.
				Tener todos los servicios en marcha y los archivos correspondientes.

				Con ello ya podriamos reproducir el despliegue actual.

## Configuraciones



## Pruebas

### Objetivo
### Pasos
### Resultado esperado
### Resultado obtenido
### Conclusion



## Incidencias



## Explicación individual


