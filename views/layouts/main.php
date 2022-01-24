<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<div id="wrapper">
    <nav class=" navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse"
                    data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand waves-effect waves-dark" href="index.html"><i class="large material-icons"></i>
                <strong>target</strong></a>
            <div id="sideNav" href=""><i class="material-icons dp48">a</i></div>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4">
                    <i class="fa fa-envelope fa-fw"></i> <i class="material-icons right"></i>
                </a>
            </li>
            <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown3">
                    <i class="fa fa-tasks fa-fw"></i> <i class="material-icons right"></i>
                </a>
            </li>
            <li>
                <a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2">
                    <i class="fa fa-bell fa-fw"></i> <i class="material-icons right"></i>
                </a>
            </li>
            <li>
                <a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1">
                    <i class="fa fa-user fa-fw"></i> <b>John Doe</b>
                    <i class="material-icons right"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
        </li>
        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
        </li>
        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
    </ul>
    <ul id="dropdown2" class="dropdown-content w250">
        <li>
            <div>
                <i class="fa fa-comment fa-fw"></i> New Comment
                <span class="pull-right text-muted small">4 min</span>
            </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <div>
                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                <span class="pull-right text-muted small">12 min</span>
            </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <div>
                <i class="fa fa-envelope fa-fw"></i> Message Sent
                <span class="pull-right text-muted small">4 min</span>
            </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <div>
                <i class="fa fa-tasks fa-fw"></i> New Task
                <span class="pull-right text-muted small">4 min</span>
            </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <div>
                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                <span class="pull-right text-muted small">4 min</span>
            </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a class="text-center" href="#">
                <strong>See All Alerts</strong>
                <i class="fa fa-angle-right"></i>
            </a>
        </li>
    </ul>
    <ul id="dropdown3" class="dropdown-content dropdown-tasks w250">
        <li>
            <a href="#">
                <div>
                    <p>
                        <strong>Task 1</strong>
                        <span class="pull-right text-muted">60% Complete</span>
                    </p>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (success)</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <p>
                        <strong>Task 2</strong>
                        <span class="pull-right text-muted">28% Complete</span>
                    </p>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28"
                             aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                            <span class="sr-only">28% Complete</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <p>
                        <strong>Task 3</strong>
                        <span class="pull-right text-muted">60% Complete</span>
                    </p>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (warning)</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <p>
                        <strong>Task 4</strong>
                        <span class="pull-right text-muted">85% Complete</span>
                    </p>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85"
                             aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                            <span class="sr-only">85% Complete (danger)</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
    </ul>
    <ul id="dropdown4" class="dropdown-content dropdown-tasks w250 taskList">
        <li>
            <div>
                <strong>John Doe</strong>
                <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
            </div>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <div>
                <strong>John Smith</strong>
                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
            </div>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</p>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <strong>John Smith</strong>
                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                </div>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the...</p>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a class="text-center" href="#">
                <strong>Read All Messages</strong>
                <i class="fa fa-angle-right"></i>
            </a>
        </li>
    </ul>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <?php
            echo Menu::widget([
                'options' => [
                    'id' => 'main-menu',
                    'class' => 'nav',
                ],
                'items' => [
                    [
                        'label' => Yii::t('app', 'Monitor'),
                        'url' => '/bichuv/tikuv-plan/preview',
                        'template' => '<a href="{url}" class="waves-effect waves-dark"><i class="fa fa-user"></i><span> {label}</span></a>',
                    ],
                    [
                        'label' => Yii::t('app', " To'quv mashinalar ma'lumoti"),
                        'url' => '/toquv/toquv-makine/makine',
                        'template' => '<a href="{url}" class="waves-effect waves-dark"><i class="fa fa-user"></i><span> {label}</span></a>',
                    ],
                    [
                        'label' => Yii::t('app', 'Bo\'lim Administrator'),
                        'url' => ['#'],
                        'options' => ['class' => 'nav nav-second-level collapse in'],
                        'template' => '<a href="{url}"><i class="fa fa-user"></i><span> {label}</span><i class="fa fa-angle-left pull-right"></i></a>',
                        'items' => [
                            [
                                'label' => Yii::t('app', 'Users'),
                                'url' => '/cotton/cotton-users/index',
                                'template' => '<a href="{url}" class="waves-effect waves-dark"><i class="fa fa-user"></i><span> {label}</span></a>',
                            ],
                            [
                                'label' => Yii::t('app', 'Departments'),
                                'url' => '/cotton/cotton-users/departments',
                                'template' => '<a href="{url}" class="waves-effect waves-dark"><i class="fa fa-user"></i><span> {label}</span></a>',
                            ],
                        ],
                    ],
                ],

                'linkTemplate' => '<a href="{url}"><i class="fa fa-circle-o"></i> {label}</a>',
                'submenuTemplate' => "\n<ul class='treeview-menu'>\n{items}\n</ul>\n",
                'encodeLabels' => false, //allows you to use html in labels
                'activateParents' => true,
            ]);

            ?>
        </div>

    </nav>

    <div id="page-wrapper">
        <?php echo Alert::widget() ?>

        <?php echo $content ?>

        <?php echo Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<style>
    #main-menu li {
        width: 100% !important;
    }
</style>