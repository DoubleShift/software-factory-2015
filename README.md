#HealthEX
HealthEX is an interactive kiosk client system in which users can set their exercise plan and goal. Aim to motivate people to exercise more frequently.

##Features
* Record users exercise 
* Encourage users to exercise
* Plan your exercise
* List the user rank

##Requirements
* jQuery2.1.3  
* jQuery.Cookie.js
* RadialIndicator.js
* PHP 5.2+
* MySQL 5.5.40
* phpMyAdmin 3.5.8

[**jQuery**](https://jquery.com/) is a fast, small, and feature-rich JavaScript library. We used it for every thing in the front page.
[**jQuery.Cookie**](https://plugins.jquery.com/cookie/)is a simple, lightweight jQuery plugin for reading, writing and deleting cookies. 
[**RadialIndicator.js**](http://ignitersworld.com/lab/radialIndicator.html) is a simple and light weight circular indicator plugin. It is used to show the progress when you have a challenge with someone.
**PHP 5.2**, our server is based on PHP 5.2 and have been tested on PHP5.5, so it should be avaliable on PHP5.2+. 
**MySQL 5.5.40**, the database is limited by our server, it couldn't support any latest version. The code doesn't work on any other MySQL version.
[**phpMyAdmin**](http://sourceforge.net/projects/phpmyadmin/files/phpMyAdmin/3.5.8/) is used to manage mysql service, but due to the version of MySQL, the older version phpMyAdmin 3.5.8 could connect to the database. Also , you will need this to import the .sql to database.

##Browers support
|IE  | Firefox | Chrome | Safari|
|--- | ------- | ------ | -----|
| 	|		|  		✔| |
This project should run on the kiosk machine which means we can decide the brower. So we just focus on Chrome, and it works well on Chrome 39+ and any other extend version. 

##What's Included
```
SWF
├─interface
│  ├─mui
│  ├─pictures 
│  │  ├─exercise
│  │  └─favicons          
│  ├─scripts 
│  └─styles     
└─kiosk
```
* `/kiosk` 				
page folder, we put all the pages here and only pages. 
* `interface/mui` 		
Our project is multilingual,supported languages: en, ru, fi, cn. MUI files can be found in /interface/mui/. Do not put your text directly on page. Use constant and define it in MUI files. If you have done everything correctly translations must start working automatically. To switch language edit Session variable language ($_SESSION[‘language’]=‘en’) or do a get request (<URI>?lang=en). If somewhere show not defined, it should be language problem, change the language to EN to keep it running.
* `interface/pictures`	
Pictures are stored here.
* `interface/scripts`	
Third party lib are stored here, and also we wrote some functions on the util.js.
* `interface/styles`
Css files can be found here. Put your css files there and declare them in /kiosk/header.php or /web/header.php. Main css files should contains basic styles that can be used for different pages. Page-specific styles should be stored in separate css files.
* `config.php`
Your server information was stored here, edit it when you upload the files to your server.

##Installation
1. Download the latest release [HealthEX](https://github.com/niellun/software-factory-2015/archive/master.zip)  or Clone this repo  
`git clone https://github.com/niellun/software-factory-2015`
2. Unzip the master.zip and upload all the files to your server.
3. Import psicoderu.sql to your MySQL by phpMyAdmin or use `mysql>source psicoderu_sfp.sql`
4. edit file config.php
```php
	//root address of your website
define( 'IP_ROOT', 'http://sfp.psicode.ru/' ); 
	//MySQL username
define( 'SQL_USER', 'psicoderu_sfp' );	
	//MySQL password
define( 'SQL_PASS', 'sfp12345' );
	//MySQL host
define( 'SQL_HOST', 'localhost' );
	//MySQL name
define( 'SQL_DB', 'psicoderu_sfp' );
```

##Demo
You can also visit our online [Demo](http://sfp.psicode.ru/kiosk/login.php).

##Documentation
Please check our guide video.




