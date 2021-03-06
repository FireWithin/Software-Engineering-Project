## CS[258]

# IITI Leave Processing System

#### Dependencies (Server Side)
1. PHP5
2. Slim 3
3. Monolog
4. Twig
5. PHP Renderer
6. MySQL
7. PHPMailer & SendMail

#### Installation

###### Part - 1: Basics
1. Download the repository and install all the above dependencies for the folder __sep__.
2. Set Document Root of your server to be `sep/src/public/`.

###### Part - 2: Configuring the database
3. Import __fulldb.sql__ found at `sep/src/` in a MySQL database. Name it LMS.
4. Enter your MySQL username and password in the database configuration file. It's named __config.php__ and can be found at sep/src/db_stuff.

###### Part - 3: Configuring the mailer
5. Edit the file mail configuration file located at sep/src/\_mail\_\_. It's also named __config.php__. Fill in your email account details where you wish to send notifications from.

###### Part - 4: Testing the setup
6. There are a few dummy accounts already created to get you started. 
    1. __ADMIN ACCOUNT__ => __username__ : admin@lps.iiti.ac.in, __password__ : admin
    2. __SAMPLE RECOMMENDING AUTHORITY ACCOUNT__ => __username__ : recommender@lps.iiti.ac.in, __password__: recommender
    3. __SAMPLE APPROVING AUTHORITY ACCOUNT__ => __username__ : approver@lps.iiti.ac.in, __password__: approver
    4. __SAMPLE GENERAL USER ACCOUNT__ => __username__ : user@lps.iiti.ac.in, __password__: testuser
