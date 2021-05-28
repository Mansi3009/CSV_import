<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/export-excel',[StudentController::class,'exportToExcel']);
Route::get('/export-csv',[StudentController::class,'exportToCSV']);
Route::get('/import-form',[StudentController::class,'importUploadForm']);
Route::post('/import-form',[StudentController::class,'importForm'])->name('import.file');

/*Route::get('importExportView', [MyController::class, 'importExportView']);
Route::get('export', [MyController::class, 'export'])->name('export');
Route::post('import', [MyController::class, 'import'])->name('import');*/