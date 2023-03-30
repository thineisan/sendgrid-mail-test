# sendgrid mailing

```bash
git clone https://github.com/thineisan/sendgrid-mail-test.git
cd sendgrid-mail-test
composer install
php artisan serve
```

# Do required sendgrid setting in .env file
```bash
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
```


#Create one controller file and one blade file
```bash
   ○○ MailController.php  
   ○○ mail.blade.php
```
