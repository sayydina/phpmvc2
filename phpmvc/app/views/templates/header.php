<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.css" />
    <title><?= $data['judul']; ?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>home">Home</a>
                    </li>
                    <li class="nav-item"></li>
                    <a class="nav-link" href="<?= BASEURL; ?>siswa">Siswa</a>
                    </li>
                    <a class="nav-link" href="<?= BASEURL; ?>Kelas">Kelas</a>
                    </li>
                    <a class="nav-link" href="<?= BASEURL; ?>Jurusan">Jurusan</a>
                    </li>
                    <a class="nav-link" href="<?= BASEURL; ?>Guru">Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>