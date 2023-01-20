## admin-validator-usps


##Installation

- Clone this git repo  to relevant Webserver 
- Change the database credentials in “add-data.php” 
   > $servername = "localhost";
   > $username = "username";
   > $password = "password";
   > $dbname = "address-validator";
-  Upload the “addresses.sql” into mysql
-  In address-validator.php page , line no .23 add related user_id for accessing USPS api.
   > * $user_id = "YOUR_USPS_USER_ID";*
- Now you can Start the address-validator url in localhost 

