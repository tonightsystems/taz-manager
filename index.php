<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Taz Manager</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
</head>
<body role="application">
    <div id="app">
        <?php include 'nav.php'; ?>
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
                <!-- Toolbar -->
                <div class="toolbar">
                    <div class="toolbar-sections-left">
                        <div class="toolbar-section toolbar-search">
                            <input type="search" name="" class="input" placeholder="Filtrar por" accesskey="s">
                            <i class="glyphicon glyphicon-search"></i>
                        </div>
                    </div>
                    <div class="toolbar-sections-right">
                        <div class="toolbar-section">
                            <a href="#" class="btn btn-default">Ordenar por: Projeto <i class="glyphicon glyphicon-chevron-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
