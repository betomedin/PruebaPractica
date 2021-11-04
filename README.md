# PruebaPractica

Esta prueba práctica tiene como finalidad evaluar cómo resuleves los siguientes problemas.

Lee muy bien estas instrucciones antes de empezar. Solo podrás hacer preguntas antes de comenzar.

## Instrucciones

Tienes máximo 90 minutos para trabajar en los siguientes problemas. Puedes utilizar cualquier recurso que quieras. Puedes buscar en google pero no puedes llamar ni escribirle a nadie, debes resolver esto con tus propios medios.

### Problemas de Instalación

1. Debes clonar este repositorio en el computador que estás utilizando. No importa donde.
2. Crea un proyecto nuevo de Laravel
3. Debes crear un **Branch** con tu nombre y apellido con el formato **UpperCamelCase**
4. Debes instalar las dependencias que el proyecto necesita para funcionar
5. Debes arrancar el servidor web con **php artisan serve**

### Desafío Principal

1.- Crea una migración para una tabla que se llame **Libros** con los campos **nombre**, **descripcion**, **idioma**, **precio**, **estado** (boolean), **fecha_ingreso**, **ediciones_pasdas** (json).
2.- Crea un modelo con los casts necesarios.
3.- Instala Sanctum.
4.- Crea un endpoint que se llame **/api/libros** para crear un libro.
5.- Crea otro endpoint que se llame **/api/libros** para obtener los libros de la base de datos.
6.- Crea un **Scheduale** que ejecute un **Job** cada 10 minutos que revise que todos los libros tengan descripción, en caso de que haya alguno que no tenga descripción que envíe un email de forma automática avisando de esta situación.

## Término

Cuando estés listo o se haya terminado el tiempo, debes hacer un push con el trabajo realizado.

## Éxito
