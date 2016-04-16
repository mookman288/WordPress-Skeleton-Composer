#WordPress Skeleton Composer
##Based on Mark Jaquith's Work

This skeleton repo for WordPress uses composer rather than submodules. In converting the fork to composer, developers will be 
able to leverage avenues such as wp-packagist in order grab the themes and plugins they need to start. 

###Changes

* WordPress is now loaded through composer using John P. Bloch's work. 
* Content is now stored in `wp-content` in a `public` folder. 
* A private folder is now available for an `.htpasswd` to protect WordPress. 
* `local-config-sample.php`, which can be transformed into `local-config.php` is required for operation. 
* All symlinks have been removed. 

###License

As no license was assigned for Mark's work, I've gone ahead and included the MIT license, which is fair to users. 

###WordPress Packagist

WordPress packagist is now the primary point of contact for grabbing plugins or themes. Plugin and theme downloads, and all 
updates should be handled through composer. 

###Custom Development

Creating custom plugins and themes is super simple with this setup. Git deployments should not overwrite the system, and by 
keeping everything contained, one might be able to leverage task runners, like Gulp, to do a lot of heavy lifting. 

The MIT License (MIT)

Software Copyright © 2016 PxO Ink. Most Rights Reserved.

Permission is hereby granted, free of charge, to any person 
obtaining a copy of this software and associated documentation 
files (the "Software"), to deal in the Software without 
restriction, including without limitation the rights to use, 
copy, modify, merge, publish, distribute, sublicense, and/or 
sell copies of the Software, and to permit persons to whom the 
Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be 
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, 
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF 
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. 
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY 
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, 
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE 
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.