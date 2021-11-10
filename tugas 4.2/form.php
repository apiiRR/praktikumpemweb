<html>
    <head>
        <title> Title </title>
    </head>
    <body>

<?php
include 'koneksi.php';
if (isset($_GET['id']))
{

  // echo "kesini";
  $id = $_GET['id'];
  $q_ubah = "select * from company where id = ".$id;
  $siswa = mysqli_query($koneksi, $q_ubah);

  $row = mysqli_fetch_assoc($siswa);
  $nama = $row['Nama'];
  $email = $row['Email'];
  $subjek = $row['Subject'];
  $pesan = $row['Message'];
}
else
{
  $nama = "";
  $email = "";
  $subjek = "";
  $pesan = "";
  $id = 0;
}
?>


        <h1 align="center">Form Edit Kritik Saran</h1>
        <form method="POST" action="tambah.php">

        <table border="0" align="center">
           <tr>
               <td>
                   Nama 
               </td>
               <td>
                   :
               </td>
               <td>
                   <input type="text" name="Nama" value= <?php echo $nama ;?>>
               </td>
           </tr>

           <tr>
               <td>
                   Email
               </td>
               <td>
                   :
               </td>
               <td>
                   <!-- <textarea name="alamat" ><?php echo $email ;?></textarea> -->
                   <input type="text" name="Email" value=<?php echo $email ;?>>
               </td>
           </tr>

           <tr>
               <td>
                   Subjek
               </td>
               <td>
                   :
               </td>
        <input type="hidden" name= "id_siswa" value= <?php echo $id;?>>
               <td>
                   <input type="text" name="Subject" value=<?php echo $subjek ;?>>
               </td>
            </tr>
            <tr>
               <td>
                   Message
               </td>
               <td>
                   :
               </td>
               <td>
                    <!-- <input type="text" name="telepon" value=<?php echo $telp ;?>> -->
                    <textarea name="Message"><?php echo $pesan ;?></textarea>
               </td>
           </tr>
           <!-- <tr>
              <td>
                Jenis Kelamin
              </td>
              <td>
                  :
              </td>
              <td>
                <?php if($sex == 'L') { ?>
                <input type="radio" name="sex" value="L" checked="">Laki Laki <br>
                <input type="radio" name="sex" value="P">Perempuan <br>
              <?php } else { ?>
                <input type="radio" name="sex" value="L"> Laki Laki <br>
                <input type="radio" name="sex" value="P" checked=""> Perempuan <br>
              <?php } ?>
              </td>
           </tr> -->
           <tr>
               <td colspan="3" align="center"> <input type="submit" value="Submit">
            </td>
           </tr>
          
        </table>

        

    </body>
</html>