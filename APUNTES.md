
# PHP desde cero

## 1. Introducción al entorno de desarrollo

Para comenzar a programar en PHP, necesitamos instalar y configurar las herramientas que nos permitirán desarrollar y ejecutar nuestras aplicaciones web.

### Componentes principales

- **Servidor web Apache:** recibe las solicitudes del navegador y permite servir páginas web. También puede procesar archivos PHP cuando está configurado para ello.
- **PHP:** lenguaje de programación que se ejecuta en el servidor y permite generar contenido dinámico.
- **MySQL:** sistema gestor de bases de datos relacionales que permite almacenar, consultar y administrar información.

### Instalación de un paquete de software

Podemos instalar cada componente por separado o utilizar un paquete que incluya varias de estas herramientas.

Algunas alternativas son:

- **XAMPP:** incluye Apache, PHP, MariaDB y otras herramientas.
- **WampServer:** entorno de desarrollo para Windows que incluye Apache, PHP y MySQL o MariaDB, según la versión.
- **EasyPHP:** entorno de desarrollo web que integra herramientas para trabajar con PHP.

**Recomendación:** para este curso utilizaremos XAMPP.

> **Importante:** ejecuta el instalador de XAMPP con permisos de administrador si es necesario.

## 2. Instalar y configurar XAMPP

### 2.1. Abrir el panel de control

Una vez instalado XAMPP, podemos acceder a su panel de control desde la siguiente ruta:

`C:\xampp\xampp-control.exe`

Desde el panel podemos iniciar y detener los servicios de Apache y MySQL/MariaDB.

### 2.2. Agregar PHP a las variables de entorno de Windows

Configurar la variable de entorno `Path` permite ejecutar PHP desde una terminal sin tener que escribir la ruta completa del ejecutable.

#### Pasos

1. Abre las propiedades del sistema de Windows.
2. Accede a **Configuración avanzada del sistema**.
3. Haz clic en **Variables de entorno**.
4. En las variables del sistema, selecciona `Path`.
5. Haz clic en **Editar** y después en **Nuevo**.
6. Agrega la siguiente ruta:

   `C:\xampp\php`

7. Guarda los cambios y abre una terminal nueva.

Si los cambios no se reflejan correctamente, puedes reiniciar Windows.

### 2.3. Comprobar la instalación de PHP

Abre PowerShell y ejecuta:

```powershell
php -v
```

Si PHP está correctamente configurado, aparecerá información sobre su versión.

También puedes ejecutarlo mediante su ruta completa:

```powershell
& "C:\xampp\php\php.exe" -v
```

## 3. Instalar Visual Studio Code

Visual Studio Code (VS Code) es un editor de código que utilizaremos para escribir y organizar nuestros archivos PHP.

En este curso trabajaremos con Visual Studio Code en lugar de herramientas como Adobe Dreamweaver.

## 4. Instalar las extensiones de PHP en VS Code

Abre el apartado **Extensions** de Visual Studio Code con el atajo:

`Ctrl + Shift + X`

Busca e instala las siguientes extensiones:

- **PHP Extension Pack** — autor: Xdebug.
- **PHP Server** — autor: brapifra.

Estas extensiones facilitan el trabajo con PHP y permiten iniciar un servidor de desarrollo desde el editor.

## 5. Configurar PHP en Visual Studio Code

Para que VS Code encuentre el ejecutable de PHP y la extensión PHP Server pueda iniciar el servidor, debemos configurar las rutas correspondientes.

### 5.1. Abrir el archivo `settings.json`

1. Presiona `Ctrl + Shift + P`.
2. Busca el comando **Preferences: Open User Settings (JSON)**.
3. Abre el archivo de configuración.

Asegúrate de tener las siguientes propiedades:

```json
{
    "php.validate.executablePath": "C:\\xampp\\php\\php.exe",
    "phpserver.phpPath": "C:\\xampp\\php\\php.exe",
    "phpserver.phpConfigPath": "C:\\xampp\\php\\php.ini"
}
```

Si ya tienes otras configuraciones, no es necesario eliminarlas. Agrega únicamente las propiedades que falten y respeta la sintaxis JSON, incluidas las comas.

**¿Para qué sirve cada propiedad?**

- `php.validate.executablePath`: indica a VS Code dónde se encuentra PHP para validar el código.
- `phpserver.phpPath`: indica a la extensión PHP Server dónde está el ejecutable de PHP.
- `phpserver.phpConfigPath`: indica la ubicación del archivo de configuración `php.ini`.

> **Nota:** estas rutas corresponden a una instalación habitual de XAMPP en Windows. Si instalaste XAMPP en otra ubicación, debes adaptarlas.

Después de guardar el archivo, ejecuta `Developer: Reload Window` desde la paleta de comandos para recargar VS Code.

## 6. Crear nuestro primer archivo PHP

### 6.1. Crear el proyecto

Crea una carpeta para el curso, por ejemplo:

`PHP_DESDE_CERO`

Abre esa carpeta en Visual Studio Code mediante **File > Open Folder**.

Dentro de ella, crea un archivo llamado `index.php`.

La extensión `.php` indica que el archivo puede contener código PHP.

### 6.2. Escribir la estructura básica de HTML

En el archivo `index.php`, escribe la siguiente estructura:

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera página PHP</title>
</head>
<body>

</body>
</html>
```

Esta estructura define el documento HTML que el navegador mostrará.

### 6.3. Insertar código PHP

Dentro de la etiqueta `<body>`, agrega el siguiente código:

```php
<?php
echo "Hola Mundo";
?>
```

El archivo completo quedará así:

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera página PHP</title>
</head>
<body>

    <?php
    echo "Hola Mundo";
    ?>

</body>
</html>
```

### 6.4. Entender el código

- `<?php`: abre un bloque de código PHP.
- `echo`: muestra información en la salida generada por PHP.
- `"Hola Mundo"`: es la cadena de texto que queremos mostrar.
- `;`: finaliza la instrucción.
- `?>`: cierra el bloque de PHP. En archivos que contienen únicamente PHP, suele recomendarse omitir la etiqueta de cierre para evitar espacios de salida accidentales.

**Resultado esperado en el navegador:**

```text
Hola Mundo
```

## 7. Ejecutar PHP desde PowerShell

PHP incluye un servidor web integrado que resulta útil para realizar pruebas durante el desarrollo.

### 7.1. Abrir la terminal en la carpeta del proyecto

En VS Code, abre una terminal desde **Terminal > New Terminal**.

Comprueba que la terminal esté situada en la carpeta donde guardaste `index.php`.

### 7.2. Iniciar el servidor

Ejecuta el siguiente comando en PowerShell:

```powershell
& "C:\xampp\php\php.exe" -S localhost:3000
```

Este comando inicia el servidor de desarrollo integrado de PHP en la dirección local y el puerto `3000`.

Si todo funciona correctamente, podrás acceder a la aplicación desde el navegador mediante:

`http://localhost:3000`

El navegador debería mostrar el texto **Hola Mundo**.

### 7.3. Detener el servidor

Para detener el servidor, vuelve a la terminal donde lo iniciaste y presiona:

`Ctrl + C`

> **Importante:** este servidor integrado está destinado principalmente al desarrollo y las pruebas. No debe utilizarse como servidor de producción.

## 8. Ejecutar PHP con la extensión PHP Server

Para no tener que escribir manualmente el comando de PowerShell cada vez que queramos ejecutar un proyecto, podemos utilizar la extensión PHP Server.

### Pasos

1. Abre la carpeta del proyecto en VS Code.
2. Comprueba que el archivo `index.php` esté guardado.
3. Haz clic con el botón secundario del ratón sobre el editor o utiliza la paleta de comandos.
4. Selecciona **PHP Server: Serve project**.
5. Espera a que el servidor se inicie y abre la dirección que indique la extensión en el navegador.

Si la configuración es correcta, veremos el texto:

`Hola Mundo`

La extensión facilita el inicio del servidor, mientras que PHP es el encargado de ejecutar el código del archivo.

**Nota:** si aparece el error `PHP not found`, revisa la configuración `phpserver.phpPath` y comprueba que apunte a `C:\xampp\php\php.exe`.

---

## 9. Resumen de lo aprendido

Al finalizar esta primera parte, deberíamos saber:

