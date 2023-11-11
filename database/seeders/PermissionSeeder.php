<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


         //User Permission
         $userModule = Module::updateOrCreate(['name'  => 'User Management',]);

         Permission::updateOrCreate([
             'module_id' => $userModule->id,
             'name'      => 'Access User',
             'slug'      => 'app.user.index'
         ]);
 
         Permission::updateOrCreate([
             'module_id' => $userModule->id,
             'name'      => 'Create User',
             'slug'      => 'app.user.create'
         ]);
 
         Permission::updateOrCreate([
             'module_id' => $userModule->id,
             'name'      => 'Edit User',
             'slug'      => 'app.user.edit'
         ]);
 
         Permission::updateOrCreate([
             'module_id' => $userModule->id,
             'name'      => 'Delete User',
             'slug'      => 'app.user.destroy'
         ]);



        $dashboardModule = Module::updateOrCreate(['name'  => 'Admin Dashboard',]);

        Permission::updateOrCreate([
            'module_id' => $dashboardModule->id,
            'name'      => 'Access Dashboard',
            'slug'      => 'app.dashboard'
        ]);

        $roleManagementModule = Module::updateOrCreate(['name'  => 'Role Management',]);
        Permission::updateOrCreate([
            'module_id' => $roleManagementModule->id,
            'name'      => 'Access Role',
            'slug'      => 'app.roles.index'
        ]);

        Permission::updateOrCreate([
            'module_id' => $roleManagementModule->id,
            'name'      => 'Create Role',
            'slug'      => 'app.roles.create'
        ]);

        Permission::updateOrCreate([
            'module_id' => $roleManagementModule->id,
            'name'      => 'Edit Role',
            'slug'      => 'app.roles.edit'
        ]);

        Permission::updateOrCreate([
            'module_id' => $roleManagementModule->id,
            'name'      => 'Delete Role',
            'slug'      => 'app.roles.destroy'
        ]);


        $userManagementModule = Module::updateOrCreate(['name'  => 'User Management',]);
        Permission::updateOrCreate([
            'module_id' => $userManagementModule->id,
            'name'      => 'Access User',
            'slug'      => 'app.user.index'
        ]);

        Permission::updateOrCreate([
            'module_id' => $userManagementModule->id,
            'name'      => 'Create User',
            'slug'      => 'app.user.create'
        ]);

        Permission::updateOrCreate([
            'module_id' => $userManagementModule->id,
            'name'      => 'Edit User',
            'slug'      => 'app.user.edit'
        ]);

        Permission::updateOrCreate([
            'module_id' => $userManagementModule->id,
            'name'      => 'Delete User',
            'slug'      => 'app.user.destroy'
        ]);


        //patient admission
        $patientAdmissionModule = Module::updateOrCreate(['name'  => 'Patient Admission',]);
        Permission::updateOrCreate([
            'module_id' => $patientAdmissionModule->id,
            'name'      => 'Access Admission',
            'slug'      => 'app.admission.index'
        ]);

        Permission::updateOrCreate([
            'module_id' => $patientAdmissionModule->id,
            'name'      => 'Create Admission',
            'slug'      => 'app.admission.create'
        ]);

        Permission::updateOrCreate([
            'module_id' => $patientAdmissionModule->id,
            'name'      => 'Edit Admission',
            'slug'      => 'app.admission.edit'
        ]);

        Permission::updateOrCreate([
            'module_id' => $patientAdmissionModule->id,
            'name'      => 'Delete Admission',
            'slug'      => 'app.admission.destroy'
        ]);


        //Advice Permission
        $adviceModule = Module::updateOrCreate(['name'  => 'Advice Management',]);
        Permission::updateOrCreate([
            'module_id' => $adviceModule->id,
            'name'      => 'Access Advice',
            'slug'      => 'app.advice.index'
        ]);

        Permission::updateOrCreate([
            'module_id' => $adviceModule->id,
            'name'      => 'Create Advice',
            'slug'      => 'app.advice.create'
        ]);

        Permission::updateOrCreate([
            'module_id' => $adviceModule->id,
            'name'      => 'Edit Advice',
            'slug'      => 'app.advice.edit'
        ]);

        Permission::updateOrCreate([
            'module_id' => $adviceModule->id,
            'name'      => 'Delete Advice',
            'slug'      => 'app.advice.destroy'
        ]);


         //Assistant Permission
         $assistantModule = Module::updateOrCreate(['name'  => 'Assistant Management',]);
         Permission::updateOrCreate([
             'module_id' => $assistantModule->id,
             'name'      => 'Access Assistant',
             'slug'      => 'app.assistant.index'
         ]);
 
         Permission::updateOrCreate([
             'module_id' => $assistantModule->id,
             'name'      => 'Create Assistant',
             'slug'      => 'app.assistant.create'
         ]);
 
         Permission::updateOrCreate([
             'module_id' => $assistantModule->id,
             'name'      => 'Edit Assistant',
             'slug'      => 'app.assistant.edit'
         ]);
 
         Permission::updateOrCreate([
             'module_id' => $assistantModule->id,
             'name'      => 'Delete Assistant',
             'slug'      => 'app.assistant.destroy'
         ]);


         //Blood Group Permission
         $bloodgroupModule = Module::updateOrCreate(['name'  => 'Blood Group Management',]);
         Permission::updateOrCreate([
             'module_id' => $bloodgroupModule->id,
             'name'      => 'Access Blood Group',
             'slug'      => 'app.blood.index'
         ]);
 
         Permission::updateOrCreate([
             'module_id' => $bloodgroupModule->id,
             'name'      => 'Create Blood Group',
             'slug'      => 'app.blood.create'
         ]);
 
         Permission::updateOrCreate([
             'module_id' => $bloodgroupModule->id,
             'name'      => 'Edit Blood Group',
             'slug'      => 'app.blood.edit'
         ]);
 
         Permission::updateOrCreate([
             'module_id' => $bloodgroupModule->id,
             'name'      => 'Delete Blood Group',
             'slug'      => 'app.blood.destroy'
         ]);


          //Complain Permission
          $complainModule = Module::updateOrCreate(['name'  => 'Complain Management',]);
          Permission::updateOrCreate([
              'module_id' => $complainModule->id,
              'name'      => 'Access Complain',
              'slug'      => 'app.complain.index'
          ]);
  
          Permission::updateOrCreate([
              'module_id' => $complainModule->id,
              'name'      => 'Create Complain',
              'slug'      => 'app.complain.create'
          ]);
  
          Permission::updateOrCreate([
              'module_id' => $complainModule->id,
              'name'      => 'Edit Complain',
              'slug'      => 'app.complain.edit'
          ]);
  
          Permission::updateOrCreate([
              'module_id' => $complainModule->id,
              'name'      => 'Delete Complain',
              'slug'      => 'app.complain.destroy'
          ]);


           //Disease Permission
           $diseaseModule = Module::updateOrCreate(['name'  => 'Disease Management',]);
           Permission::updateOrCreate([
               'module_id' => $diseaseModule->id,
               'name'      => 'Access Disease',
               'slug'      => 'app.disease.index'
           ]);
   
           Permission::updateOrCreate([
               'module_id' => $diseaseModule->id,
               'name'      => 'Create Disease',
               'slug'      => 'app.disease.create'
           ]);
   
           Permission::updateOrCreate([
               'module_id' => $diseaseModule->id,
               'name'      => 'Edit Disease',
               'slug'      => 'app.disease.edit'
           ]);
   
           Permission::updateOrCreate([
               'module_id' => $diseaseModule->id,
               'name'      => 'Delete Disease',
               'slug'      => 'app.disease.destroy'
           ]);


            //Doctor Permission
            $doctorModule = Module::updateOrCreate(['name'  => 'Doctor Management',]);
            Permission::updateOrCreate([
                'module_id' => $doctorModule->id,
                'name'      => 'Access Doctor',
                'slug'      => 'app.doctor.index'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $doctorModule->id,
                'name'      => 'Create Doctor',
                'slug'      => 'app.doctor.create'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $doctorModule->id,
                'name'      => 'Edit Doctor',
                'slug'      => 'app.doctor.edit'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $doctorModule->id,
                'name'      => 'Delete Doctor',
                'slug'      => 'app.doctor.destroy'
            ]);


            //Eating Time Permission
            $eatingModule = Module::updateOrCreate(['name'  => 'Eating Time Management',]);
            Permission::updateOrCreate([
                'module_id' => $eatingModule->id,
                'name'      => 'Access Eating Time',
                'slug'      => 'app.eatingtime.index'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $eatingModule->id,
                'name'      => 'Create Eating Time',
                'slug'      => 'app.eatingtime.create'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $eatingModule->id,
                'name'      => 'Edit Eating Time',
                'slug'      => 'app.eatingtime.edit'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $eatingModule->id,
                'name'      => 'Delete Eating Time',
                'slug'      => 'app.eatingtime.destroy'
            ]);


            //Frequency Permission
            $frequencyModule = Module::updateOrCreate(['name'  => 'Frequency Management',]);
            Permission::updateOrCreate([
                'module_id' => $frequencyModule->id,
                'name'      => 'Access Frequency',
                'slug'      => 'app.frequency.index'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $frequencyModule->id,
                'name'      => 'Create Frequency',
                'slug'      => 'app.frequency.create'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $frequencyModule->id,
                'name'      => 'Edit Frequency',
                'slug'      => 'app.frequency.edit'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $frequencyModule->id,
                'name'      => 'Delete Frequency',
                'slug'      => 'app.frequency.destroy'
            ]);


            //Test Permission
            $testModule = Module::updateOrCreate(['name'  => 'Medical Test Management',]);
            Permission::updateOrCreate([
                'module_id' => $testModule->id,
                'name'      => 'Access Test',
                'slug'      => 'app.test.index'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $testModule->id,
                'name'      => 'Create Test',
                'slug'      => 'app.test.create'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $testModule->id,
                'name'      => 'Edit Test',
                'slug'      => 'app.test.edit'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $testModule->id,
                'name'      => 'Delete Test',
                'slug'      => 'app.test.destroy'
            ]);



            //Medicine Permission
            $medicineModule = Module::updateOrCreate(['name'  => 'Medicine Management',]);
            Permission::updateOrCreate([
                'module_id' => $medicineModule->id,
                'name'      => 'Access Medicine',
                'slug'      => 'app.medicine.index'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $medicineModule->id,
                'name'      => 'Create Medicine',
                'slug'      => 'app.medicine.create'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $medicineModule->id,
                'name'      => 'Edit Medicine',
                'slug'      => 'app.medicine.edit'
            ]);
    
            Permission::updateOrCreate([
                'module_id' => $medicineModule->id,
                'name'      => 'Delete Medicine',
                'slug'      => 'app.medicine.destroy'
            ]);



             //Medicine group Permission
             $medicinegroupModule = Module::updateOrCreate(['name'  => 'Medicine Group Management',]);
             Permission::updateOrCreate([
                 'module_id' => $medicinegroupModule->id,
                 'name'      => 'Access Medicine Group',
                 'slug'      => 'app.medicinegroup.index'
             ]);
     
             Permission::updateOrCreate([
                 'module_id' => $medicinegroupModule->id,
                 'name'      => 'Create Medicine Group',
                 'slug'      => 'app.medicinegroup.create'
             ]);
     
             Permission::updateOrCreate([
                 'module_id' => $medicinegroupModule->id,
                 'name'      => 'Edit Medicine Group',
                 'slug'      => 'app.medicinegroup.edit'
             ]);
     
             Permission::updateOrCreate([
                 'module_id' => $medicinegroupModule->id,
                 'name'      => 'Delete Medicine Group',
                 'slug'      => 'app.medicinegroup.destroy'
             ]);


             //Patient Permission
             $patientModule = Module::updateOrCreate(['name'  => 'Patient Management',]);
             Permission::updateOrCreate([
                 'module_id' => $patientModule->id,
                 'name'      => 'Access Patient',
                 'slug'      => 'app.patient.index'
             ]);
     
             Permission::updateOrCreate([
                 'module_id' => $patientModule->id,
                 'name'      => 'Create Patient',
                 'slug'      => 'app.patient.create'
             ]);
     
             Permission::updateOrCreate([
                 'module_id' => $patientModule->id,
                 'name'      => 'Edit Patient',
                 'slug'      => 'app.patient.edit'
             ]);
     
             Permission::updateOrCreate([
                 'module_id' => $patientModule->id,
                 'name'      => 'Delete Patient',
                 'slug'      => 'app.patient.destroy'
             ]);



              //Prescription Permission
              $prescriptionModule = Module::updateOrCreate(['name'  => 'Prescription Management',]);

              Permission::updateOrCreate([
                'module_id' => $prescriptionModule->id,
                'name'      => 'Prescription Dashboard',
                'slug'      => 'app.prescriptiondashboard.dashboard'
            ]);

              Permission::updateOrCreate([
                  'module_id' => $prescriptionModule->id,
                  'name'      => 'Access Prescription',
                  'slug'      => 'app.prescription.index'
              ]);
      
              Permission::updateOrCreate([
                  'module_id' => $prescriptionModule->id,
                  'name'      => 'Create Prescription',
                  'slug'      => 'app.prescription.create'
              ]);
      
              Permission::updateOrCreate([
                  'module_id' => $prescriptionModule->id,
                  'name'      => 'Edit Prescription',
                  'slug'      => 'app.prescription.edit'
              ]);
      
              Permission::updateOrCreate([
                  'module_id' => $prescriptionModule->id,
                  'name'      => 'Delete Prescription',
                  'slug'      => 'app.prescription.destroy'
              ]);


              //Quantity Permission
              $quantityModule = Module::updateOrCreate(['name'  => 'Quantity Management',]);

              Permission::updateOrCreate([
                  'module_id' => $quantityModule->id,
                  'name'      => 'Access Quantity',
                  'slug'      => 'app.quantity.index'
              ]);
      
              Permission::updateOrCreate([
                  'module_id' => $quantityModule->id,
                  'name'      => 'Create Quantity',
                  'slug'      => 'app.quantity.create'
              ]);
      
              Permission::updateOrCreate([
                  'module_id' => $quantityModule->id,
                  'name'      => 'Edit Quantity',
                  'slug'      => 'app.quantity.edit'
              ]);
      
              Permission::updateOrCreate([
                  'module_id' => $quantityModule->id,
                  'name'      => 'Delete Quantity',
                  'slug'      => 'app.quantity.destroy'
              ]);


               //Quantity Permission
               $quantitytypeModule = Module::updateOrCreate(['name'  => 'Quantity Type Management',]);

               Permission::updateOrCreate([
                   'module_id' => $quantitytypeModule->id,
                   'name'      => 'Access Quantity Type',
                   'slug'      => 'app.quantitytype.index'
               ]);
       
               Permission::updateOrCreate([
                   'module_id' => $quantitytypeModule->id,
                   'name'      => 'Create Quantity Type',
                   'slug'      => 'app.quantitytype.create'
               ]);
       
               Permission::updateOrCreate([
                   'module_id' => $quantitytypeModule->id,
                   'name'      => 'Edit Quantity Type',
                   'slug'      => 'app.quantitytype.edit'
               ]);
       
               Permission::updateOrCreate([
                   'module_id' => $quantitytypeModule->id,
                   'name'      => 'Delete Quantity Type',
                   'slug'      => 'app.quantitytype.destroy'
               ]);




               //General Setup Permission
               $setupModule = Module::updateOrCreate(['name'  => 'General Setup',]);

               Permission::updateOrCreate([
                   'module_id' => $setupModule->id,
                   'name'      => 'Access General Setup',
                   'slug'      => 'app.generalsetup.index'
               ]);
    }
}
