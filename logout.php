<?php
session_start();

if (isset($_SESSION['status_login'])) {
    $_SESSION = [];
    session_unset();
    session_destroy();

    echo "<script>
          alert('Berhasil logout!');
          document.location.href = 'javascript:window.history.go(-1)';
          </script>";
}

else {
echo "<script>
      alert('Anda belum login!');
      document.location.href = 'javascript:window.history.go(-1)';
      </script>";
}
?>