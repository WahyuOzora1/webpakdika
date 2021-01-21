<?php 

//koneksi database
$conn = mysqli_connect("Localhost", "root", "", "phpdasar");

//logika kotak baju
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {
        global $conn;
      //ambil data dari tiap elemen dalam form
      $nama = htmlspecialchars($data["nama"]);
      $nim = htmlspecialchars($data["nim"]);
      $prodi = htmlspecialchars($data["prodi"]);
      
      //upload gambar 

      $gambar = upload();
      if (!$gambar) {
          return false;
      }

       //query insert data

    $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$prodi', '$gambar')";
    mysqli_query($conn, $query);

    //Ngecek Apakah data berhasil diinput ke database pa tidak
    return mysqli_affected_rows($conn);
}

function upload(){
    
    $namaFile = $_FILES ['gambar'] ['name'];
    $ukuranFile = $_FILES ['gambar'] ['size'];
    $error = $_FILES ['gambar'] ['error'];
    $tmpName = $_FILES ['gambar'] ['tmp_name'];

    //cek apakah tidak ada gambar yang di Upload

    if($error === 4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu');
         </script>";

         return false;
    }

    //cek apakah yang di upload adalah gambar
    $extensiGambarValid = ['jpg', 'jpeg', 'png'];
    $extensiGambar = explode('.', $namaFile);  //memeecah extension wahyu.jpg
    $extensiGambar = strtolower(end($extensiGambar)); //supaya diambil extensinya (end) dan berhuruf kecil

    //cek array jika extensi bukan valid
    if (!in_array($extensiGambar, $extensiGambarValid)) {
        echo "<script>
        alert('Yang anda upload bukan gambar');
         </script>";

         return false;
    }

    //cek jika ukurannya terlalu besar (ukuran dalam byte)
    if($ukuranFile > 1000000) {
        echo "<script>
        alert('Ukuran gambar terlalu besar');
         </script>";

         return false;
    }


    //lolos pengecekan, gambar siap di upload
    //generate nama baru ;; uniqid untukmembangkitkan string random belum ada extensi filenya
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.'; //disambung dengan extensi
    $namaFileBaru .= $extensiGambar;


    move_uploaded_file($tmpName, 'img/'. $namaFileBaru);

    return $namaFileBaru;

}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;

    $id = $data["id"];
  //ambil data dari tiap elemen dalam form
  $nama = htmlspecialchars($data["nama"]);
  $nim = htmlspecialchars($data["nim"]);
  $prodi = htmlspecialchars($data["prodi"]);

  $gambarLama = htmlspecialchars($data ["gambarLama"]);

//cek apakah user pake gambar baru atau tidak

if ($_FILES ['gambar'] ['error'] === 4) {
    $gambar = $gambarLama;
} else {
    $gambar = upload();
}

   //query insert data

$query = "UPDATE mahasiswa SET
          nim = '$nim',
          nama = '$nama',
          prodi = '$prodi',
          gambar = '$gambar' 

          WHERE id = $id 
            ";

          

mysqli_query($conn, $query);

//Ngecek Apakah data berhasil diinput ke database pa tidak
return mysqli_affected_rows($conn);
}


function cari($keyword) {
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR 
                                            nim LIKE '%$keyword%' OR
                                            prodi LIKE '%$keyword%'
    ";

    return query($query);
}


function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek apakah username yang sama ada yang duplicate pa gak
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo " <script> 
        
        alert ('Username sudah terdaftar');
        
        
        </script>";
        return false;
    }

    //cek konfirmasi password

    if($password !== $password2) {
        echo " <script>
            alert ('Konfirmasi password salah');
        </script>";
        return false;
    } 

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query ($conn, "INSERT INTO user VALUES ('', '$username', '$password')");
    return mysqli_affected_rows($conn); //untuk memberi nilai 1 jika benar dan -1 jika salah

}


?>