 <?php 

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tugasbesar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data){
    global $conn;

    $nama = ($data['nama']);
    $username = strtolower(stripslashes($data['username']));
    $email = strtolower($data['email']);
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);
    

    //cek username yang sama
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");


    if ( mysqli_fetch_assoc($result) ){
        echo "<script>
            alert('Username sudah terpakai!');
        </script>";
        return false;
    }

    //cek konfirmasi password
    if ( $password !== $password2){
        echo "<script>
            alert('Konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password,PASSWORD_DEFAULT);

    //masukkan nilai kedalam databse
    mysqli_query($conn, "INSERT INTO user VALUES('','$nama', '$username','$email', '$password')");
    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;

    $nama = ($data['nama']);
    $username = strtolower(stripslashes($data['username']));
    $email = strtolower($data['email']);
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    //cek username yang sama
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");


    if ( mysqli_fetch_assoc($result) ){
        echo "<script>
            alert('Username sudah terpakai!');
        </script>";
        return false;
    }

    //cek konfirmasi password
    if ( $password !== $password2){
        echo "<script>
            alert('Konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password,PASSWORD_DEFAULT);

    mysqli_query($conn, "UPDATE user SET nama='$nama', username='$username', email='$email', password='$password' ") or die(mysqli_error($connection));
    return mysqli_affected_rows($conn);
}

function hapus(){
    
}

?>