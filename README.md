# FlippyBook  
### Summary:  
Built using the Fullscreen Pageflip Layout from https://tympanus.net/codrops/2012/12/11/fullscreen-pageflip-layout/.  
The intent of this project was to make it easier to create web based pulp novel and comic book readers.    
### Examples:
http://www.wpwebos.com/pulps/?pulp=fbi_detective_stories_v01_n03_1949_06  
http://www.wpwebos.com/pulps/?pulp=the_spirit_1946_01_06
### Instructions:
This builds flip books by using php blob to display a directory's image files, along with creating a Table of Contents.  
The directory to the image files is passed through a URL query string starting on line 18 of the index.php.  
Using the php blob along with the wildcard file types array will only allow supported images within the directory.
   
``<?php``  
`` $pulp = $_GET['pulp'];``  
`` $files = glob("$pulp/*.{jp2,jpg,jpeg,gif,png}", GLOB_BRACE);``  
``?> ``  

On line 30 the TOC starts the incrementation at 2 so the front and back cover can titled manually and prevents the cover from have a title of 0.  

``<?php for ($i=2; $i<count($files); $i++)``  
``{``  
``$num = $files[$i];``  
``echo'<li class=""><a href="#page'.$i.'">Page-'.$i.'</a></li>';``  
``}``  
``?>``
