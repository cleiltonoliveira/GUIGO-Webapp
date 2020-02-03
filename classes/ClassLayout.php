<?php
namespace Classes;

class ClassLayout{

    public static function setHeadRestrito() {
        $session = new ClassSessions;
        $session->verifyInsideSession();    
    }
    #Setar as tags do head
    public static function setHead($title, $description, $author="Gustavo Rodrigues")
    {
        $html="<!doctype html>\n";
        $html.="<html lang='pt-br'>\n";
        $html.="<head>\n";
        $html.="    <meta charset='UTF-8'>\n";
        $html.="    <meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
        $html.="    <meta name='description' content='$description'>\n";
        $html.="    <meta name='author' content='$author'>\n";
        $html.="    <meta name='format-detection' content='telephone=no'>\n";
        $html.="    <meta http-equiv='X-UA-Compatible' content='ie=edge'>\n";
        $html.="<title>$title</title>\n";
        $html.=" <link rel='stylesheet' href='".DIRPAGE."lib/css/style.min.css'>\n";
        #FAVICON
        #STYLESHEET
        $html.="</head>\n";
        $html.="<body>\n";
        echo $html;
    }
    public static function setHeadDashboard($title, $description, $author="Gustavo Rodrigues"){
        $html="<!doctype html>\n";
        $html.="<html lang='pt-br'>\n";
        $html.="<head>\n";
        $html.="    <meta charset='UTF-8'>\n";
        $html.="    <meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
        $html.="    <meta name='description' content='$description'>\n";
        $html.="    <meta name='author' content='$author'>\n";
        $html.="    <meta name='format-detection' content='telephone=no'>\n";
        $html.="    <meta http-equiv='X-UA-Compatible' content='ie=edge'>\n";
        $html.="<title>$title</title>\n";
        $html.="    <link rel='stylesheet' href='".DIRPAGE."lib/css/all.css'>\n";
        $html.="    <link rel='stylesheet' href='".DIRPAGE."plugins/bootstrap-4.4.1-dist/css/bootstrap.min.css'>\n";
        $html.="    <script src='https://cdn.jsdelivr.net/npm/chart.js@2.8.0'></script>\n";
        $html.="    <script src='https://code.jquery.com/jquery-3.4.1.js'></script>\n";
        $html.="</head>\n";
        $html.="<body>\n";
        echo $html;
    }
    #Setar as tags do footer
    public static function setFooter()
    {
        #JAVASCRIPT
        $html="<script src='".DIRPAGE."lib/js/zepto.min.js'></script>\n";
        $html.="<script src='".DIRPAGE."lib/js/vanilla-masker.min.js'></script>\n";
        $html.="<script src='".DIRPAGE."lib/js/javascript.min.js'></script>\n";
        $html.="</body>\n";
        $html.="</html>";
        echo $html;
    }
}
?>