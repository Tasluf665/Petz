<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'persian cat',
            "price"=>"200",
            "description"=>"A persian cat",
            "category"=>"cat",
            "gallery"=>"https://www.petmd.com/sites/default/files/styles/article_image/public/white-persian-cats-picture-id637190306.jpg?itok=UZI3pQwD"
            ],

            [
                'name'=>'German Shepherd Dog',
                "price"=>"500",
                "description"=>"A German Shepherd dog",
                "category"=>"dog",
                "gallery"=>"https://d3544la1u8djza.cloudfront.net/APHI/Blog/2016/10_October/persians/Persian+Cat+Facts+History+Personality+and+Care+_+ASPCA+Pet+Health+Insurance+_+white+Persian+cat+resting+on+a+brown+sofa-min.jpg"
            ],
            [
                'name'=>'gold fish',
                "price"=>"100",
                "description"=>"A gold fish",
                "category"=>"fish",
                "gallery"=>"https://www.shutterstock.com/image-photo/beautiful-oranda-goldfish-isolated-227701531"
            ],
            [
                'name'=>'cockatiel bird',
                "price"=>"300",
                "description"=>"A cockatiel bird",
                "category"=>"bird",
                "gallery"=>"https://4.bp.blogspot.com/-rSoBc9EEPww/VS0Gjhgd0GI/AAAAAAAACZE/tzutOuEcmcI/s1600/Cockatiel-Bird-image-3-min.jpg"
            ]
            

            
        ]);
    }
}
