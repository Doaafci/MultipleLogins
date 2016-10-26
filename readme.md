## Multiple Logins

Multiple Logins is a web application built with the php framework Laravel 5.The User  in This  Application  is allowed to SignUp with different  roles (Orchestra Officer , Musician),SignIn by one of his roles at the time and also con Reset the account password.


## Installation

  1- Clone the repo: git clone https://github.com/Doaafci/MultipleLogins.git

  2- Install composer 

  3- Install Laravel: composer install --prefer-dist

  4- Change your database settings in .env

  5- Migrate your database: php artisan migrate

  6- Seed your database: php artisan db:seed

## TestCase
 
 1- Sign Up with One of roles (e.g. Orchestra)
 
 2- Check The Email Address that you signed up with for the confirmation link. the confirmation link will lead you to sign in to your            account.
 
 3-If you have an account with more than one role, you will select one of them to continue with your account.
 
 4- Logout to sign in with a different role.
 
 5- Use forget password password method with your Email address and check it for the Reset password link.
