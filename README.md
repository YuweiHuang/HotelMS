Hotel Management System 宾馆管理系统
=======================

>This is a management system for large hotel company built on software practice course design. We use well-known MVC framework Yii and develop the system based on PHP5.

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Clone 

Add my repository as master and git fetch to your local repository.

### Test

<code>php yii serve</code>

If you fetch my data successfully, you will see our index page when you visit "localhost:8080" on your laptop.


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources

CORPORATION
-------------

### Architechture, Management

- Yuwei Huang

### Views

- Wei Wei
- Dao Zhou

### Models

- Yuwei Huang 
- Dao Zhou

### Logic Controler

- Dao Zhou
- Xinyu Zhao 

