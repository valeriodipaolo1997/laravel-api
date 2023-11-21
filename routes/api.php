<?php


use App\Http\Controllers\Api\ProjectController;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/projects', [ProjectController::class, 'projects']);

Route::get('projects/{project:slug}', [ProjectController::class, 'show']);

Route::get('/projects-latest', [ProjectController::class, 'latestProjects']);

Route::get('/types', [TypeController::class, 'types']);

Route::get('/technologies', [TechnologyController::class, 'technologies']);