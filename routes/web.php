<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produto;
use Illuminate\Support\Facades\Auth;

Route::get('/home', function () {
    return view('welcome');
});

//Route::view('/', 'home');
Route::get('/', function () {
    //dd(Produto::all());

    $listaProdutos = Produto::all();

    return view('home', compact('listaProdutos'));
});

Route::view('/cria-conta', 'cria-conta');

Route::view('/testedeconteudo', 'teste');

Route::post('/salva-usuario',
function (Request $request) {
    // dd($request);
    $usuario = new User();
    $usuario->name = $request->nome;
    $usuario->email = $request->email;
    $usuario->password = $request->senha;
    $usuario->save();
    dd("Salvo com sucesso!!");

})->name('salva-usuario');



// ------------------PRODUTOS--------------------------
Route::view('/cadastra-produto', 'cadastra-produto');

// --------------------login-----------------------------//

Route::view('/login','login');

Route::post('/logar', function (Request $request) {
    //dd($request);

$credentials = $request->validate([
    'email' => ['required','email'],
    'senha' => ['required'],
]);

if (Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {

    $request->session()->regenerate();

    return redirect()->intended('/cadastra-produto');
}
else{
    dd("usuario ou senha incorretos");
}
})->name('logar');

Route::get('/sair', function () {
    Auth::logout();
    return redirect('/');
});


