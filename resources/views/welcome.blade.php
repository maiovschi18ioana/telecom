<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> HOME </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </head>
  <body style='font-family: Arial; background-color: #cde8f9; font-size: 14px;'>


    <div class="header" style="padding:10px; border-bottom:1px solid black;">
      <div class="clock" style="position:center;top:10px;left:50px;text-align: center;vertical-align: middle;">

      </div>
   

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



    <div class='container-fluid text-center'>
    
    </div>

    <div class="gridMaster"> 
       

        <div class="grid">
            <a href="{{route('clienti')}}" class="blocks"> Clienti </a>
            <a href="{{route('adresa')}}" class="blocks"> Adresa </a>
            <a href="{{route('telefon')}}" class="blocks"> Telefoane </a>
            <a href="{{route('contract')}}" class="blocks"> Contracte </a>
            <a href="{{route('factura')}}" class="blocks"> Facturi </a>
            <a href="{{route('serviciu')}}" class="blocks"> Servicii </a>
            <a href="{{route('prepay')}}" class="blocks"> Prepay </a>
            <a href="{{route('abonament')}}" class="blocks"> Abonament </a>
            <a href="{{route('subscriptie')}}" class="blocks"> Subscriptie </a>
        </div>
     
        
     </div>
     
    <style>
      body{
        
          background-image:url('7.jpeg');
          background-size:1600px 1100px; 
   
                background-attachment: fixed;
      }
      
          .blocks{
            background:#7B68EE;
          }
            .block{
             background:#7B68EE;
          }
          
          
      .grid {
    
          margin:0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: .5rem;
            padding: .5rem;
            grid-auto-rows: minmax(100px, auto);
   
      }
             .grid2 {
  
             margin:0 auto;
             display: grid;
             
             grid-template-columns: repeat(2, 1fr);
               grid-gap: .5rem;
            padding: .5rem;
            grid-auto-rows: minmax(100px, auto);
      
            
         
            }
            

       .gridMaster{
             width:40%;
  
        margin:0 auto;
        margin-top: 30px;
 
         grid-gap: .5rem;
         padding: .7rem;
   
           /* box-shadow:0px 10px 50px 0px black;*/
            
        }


 .blocks{
     font-family: monospace;
     text-decoration: none;;
     user-select: none;
     cursor: pointer;
    margin:10px;
    transition:.2s ease-in-out;
    color:white;
    text-align: center;
    padding:50px ;
}
 .blocks:hover{
         transform:scale(1.1);
    }
    
    
    
    .block{
     font-family: monospace;
     text-decoration: none;;
     user-select: none;
     cursor: pointer;
    margin:10px;
    transition:.2s ease-in-out;
    color:white;
    text-align: center;
    padding:50px 0;
}
 .block:hover{
         transform:scale(1.1);
    }
      </style>
  </body>
  
</html>