- [ ] Identificar los componentes básicos de un entorno de desarrollo PHP.
- [ ] Instalar XAMPP y reconocer su panel de control.
- [ ] Agregar PHP a las variables de entorno de Windows.
- [ ] Comprobar la versión de PHP desde PowerShell.
- [ ] Instalar y configurar las extensiones necesarias en VS Code.
- [ ] Crear un archivo `index.php` con HTML y PHP.
- [ ] Mostrar texto mediante la instrucción `echo`.
- [ ] Iniciar un servidor de desarrollo desde PowerShell.
- [ ] Ejecutar un proyecto mediante la extensión PHP Server.

**Próximo paso:** aprender las bases del lenguaje PHP, incluyendo variables, tipos de datos, operadores, comentarios y estructuras de control.


## 10. La instrucción `print`

En la primera lección aprendimos a ejecutar un archivo PHP y a mostrar el mensaje `Hola Mundo` mediante la instrucción `echo`.

En esta segunda lección aprenderemos a utilizar la instrucción `print` para mostrar mensajes en una página web y a introducir saltos de línea con la etiqueta HTML `<br>`.

### 10.1. Crear el archivo

Dentro de la carpeta principal del proyecto, creamos una carpeta llamada `1` y, dentro de ella, guardamos un archivo llamado `index.php`.

La estructura del proyecto quedará así:

```text
PHP_DESDE_CERO/
└── 1/
    └── index.php
```

### 10.2. Escribir el código PHP

Abrimos el archivo `index.php` en Visual Studio Code y escribimos el siguiente código:

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera Página</title>
</head>
<body>
    <?php
        print "Bienvenidos al curso PHP <br>";
        print "Hola alumnos <br>";
        print "Hasta el próximo video";
    ?>
</body>
</html>
```

En este ejemplo utilizamos la instrucción `print` para mostrar tres mensajes en la página web.

### 10.3. Entender la instrucción `print`

La instrucción `print` permite mostrar texto u otro contenido en la salida generada por PHP.

Por ejemplo:

```php
print "Hola alumnos";
```

El resultado que recibirá el navegador será:

```text
Hola alumnos
```

**¿Qué significa cada parte del código?**

- `print`: instrucción que muestra el contenido indicado.
- `"Hola alumnos"`: cadena de texto que queremos mostrar.
- `;`: punto y coma que indica el final de la instrucción.
- `<?php`: etiqueta que abre un bloque de código PHP.
- `?>`: etiqueta que cierra el bloque de PHP.

### 10.4. Utilizar la etiqueta `<br>`

La etiqueta HTML `<br>` introduce un salto de línea en el contenido que se muestra en el navegador.

Observa este ejemplo:

```php
<?php
    print "Bienvenidos al curso PHP <br>";
    print "Hola alumnos <br>";
    print "Hasta el próximo video";
?>
```

La etiqueta `<br>` hace que los mensajes aparezcan en líneas diferentes.

**Resultado esperado en el navegador:**

```text
Bienvenidos al curso PHP
Hola alumnos
Hasta el próximo video
```

Sin la etiqueta `<br>`, los mensajes aparecerían seguidos, sin esos saltos de línea explícitos.

### 10.5. Ejecutar el archivo desde VS Code

Para ver el resultado en el navegador, seguimos estos pasos:

1. Abrimos la carpeta `PHP_DESDE_CERO` en Visual Studio Code.
2. Comprobamos que el archivo `1/index.php` esté guardado.
3. Hacemos clic con el botón secundario del ratón sobre el editor.
4. Seleccionamos **PHP Server: Serve project**.
5. Esperamos a que se inicie el servidor y abrimos en el navegador la dirección que indique la extensión.

Si el servidor se inicia desde la carpeta principal del proyecto y utiliza el puerto `3000`, podremos acceder a la página mediante:

`http://localhost:3000/1/`

También podemos indicar directamente el archivo:

`http://localhost:3000/1/index.php`

Si el servidor utiliza otro puerto, debemos sustituir `3000` por el puerto que aparezca en la dirección indicada por la extensión.

### 10.6. Resumen de lo aprendido

En esta lección hemos aprendido que:

- `print` permite mostrar texto en la página web.
- Las instrucciones PHP se escriben dentro de las etiquetas `<?php` y `?>`.
- El punto y coma (`;`) marca el final de cada instrucción.
- La etiqueta HTML `<br>` introduce un salto de línea.
- Podemos guardar nuestros archivos PHP dentro de subcarpetas y acceder a ellos mediante su ruta.


## 11. Comentarios y variables

En PHP podemos utilizar comentarios para explicar el código y variables para almacenar información que podremos utilizar y modificar durante la ejecución del programa.

### 11.1. Comentarios en PHP

Los comentarios permiten añadir explicaciones al código. PHP los ignora durante la ejecución.

**Comentario de una línea**

Se utiliza `//` para escribir un comentario en una sola línea.

```php
// Comentario de una línea
print "Esto es un texto con print <br>";
```

**Comentario de varias líneas**

Se utilizan `/*` y `*/` para delimitar un comentario que ocupa varias líneas.

```php
/*
Comentario de
varias líneas
*/
```

Estos comentarios sirven para documentar el código y facilitar su comprensión.

### 11.2. Crear variables

Una variable permite almacenar un valor que podemos utilizar durante la ejecución del programa.

En PHP, los nombres de las variables comienzan con el símbolo `$`.

Por ejemplo:

```php
$nombre; // Declarar la variable
$nombre = "Pedro"; // Inicializar la variable
```

En este código:

- `$nombre` es el nombre de la variable.
- `$nombre;` declara la variable, aunque todavía no le asigna un valor.
- `$nombre = "Pedro";` asigna el texto `"Pedro"` a la variable.

En PHP no es necesario indicar explícitamente el tipo de dato al declarar una variable. El lenguaje determina el tipo a partir del valor que se le asigna.

### 11.3. Mostrar el valor de una variable

Podemos utilizar `echo` o `print` para mostrar el valor almacenado en una variable.

```php
$nombre = "Pedro";

echo $nombre;
echo "<br>";
```

El navegador mostrará:

```text
Pedro
```

La instrucción `echo "<br>";` introduce un salto de línea en el contenido HTML.

### 11.4. Reasignar el valor de una variable

Podemos cambiar el valor de una variable después de haberla creado.

```php
$nombre = "Pedro";

$nombre = "Juan";
```

Después de la segunda asignación, la variable `$nombre` contiene el texto `"Juan"`.

### 11.5. Variables de distintos tipos

PHP permite almacenar diferentes tipos de datos en las variables.

Por ejemplo, una cadena de texto (`string`) y un número entero (`integer`):

```php
$nombre = "Juan";
$edad = 18;
```

En este caso:

- `$nombre` contiene una cadena de texto.
- `$edad` contiene un número entero.

### 11.6. Concatenar texto con variables

Podemos combinar texto y variables para mostrar información.

Una forma de hacerlo es interpolar las variables dentro de una cadena con comillas dobles:

```php
$nombre = "Juan";
$edad = 18;

print "El nombre del usuario es $nombre y su edad es $edad";
```

El resultado será:

```text
El nombre del usuario es Juan y su edad es 18
```

También podemos concatenar cadenas y variables utilizando el operador punto (`.`):

```php
print "El nombre del usuario es " . $nombre . " y su edad es " . $edad;
```

Ambas formas permiten generar un mensaje con los valores almacenados en las variables.

### 11.7. Diferencia entre `print` y `echo`

Tanto `print` como `echo` permiten mostrar contenido en la salida generada por PHP, pero tienen algunas diferencias.

- `echo` es una construcción del lenguaje que puede mostrar uno o varios argumentos y no devuelve un valor.
- `print` es una construcción del lenguaje que muestra un argumento y devuelve el valor `1`.

Por tanto, aunque a veces se diga informalmente que `print` es una función, técnicamente no es una función de PHP. Tanto `print` como `echo` son construcciones del lenguaje.

### 11.8. Código completo

El ejemplo completo quedaría así:

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios y Variables</title>
</head>
<body>
    <?php
        // Comentario de una línea
        print "Esto es un texto con print <br>";

        /*
        Comentario de
        varias líneas
        */

        print "Crear variables <br>";

        $nombre;
        $nombre = "Pedro";

        echo $nombre;
        echo "<br>";

        $nombre = "Juan";

        $edad = 18;

        /* Concatenar texto con variables */
        print "El nombre del usuario es $nombre y su edad es $edad";
    ?>
</body>
</html>
```

### 11.9. Resumen de lo aprendido

- `//` permite escribir comentarios de una línea.
- `/* ... */` permite escribir comentarios de varias líneas.
- Las variables de PHP comienzan con `$`.
- El operador `=` permite asignar o reasignar valores.
- PHP determina automáticamente el tipo de dato según el valor asignado.
- `echo` y `print` permiten mostrar información.
- Podemos insertar variables en cadenas con comillas dobles o utilizar el operador de concatenación `.`.


