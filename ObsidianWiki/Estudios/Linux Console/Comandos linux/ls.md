para listar que carpetas tenemos por delante podemos Ingresar ls en consola

Nos daria información de que carpetas y archivos están presentes en el lugar donde estamos pocicionados

# Variantes y argumentos

Para colocar variantes y argumentos debemos usar el simbolo **-** (menos) delante

### Los argumentos que se le pueden asignar son los siguientes

+ -l : Devuelve en forma de lista los archivos y directorios, además de los permisos que en ellos se encuentran para el usuario, grupo y otros
	+ Ejemplo: -rw-r--r-- 1 user 197609   782 Feb  4 08:53 README.md
		+ podemos observar que en la consola se ve lo siguiente.
			+ Permisos de escritura lectura y ejecución **-rw-r--r--**
			+ Luego 1 que representa la cantidad de enlases simbolicos; user 197609 corresponde al usuario y su identificación dentro del grupo; 782 es la cantida de bytes presentes cuanto ocupan en memoria; Feb 4 08:53 indica cuando fue creado y modificado por ultima vez el archivo/directorio y finalmente README.md indica el nombre y extención de archivo en cuestión
	