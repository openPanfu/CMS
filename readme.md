# OpenPanfu CMS

## About
This is the site that you'll run in order to play the game, it is based on the Laravel framework which uses Bootstrap.

We did not try to make a replicate the style of panfu itself yet, we think you're capable of that yourself and this just works fine.

Both Laravel and Bootstrap use the MIT License which you can read yourself.

## Required things

For installation you'll need a MySQL server.
You'll also need PHP (cli) and Composer installed in your terminal, this PHP version has to be >7.1.3


## Required enabled PHP extensions

* PDO
* OpenSSL
* Mbstring
* Tokenizer
* XML
* Ctype
* JSON

## Setup

Alright, from here on we assume you have all of the requirements as mentioned above.

1. Clone this project.
2. Go to your project folder, open the .env file.
3. Change 'APP_NAME', 'DB_HOST', 'DB_PORT', 'DB_USERNAME' 'DB_PASSWORD' according to your MySQL configuration.
4. Open your terminal, make sure your current directory is your cloned project's directory.
5. Run 'composer install' to let laravel get all of it's components
6. Run 'php artisan key:generate' in order to set the key that is used for all encrypted data like your sessions.
7. Run 'php artisan migrate' to let laravel create the database for you.
8. Go inside the public folder, place your InformationServer inside there like the empty folder that's already there right now.
9. Copy your flashclient copy to the flashclient folder in public.
10. Run 'php artisan serve' in your terminal and now you should have a functioning CMS. 


## Advanced

### But I don't want to run my InformationServer from the CMS
This will be supported next commit.
### But I am using an external host (CDN) for the flashclient files
This will be supported next commit.