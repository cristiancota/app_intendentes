<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {

	$data = App\Movimiento::where('activa', '=', '1' )->orderBy('updated_at', 'desc')
		->paginate(10);

	return view("uson.index", compact('data'));
});
Route::get('historial',function(){
	return view('uson.historial');
});

/*
Route::get('revision',function(){
	return view('uson.revision');
});
*/
Route::get('registro',function(){
	return view('uson.historial');
});


Route::resource('tareas','Tareas');

Route::resource('intendentes','Intendentes');

Route::resource('plantas','Plantas');

Route::resource('movimientos','Movimientos');
Route::post('movimientos/revision', 'Movimientos@revision');

Route::resource('revisiones','Revisiones');

Route::resource('movimientos','Movimientos');
Route::post('movimientos/desactivar/{id}', 'Movimientos@desactivar');

Route::resource('usuarios','Users');

Route::resource('edificios','Edificios');


/*
 * Dashboard
 */
Route::get('home', ['middleware' => 'auth',function(){
	\Laracasts\Flash\Flash::message("Bienvenido ");
	return \Illuminate\Support\Facades\Redirect::back();
}]);





Route::get('contacto',function(){
    return view('pages.contacto');
});

//Search
Route::post('blog/search',function(\Illuminate\Http\Request $key){
	 $articles = \App\Article::where('title','LIKE',"%$key->word%")
		 			->orderBy('updated_at', 'desc')
		 				->paginate(3);
		$cate = "search";
	return view('pages.articles', compact('articles','cate'));
});
//Search Json
Route::post('blog/search/json',function(\Illuminate\Http\Request $key){
	$articles = \App\Article::where('title','LIKE',"%$key->word%")
		->orderBy('updated_at', 'desc')
		->get();
		return $articles;
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');







/*
 * Testing template email
 */
Route::get('/testM', function()
{
	$beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);
	$beautymail->send('emails.template', [], function($message)
	{
		$message
			->from('bar@example.com')
			->to('alejandrogalaz21@gmail.com', 'John Smith')
			->subject('Welcom!');
	});
});
/*
 * Practicando con angular regresa la vista de angularjs
 */
Route::get('angular', function(){
	return view('pages.angular');
});
/*
 * Practicando con angular regresa los resultados de todos los
 * articulos
 */
Route::get('result',function(){
			$article = \App\Article::with("User")->get();
			return	Response::json($article);
});


/*
 * Rotas dedicadas para practicar estilos de csss
 */

Route::get('css', function(){
return view('practice.practice');
});

/*
 * RUTAS PARA DOCUMNTOS PDF
 */


/*
 * Perfil
 */
Route::get('profile/{id}',function($id){
	$profile = \App\User::findOrFail($id);
	return view("profile.profile", compact('profile'));
});


Route::get('now',function(){
$date= \Carbon\Carbon::now();
	 // 2000-01-31


});
