
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
