Performance
=============
A simple MacOS computer diagnostic and performance analyzer CRM built using Laravel PHP framework and Now UI Bootstrap 4 theme.

![Dashboard](/public/img/screenshot.png)

## Requirements
* PHP >= 7.1.3 with Composer
* MySQL >= 5.6
* Node >= 8.0

## Installing

Clone the repo to the directory of your choice and install the vendors. 

```$xslt
git clone https://github.com/zoren2/Performance.git
cd performance
npm install
composer install
npm run dev
php artisan serve
```

You will also need to setup .env in order to properly communicate with your mySQL database. Begin by copying the template offered by the Laravel Framework. Continue with the command while you are still in the Performances directory.

```$xslt
cp .env.example .env
```

You will then need to edit the default fields to match your mySQL connection.

```$xslt
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Next run the database migrations.

```$xslt
php artisan migrate
```

If you would like to seed dummy blog posts into the application, simply run

```$xslt
php artisan db:seed
```

## Running

Running the project is simple if you already have the required packages to install a Laravel project. Simply start the project on your local machine by running the following command.

```$xslt
php artisan serve
```

## Cron Job Instructions

In order to populate your MySQL database with data points, add this bash shell script to the project resources folder (eg: /resources/scripts/). Then in order to run the scripts, you must change the permissions on the script. Alternatively you may choose to write your own shell script that populates the migration tables.

```$xslt
cd resources
cd scripts
chmod 755 cron.sh
```
Then simply use the crontab -e command which brings you to your default text editor, and enable the cronjob.

```$xslt
crontab -e
```
Here's a sample cronjob task that runs every 5 minutes.

*/5 * * * * /project_path/resources/scripts/cron.sh

## Credits

Now UI Bootstrap Theme / CRM tools designed by Creative Tim
https://www.creative-tim.com/product/now-ui-kit
