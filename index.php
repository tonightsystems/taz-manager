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
                <div class="content-inner">
                    <!-- Toolbar -->
                    <div class="toolbar">
                        <div class="toolbar-sections-left">
                            <div class="toolbar-section toolbar-search">
                                <input type="search" name="" class="input" placeholder="Filtrar por" accesskey="s">
                            </div>
                        </div>
                        <div class="toolbar-sections-right">
                            <div class="toolbar-section">
                                <a href="#" class="btn btn-default">Ordenar por: Projeto <i class="glyphicon glyphicon-chevron-down"></i></a>
                            </div>
                        </div>
                    </div>

                    <section class="task-list-wrapper">
                        <header>
                            <h1 class="task-list-title">Projeto X</h1>
                        </header>
                        <ul class="task-list">
                            <li class="task-list-item">
                                <div class="task-list-item-inner">
                                    <label class="task-checkbox">
                                        <input type="checkbox">
                                    </label>
                                    <span class="task-name">Tarefa aguardando ser finalizada</span>
                                    <span class="task-due-date">13/11/2013</span>
                                </div>
                            </li>
                            <li class="task-list-item active">
                                <div class="task-list-item-inner">
                                    <label class="task-checkbox">
                                        <input type="checkbox">
                                    </label>
                                    <span class="task-name">Tarefa selecionada</span>
                                    <span class="task-due-date">25/12/2013</span>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="task-list-item-inner">
                                    <label class="task-checkbox">
                                        <input type="checkbox">
                                    </label>
                                    <span class="task-name">Mais uma tarefa a ser feita</span>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="task-list-item-inner">
                                    <label class="task-checkbox checked">
                                        <input type="checkbox">
                                    </label>
                                    <span class="task-name">Tarefa finalizada</span>
                                </div>
                            </li>
                            <li class="task-list-item task-list-item-add">
                                <a href="#" class="btn">+ Nova tarefa</a>
                            </li>
                        </ul>
                    </section>
                    <section class="task-list-wrapper">
                        <header>
                            <h1 class="task-list-title">Projeto XYZ</h1>
                        </header>
                        <ul class="task-list">
                            <li class="task-list-item">
                                <div class="task-list-item-inner">
                                    <label class="task-checkbox checked">
                                        <input type="checkbox">
                                    </label>
                                    <span class="task-name">Tarefa finalizada</span>
                                </div>
                            </li>
                            <li class="task-list-item task-list-item-add">
                                <a href="#" class="btn">+ Nova tarefa</a>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>

            <article class="task right-panel">

            </article>
        </div>
    </div>
</body>
</html>
