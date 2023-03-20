<?php 

   function connection(){
      // Membuat koneksi ke database
      $Server = 'localhost';
      $User = 'root';
      $Pass = '';
      $Name = 'classicmodels';
      $conn = mysqli_connect($Server, $User, $Pass);

      if (! $conn) {
         die ('koneksi gagal : ' . mysqli_error($conn));
      }
      // Memilih database yang akan dipakai
      mysqli_select_db($conn, $Name);
      
      return $conn;
   }

?>