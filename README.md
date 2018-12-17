# FlippyBook
Built using the Fullscreen Pageflip Layout from https://tympanus.net/codrops/2012/12/11/fullscreen-pageflip-layout/.  
This builds flip books by using php blob to display a directorie's image files, along with creating a Table of Contents.  
### Examples:
http://www.wpwebos.com/pulps/?pulp=fbi_detective_stories_v01_n03_1949_06  
http://www.wpwebos.com/pulps/?pulp=the_spirit_1946_01_06
### Instructions:  
The directory to the image files is passed through a URL query string starting on line 18 of the index.php.  
Using the php blob along with the wildcard supported image types will only allow supported images.  
   
``<?php``  
>`` $pulp = $_GET['pulp'];``  
>`` $files = glob("$pulp/*.{jp2,jpg,jpeg,gif,png}", GLOB_BRACE);``  
``?> ``
