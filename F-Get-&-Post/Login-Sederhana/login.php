<?php
// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])) {
    // cek username dan password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // jika berhasil redirect ke halaman admin.php
        header("Location: admin.php");
        exit;
    } else {
        // jika gagal tampilkan pesan error
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    main {
        width: 100%;
        height: 100vh;
    }

    .box {
        width: 300px;
        height: 300px;
        background-color: #f1f1f1;
        border-radius: 10px;
        padding: 20px;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    span {
        font-size: 1.4rem;
        font-weight: bold;
    }

    .title-box {
        width: auto;
        text-align: center;
        margin: 20px;
    }

    .container-box {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 300px;
        gap: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1.2rem;
    }
</style>

<body>
    <main>
        <div class="container">
            <div class="box">
                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic; text-align:center;">username / password SALAH!!!</p>
                <?php endif ?>
                <!-- container box -->
                <div class="container-box">
                    <div class="title-box">
                        <span>Login</span>
                    </div>
                    <form action="" method="post">
                        <div class="username">
                            <label for="username">username: </label>
                            <input type="text" name="username" id="username">
                        </div>
                        <div class="password">
                            <label for="password">password: </label>
                            <input type="password" name="password" id="password">
                        </div>
                        <div class="submit">
                            <button type="submit" name="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>