<?php

class __Mustache_c2f91290b2cacee35d66f12a1c68fe41 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $value = $this->resolveValue($context->findDot('output.get_css_moove'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $value = $this->resolveValue($context->findDot('output.doctype'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '<html ';
        $value = $this->resolveValue($context->findDot('output.htmlattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '	<title>';
        $value = $this->resolveValue($context->findDot('output.page_title'), $context);
        $buffer .= $value;
        $buffer .= '</title>
';
        $buffer .= $indent . '	<link rel="shortcut icon" href="';
        $value = $this->resolveValue($context->findDot('output.favicon'), $context);
        $buffer .= $value;
        $buffer .= '" />
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	';
        $value = $this->resolveValue($context->findDot('output.standard_head_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<meta charset="utf-8">
';
        $buffer .= $indent . '	<meta http-equiv="X-UA-Compatible" content="IE=edge">
';
        $buffer .= $indent . '	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <style type="text/css">
';
        $buffer .= $indent . '    	
';
        $buffer .= $indent . '    	/*@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);*/
';
        $buffer .= $indent . '        .bg-slider
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            background-color: white;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .text-tt
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            font-size: 18px;
';
        $buffer .= $indent . '            font-weight: bold;
';
        $buffer .= $indent . '            color:#1177d1;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .text-tt:hover{
';
        $buffer .= $indent . '            color:#0b4f8a;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .text-date
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            color:grey;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .btn-course-fs
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            font-size: 22px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .course-bs
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            box-shadow: 0 1px 2px rgba(43,59,93,0.30);
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .pm-slider
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            margin-top: 100px;
';
        $buffer .= $indent . '            padding: 10px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .fp-mg
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            margin-bottom:20px !important;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .fp-nav-tmg
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            margin-left:6px !important;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .text-slider
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            font-size: 20px;
';
        $buffer .= $indent . '            margin-bottom: 15px;
';
        $buffer .= $indent . '            margin-top: 15px;
';
        $buffer .= $indent . '            font-weight: 400;
';
        $buffer .= $indent . '            color: black;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .p-slider
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            font-weight: 400;
';
        $buffer .= $indent . '            line-height: 1.5;
';
        $buffer .= $indent . '            color: black;
';
        $buffer .= $indent . '            display: -webkit-box;
';
        $buffer .= $indent . '            margin: 0 auto;
';
        $buffer .= $indent . '            font-size: 14;
';
        $buffer .= $indent . '            -webkit-line-clamp: 3;
';
        $buffer .= $indent . '            -webkit-box-orient: vertical;
';
        $buffer .= $indent . '            overflow: hidden;
';
        $buffer .= $indent . '            text-overflow: ellipsis;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '         .p-slider-title
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            font-weight: 400;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            line-height: 1.5;
';
        $buffer .= $indent . '            color: black;
';
        $buffer .= $indent . '            display: -webkit-box;
';
        $buffer .= $indent . '            margin: 0 auto;
';
        $buffer .= $indent . '            font-size: 14;
';
        $buffer .= $indent . '            -webkit-line-clamp: 1;
';
        $buffer .= $indent . '            -webkit-box-orient: vertical;
';
        $buffer .= $indent . '            overflow: hidden;
';
        $buffer .= $indent . '            text-overflow: ellipsis;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '         .p-courselq
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            font-weight: 400;
';
        $buffer .= $indent . '            line-height: 1.5;
';
        $buffer .= $indent . '            color: black;
';
        $buffer .= $indent . '            display: -webkit-box;
';
        $buffer .= $indent . '            margin: 0 auto;
';
        $buffer .= $indent . '            font-size: 14;
';
        $buffer .= $indent . '            -webkit-line-clamp: 3;
';
        $buffer .= $indent . '            -webkit-box-orient: vertical;
';
        $buffer .= $indent . '            overflow: hidden;
';
        $buffer .= $indent . '            text-overflow: ellipsis;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .btn-slider
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            background: #02aeff;
';
        $buffer .= $indent . '            border-radius:5px;
';
        $buffer .= $indent . '            margin-top: 20px;
';
        $buffer .= $indent . '            font-size: 16px;
';
        $buffer .= $indent . '            font-weight: 400;
';
        $buffer .= $indent . '            color: white;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .btn.btn-slider a:hover,
';
        $buffer .= $indent . '        .btn.btn-slider a:link
';
        $buffer .= $indent . '        {      
';
        $buffer .= $indent . '            text-decoration: none;
';
        $buffer .= $indent . '            color: black;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .magrin-block
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            margin-top: 30px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .md-block
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            margin-top: 70px;
';
        $buffer .= $indent . '            margin-bottom: 30px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .text-course-tt
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            color: #219FD1;
';
        $buffer .= $indent . '            font-size: 16px;
';
        $buffer .= $indent . '            white-space:nowrap;
';
        $buffer .= $indent . '            overflow: hidden;
';
        $buffer .= $indent . '            text-overflow: ellipsis;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .text-course-ct
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            line-height: 1.5;
';
        $buffer .= $indent . '            font-size: 14px;
';
        $buffer .= $indent . '            font-weight: 400;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        #slidecourse #sliderow .card:hover
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .bg-course
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            background: #f2f2f2;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        [data-slide="prev"]
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            margin: 0!important;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        #slidecourse #arrow-left 
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            position: absolute;
';
        $buffer .= $indent . '            left: -1px;
';
        $buffer .= $indent . '            top: 150px;
';
        $buffer .= $indent . '            z-index: 1;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        #slidecourse #arrow-left a:hover
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        #slidecourse #arrow-left a
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            background: white;
';
        $buffer .= $indent . '            color: black;
';
        $buffer .= $indent . '            font-size: 18px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        #slidecourse #arrow-right 
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            position: absolute;
';
        $buffer .= $indent . '            right: -1px; 
';
        $buffer .= $indent . '            top: 150px;
';
        $buffer .= $indent . '            z-index: 1;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        #slidecourse #arrow-right a:hover
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.75);
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        #slidecourse #arrow-right a
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            background: white;
';
        $buffer .= $indent . '            color: black;
';
        $buffer .= $indent . '            font-size: 18px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        #slidecourse .text-course-ct p
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            display: block; /* Fallback for non-webkit */
';
        $buffer .= $indent . '            display: -webkit-box;
';
        $buffer .= $indent . '            margin: 0 auto;
';
        $buffer .= $indent . '            font-size: 14;
';
        $buffer .= $indent . '            line-height: 1.5;
';
        $buffer .= $indent . '            -webkit-line-clamp: 3;
';
        $buffer .= $indent . '            -webkit-box-orient: vertical;
';
        $buffer .= $indent . '            overflow: hidden;
';
        $buffer .= $indent . '            text-overflow: ellipsis;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .outline-none
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            outline: none;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        .nav-slideshow
';
        $buffer .= $indent . '        {
';
        $buffer .= $indent . '            position: absolute;
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            left: 50%;
';
        $buffer .= $indent . '            bottom: 50px;
';
        $buffer .= $indent . '            transform: translateX(-50%);
';
        $buffer .= $indent . '            background: rebeccapurple;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        #return-to-top {
';
        $buffer .= $indent . '    position: fixed;
';
        $buffer .= $indent . '    bottom: 10px;
';
        $buffer .= $indent . '    right: 30px;
';
        $buffer .= $indent . '    background: rgb(0, 0, 0);
';
        $buffer .= $indent . '    background: rgba(0, 0, 0, 0.7);
';
        $buffer .= $indent . '    width: 35px;
';
        $buffer .= $indent . '    height: 35px;
';
        $buffer .= $indent . '    display: block;
';
        $buffer .= $indent . '    text-decoration: none;
';
        $buffer .= $indent . '    -webkit-border-radius: 35px;
';
        $buffer .= $indent . '    -moz-border-radius: 35px;
';
        $buffer .= $indent . '    border-radius: 35px;
';
        $buffer .= $indent . '    display: none;
';
        $buffer .= $indent . '    z-index: 99;
';
        $buffer .= $indent . '    -webkit-transition: all 0.3s linear;
';
        $buffer .= $indent . '    -moz-transition: all 0.3s ease;
';
        $buffer .= $indent . '    -ms-transition: all 0.3s ease;
';
        $buffer .= $indent . '    -o-transition: all 0.3s ease;
';
        $buffer .= $indent . '    transition: all 0.3s ease;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '#return-to-top i {
';
        $buffer .= $indent . '    color: #fff;
';
        $buffer .= $indent . '    margin: 0;
';
        $buffer .= $indent . '    position: relative;
';
        $buffer .= $indent . '    left: 9px;
';
        $buffer .= $indent . '    top: 9px;
';
        $buffer .= $indent . '    font-size: 19px;
';
        $buffer .= $indent . '    -webkit-transition: all 0.3s ease;
';
        $buffer .= $indent . '    -moz-transition: all 0.3s ease;
';
        $buffer .= $indent . '    -ms-transition: all 0.3s ease;
';
        $buffer .= $indent . '    -o-transition: all 0.3s ease;
';
        $buffer .= $indent . '    transition: all 0.3s ease;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '#return-to-top:hover {
';
        $buffer .= $indent . '    background: rgba(0, 0, 0, 0.9);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '#return-to-top:hover i {
';
        $buffer .= $indent . '    color: #fff;
';
        $buffer .= $indent . '    top: 5px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.post-slide6{
';
        $buffer .= $indent . '    margin: 0 10px;
';
        $buffer .= $indent . '    /*border-left: 3px solid #1dcfd1;
';
        $buffer .= $indent . '    border-bottom: 3px solid #1dcfd1;*/
';
        $buffer .= $indent . '    box-shadow: 0 1px 2px rgba(43,59,93,0.30);
';
        $buffer .= $indent . '    margin-bottom:2em;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.post-slide6 .post-img{
';
        $buffer .= $indent . '    position: relative;
';
        $buffer .= $indent . '    overflow: hidden;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.post-slide6 .post-img:before{
';
        $buffer .= $indent . '    content: "";
';
        $buffer .= $indent . '    width: 100%;
';
        $buffer .= $indent . '    height: 100%;
';
        $buffer .= $indent . '    position: absolute;
';
        $buffer .= $indent . '    top: 0;
';
        $buffer .= $indent . '    left: 0;
';
        $buffer .= $indent . '    background: rgba(0, 0,0,0.0);
';
        $buffer .= $indent . '    transition: all 0.40s linear 0s;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.post-slide6:hover .post-img:before{
';
        $buffer .= $indent . '    background: rgba(0, 0,0,0.6);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.post-slide6 .post-img img{
';
        $buffer .= $indent . '    width: 100%;
';
        $buffer .= $indent . '    height: 224px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.post-slide6 .post-info{
';
        $buffer .= $indent . '    width: 75%;
';
        $buffer .= $indent . '    position: absolute;
';
        $buffer .= $indent . '    bottom: -100%;
';
        $buffer .= $indent . '    left: 12.5%;
';
        $buffer .= $indent . '    background: #1177d1;
';
        $buffer .= $indent . '    text-align: center;
';
        $buffer .= $indent . '    line-height: 26px;
';
        $buffer .= $indent . '    padding: 15px;
';
        $buffer .= $indent . '    transition: bottom 0.40s ease-in-out 0s;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.post-slide6:hover .post-info{
';
        $buffer .= $indent . '    bottom:0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.post-slide6 .category{
';
        $buffer .= $indent . '    padding: 0;
';
        $buffer .= $indent . '    margin: 0;
';
        $buffer .= $indent . '    list-style: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.post-slide6 .category li,
';
        $buffer .= $indent . '.post-slide6 .post-date{
';
        $buffer .= $indent . '    display: inline-block;
';
        $buffer .= $indent . '    font-size: 16px;
';
        $buffer .= $indent . '    color: #fff;
';
        $buffer .= $indent . '    text-transform: capitalize;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '/*.post-slide6 .category li:after{
';
        $buffer .= $indent . '    content: " /";
';
        $buffer .= $indent . '    }*/
';
        $buffer .= $indent . '    .post-slide6 .category li:last-child:after{
';
        $buffer .= $indent . '        content: "";
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .post-slide6 .category li a{
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '        transition: all 0.40s linear;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .post-slide6 .category li a:hover{
';
        $buffer .= $indent . '        color: #555;
';
        $buffer .= $indent . '        text-decoration: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .post-slide6 .post-review{
';
        $buffer .= $indent . '        padding: 35px 20px 25px;
';
        $buffer .= $indent . '        background: #fff;
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .post-slide6 .icons{
';
        $buffer .= $indent . '        width: 80px;
';
        $buffer .= $indent . '        height: 80px;
';
        $buffer .= $indent . '        border: 4px solid #fff;
';
        $buffer .= $indent . '        border-radius: 50%;
';
        $buffer .= $indent . '        position: absolute;
';
        $buffer .= $indent . '        top: -45px;
';
        $buffer .= $indent . '        right: 10px;
';
        $buffer .= $indent . '        overflow: hidden;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .post-slide6 .icons img{
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        height: auto;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .post-slide6 .post-title{
';
        $buffer .= $indent . '        margin: 0 0 25px 0;
';
        $buffer .= $indent . '        white-space: nowrap;
';
        $buffer .= $indent . '        overflow: hidden;
';
        $buffer .= $indent . '        text-overflow: ellipsis;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .post-slide6 .post-title a{
';
        $buffer .= $indent . '        font-size: 18px;
';
        $buffer .= $indent . '        font-weight: bold;
';
        $buffer .= $indent . '        /*letter-spacing: 2px;
';
        $buffer .= $indent . '        text-transform: uppercase;
';
        $buffer .= $indent . '        color: #1dcfd1;*/
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        display: inline-block;
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        transition: all 0.30s linear 0s;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .post-slide6 .post-title a:hover{
';
        $buffer .= $indent . '        text-decoration: none;
';
        $buffer .= $indent . '        color: #555;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .post-slide6 .post-description{
';
        $buffer .= $indent . '        color: #555;
';
        $buffer .= $indent . '        font-size: 15px;
';
        $buffer .= $indent . '        line-height: 26px;
';
        $buffer .= $indent . '        margin-bottom: 20px;
';
        $buffer .= $indent . '        display: block; /* Fallback for non-webkit */
';
        $buffer .= $indent . '        display: -webkit-box;
';
        $buffer .= $indent . '        margin: 0 auto;
';
        $buffer .= $indent . '        -webkit-line-clamp: 4;
';
        $buffer .= $indent . '        -webkit-box-orient: vertical;
';
        $buffer .= $indent . '        overflow: hidden;
';
        $buffer .= $indent . '        text-overflow: ellipsis;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .post-slide6 .read{
';
        $buffer .= $indent . '        font-size: 13px;
';
        $buffer .= $indent . '        color: #555;
';
        $buffer .= $indent . '        display: block;
';
        $buffer .= $indent . '        text-align: right;
';
        $buffer .= $indent . '        text-transform: uppercase;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .post-slide6 .read:hover{
';
        $buffer .= $indent . '        text-decoration:none;
';
        $buffer .= $indent . '        color: #1dcfd1;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    #slidenew .row:after {
';
        $buffer .= $indent . '      content: "";
';
        $buffer .= $indent . '      display: table;
';
        $buffer .= $indent . '      clear: both
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .column-66 {
';
        $buffer .= $indent . '      float: left;
';
        $buffer .= $indent . '      width: 66.66666%;
';
        $buffer .= $indent . '      padding: 20px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .column-33 {
';
        $buffer .= $indent . '      float: left;
';
        $buffer .= $indent . '      width: 33.33333%;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .large-font {
';
        $buffer .= $indent . '      font-size: 48px;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .xlarge-font {
';
        $buffer .= $indent . '      font-size: 64px
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  .button {
';
        $buffer .= $indent . '      border: none;
';
        $buffer .= $indent . '      color: white;
';
        $buffer .= $indent . '      padding: 10px 10px;
';
        $buffer .= $indent . '      font-size: 16px;
';
        $buffer .= $indent . '      cursor: pointer;
';
        $buffer .= $indent . '      background-color: #4CAF50;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  #slidenew img {
';
        $buffer .= $indent . '      display: block;
';
        $buffer .= $indent . '      height: 300px;
';
        $buffer .= $indent . '      max-width: 100%;
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  @media screen and (max-width: 767px) {
';
        $buffer .= $indent . '      .column-66,
';
        $buffer .= $indent . '      .column-33 {
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        text-align: center;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    img {
';
        $buffer .= $indent . '        margin: auto;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '#news-slider .owl-nav{
';
        $buffer .= $indent . '    position: absolute;
';
        $buffer .= $indent . '    right: 15px;
';
        $buffer .= $indent . '    bottom: 15px;;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '#news-slider .owl-dots{
';
        $buffer .= $indent . '    display: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.btn-news{
';
        $buffer .= $indent . ' background-color:#1177d1;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.text-news-tt{
';
        $buffer .= $indent . '   display: block; /* Fallback for non-webkit */
';
        $buffer .= $indent . '   display: -webkit-box;
';
        $buffer .= $indent . '   margin: 0 auto;
';
        $buffer .= $indent . '   color:black;
';
        $buffer .= $indent . '   font-size: 22px;
';
        $buffer .= $indent . '   cursor: pointer;
';
        $buffer .= $indent . '   line-height: 1.5;
';
        $buffer .= $indent . '   font-weight: 400;
';
        $buffer .= $indent . '   -webkit-line-clamp: 1;
';
        $buffer .= $indent . '   -webkit-box-orient: vertical;
';
        $buffer .= $indent . '   overflow: hidden;
';
        $buffer .= $indent . '   text-overflow: ellipsis;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.text-news-ct{
';
        $buffer .= $indent . '  display: block; /* Fallback for non-webkit */
';
        $buffer .= $indent . '  display: -webkit-box;
';
        $buffer .= $indent . '  margin: 0 auto;
';
        $buffer .= $indent . '  font-size: 16px;
';
        $buffer .= $indent . '  line-height: 1.6;
';
        $buffer .= $indent . '  font-weight: 400;
';
        $buffer .= $indent . '  -webkit-line-clamp: 3;
';
        $buffer .= $indent . '  -webkit-box-orient: vertical;
';
        $buffer .= $indent . '  overflow: hidden;
';
        $buffer .= $indent . '  text-overflow: ellipsis;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.text-news-tt a:hover,   
';
        $buffer .= $indent . '.text-news-tt a:focus
';
        $buffer .= $indent . '{      
';
        $buffer .= $indent . '           
';
        $buffer .= $indent . '    color:  #1177d1;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . 'body.drawer-open-right #setting-context{
';
        $buffer .= $indent . '    right: 260px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '#setting-context{
';
        $buffer .= $indent . '    background-color: white;
';
        $buffer .= $indent . '    position: fixed;
';
        $buffer .= $indent . '    right: -23px;
';
        $buffer .= $indent . '    top: 100px;
';
        $buffer .= $indent . '    color: #ffffff;
';
        $buffer .= $indent . '    width: 48px;
';
        $buffer .= $indent . '    height: 50px;
';
        $buffer .= $indent . '    border-radius: 5px;
';
        $buffer .= $indent . '    font-size: 20px;
';
        $buffer .= $indent . '    padding: 8px 0 0 4px;
';
        $buffer .= $indent . '    cursor: pointer;
';
        $buffer .= $indent . '    z-index:1;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '#setting-context, [data-region="blocks-column"] {
';
        $buffer .= $indent . '    -webkit-transition: right .5s ease,left .5s ease;
';
        $buffer .= $indent . '    -moz-transition: right .5s ease,left .5s ease;
';
        $buffer .= $indent . '    -o-transition: right .5s ease,left .5s ease;
';
        $buffer .= $indent . '    transition: right .5s ease,left .5s ease;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.context-header-settings-menu .dropdown-toggle>.icon,
';
        $buffer .= $indent . '#region-main-settings-menu .dropdown-toggle>.icon {
';
        $buffer .= $indent . '    height: 24px;
';
        $buffer .= $indent . '    font-size: 20px;
';
        $buffer .= $indent . '    width: auto;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '/* --search-- */
';
        $buffer .= $indent . '.clear-row {
';
        $buffer .= $indent . '        margin-left:0;
';
        $buffer .= $indent . '        margin-right:0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .clear-col {
';
        $buffer .= $indent . '        padding-left:0;
';
        $buffer .= $indent . '        padding-right:0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    #box-image {
';
        $buffer .= $indent . '        position:relative;
';
        $buffer .= $indent . '        overflow:hidden;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    #box-image img {
';
        $buffer .= $indent . '        width:100%;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    #box-search {
';
        $buffer .= $indent . '        display:flex;
';
        $buffer .= $indent . '        position:absolute;
';
        $buffer .= $indent . '        bottom: 50px;
';
        $buffer .= $indent . '        left:50%;     
';
        $buffer .= $indent . '        transform:translateX(-50%);
';
        $buffer .= $indent . '        padding: 25px 35px;
';
        $buffer .= $indent . '        background-color: #6d7273;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    #box-search input {
';
        $buffer .= $indent . '        display:block;
';
        $buffer .= $indent . '        width:100%;
';
        $buffer .= $indent . '        max-width:100%;
';
        $buffer .= $indent . '        padding:6px 12px;
';
        $buffer .= $indent . '        height:35px;
';
        $buffer .= $indent . '        outline:0;
';
        $buffer .= $indent . '        color: #555;
';
        $buffer .= $indent . '        background-color: #fff;
';
        $buffer .= $indent . '        background-image: none;
';
        $buffer .= $indent . '        border: 1px solid #ccc;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .input-group-btn {
';
        $buffer .= $indent . '        width:45px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .input-group-btn .btn-search {
';
        $buffer .= $indent . '        background-color: #3c8dbc;
';
        $buffer .= $indent . '        border: 0;
';
        $buffer .= $indent . '        display: inline-block;
';
        $buffer .= $indent . '        width: 50px;
';
        $buffer .= $indent . '        height: 35px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '        .input-group-btn .btn-search  .glyphicon-search{
';
        $buffer .= $indent . '            color:#fff;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.get_js_moove'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '	<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>  
';
        if ($partial = $this->mustache->loadPartial('theme_moove/header')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<div id="page-wrapper">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '		';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $value;

        return $buffer;
    }
}
