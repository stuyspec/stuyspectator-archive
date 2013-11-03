<?php	
				header("Cache-Control: must-revalidate");
				header("Expires: Sat, 20 Jul 2019 09:44:53 GMT");
				?><?php	
				header("Content-type: text/css; charset: UTF-8");
				?>/*
Theme Name:		Cutline 3-Column Right
Theme URI:		http://pearsonified.com
Description:	A squeaky clean, feature-rich theme for WordPress designed and coded by <a href="http://pearsonified.com">Chris Pearson</a>.
Version:		1.1
Author:			Chris Pearson
Author URI:		http://pearsonified.com/
*/

body { background: #fff; color: #333; font: 62.5% Georgia, "Times New Roman", Times, serif; text-align: center; }

* { padding: 0; margin: 0; }



/*---:[ global elements ]:---*/

a { color: #0060ff; text-decoration: underline; }

	a:visited { color: #333; text-decoration: underline; }

	a:hover { color: #df0000; text-decoration: underline; }
	
	a img { border: none; }
	
blockquote { font-style: italic; font-family: Georgia, "Times New Roman", Times, serif; color: #555; margin: 0 30px 1.5em 30px; padding: 0 0 0 10px; border-left: 1px solid #aaa; }

abbr, acronym { border-bottom: 1px dotted #aaa; text-transform: uppercase; cursor: help; }
	
code { color: #090; font-family: Courier, monospace; }

pre { margin: 0 0 1.5em 0; overflow: auto; font-size: 1.3em; clear: both; }

p.center { text-align: center !important; }

p.bottom { margin: 0 !important; }

p.unstyled { font-size: 1.4em; }

.flickr_blue { color: #007ae4; text-transform: lowercase; }

.flickr_pink { color: #ff2a96; text-transform: lowercase; }

.green { color: #090; }

.red { color: #f00; }

.orange { color: #f40; }

.purple { color: #909; }



/*---:[ headlines ]:---*/

h1, h2, h3, h5 { font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: #000; }

h1 { font-size: 3.6em; letter-spacing: -0.03em; }

	#masthead h1 { padding: 0.4em 0 0.2em 0; border-top: 1px solid #ccc; text-align: center; clear: both; }
	
	h1 a, h1 a:visited, h1 a:hover { color: #000; text-decoration: none; }

	#frontpage h1 { font-size:3.0em; text-transform:uppercase; background-color:#F0F4F5; text-align:right;}
	#frontpage #leftcore h1 { background-color:#FFF; }
	#frontpage #rightcore h1 { background-color:#FFF; }
	
	h1 .department { font-size:3.0em; text-transform:uppercase !important; background-color:#CCFFFF !important; text-align:right !important;}
	
	
/*	#frontpage #primary h1 a {color:#FF6A70;}*/
	
	
h2 { font-size: 2.0em; }

	h2 a { color: #000; text-decoration: none; }
	
		h2 a:visited { color: #555; text-decoration: none; }
	
		h2 a:hover { color: #090; text-decoration: none; }
	
	#frontpage h2 a, h2 a:visited,h2 a:hover { color:#333333; }
	
	.posts h2 { margin: 0 0 0.1em 0; line-height: 1.2em; }
	
	.pages h2, h2.page_header { margin: 0 0 0.75em 0; padding: 0 0 0.6em 0; background: url(/wp-content/themes/Cutline 1.1-3ColumnRight/images/hr_title_sep.gif) 0 100% no-repeat; }
	
	h2.archive_head { font-weight: bold !important; font-size: 1.4em !important; text-transform: uppercase !important; letter-spacing: normal !important; margin: 0 0 1.8em 0 !important; padding: 0.4em 2px !important; border-top: 3px solid #000 !important; background: url(/wp-content/themes/Cutline 1.1-3ColumnRight/images/hr_dot_black.gif) 0 100% repeat-x !important; }

h3 { font-size: 1.0em; text-transform: uppercase; }

	#masthead h3 { margin: 0 0 0.75em 0; font-weight: normal; font-size: 1.8em; text-transform: none; color: #888; text-align: center; }

	.entry h3 { margin: 2.5em 0 0.5em 0; }
	
	.entry h3.top { margin: 1.5em 0 0.5em 0 !important; }
	
	h3.comments_headers { font-size: 1.4em; }

h4 { font: italic 1.2em Georgia, "Times New Roman", Times, serif; color: #888; }

	h4 a, h4 a:visited { color: #888; text-decoration: none; }
	
		h4 a:hover { color: #888; text-decoration: underline; }
	
	.posts h4 { margin: 0 0 1.25em 0; padding: 0 0 1.0em 0; background: url(/wp-content/themes/Cutline 1.1-3ColumnRight/images/hr_title_sep.gif) 0 100% no-repeat; }

h5 { font-size: 1.6em; }

	h5 a { color: #000; text-decoration: none; }
	
		h5 a:visited { color: #555; text-decoration: none; }
	
		h5 a:hover { color: #090; text-decoration: none; }
	
	#frontpage h5 a, h5 a:visited,h5 a:hover { color:#333333; }
	
	.posts h5 { margin: 0 0 0.1em 0; line-height: 1.2em; }
	
	.pages h5, h5.page_header { margin: 0 0 0.75em 0; padding: 0 0 0.6em 0; background: url(/wp-content/themes/Cutline 1.1-3ColumnRight/images/hr_title_sep.gif) 0 100% no-repeat; }
	
	h5.archive_head { font-weight: bold !important; font-size: 1.4em !important; text-transform: uppercase !important; letter-spacing: normal !important; margin: 0 0 1.8em 0 !important; padding: 0.4em 2px !important; border-top: 3px solid #000 !important; background: url(/wp-content/themes/Cutline 1.1-3ColumnRight/images/hr_dot_black.gif) 0 100% repeat-x !important; }

	
	
/*---:[ core layout elements ]:---*/

#container { width: 970px; margin: 15px auto 0 auto; }
					
	#content_box { width: 970px; text-align: left; float: left; clear: both; }
	
		#content_front { width: 413px; padding-left:8px; margin-top:8px; border-left: solid 1px #000; float: left; }
		#content { width: 500px; padding: 8px 20px 0 0; float: left; }
		
		#main_post_text {  }
		#main_post_image { float:right; padding-top:8px; padding-right:8px; padding-bottom:8px; }
		
		#sidecore { width:436px; margin-top:8px; float: right; }
		#leftcore { width:205px; float:left; padding-left:8px; padding-right:8px; border-left: solid 1px #000; }
		#rightcore { width:205px; float:right; padding-left:8px; border-left: solid 1px #000; }
		
		#minicore { padding-bottom:20px; border-bottom: solid 1px #000; }

		#related { width: 500px; padding: 8px 0 0 0px; float: left; }
		
		#sidebar { width: 104px; padding: 0 0 0 0px; margin-top:8px; margin-right: 8px; float: left; }
		#sidebar2 { width: 210px; padding: 8px 0 0 15px; float: left; }
		
		#morecontent { width: 820px; margin-left: 120px; position:absolute; top:650px; text-align:left; }
		
		#morecontent ul { list-style:none; margin:0; padding:0; }
		#morecontent ul li { float:left; padding-left:15px; border-left:1px #000 solid; width:185px; }
		
		#evenmore { width: 820px; margin-left: 120px; position:absolute; top:950px;  text-align:left; font-size: 1.2em; }
		
	#footer { width: 970px; padding: 1.2em 0 0 0; border-top: 2px solid #ccc; float: left; clear: both; }
		
/*---:[ header styles ]:---*/

#masthead { width: 970px; /*height: 100px; background: url(/wp-content/themes/Cutline 1.1-3ColumnRight/images/logo.gif) no-repeat;*/ /* uncomment the height and background declarations here if you intend to use a graphic in the header instead of the h1 */ }

	/* #masthead a { display: block; width: 970px; height: 100px; } */ /* uncomment this line if you use a graphic in the header - make sure the height of your header graphic is equal to the height declared in this line of code! */

ul#nav { list-style: none; width: 950px; padding: 0 10px; background: url(/wp-content/themes/Cutline 1.1-3ColumnRight/images/hr_dot_black.gif) repeat-x; border-bottom: 3px solid #000; float: left; clear: both; }

	ul#nav li { padding: 0.85em 40px 0.7em 0; font: bold 1.4em Helvetica, Arial, sans-serif; text-transform: uppercase; float: left; }
	
		ul#nav li a, ul#nav li a:visited { color: #000; text-decoration: none; }
	
		ul#nav li a:hover { color: #000; text-decoration: underline; }
		
		ul#nav li a.current, ul#nav li a.current:visited, ul#nav li a.current:hover { color: #090; text-decoration: underline; }
		
	ul#nav li.rss { padding: 0.85em 0 0.7em 0; float: right; }
			
		ul#nav li.rss a { padding: 0 18px 0 0; background: url(/wp-content/themes/Cutline 1.1-3ColumnRight/images/icon_rss.gif) 100% 50% no-repeat; }
			
#header_img { position: relative; margin: 0 0 3.0em 0; border-bottom: 1px solid #000; float: left; clear: both; }

	#header_img img { display: block; } /* this is really just an IE 6 and 7 hack in disguise */



/*---:[ content styles ]:---*/

#frontpage .entry { font-size: 1.2em; line-height: 1.5em; }

.entry { font-size: 1.4em; line-height: 1.65em; }
		
	.entry blockquote { font-size: 1.0em; }
	
		.entry blockquote.right { width: 200px; font-style: normal !important; font-size: 1.3em !important; margin: 0.3em 0 0.3em 15px !important; padding: 0.3em 0 !important; border: 3px double #aaa; border-width: 3px 0; text-align: center; float: right; }
		
		.entry blockquote.left { width: 200px; font-style: normal !important; font-size: 1.3em !important; margin: 0.3em 15px 0.3em 0 !important; padding: 0.3em 0 !important; border: 3px double #aaa; border-width: 3px 0; text-align: center; float: left; }
	
			.entry blockquote.right p, .entry blockquote.left p { margin: 0 !important; line-height: 1.4em !important; }
	
	.entry p { margin: 0 0 1.5em 0; }

	.entry ul, .entry ol { margin: 0 0 1.5em 40px; }
	
	.entry ul { list-style-type: square; }
	
		.entry li { margin: 0 0 0.5em 0; }
		
			.entry ul li ul, .entry ul li ol, .entry ol li ul, .entry ol li ol { margin: 0.5em 0 0.5em 30px; }
	
	.entry dl { margin: 0 0 1.5em 0; }
			
		.entry dt { font-weight: bold; margin: 0 0 0.5em 0; }
		
		.entry dd { margin: 0 0 1.5em 20px; }
		
	.entry .ad { margin: 0 0 0.5em 15px; float: right; }
	
	.entry .ad_left { margin: 0 15px 0.5em 0; float: left; }

	.entry img { }

		.entry img.left { padding: 3px; margin: 0.5em 15px 0.5em 0; border: 3px double #bbb; float: left; clear: left; }
		
		.entry img.right { padding: 3px; margin: 0.5em 0 0.5em 15px; border: 3px double #bbb; float: right; clear: right; }
		
		.entry img.center { display: block; padding: 3px; margin: 0 auto 1.5em auto; border: 3px double #bbb; float: none; clear: both; }
	
		.entry img.off { padding: 0 !important; border: none !important; }
		
		.entry img.stack { clear: none !important; }

.tagged { padding: 0.4em 0 0 0; background: url(/wp-content/themes/Cutline 1.1-3ColumnRight/images/hr_tag_sep.gif) no-repeat; font-size: 1.2em; line-height: 1.6em; color: #888; clear: both; }

	.tagged a, .tagged a:visited { padding: 0.25em; color: #333; text-decoration: none; }
	
		.tagged a:hover { color: #fff; background: #333; text-decoration: none; }
	
	.add_comment { display: block; padding: 0 0 0 20px; font-weight: bold; float: right; }

.navigation { width: 500px; font-size: 1.9em; float: left; }
	
	.previous { padding: 0 20px 0 0; float: left; }
	
	.next { float: right; }

.clear { width: 500px; height: 1px; margin: 0 0 5.0em 0; clear: both; }
.small_clear { width: 500px; height: 1px; margin: 0 0 1.0em 0; clear: both; }

.rule { background: url(/wp-content/themes/Cutline 1.1-3ColumnRight/images/hr_tag_sep.gif) no-repeat; }

.flat { margin: 0 0 2.0em 0 !important; }

.whitespace { margin: 0 0 3.5em 0 !important; }



/*---:[ sidebar styles ]:---*/

ul.sidebar_list, ul.sidebar2_list, ul.related_list { list-style: none; }

	ul.related_list li.widget, ul.related_list li.linkcat { width: 500px; margin: 0 0 2.5em 0; font-size: 1.3em; line-height: 1.4em; float: left; }
	ul.sidebar_list li.widget, ul.sidebar_list li.linkcat { width: 104px; margin: 0 0 0.5em 0; font-size: 1.2em; float: left; }
	ul.sidebar2_list li.widget, ul.sidebaro2_list li.linkcat { width: 210px; margin: 0 0 2.5em 0; font-size: 1.3em; line-height: 1.4em; float: left; }

		li.widget h2, li.linkcat h2 { font-weight: bold; font-size: 1.077em; text-transform: uppercase; letter-spacing: normal; margin: 0 0 0.8em 0; padding: 0.4em 2px; border-top: 3px solid #000; background: url(/wp-content/themes/Cutline 1.1-3ColumnRight/images/hr_dot_black.gif) 0 100% repeat-x; }

		li.widget p { margin: 0 0 1.5em 0; padding: 0 10px; }
		
		li.widget ul, li.linkcat ul { list-style: square; margin: 0 0 0.5em 20px; }
		
		li.widget ol, li.linkcat ol { margin: 0 0 0.5em 20px; }
		
			li.widget li, li.linkcat li { margin: 0 0 0.7em 0; }
			
				li.widget li a, li.widget li a:visited, li.linkcat li a, li.linkcat li a:visited { text-decoration: none; }
				
					li.widget li a:hover, li.linkcat li a:hover { text-decoration: underline; }
			
				li.widget li .recent_date { padding: 0 0 0 8px; font-weight: bold; color: #888; }
		
		li.widget ul.flickr_stream { list-style: none; margin: 0; padding: 0 10px; }
		
			li.widget ul.flickr_stream li { margin: 0; padding: 0 5px 5px 0; display: inline; }
			
				li.widget ul.flickr_stream li a img { padding: 3px; }
				
				li.widget ul.flickr_stream li a:hover img { background: #ff2a96; }
		
			/*---< FlickrRSS styles for the widget only >---*/
		
			li.widget_flickrrss { }
			
				li.widget_flickrrss a img { margin: 0 5px 5px 0; padding: 3px; }
				
				li.widget_flickrrss a:hover img { background: #ff2a96; }
				
		/*---< Calendar widget styles >---*/
		
		#calendar_wrap { font-size: 1.3em; }
				


/*---:[ footer styles ]:---*/

#footer p { margin: 0 0 0.923em 0; font-size: 1.3em; color: #888; text-align: right; }

	#footer a, #footer a:visited { color: #888; text-decoration: none; }
		
		#footer a:hover { color: #888; text-decoration: underline; }



/*---:[ comment styles ]:---*/

#comments { width: 500px; float: left; clear: both; }

	ul#comment_list { list-style: none; margin: 0 0 4.0em 0; border-top: 1px solid #bbb; float: left; }
		
		ul#comment_list li.comment { width: 500px; padding: 1.2em 0 0 0; border-bottom: 1px dotted #bbb; float: left; }
			
		ul#comment_list li.trackback { width: 470px; padding: 1.2em 15px 0 15px; background: url(/wp-content/themes/Cutline 1.1-3ColumnRight/images/trackback_bg.gif); }
				
			.comment_meta { margin: 0 0 1.2em 0; }
			
				.comment_num { padding: 0 15px 0 20px; font-weight: bold; font-size: 1.4em; float: right; }
				
				.trackback .comment_num { padding: 0 0 0 20px; }
				
					.comment_num a, .comment_num a:visited { color: #888; text-decoration: none; }
					
						.comment_num a:hover { color: #df0000; text-decoration: none; }
				
				.comment_meta strong { font-size: 1.6em; }
					
				.comment_time { font: normal 1.1em Verdana, Helvetica, Arial, sans-serif; color: #888; }
		
			.comment .entry { padding: 0 15px; }
			
				.comment .entry p { margin: 0 0 1.0em 0; }
			


/*---:[ comment form styles ]:---*/

#comment_form { width: 500px; padding: 1.0em 0 0 0; float: left; }

	#comment_form p { padding: 0.6em 0; }
	
		#comment_form label { padding: 0 0 0 10px; font-size: 1.2em; }

		#comment_form .text_input { width: 191px; padding: 3px; color: #444; font: normal 1.4em Georgia, "Times New Roman", Times, serif; border-top: 2px solid #999; border-left: 2px solid #999; border-right: 1px solid #fff; border-bottom: 1px solid #fff; }
		
		#comment_form .text_area { width: 321px !important; }
	
			#comment_form .text_input:focus { border-top: 2px solid #666; border-left: 2px solid #666; border-right: 1px solid #ddd; border-bottom: 1px solid #ddd; }
	
		#comment_form .form_submit { padding: 0.4em 4px; background: url(/wp-content/themes/Cutline 1.1-3ColumnRight/images/submit_bg.gif); border: 3px double #999; border-top-color: #ccc; border-left-color: #ccc; font: bold 1.4em Georgia, "Times New Roman", Times, serif; cursor: pointer; }
		
		#comment_form p.subscribe-to-comments { font-size: 1.4em; }
		
			#comment_form p.subscribe-to-comments label { font-size: 1.0em; }
			


/*---:[ search form styles ]:---*/

#search_form { }

	#search_form .search_input { width: 180px; padding: 1px; color: #090; font: normal 1.0em Georgia, "Times New Roman", Times, serif; border-top: 1px solid #999; border-left: 1px solid #999; border-right: 1px solid #f5f5f5; border-bottom: 1px solid #f5f5f5; }
	
	li.widget .search_input { font-size: 1.1em !important; }
	
		#search_form .search_input:focus { border-top: 1px solid #666; border-left: 1px solid #666; border-right: 1px solid #ddd; border-bottom: 1px solid #ddd; }
/*
	custom.css � custom styles for Cutline that YOU define
	------------------------------------------------------
	
	This stylesheet will allow you to futureproof your
	changes against future releases and upgrades. I know
	you work hard on your modified styles, and I don't
	want you to feel like every upgrade is a total drag!
	
	Instructions:
	
	Modifying existing Cutline styles to your liking is a
	breeze with this handy stylesheet. The <body> tag
	within the header.php file has been appended with a
	CSS class called "custom," and thanks to this, you now
	have the ability to override ANY style that's declared
	in the original Cutline stylesheet.
	
	In practice, you simply need to copy the CSS for the
	element that you want to change (from style.css) and
	then paste it here. Prefix the new CSS declaration
	with .custom, and then make your tweaks as necessary.
	
	Here's an example:
	
	To change the default color of unvisited links from 
	blue to red (#c00) and remove the default underline, 
	this is what you would do:
	
	.custom a { color: #c00; text-decoration: none; }
	
	Cool? Now get to hackin!
*/
a.silent {
    padding : 1px 20px 1px 2px; 
    background: transparent url(/wp-content/plugins/mp3inline/images/phones.gif) no-repeat center right; 
    white-space: nowrap !important;
}

a.playing {
    text-decoration : none ! important; 
    background: transparent url(/wp-content/plugins/mp3inline/images/aniphones.gif) no-repeat center right;

    vertical-align : top; 
    color : #000 ! important; 
    background-color : #ccc ! important; 
    padding : 1px 20px 1px 2px;
    border-style : solid; 
    border-color: #000000; 
    border-width : 1px 1px 1px 1px;
    white-space: nowrap !important;
}

#slider { 
    z-index : 10; 
    cursor:pointer; 
}

#handle1 { 
    z-index : 9;
    position : absolute;
    width:28px; 
    color:#000;
    background-color:#ccc; 
    font-size:10px; 
    font-weight : bold; 
    text-align:center; 
    cursor:pointer; 
    border-style : solid; 
    border-color: #000000; 
    border-width : 1px 1px 0px 1px; 
}

