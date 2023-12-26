<?php 
$db = mysqli_connect("localhost", "root", "", "linggom");
//ambil data dari tabel hero / query data hero
    function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
    $rows[]=$row;
}
    return $rows;
}

//---------------------------- TAMBAH --------------------------------//
function tambah($data){
    global $db;
    $title = htmlspecialchars($data["title"]);
    $spantitle = htmlspecialchars($data["spantitle"]);
    $spantitle2 = htmlspecialchars($data["spantitle2"]);
    $spantitle3 = htmlspecialchars($data["spantitle3"]);
    $descript = $data["descript"];
    $button = htmlspecialchars($data["button"]);
    $linkbutton = htmlspecialchars($data["linkbutton"]);

    //upload img
    $img = upload();
    if(!$img){
        return false;
    }
    
    $query = "INSERT INTO hero VALUES 
    ('', '$title', '$spantitle', '$spantitle2', '$spantitle3', '$descript', '$button', '$linkbutton', '$img')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

//---------------------------- UPLOAD --------------------------------//
function upload(){
    $namaFile   = $_FILES['img']['name'];
    $ukuranFile = $_FILES['img']['size'];
    $error      = $_FILES['img']['error'];
    $tmpName   = $_FILES['img']['tmp_name'];

    //cek apakah tidak ada gambar yang di upload
    if( $error === 4 ){
        echo 
        "<script> 
        alert('silahkan masukkan gambar'); 
        </script>";
        return false;
    }
    //hanya gambar yang boleh diupload
    $ekstensiGambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);  
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarvalid)){
        echo 
        "<script> 
        alert('yang anda upload bukan gambar'); 
        </script>";
        return false;
    }
    if($ukuranFile > 1000000){
        echo 
        "<script> 
        alert('ukuran gambar terlalu besar!'); 
        </script>";
        return false;
    }
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    $directory = 'D:/xampp/htdocs/linggom/webeditor/gmbr/';
    move_uploaded_file($tmpName,$directory.$namaFileBaru);
    return $namaFileBaru;

}   


//---------------------------- HAPUS --------------------------------//
function hapus($id){
    global $db;
    mysqli_query($db, "DELETE FROM hero WHERE id = $id");
    return mysqli_affected_rows($db);
}

//---------------------------- UBAH --------------------------------//
function ubah($data){
    global $db;
    $id = $data["id"];
    $title = htmlspecialchars($data["title"]);
    $spantitle = htmlspecialchars($data["spantitle"]);
    $spantitle2 = htmlspecialchars($data["spantitle2"]);
    $spantitle3 = htmlspecialchars($data["spantitle3"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    if($_FILES['img']['error'] === 4){
        $img = $gambarLama;
    }else{
        $img = upload();
    };


    $query = "UPDATE hero SET 
    title = '$title',
    spantitle = '$spantitle',
    spantitle2 = '$spantitle2',
    spantitle3 = '$spantitle3',
    img = '$img'
    WHERE id = $id  
    ";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

//---------------------------- SEARCH --------------------------------//
function search($keyword){
    $query = "SELECT * FROM hero 
    WHERE 
    title      LIKE '%$keyword%' OR 
    spantitle        LIKE '%$keyword%' OR
    spantitle2      LIKE '%$keyword%' OR 
    spantitle3 LIKE '%$keyword%' 
    ";
    return query($query);
}

//---------------------------- REGISTER --------------------------------//

function register($data){
    global $db;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);
    //password sesuai atau tidak
    if( $password !== $password2 ){
        echo "<script>
        alert('Password Tidak Sesuai');
        </script>";
        return false;
    };

        //user dengan nama sama
        $result = mysqli_query($db, "SELECT username FROM user WHERE 
        username = '$username'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>
            alert('username sudah tersedia');
            </script>";
            return false;
        }

    //encrypt password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    //tambahkan user ke db
    mysqli_query($db, "INSERT INTO user VALUES(
        '',
        '$username',
        '$password')");
    return mysqli_affected_rows($db);

}

//---------------------------- LOGOUT --------------------------------//


