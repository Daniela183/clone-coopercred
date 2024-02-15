<?php

?>

<nav class="navbar navbar-dark navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href=""><img src="img/logo_with_iso.png" width="60%" height="60%"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                  
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3" action="principal.php">
                    <li class="nav-item">
                        <a class="nav-link active px-3 fw-bold" aria-current="page" href="index.php">INÍCIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-bold" href="?secao=quem">QUEM SOMOS</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-bold" href="?secao=carretas">CARRETAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-bold" href="?secao=pecas">PEÇAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-bold" href="?secao=parceiros">PARCEIROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-bold" href="?secao=contato">CONTATO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-bold" href="fpdf/relatorio.php">RELATÓRIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-bold" href="adm/index.php">ADMIN</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>