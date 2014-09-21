Yii2 Sample Implementation on PHP-NLP-TOOLS.COM
===============================================

This application is build as a sample port for the usage on email classification for 
spam or ham based upon the post which can be found here:

http://php-nlp-tools.com/blog/category/spam-detection-service/

The service is build as an RESTservice and has been put into a module called spamdetector.

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      modules/            contains modules classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources
      data/               contains sqlite database of the application



REQUIREMENTS
------------

The minimum requirement by this application template that your Web server supports PHP 5.4.0.


CONFIGURATION
-------------

As it works with an sqlite database, it should work out fine like out of the box