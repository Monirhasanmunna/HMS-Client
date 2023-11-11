<?php

namespace Database\Seeders;

use App\Models\Advice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advice::updateOrCreate([
            'name'  => 'যে সমস্ত খাবার খেলে চুলকানি হয় (যেমন- হাঁসের ডিম, গরুর গোশত, বেগুন ইত্যাদি), সেগুলো পরিহার করবেন।'
        ]);

        Advice::updateOrCreate([
            'name'  => 'ব্যাক্তিগত পরিষ্কার পরিচ্ছন্নতা ও স্বাস্থ্যবিধি মেনে চলবেন।'
        ]);

        Advice::updateOrCreate([
            'name'  => 'আজ রাতে ও ৭ দিন পর রাতে।'
        ]);

        Advice::updateOrCreate([
            'name'  => 'ঠান্ডা পানি,আইসক্রিম সহ সকল প্রকার শীতল খাবার থেকে বিরত থাকবেন।'
        ]);

        Advice::updateOrCreate([
            'name'  => 'শ্বাস-প্রশ্বাসের ব্যায়াম করবেন।'
        ]);


        Advice::updateOrCreate([
            'name'=>'প্রচুর পরিমাণ পানি পান করবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'প্রতিদিন কিছু শাক-সবজি ও দেশী ফল খাবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'ধূমপান করবেন না।'
        ]);
        Advice::updateOrCreate([
            'name'=>'পাতে লবণ খাবেন না।'
        ]);
        Advice::updateOrCreate([
            'name'=>'চিনি ও চিনিজাতীয় খাবার কম খাবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'ভারী কাজ করবেন না।'
        ]);
        Advice::updateOrCreate([
            'name'=>'নিয়মিত ঔষধ খাবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'জর্দ্দা, সাদা পাতা, গুল ইত্যাদি খাবেন না।'
        ]);
        Advice::updateOrCreate([
            'name'=>'পরিমিত খাবার খাবেন, নিয়মিত সকাল-সন্ধ্যা হাঁটবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'প্রতিদিন ডিম খাবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'প্রতিদিন দুধ খাবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'কুসুম গরম পানিতে লবণ মিশিয়ে গড়্গড়া করবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'গরম পানিতে গোসল করবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'গরম সেঁক নিবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'বিশ্রামের সময় পায়ের নিচে বালিশ দিয়ে রাখবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'প্রতিদিন ইনফ্রারেড থেরাপি নিবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'গরম পানি বা মেনথল এর ধোঁয়া নাকে টানবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'পরবর্তী সাক্ষাতের সময় ঔষধের পাতা নিয়ে আসবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'১৫ দিন বিশ্রামে থাকবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'জ্বর মেপে লিখে রাখবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'শক্ত বিছানায় ঘুমাবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'ইনহেলার ব্যবহারের পর কুলি করবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'প্রতিদিন ৩০ মিনিটের বেশি করে দ্রুত গতিতে হাঁটবেন।'
        ]);
        
        Advice::updateOrCreate([
            'name'=>'ডায়াবেটিসের ঔষধ ব্যবহারকারীদের বেশি ঘাম বা অজ্ঞান ভাব হলে 
            (বিশেষত খালি পেটে থাকা অবস্থায়), অনতিবিলম্বে চিনির শরবত বা মিষ্টি কিছু খাবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'শ্বাস-প্রশ্বাসের ব্যায়াম করবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'ঠান্ডা পানি,আইসক্রিম সহ সকল প্রকার শীতল খাবার থেকে বিরত থাকবেন।'
        ]);
        Advice::updateOrCreate([
            'name'=>'আজ রাতে ও ৭ দিন পর রাতে।'
        ]);
        Advice::updateOrCreate([
            'name'=>'ব্যাক্তিগত পরিষ্কার পরিচ্ছন্নতা ও স্বাস্থ্যবিধি মেনে চলবেন।'
        ]);
        Advice::updateOrCreate([
         'name'=>'মস্ত খাবার খেলে চুলকানি হয় (যেমন- হাঁসের ডিম, গরুর গোশত, বেগুন ইত্যাদি), সেগুলো পরিহার করবেন।'
            ]);

        }
}
