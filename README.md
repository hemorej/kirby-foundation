Solaria : A Foundation 5 theme for Kirby
================

Using the Foundation framework to build a theme for the awesome Kirby CMS

Kirby is a file-based CMS written by Bastian Allgeier, you can read more about it here <http://getkirby.com>
Here are some installation notes from Kirby, check the website for more details.

## Installing Kirby

### Buy

Though Kirby's source code is available on Github: <http://github.com/bastianallgeier/kirbycms>, you must purchase a license per website. It's well worth the investment, so please go get a [license](http://getkirby.com/buy).


### Installation

Installing Kirby couldn't be simpler. Just connect to your FTP-Server and upload all files contained in the Kirby package to the document root of your server – done!

Visit <http://yourdomain.com> (you should probably replace the domain with your url :)) and take a look at your brand new, Kirby-flavoured site.


### Adding your license code

After you've purchased a license for Kirby, please add your license code to `site/config/config.php`:

    c::set('license', 'put your license code here');


### URL Rewriting

If you are not allowed to have your own `.htaccess` file or to use mod_rewrite, go to `site/config/config.php` and search for the part where you can switch off url rewriting. 

## Installing the theme

### Kirby part

Download the files or clone the repo and, using an FTP client, upload them under the root kirby directory. The assets are already compiled so you should be good to go from there. 

### Foundation part

If you want to customize the theme, you'll need the foundation directory and the following dependencies installed

- [Node.js](http://nodejs.org/download/)
- Bower (npm install -g bower grunt-cli)
- [Ruby 1.9+](https://www.ruby-lang.org/en/downloads/)
- Compass (gem install compass)

Almost there ! Then you can watch with compass, as you change the SCSS files. 

    cd foundation
    bower update (_only needed on first setup_)
    compass watch

I've updated the `config.rb` file from Foundation to have it compile right into the Kirby assets, so no additional configuration required :)

### Customizing Foundation

The quickest and easiest way to modify Foundation to your liking is in the `_global.scss` file, where they define the (you got it) global SCSS variables like primary and secondary colors, font-family, the base font size and the media query ranges. 
Foundation is pretty big and odds are you won't be needing everything it offers for your website, you can choose which modules to load by commenting/uncommenting @import statement in `foundation.scss`
Everything is very well documented in detail over at [Foundation](http://foundation.zurb.com/docs/)