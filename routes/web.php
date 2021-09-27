<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', [Controller::class,'index'])->name('welcome');

///clienti
Route::get('/clienti',[Controller::class, 'getClienti'])->name('clienti');
Route::get('/clientiadd',[Controller::class,'clientiForm'])->name('clienti.form'); //adauga
Route::post('/clientiadd', [Controller::class,'addclienti'])->name('clientiadd'); //adauga
Route::post('/clientiedit/{idclient}', [Controller::class,'editclient'])->name('clientiedit'); //edit
Route::get('/clientiedit/{idclient}',  [Controller::class,'editclientForm'])->name('clientedit.form');//edit 
Route::get('/stergeclient',[Controller::class,'deleteclient']);//delete

//adresa
Route::get('/adresa',[Controller::class, 'getAdresa'])->name('adresa');
Route::get('/adresaadd',[Controller::class,'adresaForm'])->name('adresa.form'); //adauga
Route::post('/adresaadd', [Controller::class,'addadresa'])->name('adresaadd'); //adauga
Route::post('/adresaedit/{idadresa}', [Controller::class,'editadresa'])->name('adresaedit'); //edit
Route::get('/adresaedit/{idadresa}',  [Controller::class,'editadresaForm'])->name('adresaedit.form');//edit 
Route::get('/stergeadresa',[Controller::class,'deleteadresa']);//delete

//serviciu
Route::get('/serviciu',[Controller::class, 'getServiciu'])->name('serviciu');
Route::get('/serviciuadd',[Controller::class,'serviciuForm'])->name('serviciu.form'); //adauga
Route::post('/serviciuadd', [Controller::class,'addserviciu'])->name('serviciuadd'); //adauga
Route::post('/serviciuedit/{idserviciu}', [Controller::class,'editserviciu'])->name('serviciuedit'); //edit
Route::get('/serviciuedit/{idserviciu}',  [Controller::class,'editserviciuForm'])->name('serviciuedit.form');//edit 
Route::get('/stergeserviciu',[Controller::class,'deleteadresa']);//delete

//telefon
Route::get('/telefon',[Controller::class, 'getTelefon'])->name('telefon');
Route::get('/serviciuadd',[Controller::class,'serviciuForm'])->name('telefon.form'); //adauga
Route::post('/serviciuadd', [Controller::class,'addserviciu'])->name('telefonadd'); //adauga
Route::post('/telefonedit/{idtelefon}', [Controller::class,'edittelefon'])->name('telefonedit'); //edit
Route::get('/telefonedit/{idtelefon}',  [Controller::class,'edittelefonForm'])->name('telefonedit.form');//edit 
Route::get('/stergeretelefon',[Controller::class,'deletetelefon']);//delete

//subscriptie
Route::get('/subscriptie',[Controller::class, 'getSubscriptie'])->name('subscriptie');
Route::get('/subscriptieadd',[Controller::class,'subscriptieForm'])->name('subscriptie.form'); //adauga
Route::post('/subscriptieadd', [Controller::class,'addsubscriptie'])->name('subscriptieadd'); //adauga
Route::post('/subscriptieedit/{idsubscriptie}', [Controller::class,'editsubscriptie'])->name('subscriptieedit'); //edit
Route::get('/subscriptieedit/{idsubscriptie}',  [Controller::class,'editsubscriptieForm'])->name('subscriptieedit.form');//edit 
Route::get('/stergeresubscriptie',[Controller::class,'deletesubscriptie']);//delete

//prepay
Route::get('/prepay',[Controller::class, 'getPrepay'])->name('prepay');
Route::get('/prepayadd',[Controller::class,'prepayForm'])->name('prepay.form'); //adauga
Route::post('/prepayadd', [Controller::class,'addprepay'])->name('prepayadd'); //adauga
Route::post('/prepayedit/{idprepay}', [Controller::class,'editprepay'])->name('prepayedit'); //edit
Route::get('/prepayedit/{idprepay}',  [Controller::class,'editprepayForm'])->name('prepayedit.form');//edit 
Route::get('/stergereprepay',[Controller::class,'deleteprepay']);//delete

//contract
Route::get('/contract',[Controller::class, 'getContract'])->name('contract');
Route::get('/contractadd',[Controller::class,'contractForm'])->name('contract.form'); //adauga
Route::post('/contractadd', [Controller::class,'addcontract'])->name('contractadd'); //adauga
Route::post('/contractedit/{idcontract}', [Controller::class,'editcontract'])->name('contractedit'); //edit
Route::get('/contractedit/{idcontract}',  [Controller::class,'editcontractForm'])->name('contractedit.form');//edit 
Route::get('/stergecontract',[Controller::class,'deletecontract']);//delete

//factura
Route::get('/factura',[Controller::class, 'getFactura'])->name('factura');
Route::get('/facturaadd',[Controller::class,'facturaForm'])->name('factura.form'); //adauga
Route::post('/facturaadd', [Controller::class,'addfactura'])->name('facturaadd'); //adauga
Route::post('/facturaedit/{idfactura}', [Controller::class,'editfactura'])->name('facturaedit'); //edit
Route::get('/facturaedit/{idfactura}',  [Controller::class,'editfacturaForm'])->name('facturaedit.form');//edit 
Route::get('/stergerefactura',[Controller::class,'deletecontract']);//delete

//abonament
Route::get('/abonament',[Controller::class, 'getAbonament'])->name('abonament');
Route::get('/abonamentadd',[Controller::class,'abonamentForm'])->name('abonament.form'); //adauga
Route::post('/abonamentadd', [Controller::class,'addabonament'])->name('abonamentadd'); //adauga
Route::post('/abonamentedit/{idabonament}', [Controller::class,'editabonament'])->name('abonamentedit'); //edit
Route::get('/abonamentedit/{idabonament}',  [Controller::class,'editabonamentForm'])->name('abonamentedit.form');//edit 
Route::get('/stergereabonament',[Controller::class,'deleteabonament']);//delete