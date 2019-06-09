<?php


use Phinx\Seed\AbstractSeed;

class PostSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {


         $faker= Faker\Factory::create();
          $lorem = new Faker\Provider\Lorem($faker);
       $data=[];

       for($i=0;$i<10;$i++){
           $data[]=[
               'title'=> $faker->text(100),
              // 'body'=> $lorem->word(),
              'body'=> $faker->text(400),
               'id_user'=> $faker->numberBetween($min = 1, $max = 10),
                'created_at'=>date('Y-m-d H:i:s') 
              ];
       } 
       $this->insert('posts',$data);

    }
}
