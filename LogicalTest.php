<?PHP
interface ILogicalTest{
   static function facterial($number);
   static function IsPrime($number);
   static function findLargest($num1, $num2, $num3);

//    static function Result($number);
//    static function FileUpload($number);
}

class LogicalTest implements ILogicalTest{

//1 fac

static function facterial($number){
$result=1; 

for($i=1; $i<=$number; $i++){
    $result *=$i;
}
return $result;
}


//2 pri

static function IsPrime($number){
    if($number<2){
    return false;
}
for($i=2; $i<$number; $i++){
    if($number% $i===0){
        return false;
    }
}

return true;
    
}



//minmax
 static function findLargest($num1, $num2, $num3) {
    
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
        return $largest;

    }



//result

static function result($mark){
$result=null;


 if ($mark >= 80 && $mark <= 100) {
    $result ="A+";
 }else if( $mark >= 70 && $mark <= 80) {
    $result = "A";
 } else if( $mark >= 60 && $mark <= 69){
    $result = "A-";
 } else {
    $result = "Fail";
 };

   return $result;
}



static function fileUpload($myfile){




// print_r( $myfile);

   $name= $myfile ["name"];
   $fileTmp= $myfile ["tmp_name"];
   $folder= "uploads/";
   $ext= pathinfo($name, PATHINFO_EXTENSION);



   //if folder is not created creat a folder

   if(!is_dir($folder)){
    mkdir($folder, 0777, true);
   }


   //move file to folder

   if(move_uploaded_file($fileTmp, $folder. $name)){
    echo "File uploaded successfully:" . $name ;
    return  $name;
   }
   else{
    echo "Failed to upload file.";
   }


}



}












?>