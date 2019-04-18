# Jigsaw Clean Blog

Jigsaw Clean Blog, as the name suggests, is a simple [Jigsaw](https://jigsaw.tighten.co/) implementation of the [Startbootstrap Clean Blog theme](https://startbootstrap.com/template-overviews/clean-blog/). See the demo [here](https://jigsaw-clean-blog.netlify.com/).

![Jigsaw Clean Blog Screenshot](./screenshot.png?raw=true "Jigsaw Clean Blog")

### System Requirements
To use Jigsaw, you need to have PHP 7 and Composer installed on your machine. You'll also need Node.js, NPM and Yarn installed in order to use Laravel Mix to compile the CSS and Javascript.

### Getting Started
To get started simply clone the repo by running the following command:

``` git clone https://github.com/rickwest/jigsaw-clean-blog.git ```
 
Install the dependencies using Composer and Yarn:
``` composer install ```  and ``` yarn install ```

Once all the dependencies are installed, you can generate your site by running Jigsaw's build command from within your project root:

``` ./vendor/bin/jigsaw build ```

Now you can serve the site using PHP ``` ./vendor/bin/jigsaw serve ``` or alternatively, using Browsersync ``` yarn run watch ```

For more help getting started, you can find Jigsaws awesome documentation [here](https://jigsaw.tighten.co/docs/building-and-previewing/).


### Customising your site config
Anything you add to the array in ```config.php``` will be made available in all of your templates, as a property of the ```$page``` object.

This project uses some of these site variables in several of the templates, for example, the ```siteName``` is used in both the header and footer.

Quickly customise your site by adding your site name, email address and social media profiles ```in config.php```.


### Adding Posts
You can get started adding content to your blog by renaming and modifying the content of ```demo-post.md``` in the ```_posts``` directory.

Alternatively, you can simply delete ```demo-post.md``` and create a new markdown file following the structure below:
```markdown

---
extends: _layouts.post
image: /assets/images/post-bg.jpg
title: post title
subtitle: post subtitle
date: 2018-09-09
section: content
---

Add your awesome content here!

```

### Adding and Editing Pages
Get started by editing the 'about' page, that comes with this project. Open up ```about.blade.php``` that's in the ```_source``` folder and add some interesting info about yourself!

Adding a new page to your site is as simple as creating a new blade template in the ```_source``` directory.

Jigsaw gives you access to all the templating features and control structures of Blade that are available in Laravel.

The comprehensive, official blade documentation is available [here](https://laravel.com/docs/5.6/blade). 


### Deploy to Netlify

[![Deploy to Netlify](https://www.netlify.com/img/deploy/button.svg)](https://app.netlify.com/start/deploy?repository=https://github.com/rickwest/jigsaw-clean-blog)

