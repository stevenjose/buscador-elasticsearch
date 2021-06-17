<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instalación

  - composer install
  - npm install
  - npm run dev
  - php artisan serve

### ElasticSearch

   - Descargar instalart ElasticSearch https://www.elastic.co/es/downloads/elasticsearch
   - Descargar instalar Kibana https://www.elastic.co/guide/en/kibana/current/install.html
   - En kibana ir a la pestaña DevTools crear el indice articles con el siguiente comando.
 
 ```
 PUT /articles
 ```
 
### Ultimo paso
  - En su archivo .env colocar sus credenciales en el apartado de BD 
  - Correr las migraciones de Laravel **php artisan migrate**
  - **php artisan migrate --seed**
   
### Probar

  - Entra en la url localhost:8000 
  

