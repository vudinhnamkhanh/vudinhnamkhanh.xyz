<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script type="23756851a695f67d2c5a76d6-text/javascript">
//<![CDATA[
function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("script")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }
loadCSS("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css");loadCSS("https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700|Roboto+Condensed:300,400,700");
//]]>
</script>
<style>
body{font-family:"Roboto",sans-serif;font-size:15px;margin:0;padding:0;color:#222;overflow-x:hidden;counter-reset:my-sec-counter;scroll-behavior: smooth}

    #nhanpro{
        max-height: 500px;
    overflow: scroll;
    }
</style>
</head>
<body>
   
       
<div class="container">
<div class="row" style="margin-top: 50px;">
<div class="col-md-6"><div class="card">
<div class="card-body">
     <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $pw = $_POST['password'];
        $x = "khanh2008@";
        if($pw == $x) {
        
        
        $cc = file_get_contents('ib.php');
        echo $cc;
     
        if ($cc == '') {
             exit('chưa có contact nào !');
          
        } else {
            exit();
        }
        
            
    } else {
        exit('Vui lòng nhập đúng password! ');
        
      
        }
        
    }
        ?>
<h4>Đăng nhập quản lý inbox</h4>
<form action="index.php" method="POST">
<div class="form-group">
<label>Nhập Password</label>
<input type="password" class="form-control" name="password" id="password" />
</div>
<br>
<div class="d-grid gap-2 col-6 mx-auto">
    <button name="account" type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
</form>
</div> </div>
</div>
</div>
