<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getClient() {
    
        $clients = DB::table('Client')->get();
       var_dump($clients);
        return  view('welcome')->with(['clients'=>$clients]); 
       }
       public function getClienti() {
    
        $clients = DB::table('client')->get();
     
        $adrese = array();
        $adrese = $this->getAdrese($clients);
        return  view('clienti')->with(['clients'=>$clients,'adrese'=>$adrese]); 
       }

       public function getAdrese($clients) {

        $adrese = array();
        foreach($clients as $client) {
            $adresa = DB::table('adresa')->where(['idAdresa' => $client->idadresa])->first();
            array_push($adrese, $adresa);
        }
        return $adrese;
       }
       public function index() {
        return view('welcome');
       }
       public function deleteclient( Request $request)
       {   $idClient = $request->id;
           DB::table('client')->where('idClient',$idClient)->delete();
           DB::raw("commit");
           return  redirect()->intended('/clienti');
       }
       public function rollback()
       {
        DB::raw("rollback");
       }
       public function deleteadresa( Request $request)
       {   $idadresa = $request->id;
           DB::table('adresa')->where('idAdresa',$idadresa)->delete();
           DB::raw("commit");
           return  redirect()->intended('/adresa');
       }
       
      public function addclienti(Request $request) {
        $id_nou=DB::table('client')->count()+1;
        $id_adresa=DB::table('adresa')->count()+1;
        $oras =  $request->input('Oras');
        $strada = $request->input('Strada');
        $numarCasa =  $request->input('NrCasa');
        $result = DB::table('adresa')->insert(['idadresa'=>$id_adresa,
                                            'Oras'=>$oras,
                                            'Strada'=>$strada,
                                            'NrCasa'=>$numarCasa,
                                            ]);
         DB::raw("commit");              
        $nume =  $request->input('Nume');
        $prenume = $request->input('Prenume');
       
        $result = DB::table('client')->insert(['idClient'=>$id_nou,
                                            'idAdresa'=>$id_adresa,
                                            'Nume'=>$nume,
                                            'Prenume'=>$prenume,
                                            ]);
         DB::raw("commit");              
        
        return redirect()->intended('/clienti');
   
    }
    public function clientiForm() {
        $clienti = DB::table('client');
        $adresas = DB::table('adresa')->get();
        return view('clientiadd')->with(['adresas'=>$adresas]);
    }
    public function addadresa(Request $request) {
        $id_nou=DB::table('adresa')->count()+1;
        $oras =  $request->input('Oras');
        $strada = $request->input('Strada');
        $numarCasa =  $request->input('NrCasa');
        $result = DB::table('adresa')->insert(['idadresa'=>$id_nou,
                                            'Oras'=>$oras,
                                            'Strada'=>$strada,
                                            'NrCasa'=>$numarCasa,
                                            ]);
         DB::raw("commit");              
        return redirect()->intended('/adresa');
   
    }
    public function adresaForm(Request $request) {
        $adresas = DB::table('adresa');
       
            return view('adresaadd');
    }


       public function getAdresa() {
    
        $adresas = DB::table('Adresa')->get();
    
        return  view('adresa')->with(['adresas'=>$adresas]); 
       }
       public function editclientForm($idclient) {
        $client = DB::table('client')->where('idClient',$idclient)->first();
        return view('clientiedit')->with(['client'=>$client]);  
    }
       public function editclient(Request $request, $idclient)
    { 
        $vector_update = [];
      
        $nume = $request->nume;
     
        if($nume){
            $vector_update['Nume']=$nume;
        }
        $prenume = $request->prenume;
  
        if($prenume){
            $vector_update['Prenume']=$prenume;
        }
        $cnp = $request->cnp;
        $starefinanciara = $request->starefinanciara;
        if($starefinanciara){
            $vector_update['StareFinanciara']=$starefinanciara;
        }
       
        $client_de_editat =  DB::table('client')->where('idClient',$idclient)->first();
      
        $result = 0;
        var_dump($vector_update);
       
        DB::table('client')->where(['idClient' => $idclient])->update($vector_update);
        DB::raw("commit"); 
        return redirect()->intended('/clienti');
    }
    public function editadresaForm($idadresa) {
 
        $adresa = DB::table('adresa')->where('idAdresa',$idadresa)->first();
        return view('adresaedit')->with(['adresa'=>$adresa]);  
    }
       public function editadresa(Request $request, $idadresa)
    {   
       
       
        $vector_update1 = [];
    
        $oras = $request->oras;
        if($oras){
            $vector_update1['Oras']=$oras;
        }
        $strada = $request->strada;
        if($strada){
            $vector_update1['Strada']=$strada;
        }
        $numarCasa = $request->numarC;
        if($numar){
            $vector_update1['NrCasa']=$numarCasa;
        }
      
        $adresa_de_editat =  DB::table('adresa')->where('idAdresa',$idadresa)->first();
    
        $result1 = 0;
       
          $result1 = DB::table('adresa')->where('idAdresa',$idadresa)
                                ->update($vector_update1);                   
        return redirect()->intended('/clienti');
    }
// telefon
public function getTelefon() {
    
    $telefons = DB::table('telefon')->get();

    return  view('telefon')->with(['telefons'=>$telefons]); 
   }
