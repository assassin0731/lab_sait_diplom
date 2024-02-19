<html>
<head>
    <title>js .html demo</title>
    <!-- Не забываем подключить библиотеку -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.0.js"></script>
</head>
<body>

<div id="block">
<p>Hello World</p>
</div>



<br>
<a onclick="setNewEntry('123'); return false;" href="#">Button 1</a><br>
<a onclick="setNewEntry('Pressed button 2'); return false;" href="#">Button 2</a><br>
<a onclick="setNewEntry('Pressed button 3'); return false;" href="#">Button 3</a><br>
<a onclick="setInterval; return false;" href="#">Button 4</a><br>
<a onclick="setNewEntry(''); return false;" href="#">Clear block</a><br>

<script type="text/javascript">
    function setNewEntry(entry) {
        //#block - найти элемент по индентификатору
        //.block - найти по имени класса
        $('#block').html(entry);
    }
    setInterval(function(){
$("#logo").load("smiv.blade.php #logo");
}, 30000);

</script>

<p>Какую страницу желаете открыть?</p>
   <form>
       <input id="btn1" type="button" value="Страница 1">
       <input id="btn2" type="button" value="Страница 2">
   </form>
   <div id="content"></div>

   <script>
       $(document).ready(function(){

           $('#btn1').click(function(){
               $.ajax({
                   url: "/info",
                   cache: false,
                   success: function(html){
                       $("#content").html(html);
                   }
               });
           });

           $('#btn2').click(function(){
               $.ajax({
                   url: "page2.html",
                   cache: false,
                   success: function(html){
                       $("#content").html(html);
                   }
               });
           });

       });
   </script>

</body>
</html>
