<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Taz Manager</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body role="application">
    <div id="app">
        <!-- NAVIGATION -->
        <nav id="app-nav" role="banner">
            <i class="logo icon icon-logo icon-logo-s">Taz Manager</i>
            <div class="nav">
                <div class="nav-box">
                    <h4 class="nav-title">Dashboard</h4>
                    <ul class="nav-list">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="glyphicon glyphicon-calendar"></i> Calendário</a></li>
                        <li class="nav-item selected"><a href="#" class="nav-link"><i class="glyphicon glyphicon-inbox"></i> Minhas tarefas</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="glyphicon glyphicon-hand-right"></i> Tarefas delegadas</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="glyphicon glyphicon-eye-open"></i> Tarefas que eu sigo</a></li>
                    </ul>
                </div>
                <div class="nav-box">
                    <h4 class="nav-title">Projetos</h4>
                    <ul class="nav-list">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="glyphicon glyphicon-folder-open"></i> Projeto X</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="glyphicon glyphicon-folder-open"></i> Novo site</a></li>
                    </ul>
                </div>
                <div class="nav-box">
                    <h4 class="nav-title">Outros</h4>
                    <ul class="nav-list">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="glyphicon glyphicon-briefcase"></i> Clientes</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="glyphicon glyphicon-user"></i> Usuários</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- CONTENT -->
        <div id="app-views" role="main">
            <div class="app-header">
                <ul class="app-header-nav left none">
                    <li><a href="#"><i class="glyphicon glyphicon-align-justify"></i></a></li>
                </ul>
                <ul class="app-header-nav right">
                    <li><a href="#" title="Nova tarefa"><i class="glyphicon glyphicon-edit"></i></a></li>
                </ul>
                <h1 class="app-header-title">Minhas tarefas</h1>
            </div>
            <div class="app-content">
            </div>
        </div>
    </div>
</body>
</html>
