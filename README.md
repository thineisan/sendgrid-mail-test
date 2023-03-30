◆ Clone project  
     git clone https://github.com/thineisan/sendgrid-mail-test.git

◆ Install dependencies
    composer install

◆ Do required sendgrid setting in .env file
     MAIL_MAILER=smtp
     # MAIL_DRIVER=smtp # for laravel < 7
     MAIL_HOST=smtp.sendgrid.net
     MAIL_PORT=587
     MAIL_USERNAME=apikey
     MAIL_PASSWORD=<sendgrid_api_key>  
     MAIL_ENCRYPTION=tls
     MAIL_FROM_NAME="test"
     MAIL_FROM_ADDRESS=test@example.com

     SENDGRID_API_KEY=<sendgrid_api_key>

◆ Run project
　  php artisan serve


Create one controller file and one blade file
   ○○ MailController.php
   ○○ mail.blade.php
