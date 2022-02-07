<?php

use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/products', function (Request $request) {
    $produits = Produit::get();
    return response()->json($produits);
});

Route::get('/products/{id}', function (Request $request,$id) {
    $produit = Produit::find($id);
    return response()->json($produit);
});

Route::get('/productsByCategory/{id}', function (Request $request,$id) {
    $produits = Produit::where('categorie_id',$id)->get();
    return response()->json($produits);
});

/*
Produits : get show bycategory search
Categories : get show search
// ajouter image pour produits et categories
Clients : get show search
Commandes : create delete
Commandes reçus //ajouter une nouvette attribute status encours   
Table commercents (users) : get show
*/

/*
Mesures
vision de loin
oiel gauche 
oiel doite 
sphère
cylindre
axe
lentille
eip
hauteur
vision de près
oiel gauche 
oiel doite
*/
