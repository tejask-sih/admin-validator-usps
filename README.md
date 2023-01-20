# admin-validator-usps


#Installation

1) Clone this git repo  to relevant Webserver 
2) Change the database credentials in “add-data.php” 
   $servername = "localhost";
   $username = "username";
   $password = "password";
   $dbname = "address-validator";
3) Upload the “addresses.sql” into mysql
4) In address-validator.php page , line no .23 add related user_id for accessing USPS api.
   *$endpoint = "https://secure.shippingapis.com/ShippingAPI.dll";
   $user_id = "YOUR_USPS_USER_ID";*
5)Now you can Start the address-validator url in localhost 

