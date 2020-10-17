**Prueba de Laravel para PadelManager**

En src:
- composer install

Para levantar docker, desde el directorio movies_test:
- docker-compose up --build -d
- docker exec -it apache bash
- php artisan migrate
- nohup php artisan queue:work &
- exit