//prepay
public function getPrepay() {
    $prepays = DB::table('prepay')->get();
     
    $serviciu = array();
    $serviciu = $this->getServiciuu($prepays);
    return  view('prepay')->with(['prepays'=>$prepays,'serviciu'=>$serviciu]); 

   }
   public function getServiciuu($prepays) {

    $servicius = array();
    foreach($prepays as $prepay) {
        $serviciu = DB::table('serviciu')->where(['idserviciu' => $prepay->idserviciu])->first();
        array_push($servicius, $serviciu);
    }
    return $servicius;
   }
// abonament
public function getAbonament() {
    $abonaments = DB::table('abonament')->get();
     
    $serviciu = array();
    $serviciu = $this->getServiciua($abonaments);
    return  view('abonament')->with(['abonaments'=>$abonaments,'serviciu'=>$serviciu]); 

   }
   public function getServiciua($abonaments) {

    $servicius = array();
    foreach($abonaments as $abonament) {
        $serviciu = DB::table('serviciu')->where(['idServiciu' => $abonament->idserviciu])->first();
        array_push($servicius, $serviciu);
    }
    return $servicius;
   }
   // contract
   public function getContract() {
    
    $contracts = DB::table('contract')->get();

    return  view('contract')->with(['contracts'=>$contracts]); 
   }
   // factura
   public function getFactura() {
    
    $facturas = DB::table('factura')->get();

    return  view('factura')->with(['facturas'=>$facturas]); 
   }
   // subscriptie
   public function getSubscriptie() {
    
    $subscripties = DB::table('subscriptie')->get();

    return  view('subscriptie')->with(['subscripties'=>$subscripties]); 
   }
    // serviciu 
    public function getServiciu() {
    
        $servicius = DB::table('serviciu')->get();
   
        return  view('serviciu')->with(['servicius'=>$servicius]); 
       }

       public function editserviciuForm($idserviciu) {
 
        $serviciu = DB::table('serviciu')->where('idServiciu',$idserviciu)->first();
        return view('serviciuedit')->with(['serviciu'=>$serviciu]);  
    }
       public function editserviciu(Request $request, $idserviciu)
       {   
           $vector_update1 = [];
       
           $voce = $request->voce;
           if($voce){
               $vector_update1['Voce']=$voce;
           }
           $sms = $request->sms;
           if($sms){
               $vector_update1['SMS']=$sms;
           }
           $mms = $request->mms;
           if($mms){
               $vector_update['MMS']=$mms;
           }
           $apelvoce = $request->apelvoce;
           if($apelvoce){
               $vector_update['ApelVoce']=$apelvoce;
           }
           $serviciudate = $request->serviciudate;
           if($serviciudate){
               $vector_update['ServiciuDate']=$serviciudate;
           }
           $roming = $request->roming;
           if($roming){
               $vector_update['Roming']=$roming;
           }
           $serviciu_de_editat =  DB::table('serviciu')->where('idserviciu',$idserviciu)->first();
       
           $result1 = 0;
          
             $result1 = DB::table('serviciu')->where('serviciu',$serviciu)
                                   ->update($vector_update1);                   
           return redirect()->intended('/serviciu');
       }

       public function serviciuedit(Request $request, $idserviciu)
       {   
           $vector_update1 = [];
           $smsnationale = $request->smsnationale;
           if($smsnationale){
               $vector_update['smsnatioanale']=$smsnationale;
           }
           $smsinternational = $request->smsinternational;
           if($smsinternational){
               $vector_update['smsinternational']=$smsinternational;
           }
           $mmsnationale = $request->mmsnationale;
           if($mmsnationale){
               $vector_update['mmsnatioanale']=$mmsnationale;
           }
           $mmsinternational = $request->mmsinternational;
           if($mmsinternational){
               $vector_update['mmsinternational']=$mmsinternational;
           }
           $vocenationale = $request->vocenationale;
           if($vocenationale){
               $vector_update['smsnatioanale']=$vocenationale;
           }
           $voceinternational = $request->voceinternational;
           if($voceinternational){
               $vector_update['voceinternational']=$voceinternational;
           }
           $serviciudatenationale = $request->serviciudatenationale;
           if($serviciudatenationale){
               $vector_update['serviciudatenationale']=$serviciudatenationale;
           }
           $serviciudateinternational = $request->serviciudateinternational;
           if($serviciudateinternational){
               $vector_update['serviciudateinternational']=$serviciudateinternational;
           }
           $videocallnationale = $request->videocallnationale;
           if($videocallnationale){
               $vector_update['videocallnationale']=$videocallnationale;
           }
           $videocallinternational = $request->videocallinternational;
           if($videocallinternational){
               $vector_update['videocallinternational']=$videocallinternational;
           }
           
       }
       public function addserviciu(Request $request) {
        $id_nou=DB::table('serviciu')->count()+1;
        $numeserviciu =  $request->input('numeserviciu');
        $voce = $request->input('voce');
        $sms =  $request->input('sms');
        $mms =  $request->input('mms');
        $serviciudate =  $request->input('serviciudate');
        $videocall =  $request->input('videocall');
        $roaming =  $request->input('roaming');
        $smsnationale=  !$request->input('smsnationale')?0:$request->input('smsnationale');
        $smsinternational=  !$request->input('smsinternational')?0:$request->input('smsinternational');
        $result = DB::table('adresa')->insert(['idadresa'=>$id_nou,
                                            'oras'=>$oras,
                                            'strada'=>$strada,
                                            'numar'=>$numar,
                                            'apartament'=>$apartament
                                            ]);
         DB::raw("commit");              
        return redirect()->intended('/adresa');
   
    }
}
