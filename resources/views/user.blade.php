<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POS Putra</title>
    <style>
        h2,ul{
            color: rgb(219, 174, 27);
            font-family: arial; 
        }
        p{
            color: rgb(230, 179, 179);
        }
        ul{
            color: rgb(128, 98, 238);
        }
        body{
            background-color: rgb(88, 8, 8);
        }
    </style>
</head>
<body>
    <h2>Halaman Profil</h2>
    <p>Profil pengguna dengan ID {{ $id }} dan nama {{ $name }}:</p>
    <ul>
        <li>Informasi profil 1</li>
        <a>Setia loh wak saya ini, jangan diragukan lagi</a>
        <li>Informasi profil 2</li>
        <a>Meskipun nampak humoris, saya punya teman tapi bermuka dua. Lawak banget kan wkwk</a>
        <li>Informasi profil 3</li>
        <a>Bentar lagi 21 xixi</a>
    </ul>
</body>
</html>