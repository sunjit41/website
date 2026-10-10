<?php
include_once "classes/software.php";
include_once "classes/quote.php";
include_once "classes/config.php";

class MyDatabase
{
    private $serverName;
    private $userName;
    private $password;
    private $database;

    function __construct()
    {
        $this->serverName = DB_SERVER_NAME;
        $this->userName = DB_USER_NAME;
        $this->password = DB_PASSWORD;
        $this->database = DB_NAME;
    }

    public function getQuote() : quote
    {
        $obj = new quote();
        try{
            $conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->database);
            $randomID = rand(1,20);
            $query = "SELECT * FROM " .QUOTES_TABLE ." WHERE ID = ?";
            $statement = mysqli_prepare($conn, $query);
            
            if($statement)
            {
                mysqli_stmt_bind_param($statement, "i", $randomID);
                mysqli_stmt_execute($statement);

                $result = mysqli_stmt_get_result($statement);
                if($result)
                {                
                    while($row = mysqli_fetch_array($result))
                    {
                        $obj->quoteText = $row[1];
                        $obj->quoteAuthor = $row[2];
                    }
                }
                else
                {
                    echo 'No results';
                }
            }
            else
            {
                echo 'Could not prapre statement';            
            }
            //$result = mysqli_query($conn, $query);
            
         }
         catch (exception $ex){
             echo 'Message: ' .$ex->getMessage();
         }      
        return $obj;
    }

    public function getAppLinks($appID): array 
    {
        try
        {
            $obj[] = new AppLink();
            $conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->database);
            $query = "SELECT * FROM " .APPS_TABLE ." WHERE appID=".$appID." ORDER BY sortorder DESC";
            $result = mysqli_query($conn, $query);       
            if($result){
            $arrayCount = 1;
                while($row = mysqli_fetch_array($result)){
                $obj[] = new AppLink();
                $obj[$arrayCount]->displayText = $row[2];
                $obj[$arrayCount]->linkPath = $row[3];
                $obj[$arrayCount]->imagePath = $row[4];
                $obj[$arrayCount]->linkType = $row[5];
                $obj[$arrayCount]->hasRows = true;
                $arrayCount++;
                }
            }
            else{
                echo "No result.";
            }
            return $obj;
        }
        catch (exception $ex){
            echo 'Message: ' .$ex->getMessage();
            return $obj;
        }
    }  

    public function getKeralaLinks(): string {
        $returnValue = '' ;
        try{
            $conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->database);
            $query = "SELECT * FROM " .KERALA_TABLE;
            $result = mysqli_query($conn, $query);
            
            if($result){
                $i = 0;
                while($row = mysqli_fetch_array($result)){
                    $i += 1;
                    $returnValue = $returnValue.'<'.$i ;
                    $returnValue = $returnValue.'#C1'.$row[0].'$C1';
                    $returnValue = $returnValue.'#C2'.$row[1].'$C2';
                    $returnValue = $returnValue.'#C3'.$row[2].'$C3';
                    $returnValue = $returnValue.'#C4'.$row[3].'$C4';
                    $returnValue = $returnValue.'#C5'.$row[4].'$C5';
                    $returnValue = $returnValue.'#C6'.$row[5].'$C6';
                    $returnValue = $returnValue.'>'.$i ;
                }
            }
            else{
                echo "No result.";
            }
         }
         catch (exception $ex){
             echo 'Message: ' .$ex->getMessage();
         }        

        return $returnValue;
    }

    public function getScreens($appID): array {
        try{
           $obj[] = new ScreeShot();
           $conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->database);
           $query = "SELECT * FROM " .SCREEN_TABLE ." WHERE appID=".$appID." AND enabled=1 ORDER BY sortorder DESC";
           $result = mysqli_query($conn, $query);       
           if($result){
            $arrayCount = 1;
               while($row = mysqli_fetch_array($result)){
                $obj[] = new ScreeShot();
                $obj[$arrayCount]->screenID = $row[0];
                $obj[$arrayCount]->appID = $row[1];
                $obj[$arrayCount]->src = $row[2];
                $obj[$arrayCount]->order = $row[3];
                $obj[$arrayCount]->enabled = $row[4];
                $arrayCount++;
               }
           }
           else{
               echo "No result.";
           }
           return $obj;
        }
        catch (exception $ex){
            echo 'Message: ' .$ex->getMessage();
            return $obj;
        }
    }  



    public function getSoftwares($appID): Software {
        try{
           $obj = new Software();
           $conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->database);
           $query = "SELECT * FROM " .SOFTWARE_TABLE ." WHERE appID=".$appID;
           $result = mysqli_query($conn, $query);
           
           if($result){
               while($row = mysqli_fetch_array($result)){
                $obj->appID = $row[0];
                $obj->appName = $row[1];
                $obj->version = $row[2];
                $obj->type = $row[3];
                $obj->platform = $row[4];
                $obj->tool = $row[5];
                $obj->language = $row[6];
                $obj->requires = $row[7];
                $obj->getfrom = $row[8];
                $obj->link = $row[9];
                $obj->para1 = $row[10];
                $obj->para2 = $row[11];
                $obj->image1 = $row[12];
                $obj->image2 = $row[13];
                $obj->image3 = $row[14];
                $obj->image4 = $row[15];
                $obj->image5 = $row[16];
                $obj->image6 = $row[17];
                $obj->hasRows = true;
               }
           }
           else{
               echo "No result.";
           }
           return $obj;
        }
        catch (exception $ex){
            echo 'Message: ' .$ex->getMessage();
            return new Software();
        }
    }    

}

?>
