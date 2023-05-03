# Introducción al aprendizaje de VIM

Estas son algunas notas que tomo del curso de VIM impartido por el creador de contenidos "Hola Mundo" de youtube.

El mismo lo vas a poder encontrar en el  [Curso de VIM en Udemy.com](https://udemy.com/course/vim-aumenta-tu-velocidad-de-desarrollo).

# Instalando VIM

**En mi caso estoy utilizando GitBash para editar en VIM para no ocupar recursos de mi computadora que anda algo lenta por ser muy basica**

Pero ¿Cómo instalarlo correctamente?

Ingresar en [Vim.org](https://www.vim.org/download.php) y descarga para nuestro Sistema Operativo preferido.

## Una alternativa

Podes descargar una alternativa que es [NEOvim](https://neovim.io/) y seguir las instrucciones de la pagina.

# Comandos Basicos

Como notas de como funciona Vim y dejar asentado el conocimiento en mi memoria voy a crear con markdown una tabla de los comando a medida que los voy entendiendo, por lo que en el siguiente texto vas a poder ver como insertar texto, guardarlo y salir de la terminal entre los comando más basicos


| Comando 			| Descripción 										|
| ----------------------------- | ------------------------------------------------------------------------------------- |
| vim NOMBRE-DEL-ARCHIVO 	| para crear un archivo y dandole una extención en caso de que sea texto plano 		|
| letra i			| Al apretar la letra I podemos ingresar texto al archivo				|
| ESC dos veces			| Precionamos dos veces la tecla ESC para volver al modo lectura/normal			|
| ESC dos veces **+** :q 	|  Salir el archivo si no hubo cambios 							|
| ESC dos veces **+** :q! 	| Forzar la salida sin guardar 								|
| ESC dos veces **+** :wq!	| Al escribir :wq! le damos a entender a Vim que queremos forzar, guardar y salir	| 

