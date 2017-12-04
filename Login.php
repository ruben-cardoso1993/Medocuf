<!DOCTYPE HTML>
<html>
    <style>
        input[type=submit]{
            width: auto;
            background-color: #1abc9c;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #PagLogin{
            font: 15px Montserrat, sans-serif;
            margin: auto;
            margin-top: 250px;
    
        }
    </style>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container" id="PagLogin">
            <form class="form-horizontal" align=center  method="post" action="Verificar.php">
                <div class="form-group">
                    <label class="control-label col-sm-2" name="User" for="username">Nome do Utilizador:</label>      
                        <div class="col-sm-8">
                            <input type="text" name="username" class="form-control" placeholder="*********"require>
                        </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" name="Pass" for="pwd">Password:</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" placeholder="*********"> 
                        </div>
                </div>          
                    <input type="submit" name="Entrar" value="Login">
            </form>
        </div>
    </body>
</html>
