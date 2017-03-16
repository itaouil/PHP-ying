# PHP(ying)

A repo where I play around with PHP's basics as well as its interesting frameworks by revisiting important CS concepts and bulding small apps and interestings projects.

### OOP with PHP

Basic PHP programs illustrating OOP concepts:

1. Objects
2. Classes
  * Constructor
  * Inheritance 
  * Visibility
  * Magic Methods
  * Abstract Classes
  * Static
3. Interfaces
4. Dependency Injection
5. Method Chaining
6. Autoloading (automate loading process)

### PHP Todo List

A simple PHP "To Do" app that makes use of the three tier architecture: Database (sqlite), Logic (PHP serve side) and the GUI (frontend interface).
The php files (for the Logic side) can be explained briefly as follows:

- init.php:  Serves to create a session and connect to the Database (PDO class).
- index.php: Serves the markup (plus style) and fetches from the database the items through database hook imported from init.php.
- add.php:   Collects the data posted by the form ($_POST universal variable used for the purpose) in index.php and stores them in the database by executing a prepared statement.
- mark.php:  Updates the "done" column when the anchor tag's href is fired ($_GET universal variable used for the purpose). 

### PHP Rating System App

This was a simple project on the same wavelenght of the PHP Todo List, where I played again with database connection, page redirection
and how to organise the workflow in the backend. No styling was added as the main purpose was gaining experience in using PHP as the 
server language.
