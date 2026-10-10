<?php

class AppLink
{
    public $displayText;
    public $imagePath;
    public $linkPath;
    public $linkType;
    public $hasRows;

    function __construct()
    {
        $this->displayText = "Coming Soon";
        $this->imagePath = "/images/apps/app1.PNG";
        $this->linkPath ="javascript:Updating();";
        $this->linkType = "500";
        $this->hasRows = false; 
    }
}

class ScreeShot
{
    public $screenID;
    public $appID;
    public $src;
    public $order;
    public $enabled;

    function __construct()
    {
        $this->screenID = "0";
        $this->appID = "0";
        $this->src ="/images/apps/app1.PNG";
        $this->order = "0";
        $this->enabled = "0";
    }

}

class Software{
    public $appID;
    public $appName;
    public $version;
    public $type;
    public $platform;
    public $tool;
    public $language;
    public $requires;
    public $getfrom;
    public $link;
    public $para1;
    public $para2;
    public $image1;
    public $image2;
    public $image3;
    public $image4;
    public $image5;
    public $image6;
    public bool $hasRows;

    function __construct() {
        $this->appID = "0";
        $this->appName = "Good LAN";
        $this->version = "2.0";
        $this->type = "Mobile Application";
        $this->platform = "Android Phones";
        $this->tool = "Android Studio";
        $this->language = "C# .Net";
        $this->requires = "Microsoft Windows";
        $this->getfrom = "Direct .exe file";
        $this->link = "#";
        $this->para1 = "Paragraph 1";
        $this->para2 = "Paragraph 2";
        $this->image1 = "/images/apps/gl1.PNG";
        $this->image2 = "/images/apps/gl2.PNG";
        $this->image3 = "/images/apps/gl3.PNG";
        $this->image4 = "/images/apps/gl4.PNG";
        $this->image5 = "/images/apps/gl5.PNG";
        $this->image6 = "/images/apps/gl6.PNG";
        $this->hasRows = false;

    }    
}

?>