## 12. Flujo de ejecución (`include`, `require`)

Por defecto, el código PHP se ejecuta de arriba hacia abajo, siguiendo el orden de las instrucciones. Sin embargo, existen estructuras que permiten modificar o controlar este flujo de ejecución, como las condiciones, los bucles y las funciones.

Además, PHP permite organizar el código en varios archivos y utilizar instrucciones como `include` y `require` para incorporar archivos externos.

### 12.1. ¿Qué son las funciones?

Las funciones son bloques de código que permiten realizar una tarea específica y reutilizarla tantas veces como sea necesario.

Sus principales características son:

- Permiten reutilizar código y evitar repetir las mismas instrucciones.
- Tienen su propio ámbito (scope), que determina desde dónde se pueden acceder a determinadas variables.
- No ejecutan su contenido simplemente por estar declaradas: normalmente es necesario invocarlas o llamarlas.
- Pueden recibir datos mediante parámetros y devolver resultados mediante `return`.

### 12.2. Declarar una función

Para declarar una función en PHP utilizamos la palabra reservada `function`, seguida del nombre de la función y unos paréntesis.

Por ejemplo:

```php
function dameDatos() {
    echo "Este es el mensaje del interior de la función <br>";
}
```

En este ejemplo:

- `function` indica que estamos declarando una función.
- `dameDatos` es el nombre de la función.
- `()` contiene los parámetros, si los hubiera.
- `{}` delimitan el bloque de código que pertenece a la función.
- `echo` muestra un mensaje cuando se ejecuta la función.

Al declarar la función, el mensaje todavía no se muestra. Para ejecutarla debemos llamarla.

### 12.3. ¿Cómo se invoca una función?

Para llamar a una función, escribimos su nombre seguido de paréntesis y un punto y coma.

```php
dameDatos();
```

Cuando PHP ejecuta esta instrucción, entra en la función y ejecuta las instrucciones que contiene.

Por ejemplo:

```php
<?php
function dameDatos() {
    echo "Este es el mensaje del interior de la función <br>";
}

echo "Antes de llamar a la función <br>";

dameDatos();

echo "Después de llamar a la función <br>";
?>
```

El resultado será:

```text
Antes de llamar a la función
Este es el mensaje del interior de la función
Después de llamar a la función
```

**Importante:** la ubicación de la llamada determina en qué momento se ejecutará la función. En este ejemplo, el mensaje del interior aparece entre los otros dos mensajes.

En PHP, una función definida en el ámbito global normalmente puede llamarse antes de su declaración si esta se encuentra en el mismo archivo y no depende de una estructura condicional que deba ejecutarse previamente.

### 12.4. Ejemplo con varios bloques PHP

Un mismo archivo puede contener varios bloques PHP separados por código HTML.

Por ejemplo:

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flujo de Ejecución</title>
</head>
<body>

    <?php
        // Primer bloque PHP
        function dameDatos() {
            echo "Este es el mensaje del interior de la función <br>";
        }
    ?>

    <?php
        // Segundo bloque PHP
        echo "Este es el primer mensaje <br>";

        dameDatos();

        echo "Este es el segundo mensaje <br>";
    ?>

</body>
</html>
```

El resultado en el navegador será:

```text
Este es el primer mensaje
Este es el mensaje del interior de la función
Este es el segundo mensaje
```

Como podemos observar, es posible tener más de un bloque PHP en un mismo archivo. PHP procesa el código y genera el contenido que recibirá el navegador.

### 12.5. Crear una función en un archivo externo

Para organizar mejor nuestros proyectos, podemos guardar las funciones en archivos separados y utilizarlas desde otros archivos PHP.

Crearemos un archivo llamado `proporciona_datos.php` con el siguiente contenido:

```php
<?php

function saludar() {
    echo "Hola Mundo desde un archivo externo <br>";
}

?>
```

Este archivo contiene la declaración de la función `saludar()`. Al incluirlo desde otro archivo, podremos utilizar esa función.

La estructura del proyecto quedará así:

```text
PHP_DESDE_CERO/
└── 1/
    ├── index.php
    └── proporciona_datos.php
```

En este ejemplo, ambos archivos se encuentran en la misma carpeta.

### 12.6. Utilizar `include`

La instrucción `include` permite incorporar y ejecutar el contenido de otro archivo PHP.

Para utilizar la función que hemos definido en `proporciona_datos.php`, escribimos:

```php
include("proporciona_datos.php");

saludar();
```

Primero se incluye el archivo, que declara la función `saludar()`. Después llamamos a esa función para ejecutar su contenido.

El resultado será:

```text
Hola Mundo desde un archivo externo
```

### 12.7. Ejemplo completo con `include`

El archivo `index.php` quedaría así:

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flujo de Ejecución</title>
</head>
<body>

    <?php
        // Primer bloque PHP
        function dameDatos() {
            echo "Este es el mensaje del interior de la función <br>";
        }
    ?>

    <?php
        // Segundo bloque PHP
        echo "Este es el primer mensaje <br>";

        dameDatos();

        echo "Este es el segundo mensaje <br>";

        // Incorporar un archivo externo
        include("proporciona_datos.php");

        // Llamar a la función del archivo externo
        saludar();
    ?>

</body>
</html>
```

El resultado en el navegador será:

```text
Este es el primer mensaje
Este es el mensaje del interior de la función
Este es el segundo mensaje
Hola Mundo desde un archivo externo
```

### 12.8. Diferencia entre `include` y `require`

Ambas instrucciones permiten incorporar un archivo externo, pero se comportan de forma diferente cuando el archivo no se encuentra o no puede cargarse.

**`include`**

Si PHP no puede incorporar el archivo, genera una advertencia (`warning`) y, normalmente, continúa ejecutando el resto del programa.

```php
include("archivo_no_existe.php");

echo "El programa continúa ejecutándose";
```

**`require`**

Si PHP no puede incorporar el archivo, genera un error que interrumpe la ejecución normal del programa.

```php
require("archivo_no_existe.php");

echo "Esta instrucción no se ejecutará si require falla";
```

Podemos resumir la diferencia de la siguiente manera:

| Instrucción | Si el archivo no se encuentra |
|---|---|
| `include` | Genera una advertencia y normalmente continúa la ejecución. |
| `require` | Genera un error y detiene la ejecución normal del programa. |

**¿Cuándo utilizar cada una?**

- Utilizamos `include` cuando el archivo es complementario y podemos permitir que el programa continúe si falta.
- Utilizamos `require` cuando el archivo es imprescindible para que el programa funcione correctamente.

Por ejemplo, si un archivo contiene funciones esenciales para la aplicación, suele ser apropiado utilizar `require`.

### 12.9. Resumen de lo aprendido

- El código PHP se ejecuta siguiendo un orden, salvo cuando las estructuras del lenguaje controlan ese flujo.
- Las funciones permiten reutilizar código y ejecutar tareas específicas.
- Para declarar una función utilizamos `function`.
- Para llamar a una función escribimos su nombre seguido de paréntesis.
- Podemos separar las funciones en archivos externos para organizar mejor el proyecto.
- `include` incorpora un archivo y normalmente permite continuar si falla su carga.
- `require` se utiliza cuando necesitamos que el archivo se cargue correctamente para continuar.
- `include_once` y `require_once` evitan incorporar el mismo archivo más de una vez durante una ejecución.


## 13. Ámbitos de las variables

El ámbito de una variable (*scope*) determina en qué partes del código podemos acceder a ella y utilizar su valor.

En PHP podemos distinguir entre variables locales, variables globales y variables superglobales.

### 13.1. Variable local

Una variable local es aquella que se declara dentro de una función. Por defecto, solo puede utilizarse dentro de esa función.

Por ejemplo:

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ámbito de las variables</title>
</head>
<body>
    <?php
        $nombre = "Pedro";

        function dameNombre() {
            $nombre = "Luis";
        }

        dameNombre();

        echo $nombre;
    ?>
