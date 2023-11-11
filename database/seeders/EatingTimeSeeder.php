<?php

namespace Database\Seeders;

use App\Models\Eatingtime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EatingTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eatingtime::updateOrCreate([        
        'name'=>'খাবার পর'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'খাবার ৩০ মি. আগে'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'খাবার আগে বা পরে'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'খাবার পরে এবং পরবর্তী ২ ঘন্টা কিছু খাবেন না'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'জ্বর ১০২ ডি. ফা. বা তার বেশি হলে'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'বুকে ব্যথা হলে, জিহ্বার নিচে'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'শ্বাষকষ্ট হলে, ২ নাকের ছিদ্রে'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'শরীর ব্যথা হলে'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'আক্রান্ত স্থানে মাখবেন'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'আক্রান্ত চোখে দিবেন'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'আক্রান্ত কানে দিবেন'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'২ নাকের ছিদ্রে (নাক বন্ধ থাকলে)'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'মুখের ভেতরের ঘাঁ তে লাগাবেন'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'গোসলের ৫ মিনিট আগে'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'গোসলের পরে'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'পায়খানার রাস্তায়'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'প্রতিবার পাতলা পায়খানার পর'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'পায়খানা পাতলা হলে বন্ধ রাখবেন'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'পায়খানার রাস্তায়, প্রতিবার পায়খানার পর ও রাতে ঘুমানোর সময়'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'খাবারের সাথে খাবেন'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'ব্যবহারের পর কুলি করবেন'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'এক গ্লাস পানিতে মিশিয়ে খাবেন'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'১ম ও ৭ম দিন'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'মাসিকের রাস্তায় লাগাবেন'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'১ দিন পরপর'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'খাবারের সাথে'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'খাবারের ঠিক আগে'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'উভয় চোখে দিবেন'
        ]);
        Eatingtime::updateOrCreate([        
        'name'=>'উরুর মাংশপেশীতে দিবেন'
        ]);
				                          				                      
    }
}
