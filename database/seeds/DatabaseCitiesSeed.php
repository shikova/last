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
        $list1 = array('Agadir', 'Drargua', 'Aourir', 'Tamri', 'Tiqqi', 'Amskroud', 'Imsouane', 'Imouzzer', 'Tadrart', 'Taghazout', 'Aqesri', 'Idmine', 'Aziar');
        $list2 = array('Ait Amira', 'Ouad Essafa', 'Biougra', 'Sidi Bibi', 'Belfaa', 'Inchaden', 'Massa', 'Imi Mqourn',
            'Ait Milk', 'Sidi Boushab', 'Sidi Abdallah El Bouchouari', 'Sidi Ouassay', 'Ait Ouadrim',
            'Targua Ntouchka', 'Tassegdelt', 'Aouguenz', 'Ait Baha', 'Ait Mzal', 'Hilala', 'Tanalt', 'Ida Ougnidif', 'Tizi Ntakoucht');
        $list3 = array('Ait Melloul', 'Inezgane', 'Dcheira El Jihadia', 'Lqliaa', 'Temsia', 'Oulad Dahou');
        $list4 = array('Taroudannt', 'Oulad Teima', 'El Koudia El Beida', 'Aoulouz', 'Lagfifat', 'Oulad Berhil', 'Ahmar Laglalcha',
            'Sidi Ahmed Ou Amar', 'Sidi Boumoussa', 'El Faid', 'Sidi Moussa Lhamri', 'Lamhadi', 'Issen', 'Lamhara', 'Igli', 'Ait Iaaza', 'Machraa El Ain',
            'Oulad Aissa', 'Ait Igas', 'Zaouia Sidi Tahar', 'Tafraouten', 'Iguidi', 'Imoulass', 'El Guerdane', 'Toubkal', 'Sidi Borja', 'Lakhnafif',
            'Agadir Melloul', 'Zagmouzen', 'Toughmart', 'Ouneine', 'Sidi Dahmane', 'Assaki', 'Ahl Ramel', 'Igoudar Mnabha', 'Taouyalte',
            'Freija', 'Eddir', 'Sidi Ouaaziz', 'Sidi Hsaine', 'Ouzioua', 'Askaouen', 'Tisrasse', 'Imilmaiss', 'Imilmaiss', 'Tassousfi', 'Arazane', 'Assaisse', 'Bounrar');
        $list5 = array('Tata', 'Tissint', 'Foum Zguid', 'Allougoum', 'Tamanarte', 'Akka', 'Fam El Hisn', 'Kasbat Sidi Abdellah Ben M\'Barek', 'Akka Ighane', 'Adis', 'Tlite'
        , 'Tagmout', 'Tizaghte', 'Tigzmerte', 'Tagmout', 'Issafen', 'Tagmout', 'Oum El Guerdane', 'Ibn Yacoub', 'Aguinane', 'Ait Ouabelli', 'Tizounine');
        $list6=array('Tiznit','Tnine Aglou','Reggada','Arbaa Sahel','Bounaamane','Tighmi','Arbaa Ait Ahmed','Ida Ou Gougmar','El Maader El Kabir'
                        ,'Arbaa Rasmouka','Sidi Bouabdelli','Anzi','Ouijjane','Tizoughrane','Ait Ouafqa','Ait Issafen'
                        ,'Tafraout','Ammelne','Sidi Ahmed Ou Moussa','Afella Ighir','Tafraout El Mouloud','Tarsouat','Tnine Aday','Irigh N\'Tahala','Tassrirt');


        $list=array('1'=>$list1,'2'=>$list2,'3'=>$list3,'4'=>$list4,'5'=>$list5,'6'=>$list6);
        foreach ($list as $k => $data)
        foreach ($data as $item)
        {
            $v = City::firstOrNew(['name' => $item,'subdivision_id' => $k]);
            if (!$v->exists) {
                $v->save();
            }
        }

    }
}
