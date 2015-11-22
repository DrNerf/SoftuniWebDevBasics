<!doctype html>
<html>
<head>
    <title><?=(isset($this->title)) ? $this->title : 'C S'; ?></title>
<!--    <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />    -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css" />
<!--    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo URL; ?>public/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<!--    <script src="public/js/npm.js" type="text/javascript"></script>-->
    <script src="<?php echo URL; ?>public/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
    <?php 
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }
    ?>
</head>
<body>

<?php Session::init(); ?>
    <div class="container">
        <nav class="nav navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo URL; ?>index">Conference Scheduler</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php if (Session::get('loggedIn') == false):?>
                            <li><a href="<?php echo URL; ?>index">Index</a></li>
                            <li><a href="<?php echo URL; ?>help">Help</a></li>
                        <?php endif; ?> 
                        <li>
                            <?php if (Session::get('loggedIn') == true):?>
                                <li><a href="<?php echo URL; ?>dashboard">Dashboard</a></li>
                                <li><a href="<?php echo URL; ?>note">Notes</a></li>

                                <?php if (Session::get('role') == 'owner'):?>
                                <li><a href="<?php echo URL; ?>user">Users</a></li>
                                <?php endif; ?>

                                <li><a href="<?php echo URL; ?>dashboard/logout">Logout</a> </li>   
                            <?php else: ?>
                                <li><a href="<?php echo URL; ?>login">Login</a></li>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                   
                
            </div>
        </nav>
        <div id="content" class="panel panel-default">
            <div class="container-fluid">
    

    
    