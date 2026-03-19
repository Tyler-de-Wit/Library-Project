# Instructions On Installing LibraryProject Theme
1. First clone the repository into the "wp-content" folder of a fresh WordPress installation inside of a folder named "wordpress1" (Note the contents of the "uploads" folder is required for full functionality of the theme)
2. Then in phpmyadmin create a new database called "wordpress1" and import the sql file also named "wordpress1" found inside of "themes/libraryproject/sql/wordpress1.sql" to populate the database
3. Now go into the root of the WordPress installation and modify the wp-config.php file to have DB_NAME = "wordpress1" DB_USER = "root" and DB_PASSWORD = ""
4. You can now and only now open the theme in a browser at localhost/wordpress1 

# Important Information For LibraryProject Theme
The icons that appear in the hamburger menu and on the button links on the home page are dynamically inserted into the site from the WordPress uploads folder. These icons should be uploaded from the WordPress media library. With the exception of the home page icon in the main menu and the fallback icon. These icons are stored and pulled from the themes assets folder.

The fallback icon is for when a new post is created and therefore added to menus throughout the site, but an icon isn't uploaded or the icons name is incorrect. It will then display the fallback icon instead of displaying nothing. The naming convention for these icons is the pages name (slug) with -icon on the end. For example, the disability support page’s icon should be called “disability-support-icon.png”

There is no specific formatting required for writing a new article page (post) the only requirements being that h2 should be used for the main articles headings as they are automatically styled with the black background. 

The JS code for the chat box has hardcoded in links to the pages that it directs to. Therefore, if the post names (slugs) ever were to change the link would also have to be updated inside of the chatbox.js file.

The PDF resources on the sitemap page are uploaded to the media library and then connected to the page through the "Sitemap Page PDF Resources" widget. This means new documents can be uploaded or deleted completely from the WordPress dashboard. 
