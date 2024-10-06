# m-dashboard
 
 This project is a simple laravel admin with crud application 

 ### Usage
 ```sh
 php artisan crud:crud {name}
  ```
1.  generate crud application 
2.  include route file to web.php route 

```sh
  require __DIR__.'/dashboard/blog.php';
```

run 
```sh
 http://localhost:8000/dashboard/{name}
```

list  crud command
```sh
 php artisan crud    
```



#### Requirements

```sh
Laravel >= 10.10
PHP >= 8.1
```


#### Installation

Install the dependencies and devDependencies and start the server.
 
```sh
 git clone https://github.com/amalmm/m-dashboard.git
 cd  m-dashboard
 copy .\.env.example .env
 composer install
 npm install
```

#### Configure your .env file
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=db_username
DB_PASSWORD=db_password
```

#### Final steps
```sh
php artisan migrate
php artisan key:generate
http://localhost:8000
```

#### Features
```sh
1.  crud generator
2.  breeze  auth

```
 
### Screenshots:
![dashboard](https://github.com/amalmm/m-dashboard/blob/main/screenshots/image1.png?raw=true) 
