# README.md #

I will use this file to build the sample requests

This will list all records that are currently existing within the document structure
GET http://localhost:8080/NLProcessing/web/index.php/spamdetector/spamdetector/

Returns the user with the id number 1
GET http://localhost:8080/NLProcessing/web/index.php/spamdetector/spamdetector/view?id=1

Will report the model with the id passed over
GET http://localhost:8080/NLProcessing/web/index.php/spamdetector/spamdetector/report?id=1

Here we create a new record, just because we can
PUT http://localhost:8080/NLProcessing/web/index.php/spamdetector/spamdetector/create
?subject=Test
&from=myworld@frenzel.net
&body=This is wonderfull content
&class=ham