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
            <div id="app-header">
                <ul class="app-header-nav left none">
                    <li><a href="#"><i class="glyphicon glyphicon-align-justify"></i></a></li>
                </ul>
                <ul class="app-header-nav right">
                    <li><a href="#" title="Nova tarefa"><i class="glyphicon glyphicon-edit"></i></a></li>
                </ul>
                <h1 class="app-header-title">Minhas tarefas</h1>
            </div>
            <div id="app-content" class="has-app-panel">
                <div class="content-inner">
                    <!-- Toolbar -->
                    <div class="toolbar">
                        <div class="toolbar-sections-left">
                            <div class="toolbar-section toolbar-search">
                                <input type="search" name="" class="input" placeholder="Filtrar por nome da tarefa" accesskey="s">
                            </div>
                        </div>
                        <div class="toolbar-sections-right">
                            <div class="toolbar-section">
                                <a href="#" class="btn btn-default">Ordenar por: Projeto <i class="glyphicon glyphicon-chevron-down"></i></a>
                            </div>
                            <div class="toolbar-section">
                                <a href="#" class="btn btn-default">Opções <i class="glyphicon glyphicon-chevron-down"></i></a>
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
                                    <span class="task-title">Tarefa aguardando ser finalizada</span>
                                    <span class="task-due-date">13/11/2013</span>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="task-list-item-inner">
                                    <label class="task-checkbox">
                                        <input type="checkbox">
                                    </label>
                                    <span class="task-title">Tarefa selecionada</span>
                                    <span class="task-due-date">25/12/2013</span>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="task-list-item-inner">
                                    <label class="task-checkbox">
                                        <input type="checkbox">
                                    </label>
                                    <span class="task-title">Mais uma tarefa a ser feita</span>
                                    <span class="task-due-date">13/11/2013</span>
                                </div>
                            </li>
                            <li class="task-list-item">
                                <div class="task-list-item-inner">
                                    <label class="task-checkbox checked">
                                        <input type="checkbox">
                                    </label>
                                    <span class="task-title">Tarefa finalizada</span>
                                    <span class="task-due-date">13/11/2013</span>
                                </div>
                            </li>
                            <li class="task-list-item-add">
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
                                    <span class="task-title">Tarefa finalizada</span>
                                    <span class="task-due-date">13/11/2013</span>
                                </div>
                            </li>
                            <li class="task-list-item-add">
                                <a href="#" class="btn">+ Nova tarefa</a>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>

            <article id="app-panel" class="task active">
                <header class="task-header">
                    <div class="task-row">
                        <em class="task-project"><a href="#">Project XYZ</a></em>
                    </div>
                    <div class="task-row task-row-title">
                        <label class="task-checkbox">
                            <input type="checkbox">
                        </label>
                        <span class="task-title"><a href="#">Tarefa aguardando ser finalizada</a></span>
                    </div>
                    <div class="task-row">
                        <i class="task-row-label glyphicon glyphicon-calendar"></i>
                        <span class="task-due-date"><a href="#">13/11/2013</a></span>
                    </div>
                    <div class="task-row">
                        <i class="task-row-label glyphicon glyphicon-user"></i>
                        <span class="task-asignee"><a href="#">Fulano de Tal</a></span>
                    </div>
                    <div class="task-row">
                        <i class="task-row-label glyphicon glyphicon-tags"></i>
                        <span class="task-asignee"><a href="#">Lorem</a>, <a href="#">Ipsum</a>, <a href="#">Dolor Sit</a>, <a href="#">Amet</a></span>
                    </div>
                </header>
                <ol class="task-row task-feed">
                    <li class="task-feed-item"><a href="#" class="task-feed-item-author">Fulano de Tal</a> criou a tarefa. <span class="task-feed-item-date">24 Nov</span></li>
                    <li class="task-feed-item"><a href="#" class="task-feed-item-author">Fulano de Tal</a> delegou a tarefa para <a href="#">Asdrúbal Vieira</a>. <span class="task-feed-item-date">24 Nov</span></li>
                </ol>
            </article>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="js/vendor/jquery-1.10.2.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
