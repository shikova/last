<?php

use App\City;
use App\Subdivision;
use Illuminate\Database\Seeder;

class DatabaseCitiesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list1 = array('Agadir'=>'80000' , 'Drargua' => 80650, 'Aourir'=> 80750 , 'Tamri'=>80502,
            'Tiqqi'=> 80324, 'Amskroud'=>80302, 'Imouzzer'=> 80303, 'Tadrart'=>80326,'Talborjt'=>80000,
            'Taghazout'=>80022, 'Aqesri'=>80322, 'Idmine'=>80323, 'Aziar'=>80325);


        $list2 = array('Ait Amira'=>87052, 'Ouad Essafa'=>87223, 'Biougra'=>87200,
            'Sidi Bibi'=>87274, 'Belfaa'=>87252, 'Inchaden'=>87272, 'Massa'=>87452,
            'Imi Mqourn'=>87222,'Ait Milk'=>87273, 'Sidi Abdallah El Bouchouari'=>87126,
            'Ait Ouadrim'=>87132,'Targua Ntouchka'=>87122,
            'Ait Baha'=>87100,'Tanalt'=>87552,
            'Ida Ougnidif'=>87402 );


        $list3 = array('Ait Melloul'=>86150, 'Inezgane'=>86350,
            'Dcheira El Jihadia'=>86360, 'Lqliaa'=>86356, 'Temsia'=>86602, 'Oulad Dahou'=>86622);


        $list4 =array('Taroudannt'=>83000, 'Oulad Teima'=>83350,
            'Aoulouz'=>83052, 'Oulad Berhil'=>83300,
            'Issen'=>83374, 'Ait Iaaza'=>83200, 'Machraa El Ain'=>83024,
            'Ait Igas'=>83222, 'Zaouia Sidi Tahar'=>83042,
            'Iguidi'=>83173, 'IMILMAISS'=>83123, 'Toubkal'=>83175, 'Sidi Borja'=>83026,
            'Lakhnafif'=>83423,'Agadir Melloul'=>83532, 'Toughmart'=>83333, 'Ouneine'=>83472,
            'Assaki'=>83523, 'Tisrasse'=>83074);


        $list5 = array('Tata'=>84000, 'Tissint'=>84053, 'Foum Zguid'=>84150,
            'Allougoum'=>84172, 'Akka'=>84050,
            'Kasbat Sidi Abdellah Ben M\'Barek'=>84100, 'Akka Ighane'=>84022, 'Tlite'=>84174,
            'Tagmout'=>84025, 'Tizaghte'=>84075, 'Ibn Yacoub'=>84026);


        $list6=array('Tiznit'=> 85000,'Tnine Aglou'=>85004,'Reggada'=>85023,
            'Arbaa Sahel'=>85002,'Tighmi'=>85102,'Arbaa Ait Ahmed'=>85123,'El Maader El Kabir'=>85022,
            'Arbaa Rasmouka'=>85152,'Sidi Bouabdelli'=>85422,'Anzi'=>85103,
            'Tafraout'=>85450,'Tafraout El Mouloud'=>85124);

        $list=array('1'=>$list1,'2'=>$list2,'3'=>$list3,'4'=>$list4,'5'=>$list5,'6'=>$list6);
        foreach ($list as $k => $data)
        foreach ($data as $item=>$zip)
        {
            $v = City::firstOrNew(['name' => $item,'zipcode'=>$zip,'subdivision_id' => $k]);
            if (!$v->exists) {
                $v->save();
            }
        }

    }
}
