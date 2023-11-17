# drupalgroup

YOUTUBE LINK FOR DRUPAL+MYSQL DOWNLOAD: https://youtu.be/yb3XJuCFv70

Drupal with MySQL Set-Up

**Step 1: Build MySQL Container**

docker run --name <YOUR_DATABASENAME> -e MYSQL_ROOT_PASSWORD=<your_password> -d mysql:latest

**Step 2: Build Drupal Container Linked to MySQL Container**

docker run --name drupal --link <YOUR_DATABASENAME>:mysql -p 8080:80 -e MYSQL_USER=root -e MYSQL_PASSWORD=password -d drupal

**Step 3: Configure Drupal Site**

  a. 
  
  ![](1.png)

  b. 

  ![](2.png)

  c. 

  ![](3.png)


  ![](4.png)

  d.

  ![](5.png)

  e.

  ![](6.png)

  ![](7.png)

**Complete!**
  
  ![](8.png)



Attendance (O = Present, X = Absent, L = Late )

| Date       | Manwinder Paul | Jennifer Kane | Nickole Carranza |
|------------|----------------|---------------|------------------|
| 10-13-2023 | O  | O  | O  |
| 10-18-2023 | O  | X  | O  |
| 10-20-2023 | O  | O  | O  |
| 10-25-2023 | O  | O  | O  |
| 10-27-2023 | O  | O  | O  |
| 11-01-2023 | O  | O | O  |
| 11-03-2023 | O  | O  | O  |
| 11-08-2023 | O  | X  | O  |
| 11-10-2023 | O  | X  | O  |
| 11-15-2023 | O  | O  | O |
| 11-17-2023 | -  | -  | - | -> Demo 1 day
| 11-22-2023 | -  | -  | - |
| 11-29-2023 | -  | -  | - |
| 12-01-2023 | -  | -  | - |
| 12-06-2023 | -  | -  | - |
| 12-08-2023 | -  | -  | - |
| 12-13-2023 | -  | -  | - |
| 12-15-2023 | -  | -  | - |
| 12-18-2023 | -  | -  | - | -> Final 
