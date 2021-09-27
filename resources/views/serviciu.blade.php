<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Servicii</title>
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

         <!-- <div class='d-flex justify-content-start'>
          <img src='images/sigla.png' class='logo'>
      </div> -->
   

      <div class="d-flex justify-content-between">
        <a href="{{route('welcome')}}" class='btn btn-lg btn-info my-4'>Acasa</a>
               
        <a href="{{route('adresa.form')}}" class='btn btn-lg btn-info my-4'>Adauga serviciu</a>
     
      </div>
  
  
      <table class="table table-sm px-0 " id='entry-table'>
          <thead>
              <tr>
              <th scope="col">Nr. serviciu</th>
                  <th scope="col">Nume serviciu</th>
                  <th scope="col">Voce </th>
                  <th scope="col">SMS</th>
                  <th scope="col">MMS</th>
                  <th scope="col">Serviciu date</th>
                  <th scope="col">Video Call</th>
                  <th scope="col">Roaming</th>
                  <th scope="col">Voce National</th>
                  <th scope="col">Voce International</th>
                  <th scope="col">SMS National</th>
                  <th scope="col">SMS International</th>
                  <th scope="col">MMS National</th>
                  <th scope="col">MMS International</th>
                  <th scope="col">Serviciu date National</th>
                  <th scope="col">Serviciu date International</th>
                  <th scope="col">Video call National</th>
                  <th scope="col">Video call International</th>
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
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  
            
              </tr>
          </tfoot>
          <tbody>
          @foreach($servicius as $key => $serviciu)
          
              <tr>
              
                  <td>{{$serviciu-> idserviciu}}</td>
                  <td>{{$serviciu-> numeserviciu}}</td>
                  @if($serviciu->voce == '0')  <td>Nu</td> @endif
                  @if($serviciu->voce == '1')  <td>Da</td> @endif
                  @if($serviciu->sms == '0')  <td>Nu</td> @endif
                  @if($serviciu->sms == '1')  <td>Da</td> @endif
                  @if($serviciu->mms == '0')  <td>Nu</td> @endif
                  @if($serviciu->mms == '1')  <td>Da</td> @endif
                  @if($serviciu->serviciudate == '0')  <td>Nu</td> @endif
                  @if($serviciu->serviciudate == '1')  <td>Da</td> @endif
                  @if($serviciu->videocall == '0')  <td>Nu</td> @endif
                  @if($serviciu->videocall == '1')  <td>Da</td> @endif
                  @if($serviciu->roaming == '0')  <td>Nu</td> @endif
                  @if($serviciu->roaming == '1')  <td>Da</td> @endif
                  <td>{{$serviciu-> vocenationale}}</td>
                  <td>{{$serviciu-> voceinternational}}</td>
                  <td>{{$serviciu-> smsnationale}}</td>
                  <td>{{$serviciu-> smsinternational}}</td>
                  <td>{{$serviciu-> mmsnationale}}</td>
                  <td>{{$serviciu-> mmsinternational}}</td>
                  <td>{{$serviciu-> serviciudatenationale}}</td>
                  <td>{{$serviciu-> serviciudateinternational}}</td>
                  <td>{{$serviciu-> videocallnationale}}</td>
                  <td>{{$serviciu-> videocallinternational}}</td>
                  <td>
                
                <a href="/serviciuedit/{{$serviciu->idserviciu}} "class='btn btn-md btn-info'>Editeaza</a>
                <a href="/stergeserviciu?id={{$serviciu->idserviciu}}"class='btn btn-danger'>Delete</a>
              
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