</body>
</html>
```

**Resultado en el navegador:**

```text
Pedro
```

¿Por qué aparece `Pedro` y no `Luis`?

Porque existen dos variables diferentes llamadas `$nombre`:

- La variable `$nombre` que está fuera de la función contiene `"Pedro"`.
- La variable `$nombre` que está dentro de `dameNombre()` contiene `"Luis"` y es local a esa función.

Aunque tengan el mismo nombre, son variables distintas. Por tanto, al ejecutar `echo $nombre` fuera de la función, se muestra el valor `"Pedro"`.

### 13.2. Variables en archivos externos

También podemos declarar funciones en un archivo externo e incluirlo mediante `include` o `require`.

Creamos un archivo llamado `datos_otros.php` con el siguiente contenido:

```php
<?php
    function otroNombre() {
        $nombre = "Mario";
    }
?>
```

Después, en nuestro archivo `index.php`, escribimos:

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ámbito de las variables</title>
</head>
<body>
    <?php
        $nombre = "Pedro";

        include("datos_otros.php");

        otroNombre();

        echo $nombre;
    ?>
</body>
</html>
```

**Resultado en el navegador:**

```text
Pedro
```

Aunque hemos incluido el archivo y llamado a la función `otroNombre()`, la variable `$nombre = "Mario"` es local a esa función.

Incluir un archivo no significa que las variables locales de sus funciones pasen a estar disponibles fuera de ellas.

### 13.3. Variable global

Una variable global es aquella que se declara fuera de una función.

Por ejemplo:

```php
$nombre = "Pedro";
```

Esta variable está disponible en el ámbito global del archivo. Sin embargo, **no se puede acceder directamente a ella desde dentro de una función solo por haberla declarado fuera**.

Para utilizar una variable global dentro de una función, podemos emplear la palabra reservada `global`.

Por ejemplo:

```php
<?php
    $nombre = "Pedro";

    function dameNombre() {
        global $nombre;

        echo $nombre;
    }

    dameNombre();
?>
```

**Resultado:**

```text
Pedro
```

La instrucción:

```php
global $nombre;
```

permite que la función haga referencia a la variable `$nombre` del ámbito global, en lugar de crear una variable local independiente con ese nombre.

### 13.4. Modificar una variable global desde una función

También podemos cambiar el valor de una variable global desde una función utilizando `global`.

```php
<?php
    $nombre = "Pedro";

    function cambiarNombre() {
        global $nombre;

        $nombre = "Luis";
    }

    cambiarNombre();

    echo $nombre;
?>
```

**Resultado:**

```text
Luis
```

En este caso, la función modifica la variable global. Por eso, cuando se ejecuta `echo $nombre` después de llamar a `cambiarNombre()`, aparece `"Luis"`.

### 13.5. Variables superglobales

Las variables superglobales son variables especiales de PHP que están disponibles en todos los ámbitos del script, incluso dentro de las funciones, sin necesidad de utilizar `global`.

Algunas de las más utilizadas son:

| Variable | Utilidad |
|---|---|
| `$_GET` | Recoge datos enviados mediante parámetros de la URL. |
| `$_POST` | Recoge datos enviados mediante el método HTTP POST. |
| `$_SESSION` | Permite acceder a los datos de la sesión del usuario. |
| `$_COOKIE` | Permite acceder a las cookies recibidas del navegador. |
| `$_SERVER` | Contiene información sobre el servidor y la petición actual. |
| `$_FILES` | Contiene información sobre los archivos enviados mediante formularios. |
| `$GLOBALS` | Permite acceder a las variables del ámbito global. |

Estas variables son arrays asociativos en los casos indicados y PHP las proporciona automáticamente. No tenemos que declararlas nosotros.

Por ejemplo, podemos acceder a una variable superglobal desde una función:

```php
<?php
    function mostrarMetodo() {
        echo $_SERVER["REQUEST_METHOD"];
    }

    mostrarMetodo();
?>
```

El resultado dependerá del método HTTP utilizado en la petición. Por ejemplo, si la página se solicita mediante GET, normalmente se mostrará:

```text
GET
```

**Importante:** `$_SESSION` requiere iniciar o reanudar la sesión mediante `session_start()` antes de utilizar los datos de la sesión.

### 13.6. Resumen de lo aprendido

- **Variable local:** se declara dentro de una función y, por defecto, solo está disponible dentro de ella.
- **Variable global:** se declara fuera de una función. Para acceder a ella desde una función podemos utilizar `global`.
- **Variable superglobal:** es una variable especial de PHP que está disponible en todos los ámbitos del script.
- Dos variables con el mismo nombre pueden ser diferentes si pertenecen a ámbitos distintos.
- Incluir un archivo PHP no hace que las variables locales de sus funciones sean accesibles desde fuera de ellas.


## 14. Variables estáticas

Las variables estáticas son variables locales de una función que conservan su valor entre las diferentes llamadas a esa función.

Normalmente, una variable local se crea cuando se ejecuta la función y deja de estar disponible cuando termina su ejecución. Sin embargo, una variable estática conserva su valor para la siguiente llamada.

### 14.1. Ejemplo sin utilizar variables estáticas

Observemos el siguiente código:

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Estáticas</title>
</head>
<body>
    <?php
        function incrementaVariable() {
            $contador = 0;

            $contador++;

            echo $contador . "<br>";
        }

        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
    ?>
</body>
</html>
```

**Resultado en el navegador:**

```text
1
1
1
1
```

¿Por qué sucede esto?

Cada vez que llamamos a la función `incrementaVariable()`, se ejecutan de nuevo sus instrucciones:

1. Se crea la variable local `$contador` con el valor `0`.
2. Se incrementa su valor en una unidad mediante `$contador++`.
3. Se muestra el resultado, que es `1`.
4. Cuando termina la función, la variable local deja de estar disponible.

Por eso, cada llamada comienza nuevamente desde cero y el resultado siempre es `1`.

### 14.2. Crear una variable estática

Para declarar una variable estática dentro de una función, utilizamos la palabra reservada `static` antes del nombre de la variable.

La sintaxis es la siguiente:

```php
static $contador = 0;
```

De esta manera, la variable conserva su valor entre las llamadas a la función, en lugar de inicializarse de nuevo cada vez.

### 14.3. Ejemplo utilizando una variable estática

Modificamos el ejemplo anterior y añadimos la palabra `static`:

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Estáticas</title>
</head>
<body>
    <?php
        function incrementaVariable() {
            static $contador = 0;

            $contador++;

            echo $contador . "<br>";
        }

        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
    ?>
</body>
</html>
```

**Resultado en el navegador:**

```text
1
2
3
4
```

¿Por qué ahora los valores son diferentes?

1. En la primera llamada, `$contador` comienza en `0`, se incrementa y muestra `1`.
2. En la segunda llamada, conserva el valor `1`, se incrementa y muestra `2`.
3. En la tercera llamada, conserva el valor `2`, se incrementa y muestra `3`.
4. En la cuarta llamada, conserva el valor `3`, se incrementa y muestra `4`.

La variable estática conserva su valor entre llamadas, por lo que no vuelve a inicializarse a `0` en cada ejecución de la función.

### 14.4. Diferencia entre una variable local y una variable estática

| Variable local | Variable estática local |
|---|---|
| Se inicializa cada vez que se ejecuta la asignación dentro de la función. | Su inicialización se realiza una sola vez durante la ejecución de la función. |
| Su valor no se conserva entre llamadas una vez que termina la función. | Conserva su valor entre llamadas a la función. |
| En nuestro ejemplo, siempre muestra `1`. | En nuestro ejemplo, muestra `1`, `2`, `3` y `4`. |

### 14.5. Resumen de lo aprendido

- Las variables locales pertenecen al ámbito de una función.
- La palabra reservada `static` permite que una variable local conserve su valor entre llamadas a la función.
- Una variable estática se inicializa una sola vez y mantiene el valor que va adquiriendo durante las siguientes llamadas.
- Las variables estáticas son útiles para llevar contadores, acumular valores o conservar información entre llamadas a una función durante la ejecución del script.


## 15. Strings (cadenas de texto)

En PHP, un `string` es un tipo de dato que permite almacenar texto, como palabras, frases o caracteres.

Podemos utilizar cadenas de texto para mostrar mensajes, almacenar nombres y combinar contenido HTML con código PHP.

### 15.1. Mostrar texto con HTML y PHP

