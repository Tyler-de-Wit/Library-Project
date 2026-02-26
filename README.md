# How to use the theme
1. First clone the repository into the "wp-content" folder of a fresh WordPress installation inside of a folder named "wordpress1" (Note the contents of the "uploads" folder is required for full functionality of the theme)
2. Then in phpmyadmin create a new database called "wordpress1" and import the sql file also named "wordpress1" found inside of "themes/libraryproject/sql/wordpress1.sql" to populate the database
3. Now go into the root of the WordPress installation and modify the wp-config.php file to have DB_NAME = "wordpress1" DB_USER = "root" and DB_PASSWORD = ""
4. You can now and only now open the theme in a browser at localhost/wordpress1 
