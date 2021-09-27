<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Adresa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script></div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
    <style>

    html {
      font-size: 12px;
   
    }
    .title {
      font-size: 14px;
    }
    .hideContent {
      overflow: hidden;
      line-height: auto;
      height: auto;
    }

    .showContent {
      line-height: auto;
      height: auto;
    }

    td,th {
      min-width: 3em; /* the normal 'fixed' width */
      width: 10em; /* the normal 'fixed' width */
      max-width: 7em; /* the normal 'fixed' width, to stop the cells expanding */
    }



    .break {
    word-wrap: break-word !important;
    display: inline-block !important;
    max-width: 11em !important;
    padding-right: 3px;
  }

  .search-input {
      width: 100px !important;
    }
    tfoot {
    display: table-header-group;
    }
    body {
    background-color: #cde8f9;
  }
  .logo {
    width: 250px;
  }
  </style>
  </head>
  <body style='font-family: Arial; background-color: #cde8f9; font-size: 14px;'>



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

         <!-- <div class='d-flex justify-content-start'>
          <img src='images/sigla.png' class='logo'>
      </div> -->
   

      <div class="d-flex justify-content-between">
        <a href="{{route('welcome')}}" class='btn btn-lg btn-info my-4'>Acasa</a>
               
        <a href="{{route('adresa.form')}}" class='btn btn-lg btn-info my-4'>Adauga adresa</a>
     
      </div>
  
  
      <table class="table table-sm px-0 " id='entry-table'>
          <thead>
              <tr>
              <th scope="col">Nr. adresa</th>
                  <th scope="col">Oras</th>
                  <th scope="col">Strada</th>
                  <th scope="col">Numar</th>
                  <th scope="col">Apartament</th>
                  <th scope='col'>Optiuni</th>
                  
              </tr>
          </thead>
          <tfoot>
              <tr>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  
            
              </tr>
          </tfoot>
          <tbody>
          @foreach($adresas as $key => $adresa)
          
              <tr>
              
              <td>{{$adresa-> idadresa}}</td>
                  <td>{{$adresa-> oras}}</td>
                  <td>{{$adresa-> strada}}</td>
                  <td>{{$adresa-> numar}}</td>
                  <td>{{$adresa-> apartament}}</td>
                 
                  <td>
                
                <a href="/adresaedit/{{$adresa->idadresa}} "class='btn btn-md btn-info'>Editeaza</a>
                <a href="/stergeadresa?id={{$adresa->idadresa}}"class='btn btn-danger'>Delete</a>
              
                </td>
           
                  </td>
                  
                  
               </tr>
           @endforeach
          </tbody>
          
      </table>
    </div> 

  
  
  <script>
        $(document).ready(function() {
         

            var table = $('#entry-table').DataTable( {
                orderCellsTop: true,
                fixedHeader: true
            });
        });
    </script>
  

  </body>
</html>