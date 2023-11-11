<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Backend\AdmittedPatientController;
use App\Http\Controllers\Backend\AdviceController;
use App\Http\Controllers\Backend\AssistantController;
use App\Http\Controllers\Backend\Bed\BedController;
use App\Http\Controllers\Backend\Bed\BedDashboardController;
use App\Http\Controllers\Backend\Bed\BedGroupController;
use App\Http\Controllers\Backend\Bed\BedTypeController;
use App\Http\Controllers\Backend\Bed\FloorController;
use App\Http\Controllers\Backend\BloodController;
use App\Http\Controllers\Backend\ComplaintController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DiseaseController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\EatingTimeController;
use App\Http\Controllers\Backend\ExpenseCategoryController;
use App\Http\Controllers\Backend\ExpenseController;
use App\Http\Controllers\Backend\FollowUpController;
use App\Http\Controllers\Backend\FrequencyController;
use App\Http\Controllers\Backend\HolidayController;
use App\Http\Controllers\Backend\InvoiceController;
use App\Http\Controllers\Backend\MedicalTestController;
use App\Http\Controllers\Backend\MedicineController;
use App\Http\Controllers\Backend\MedicineGroupController;
use App\Http\Controllers\Backend\NetIncomeController;
use App\Http\Controllers\Backend\PatientController;
use App\Http\Controllers\Backend\PrescriptionController;
use App\Http\Controllers\Backend\QuantityController;
use App\Http\Controllers\Backend\QuantityTypeController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\SetupController;
use App\Http\Controllers\Backend\TransectionHistotyController;
use App\Http\Controllers\Backend\User\RoleController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\UserLogController;
use App\Models\ExpenseCategory;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AuthenticatedSessionController::class, 'create'])->middleware('guest');

