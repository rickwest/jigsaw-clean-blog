# Jigsaw Clean Blog

Jigsaw Clean Blog, as the name suggests, is a simple [Jigsaw](https://jigsaw.tighten.co/) implementation of the [Startbootstrap Clean Blog theme](https://startbootstrap.com/template-overviews/clean-blog/). See the demo [here](https://jigsaw-clean-blog.netlify.com/).

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

