<?php
if(!isset($_SESSION['user']))
{
    header('LOCATION: ../php/login.php');
}
?>
<html>
    <head>
        <link href='../css/template1.css'type='text/css'rel='stylesheet'/>
        <link href='../css/account.css'type='text/css'rel='stylesheet'/>
        <script src='../js/index.js'></script>
        <h1>
            User: <?php echo $_SESSION['user'] ?> Date: <?php echo date('m/d/Y') ?>
        </h1>
        <h2>
            <button class='menubutton'onclick='tomain()'type='button'>Main</button><button class='menubutton'onclick='logout()'type='button'>Log Out</button>
        </h2>
        <body>
            <label class='xpndlbl'id='cplbl'>Change Password</label>
            <div id='chngpass'>
                <form name='changepass'method='post'>
                    <label class='passlbls'>Old Password:</label>
                    <input type='password'name='oldpass'id='oldpass'/><br/>
                    <label class='passlbls'>New Password:</label>
                    <input type='password'name='newpass'id='newpass'/><br/>
                    <label class='passlbls'>New Password Again:</label>
                    <input type='password'name='newpassagain'id='newpassagain'/><br/>
                    <button type='submit'id='chngsb'class='passbutton'>Submit</button><button class='passbutton'type='button'onclick='clearpassfields()'>Clear</button>
                </form>
            </div>
            <script src='../js/JQuery.js'></script>
            <script src='../js/account.js'></script>
        </body>
    </head>
</html>