# PruebaPractica

Esta prueba práctica tiene como finalidad evaluar cómo resuelves los siguientes problemas.

Lee muy bien estas instrucciones antes de empezar. Solo podrás hacer preguntas antes de comenzar.

## Instrucciones

Tienes máximo 120 minutos para trabajar en los siguientes problemas. Puedes utilizar cualquier recurso que quieras. Puedes buscar en google pero no puedes llamar ni escribirle a nadie, debes resolver esto con tus propios medios.

### Problemas de Instalación

1. Debes clonar este repositorio en el computador que estás utilizando. No importa donde.
2. Crea un proyecto nuevo de Laravel
3. Crea un proyecto Vue, puede ser versión 2 o 3.
4. Debes crear un **Branch** con tu nombre y apellido con el formato **UpperCamelCase**
5. Debes instalar las dependencias que ambos proyectos necesitan para funcionar

### Desafío Principal

#### Laravel

1. Crea una migración para una tabla que se llame **Días** con el campo **fecha**, **descripcion**, **estado** (boolean), **imagenes** (json).
2. Crea un modelo con los casts necesarios.
3. Instala Sanctum.
4. Crea un endpoint que se llame **/api/dias** para crear días basándose en parámetros de inicio y término.
5. Crea los días de este mes y del mes anterior.
6. Crea otro endpoint que se llame **/api/dias** para obtener los dias de la base de datos. Este endpoint debe tener como parámetros opcionales **inicio** y **termino** para un rango de días acotado.
7. Crea un **Schedule** que ejecute un **Job** cada 10 minutos que revise que todos los dias **no** tengan imágenes, en caso de que haya alguno que no tenga ninguna imagen, debes obtener al menos una imagen para cada día utilizando la API APOD de la NASA (https://api.nasa.gov/). Si no hay imagen disponible para el día, debes dejar una nota en el campo **descripcion**

#### Vue

1. Instala Axios y configuralo para consumir la API del proyecto que hiciste en Laravel.
2. Crea una vista y programa un calendario que muestre un mes completo. El usuario debe poder camibar de mes libremente. Los días debes generarlos utilzando la clase Date de Javascript o puedes instalar alguna librería para manejar fechas. No puedes ocupar un componente que cree el calendario, lo debes programar tú.
3. Cuando se renderice un mes, se debe consultar los días a la API que hiciste en Laravel para obtener las imágenes por día y debes mostrar una imagen por día en caso que exista.

## Término

Cuando estés listo o se haya terminado el tiempo, debes hacer un pull request con el trabajo realizado.

## Éxito