Observemos el siguiente ejemplo:

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
    <style>
        .resaltar {
            color: #F00;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
    ?>
</body>
</html>
```

En este ejemplo, utilizamos `echo` para mostrar una cadena de texto que contiene etiquetas HTML.

- `<p>` crea un párrafo.
- `class='resaltar'` asigna la clase CSS `resaltar` al párrafo.
- `color: #F00` establece el color rojo del texto.
- `font-weight: bold` muestra el texto en negrita.

El resultado será un párrafo con el texto en rojo y en negrita.

### 15.2. Utilizar comillas dentro de un string

En PHP podemos definir cadenas de texto utilizando comillas simples (`'`) o comillas dobles (`"`).

Cuando utilizamos comillas dobles para delimitar una cadena, debemos tener cuidado si necesitamos incluir otras comillas dobles dentro de ella.

Una solución consiste en utilizar comillas simples para los atributos HTML:

```php
echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
```

En este caso, las comillas dobles delimitan la cadena PHP, mientras que las comillas simples delimitan el valor del atributo `class` en HTML.

### 15.3. Escapar caracteres

Otra solución consiste en utilizar la barra invertida (`\`) para escapar las comillas dobles que aparecen dentro de la cadena.

Por ejemplo:

```php
echo "<p class=\"resaltar\">Esto es otro ejemplo</p>";
```

La barra invertida indica que las comillas dobles forman parte del texto y no deben interpretarse como el final de la cadena PHP.

El navegador recibirá el siguiente HTML:

```html
<p class="resaltar">Esto es otro ejemplo</p>
```

**Importante:** la barra invertida se utiliza dentro de la cadena PHP. En el HTML generado, las comillas aparecerán normalmente, sin la barra invertida.

### 15.4. Comparar cadenas con `strcmp()`

PHP dispone de la función `strcmp()` para comparar dos cadenas de texto.

```php
<?php
    $texto1 = "Hola";
    $texto2 = "Hola";

    echo strcmp($texto1, $texto2);
?>
```

**Resultado:**

```text
0
```

La función devuelve:

- `0` si las cadenas son iguales.
- Un número negativo si la primera cadena es menor que la segunda según la comparación binaria.
- Un número positivo si la primera cadena es mayor que la segunda según la comparación binaria.

Por ejemplo:

```php
<?php
    echo strcmp("Hola", "Hola");
    echo "<br>";

    echo strcmp("Hola", "Mundo");
?>
```

La primera comparación devuelve `0`, porque las cadenas son iguales. La segunda devuelve un valor distinto de cero, porque las cadenas son diferentes.

No debemos depender de un valor positivo o negativo concreto; lo importante es comprobar si el resultado es igual, menor o mayor que cero.

### 15.5. Comparar cadenas sin distinguir mayúsculas y minúsculas con `strcasecmp()`

La función `strcasecmp()` compara dos cadenas sin distinguir entre letras mayúsculas y minúsculas para las letras ASCII.

Por ejemplo:

```php
<?php
    $texto1 = "Hola";
    $texto2 = "HOLA";

    echo strcmp($texto1, $texto2);
    echo "<br>";

    echo strcasecmp($texto1, $texto2);
?>
```

El segundo resultado será `0`, porque `strcasecmp()` considera iguales `"Hola"` y `"HOLA"` en esta comparación.

En cambio, `strcmp()` distingue entre mayúsculas y minúsculas, por lo que la primera comparación devuelve un valor distinto de cero.

### 15.6. Diferencias entre `strcmp()` y `strcasecmp()`

| Función | Comportamiento |
|---|---|
| `strcmp()` | Compara las cadenas distinguiendo mayúsculas y minúsculas. |
| `strcasecmp()` | Compara las cadenas sin distinguir mayúsculas y minúsculas para letras ASCII. |

Estas funciones son útiles cuando necesitamos comparar textos, comprobar nombres o evaluar si dos cadenas coinciden.

### 15.7. Resumen de lo aprendido

- Un `string` es una cadena de texto.
- Podemos delimitar cadenas con comillas simples o dobles.
- Si necesitamos incluir comillas dobles dentro de una cadena delimitada por comillas dobles, podemos escaparlas con `\"`.
- `echo` permite mostrar cadenas de texto y contenido HTML.
- `strcmp()` compara cadenas distinguiendo mayúsculas y minúsculas.
- `strcasecmp()` compara cadenas sin distinguir mayúsculas y minúsculas para letras ASCII.
- En ambas funciones, un resultado igual a `0` indica que las cadenas se consideran iguales según las reglas de comparación de la función.

## 16. Operadores de comparación

Los operadores de comparación permiten comparar dos valores o variables. El resultado de estas comparaciones es un valor booleano: `true` (verdadero) o `false` (falso).

Estos operadores se utilizan habitualmente en estructuras condicionales, como `if` y `else`, para tomar decisiones dentro de un programa.

### 16.1. Tipos de operadores de comparación

En PHP disponemos de los siguientes operadores de comparación:

| SINTAXIS | DEFINICIÓN | RESULTADO |
|---|---|---|
| `$var1 == $var2` | Igual que | Verdadero si ambos valores son iguales, realizando una comparación flexible de tipos. |
| `$var1 === $var2` | Idéntico que | Verdadero si ambos valores son iguales y también tienen el mismo tipo de dato. |
| `$var1 != $var2` | Diferente que | Verdadero si ambos valores son diferentes. |
| `$var1 <> $var2` | Diferente que | Equivalente a `!=`. |
| `$var1 !== $var2` | No idéntico que | Verdadero si los valores son diferentes o los tipos de datos no coinciden. |
| `$var1 < $var2` | Menor que | Verdadero si el primer valor es menor que el segundo. |
| `$var1 > $var2` | Mayor que | Verdadero si el primer valor es mayor que el segundo. |
| `$var1 <= $var2` | Menor o igual que | Verdadero si el primer valor es menor o igual que el segundo. |
| `$var1 >= $var2` | Mayor o igual que | Verdadero si el primer valor es mayor o igual que el segundo. |

**Importante:** en PHP, `==` compara los valores mediante una comparación flexible, mientras que `===` compara tanto los valores como sus tipos de datos.

### 16.2. Diferencia entre `==` y `===`

Vamos a observar qué sucede cuando comparamos dos variables que contienen el mismo valor, pero tienen tipos de datos diferentes.

```php
<?php
    $variable1 = 8;       // Numérica (Integer)
    $variable2 = "8";     // Cadena de texto (String)
    $variable3 = "Hugo";  // Cadena de texto (String)

    if ($variable1 == $variable2) {
        echo "Son iguales";
    } else {
        echo "No son iguales";
    }
?>
```

**Resultado en el navegador:**

```text
Son iguales
```

¿Por qué sucede esto?

Porque el operador `==` realiza una comparación flexible. En este caso, PHP considera que el número `8` y la cadena `"8"` son equivalentes para esta comparación.

Ahora vamos a utilizar el operador `===`:

```php
<?php
    $variable1 = 8;       // Integer
    $variable2 = "8";     // String
    $variable3 = "Hugo";  // String

    if ($variable1 === $variable2) {
        echo "Son iguales";
    } else {
        echo "No son iguales";
    }
?>
```

**Resultado en el navegador:**

```text
No son iguales
```

¿Por qué?

Porque, aunque ambos valores representan el número ocho, sus tipos de datos son diferentes:

- `$variable1` contiene un número entero (`Integer`).
- `$variable2` contiene una cadena de texto (`String`).

Por tanto, el operador `===` devuelve `false`.

**Conclusión:**

- `==` compara los valores sin exigir que sean del mismo tipo.
- `===` compara los valores y exige que sean del mismo tipo.

### 16.3. Utilizar operadores de comparación en un formulario

Ahora vamos a realizar un ejemplo práctico en el que utilizaremos operadores de comparación para comprobar si un usuario puede acceder a una página.

Crearemos un formulario que solicite dos datos:

- Nombre del usuario.
- Edad del usuario.

Para permitir el acceso, estableceremos dos condiciones:

1. El nombre debe ser `Mario`.
2. La edad debe ser mayor o igual a `18`.

Para que ambas condiciones se cumplan simultáneamente, utilizaremos el operador lógico `&&` (AND).

### 16.4. Código completo

Creamos un archivo llamado `operadores.php` con el siguiente contenido:

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>

    <style>
        h1 {
            text-align: center;
        }

        table {
            background-color: #FFCC;
            padding: 5px;
            border: #666 5px solid;
        }

        .no_validado {
            font-size: 18px;
            color: #F00;
            font-weight: bold;
        }

        .validado {
            font-size: 18px;
            color: #0C3;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Usando operadores de comparación</h1>

    <a href="index.php">Volver al Inicio</a>

    <form action="" method="POST" name="datos_usuario" id="datos_usuario">

        <table width="15%" align="CENTER">

            <tr>
                <td>Nombre:</td>
                <td>
                    <label for="nombre_usuario"></label>
                    <input type="text" name="nombre_usuario" id="nombre_usuario">
                </td>
            </tr>

            <tr>
                <td>Edad:</td>
                <td>
                    <label for="edad_usuario"></label>
                    <input type="text" name="edad_usuario" id="edad_usuario">
                </td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>

            <tr>
                <td colspan="2" align="CENTER">
                    <input type="submit" name="enviando" id="enviando" value="Enviar">
                </td>
            </tr>

        </table>

    </form>

    <?php
        if (isset($_POST["enviando"])) {

            $usuario = $_POST["nombre_usuario"];
            $edad = $_POST["edad_usuario"];

            if ($usuario == "Mario" && $edad >= 18) {

                echo "<p class='validado' style='text-align: center;'>Puedes entrar</p>";

            } else {

                echo "<p class='no_validado' style='text-align: center;'>No puedes entrar</p>";

            }
        }
    ?>

</body>
</html>
```

### 16.5. Entender el código PHP

Vamos a explicar las instrucciones más importantes del ejemplo.

**1. Comprobar si se ha enviado el formulario**

```php
if (isset($_POST["enviando"])) {
```

- `$_POST` es una variable superglobal que recoge los datos enviados mediante el método POST.
- `isset()` comprueba si una variable está definida y no es `null`.
- `$_POST["enviando"]` corresponde al botón de envío del formulario.

De esta manera, comprobamos si el formulario ha sido enviado antes de procesar sus datos.

**2. Recoger los datos del formulario**

```php
$usuario = $_POST["nombre_usuario"];
$edad = $_POST["edad_usuario"];
```

Guardamos los valores introducidos por el usuario en dos variables:

- `$usuario` almacena el nombre.
- `$edad` almacena la edad.

**3. Comprobar las condiciones**

```php
if ($usuario == "Mario" && $edad >= 18) {
```

Aquí utilizamos dos operadores:

- `==` comprueba si el nombre es igual a `"Mario"`.
- `>=` comprueba si la edad es mayor o igual a `18`.
- `&&` exige que ambas condiciones sean verdaderas.

Por tanto, solamente se permitirá el acceso cuando el nombre sea Mario y la edad sea igual o superior a 18.

**4. Mostrar el resultado**

```php
echo "<p class='validado'>Puedes entrar</p>";
```

Si ambas condiciones se cumplen, mostramos el mensaje de acceso permitido.

En caso contrario, se ejecuta el bloque `else` y mostramos:

```php
echo "<p class='no_validado'>No puedes entrar</p>";
```

### 16.6. Probar el formulario

Podemos realizar las siguientes pruebas:

| Nombre | Edad | Resultado |
|---|---:|---|
| Mario | 18 | Puedes entrar |
| Mario | 25 | Puedes entrar |
| Pedro | 25 | No puedes entrar |
| Mario | 16 | No puedes entrar |
| Pedro | 16 | No puedes entrar |

### 16.7. Resumen de lo aprendido

- Los operadores de comparación permiten comparar valores.
- El resultado de una comparación es `true` o `false`.
- `==` compara valores mediante una comparación flexible.
- `===` compara valores y tipos de datos.
- `!=` y `<>` permiten comprobar si dos valores son diferentes.
- `!==` comprueba si dos valores son diferentes o si sus tipos no coinciden.
- `<`, `>`, `<=` y `>=` permiten realizar comparaciones numéricas.
- Los operadores de comparación se utilizan frecuentemente dentro de estructuras condicionales como `if`.
- Podemos combinar varias condiciones utilizando operadores lógicos como `&&`.

**Próximo paso:** aprender los operadores lógicos de PHP (`&&`, `||` y `!`) para combinar y modificar condiciones.


## 17. Uso de constantes en PHP

Las constantes son identificadores que almacenan un valor que no puede cambiar durante la ejecución del programa.

En PHP existen dos tipos principales:

- **Constantes definidas por el programador:** son las que creamos nosotros.
- **Constantes predefinidas:** son las que PHP proporciona automáticamente.

### Declaración de una constante

Para declarar una constante podemos utilizar la función `define()`:

```php
define("NOMBRE_DE_CONSTANTE", valor);
```

Por convención, los nombres de las constantes se escriben en **mayúsculas**.

Algunas reglas y características de las constantes:

- El nombre de una constante no lleva el símbolo `$`.
- Si el nombre tiene varias palabras, se recomienda separarlas con guion bajo (`_`). Ejemplo: `MI_AUTOR`.
- Las constantes definidas con `define()` tienen ámbito global por defecto.
- Una constante no puede redefinirse una vez que ha sido declarada.
- Una constante puede almacenar valores escalares (`string`, `int`, `float` y `bool`) y también arrays.

Ejemplo:

```php
<?php

define("MI_AUTOR", "Pedro");
define("EDAD", 30);

echo MI_AUTOR;
echo "<br>";
echo EDAD;

?>
```

**Importante:** En versiones anteriores a PHP 8.0, `define()` permitía utilizar un tercer parámetro para indicar que el nombre de la constante no distinguiera entre mayúsculas y minúsculas.

```php
define("CODIGO_AUTOR", "MA0123", true);
echo codigo_autor;
```

Esta característica está obsoleta desde PHP 7.3 y fue eliminada en PHP 8.0. Por lo tanto, en las versiones actuales debemos respetar exactamente las mayúsculas y minúsculas del nombre de la constante.

### Constantes predefinidas en PHP

PHP proporciona muchas constantes que contienen información sobre la versión, la configuración y el entorno en el que se está ejecutando.

Algunos ejemplos son:

- `PHP_VERSION`: versión completa de PHP.
- `PHP_MAJOR_VERSION`: número de la versión principal de PHP.
- `PHP_LIBDIR`: directorio de las bibliotecas de PHP.
- `PHP_DATADIR`: directorio de datos de PHP.

Ejemplo:

```php
<?php

echo PHP_VERSION;
echo "<br>";
echo PHP_MAJOR_VERSION;

?>
```

### Constantes mágicas

Además de las constantes predefinidas, PHP cuenta con unas constantes especiales llamadas **constantes mágicas**.

Se caracterizan porque su valor depende del lugar donde se utilizan dentro del código.

Algunas de las más utilizadas son:

- `__LINE__`: número de línea actual del archivo.
- `__FILE__`: ruta completa y nombre del archivo actual.
- `__DIR__`: directorio del archivo actual.
- `__CLASS__`: nombre de la clase actual.

Ejemplo:

```php
<?php

echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;

?>
```

Puedes consultar todas las constantes predefinidas y mágicas en la documentación oficial de PHP:

- [Constantes predefinidas](https://www.php.net/manual/es/reserved.constants.php)
- [Constantes mágicas](https://www.php.net/manual/es/language.constants.magic.php)

### Constantes dentro de las clases

En PHP también podemos declarar constantes dentro de una clase utilizando la palabra reservada `const`.

Para acceder a ellas desde fuera de la clase utilizamos el operador de resolución de ámbito `::`.

Ejemplo:

```php
<?php

class Autor {

    const MI_AUTOR = "Pedro";

}

echo Autor::MI_AUTOR;

?>
```

En este ejemplo:

- `const` declara una constante dentro de la clase.
- `MI_AUTOR` es el nombre de la constante.
- `Autor::MI_AUTOR` permite acceder a la constante utilizando el nombre de la clase.

Las constantes de clase son una forma habitual de organizar valores que pertenecen a una clase y que no deben modificarse.


## 18. Operadores matemáticos en PHP

Los operadores matemáticos permiten realizar operaciones aritméticas con variables y valores numéricos.

PHP dispone de los siguientes operadores:

| OPERADOR | NOMBRE | EJEMPLO |
| -------- | ----------------------------- | ----------- |
| `+` | Suma | `$a + $b` |
| `-` | Resta | `$a - $b` |
| `*` | Multiplicación | `$a * $b` |
| `/` | División | `$a / $b` |
| `%` | Módulo (resto de la división) | `$a % $b` |
| `**` | Exponenciación (potencia) | `$a ** $b` |
| `++` | Incremento (aumenta en 1) | `$a++` |
| `--` | Decremento (disminuye en 1) | `$a--` |
| `+=` | Asignación con suma | `$a += $b` |
| `-=` | Asignación con resta | `$a -= $b` |
| `*=` | Asignación con multiplicación | `$a *= $b` |
| `/=` | Asignación con división | `$a /= $b` |
| `%=` | Asignación con módulo | `$a %= $b` |
| `**=` | Asignación con exponenciación | `$a **= $b` |

### Ejemplo práctico en PHP

```php
<?php

$a = 10;
$b = 3;

echo $a + $b;  // 13
echo "<br>";

echo $a - $b;  // 7
echo "<br>";

echo $a * $b;  // 30
echo "<br>";

echo $a / $b;  // 3.333...
echo "<br>";

echo $a % $b;  // 1
echo "<br>";

echo $a ** $b; // 1000
echo "<br>";

$a += 5;       // Equivale a $a = $a + 5
echo $a;       // 15

?>
```

### Importante: operadores de incremento y decremento

Los operadores de incremento (`++`) y decremento (`--`) permiten aumentar o disminuir una variable en una unidad.

Existen dos formas de utilizarlos:

| OPERADOR | NOMBRE | FUNCIONAMIENTO |
| -------- | -------------- | --------------------------------------------- |
| `++$a` | Preincremento | Incrementa primero y luego devuelve el valor. |
| `$a++` | Postincremento | Devuelve primero el valor y luego incrementa. |
| `--$a` | Predecremento | Decrementa primero y luego devuelve el valor. |
| `$a--` | Postdecremento | Devuelve primero el valor y luego decrementa. |

Ejemplo:

```php
<?php

$a = 5;

echo ++$a; // Muestra 6
echo "<br>";

echo $a++; // Muestra 6, después la variable vale 7
echo "<br>";

echo --$a; // Muestra 6
echo "<br>";

echo $a--; // Muestra 6, después la variable vale 5

?>
```

La diferencia entre pre y post incremento se aprecia cuando el operador se utiliza dentro de una expresión. Si se utiliza como una instrucción independiente, ambos terminan modificando la variable de la misma manera.

### Ejemplo práctico: calculadora en PHP

Vamos a crear una pequeña calculadora que permita ingresar dos números y seleccionar una operación matemática.

El formulario enviará los datos mediante el método `POST` y PHP se encargará de realizar el cálculo y mostrar el resultado.

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos</title>
</head>
<body>

    <h1>Operadores Matemáticos</h1>
    <hr>

    <form action="" method="POST" name="form1">

        <p>
            <label for="num1">Primer número:</label>
            <input type="number" step="any" name="num1" id="num1" required>

            <label for="num2">Segundo número:</label>
            <input type="number" step="any" name="num2" id="num2" required>

            <label for="operacion">Operación:</label>

            <select name="operacion" id="operacion" required>
                <option value="">Seleccione</option>
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicacion">Multiplicación</option>
                <option value="Division">División</option>
                <option value="Modulo">Módulo</option>
                <option value="Potencia">Potencia</option>
            </select>
        </p>

        <p>
            <input type="submit" value="Calcular" name="button">
        </p>

    </form>

    <?php

    if (isset($_POST["button"])) {

        $numero1 = $_POST["num1"];
        $numero2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        // Comprobamos que los valores ingresados sean numéricos.
        if (!is_numeric($numero1) || !is_numeric($numero2)) {

            echo "Debe ingresar dos números válidos.";

        } elseif ($operacion == "Suma") {

            echo "El resultado es: " . ($numero1 + $numero2);

        } elseif ($operacion == "Resta") {

            echo "El resultado es: " . ($numero1 - $numero2);

        } elseif ($operacion == "Multiplicacion") {

            echo "El resultado es: " . ($numero1 * $numero2);

        } elseif ($operacion == "Division") {

            if ($numero2 == 0) {
                echo "No se puede dividir por cero.";
            } else {
                echo "El resultado es: " . ($numero1 / $numero2);
            }

        } elseif ($operacion == "Modulo") {

            if ((float)$numero2 == 0) {
                echo "No se puede calcular el módulo con divisor cero.";
            } else {
                echo "El resultado es: " . ((int)$numero1 % (int)$numero2);
            }

        } elseif ($operacion == "Potencia") {

            echo "El resultado es: " . ($numero1 ** $numero2);

        } else {

            echo "Debe seleccionar una operación válida.";

        }

    }

    ?>

</body>
</html>
```

**Algunos detalles importantes del ejemplo:**

- `isset($_POST["button"])` comprueba si se ha enviado el formulario.
- `$_POST` permite recuperar los valores enviados por el formulario.
- `is_numeric()` comprueba si un valor es numérico.
- `elseif` permite evaluar otra condición cuando la anterior no se cumple.
- `==` compara el valor de una variable con otro valor.
- `.` permite concatenar (unir) cadenas de texto con resultados.
- La división y el módulo necesitan una comprobación especial para evitar utilizar cero como divisor.

**Nota sobre el operador módulo (`%`):** trabaja con números enteros. Por eso, en el ejemplo se convierten los valores mediante `(int)` antes de realizar la operación.


### Ejemplo práctico: calculadora en PHP v2

En esta segunda versión vamos a separar el formulario HTML de la lógica PHP.

Para ello, realizaremos los siguientes pasos:

1. Copia el archivo anterior y renómbralo como `index.html`.
2. Crea otro archivo llamado `calculadora.php`.
3. Ambos archivos deben estar dentro de la misma carpeta del proyecto.

De esta manera tendremos dos archivos:

- `index.html`: contendrá el formulario para ingresar los números y seleccionar la operación.
- `calculadora.php`: contendrá la lógica PHP encargada de realizar los cálculos y mostrar los resultados.

#### Archivo: index.html

En este archivo colocaremos el siguiente código:

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos II</title>
</head>
<body>

    <h1>Operadores Matemáticos II</h1>
    <hr>

    <form action="calculadora.php" method="POST" name="form1">

        <p>
            <label for="num1">Primer número:</label>
            <input type="number" step="any" name="num1" id="num1" required>

            <label for="num2">Segundo número:</label>
            <input type="number" step="any" name="num2" id="num2" required>

            <label for="operacion">Operación:</label>

            <select name="operacion" id="operacion" required>
                <option value="">Seleccione</option>
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicacion">Multiplicación</option>
                <option value="Division">División</option>
                <option value="Modulo">Módulo</option>
                <option value="Potencia">Potencia</option>
            </select>
        </p>

        <p>
            <input type="submit" value="Enviar" name="button" id="button">
        </p>

    </form>

</body>
</html>
```

Observa especialmente la siguiente línea:

```html
<form action="calculadora.php" method="POST" name="form1">
```

El atributo `action` indica a qué archivo se enviarán los datos del formulario. En este caso, los datos serán enviados a `calculadora.php`.

El atributo `method="POST"` indica el método utilizado para enviar la información.

#### Archivo: calculadora.php

En este archivo colocaremos toda la lógica de nuestra calculadora:

```php
<style>
    .resultado {
        color: #F00;
        font-weight: bold;
        font-size: 32px;
    }
</style>

<?php

if (isset($_POST["button"])) {

    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    calcular($operacion, $numero1, $numero2);

}

function calcular($calculo, $numero1, $numero2) {

    // Comprobamos que los valores sean numéricos.
    if (!is_numeric($numero1) || !is_numeric($numero2)) {
        echo "Debe ingresar dos números válidos.";
        return;
    }

    if (!strcmp("Suma", $calculo)) {

        echo "<p class='resultado'>El resultado es: " . ($numero1 + $numero2) . "</p>";

    } elseif (!strcmp("Resta", $calculo)) {

        echo "<p class='resultado'>El resultado es: " . ($numero1 - $numero2) . "</p>";

    } elseif (!strcmp("Multiplicacion", $calculo)) {

        echo "<p class='resultado'>El resultado es: " . ($numero1 * $numero2) . "</p>";

    } elseif (!strcmp("Division", $calculo)) {

        if ($numero2 == 0) {
            echo "No se puede dividir por cero.";
        } else {
            echo "<p class='resultado'>El resultado es: " . ($numero1 / $numero2) . "</p>";
        }

    } elseif (!strcmp("Modulo", $calculo)) {

        if ((int)$numero2 == 0) {
            echo "No se puede calcular el módulo con divisor cero.";
        } else {
            echo "<p class='resultado'>El resultado es: " . ((int)$numero1 % (int)$numero2) . "</p>";
        }

    } elseif (!strcmp("Potencia", $calculo)) {

        echo "<p class='resultado'>El resultado es: " . ($numero1 ** $numero2) . "</p>";

    } else {

        echo "Debe seleccionar una operación válida.";

    }

}

?>
```

### ¿Qué se hizo?

En esta versión separamos el formulario HTML de la lógica de la aplicación.

Anteriormente, tanto el formulario como el código PHP estaban dentro del mismo archivo. Ahora cada archivo tiene una función específica.

**1. En `index.html`:**

Tenemos el formulario donde el usuario ingresa los números y selecciona la operación matemática.

Cuando presionamos el botón Enviar, los datos se envían al archivo `calculadora.php`.

**2. En `calculadora.php`:**

Recibimos los datos mediante `$_POST`, almacenamos los valores en variables y llamamos a la función `calcular()`.

```php
calcular($operacion, $numero1, $numero2);
```

Esta función recibe tres parámetros:

- `$calculo`: la operación matemática seleccionada.
- `$numero1`: el primer número ingresado.
- `$numero2`: el segundo número ingresado.

Después, mediante las condiciones `if` y `elseif`, determinamos qué operación debemos realizar y mostramos el resultado.

**3. Utilizamos CSS para mostrar el resultado:**

La clase `.resultado` permite darle formato al resultado de la operación.

```css
.resultado {
    color: #F00;
    font-weight: bold;
    font-size: 32px;
}
```

### Concepto importante

Separar el formulario de la lógica de programación permite organizar mejor nuestro código y facilita su mantenimiento.

Esta separación es una práctica habitual en el desarrollo de aplicaciones web: HTML se encarga de la estructura y PHP procesa los datos y ejecuta las operaciones.


### Ejemplo práctico: calculadora en PHP v3

En esta tercera versión vamos a mejorar nuestra calculadora incorporando los operadores de incremento y decremento.

Además, vamos a utilizar la instrucción `include()` para incorporar el archivo `calculadora.php` dentro de `index.php`.

De esta manera, tendremos dos archivos:

- `index.php`: contiene el formulario HTML y recibe los datos enviados por el usuario.
- `calculadora.php`: contiene la función `calcular()` y toda la lógica de las operaciones matemáticas.

#### Archivo: index.php

En este archivo tendremos el formulario y utilizaremos `include()` para incorporar el archivo que contiene nuestra función.

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos III</title>
</head>
<body>

    <h1>Operadores Matemáticos III</h1>
    <hr>

    <form action="" method="POST" name="form1">

        <p>
            <label for="num1">Primer número:</label>
            <input type="number" step="any" name="num1" id="num1" required>

            <label for="num2">Segundo número:</label>
            <input type="number" step="any" name="num2" id="num2" required>

            <label for="operacion">Operación:</label>

            <select name="operacion" id="operacion" required>
                <option value="">Seleccione</option>
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicacion">Multiplicación</option>
                <option value="Division">División</option>
                <option value="Modulo">Módulo</option>
                <option value="Potencia">Potencia</option>
                <option value="Preincremento">Preincremento</option>
                <option value="Postincremento">Postincremento</option>
                <option value="Predecremento">Predecremento</option>
                <option value="Postdecremento">Postdecremento</option>
            </select>
        </p>

        <p>
            <input type="submit" value="Enviar" name="button" id="button">
        </p>

    </form>

    <?php

        include("calculadora.php");

        if (isset($_POST["button"])) {

            $numero1 = $_POST["num1"];
            $numero2 = $_POST["num2"];
            $operacion = $_POST["operacion"];

            calcular($operacion, $numero1, $numero2);

        }

    ?>

</body>
</html>
```

**Observación:** mediante la instrucción `include("calculadora.php")` incorporamos el contenido del archivo `calculadora.php` en nuestro archivo principal.

Esto permite utilizar la función `calcular()` que está declarada en el archivo incluido.

#### Archivo: calculadora.php

En este archivo declararemos la función `calcular()`, que se encargará de ejecutar las operaciones matemáticas.

```php
<style>
    .resultado {
        color: #F00;
        font-weight: bold;
        font-size: 32px;
    }
</style>

<?php

function calcular($calculo, $numero1, $numero2) {

    if (!is_numeric($numero1) || !is_numeric($numero2)) {
        echo "Debe ingresar dos números válidos.";
        return;
    }

    if (!strcmp("Suma", $calculo)) {

        echo "<p class='resultado'>El resultado es: " . ($numero1 + $numero2) . "</p>";

    } elseif (!strcmp("Resta", $calculo)) {

        echo "<p class='resultado'>El resultado es: " . ($numero1 - $numero2) . "</p>";

    } elseif (!strcmp("Multiplicacion", $calculo)) {

        echo "<p class='resultado'>El resultado es: " . ($numero1 * $numero2) . "</p>";

    } elseif (!strcmp("Division", $calculo)) {

        if ($numero2 == 0) {
            echo "No se puede dividir por cero.";
        } else {
            echo "<p class='resultado'>El resultado es: " . ($numero1 / $numero2) . "</p>";
        }

    } elseif (!strcmp("Modulo", $calculo)) {

        if ((int)$numero2 == 0) {
            echo "No se puede calcular el módulo con divisor cero.";
        } else {
            echo "<p class='resultado'>El resultado es: " . ((int)$numero1 % (int)$numero2) . "</p>";
        }

    } elseif (!strcmp("Potencia", $calculo)) {

        echo "<p class='resultado'>El resultado es: " . ($numero1 ** $numero2) . "</p>";

    } elseif (!strcmp("Preincremento", $calculo)) {

        $resultado = ++$numero1;

        echo "<p class='resultado'>Resultado de preincremento: " . $resultado . "</p>";
        echo "<p>Valor final de la variable: " . $numero1 . "</p>";

    } elseif (!strcmp("Postincremento", $calculo)) {

        $resultado = $numero1++;

        echo "<p class='resultado'>Resultado de postincremento: " . $resultado . "</p>";
        echo "<p>Valor final de la variable: " . $numero1 . "</p>";

    } elseif (!strcmp("Predecremento", $calculo)) {

        $resultado = --$numero1;

        echo "<p class='resultado'>Resultado de predecremento: " . $resultado . "</p>";
        echo "<p>Valor final de la variable: " . $numero1 . "</p>";

    } elseif (!strcmp("Postdecremento", $calculo)) {

        $resultado = $numero1--;

        echo "<p class='resultado'>Resultado de postdecremento: " . $resultado . "</p>";
        echo "<p>Valor final de la variable: " . $numero1 . "</p>";

    } else {

        echo "Debe seleccionar una operación válida.";

    }

}

?>
```

### ¿Qué se hizo?

**1. Incorporamos el archivo calculadora.php mediante include().**

En `index.php` agregamos la siguiente instrucción:

```php
include("calculadora.php");
```

Esto permite incorporar el archivo externo y utilizar las funciones que contiene.

**2. Agregamos cuatro operaciones nuevas al formulario:**

- Preincremento.
- Postincremento.
- Predecremento.
- Postdecremento.

**3. Diferencia entre preincremento y postincremento**

Esta es una diferencia importante que debemos comprender.

Supongamos que tenemos una variable con el valor `5`.

**Preincremento (`++$a`)**

Primero incrementa la variable y después devuelve el nuevo valor.

```php
$a = 5;

$resultado = ++$a;

echo $resultado; // 6
echo $a;         // 6
```

**Postincremento (`$a++`)**

Primero devuelve el valor actual de la variable y después la incrementa.

```php
$a = 5;

$resultado = $a++;

echo $resultado; // 5
echo $a;         // 6
```

La misma diferencia se aplica a los operadores de decremento.

**Predecremento (`--$a`)**

Primero disminuye la variable y después devuelve el nuevo valor.

```php
$a = 5;

$resultado = --$a;

echo $resultado; // 4
echo $a;         // 4
```

**Postdecremento (`$a--`)**

Primero devuelve el valor actual de la variable y después la disminuye.

```php
$a = 5;

$resultado = $a--;

echo $resultado; // 5
echo $a;         // 4
```

### Tabla comparativa

| OPERADOR | VALOR INICIAL | RESULTADO | VALOR FINAL |
| -------- | ------------- | --------- | ----------- |
| `++$a` | 5 | 6 | 6 |
| `$a++` | 5 | 5 | 6 |
| `--$a` | 5 | 4 | 4 |
| `$a--` | 5 | 5 | 4 |

**Importante:** en nuestra calculadora, los operadores de incremento y decremento trabajan sobre `$numero1`. El segundo número ingresado no interviene en estas operaciones.

Además, cada vez que enviamos el formulario se realiza una nueva petición al servidor. Por lo tanto, el incremento o decremento no se conserva para el siguiente envío: se vuelve a utilizar el valor que el usuario ingresa en el formulario.

Con esto hemos aprendido a incorporar archivos externos mediante `include()`, reutilizar funciones y trabajar con los operadores de preincremento, postincremento, predecremento y postdecremento.
