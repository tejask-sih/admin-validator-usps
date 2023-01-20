## Admin Validation Using USPS API Validator


## Installation

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
![](https://peta.siliconithub.com/html/2023/git-image/s13.png)
	
-Adding Data If Second address is blank then add Space only 
![](https://peta.siliconithub.com/html/2023/git-image/s12.png)

-Popup Response Standardize(USPS) Address
![](https://peta.siliconithub.com/html/2023/git-image/s11.png)

-Popup Response Original Address
![](https://peta.siliconithub.com/html/2023/git-image/s10.png)

-Save Standardize Address
![](https://peta.siliconithub.com/html/2023/git-image/s8.png)

-Standardize Save Address error 
![](https://peta.siliconithub.com/html/2023/git-image/s5.png)

-Saving Original Address 
![](https://peta.siliconithub.com/html/2023/git-image/s2.png)

