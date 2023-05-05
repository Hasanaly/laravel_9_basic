<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: lightskyblue;
   color: white;
   text-align: center;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://pmikotasemarang.or.id/">PMI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="markas">Markas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="donordarah">Donor Darah</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="klinik">Klinik</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="diklat">Diklat</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="polbitrada">Polbitrada</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

@yield('konten')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<div class="footer">
    <a href="/information_update" target="_blank" rel="noopener noreferrer">SIM V 1.0.0</a>
</div>
</body>
</html>