Route::group(['as'=>'app.','prefix'=>'app','namespace'=>'Backend','middleware'=>['auth','verified']],function(){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::group(['as'=>'role.','prefix'=>'role','namespace'=>'User'],function(){

        Route::get('/index',[RoleController::class,'index'])->name('index');
        Route::get('/create',[RoleController::class,'create'])->name('create');
        Route::post('/store',[RoleController::class,'store'])->name('store');
        Route::get('/edit/{id}',[RoleController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[RoleController::class,'update'])->name('update');
        Route::get('/delete/{id}',[RoleController::class,'destroy'])->name('delete');
    });


    Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'User'],function(){

        Route::get('/index',[UserController::class,'index'])->name('index');
        Route::get('/create',[UserController::class,'create'])->name('create');
        Route::post('/store',[UserController::class,'store'])->name('store');
        Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[UserController::class,'update'])->name('update');
        Route::get('/delete/{id}',[UserController::class,'destroy'])->name('delete');

        // ajax route
        Route::get('/doctor-info/{id}',[UserController::class,'getDoctorInfo']);

    });


    Route::group(['as'=>'doctor.','prefix'=>'doctor'],function(){

        Route::get('/index',[DoctorController::class,'index'])->name('index');
        Route::get('/create',[DoctorController::class,'create'])->name('create');
        Route::post('/store',[DoctorController::class,'store'])->name('store');
        Route::get('/edit/{id}',[DoctorController::class,'edit'])->name('edit');
        Route::get('/show/{id}',[DoctorController::class,'show'])->name('show');
        Route::put('/update/{id}',[DoctorController::class,'update'])->name('update');
        Route::get('/delete/{id}',[DoctorController::class,'destroy'])->name('delete');
    });


    Route::group(['as'=>'assistant.','prefix'=>'assistant'],function(){

        Route::get('/index',[AssistantController::class,'index'])->name('index');
        Route::get('/create',[AssistantController::class,'create'])->name('create');
        Route::post('/store',[AssistantController::class,'store'])->name('store');
        Route::get('/edit/{id}',[AssistantController::class,'edit'])->name('edit');
        Route::get('/show/{id}',[AssistantController::class,'show'])->name('show');
        Route::put('/update/{id}',[AssistantController::class,'update'])->name('update');
        Route::get('/delete/{id}',[AssistantController::class,'destroy'])->name('delete');
    });



    Route::group(['as'=>'patient.','prefix'=>'patient'],function(){

        Route::get('/index',[PatientController::class,'index'])->name('index');
        Route::get('/create',[PatientController::class,'create'])->name('create');
        Route::post('/store',[PatientController::class,'store'])->name('store');
        Route::get('/edit/{id}',[PatientController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[PatientController::class,'update'])->name('update');
        Route::get('/delete/{id}',[PatientController::class,'destroy'])->name('delete');

        //ajax route
        Route::get('bedgroup/info/{id}',[PatientController::class,'bedgroup_info']);
    });


    Route::group(['as'=>'admition.','prefix'=>'admition'],function(){

        Route::get('/index',[AdmittedPatientController::class,'index'])->name('index');
        Route::get('/create',[AdmittedPatientController::class,'create'])->name('create');
        Route::post('/store',[AdmittedPatientController::class,'store'])->name('store');
        Route::get('/edit/{id}',[AdmittedPatientController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[AdmittedPatientController::class,'update'])->name('update');
        Route::get('/delete/{id}',[AdmittedPatientController::class,'destroy'])->name('delete');

        //ajax route
        Route::get('bedgroup/info/{id}',[AdmittedPatientController::class,'bedgroup_info']);
    });

    Route::group(['prefix'=>'manage'],function(){

        Route::group(['as'=>'frequency.','prefix'=>'frequency'],function(){

            Route::get('/index',[FrequencyController::class,'index'])->name('index');
            Route::get('/create',[FrequencyController::class,'create'])->name('create');
            Route::post('/store',[FrequencyController::class,'store'])->name('store');
            Route::get('/edit/{id}',[FrequencyController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[FrequencyController::class,'update'])->name('update');
            Route::get('/delete/{id}',[FrequencyController::class,'destroy'])->name('delete');
        });
    
    
        Route::group(['as'=>'quantity.','prefix'=>'quantity'],function(){
    
            Route::get('/index',[QuantityController::class,'index'])->name('index');
            Route::get('/create',[QuantityController::class,'create'])->name('create');
            Route::post('/store',[QuantityController::class,'store'])->name('store');
            Route::get('/edit/{id}',[QuantityController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[QuantityController::class,'update'])->name('update');
            Route::get('/delete/{id}',[QuantityController::class,'destroy'])->name('delete');
        });
    
        Route::group(['as'=>'quantity.type.','prefix'=>'quantity-type'],function(){
    
            Route::get('/index',[QuantityTypeController::class,'index'])->name('index');
            Route::get('/create',[QuantityTypeController::class,'create'])->name('create');
            Route::post('/store',[QuantityTypeController::class,'store'])->name('store');
            Route::get('/edit/{id}',[QuantityTypeController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[QuantityTypeController::class,'update'])->name('update');
            Route::get('/delete/{id}',[QuantityTypeController::class,'destroy'])->name('delete');
        });
    
        Route::group(['as'=>'eatingtime.','prefix'=>'eating/time'],function(){
    
            Route::get('/index',[EatingTimeController::class,'index'])->name('index');
            Route::get('/create',[EatingTimeController::class,'create'])->name('create');
            Route::post('/store',[EatingTimeController::class,'store'])->name('store');
            Route::get('/edit/{id}',[EatingTimeController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[EatingTimeController::class,'update'])->name('update');
            Route::get('/delete/{id}',[EatingTimeController::class,'destroy'])->name('delete');
        });
    
        Route::group(['as'=>'advice.','prefix'=>'advice'],function(){
    
            Route::get('/index',[AdviceController::class,'index'])->name('index');
            Route::get('/create',[AdviceController::class,'create'])->name('create');
            Route::post('/store',[AdviceController::class,'store'])->name('store');
            Route::get('/edit/{id}',[AdviceController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[AdviceController::class,'update'])->name('update');
            Route::get('/delete/{id}',[AdviceController::class,'destroy'])->name('delete');
        });
    
    
        Route::group(['as'=>'medicinegroup.','prefix'=>'medicine-group'],function(){
    
            Route::get('/index',[MedicineGroupController::class,'index'])->name('index');
            Route::get('/create',[MedicineGroupController::class,'create'])->name('create');
            Route::post('/store',[MedicineGroupController::class,'store'])->name('store');
            Route::get('/edit/{id}',[MedicineGroupController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[MedicineGroupController::class,'update'])->name('update');
            Route::get('/delete/{id}',[MedicineGroupController::class,'destroy'])->name('delete');
        });
    
        Route::group(['as'=>'medicine.','prefix'=>'medicine'],function(){
            Route::get('/index',[MedicineController::class,'index'])->name('index');
            Route::get('/create',[MedicineController::class,'create'])->name('create');
            Route::post('/store',[MedicineController::class,'store'])->name('store');
            Route::get('/edit/{id}',[MedicineController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[MedicineController::class,'update'])->name('update');
            Route::get('/delete/{id}',[MedicineController::class,'destroy'])->name('delete');
        });
    
        Route::group(['as'=>'medical.test.','prefix'=>'medical-test'],function(){
            Route::get('/index',[MedicalTestController::class,'index'])->name('index');
            Route::get('/create',[MedicalTestController::class,'create'])->name('create');
            Route::post('/store',[MedicalTestController::class,'store'])->name('store');
            Route::get('/edit/{id}',[MedicalTestController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[MedicalTestController::class,'update'])->name('update');
            Route::get('/delete/{id}',[MedicalTestController::class,'destroy'])->name('delete');
        });
        
        Route::group(['as'=>'complaint.','prefix'=>'complaint'],function(){
            Route::get('/index',[ComplaintController::class,'index'])->name('index');
            Route::get('/create',[ComplaintController::class,'create'])->name('create');
            Route::post('/store',[ComplaintController::class,'store'])->name('store');
            Route::get('/edit/{id}',[ComplaintController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[ComplaintController::class,'update'])->name('update');
            Route::get('/delete/{id}',[ComplaintController::class,'destroy'])->name('delete');
        });

        Route::group(['as'=>'disease.','prefix'=>'disease'],function(){

            Route::get('/index',[DiseaseController::class,'index'])->name('index');
            Route::get('/create',[DiseaseController::class,'create'])->name('create');
            Route::post('/store',[DiseaseController::class,'store'])->name('store');
            Route::get('/edit/{id}',[DiseaseController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[DiseaseController::class,'update'])->name('update');
            Route::get('/delete/{id}',[DiseaseController::class,'destroy'])->name('delete');
        });
    
    
        Route::group(['as'=>'blood.','prefix'=>'blood'],function(){
    
            Route::get('/index',[BloodController::class,'index'])->name('index');
            Route::get('/create',[BloodController::class,'create'])->name('create');
            Route::post('/store',[BloodController::class,'store'])->name('store');
            Route::get('/edit/{id}',[BloodController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[BloodController::class,'update'])->name('update');
            Route::get('/delete/{id}',[BloodController::class,'destroy'])->name('delete');
        });

    });

    

    Route::group(['as'=>'prescription.','prefix'=>'prescription'],function(){

        Route::get('/dashboard',[PrescriptionController::class,'dashboard'])->name('dashboard');
        Route::get('/index',[PrescriptionController::class,'index'])->name('index');
        Route::get('/create',[PrescriptionController::class,'create'])->name('create');
        Route::post('/store',[PrescriptionController::class,'store'])->name('store');
        Route::get('/edit/{id}',[PrescriptionController::class,'edit'])->name('edit');
        Route::put('/update/{prescription}',[PrescriptionController::class,'update'])->name('update');
        Route::get('/delete/{id}',[PrescriptionController::class,'destroy'])->name('delete');
        
        Route::get('/view/{prescription}',[PrescriptionController::class,'view'])->name('view');
        // ajax route
        Route::get('patient/info/{id}',[PrescriptionController::class,'patient_info']);
        Route::get('medicine/info/{id}',[PrescriptionController::class,'medicine_info']);
    });


    Route::group(['as'=>'invoice.','prefix'=>'invoice'],function(){     
        Route::any('/index',[InvoiceController::class,'index'])->name('index');
        Route::get('/{invoice}/view',[InvoiceController::class,'show'])->name('show');
        Route::get('/{invoice}/print',[InvoiceController::class,'showPrint'])->name('print');
        Route::get('/generate/{type}/{prescription_id}',[InvoiceController::class,'generateInvoice'])->name('generate');
        Route::post('/store',[InvoiceController::class,'store'])->name('store');
     
    });


    Route::group(['as'=>'beddashboard.','prefix'=>'bed/dashboard','namespace'=>'Bed'],function(){

        Route::get('/index',[BedDashboardController::class,'index'])->name('index');
    });


    Route::group(['as'=>'floor.','prefix'=>'floor','namespace'=>'Bed'],function(){

        Route::get('/index',[FloorController::class,'index'])->name('index');
        Route::post('/store',[FloorController::class,'store'])->name('store');
        Route::get('/edit/{id}',[FloorController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[FloorController::class,'update'])->name('update');
        Route::get('/delete/{id}',[FloorController::class,'destroy'])->name('delete');
    });

    Route::group(['as'=>'bedgroup.','prefix'=>'bed/group','namespace'=>'Bed'],function(){

        Route::get('/index',[BedGroupController::class,'index'])->name('index');
        Route::post('/store',[BedGroupController::class,'store'])->name('store');
        Route::get('/edit/{id}',[BedGroupController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[BedGroupController::class,'update'])->name('update');
        Route::get('/delete/{id}',[BedGroupController::class,'destroy'])->name('delete');
    });


    Route::group(['as'=>'bedtype.','prefix'=>'bed/type','namespace'=>'Bed'],function(){

        Route::get('/index',[BedTypeController::class,'index'])->name('index');
        Route::post('/store',[BedTypeController::class,'store'])->name('store');
        Route::get('/edit/{id}',[BedTypeController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[BedTypeController::class,'update'])->name('update');
        Route::get('/delete/{id}',[BedTypeController::class,'destroy'])->name('delete');
    });


    Route::group(['as'=>'bed.','prefix'=>'bed','namespace'=>'Bed'],function(){

        Route::get('/index',[BedController::class,'index'])->name('index');
        Route::post('/store',[BedController::class,'store'])->name('store');
        Route::get('/edit/{id}',[BedController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[BedController::class,'update'])->name('update');
        Route::get('/delete/{id}',[BedController::class,'destroy'])->name('delete');
    });


    Route::group(['as'=>'setup.','prefix'=>'setting/setup'],function(){

        Route::get('/index',[SetupController::class,'index'])->name('index');
        Route::put('/update/{id}',[SetupController::class,'update'])->name('update');
    });


    Route::group(['as'=>'holiday.','prefix'=>'setting/holiday'],function(){

        Route::get('/index',[HolidayController::class,'index'])->name('index');
        Route::get('/create',[HolidayController::class,'create'])->name('create');
        Route::post('/store',[HolidayController::class,'store'])->name('store');
        Route::get('/edit/{id}',[HolidayController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[HolidayController::class,'update'])->name('update');
        Route::get('/delete/{id}',[HolidayController::class,'destroy'])->name('delete');
    });

    Route::group(['as'=>'followup.','prefix'=>'setting/followup'],function(){

        Route::get('/index',[FollowUpController::class,'index'])->name('index');
        Route::get('/create',[FollowUpController::class,'create'])->name('create');
        Route::post('/store',[FollowUpController::class,'store'])->name('store');
        Route::get('/edit/{id}',[FollowUpController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[FollowUpController::class,'update'])->name('update');
        Route::get('/delete/{id}',[FollowUpController::class,'destroy'])->name('delete');
    });


    Route::group(['as'=>'room.','prefix'=>'setting/room'],function(){

        Route::get('/index',[RoomController::class,'index'])->name('index');
        Route::get('/create',[RoomController::class,'create'])->name('create');
        Route::post('/store',[RoomController::class,'store'])->name('store');
        Route::get('/edit/{id}',[RoomController::class,'edit'])->name('edit');
        Route::put('/update/{id}',[RoomController::class,'update'])->name('update');
        Route::get('/delete/{id}',[RoomController::class,'destroy'])->name('delete');
    });


    Route::group(['as'=>'userlog.','prefix'=>'report/user/log'],function(){

        Route::any('/index',[UserLogController::class,'index'])->name('index');
        Route::post('/delete/{id}',[UserLogController::class,'destroy'])->name('delete');
    });


    Route::group(['as'=>'expcategory.','prefix'=>'account/expense/category'],function(){

        Route::get('/index',[ExpenseCategoryController::class,'index'])->name('index');
        Route::get('/create',[ExpenseCategoryController::class,'create'])->name('create');
        Route::post('/store',[ExpenseCategoryController::class,'store'])->name('store');
        Route::get('/edit/{id}',[ExpenseCategoryController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[ExpenseCategoryController::class,'update'])->name('update');
        Route::get('/delete/{id}',[ExpenseCategoryController::class,'destroy'])->name('delete');
    });
    
    Route::group(['as'=>'expense.','prefix'=>'account/expense'],function(){

        Route::get('/index',[ExpenseController::class,'index'])->name('index');
        Route::get('/create',[ExpenseController::class,'create'])->name('create');
        Route::post('/store',[ExpenseController::class,'store'])->name('store');
        Route::get('/edit/{id}',[ExpenseController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[ExpenseController::class,'update'])->name('update');
        Route::get('/delete/{id}',[ExpenseController::class,'destroy'])->name('delete');

        Route::any('/report',[ExpenseController::class,'expenseShow'])->name('report');
    });


    Route::group(['as'=>'income.','prefix'=>'account/net/income'],function(){

        Route::get('/index',[NetIncomeController::class,'index'])->name('index');
        Route::get('/create',[NetIncomeController::class,'create'])->name('create');
        Route::post('/store',[NetIncomeController::class,'store'])->name('store');
        Route::get('/edit/{id}',[NetIncomeController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[NetIncomeController::class,'update'])->name('update');
        Route::get('/delete/{id}',[NetIncomeController::class,'destroy'])->name('delete');

        Route::any('/report',[NetIncomeController::class,'expenseShow'])->name('report');
    });



    Route::group(['as'=>'history.','prefix'=>'transection/history'],function(){

        Route::get('/',[TransectionHistotyController::class,'index'])->name('index');
    });
});


require __DIR__.'/auth.php';
