
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


## 19. Funciones matemáticas y casting

PHP dispone de una gran cantidad de funciones matemáticas que permiten realizar cálculos sin necesidad de programar las operaciones desde cero.

Puedes consultar todas las funciones matemáticas disponibles en la documentación oficial:

[Funciones matemáticas de PHP](https://www.php.net/manual/es/ref.math.php)

### Algunas funciones matemáticas

A continuación, veremos algunas de las funciones más utilizadas:

| FUNCIÓN | DESCRIPCIÓN | EJEMPLO |
| ------- | ----------- | ------- |
| `pow()` | Calcula una potencia. | `pow(6, 3)` |
| `round()` | Redondea un número. | `round(5.25)` |
| `max()` | Devuelve el valor máximo de una lista. | `max(10, 20, 30)` |
| `min()` | Devuelve el valor mínimo de una lista. | `min(10, 20, 30)` |
| `pi()` | Devuelve el valor de PI. | `pi()` |
| `sqrt()` | Calcula la raíz cuadrada. | `sqrt(25)` |
| `rand()` | Genera un número entero aleatorio. | `rand(10, 50)` |

### Ejemplo práctico: funciones matemáticas

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Matemáticas</title>
</head>
<body>

    <h1>Funciones Matemáticas</h1>
    <hr>

    <?php

        $num1 = rand();
        $num2 = rand(10, 50);
        $num3 = pow(6, 3);
        $num4 = 5.25;

        echo "<p>El número aleatorio es: " . $num1 . "</p>";

        echo "<p>El número aleatorio entre 10 y 50: " . $num2 . "</p>";

        echo "<p>6 elevado a 3 es: " . $num3 . "</p>";

        echo "<p>El número " . $num4 . ", redondeado es: " . round($num4) . "</p>";

        echo "<p>El número " . $num4 . ", redondeado a 1 decimal: " . round($num4, 1) . "</p>";

        echo "<p>El número máximo entre 10, 20 y 30 es: " . max(10, 20, 30) . "</p>";

        echo "<p>El número mínimo entre 10, 20 y 30 es: " . min(10, 20, 30) . "</p>";

        echo "<p>El valor de PI es: " . pi() . "</p>";

        echo "<p>La raíz cuadrada de 25 es: " . sqrt(25) . "</p>";

    ?>

</body>
</html>
```

### ¿Qué es el casting?

El *casting* es el proceso mediante el cual convertimos un valor de un tipo de dato a otro.

En PHP existen dos formas principales de conversión de tipos:

- Casting implícito.
- Casting explícito.

#### 1. Casting implícito

PHP puede determinar automáticamente el tipo de dato de una variable según el valor que se le asigna.

Por ejemplo:

```php
<?php

$valor = 5.25;  // PHP interpreta el valor como float.

$valor = 5;     // PHP interpreta el valor como integer.

$valor = "5";   // PHP interpreta el valor como string.

?>
```

En estos ejemplos no necesitamos indicar el tipo de dato, porque PHP lo determina automáticamente.

Podemos comprobar el tipo de una variable utilizando la función `gettype()`:

```php
<?php

$valor = 5.25;
echo gettype($valor); // double

echo "<br>";

$valor = 5;
echo gettype($valor); // integer

echo "<br>";

$valor = "5";
echo gettype($valor); // string

?>
```

#### 2. Casting explícito

También podemos indicar manualmente el tipo de dato al que queremos convertir una variable.

Para ello utilizamos los operadores de conversión o *casting*.

Algunos de los más utilizados son:

| CASTING | TIPO DE DATO |
| ------- | ------------ |
| `(int)` o `(integer)` | Número entero |
| `(float)` o `(double)` | Número decimal |
| `(string)` | Cadena de texto |
| `(bool)` o `(boolean)` | Booleano |
| `(array)` | Array |
| `(object)` | Objeto |

Ejemplo:

```php
<?php

$valor = "5";       // Tipo string.

$numero = (int) $valor; // Convertimos string a integer.

echo $numero;

echo "<br>";

echo gettype($numero); // integer

?>
```

En este caso:

1. La variable `$valor` almacena el texto `"5"`.
2. Mediante `(int)` convertimos ese valor a un número entero.
3. El resultado se almacena en la variable `$numero`.

También podemos realizar otras conversiones:

```php
<?php

$numero = 10;

$decimal = (float) $numero;
$texto = (string) $numero;
$booleano = (bool) $numero;

echo gettype($decimal);   // double
echo "<br>";

echo gettype($texto);     // string
echo "<br>";

echo gettype($booleano);  // boolean

?>
```

**Importante:** el casting no siempre conserva el valor original. Por ejemplo, al convertir un número decimal a entero, se descarta la parte decimal:

```php
<?php

$numero = 5.85;

$entero = (int) $numero;

echo $entero; // 5

?>
```

La conversión a entero no redondea el número; simplemente elimina la parte decimal.

### Resumen

- Las funciones matemáticas permiten realizar cálculos de manera sencilla.
- `pow()` calcula potencias.
- `round()` redondea números.
- `max()` y `min()` permiten obtener el valor máximo y mínimo.
- `pi()` devuelve el valor de PI.
- `sqrt()` calcula raíces cuadradas.
- `rand()` genera números enteros aleatorios.
- El casting implícito permite que PHP determine automáticamente el tipo de dato.
- El casting explícito permite convertir manualmente una variable utilizando expresiones como `(int)`, `(float)` o `(string)`.


## 20.1 Estructuras Condicionales I

En este apartado veremos el uso de las estructuras condicionales `if`, los operadores lógicos y la prioridad de los operadores en PHP.

Las estructuras condicionales permiten ejecutar diferentes bloques de código dependiendo de si una condición se cumple o no.

Antes de trabajar con `if`, es importante conocer los operadores lógicos, ya que nos permiten combinar varias condiciones.

### Operadores lógicos

Los operadores lógicos permiten evaluar una o varias condiciones y obtener como resultado un valor booleano (`true` o `false`).

| OPERADOR | NOMBRE | FUNCIÓN | EJEMPLO |
|---|---|---|---|
| `&&` | Y lógico (AND) | Verdadero si ambas condiciones son verdaderas. | `$a > 5 && $b < 10` |
| `AND` | Y lógico | Igual que `&&`, pero tiene diferente prioridad. | `$a > 5 AND $b < 10` |
| `\|\|` | O lógico (OR) | Verdadero si al menos una condición es verdadera. | `$a > 5 \|\| $b < 10` |
| `OR` | O lógico | Igual que `\|\|`, pero tiene diferente prioridad. | `$a > 5 OR $b < 10` |
| `XOR` | O exclusivo | Verdadero si solamente una condición es verdadera. | `$a > 5 XOR $b < 10` |
| `!` | Negación (NOT) | Invierte el valor lógico: verdadero pasa a falso y viceversa. | `!($a > 5)` |

Ejemplo:

```php
<?php

$a = 10;
$b = 3;

$resultado1 = ($a > 5 && $b < 10);
$resultado2 = ($a > 5 || $b > 10);
$resultado3 = ($a > 5 XOR $b > 10);
$resultado4 = !($a > 5);

var_dump($resultado1); // true
var_dump($resultado2); // true
var_dump($resultado3); // false
var_dump($resultado4); // false

?>
```

En este ejemplo:

- `&&` devuelve `true` porque ambas condiciones son verdaderas.
- `||` devuelve `true` porque al menos una condición es verdadera.
- `XOR` devuelve `false` porque ambas condiciones son verdaderas. Para que sea verdadero, solamente una debe cumplirse.
- `!` invierte el resultado de la condición.

### Prioridad de operadores

Cuando PHP encuentra una expresión con varios operadores, debe determinar cuál de ellos se ejecuta primero.

Por ejemplo:

```php
$resultado = 2 + 3 * 6;
```

El resultado es `20`, porque el operador de multiplicación (`*`) tiene prioridad sobre el operador de suma (`+`).

Primero se realiza la multiplicación:

```text
3 * 6 = 18
```

Después se realiza la suma:

```text
2 + 18 = 20
```

Sin embargo, podemos modificar el orden de evaluación utilizando paréntesis:

```php
$resultado = (2 + 3) * 6;
```

En este caso, primero se realiza la suma:

```text
2 + 3 = 5
```

Después se realiza la multiplicación:

```text
5 * 6 = 30
```

Por lo tanto, los paréntesis permiten establecer qué operación queremos realizar primero.

### Diferencia de prioridad entre AND y &&

En PHP existe una diferencia importante entre los operadores `AND` y `&&`.

Aunque ambos realizan la operación lógica Y, **no tienen la misma prioridad**.

Veamos el siguiente ejemplo:

```php
<?php

$var1 = true;
$var2 = false;

$resultado1 = $var1 && $var2;
$resultado2 = $var1 AND $var2;

var_dump($resultado1);
var_dump($resultado2);

?>
```

A primera vista podríamos pensar que ambas variables deberían almacenar `false`, porque:

```text
true AND false = false
```

Sin embargo, el resultado es diferente:

- `$resultado1` almacena `false`.
- `$resultado2` almacena `true`.

¿Por qué sucede esto?

La explicación está en la prioridad de los operadores.

En PHP, el operador de asignación (`=`) tiene mayor prioridad que `AND`, pero menor prioridad que `&&`.

Por lo tanto, esta expresión:

```php
$resultado1 = $var1 && $var2;
```

Se interpreta como:

```php
$resultado1 = ($var1 && $var2);
```

En cambio, esta otra expresión:

```php
$resultado2 = $var1 AND $var2;
```

Se interpreta como:

```php
($resultado2 = $var1) AND $var2;
```

Primero se asigna `true` a `$resultado2`. Después se evalúa la operación lógica `AND`, cuyo resultado no se almacena en `$resultado2`.

**Conclusión:** cuando utilizamos `AND` u `OR` en expresiones de asignación, debemos tener especial cuidado con la prioridad de los operadores. Para evitar confusiones, podemos utilizar paréntesis.

La documentación oficial de PHP explica estos operadores y su prioridad:

- [Operadores lógicos](https://www.php.net/manual/es/language.operators.logical.php)
- [Precedencia de operadores](https://www.php.net/manual/es/language.operators.precedence.php)

### Ejemplo práctico: prioridad de operadores

Vamos a crear un archivo llamado `index.php` para comprobar la diferencia entre `AND` y `&&`.

**Archivo: index.php**

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prioridad de Operadores</title>
</head>
<body>

    <h1>Prioridad de Operadores</h1>
    <hr>

    <a href="condicionales.php">Ejemplo de condicionales</a>

    <div></div>
    <br>

    <?php

        $var1 = true;
        $var2 = false;

        $resultado = $var1 AND $var2;

        if ($resultado == true) {
            echo "Correcto";
        } else {
            echo "Incorrecto";
        }

    ?>

</body>
</html>
```

¿Qué sucede en este ejemplo?

Aunque `$var1` es `true` y `$var2` es `false`, la variable `$resultado` almacena `true`.

Esto sucede porque la asignación tiene mayor prioridad que el operador `AND`.

Si cambiamos la expresión por:

```php
$resultado = $var1 && $var2;
```

El resultado será `false`.

### Estructuras condicionales: IF

La estructura `if` permite ejecutar un bloque de instrucciones solamente cuando una condición es verdadera.

Su sintaxis es:

```php
if (condicion) {
    // Instrucciones si la condición es verdadera.
}
```

También podemos utilizar `else` para ejecutar otro bloque cuando la condición sea falsa:

```php
if (condicion) {
    // Instrucciones si la condición es verdadera.
} else {
    // Instrucciones si la condición es falsa.
}
```

Cuando necesitamos evaluar varias condiciones podemos utilizar `elseif`:

```php
if (condicion1) {
    // Instrucciones si la primera condición es verdadera.
} elseif (condicion2) {
    // Instrucciones si la segunda condición es verdadera.
} else {
    // Instrucciones si ninguna condición se cumple.
}
```

PHP evalúa las condiciones en orden. Cuando encuentra una condición verdadera, ejecuta su bloque y no continúa evaluando las siguientes alternativas.

### Ejemplo práctico: validación mediante condicionales

Vamos a crear un pequeño formulario para solicitar el nombre y la edad de un usuario.

Dependiendo de la edad ingresada, PHP mostrará un mensaje diferente.

Para este ejemplo utilizaremos tres archivos:

- `index.php`: contiene el ejemplo de prioridad de operadores.
- `condicionales.php`: contiene el formulario.
- `validacion_condicionales.php`: recibe los datos y ejecuta las condiciones.

**Archivo: condicionales.php**

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Condicionales</title>

    <style>
        h1 {
            text-align: center;
        }

        table {
            background-color: #FFC;
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

    <h1>Usando Condicionales</h1>
    <hr>

    <a href="./index.php">Volver</a>

    <form action="validacion_condicionales.php" method="POST" name="datos_usuario" id="datos_usuario">

        <table width="15%" align="center">

            <tr>
                <td>Nombre:</td>
                <td>
                    <input type="text" name="nombre_usuario" id="nombre_usuario" required>
                </td>
            </tr>

            <tr>
                <td>Edad:</td>
                <td>
                    <input type="number" name="edad_usuario" id="edad_usuario" min="0" required>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Enviar" name="enviando" id="enviando">
                </td>
            </tr>

        </table>

    </form>

</body>
</html>
```

**Archivo: validacion_condicionales.php**

Este archivo recibe los datos del formulario y utiliza una estructura `if`, `elseif` y `else` para determinar qué mensaje mostrar.

```php
<?php
    if (isset($_POST["enviando"])) {
        $edad = $_POST["edad_usuario"];

        if ($edad <= 18) {
            echo  "Eres menor de edad";
        } elseif ($edad <= 40) {
            echo "Eres joven";
        } elseif ($edad <= 65) {
            echo "Eres maduro";
        } else {
            echo "Cuídate";
        }
    }
?>
```

### ¿Qué se hizo?

**1. Creamos un formulario HTML**

En `condicionales.php` solicitamos dos datos:

- Nombre del usuario.
- Edad del usuario.

El formulario utiliza el método `POST` para enviar la información al archivo `validacion_condicionales.php`.

**2. Recuperamos los datos mediante PHP**

Utilizamos `$_POST` para obtener los valores enviados:

```php
$edad = $_POST["edad_usuario"];
```

**3. Evaluamos las condiciones**

Utilizamos `if`, `elseif` y `else` para determinar qué mensaje corresponde según la edad:

- Si la edad es menor o igual a 18, mostramos "eres menor de edad".
- Si es mayor de 18 y menor o igual a 40, mostramos "eres joven".
- Si es mayor de 40 y menor o igual a 65, mostramos "eres maduro".
- Si es mayor de 65, mostramos "cuídate".

### Resumen

En este apartado aprendimos:

- A utilizar operadores lógicos: `&&`, `AND`, `||`, `OR`, `XOR` y `!`.
- A combinar varias condiciones.
- A comprender la prioridad de los operadores.
- A identificar la diferencia de prioridad entre `AND` y `&&`.
- A utilizar paréntesis para controlar el orden de evaluación.
- A trabajar con las estructuras condicionales `if`, `elseif` y `else`.
- A validar datos recibidos desde un formulario mediante `$_POST`.


## 20.2 Estructuras Condicionales II

### Operador ternario

El operador ternario permite evaluar una condición y devolver un valor dependiendo de si dicha condición es verdadera o falsa.

Se utiliza principalmente como una forma abreviada de escribir una estructura condicional `if / else`.

Su sintaxis es:

```php
condicion ? valor_verdadero : valor_falso;
```

Está compuesto por tres partes:

1. **Condición:** expresión que PHP debe evaluar.
2. **Valor verdadero:** resultado que se obtiene si la condición se cumple.
3. **Valor falso:** resultado que se obtiene si la condición no se cumple.

### Ejemplo sencillo

```php
<?php

$edad = 20;
$resultado = $edad >= 18 ? "Eres mayor de edad" : "Eres menor de edad";
echo $resultado;

?>
```

En este ejemplo:

- Si `$edad` es mayor o igual a 18, se almacena el mensaje "Eres mayor de edad".
- Si `$edad` es menor que 18, se almacena el mensaje "Eres menor de edad".

El operador ternario evalúa la condición y selecciona uno de los dos valores.

### Comparación con IF / ELSE

El mismo ejemplo anterior podría escribirse utilizando una estructura condicional tradicional:

```php
<?php

$edad = 20;

if ($edad >= 18) {
    $resultado = "Eres mayor de edad";
} else {
    $resultado = "Eres menor de edad";
}

echo $resultado;

?>
```

Ambos ejemplos producen el mismo resultado.

La diferencia es que el operador ternario permite escribir esta evaluación de una manera más compacta.

### Ejemplo práctico: validación de edad mediante operador ternario

Vamos a crear un formulario que solicite la edad del usuario y determine si puede acceder o no a una página.

Para este ejemplo utilizaremos dos archivos:

- `index.html`: contiene el formulario.
- `validacion_condicionales.php`: recibe la edad y realiza la validación mediante el operador ternario.

**Archivo 1: index.html**

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Condicionales</title>

    <style>
        h1 {
            text-align: center;
        }

        table {
            background-color: #FFC;
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

    <h1>Usando Condicionales</h1>
    <hr>

    <form action="validacion_condicionales.php" method="POST" name="datos_usuario" id="datos_usuario">

        <table width="15%" align="center">

            <tr>
                <td>Nombre:</td>
                <td>
                    <input type="text" name="nombre_usuario" id="nombre_usuario" required>
                </td>
            </tr>

            <tr>
                <td>Edad:</td>
                <td>
                    <input type="number" name="edad_usuario" id="edad_usuario" min="0" required>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Enviar" name="enviando" id="enviando">
                </td>
            </tr>

        </table>

    </form>

</body>
</html>
```

**Archivo 2: validacion_condicionales.php**

```php
<?php

if (isset($_POST["enviando"])) {
    $edad = $_POST["edad_usuario"];

    // Operador ternario
    $resultado = $edad < 18
        ? "No puedes acceder. Eres menor de edad."
        : "Puedes acceder.";

    echo "<p>" . $resultado . "</p>";
}

?>
```

### ¿Qué se hizo?

En este ejemplo utilizamos el operador ternario para determinar si el usuario puede acceder dependiendo de su edad.

La instrucción principal es:

```php
$resultado = $edad < 18
    ? "No puedes acceder. Eres menor de edad."
    : "Puedes acceder.";
```

Su funcionamiento es el siguiente:

- PHP comprueba si `$edad` es menor que 18.
- Si la condición es verdadera, asigna a `$resultado` el mensaje "No puedes acceder. Eres menor de edad".
- Si la condición es falsa, asigna a `$resultado` el mensaje "Puedes acceder".

Finalmente, mostramos el resultado utilizando `echo`.

### Resumen

- El operador ternario permite simplificar una estructura `if / else`.
- Evalúa una condición y devuelve uno de dos posibles resultados.
- Su sintaxis es `condicion ? valor_verdadero : valor_falso`.
- Es especialmente útil cuando necesitamos realizar evaluaciones sencillas.
- Para condiciones más complejas o con varias instrucciones, es preferible utilizar `if`, `elseif` y `else`.

**Importante:** el operador ternario no reemplaza completamente a las estructuras condicionales. Es una alternativa abreviada para situaciones en las que necesitamos elegir entre dos expresiones.


## 20.3 Estructuras Condicionales III

### Uso de Switch Case

La estructura `switch` sirve para evaluar una expresión y ejecutar un bloque de código dependiendo del valor que tenga. Es especialmente útil cuando necesitamos comparar una misma variable con varios valores posibles.

A diferencia de `if` y `elseif`, que permiten evaluar condiciones más complejas, `switch` compara una expresión con distintos valores mediante `case`.

**Sintaxis:**

```php
switch ($variable) {
    case valor1:
        // Código que se ejecuta si coincide con valor1
        break;

    case valor2:
        // Código que se ejecuta si coincide con valor2
        break;

    default:
        // Código que se ejecuta si no coincide con ningún caso
}
```

- `switch`: indica la expresión que queremos evaluar.
- `case`: establece un valor que se compara con la expresión.
- `break`: detiene la ejecución del `switch` para evitar que continúe ejecutando los siguientes casos.
- `default`: se ejecuta cuando ninguno de los casos anteriores coincide. Es opcional.

**Ejemplo:**

```php
$dia = "lunes";

switch ($dia) {
    case "lunes":
        echo "Hoy comienza la semana.";
        break;

    case "viernes":
        echo "¡Ya casi termina la semana!";
        break;

    case "sábado":
    case "domingo":
        echo "Es fin de semana.";
        break;

    default:
        echo "Es un día entre semana.";
}
```

En este ejemplo, PHP compara el contenido de `$dia` con cada uno de los valores indicados en los `case`. Si encuentra una coincidencia, ejecuta el código correspondiente.

Observa que los casos de sábado y domingo comparten el mismo bloque de código. Esto es posible porque no colocamos un `break` entre ambos.

**Importante:** No podemos escribir condiciones como `case < 18` o `case >= 18`, porque `case` espera un valor para comparar, no una condición.

Si necesitamos evaluar condiciones, podemos utilizar `switch (true)`:

```php
$edad = 20;

switch (true) {
    case ($edad < 18):
        echo "Eres menor de edad";
        break;

    case ($edad >= 18):
        echo "Eres mayor de edad";
        break;

    default:
        echo "Edad no válida";
}
```

En este caso, `switch` evalúa cada condición y ejecuta el primer `case` cuyo resultado sea `true`.

### Sintaxis alternativa

PHP también permite escribir `switch` utilizando dos puntos y `endswitch`:

```php
switch ($variable):
    case valor1:
        // Código
        break;

    case valor2:
        // Código
        break;

    default:
        // Código
endswitch;
```

Esta sintaxis alternativa es útil cuando mezclamos PHP con HTML.

### Ejemplo práctico: validar dos campos con Switch Case

Vamos a crear un formulario que solicite un nombre de usuario y una contraseña. Utilizaremos `switch (true)` para comprobar si ambos datos coinciden con alguno de los usuarios autorizados.

**Archivo 1: `index.html`**

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales III</title>

    <style>
        h1 {
            text-align: center;
        }

        table {
            background-color: #FFC;
            padding: 5px;
            border: #666 5px solid;
        }
    </style>
</head>

<body>

    <h1>Uso de Switch</h1>
    <hr>

    <form action="validacion_condicionales.php"
          method="POST"
          name="datos_usuario"
          id="datos_usuario">

        <table width="15%" align="center">

            <tr>
                <td>Nombre:</td>
                <td>
                    <input type="text"
                           name="nombre_usuario"
                           id="nombre_usuario"
                           required>
                </td>
            </tr>

            <tr>
                <td>Contraseña:</td>
                <td>
                    <input type="password"
                           name="contra_usuario"
                           id="contra_usuario"
                           required>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit"
                           value="Enviar"
                           name="enviando"
                           id="enviando">
                </td>
            </tr>

        </table>

    </form>

</body>
</html>
```

**Archivo 2: `validacion_condicionales.php`**

```php
<?php

if (isset($_POST["enviando"])) {

    $nombre = $_POST["nombre_usuario"];
    $contra = $_POST["contra_usuario"];

    switch (true) {

        case ($nombre == "Juan" && $contra == "JJJJ"):
            echo "Usuario autorizado. Hola Juan.";
            break;

        case ($nombre == "María" && $contra == "MMMM"):
            echo "Usuario autorizado. Hola María.";
            break;

        case ($nombre == "Pedro" && $contra == "PPPP"):
            echo "Usuario autorizado. Hola Pedro.";
            break;

        default:
            echo "Usuario no autorizado.";
    }

}

?>
```

**¿Cómo funciona?**

1. El usuario introduce su nombre y contraseña en el formulario.
2. Al pulsar el botón Enviar, los datos se envían mediante el método `POST` al archivo `validacion_condicionales.php`.
3. PHP comprueba que el formulario se haya enviado mediante `isset()`.
4. `switch (true)` evalúa las condiciones de cada `case`.
5. Para autorizar al usuario, deben coincidir tanto el nombre como la contraseña.
6. Si ninguna combinación coincide, se ejecuta `default` y se muestra el mensaje de acceso no autorizado.

**Ejemplos de acceso:**

| Nombre | Contraseña | Resultado |
|---|---|---|
| Juan | JJJJ | Usuario autorizado |
| María | MMMM | Usuario autorizado |
| Pedro | PPPP | Usuario autorizado |
| Juan | MMMM | Usuario no autorizado |
| Carlos | CCCC | Usuario no autorizado |

**Importante:** Este ejemplo es únicamente didáctico. En una aplicación real no debemos guardar contraseñas en texto plano ni validar usuarios con contraseñas escritas directamente en el código. Para ello se utilizan mecanismos como `password_hash()` y `password_verify()`.


## 20.4 Estructuras Condicionales IV

### Expresión Match

La expresión `match` se incorporó en la versión **PHP 8.0**. Es útil cuando necesitamos comparar una misma expresión con diferentes valores y obtener un resultado dependiendo de cuál coincida.

A diferencia de `switch`, `match` es una expresión que devuelve un valor. Esto permite almacenar directamente el resultado en una variable.

**Diferencias entre Switch y Match:**

| Switch | Match |
|---|---|
| Es una estructura de control. | Es una expresión que devuelve un valor. |
| Utiliza comparación flexible (`==`). | Utiliza comparación estricta (`===`). |
| Necesita `break` para evitar ejecutar otros casos. | No necesita `break`. |
| Puede continuar ejecutando los siguientes casos si omitimos `break`. | Solo ejecuta el caso que coincide. |
| Puede no tener `default`. | Puede no tener `default`, pero si no hay coincidencia genera un error. |

**Sintaxis:**

```php
$resultado = match ($variable) {
    valor1 => resultado1,
    valor2 => resultado2,
    valor3 => resultado3,
    default => resultado_por_defecto,
};
```

- `match`: indica la expresión que queremos evaluar.
- `=>`: separa el valor que queremos comparar del resultado que se devolverá.
- `default`: establece el resultado que se devolverá cuando no coincida ninguno de los valores anteriores. Es opcional.
- `;`: finaliza la expresión `match` cuando se utiliza como parte de una asignación.

**Ejemplo:**

```php
$estado = 2;

$resultado = match ($estado) {
    1 => "pendiente",
    2 => "en proceso",
    3 => "completado",
    default => "desconocido",
};

echo $resultado; // en proceso
```

**¿Cómo funciona?**

1. Declaramos la variable `$estado` con el valor `2`.
2. `match` compara ese valor con cada uno de los casos.
3. Encuentra la coincidencia con el valor `2`.
4. Devuelve el texto `"en proceso"` y lo almacena en `$resultado`.
5. Finalmente, `echo` muestra el contenido de `$resultado`.


**Evaluación de múltiples valores**

La expresión `match` también permite evaluar varios valores dentro de un mismo caso (`case`), separándolos mediante comas.

Esto es útil cuando diferentes valores deben devolver el mismo resultado, evitando tener que repetir instrucciones.

**Sintaxis:**

```php
$resultado = match ($variable) {
    valor1, valor2, valor3 => resultado1,
    valor4, valor5 => resultado2,
    default => resultado_por_defecto,
};
```

**Ejemplo:**

```php
$dia = 6;

$resultado = match ($dia) {
    1, 2, 3, 4, 5 => "Día laboral",
    6, 7 => "Fin de semana",
    default => "Día no válido",
};

echo $resultado; // Fin de semana
```

En este ejemplo:

- Si `$dia` contiene 1, 2, 3, 4 o 5, devuelve "Día laboral".
- Si `$dia` contiene 6 o 7, devuelve "Fin de semana".
- Si contiene cualquier otro valor, devuelve "Día no válido".

**Importante:** Cada valor se compara de forma estricta (`===`). Si alguno coincide, se devuelve el resultado correspondiente y no se evalúan los siguientes casos.


## 21.1 Bucles I

### Uso de While y Do While

Los bucles son estructuras de control que permiten ejecutar repetidamente un bloque de código mientras se cumpla una determinada condición.

Su finalidad es evitar tener que escribir varias veces las mismas instrucciones, facilitando la repetición de operaciones y tareas.

En PHP existen diferentes tipos de bucles:

- **Bucles indeterminados:** se utilizan cuando no sabemos exactamente cuántas veces se repetirá el código. Su ejecución depende de una condición. Algunos ejemplos son `while` y `do while`.
- **Bucles determinados:** se utilizan cuando conocemos previamente cuántas veces queremos repetir el código. Un ejemplo es el bucle `for`.

### 1. Bucle While

El bucle `while` ejecuta un bloque de código mientras una condición sea verdadera (`true`).

Antes de ejecutar el código, PHP comprueba si la condición se cumple. Si es verdadera, ejecuta las instrucciones; si es falsa, sale del bucle.

**Sintaxis:**

```php
while (condicion) {
    // Código que se repetirá
}
```

**Ejemplo:**

```php
$contador = 1;

while ($contador <= 5) {
    echo $contador . "<br>";
    $contador++;
}
```

**Resultado:**

```text
1
2
3
4
5
```

En este ejemplo, el bucle comienza con `$contador` en 1 y se repite mientras su valor sea menor o igual a 5. En cada repetición se muestra el valor y se incrementa el contador en una unidad.

**Importante:** Si la condición es falsa desde el principio, el código del bucle no se ejecutará ninguna vez.

### 2. Bucle Do While

El bucle `do while` también permite repetir un bloque de código mientras una condición sea verdadera.

Su principal diferencia respecto a `while` es que primero ejecuta el código y después comprueba la condición. Por este motivo, el bloque de instrucciones se ejecutará al menos una vez, aunque la condición sea falsa desde el principio.

**Sintaxis:**

```php
do {
    // Código que se repetirá
} while (condicion);
```

**Ejemplo:**

```php
$contador = 1;

do {
    echo $contador . "<br>";
    $contador++;
} while ($contador <= 5);
```

**Resultado:**

```text
1
2
3
4
5
```

En este ejemplo, el código se ejecuta y después se comprueba si `$contador` sigue siendo menor o igual a 5. Mientras se cumpla la condición, el bucle continúa.

**Ejemplo para comprobar la diferencia:**

```php
$contador = 7;

do {
    echo "El código se ejecutó una vez.";
} while ($contador < 6);
```

Aunque `$contador` vale 7 y la condición es falsa, el mensaje se muestra una vez porque `do while` comprueba la condición después de ejecutar el código.

### Diferencias entre While y Do While

| While | Do While |
|---|---|
| Comprueba primero la condición. | Ejecuta primero el código. |
| Puede no ejecutarse ninguna vez. | Se ejecuta al menos una vez. |
| La condición se comprueba antes de cada repetición. | La condición se comprueba después de cada repetición. |

**Nota:** Es importante modificar la variable que interviene en la condición para evitar crear un bucle infinito, es decir, un bucle que nunca termina.


## 22.2 Bucles II

### Uso del bucle `for`

El bucle `for` es una estructura de control que permite ejecutar repetidamente un bloque de código mientras se cumpla una condición.

Se utiliza principalmente cuando conocemos de antemano cuántas veces queremos repetir una operación. Por ejemplo, para recorrer una lista, mostrar una secuencia de números o repetir una tarea un número determinado de veces.

### Sintaxis

```php
for (inicialización; condición; incremento) {
    // Instrucciones que se repetirán
}
```

El bucle `for` tiene tres partes:

- **Inicialización:** establece el valor inicial de la variable de control.
- **Condición:** determina si el bucle debe continuar ejecutándose.
- **Incremento:** modifica el valor de la variable en cada repetición.

### Ejemplo

```php
for ($i = 0; $i <= 10; $i++) {
    echo "<p>Hemos entrado en el bucle</p>";
}
```

En este ejemplo, el bloque de instrucciones se ejecuta 11 veces, porque la variable `$i` comienza en 0 y el bucle continúa mientras su valor sea menor o igual a 10.

### Sentencia `break`

La sentencia `break` permite interrumpir inmediatamente la ejecución de un bucle, aunque su condición todavía se cumpla.

Se utiliza cuando necesitamos detener una repetición al cumplirse una determinada condición.

### Ejemplo con `break`

```php
for ($i = 0; $i <= 10; $i++) {
    echo "<p>Hemos entrado en el bucle</p>";

    if ($i == 6) {
        echo "<p>Bucle interrumpido</p>";
        break;
    }
}
```

En este ejemplo, el bucle comienza en 0 y se ejecuta hasta que `$i` alcanza el valor 6. En ese momento se muestra el mensaje "Bucle interrumpido" y la sentencia `break` detiene el bucle.

**Importante:** cuando se ejecuta `break`, el programa sale del bucle inmediatamente y continúa con las instrucciones que se encuentren después de él.

## 23.1 Funciones I

### ¿Qué son las funciones?

Una función es un bloque de código que agrupa un conjunto de instrucciones para realizar una tarea específica. Cada función tiene un nombre que permite identificarla y ejecutarla cuando sea necesario.

Las funciones permiten dividir un programa en bloques independientes, facilitando la organización, la reutilización y el mantenimiento del código.

### ¿Para qué sirven?

Las funciones son una herramienta fundamental en programación y ofrecen varias ventajas:

- **Reutilizar código:** permiten ejecutar las mismas instrucciones tantas veces como sea necesario sin tener que escribirlas nuevamente.
- **Organizar el programa:** ayudan a dividir programas complejos en bloques más pequeños y fáciles de comprender.
- **Evitar repeticiones:** permiten agrupar operaciones que necesitamos realizar en diferentes partes del programa.
- **Facilitar el mantenimiento:** si necesitamos modificar una operación, podemos hacerlo directamente en la función correspondiente, sin tener que buscar y cambiar todas sus repeticiones.

### Tipos de funciones en PHP

En PHP podemos distinguir dos grandes grupos de funciones:

**1. Funciones predefinidas**

Son funciones que ya vienen incorporadas en PHP y que podemos utilizar directamente, sin necesidad de declararlas previamente.

Estas funciones permiten realizar operaciones habituales relacionadas con textos, números, fechas, arrays y muchos otros aspectos del lenguaje.

Algunos ejemplos:

```php
strlen("Hola");        // Devuelve la longitud de un texto
strtoupper("hola");    // Convierte el texto a mayúsculas
strtolower("HOLA");    // Convierte el texto a minúsculas
sqrt(25);              // Calcula la raíz cuadrada
date("d/m/Y");         // Devuelve la fecha actual
```

Puedes consultar las funciones disponibles en la documentación oficial de PHP:

[Documentación oficial de funciones de PHP](https://www.php.net/manual/es/indexes.functions.php)

**2. Funciones propias o definidas por el usuario**

Son funciones que creamos nosotros mismos para realizar tareas específicas dentro de un programa.

A diferencia de las funciones predefinidas, podemos diseñarlas según las necesidades de nuestro proyecto, estableciendo qué instrucciones ejecutarán y qué información necesitarán recibir.

### Declaración de una función

Para crear una función en PHP utilizamos la palabra reservada `function`, seguida del nombre que queremos asignarle y unos paréntesis.

A continuación, entre llaves `{ }`, escribimos las instrucciones que formarán parte de la función.

**Sintaxis:**

```php
function nombreFuncion() {
    // Instrucciones que ejecutará la función
}
```

**Ejemplo:**

```php
function saludar() {
    echo "Hola, bienvenido a PHP";
}
```

En este ejemplo hemos declarado una función llamada `saludar()`, que contiene una instrucción para mostrar un mensaje en pantalla.

Es importante recordar que declarar una función no significa que sus instrucciones se ejecuten automáticamente. Para ello debemos realizar una llamada a la función.

### Ejecución de una función

Para ejecutar una función escribimos su nombre seguido de paréntesis y un punto y coma.

**Ejemplo:**

```php
function saludar() {
    echo "Hola, bienvenido a PHP";
}

// Llamamos a la función
saludar();
```

Al ejecutar `saludar();`, PHP ejecuta las instrucciones que se encuentran dentro de la función.

Podemos llamar a una misma función tantas veces como necesitemos:

```php
saludar();
saludar();
saludar();
```

En este caso, el mensaje se mostrará tres veces.

### Parámetros de las funciones

Los parámetros permiten que una función reciba información desde el lugar donde es llamada. De esta manera, podemos crear funciones más flexibles y reutilizables, capaces de trabajar con diferentes valores.

Los parámetros se declaran dentro de los paréntesis de la función y se comportan como variables locales, que reciben los valores enviados durante su ejecución.

**Ejemplo:**

```php
function saludar($nombre) {
    echo "Hola, " . $nombre;
}

// Llamamos a la función enviándole un valor
saludar("Carlos");
```

En este ejemplo:

- `$nombre` es el **parámetro** declarado en la función.
- `"Carlos"` es el **argumento** que enviamos al llamar a la función.
- La función recibe ese valor y lo utiliza para construir el mensaje.

**Una función puede recibir uno o varios parámetros.**

**Ejemplo con dos parámetros:**

```php
function sumar($numero1, $numero2) {
    echo $numero1 + $numero2;
}

// Enviamos dos argumentos
sumar(10, 5);
```

En este caso, la función recibe dos valores, los suma y muestra el resultado.

Podemos utilizar la misma función con argumentos diferentes:

```php
sumar(10, 5);    // Resultado: 15
sumar(20, 8);    // Resultado: 28
sumar(100, 50); // Resultado: 150
```

De esta forma, reutilizamos una misma función para realizar diferentes operaciones.

### Parámetros con valores por defecto

PHP permite asignar valores por defecto a los parámetros de una función. Esto significa que, si al llamar a la función no proporcionamos un argumento para ese parámetro, se utilizará automáticamente el valor que hayamos establecido en su declaración.

Para asignar un valor por defecto utilizamos el operador de asignación `=`.

**Sintaxis:**

```php
function nombreFuncion($parametro = valorPorDefecto) {
    // Instrucciones de la función
}
```

**Ejemplo:**

```php
function saludar($nombre = "invitado") {
    echo "Hola, " . $nombre;
}

// Utilizamos el valor por defecto
saludar();

// Enviamos un argumento diferente
saludar("Carlos");
```

En este ejemplo:

- `$nombre` tiene asignado `"invitado"` como valor por defecto.
- Cuando ejecutamos `saludar()` sin argumentos, se utiliza el valor `"invitado"`.
- Cuando ejecutamos `saludar("Carlos")`, el valor enviado sustituye al valor por defecto.

**Resultados:**

```text
Hola, invitado
Hola, Carlos
```

También podemos utilizar valores por defecto en funciones que reciben varios parámetros.

**Ejemplo:**

```php
function presentar($nombre, $edad = 18) {
    echo "Mi nombre es " . $nombre . " y tengo " . $edad . " años.";
}

// Enviamos los dos argumentos
presentar("Carlos", 25);

// Solo enviamos el primer argumento
presentar("Ana");
```

En este caso, cuando no indicamos la edad, PHP utiliza automáticamente el valor `18`.

**Importante:**

- Los parámetros con valores por defecto deben colocarse después de los parámetros obligatorios.
- Si enviamos un argumento para un parámetro que tiene un valor por defecto, se utilizará el argumento enviado.
- Si omitimos ese argumento, se utilizará el valor por defecto establecido en la declaración.

### Resumen

- Las funciones son bloques de código que realizan tareas específicas.
- PHP dispone de funciones predefinidas que podemos utilizar directamente.
- También podemos crear nuestras propias funciones mediante la palabra reservada `function`.
- Para ejecutar una función debemos llamarla utilizando su nombre y paréntesis.
- Los parámetros permiten recibir información dentro de una función.
- Los argumentos son los valores que enviamos al llamar a una función.
- Podemos establecer valores por defecto para utilizar cuando no se proporciona un argumento.


## 23.2 Funciones II

### Paso de parámetros por valor y por referencia

Cuando enviamos información a una función, PHP permite hacerlo principalmente de dos maneras: **por valor** o **por referencia**.

La diferencia entre ambas formas está en cómo se manejan los cambios que realizamos sobre los parámetros dentro de la función y si estos afectan o no a las variables originales.

### Paso de parámetros por valor

Por defecto, PHP pasa los argumentos a las funciones por valor.

Esto significa que la función recibe una copia del valor enviado. Por lo tanto, cualquier modificación que realicemos sobre el parámetro dentro de la función no altera directamente la variable original.

**Sintaxis:**

```php
function ejemplo($param) {
    $param++;
}
```

**Ejemplo:**

```php
function incrementa($valor1) {
    $valor1++;
    return $valor1;
}

$numero = 5;

echo incrementa($numero); // Resultado: 6
echo $numero;             // Resultado: 5
```

En este ejemplo:

- La variable `$numero` contiene inicialmente el valor `5`.
- Al llamar a la función, se pasa su valor al parámetro `$valor1`.
- Dentro de la función, `$valor1` se incrementa en una unidad.
- La función devuelve el resultado `6`.
- Sin embargo, la variable original `$numero` continúa teniendo el valor `5`.

**¿Para qué sirve?**

El paso por valor es útil cuando queremos que una función trabaje con los datos recibidos sin modificar directamente las variables originales.

### Paso de parámetros por referencia

El paso por referencia permite que una función trabaje directamente con la variable original que recibe como argumento.

Para indicar que un parámetro se recibe por referencia, colocamos el símbolo `&` delante del nombre del parámetro en la declaración de la función.

De esta manera, los cambios realizados sobre ese parámetro también afectan a la variable original.

**Sintaxis:**

```php
function ejemplo(&$param) {
    $param++;
}
```

**Ejemplo:**

```php
function incrementa(&$valor1) {
    $valor1++;
}

$numero = 5;

incrementa($numero);

echo $numero; // Resultado: 6
```

En este ejemplo:

- La variable `$numero` contiene inicialmente el valor `5`.
- Al llamar a la función, se pasa la variable por referencia.
- Dentro de la función, `$valor1` incrementa su valor en una unidad.
- Como el parámetro está declarado por referencia, también se modifica la variable original.
- Al finalizar la función, `$numero` contiene el valor `6`.

**¿Para qué sirve?**

El paso por referencia resulta útil cuando necesitamos que una función modifique directamente una variable original, por ejemplo, para actualizar valores, modificar cadenas de texto o trabajar con estructuras de datos.

### Ejemplo práctico: modificar una cadena de texto

También podemos utilizar el paso por referencia para modificar el contenido de una variable de tipo texto.

```php
function cambia_mayus(&$param) {
    $param = strtolower($param);
    $param = ucwords($param);
}

$cadena = "hOlA mUnDo";

cambia_mayus($cadena);

echo $cadena; // Resultado: Hola Mundo
```

En este caso:

- La función recibe la variable `$cadena` por referencia.
- `strtolower()` convierte todo el texto a minúsculas.
- `ucwords()` convierte la primera letra de cada palabra a mayúscula.
- Como trabajamos por referencia, los cambios afectan directamente a `$cadena`.

### Diferencias entre el paso por valor y por referencia

| Característica | Por valor | Por referencia |
|---|---|---|
| Declaración | `$param` | `&$param` |
| Qué recibe la función | El valor del argumento | Una referencia a la variable original |
| Modifica la variable original | No, por sí mismo | Sí |
| Uso habitual | Trabajar sin modificar la variable original | Modificar directamente la variable original |

**Importante:**

- En PHP, el paso por valor es el comportamiento predeterminado.
- Para utilizar el paso por referencia debemos colocar `&` en la declaración del parámetro.
- El paso por referencia permite modificar la variable original desde dentro de la función.
- El paso por valor no impide que una función devuelva un resultado diferente mediante `return`; simplemente evita que los cambios locales modifiquen directamente la variable original.


## 24.1 POO I

### ¿Qué es la Programación Orientada a Objetos (POO)?

La Programación Orientada a Objetos, también conocida como POO, es un paradigma de programación que permite organizar el código mediante estructuras llamadas **clases y objetos**.

Este enfoque permite representar elementos del mundo real o conceptos de un programa, agrupando sus características y comportamientos en una misma estructura.

Por ejemplo, si queremos desarrollar un programa para gestionar vehículos, podemos representar un coche mediante sus características (marca, modelo, color) y sus comportamientos (arrancar, frenar, acelerar).

La POO facilita la organización, reutilización y mantenimiento del código, especialmente cuando desarrollamos aplicaciones de mayor tamaño.

### Conceptos fundamentales de la POO

Para comprender la programación orientada a objetos, debemos conocer tres conceptos fundamentales:

**1. Objeto**

Un objeto es una entidad que representa un elemento concreto dentro de un programa. Tiene características y comportamientos propios.

Por ejemplo, podemos representar diferentes coches. Cada uno puede tener una marca, un modelo y un color determinados.

**2. Clase**

Una clase es una estructura o plantilla que define cómo serán los objetos que creemos a partir de ella.

Dentro de una clase podemos definir:

- **Propiedades:** son las variables que representan las características o los datos de un objeto. Por ejemplo: marca, modelo, color y velocidad.
- **Métodos:** son las funciones que representan las acciones o comportamientos que puede realizar un objeto. Por ejemplo: arrancar, frenar o acelerar.

Por ejemplo, podemos crear una clase llamada `Coche` que contenga las propiedades y los métodos comunes a los diferentes coches que queramos representar.

**3. Instancia**

Una instancia es un objeto concreto que se crea a partir de una clase.

Cuando creamos una instancia, estamos utilizando la estructura definida en una clase para generar un objeto que podrá tener sus propios valores en las propiedades.

Por ejemplo, a partir de una clase llamada `Coche`, podemos crear diferentes instancias:

- Un Renault de color rojo.
- Un Mazda de color azul.
- Un Seat de color blanco.

Todos pertenecen a la misma clase, pero cada instancia representa un objeto independiente.

### Creación de clases en PHP

Para declarar una clase en PHP utilizamos la palabra reservada `class`, seguida del nombre que queremos asignarle.

El contenido de la clase se escribe entre llaves `{ }`.

**Sintaxis:**

```php
class NombreClase {

    // Propiedades

    // Métodos

}
```

**Ejemplo:**

```php
class Coche {

}
```

En este ejemplo hemos declarado una clase llamada `Coche`. Por el momento está vacía, pero posteriormente podremos incorporar sus propiedades y métodos.

Por convención, los nombres de las clases suelen comenzar con una letra mayúscula y utilizar el formato `PascalCase` cuando contienen varias palabras.

### Creación de instancias de una clase

Una vez declarada una clase, podemos crear objetos a partir de ella. Este proceso se conoce como **instanciación**.

Para crear una instancia en PHP utilizamos la palabra reservada `new`, seguida del nombre de la clase y unos paréntesis.

**Sintaxis:**

```php
$nombreObjeto = new NombreClase();
```

**Ejemplo:**

```php
class Coche {

}

// Creamos diferentes instancias de la clase Coche
$renault = new Coche();
$mazda = new Coche();
$seat = new Coche();
```

En este ejemplo:

- `Coche` es la clase que hemos declarado.
- `new` permite crear una nueva instancia.
- `$renault`, `$mazda` y `$seat` son variables que hacen referencia a diferentes objetos.
- Cada llamada a `new Coche()` crea un objeto independiente de los demás.

**Importante:** una clase es la plantilla que define la estructura de los objetos, mientras que una instancia es cada objeto concreto que creamos a partir de esa clase.

Podemos crear tantas instancias como necesitemos utilizando una misma clase.


## 24.2 POO II

### Propiedades y métodos

Las **propiedades** son variables que pertenecen a una clase y almacenan los datos o características de los objetos.

Los **métodos** son funciones declaradas dentro de una clase y representan las acciones o comportamientos que pueden realizar sus objetos.

### Constructor

El constructor es un método especial que se ejecuta automáticamente cuando creamos una nueva instancia de una clase.

En PHP se declara utilizando `__construct()`.

Su finalidad es establecer el estado inicial del objeto, es decir, asignar valores iniciales a sus propiedades.

Ejemplo:

```php
class Coche {

    public $ruedas;
    public $color;
    public $motor;

    public function __construct() {
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }
}
```

**Observa:**

- `__construct()` es el constructor de la clase.
- Se ejecuta automáticamente al utilizar `new`.
- `$this` hace referencia al objeto actual.
- `->` permite acceder a las propiedades y métodos del objeto.

Cuando creamos una instancia:

```php
$renault = new Coche();
```

El constructor se ejecuta automáticamente y asigna los valores iniciales:

- Ruedas: 4
- Color: vacío
- Motor: 1600

### Cambio de propiedades

Podemos modificar las propiedades de un objeto después de crearlo utilizando el operador `->`.

Ejemplo:

```php
$renault->color = "rojo";
$renault->motor = 2000;
```

De esta manera, cambiamos los valores de las propiedades del objeto `$renault`.

Cada instancia tiene sus propios valores, por lo que modificar una propiedad de un objeto no modifica automáticamente la de los demás.

### Llamadas a métodos

Para ejecutar un método de un objeto utilizamos el operador `->`, seguido del nombre del método y los paréntesis.

Ejemplo:

```php
$renault->arrancar();
$renault->girar();
$renault->frenar();
```

Cada llamada ejecuta el método correspondiente del objeto.

### Ejemplo completo

```php
<?php

class Coche {

    public $ruedas;
    public $color;
    public $motor;

    public function __construct() {
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }

    public function arrancar() {
        echo "Estoy arrancando";
        echo "<br>";
    }

    public function girar() {
        echo "Estoy girando";
        echo "<br>";
    }

    public function frenar() {
        echo "Estoy frenando";
        echo "<br>";
    }
}

$renault = new Coche();
$mazda = new Coche();
$seat = new Coche();

$renault->color = "Rojo";
$mazda->color = "Azul";
$seat->color = "Negro";

$mazda->girar();

?>
```

### Resumen

- **Propiedades:** almacenan los datos o características de un objeto.
- **Métodos:** representan las acciones que puede realizar un objeto.
- **Constructor:** método especial que se ejecuta al crear una instancia.
- **`__construct()`:** nombre que se utiliza para declarar el constructor en PHP.
- **`$this`:** hace referencia al objeto actual.
- **Cambio de propiedades:** se realiza mediante el operador `->`.
- **Llamada a métodos:** se realiza mediante el operador `->` y los paréntesis.
