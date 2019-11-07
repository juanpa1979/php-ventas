# Slim Framework 3 Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the PHP-View template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project slim/slim-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can run these commands 

	cd [my-app-name]
	php composer.phar start
	
Or you can use `docker-compose` to run the app with `docker`, so you can run these commands:

         cd [my-app-name]
	 docker-compose up -d
After that, open `http://0.0.0.0:8080` in your browser.

Run this command in the application directory to run the test suite

	php composer.phar test

That's it! Now go build something cool.

# Pasos para crear el proyecto

## Pasos previos
1. Instalar xampp
2. Instalar composer
3. Instalar git
4. Instalar visual studio code

## Crear el proyecto
1. composer create-project slim/slim-skeleton:3.1.8 php-ventas
2. cd php-ventas
3. code .
4. composer start

## Materiales
1. Bootstrap -> https://getbootstrap.com/docs/4.3/components/alerts/
2. Bootstrap Video -> https://www.youtube.com/watch?v=7s1RjItUBqU&list=PLL0TiOXBeDagsYUYFO9WMwDtuDuoGZVB9
3. Git -> https://www.youtube.com/watch?v=zH3I1DZNovk&list=PLY5pCJQeEfJ9EZbp08YOhuVzz8mlbEKB4
