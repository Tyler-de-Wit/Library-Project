# Instructions On Installing LibraryProject Theme
1. First clone the repository into the "wp-content" folder of a fresh WordPress installation inside of a folder named "wordpress1" (Note the contents of the "uploads" folder is required for full functionality of the theme)
2. Then in phpmyadmin create a new database called "wordpress1" and import the sql file also named "wordpress1" found inside of "themes/libraryproject/sql/wordpress1.sql" to populate the database
3. Now go into the root of the WordPress installation and modify the wp-config.php file to have DB_NAME = "wordpress1" DB_USER = "root" and DB_PASSWORD = ""
4. You can now and only now open the theme in a browser at localhost/wordpress1 
5. To access the WordPress admin pannel the username is "wordpress1" and the password is "password"

# Important Information For LibraryProject Theme
## Icons
The icons that appear in the hamburger menu and on the button links on the home page are dynamically inserted into the site from the WordPress uploads folder. These icons should be uploaded from the WordPress media library. With the exception of the home page icon in the main menu and the fallback icon. These icons are stored and pulled from the themes assets folder.

The fallback icon is for when a new post is created and therefore added to menus throughout the site, but an icon isn't uploaded or the icons name is incorrect. It will then display the fallback icon instead of displaying nothing. The naming convention for these icons is the pages name (slug) with -icon on the end. For example, the disability support page’s icon should be called “disability-support-icon.png”

## Creating New Posts
There is no specific formatting required for writing a new article page (post) the only requirements being that h2 should be used for the main articles headings as they are automatically styled with the black background. 

## Chatbox
The JS code for the chat box uses a JSON file to create its automatic responses. This JSON file has the pages title, pages link (href), and the pages queries which is what the program searches though to see if it can match a page to the user input. Therefore, if the pages title, the page queries and especially the pages link (otherwise the links will break) were to change then they need to be updated inside of the JSON file to reflect the new changes. 

If anything is ever updated in the JSON file or new pages are added to the file make sure that the “other” entry is always the last object, so its conditions are tested for last in the loop. This “other” page represents the “sorry we can’t find a page to match your query” response so its important that it is checked for last out of all the pages. 

## Uploading PDF's
The PDF resources on the sitemap page are uploaded to the media library and then connected to the page through the "Sitemap Page PDF Resources" widget. This means new documents can be uploaded or deleted completely from the WordPress dashboard. 
