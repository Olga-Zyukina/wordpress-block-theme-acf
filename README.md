# WordPress Block Theme
WordPress Block Theme + ACF
Edu Learn – demo site for  **ACF and WordPress**.
The website synchronizes the submission of requests to the Hollihop CRM using the Hollihop 2.0 API.
![WordPress Logo](https://upload.wikimedia.org/wikipedia/commons/2/20/WordPress_logo.svg)

## Features

- Block Theme
- Multi-page website
- Front-Page
- Page Courses        - Filter courses using ajax requests
- Page Teachers
- Page Pricing 
- Page Request        - Sending requests to CRM Hollihop
- Adaptive design

## Technologies used

-  [Figma Make](https://www.figma.com/make/YRfgCnC3zbzryCHgaKzfnR/Adaptive-multipage-website-design?p=f&t=V2wKA8EmDBVlrn0u-0) (creating a website prototype )
-  CMS WordPress
-  HTML
-  CSS3
-  JavaScript
-  PHP
-  ACF PRO plugin
-  Icon Block plugin

## Live Demo

Check out the live demo: [EduLearn](http://bloger80ma.temp.swtest.ru)

## Project Structure

```
wordpress-theme-vue/
├─ acf-json/          - ACF JSON local sync files
├─ assets/            - image, css, js
├─ data-imoprt-xml/   - Wordpress import files
├─ inc/               - ACF blocks and Wordpress patterns
├─ parts/
├─ template-parts/
├─ templates/
├─ functions.php
├─ style.css
└─ theme.json
```

## Installation & Setup

### Requirements

A WordPress site with:
- ACF PRO plugin installed and activated
- Icon Block plugin - some icons are used in the display templates in the block theme, but they should fail gracefully if you choose not to install this plugin.
- [API Hollihop 2.0](https://hollipedia.t8s.ru/books/api)

### Setup

> [!TIP]
>Download a .zip of the repo's theme, unzip them and drop in your site.

Make sure you have either ACF PRO installed and activated.

When ACF or ACF PRO is activated, sync the ACF JSON sync files for the following data types:

- **Post Type**: Courses - A unique post type for courses.
- **Post Type**: Teachers - A unique post type for teachers.
- **Taxonomy**: Course categories - This custom taxonomy is assigned to the Courses post type to assign a categories to each course. Examples: Business, Conversation.
- **Taxonomy**: Levels - This custom taxonomy is assigned to the Courses post type to assign a level to each course. Examples: Beginner, Intermediate.
- **Field group**: Сourse details - These are the additional details that we want to add to each course post type.
- **Field group**: Teacher info - These are the additional details that we want to add to each teacher post type.

Import WordPress pages using the WordPress import tool and the file /data-imoprt-xml/import.xml.
Set up the menu and select the website logo.


<div><img src="https://github.com/Olga-Zyukina/wordpress-block-theme-acf/blob/master/Frontpage.png" title="wordpress-block-theme-acf" alt="wordpress-block-theme-acf"/></div>
