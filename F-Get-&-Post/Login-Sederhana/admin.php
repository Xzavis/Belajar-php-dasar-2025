<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 1.3rem;
        }
        button{
            background: #f1f1f1;
            padding: 6px 12px;
            border-radius: 4px;
        }
        button a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <header>
        <div class="title-admin">
            <h1>Selamat Datang, Admin</h1>
        </div>
        <div class="logout">
            <button><a href="login.php">Logout</a></button>
        </div>
    </header>
</body>
</html>