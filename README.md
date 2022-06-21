

<p> 
<h1> Setup Instruction</h1>
1. Clone the project <br>
2. Go to the folder application using cd command on your cmd or terminal<br>
3. Run composer install on your cmd or terminal<br>
4. Copy .env.example file to .env on the root folder. You can type copy .env.example .env <br>5. if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu<br>
6. Open your .env file and change the database name to attendance  andthe username is root and you can leave the password field empty. <br>
7.Run php artisan key:generate<br>
8.Run php artisan migrate<br>
9.Run php artisan serve<br>
10.Go to localhost:8000<br>

</p>
For Manually create database tables--<br>

database name : attendance <br>
username : root<br>
password : <br>

employees table <br>
CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uniqueId` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

checkins table <br>


CREATE TABLE `checkins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uniqueId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


SQL FIles - employees.sql, checkins.sql in the root folder


## Laravel
