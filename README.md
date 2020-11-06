# **Acto público docente**

## Requerimientos

- PHP >= 7.3
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Composer
  
***

## Instalación

- Ubicarse en la carpeta raíz del proyecto  y ejecutar el comando:

~~~bash
composer install
~~~

- Copiar .env.example y guardarlo como .env.
- Configurar base de datos y luego ejecutar:
  
~~~~bash
php artisan migrate --seed
~~~~

***

## Ejecución

- Ejecutar:
  
~~~bash
php artisan serve
~~~

- Loguearse con user `admin` y password `admin`. Al hacerlo tiene privilegios de administrador para poder ingresar al panel administrable.
- Los demas usuarios que sean creados no tendran dicho acceso.
