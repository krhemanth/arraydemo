<?php
$index= new array1();
 $array = array(1,2,3,4,5,5,6,7);
 $myarray = array(1,3,5,7,9,11,13,9);

  $index->printArray($array);
  $index->Arraychunks($array);
  $index->Arraycombine($array,$myarray);
  $index->ArrayDifference($array,$myarray);
  $index->ArrayCount($array);
  $index->Arraymerge($array,$myarray);
  $index->Arraypop($myarray);
  $index->Arraymap($array);
  $index->Arrayreverse($myarray);
  $index->ArraySort($myarray);

class array1
{
  public function __construct()
 {
  echo 'hello i\'m array constructor <br>';
  }
  public function printArray($array)
  {
  echo '<h2> 1. Print array function </h2>';
  print_r($array);
  echo '<hr>';
}
  public function Arraychunks($array)
  {
    echo '<h2> 2. print array chunks function </h2>';
    print_r(array_chunk($array, 2));
    echo '<hr>';
  }
  public function Arraycombine($array,$myarray)
  {
  echo '<h2> 3. this combines array </h2>';  
  $c = array_combine($array, $myarray);
  print_r($c);
  echo '<hr>';
}
   public function ArrayDifference($array,$myarray)
   {
    echo '<h2> 4. Finds the difference between 2 arrays </h2>';
    $result = array_diff($array, $myarray);
     print_r($result);
     echo '<hr>';
   }
   public function ArrayCount($myarray)
   {
    echo '<h2> 5. Counts the no.of times value occures </h2>';
    print_r(array_count_values($myarray));
    echo '<hr>';
     }
    public function Arraymerge($array,$myarray)
    {
      echo '<h2> 6.Merges 2 or more arrays together </h2>';
      $result = array_merge($array, $myarray);
      print_r($result);
      echo '<hr>';

    }
    public function Arraypop($myarray) 
    {
      echo '<h2> 7. pops out elements from an array leaving only 3 elements </h2>';
      $out = array_pop($myarray);
      print_r($out);
      echo '<hr>';
    }
    public function Arraymap($array)
    {

      function cube($n)
        {
        return($n * $n * $n);
        }

      echo '<h2> 8. Maps the values in the array </h2>';
      $b = array_map("cube", $array);
      print_r($b);
      echo '<hr>';
    } 
    public function Arrayreverse($myarray)
    {
      echo '<h2> 9. Reverses the elements in the array </h2>';
      $reversed = array_reverse($myarray);
      print_r($reversed);
      echo '<hr>';
    }
    public function ArraySort($myarray)
    {
      echo '<h2> sorts the array </h2>';
     sort($myarray);
     foreach ($myarray as $key => $val) 
      echo "myarray[" . $key . "] = " . $val . "\n";

    } 

}

?>