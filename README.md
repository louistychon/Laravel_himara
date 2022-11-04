# Laravel_himara
This project is a backoffice for the Himara hotel owner & team. It was built in a local environnement.

The Backoffice is built in Laravel and the front in JS, HTML & CSS. The front is similar from a Wordpress template and not made by me : 
https://preview.eagle-themes.com/html/himara/index.html

To start the project, those are the command lines : 

First time :
1. Git pull https://github.com/louistychon/Laravel_himara/
2. npm i && composer i
3. Create a database and link to it in your .env file
5. php artisan migrate 

Each time :
1. npm run dev
2. php artisan serve

To connect to the admin : 
[localhost:8000/login](http://localhost:8000/login)
You can use the credentials provided in the User Seeder.

To send emails: 
You need to change .env configuration in order to be able to send emails from this template. Without doing that correctly, it's possible that some fonctionnalities won't work properly. 
