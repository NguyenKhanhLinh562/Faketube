<?php

use App\Http\Controllers\ChannelController;

Route::get('/channels', [ChannelController::class, 'index']);
Route::get('/channels/create', [ChannelController::class, 'create']);
Route::post('/channels', [ChannelController::class, 'store']);
Route::get('/channels/{channel}/edit', [ChannelController::class, 'edit']);
Route::put('/channels/{channel}', [ChannelController::class, 'update']);
Route::delete('/channels/{channel}', [ChannelController::class, 'destroy']);
Route::get('/channels/{channel}', 'ChannelController@show')->name('channels.show');

