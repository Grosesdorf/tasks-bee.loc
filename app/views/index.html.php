<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tasks</title>
        <link href="app/css/bootstrap.css" rel="stylesheet">
        <link href="app/css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div class="container">
            <div class="table-responsive">
                <table id="tasksTable" class="table table-bordered table-hover text-center tablesorter">
                    <thead>
                        <tr>
                            <th>Имя</th>
                            <th>E-mail</th>
                            <th>Задача</th>
                            <th>Изображение</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>admin</td>
                            <td>admin@admin.com</td>
                            <td class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur suscipit facere, minus animi atque, optio cupiditate, ullam consequuntur unde accusamus exercitationem error perspiciatis aliquid ea. Nulla id, ad ratione magnam!01</td>
                            <td><img src="img/01n.jpg" alt="01n"></td>
                        </tr>
                        <tr>
                            <td>user01</td>
                            <td>user01@admin.com</td>
                            <td class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur suscipit facere, minus animi atque, optio cupiditate, ullam consequuntur unde accusamus exercitationem error perspiciatis aliquid ea. Nulla id, ad ratione magnam!02</td>
                            <td><img src="img/02n.jpg" alt="02n"></td>
                        </tr>
                        <tr>
                            <td>user02</td>
                            <td>user02@admin.com</td>
                            <td class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur suscipit facere, minus animi atque, optio cupiditate, ullam consequuntur unde accusamus exercitationem error perspiciatis aliquid ea. Nulla id, ad ratione magnam!03</td>
                            <td><img src="img/03n.jpg" alt="03n"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="app/js/bootstrap.js"></script>
        <script src="app/js/jquery.tablesorter.js"></script>
        <script src="app/js/main.js"></script>
    </body>
</html>