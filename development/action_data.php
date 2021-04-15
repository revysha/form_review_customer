<?php
//cek button    
    if ($_POST['Submit'] == "Submit") {
    $nama             = $_POST['nama'];
    $alamat           = $_POST['alamat'];
    $rating           = $_POST['rating'];
    $review           = $_POST['review'];

    //validasi data data kosong
    if (empty($_POST['nama'])||empty($_POST['alamat'])||empty($_POST['rating'])||empty($_POST['review'])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='index.html';
            </script>
        <?php
    }
    else {
        $host = "db";
        $dbusername = "root";
        $dbpassword = "password";
        $dbname = "review_cust";
        
        $conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);

        //jika koneksi gagal
        if (!$conn){
            die("Conection failed: " . mysqli_connect_error());
        }
    
    //Masukan data ke Table
    $sql    = "INSERT INTO customer SET nama='$nama' , alamat='$alamat' , rating='$rating' , review='$review'";
    //$query_input =mysqli_query($input);
    if (mysqli_query($conn, $sql)) {
    //Jika Sukses
    ?>
        <script language="JavaScript">
        alert('Terima Kasih untuk review Anda :)');
        document.location='index.html';
        </script>
    <?php
    }
    else {
    //Jika Gagal
    ?>
        <script language="JavaScript">
        alert('Review Gagal!, Mohon diulangi');
        document.location='index.html';
        </script>
    <?php
    }
//Tutup koneksi engine MySQL
    mysqli_close($conn);
    }
}
?>