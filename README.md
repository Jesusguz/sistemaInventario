# Sistema de Gestión de Inventario con Laravel y Vite

Este proyecto es un sistema básico de gestión de inventario desarrollado con Laravel, MySQL, jQuery y Bootstrap, utilizando Vite como herramienta de compilación de assets.

## Requisitos Previos 

* **PHP:** Versión 8.0 o superior.
* **Composer:** Gestor de dependencias de PHP.
* **Node.js y npm (o yarn):** Para instalar y ejecutar Vite.
* **MySQL:** Base de datos para almacenar los datos del inventario.

## Instalación ⚙️

1. **Clonar el Repositorio:**
   ```bash
   git clone https://tu-repositorio.git
Usa el código con precaución.
content_copy
Instalar Dependencias de PHP (Composer):

**Comando**

cd sys_inventario
composer install

Instalar Dependencias de Frontend (npm):

**Comando**

npm install
Usa el código con precaución.

Configurar Entorno:

Copiar Archivo .env:



**Generar Clave de Aplicación**:

**Comando**

php artisan key:generate


Configurar Base de Datos:
Abre el archivo .env y ajusta las siguientes variables con tus credenciales de MySQL:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306 (o el puerto que uses)
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
Crear Base de Datos:
BD= inventario
Tablas=Productos y movimientos
Si aún no existe, crea la base de datos en MySQL con el nombre que especificaste en DB_DATABASE.
Ejecutar Migraciones:

**Comando**

php artisan migrate
Usa el código con precaución.

Esto creará las tablas necesarias en tu base de datos.

Compilar Assets (Vite):

**Comando**

npm run dev
Usa el código con precaución.

Ejecución
Iniciar Servidor de Desarrollo:

**Comando**

php artisan serve


Acceder al Sistema:
Abre tu navegador y visita http://localhost:8000 (o el puerto que hayas configurado).

Uso
Haz clic en "Mostrar Menú" para acceder a las opciones de Productos y Movimientos.
Utiliza los formularios para crear, editar y eliminar productos.
Registra movimientos de entrada y salida de productos.
Contribuciones
¡Las contribuciones son bienvenidas! Si encuentras algún error o quieres mejorar el sistema, no dudes en enviar un pull request.


**Notas:**
* **Vite:** Si tienes problemas con Vite, asegúrate de tener Node.js y npm (o yarn) instalados y de que la configuración en `vite.config.js` sea correcta.

¡Espero que este README.md te sea útil! Si tienes alguna otra pregunta, no dudes en hacerla.
