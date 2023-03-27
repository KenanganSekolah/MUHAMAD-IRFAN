>?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nama = $_POST["nama"];
$email = $_POST["email"];
$pesan = $_POST["pesan"];

$to = "mirfan260626@gmail.com";
$subject = "pesan dari $nama" ;
$message = "Email: $email\n\npesan:\n$pesan";
$headers = "from:";

if (mail($to, $subject $message, $headers)) {
echo "<p>pesan berhasil terkirim.</p>"
} else {
echo "<p>maaf, terjadi kesalahan saat mengirim pesan.</p>"
}
}
?>