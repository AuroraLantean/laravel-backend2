<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
	return 'Hello World';
});

Route::get('/csrf_token', function (Request $request) {
	//Log::warning("get_token_warning");
	Log::info("csrf_token");
	//Log::debug("get_token_debug");
	//Log::channel('command')->info('get_token_command channel');

	$token = $request->session()->token();
	Log::info("session_token: " . $token);
	$token = csrf_token();
	Log::info("csrf_token: " . $token);
	return response()->json([
		'csrf_token' => $token
	]);
	//return $token;
});
Route::post('/send_txn', function (Request $request) {
	Log::info("send_txn_info");
	//Log::info('User {id} failed to login.', ['id' => $user->id]);
	//Log::withContext(['request-id' => $requestId]);
	$url = $request->url();
	$method = $request->method();
	$input = $request->all();
	$id = $request->input('id', 'null');
	$target = $request->input('target', 'null');
	$amount = $request->input('amount', 'null');
	Log::debug("send_txn amount: " . $amount);
	//$request->post("target");
	/*$validated = $request->validate([
		"target" => 'required|string|max:255',
	]); //integer|exists:tableName,must exist in columnName*/
	return response()->json([
		'id' => $id,
		'target' => $target,
		'amount' => $amount
	]);
});
