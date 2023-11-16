<!-- PHP TAG --> --------[-]
<?php 
//CODE
?>


<?php 
// CREATE NEW VARIABLE :  --------[-]
$variableName='value';

//print anything in the screen :  --------[-]
echo "anything";

// the difference between '' and ""  --------[-]
// '' =>  consider Variable as a text : 

// "" => consider Variable as a variable : 

// print a variable with text : 
echo "text $variableName"; 
echo "text {$variableName}"; 
echo "text" . $variableName; 

//arithmetic  operations  --------[-]
$num1=20; 
$num2=40; 

//conditional statements : --------[-]
if(condition){
//code
}else if(condition){
//code
}else{
//code
}
//Relational operators : --------[-]
// > < >= <= == !=  

//logical operators :  --------[-]
// && ||   ! 

//array : --------[-]

//create new array : 
$newArr=array(valu1,valu2,...); 
$newArr=[val1,val2,val3,...];

// print an element of array : 
echo $newArr[index]; 

//print all array we can't use echo because it's can't handel with array : 
//for that we need to use this functions  
print_r[$newArr]; 

//delete from array with index : 
unset($newArr[index]); 

//add at index : 
$newArr[index]="value"; 

//push a range of value : 

array_push($newArr,val1,val2...);








































?>



