<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tasks</title>
        <link href="public_html/css/bootstrap.css" rel="stylesheet">
        <link href="public_html/css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
        // vanilla.js
            function XmlHttp(){
                var xmlhttp;
                try{
                    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e){
                    try {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    } 
                    catch (E){
                        xmlhttp = false;
                    }
                }
                if (!xmlhttp && typeof XMLHttpRequest!='undefined'){
                    xmlhttp = new XMLHttpRequest();
                }
                return xmlhttp;
            }
             
            function ajax(param){
                if (window.XMLHttpRequest){
                    req = new XmlHttp();  
                }
                method=(!param.method ? "POST" : param.method.toUpperCase());
                if(method=="GET"){
                   send=null;
                   param.url=param.url+"&ajax=true";
                }else{
                   send="";
                   for (var i in param.data){
                         send+= i+"="+param.data[i]+"&";
                   }
                }
                req.open(method, param.url, true);
                // if(param.statbox){
                //     document.getElementById(param.statbox).innerHTML = '<img src="wait.gif">';   
                // }
                req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                req.send(send);
                req.onreadystatechange = function(){
                    if (req.readyState == 4 && req.status == 200){ //если ответ положительный
                        if(param.success){
                            param.success(req.responseText);
                        }
                    }
                }
            }
        </script>
    </head>
    <body>
        <div class="container">

