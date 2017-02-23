# MemberSchoolTest
  The MemberSchoolTest is very small app. I build it because this is requested from me to job interview. There are member, and school field. You can create, edit, and remove member/school. The school can be attached to member.
 
# Instaliton
  Open the directory in command line which you want to create app under.
  
  Run the following command to install git repository.
  ```
  git clone https://github.com/mehmetuygun/memberschooltest
  ```
  Run the following command to install vendors and set autoload if you have no composer installed your computer, please check https://getcomposer.org to see how to install.
  ```
  composer update
  ```
  Open the .env.example file to configure database. Do not forget to after changed you should save as this file as .env 
  
  ```php
  APP_ENV=local
  APP_KEY=
  APP_DEBUG=true
  APP_LOG_LEVEL=debug
  APP_URL=http://localhost

  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  
  // Change database name for yourself
  DB_DATABASE=homestead
  // Change database user name for yourself
  DB_USERNAME=homestead
  // Change database user password for yourself
  DB_PASSWORD=secret

  BROADCAST_DRIVER=log
  CACHE_DRIVER=file
  SESSION_DRIVER=file
  QUEUE_DRIVER=sync

  REDIS_HOST=127.0.0.1
  REDIS_PASSWORD=null
  REDIS_PORT=6379

  MAIL_DRIVER=smtp
  MAIL_HOST=mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=null
  MAIL_PASSWORD=null
  MAIL_ENCRYPTION=null

  PUSHER_APP_ID=
  PUSHER_APP_KEY=
  PUSHER_APP_SECRET=
  ```
  
  Run the following command to generate unique key for app after saved .env file. You should run this commands under memberschool/ . Go to this     directory in command line before running commands.
  ```
  php artisan key:generate
  ```
  When you have configured database setting. You should run the following command to create database tables.
  ```
  php artisan migrate
  ```
  The app is all set. You can reach it in your browser. 
