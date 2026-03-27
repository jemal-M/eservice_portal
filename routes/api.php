<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\KebeleController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\ServiceStepController;
use App\Http\Controllers\SubcityController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\UserOfficeController;
use App\Http\Controllers\WoredaController;
use App\Http\Controllers\WorkflowActionController;
use App\Http\Controllers\WorkflowController;
use App\Http\Controllers\WorkflowStepController;
use App\Http\Controllers\ZoneController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::middleware('auth:sanctum')->group(function () {
 Route::get('/users',[Usercontroller::class,'index']);
 Route::post('/users', [Usercontroller::class, 'store']);
 Route::get('/users/{id}', [Usercontroller::class, 'show']);
 Route::put('/users/{id}', [Usercontroller::class, 'update']);
 Route::delete('/users/{id}', [Usercontroller::class, 'destroy']);

 Route::get('/login',[Authcontroller::class,'login']);
 Route::post('/logout', [Authcontroller::class, 'logout']);
 Route::post('/register', [Authcontroller::class, 'register']);
 Route::post('/refresh', [Authcontroller::class, 'refresh']);
 Route::get('/profile', [Authcontroller::class, 'profile']);

 Route::get('/dashboard', [Dashboardcontroller::class, 'index']);
 Route::get('/dashboard/stats', [Dashboardcontroller::class, 'stats']);
 Route::get('/dashboard/users', [Dashboardcontroller::class, 'users']);
 Route::get('/dashboard/roles', [Dashboardcontroller::class, 'roles']);
 Route::get('/dashboard/activity', [Dashboardcontroller::class, 'activity']);
 Route::get('/dashboard/settings', [Dashboardcontroller::class, 'settings']);
 Route::get('/dashboard/reports', [Dashboardcontroller::class, 'reports']);
 Route::get('/dashboard/help', [Dashboardcontroller::class, 'help']);

 Route::get('/documents',[DocumentController::class,'index']);
 Route::post('/documents', [DocumentController::class, 'store']);
 Route::get('/documents/{id}', [DocumentController::class, 'show']);
 Route::put('/documents/{id}', [DocumentController::class, 'update']);
 Route::delete('/documents/{id}', [DocumentController::class, 'destroy']);

 Route::get('/kebeles',[KebeleController::class,'index']);
 Route::post('/kebeles', [KebeleController::class, 'store']);
 Route::get('/kebeles/{id}', [KebeleController::class, 'show']);
 Route::put('/kebeles/{id}', [KebeleController::class, 'update']);
 Route::delete('/kebeles/{id}', [KebeleController::class, 'destroy']);

 Route::get('/offices',[OfficeController::class,'index']);
 Route::post('/offices', [OfficeController::class, 'store']);
 Route::get('/offices/{id}', [OfficeController::class, 'show']);
  Route::put('/offices/{id}', [OfficeController::class, 'update']);
  Route::delete('/offices/{id}', [OfficeController::class, 'destroy']);
  Route::get('/offices/{id}/kebeles', [OfficeController::class, 'kebeles']);

  Route::get('/regions',[RegionController::class,'index']);
  Route::post('/regions', [RegionController::class, 'store']);
  Route::get('/regions/{id}', [RegionController::class, 'show']);
  Route::put('/regions/{id}', [RegionController::class, 'update']);
  Route::delete('/regions/{id}', [RegionController::class, 'destroy']);
  Route::get('/regions/{id}/offices', [RegionController::class, 'offices']);
  Route::get('/regions/{id}/offices/{officeId}/kebeles', [RegionController::class, 'kebeles']);

  Route::get('/services',[ServiceController::class, 'index']);
  Route::post('/services', [ServiceController::class, 'store']);
  Route::get('/services/{id}', [ServiceController::class, 'show']);
  Route::put('/services/{id}', [ServiceController::class, 'update']);
  Route::delete('/services/{id}', [ServiceController::class, 'destroy']);

  Route::get('/serviceCategory',[ServiceCategoryController::class, 'serviceCategory']);
  Route::get('/serviceCategory/{id}/services', [ServiceCategoryController::class, 'services']);
  Route::get('/serviceCategory/{id}/offices', [ServiceCategoryController::class, 'offices']);
  Route::get('/serviceCategory/{id}/regions', [ServiceCategoryController::class, 'regions']);
  Route::get('/serviceCategory/{id}/users', [ServiceCategoryController::class, 'users']);
  Route::get('/serviceCategory/{id}/documents', [ServiceCategoryController::class, 'documents']);
  Route::get('/serviceCategory/{id}/kebeles', [ServiceCategoryController::class, 'kebeles']);
  Route::get('/serviceCategory/{id}/offices/{officeId}/services', [ServiceCategoryController::class, 'officeServices']);
  Route::get('/serviceCategory/{id}/offices/{officeId}/kebeles', [ServiceCategoryController::class, 'officeKebeles']);

  Route::get('/service_request',[ServiceRequestController::class,'index']);
  Route::post('/service_request', [ServiceRequestController::class, 'store']);
  Route::get('/service_request/{id}', [ServiceRequestController::class, 'show']);
  Route::put('/service_request/{id}', [ServiceRequestController::class, 'update']);
  Route::delete('/service_request/{id}', [ServiceRequestController::class, 'destroy']);
  Route::get('/service_request/{id}/status', [ServiceRequestController::class, 'status']);
  Route::put('/service_request/{id}/status', [ServiceRequestController::class, 'updateStatus']);

  Route::get('/service_steps',[ServiceStepController::class,'index']);
  Route::post('/service_steps', [ServiceStepController::class, 'store']);
  Route::get('/service_steps/{id}', [ServiceStepController::class, 'show']);
  Route::put('/service_steps/{id}', [ServiceStepController::class, 'update']);
  Route::delete('/service_steps/{id}', [ServiceStepController::class, 'destroy']);
  Route::get('/service_steps/{id}/service', [ServiceStepController::class, 'service']);

  Route::get('/subcities',[SubcityController::class,'index']);
  Route::post('/subcities', [SubcityController::class, 'store']);
  Route::get('/subcities/{id}', [SubcityController::class, 'show']);
  Route::put('/subcities/{id}', [SubcityController::class, 'update']);
  Route::delete('/subcities/{id}', [SubcityController::class, 'destroy']);
  Route::get('/subcities/{id}/kebeles', [SubcityController::class, 'kebeles']);
  Route::get('/subcities/{id}/offices', [SubcityController::class, 'offices']);

  Route::get('/woredas',[WoredaController::class,'index']);
  Route::post('/woredas', [WoredaController::class, 'store']);
  Route::get('/woredas/{id}', [WoredaController::class, 'show']);
  Route::put('/woredas/{id}', [WoredaController::class, 'update']);
  Route::delete('/woredas/{id}', [WoredaController::class, 'destroy']);

  Route::get('/zones',[ZoneController::class,'index']);
  Route::post('/zones', [ZoneController::class, 'store']);
  Route::get('/zones/{id}', [ZoneController::class, 'show']);
  Route::put('/zones/{id}', [ZoneController::class, 'update']);
  Route::delete('/zones/{id}', [ZoneController::class, 'destroy']);

  Route::get('/workflow_actions',[WorkflowActionController::class,'index']);
  Route::post('/workflow_actions', [WorkflowActionController::class, 'store']);
  Route::put('/workflow_actions/{id}', [WorkflowActionController::class, 'update']);
 Route::get('/workflow_actions/{id}', [WorkflowActionController::class, 'show']);
 Route::delete('/workflow_actions/{id}', [WorkflowActionController::class, 'destroy']);

 Route::get('/workflows', [WorkflowController::class, 'eindex']);
 Route::post('/workflows', [WorkflowController::class, 'store']);
 Route::get('/workflows/{id}', [WorkflowController::class, 'show']);
 Route::put('/workflows/{id}', [WorkflowController::class, 'update']);
 Route::delete('/workflows/{id}', [WorkflowController::class, 'destroy']);

 Route::get('/workflow_steps',[WorkflowStepController::class,'index']);
 Route::post('/workflow_steps', [WorkflowStepController::class, 'store']);
 Route::get('/workflow_steps/{id}', [WorkflowStepController::class, 'show']);
 Route::put('/workflow_steps/{id}', [WorkflowStepController::class, 'update']);
 Route::delete('/workflow_steps/{id}', [WorkflowStepController::class, 'destroy']);

 Route::get('/users_offices',[UserOfficeController::class,'index']);
 Route::post('/users_offices', [UserOfficeController::class, 'store']);
 Route::get('/users_offices/{id}', [UserOfficeController::class, 'show']);
 Route::put('/users_offices/{id}', [UserOfficeController::class, 'update']);
 Route::delete('/users_offices/{id}', [UserOfficeController::class, 'destroy']);
 Route::get('/users_offices/{id}/user', [UserOfficeController::class, 'user']);
 Route::get('/users_offices/{id}/office', [UserOfficeController::class, 'office']);
 
});