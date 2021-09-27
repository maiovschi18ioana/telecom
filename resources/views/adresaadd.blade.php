<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Client nou</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script> 

    <style>
    html {
      font-size: 12px;
    }
    .title {
      font-size: 14px;
    }
    </style>
  </head>
  <body style='font-family: Arial; background-color: #cde8f9; font-size: 14px;'>


    <div class="header" style="padding:10px; border-bottom:1px solid black;">
      <div class="clock" style="position:absolute;top:10px;left:10px;">



    </div>
    <script>
     var time = new Date();
            $('.clock').html(time.toLocaleString());
      window.onload = function(){
       
        setInterval(function(){
          var time = new Date();
            $('.clock').html(time.toLocaleString());
        },1000);
      }
    </script>

    <div class='container text-center'>
        
        <a href="{{route('welcome')}}" class='btn btn-lg btn-info mt-4 title'>Acasa</a>
  
        
      
 
        <form class='text-left' action="{{route('adresaadd')}}" method='post' enctype="multipart/form-data">
        @csrf
            
            <div class="form-group">
                <label class='title'>Oras</label>
                <input type="text" class="form-control" name='oras' >
            </div>
            <div class="form-group">
                <label class='title'>Strada</label>
                <input type="text" class="form-control" name='strada' >
            </div>
            <div class="form-group">
                <label class='title'>Numar</label>
                <input type="text" class="form-control" name='numar' >
            </div>
            <div class="form-group">
                <label class='title'>Apartament</label>
                <input type="text" class="form-control" name='apartament' >
            </div>
        

            <div class='d-flex justify-content-end'>
                <button type='submit' class='btn btn-lg btn-success my-3 title' id="submit_button">Adauga adresa</button>
            </div>

            
        </form>
        <script>
       
<style>

      .wrong{
        border:1px solid red;
      }
  </style>
        
    </div>

    

   

 
  </body>
</html>