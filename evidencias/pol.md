## Entorno:

    Apache2


## Requisitos:

    Presentación: explicar quiénes somos, qué ofrecemos y dónde organizamos actividades,
    con la identidad de Punto de Juego.
	Actividades: mostrar juego, descripción, fecha, municipio, lugar, plazas y estado de encuentros y torneos.
	Participantes: consultar y, en las fases correspondientes, gestionar las inscripciones.
	Torneos: mostrar rondas y enfrentamientos presenciales, registrar resultados y calcular clasificaciones.
	Datos: conservar la información cuando se cierre la aplicación o se reinicien los servicios.
	Funcionamiento: desplegar los componentes que requiere cada funcionalidad y verificar su comunicación.
	Mantenimiento: disponer de documentación que permita reproducir el despliegue y diagnosticar incidencias.

## Procedimiento:

    Creacion de las evidencias.


	Punto Extra (Comandos usados):

        sudo ln -s "/home/joel/Escritorio/Desplegament/AEA2/Punto-De-Juego/portal" "/var/www/html/portal" && sudo chmod o+x /home/joel /home/joel/Escritorio /home/joel/Escritorio/Desplegament /home/joel/Escritorio/Desplegament/AEA2 /home/joel/Escritorio/Desplegament/AEA2/Punto-De-Juego /home/joel/Escritorio/Desplegament/AEA2/Punto-De-Juego/portal && sudo chmod -R o+r "/home/joel/Escritorio/Desplegament/AEA2/Punto-De-Juego/portal"

        systemctl status apache2 (lo que hace es mirar el proceso de apache en que estado esta ahora mismo)

        systemctl start apache2 (enciende el servicio de apache temporalmente hasta que se apague el ordenador)

        mv (para renombrar o mover cosas)

        cp -r (para hacer copias recursivas sin afectar al origen)


## Configuraciones:



## Pruebas:



## Incidencias: