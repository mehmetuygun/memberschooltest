# MemberSchoolTest
  The MemberSchoolTest is very small app. I build it because this is requested from me to job interview. There are member, and school field. You can create, edit, and remove member/school. The school can be attached to member.
 
# Instaliton
  Open the directory in command line which you want to create app under.
  
  Run the following command to install git repository.
  ```
  git clone https://github.com/mehmetuygun/memberschooltest
  ```
  Run the following command to generate unique key for app
  ```
  php artisan key:generate
  ```
  Open the .env.example file to configure database
  
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
  When you have configured database setting. You should run the following command to create database tables.
  ```
  php artisan migrate
  ```
  
