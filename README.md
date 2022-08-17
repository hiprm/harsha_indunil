Laravel Framework
MDB CSS framework
USE MVC
USE REPOSITORY DESIGN PATTERN

##STEP 1: unzip files or git clone https://github.com/hiprm/harsha_indunil.git

##STEP 2: verify ENV is correct check_db

##STEP 3: run composer install command

composer install

##STEP 4: Generate New app Key 

php artisan key:generate 

##STEP 5: Run migrations for creating tables

php artisan migrate:fresh –seed

##STEP 6: Run seeds for add data to table tables run bellow two commands

php artisan db:seed --class=AccuraMembers
php artisan db:seed --class= DsDivisions



##STEP 7: run the app using php artisan serve

php artisan serve

