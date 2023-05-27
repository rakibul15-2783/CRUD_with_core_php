<?php

class Student{
    private $con = "";
    public function insert($alldata){
       
        
             $name = $alldata['name'];
             $des = $alldata['des'];
             $price = $alldata['price'];
             $status = $alldata['status'];

             
             if($alldata['name']==""){
                echo "<script>alert('Name is Required')</script>";
             }
             elseif($alldata['des']==""){
                echo "<script>alert('Des is Required')</script>";
             }
             elseif($alldata['price']==""){
                echo "<script>alert('price is Required')</script>";
             }
             elseif($alldata['status']==""){
                echo "<script>alert('Status is Required')</script>";
             }
             else{
                $con = new mysqli('localhost','root','','php_practice');
                $insert = "INSERT INTO tbl_student(name,des,price,status) VALUES('$name','$des','$price','$status')";
                $qur = $con->query($insert);
                if($qur){
                    return "<div class='alert alert-info'>Data Successfully Added</div>" ;
                 }
                 else{
                    return "Something Went Wrong";
                 }

             }

   }

   public function show(){
    $con = new mysqli('localhost','root','','php_practice');
    $show = "SELECT *FROM tbl_student";
    return $qur = $con->query($show);
   }

   public function active($id){
    $con = new mysqli('localhost','root','','php_practice');
    $active = "UPDATE tbl_student SET status='2' WHERE id='$id'";
    return $qur = $con->query($active);
   }

   public function inactive($id){
    $con = new mysqli('localhost','root','','php_practice');
    $inactive = "UPDATE tbl_student SET status='1' WHERE id='$id'";
    return $qur = $con->query($inactive);
   }
   public function delete($id){
    $con = new mysqli('localhost','root','','php_practice');
    $delete = "DELETE FROM tbl_student WHERE id='$id'";
    return $qur = $con->query($delete);
   }
   public function edit($id){
      $con = new mysqli("localhost",'root','','php_practice');
      $find = "SELECT *FROM tbl_student WHERE id='$id'";
      return $qur = $con->query($find);

   }

   public function update($alldata, $id){

             $name = $alldata['name'];
             $des = $alldata['des'];
             $price = $alldata['price'];
             $status = $alldata['status'];

             
             if($alldata['name']==""){
                echo "<script>alert('Name is Required')</script>";
             }
             elseif($alldata['des']==""){
                echo "<script>alert('Des is Required')</script>";
             }
             elseif($alldata['price']==""){
                echo "<script>alert('price is Required')</script>";
             }
             elseif($alldata['status']==""){
                echo "<script>alert('Status is Required')</script>";
             }
             else{
                $con = new mysqli('localhost','root','','php_practice');
                $update = "UPDATE tbl_student SET name='$name',des='$des',price='$price',status='$status' WHERE id='$id'";
                $qur = $con->query($update);
                if($qur){
                    return header("location:oopcrud.php");
                    
                 }
                 else{
                    return "Something Went Wrong";
                 }

             }
      
   }
   

} 

?>