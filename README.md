# laravel_article_system_project


# Installation
- install XAMPP (PHP 8.1.12)
- add all file to \xampp\htdocs
- start Apache and MySQL in XAMPP control panel
- create a database called meczyki
- import file meczyki.sql to database

# Use
- open http://localhost/Article_system/public/
- In the menu you can choose to display or add articles

# Endpoints
1. Get article by some id:
  http://localhost/Article_system/public/api/article/findbyid/{id}
2. Get all articles for given author:
  http://localhost/Article_system/public/api/article/findbyauthorid/{author_id}
3.  Get top 3 authors that wrote the most articles last week.
  http://localhost/Article_system/public/api/article/gettop3
  
