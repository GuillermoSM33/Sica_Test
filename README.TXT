==========================================================================
Los enlaces se enumeran en 10.

1. Binarios de PHP.
2. Apache.
3. Node.js.
4. Cómo instalar PHP y Apache.
5. Composer.
6. Cómo descargar composer.
7. Documentación de Laravel.
8. Descargar MySQL
9. Documentación de tailwind.
10. Packgist - DOMPDF

===========================================================================

ENLACES DE DESCARGA Y GUÍAS

1. https://windows.php.net/download/
2. https://www.apachelounge.com/download/
3. https://nodejs.org/en/download/package-manager
4. https://www.youtube.com/watch?v=ZZ0PxUo87Rc&ab_channel=MVCDesing
5. https://getcomposer.org/download/
6. https://kinsta.com/es/blog/instalar-composer/
7. https://laravel-docs.com/es/docs/10.x/installation
8. https://dev.mysql.com/downloads/workbench/
9. https://tailwindcss.com/docs/guides/laravel
10. https://packagist.org/packages/barryvdh/laravel-dompdf 

===========================================================================

CONFIGURACIÓN DE HTTPD.CONF

LoadModule php_module "c:/php/php8apache2_4.dll"

ESTE ES OPCIONAL - ServerName 201.144.238.74

<IfModule dir_module>
    DirectoryIndex index.html index.php
</IfModule>

<IfModule proxy_html_module>
Include conf/extra/proxy-html.conf
</IfModule>

<IfModule ssl_module>
SSLRandomSeed startup builtin
SSLRandomSeed connect builtin
</IfModule>
    
PHPIniDir "C:\php"

============================================================================

CONFIGURACIÓN EN PHP.INI

extension=curl
extension=ftp
extension=fileinfo
extension=gd
extension=mbstring
extension=openssl
extension=pdo_mysql
extension=pdo_sqlite
extension=soap
extension=sockets
extension=sodium
extension=sqlite3
extension=tidy
extension=xsl
extension=zip

==============================================================================

IMPORTACIÓN DE BOOTSTRAP Y JS:

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

==============================================================================

IMPORTACIÓN PARA ICONOS:

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" crossorigin="anonymous">

CÓDIGO DEL FOOTER:

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top bg-light">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <i class="fas fa-brain fa-2x"></i>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 Company, Inc</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fab fa-twitter fa-2x"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fab fa-instagram fa-2x"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fab fa-facebook fa-2x"></i></a></li>
            </ul>
        </div>
    </footer>