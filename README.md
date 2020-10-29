<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://i.imgur.com/YzXshIh.png" width="200" high="200"></a></p>

## About This Laravel "StudComm" Project

Dont look at the name - it doesn't mean anything.

I'll learn Laravel following different online tutorials. At the same time will try to build one real-life application. The idea for the app came from my daughter and hopefully will be launched someday and will help people. For me personally, this project will be successful if we (my daughter and I) spend some quality time together, building and learning new things.

Sorry in advance - I need to say this at the beginning of this journey because I'm a total noob in terms of properly formating and efficiently writing code and generally in the programming world. So if anyone wanna learn how to do things properly, they should leave this place. 


## Instaling Project (for development purposes)
I'll write how I am doing this on my system - win10 64bit, and Visual Studio Code - free source-code editor. Please contribute if you find a better or simpler way to install/clone this or any similar project in your system/environment for development purposes.

installation prerequisites(install on your sistem ):

    1.php (recommended 7+)
    
    2.composer - latest
    
    3.nodejs - latest
    
    4.git - latest
    
    5.xamp (with apache server and MySql)    
    
    
And add them to the path of your system (PHP/composer/npm/git/MySql), so you can use them globally.

--Open the console and cd into the folder where you want to clone the StudComm project and run


    git clone https://github.com/Kelj-menc/StudComm.git
    
--in the new project directory locate ....StudComm\.git\config file (its hidden on my system) open it and
    add this into:
    
    [user]
    email = "your-gitregister-email@example.com"
    name = "Your-Git-Hub_username"
    
Save and close.
    
    
--In the project folder (\StudComm) locate '.env.example' file > make a copy of that file  > past it in the same directory and rename it in a '.env' now open that file with some text editor and change in a DATABASE section 


    DB_DATABASE=studcomm
    DB_CONNECTION=mysql

--Fire up xamp and start server and mysql > click on admin(mysql) button > make new database > name:studcomm
    
--Open the console and cd into PROJECT folder (/StudComm) and run


    composer update
    
next run

    PHP artisan key:generate
    
and finally

    php artisan migrate

--Open the console and cd into PROJECT folder (/PizzaKelj) and run
    php artisan serve
    
Finally, if everything is OK in your browser, you can check out this addresses, for example:


http://127.0.0.1:8000/

http://127.0.0.1:8000/students

http://127.0.0.1:8000/students/create

http://127.0.0.1:8000/students/2


## Programing Languages and Frameworks

-Laravel

-PHP

-HTML

-JavaScript

-NodeJS

-MySql/SQLite


## Contributing

Thank you for considering contributing to the project!

## Code of Conduct

The community is welcoming to all. Please review and abide.

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send a message. All security vulnerabilities will be promptly inspected.

## License

The project will be open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT) until my daughter doesn't decide differently.
