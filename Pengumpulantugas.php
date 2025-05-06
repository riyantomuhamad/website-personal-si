<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Tugas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(120deg, #89f7fe, #66a6ff);
            margin: 0;
            padding: 0;
        }

        form {
            width: 90%;
            max-width: 420px;
            margin: 50px auto;
            padding: 25px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            margin-top: 15px;
            display: block;
            font-weight: 600;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .tugas-links {
            margin-top: 25px;
        }

        .tugas-links a {
            display: block;
            margin-bottom: 10px;
            padding: 12px;
            background-color: #007bff;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s;
        }

        .tugas-links a:hover {
            background-color: #0056b3;
        }

        @media (max-width: 480px) {
            form {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<form>
    <h2>Form Pengumpulan Tugas Mandiiri</h2>

    <label for="npm">NPM:</label>
    <input type="text" name="npm" value="2023804053" required>

    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="Muhamad Riyanto" required>

    <label for="kelas">Kelas:</label>
    <input type="text" name="kelas" value="SI 5" required>

    <div class="tugas-links">
        <a href="https://ibb.co.com/mFbm7V0x" target="_blank">Pertemuan 1</a>
        <a href="http://localhost/ALL%20PERTEMUAN/Latihan3/" target="_blank">Pertemuan 2</a>
        <a href="http://localhost/ALL%20PERTEMUAN/Form%20data%20diri/formdatadiri.html" target="_blank">Pertemuan 3</a>
        <a href="http://localhost/ALL%20PERTEMUAN/Ifelse/Ifelse.php" target="_blank">Pertemuan 4</a>
        <a href="http://localhost/ALL%20PERTEMUAN/Database/Datafofrm.php" target="_blank">Pertemuan 5</a>
    </div>
</form>

</body>
</html>
