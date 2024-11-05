# cursoPHP

## Etiquetas HTML
- <html>: Indica que todo el contenido de la página web es un documento HTML.
- lang="es": Es un atributo que especifica que el idioma principal del contenido es español.
    Dentro de la etiqueta <html>, se encuentran dos secciones importantes:

    <head></head>: Contiene metadatos sobre el documento, como el título de la página, las configuraciones de caracteres, enlaces a hojas de estilo, etc.
    <body></body>: Contiene el contenido visible de la página web, como texto, imágenes, botones, etc.

- <title> </title>: Define el titulo de un documento web. Este titulo se muestra en la pestaña del navegador. Esta etiqueta es
    un meta dato, por lo tanto debe ir en la seccion del <head>
- <h1>, <h6>: Es el tamaño de fuente.
- <b></b>: Texto en negrita.
- <p></p>: Etiqueta para agregar parrafo.
- <em></em>: Texto en cursiva.
- <a></a>: Etiqueta para crear un Hipervinculo o enlace, su atributo principal es (href="") que es donde le indicamos el destino al cual nos redireccionará. EJ: <a href="https://youtube.com">  ir a youtube  </a>
- <br>: Salto de linea.

- <form></form>: Inidica el inicio y fin de un formulario web. son atributos son:
                mehtod="": permite asignar el metodo en que se va a enviar la informacion del formulario (get, post).
                            el metodo GET permite que la informacion del formulario se envíe de manera visible y el 
                            metodo POST oculta la informacion.
                action="": Es para indicarle el destino al cual se va a enviar la informacion del formulario EJ:
                    <form method="post" action="pagina2.php">
- <label></label>: se utiliza para asociar una etiqueta de texto con un control de formulario, como un campo de entrada (<input>)
- <input>: Es el campo de entrada donde el usuario puede ingresar datos.
- <select></select>: Permite crear un campo desplegable con varias opciones
- <button></button>:  se utiliza para crear un botón que puede ser interactivo. Permite a los usuarios realizar acciones.

- <table></table>: Permite crear una tabla en nuestro sitio web. Sus propiedades son las siguientes:
                <thead><thead>: inicio y fin del encabezado de la tabla.
                <tbody></tbody>: Inicio y fin del cuerpo de la tabla.
                <th></th>: Titulo de los encabezados de la tabla.
                <tr></tr>: Inicio y fin de la fila de la tabla.
                <td></td>: Inicio y fin de la celda de la tabla.
                EJ: 
                <table>
                    <thead>
                        <th>Nombre del Estudiante</th>
                        <th>Documento</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pepito Perez</td>
                            <td>1001234567</td>
                        </tr>
                    </tbody>
                </table>


### Atributos para los <input>
- Type: Especifica el tipo de dato que puede recibir ese campo, como los siguientes:
        Text : caracteres alfanumericos.
        email: campos de tipo correo electrónico, nos especifica que debemos utilizar almenos un @ y un (.)
        password: oculta los caracteres al escribirlos en el campo.
        date: Se utiliza para fechas. Se desplegará un formato de fechas al dar click en el campo.
        number: Numeros, ya sean negativos o positivos.
        hour: para horas.
        radio: muestra un campo circular para seleccionar una opcion.
        chexkbox: muestra un campo cuadrado para seleccionar una o varias opciones.
        ## Uso  ##
        <input type="email">
- Name: Asigna el nombre al campo, es el que permite identificar el campo al momento de enviar el formulario.
        <input type="text" name="nombres">
- Value: Define el valor que tendra por defecto el campo.
        <input type="text" name="nombres" value="Camilo"> Esto mostrará por defecto en la caja de texto el nombre "Camilo".


# PHP
- <?php : Inicio de código PHP.
- ?>: Finalización de código PHP
- echo: Imprime un mensaje en pantalla.
- $: declaracion de una variable Ej($nombre).
- $_POST: se utiliza para acceder a los datos enviados a través de un formulario HTML mediante el método POST
- $_GET[]: se utiliza para acceder a los datos enviados a través de un formulario HTML mediante el método GET
- $_REQUEST[]: se utiliza para acceder a los datos enviados a través de un formulario HTML tanto por el método GET como POST
