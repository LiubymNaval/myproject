<?php
use App\Http\Controllers\BookRpcController;
use App\Http\Controllers\BookSacController;
use App\Http\Controllers\BookRestController;
use App\Http\Controllers\BookApiController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::post('/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/books/{id}/return', [BookRpcController::class, 'returnBook']);
Route::post('/book/{id}', BookSacController::class);
Route::resource('books', BookRestController::class);
Route::apiResource('books', BookApiController::class);

Route::apiResource('/notes', NoteController::class);

Route::get('/notes-with-users', [NoteController::class, 'notesWithUsers']);
Route::get('/users-with-note-count', [NoteController::class, 'usersWithNoteCount']);
Route::get('/search-notes', [NoteController::class, 'searchNotes']);

Route::get('/users-with-notes-count', [NoteController::class, 'usersWithNotesCount']);
Route::get('/longest-and-shortest-note', [NoteController::class, 'longestAndShortestNote']);
Route::get('/notes-last-week', [NoteController::class, 'notesLastWeek']);