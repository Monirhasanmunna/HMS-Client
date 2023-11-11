<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       


        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'আপনার কোন ঔষধের প্রয়োজন নেই।',
            'mg'                => 0
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Azithomycin > Syrup > Zimax > 200 ml',
            'mg'                => 200
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Omeprazole > Capsule > Xeldrin > 20 mg',
            'mg'                => 20
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Paracetamol > Tablet > Napa > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Azithomycin > Tablet > Zimax > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Paracetamol > Syrup > Napa > 100 ml',
            'mg'                => 100
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ciprofloxacin > Tablet > Bactin > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ciprofloxacin > Tablet > Bactin > 250 mg',
            'mg'                => 250
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Azithomycin > Tablet > Romycin > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Azithomycin > Capsule > Romycin > 250 mg',
            'mg'                => 250
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Azithomycin > Tablet > Zimax > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Azithomycin > Capsule > Zimax > 250 mg',
            'mg'                => 250
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Azithomycin > Syrup > Zimax > 200mg/5ml',
            'mg'                => 200
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Azithomycin > Syrup > Romycin > 200mg/5ml',
            'mg'                => 200
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Paracetamol > Tablet > Renova > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Paracetamol XR > Tablet > Renova XR > 665 mg',
            'mg'                => 665
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Paracetamol + Caffeine > Tablet > Renova Plus > 565 mg',
            'mg'                => 565
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Paracetamol > Syrup > Renova > 120mg/5ml',
            'mg'                => 120
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Paracetamol > Paediatric Drops > Renova > 80mg/ml',
            'mg'                => 80
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Paracetamol > Suppository > Renova > 125 mg',
            'mg'                => 125
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Paracetamol > Suppository > Renova > 250 mg',
            'mg'                => 250
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Paracetamol > Suppository > Renova > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Omeprazole > Capsule > Seclo > 20 mg',
            'mg'                => 20
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Omeprazole > Capsule > Seclo > 40 mg',
            'mg'                => 40
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Rabeprazole > Tablet > Xorel > 20 mg',
            'mg'                => 20
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Rabeprazole > Tablet > Xorel > 40 mg',
            'mg'                => 40
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Pantoprazole > Tablet > Pantonix > 20 mg',
            'mg'                => 20
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Pantoprazole > Tablet > Pantonix > 40 mg',
            'mg'                => 40
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Esolok > 20 mg',
            'mg'                => 20
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Esolok > 40 mg',
            'mg'                => 40
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Nexum MUPS > 20 mg',
            'mg'                => 20
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Nexum MUPS > 40 mg',
            'mg'                => 40
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Dexlansoprazole > Capsule > Dexlan > 30 mg',
            'mg'                => 30
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Dexlansoprazole > Capsule > Dexlan > 60 mg',
            'mg'                => 60
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Domperidone > Tablet > Omidon > 10 mg',
            'mg'                => 10
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Domperidone > Paediatric Drops > Omidon > 5mg/ml',
            'mg'                => 5
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Simethicone > Paediatric Drops > Flacol > 67mg/ml',
            'mg'                => 67
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Domperidone > Syrup > Dopadon > 5mg/5ml',
            'mg'                => 5
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ondansetron > Syrup > Emistat > 4mg/5ml',
            'mg'                => 5
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ondansetron > Tablet > Emistat > 8 mg',
            'mg'                => 8
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ondansetron > Injection > Emistat > 8mg/4ml',
            'mg'                => 8
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Palonosetron > Tablet > Paloxi > 0.5 mg',
            'mg'                => 0.5
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Palonosetron > Injection > Paloxi > 0.25mg/vial',
            'mg'                => 0.25
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Meclizine+Pyridoxine HCL > Tablet > Acliz Plus > 25 mg',
            'mg'                => 25
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Na Alginate + Na Bicarbonate + Ca Carbonate > Suspension > Gavisol > 200 ml',
            'mg'                => 200
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Na Alginate + Na Bicarbonate + Ca Carbonate > Suspension > Gaviscon > 200 ml',
            'mg'                => 200
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Paracetamol > Tablet > Reset > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ciprofloxacin > Syrup > Bactin > 250mg/5ml',
            'mg'                => 250
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ciprofloxacin + Dexamethasone > Ear Drop > Bactin D > 300mg + 100mg/100ml',
            'mg'                => 400
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ketorolac > Tablet > Rolac > 10 mg',
            'mg'                => 10
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ketorolac > Injection > Rolac > 30 mg',
            'mg'                => 30
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ketorolac > Injection > Rolac > 60 mg',
            'mg'                => 60
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Prednisolone > Tablet > Cortan > 2 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Prednisolone > Tablet > Cortan > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Prednisolone > Tablet > Cortan > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Prednisolone > Tablet > Cortan > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ciprofloxacin > Tablet > Ciprocin > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tiemonium Methylsulphate > Tablet > Algin > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Mefenamic Acid > Tablet > HPR > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Mefenamic Acid > Tablet > HPR DS > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tolfenamic Acid > Tablet > Lograin > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Folic Acid > Tablet > Folison > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Methotrexate > Tablet > Meth > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Sulfasalazine > Tablet > Salazine > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ibuprofen > Tablet > Inflam > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ibuprofen > Tablet > Inflam > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ibuprofen > Syrup > Inflam > 100mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Indomethacin > Capsule > Indomet > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Indomethacin > Capsule > Indomet > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Indomethacin > Capsule > Indomet SR > 75 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Baclofen > Tablet > Beklo > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Baclofen > Tablet > Beklo > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tolperisone HCl > Tablet > Myolax > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tolperisone HCl > Tablet > Myolax > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tizanidine > Tablet > Relentus > 2 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Indomethacin > Capsule > Reumacap > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Indomethacin > Capsule > Reumacap SR > 75 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Aceclofenac > Tablet > Reservix > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Aceclofenac > Tablet > Reservix SR > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Menthol 10% + Methyl Salicylate 30% Topical > Cream > Icykool Max > 25 g',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen > Gel > Anaflex > 10 %',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diclofenac Na > Tablet > Diclofen > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diclofenac Na > Tablet > Diclofen > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diclofenac Na > Tablet > Diclofen SR > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diclofenac Na > Suppository > Diclofen > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diclofenac Na > Suppository > Diclofen > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diclofenac Na > Suppository > Diclofen > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen > Tablet > Anaflex > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen > Tablet > Anaflex > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen > Tablet > Naprosyn > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen > Tablet > Naprosyn > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Progesic > 375/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Progesic > 500/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Solivo > 375/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Solivo > 500/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Naprosyn Plus > 375/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Naprosyn Plus > 500/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Vit B-1,6,12 > Tablet > Neuralgin > Vit-B (1, 6 &amp; 12)',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Vit B-1,6,12 > Tablet > Neuro-B > Vit-B (1, 6 &amp; 12)',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Vit B-1,6,12 > Tablet > Solbion > Vit-B (1, 6 &amp; 12)',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 + Minerals > Tablet > Calvimax Plus > Ca+D3+Minerals',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 > Tablet > Coraltab > 500mg/200IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium Carbonate > Tablet > Acical JR > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'AlOH + MgOH + Simethicone > Tablet > Entacyd Plus > 400/400/30 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'AlOH + MgOH + Simethicone > Syrup > Entacyd Plus > 200 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Na Alginate + Na Bicarbonate + Ca Carbonate > Syrup > Gaviscon > 200 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Na Alginate + Na Bicarbonate + Ca Carbonate > Syrup > Gavisol > 200 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Meclizine+Pyridoxine HCL > Tablet > Acliz Plus > 25/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Sergel > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Sergel > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Mebeverine > Tablet > Rostil > 135 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Mebeverine > Tablet > Mave > 135 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amitriptyline HCl > Tablet > Tryptin > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amitriptyline HCl > Tablet > Tryptin > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Rifaximin > Tablet > Rifagut > 550 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Capsule > Cef-3 > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Capsule > Cef-3 DS > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Paediatric Drops > Cef-3 > 25mg/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Syrup > Cef-3 > 100mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amoxicillin + Clavulanic Acid > Tablet > Moxaclav > 375 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amoxicillin + Clavulanic Acid > Tablet > Moxaclav > 625 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amoxicillin + Clavulanic Acid > Tablet > Moxaclav > 1 g',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amoxicillin + Clavulanic Acid > Syrup > Moxaclav > 125mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amoxicillin > Tablet > Tycil > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amoxicillin > Tablet > Tycil > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amoxicillin > Tablet > Tycil > 125mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amoxicillin > Tablet > Bactamox > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amoxicillin > Tablet > Bactamox > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amoxicillin > Syrup > Bactamox > 125mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime + Clavulanic Acid > Tablet > Cefaclav > 125 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime + Clavulanic Acid > Tablet > Cefaclav > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime + Clavulanic Acid > Tablet > Cefaclav > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime + Clavulanic Acid > Syrup > Cefaclav > 125mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Flucloxacillin > Syrup > Fluclox > 250mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Flucloxacillin > Capsule > Fluclox > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Flucloxacillin > Capsule > Fluclox > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clarithromycin > Tablet > Clarith > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Phenoxymethyl Penicillin > Tablet > Penvik > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Phenoxymethyl Penicillin > Tablet > Penvik DS > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Phenoxymethyl Penicillin > Syrup > Penvik FORTE > 250mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Nitrofurantoin > Capsule > Nintoin SR > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Doxycycline > Capsule > Doxicap > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metronidazole > Tablet > Filmet > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fenofibrate > Capsule > Nofiate > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Rosuvastatin > Tablet > Rosuva > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Rosuvastatin > Tablet > Rosuva > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Rosuvastatin > Tablet > Restat > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Rosuvastatin > Tablet > Restat > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Atorvastatin > Tablet > Atova > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Atorvastatin > Tablet > Atova > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Aspirin + Clopidogrel > Tablet > Clopid-AS > 75/75 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clopidogrel > Tablet > Clopid > 75 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Aspirin > Tablet > Ecosprin > 75 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Aspirin > Tablet > Carva > 75 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Aspirin + Clopidogrel > Tablet > Aspirel > 75/75 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Losartan Pota. + Hydrochlorthiazide > Tablet > Prosan HZ > 50/12.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Nitroglycerine > Spray (Under Tongue) > Anril > 400 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Nitroglycerine > Tablet > Nidocard SR > 2.6 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Nitroglycerine > Tablet > Nidocard Retard > 2.6 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Nitroglycerine > Tablet > Nidocard Retard > 6.4 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tamsulosin HCl + Dutasteride > Tablet > Uromax D > 400/500 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tamsulosin HCl > Tablet > Uromax > 400 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tolterodine Tertrate > Tablet > Ucol > 2 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Verapamil HCl > Tablet > Veracal SR > 240 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Verapamil HCl > Tablet > Veracal SR > 180 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Verapamil HCl > Tablet > Veracal > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Verapamil HCl > Tablet > Veracal > 80 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ramipril > Tablet > Ramil > 1.25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ramipril > Tablet > Ramil > 2.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ramipril > Tablet > Ramil > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ramipril > Tablet > Ramil > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ramipril > Tablet > Ramoril > 2.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ramipril > Tablet > Ramoril > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ramipril > Tablet > Ramoril > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Propranolol HCl > Tablet > Indever > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Propranolol HCl > Tablet > Indever > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Nifedipine > Tablet > Nifin > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Spironolectone > Tablet > Spirocard > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Spironolectone > Tablet > Spirocard > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Frusemide + Spironolectone > Tablet > Fusid Plus > 20/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Frusemide + Spironolectone > Tablet > Fusid Plus > 40/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Frusemide + Spironolectone > Tablet > Edeloss Plus > 40/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Frusemide + Spironolectone > Tablet > Edeloss > 20/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Frusemide > Tablet > Fusid > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Frusemide > Tablet > Lasix > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Frusemide > Injection > Lasix > 20mg/2ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diltiazem HCl > Tablet > Cardizem SR > 90 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diltiazem HCl > Tablet > Cardizem SR > 120 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diltiazem HCl > Tablet > Cardizem > 30 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diltiazem HCl > Tablet > Cardizem > 60 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cilnidipine > Tablet > Cildip > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cilnidipine > Tablet > Cildip > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cilnidipine > Tablet > Duocard > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cilnidipine > Tablet > Duocard > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Carvedilol > Tablet > Carvista > 6.25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Carvedilol > Tablet > Carvista > 12.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Carvedilol > Tablet > Carvista > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Bisoprolol + Amlodipine > Tablet > Betabis > 2.5/5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Bisoprolol + Hydrochlorthiazide > Tablet > Bisolol Plus > 2.5/6.25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Bisoprolol + Hydrochlorthiazide > Tablet > Bisolol Plus > 5/6.25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Bisoprolol + Hydrochlorthiazide > Tablet > Bisolol Plus > 10/6.25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Bisoprolol > Tablet > Bislol > 2.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Bisoprolol > Tablet > Bislol > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Bisoprolol > Tablet > Bislol > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Bisoprolol > Tablet > Betacor > 2.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Bisoprolol > Tablet > Betacor > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Bisoprolol > Tablet > Betacor > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metoprolol Tertrate > Tablet > Betaloc > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metoprolol Tertrate > Tablet > Betaloc > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Atenolol > Tablet > Tenoloc > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Atenolol > Tablet > Tenoloc > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Atenolol > Tablet > Tenoren > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Atenolol > Tablet > Tenoren > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Atenolol > Tablet > Tenoren > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Olmesartan Medoxomil > Tablet > Abetis > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Olmesartan Medoxomil > Tablet > Abetis > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Olmesartan Medoxomil > Tablet > Abetis > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Olmesartan Medoxomil > Tablet > Xyotil > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Hydrochlorthiazide + Olmesartan Medoxomil > Tablet > Abetis Plus > 12.5/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Hydrochlorthiazide + Olmesartan Medoxomil > Tablet > Abetis Plus > 12.5/40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Hydrochlorthiazide + Olmesartan Medoxomil > Tablet > Xyotil Plus 20 > 12.5/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Olmesartan Medoxomil > Tablet > Bizoran > 5/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Olmesartan Medoxomil > Tablet > Bizoran > 5/40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Olmesartan Medoxomil > Tablet > Abecab > 5/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Olmesartan Medoxomil > Tablet > Abecab > 5/40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Olmesartan Medoxomil > Tablet > Camlosart > 5/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Olmesartan Medoxomil > Tablet > Camlosart > 5/40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Olmesartan Medoxomil > Tablet > Duopress > 5/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Olmesartan Medoxomil > Tablet > Duopress > 5/40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Atenolol > Tablet > Amdocal Plus > 5/25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine > Tablet > Amdocal > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine > Tablet > Amdocal > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Losartan K+ > Tablet > Angilock > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Losartan K+ > Tablet > Angilock > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Losartan K+ > Tablet > Angilock > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Losartan K+ > Tablet > Osartil > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Losartan K+ > Tablet > Osartil > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Losartan Pota. + Hydrochlorthiazide > Tablet > Osartil 50 Plus > 50/12.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Losartan Pota. + Hydrochlorthiazide > Tablet > Angilock Plus > 50/12.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Losartan Pota. + Hydrochlorthiazide > Tablet > Angilock Plus > 100/12.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Losartan Pota. + Hydrochlorthiazide > Tablet > Angilock Plus > 100/25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Carbimazole > Tablet > Carbizol > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Levothyroxine Na > Tablet > Thyrox > 50 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Levothyroxine Na > Tablet > Thyrox > 100 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Levothyroxine Na > Tablet > Thyrin > 25 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Levothyroxine Na > Tablet > Thyrin > 50 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Pancreatin > Tablet > Suzyme > 325 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Pancreatin > Tablet > A Zyme > 325 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Vildagliptin > Tablet > Dialiptin > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl + Sitagliptin > Tablet > Sitagil M ER > 1000/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl + Sitagliptin > Tablet > Sitagil M > 500/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl + Sitagliptin > Tablet > Sitagil M > 1000/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl + Sitagliptin > Tablet > Glipita M XR > 500/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl + Sitagliptin > Tablet > Glipita M XR > 1000/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl + Sitagliptin > Tablet > Glipita M > 500/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl + Sitagliptin > Tablet > Glipita M > 1000/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl + Sitagliptin > Tablet > Janmet > 500/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl + Sitagliptin > Tablet > Janmet > 1000/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Sitagliptin > Tablet > Sitagil > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Sitagliptin > Tablet > Sitagil > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Sitagliptin > Tablet > Sitagil > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Sitagliptin > Tablet > Glipita > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Sitagliptin > Tablet > Glipita > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Metfo XR > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Metfo XR > 1000 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Metfo > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Metfo > 850 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Comet XR > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Comet XR > 1000 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Comet > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Comet > 850 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin + Metformin HCl > Tablet > Traneta M > 2.5/500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin + Metformin HCl > Tablet > Traneta M > 2.5/850 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin + Metformin HCl > Tablet > Traneta M > 2.5/1000 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin + Metformin HCl > Tablet > Lijenta MX > 5/1000 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin + Metformin HCl > Tablet > Lijenta M > 2.5/500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin + Metformin HCl > Tablet > Lijenta M > 2.5/850 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin + Metformin HCl > Tablet > Lijenta M > 2.5/1000 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin + Metformin HCl > Tablet > Adlinameg > 2.5/500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin + Metformin HCl > Tablet > Adlinameg > 2.5/850 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin > Tablet > Adlina > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin > Tablet > Traneta > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin > Tablet > Linax > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride > Tablet > Amaryl > 1 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride > Tablet > Amaryl > 2 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride > Tablet > Amaryl > 3 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride > Tablet > Amaryl > 4 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride + Metformin HCl > Tablet > Amaryl M 1 > 1/500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride + Metformin HCl > Tablet > Amaryl M 2 > 2/500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride + Metformin HCl > Tablet > Secrin M 1/500 XR > 1/500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride + Metformin HCl > Tablet > Secrin M 2/500 XR > 2/500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride > Tablet > Limpet > 1 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride > Tablet > Limpet > 2 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride > Tablet > Limpet > 3 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride > Tablet > Limpet > 4 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride > Tablet > Secrin > 1 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride > Tablet > Secrin > 2 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride > Tablet > Secrin > 3 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glimepiride > Tablet > Secrin > 4 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Gliclazide > Tablet > Dimerol MR > 30 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Gliclazide > Tablet > Dimerol MR > 60 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Gliclazide > Tablet > Dimerol > 80 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Gliclazide > Tablet > Consucon MR > 30 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Gliclazide > Tablet > Consucon MR > 60 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Gliclazide > Tablet > Consucon > 80 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Gliclazide > Tablet > Comprid XR > 30 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Gliclazide > Tablet > Comprid XR > 60 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Gliclazide > Tablet > Comprid > 80 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R > Injection > Actrapid HM > 100 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R > Injection > Insulatard > 100 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R > Injection > Actrapid HM > 40 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R > Injection > Insulatard > 40 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R > Injection > Ansulin R > 40 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R > Injection > Ansulin R > 100 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R + Isophane (pre mixed) > Injection > Mixtard 50 > 40 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R + Isophane (pre mixed) > Injection > Mixtard 50 > 100 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R + Isophane (pre mixed) > Injection > Maxsulin 50/50 > 100 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R + Isophane (pre mixed) > Injection > Maxsulin 30/70 > 40 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R + Isophane (pre mixed) > Injection > Maxsulin 30/70 > 100 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R + Isophane (pre mixed) > Injection > Diasulin 30/70 > 40 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R + Isophane (pre mixed) > Injection > Diasulin 30/70 > 100 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R + Isophane (pre mixed) > Injection > Ansulin 30/70 > 40 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R + Isophane (pre mixed) > Injection > Ansulin 30/70 > 100 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > Monas > 4 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > Monas > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > Monas > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Sachet (for mixing with water/food) > Monas > 4 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Salbutamol > Tablet > Azmasol > 2 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Salbutamol > Tablet > Azmasol > 4 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Salbutamol > Nebuliser Solution > Azmasol > 5mg/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Levosalbutamol > Tablet > Brodil Levo > 1 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Levosalbutamol > Tablet > Brodil Levo > 2 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Levosalbutamol > Syrup > Brodil Levo > 1mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Levosalbutamol > Tablet > Levostar > 1 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Levosalbutamol > Tablet > Levostar > 2 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Levosalbutamol > Syrup > Levostar > 1mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ipratropium Bro. + Salbutamol > Nebuliser Solution > Windel Plus > 3 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Theophylline > Tablet > Contine CR > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Theophylline > Syrup > Contine > 55mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Theophylline > Tablet > Contine > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Theophylline > Tablet > Contine > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Theophylline > Tablet > Contine > 300 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Doxofylline > Tablet > Doxiva > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Doxofylline > Tablet > Doxiva > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Doxofylline > Syrup > Doxiva > 100mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cetirizine Dihydrochloride > Tablet > Alatrol > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cetirizine Dihydrochloride > Syrup > Alatrol > 5mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cetirizine Dihydrochloride > Paediatric Drops > Alatrol > 2.5mg/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Levocetirizine HCl > Tablet > Alcet > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ketotifen > Tablet > Tofen > 1 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ketotifen > Syrup > Tofen > 1mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ketotifen > Tablet > Ketof > 1 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ketotifen > Syrup > Ketof > 1mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ebastine > Tablet > Ebamine > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ebastine > Syrup > Ebamine > 5mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fexofenadine HCl > Tablet > Fenadin > 60 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fexofenadine HCl > Tablet > Fenadin > 90 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fexofenadine HCl > Tablet > Fenadin > 120 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fexofenadine HCl > Tablet > Fenadin > 180 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fexofenadine HCl > Suspension > Fenadin > 30mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fexofenadine HCl > Tablet > Fexo > 60 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fexofenadine HCl > Tablet > Fexo > 120 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fexofenadine HCl > Tablet > Fexo > 180 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fexofenadine HCl > Suspension > Fexo > 30mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'ORS > Sachet (for mixing with water/food) > ORSaline N > 10.25 g',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'ORS > Sachet (for mixing with water/food) > Unisaline > 10.25 g',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Salbutamol + Fluticasone > Inhaler > Bexitrol F > 25/125 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Salbutamol + Fluticasone > Inhaler > Bexitrol F > 25/250 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fluticasone Furoate > Nasal Spray > Flutica > 27.5  mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Xylometazoline HCl > Nasal Drop > Antazol N/D > 0.05 %',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Xylometazoline HCl > Nasal Drop > Antazol N/D > 0.10 %',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Normal Saline > Nasal Drop > Norsol Nasal Drop > NaCl 0.9%',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Chlorpheniramine Maleate > Tablet > Sinamin > 4 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Chlorpheniramine Maleate > Syrup > Sinamin > 2mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Chlorpheniramine Maleate > Tablet > Histacin > 4 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Chlorpheniramine Maleate > Syrup > Histacin > 2mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Butamirate Citrate > Tablet > Mirakof SR > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Butamirate Citrate > Syrup > Mirakof > 7.5mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Butamirate Citrate > Paediatric Drops > Mirakof > 5mg/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ambroxol > Capsule > Ambrox SR > 75 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ambroxol > Syrup > Ambrox > 15mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ambroxol > Paediatric Drops > Ambrox > 6mg/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fluconazole > Capsule > Flugal > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fluconazole > Capsule > Flugal > 150 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fluconazole > Syrup > Flugal > 50mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Itraconazole > Capsule > Itra > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Terbinafine > Tablet > Mycofree > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Terbinafine > Cream > Mycofree > 1gm/100gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clotrimazole 1% + Betamethasone 0.1% Topical > Cream > Fungin B > 10 g',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clotrimazole 1% Topical > Cream > Clotrim > 10mg/gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clotrimazole 1% Topical > Cream > Fungin > 10mg/gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clotrimazole Vaginal Tablet > Vaginal Tablet > Neosten VT > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Miconazole Nitrate 2% + Hydrocortisone 1% Topical > Cream > Fungidal HC > 1gm+2gm/100gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Miconazole Nitrate 2% Topical > Cream > Fungidal > 20mg/gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Povidone Iodine 1% Mouth-wash > Ointment > Viodin M/W > 100 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Povidone Iodine 5% Topical > Ointment > Viodin > 20 g',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Povidone Iodine 10% Topical > Topical Solution > Viodin 10% > 15 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ciclopirox Topical > Cream > Clopirox 1% Cream > 15 g',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ketoconazole 2% Shampoo > Shampoo > Select-Plus Shampoo > 60 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ketoconazole 2% Shampoo > Shampoo > Dancel Shampoo > 60 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Permethrin 5% Topical > Cream > Scabex 5% > 5gm/100gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Urea Topical > Cream > Equra > 10gm/100gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Albendazole > Tablet > Estazol > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Albendazole > Syrup > Estazol > 200mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Mebendazole > Tablet > Solas > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Mebendazole > Syrup > Solas > 100mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diacerein + Glucosamine Sulphate > Tablet > Ostorin > 50/750 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diacerein + Glucosamine Sulphate > Tablet > Osticare > 50/750 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diacerein + Glucosamine Sulphate > Tablet > Joinix D > 50/750 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 > Tablet > Ostocal D > 500mg/200IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium Carbonate > Tablet > Ostocal JR > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Flunarizine > Tablet > Fluzin > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Flunarizine > Tablet > Fluzin > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cinnarizine > Tablet > Cinaron > 15 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cinnarizine + Dimenhydrinate > Tablet > Cinaron Plus > 20/40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Acyclovir > Tablet > Virux > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Acyclovir > Tablet > Virux > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Acyclovir > Cream > Virux > 5gm/100gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Betahistine Dihydrochloride > Tablet > Menaril > 8 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Betahistine Dihydrochloride > Tablet > Menaril > 16 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Mecobalamin > Tablet > Mecobal > 0.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tobramycin > Eye Drop > Tobracin Eye Drop > 5 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tobramycin > Ointment > Tobracin Eye Ointment > 3 g',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Chloramphenicol Eye Drop > Eye Drop > A-Phenicol D > 0.5 %',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Hartmann Solution > Infusion > Hartsol IV > 500 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Hartmann Solution > Infusion > Hartsol IV > 1000 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Normal Saline > Infusion > Normal Saline IV > 500 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Normal Saline > Infusion > Normal Saline IV > 1000 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Dextrose 5% > Infusion > Dextrose In Normal Saline > 500 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Dextrose 5% > Infusion > Dextrose In Normal Saline > 1000 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Norethisterone > Tablet > Normens > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Folic Acid + Zinc > Tablet > Zifolet > 5/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Folic Acid + Zinc + Carbonyl Iron > Capsule > Zif-CI > 500mcg/22.5mg/150mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Zinc > Tablet > Xinc > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Zinc > Tablet > Pep > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Zinc > Syrup > Pep > 10mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Zinc + Vit B Complex > Tablet > Xinc B > 10/5mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Zinc + Vit B Complex > Tablet > Bicozin > 10/5mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Zinc + Vit B Complex > Syrup > Bicozin > 100 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Zinc + Vit B Complex > Syrup > Xinc B > 100 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Iron Polymaltose + Vit B Complex + Zinc > Syrup > Bicozin I > 100 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Miconazole Oral Gel > Oral Gel > Micoral Oral Gel > 15 g',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlexanox Oral Paste > Oral Paste > Apsol Oral Paste > 50mg/gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Etoricoxib > Tablet > Algirex > 60 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Etoricoxib > Tablet > Algirex > 90 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Etoricoxib > Tablet > Algirex > 120 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Bisacodyl > Tablet > Duralax > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Lubipristone > Capsule > Lubilax > 8 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Lubipristone > Capsule > Lubilax > 24 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glycerol > Suppository > Glysup > 1.15 g',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Glycerol > Suppository > Glysup > 2.3 g',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Lactulose > Syrup > Avolac > 100 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Liquid Paraffin + MgOH > Syrup > Milk of Magnesia > 100 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Liquid Paraffin + MgOH > Syrup > Magfin > 100 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Prochlorperazine Maleate > Tablet > Stemetil > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Prochlorperazine Maleate > Tablet > Vergon > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Procyclidine HCl > Tablet > Perkinil > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit C > Tablet > Cavic-C > 1327/500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Vitamin C > Tablet > Ceevit > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Vit B Complex > Capsule > B 50 Forte > Vit-B Complex',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Vit B Complex > Injection > B 50 Forte > Vit-B Complex',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Multivitamin > Tablet > Sina Gold > Multivitamin',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Multivitamin > Tablet > Sina Silver > Multivitamin',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Methotrexate > Tablet > Methotrax > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Methotrexate > Tablet > Meth > 2.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Methotrexate > Tablet > Methotrax > 2.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium Carbonate > Tablet > Calbo JR > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 > Tablet > Calbo D > 500mg/200IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit C > Tablet > Calbo C > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium Carbonate > Tablet > Calbo > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 > Tablet > Sandocal D > 500mg/200IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Paroxetine > Tablet > Oxat > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tadalafil > Tablet > Intimate > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R + Isophane (pre mixed) > Injection > Mixtard 30 > 40 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Human Insulin R + Isophane (pre mixed) > Injection > Mixtard 30 > 100 IU/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Sugamet > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Sugamet > 850 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cinchocaine+Hydrocortisone+Framycetin SO4+Esculin > Ointment > Erian Rectal Ointment > 15 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Flupenthixol + Melitracen > Tablet > Deleta > 500 mcg/10mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Bromazepam > Tablet > Tenil > 3 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clonazepam > Tablet > Rivotril > 0.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clonazepam > Tablet > Rivotril > 1 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Domperidone > Suspension > Dopadon > 5mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Nystatin > Drop > Mycocin > 1 Lac Unit',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clonazepam > Tablet > Myotril > 0.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clonazepam > Tablet > Myotril > 1 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'hydroxyzine hydrochloride > Tablet > Xyril > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'hydroxyzine hydrochloride > Tablet > Xyril > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'luliconazole > Cream > Lulizol > 1%',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Febuxostat > Tablet > Febus > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Febuxostat > Tablet > Febus > 80 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diclofenac Na > Gel > Volinac > 50 gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Capsule > Cefixim > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Capsule > Cefixim > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cholecalciferol (vit. D3) > Capsule > D-Rise > 20000 IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cholecalciferol (vit. D3) > Capsule > D-Rise > 40000 IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cholecalciferol (vit. D3) > Tablet > D-Rise > 2000 IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Omeprazole > Capsule > Losectil > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Omeprazole > Capsule > Losectil > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Rabeprazole > Tablet > Paricel > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Baclofen > Tablet > Beklo > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Paracetamol + Caffeine > Tablet > Napa Extra > 565 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine > Tablet > Amlopin > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine > Tablet > Amlopin > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Atenolol > Tablet > Fixocard > 5/25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Atenolol > Tablet > Fixocard > 5/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Rifampicin + Isoniazid > Tablet > Comprimes de Rifampicine-Isoniazid > 150/75 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Salmeterol + Fluticasone > Inhaler > Seraflo HFA > 25/250 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Pyridoxine Hydrochloride > Tablet > Sixvit > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Setraline Hydrochloride > Tablet > Setra > 50 gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Neso > 375/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Neso > 500/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Dinovo > 375/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Dinovo > 500/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Nexum > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Nexum > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Esonix > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Esonix > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Opton > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Opton > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine > Tablet > Amdocal > 2.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Erythromycin > Tablet > Eromycin > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Erythromycin > Tablet > Eromycin DS > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Frusemide + Spironolectone > Tablet > Frulac > 20/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Frusemide + Spironolectone > Tablet > Frulac > 40/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Bacitracin ZInc + Neomycin Sulphate Topical > Ointment > Nebanol > 5mg/gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Halobetasol Propionate > Ointment > Halobet > 50mg/100gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Vinpocetine > Tablet > Cavinton > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin+Vildaliptin > Tablet > Dialiptin M > 850 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Sulindac > Tablet > Lindac > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Sulindac > Tablet > Lindac > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diosmin + Hespiridin > Tablet > Normanal > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clotrimazole 1% Topical > Cream > Neosten > 1%',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Famotidine > Suspension > Famotack PFS > 50 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ketoprofen 2.5% Topical > Gel > Festam > 25 mg/gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diclofenac Na 1% Topical > Gel > Clofenac 1% > 10 mg/gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ibuprofen > Suspension > Profen > 100mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ibuprofen > Tablet > Profen > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ranitidine > Syrup > Gepin > 75 mg/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Isabgul Spicy > Sachet > Isabgul Plus > 3 gm/1 gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tolfenamic Acid > Tablet > Tufnil > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Flunarizine > Tablet > Norium > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Flunarizine > Tablet > Norium > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Rabeprazole > Tablet > Finix > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Colchicine > Tablet > Kolchin > 0.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Folic Acid > Tablet > Folate > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diacerein + Glucosamine Sulphate > Tablet > Jointec Max > 50/750 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fluticasone Furoate > Nasal Spray > Avaspray > 27.5 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Iron Polymaltose Complex+Folic Acid+Zinc > Tablet > Ipec PLUS > 500mcg/22.5mg/150mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Iron Hydroxide Polymaltose > Syrup > Ipec > 50mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Betamethasone > Cream > Betson > 50mg/100ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Triamcinolone Acetonide > Injection > Trialon S > 40 mg/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ketoconazole > Tablet > Ketoral > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Pregabalin > Capsule > Neurega > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Pregabalin > Capsule > Neurega > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clindamycin Phosphate 1.2% + Tretinoin 0.025% > Gel > Clinex Plus > 1.2+0.025gm/100gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Telmisartan + Amlodipine > Tablet > Telmidip 40/5 > 40/5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > Montair > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > Montair > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > Montair > 4 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > Montene > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > Montene > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > Montene > 4 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 + Minerals > Tablet > Aristocal M > Ca+D3+Minerals',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 + Minerals > Tablet > Calcin-M > Ca+D3+Minerals',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 + Minerals > Tablet > Calcium-M > Ca+D3+Minerals',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Chondroitin+Glucosamine > Tablet > Joinix PLUS > 200mg+250mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Chondroitin+Glucosamine > Tablet > Joinix TS > 600mg+750mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Mometasone Furoate > Nasal Spray > Nasomet > 50mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clobetasol Propionate > Ointment > Dermasol > 0.05 %',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Losartan Pota. + Hydrochlorthiazide > Tablet > Prosan HZ > 100/12.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Olmesartan Medoxomil > Tablet > Calnor > 5/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Nobesit XR > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tramadol Hydrochloride > Suppository > Anadol > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Benzoyl peroxide > Face Wash > Acne-Aid liquid cleanser > 150 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Alu. Cl Hexahydrate > Cream > Dricare > 20%',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fluticasone Propionate > Nasal Spray > Flonaspray > 50mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amoxicillin+Clarithromycin+Lansoprazole > Tablet > Pylotrip > 30 mg+500 mg+ 1 gm',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 > Tablet > Kindical-D > 500mg/200IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 > Tablet > Kindical DX > 600mg/400IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ursodeoxycholic Acid > Tablet > Ursocol > 150 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Atenolol > Tablet > Amdocal Plus > 5/25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Atenolol > Tablet > Amdocal Plus > 5/50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Progut > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Progut > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 > Tablet > Kalcoral-D > 500mg/200IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Vit B-1,6,12 > Tablet > B126 > Vit-B Complex',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Azithomycin > Tablet > Zibac > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Azithomycin > Tablet > Zibac > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Azithomycin > Suspension > Zibac > 15 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Capsule > Zemicef > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Capsule > Zemicef > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Powder for suspension > Zemicef > 200mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine > Tablet > Amlovas > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine > Tablet > Amlovas > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cholecalciferol > Capsule > Hi-D > 2000 IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cholecalciferol > Capsule > Hi-D > 20000 IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cholecalciferol > Capsule > Hi-D > 40000 IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > M-Lucas > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > M-Lucas > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Rosuvastatin > Tablet > Rosu > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Rosuvastatin > Tablet > Rosu > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Potassium Citrate+Citric Acid > Syrup > CK > 1.5 g+250mg/5 ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fexofenadine HCl > Tablet > Fexoral > 120 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Fexofenadine HCl > Suspension > Fexoral > 30mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tofacitinib > Tablet > Tofacent > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tofacitinib > Tablet > Tofacent XR > 11 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Tiemonium Methylsulphate > Syrup > Algin > 10mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Trimetazidine Dihydrochloride > Tablet > Metacard MR > 35 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Metarin > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin > Tablet > Linajen > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Olmesartan Medoxomil > Tablet > Olmevas AM > 5/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Domperidone > Suspension > Domilux > 5mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin + Metformin HCl > Tablet > Linax Plus > 2.5/500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin + Metformin HCl > Tablet > Linax Plus > 2.5/850 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Hydrochlorothiazide > Tablet > Acuren > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 + Minerals > Tablet > Ipical M > Ca+D3+Minerals',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ibuprofen > Tablet > Flamex > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Flucloxacillin > Capsule > Flubac > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ciprofloxacin > Tablet > Civox > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ibuprofen > Suspension > Flamex > 100mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ibuprofen > Tablet > Flamex > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Flucloxacillin > Powder for suspension > Flubac > 125mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ciprofloxacin > Powder for suspension > Civox > 250mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Ambroxol > Syrup > Ambrosol > 15mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Flupentixol + Melitracen > Tablet > Anzet > 0.5mg/10mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diacerein + Glucosamine Sulphate > Tablet > Cartibon > 50/750 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clobetasol Propionate+Salicylic Acid > Ointment > Nyclobate-S > 0.05%+3%',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Tablet > Emixef > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Tablet > Emixef > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Paediatric Drops > Emixef > 21ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Suspension > Emixef > 50ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Multivitamin > Tablet > Vidalin GOLD > Multivitamin',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Multivitamin > Tablet > Vidalin Silver > Multivitamin',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Sodium Chloride > Nasal Drop > N-Sol > 0.9%',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Multivitamin > Syrup > Vitachild > Multivitamin',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Megestrol Acetate > Suspension > Apetiz > 40mg/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Naspro Plus > 375/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Naspro Plus > 500/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Moxifloxacin > Tablet > Moxibac > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Diacerein + Glucosamine Sulphate > Tablet > Cartilage Max > 50/750 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Maxpro > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Adapalene 0.1%+Benzoyl 2.5% > Gel > Fona Plus > 0.1%+2.5%',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl + Sitagliptin > Tablet > Siglimet > 50mg+500mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Xenole > 375/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Xenole > 500/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium Orotate > Tablet > Caldil-OT > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Budesonide BP > Nasal Spray > Budicort > 100 mcg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > Odmon > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > Odmon > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Sachet (for mixing with water/food) > Odmon > 4 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Vit B-1,6,12 > Tablet > Neurobest > Vit-B (1, 6 &amp; 12)',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Pregabalin > Capsule > GABA-P > 25 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Pregabalin > Capsule > GABA-P > 50 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Pregabalin > Capsule > GABA-P > 75 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefuroxime+Clavulanic Acid > Tablet > Furoclav > 500mg+125mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefuroxime+Clavulanic Acid > Tablet > Furoclav > 250mg+62.5mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefuroxime+Clavulanic Acid > Tablet > Furoclav > 125mg+31.5mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 > Tablet > Coralcin-D > 500mg/200IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Capsule > Orcef > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Capsule > Orcef > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Powder for suspension > Orcef > 100mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Exor > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Exor > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Azithomycin > Capsule > Azalid > 250 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Azithomycin > Tablet > Azalid > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Acemetacin > Capsule > Tendonil > 60 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clonazepam > Tablet > Rivo > 0.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clonazepam > Tablet > Rivo > 1 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Clonazepam > Tablet > Rivo > 2 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Xenapro Plus > 375/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Xenapro Plus > 500/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Tablet > Maxpro MUPS > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Esomeprazole > Capsule > Maxpro > 40 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Dextromethorphan HBr+Phenylphrine HCL+Triprolidine HCL > Syrup > Dextrim > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Palonosetron > Tablet > Vomiren > 0.5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > Arovent > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Tablet > Arovent > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Montelukast > Sachet (for mixing with water/food) > Arovent > 4 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Calcium + Vit-D3 > Tablet > Coralmax-D > 500mg/200 IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Novoxen > 375/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Naproxen + Esomeprazole > Tablet > Novoxen > 500/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Vit B-1,6,12 > Tablet > Nugesic > Vit-B (1, 6 &amp; 12)',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Folic Acid + Zinc + Carbonyl Iron > Capsule > Ferix-V > 500mcg/22.5mg/150mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Racecadotril > Capsule > Receca > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Racecadotril > Sachet > Receca > 10 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Racecadotril > Sachet > Receca > 30 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metronidazole > Tablet > Amodis > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metronidazole > Syrup > Amodis > 200mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metronidazole > Syrup > Filmet > 250mg/5ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Phenobarbitone > Tablet > Barbit > 30 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Phenobarbitone > Tablet > Barbit > 60 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Capsule > Truso > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Cefixime > Capsule > Truso > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin > Tablet > Linstar > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Amlodipine + Olmesartan Medoxomil > Tablet > Olmesafe AM > 5/20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin > Tablet > Linastar > 5 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin + Metformin HCl > Tablet > Linastar M > 2.5/500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Linagliptin + Metformin HCl > Tablet > Linastar M > 2.5/850 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Prednisolone > Syrup > Cortan > 5mg/ml',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Sodium Valproate > Tablet > Valex > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Sodium Valproate > Tablet > Valex > 300 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Sodium Valproate > Tablet > Valex > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Albendazole > Tablet > NT-Par > 400 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Famotidine > Tablet > Famotack > 20 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Moxifloxacin > Eye Drop > Iventi > 0.5 %',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Sodium Chloride > Eye Drop > N-Sol > 0.9%',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Levofloxacin > Tablet > Levomax > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Coral calcium+ Vit D3 > Tablet > Coralcin-DX > 600mg/400IU',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Nobesit > 500 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Metformin HCl > Tablet > Nobesit > 850 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Allopurinol > Tablet > Esloric > 100 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Allopurinol > Tablet > Esloric > 200 mg',
            'mg'                => 500
        ]);
        Medicine::updateOrCreate([
            'medicinegroup_id'  => 1,
            'name'              => 'Mebendazole > Tablet > Vermox > 500 mg',
            'mg'                => 500
        ]);


        
    }
}
