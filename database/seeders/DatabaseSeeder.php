<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // DB::table('areas')->insert([
        //     ['id' => 1, 'Board' => '01DB', 'Area_CC' => 'Arima'],
        //     ['id' => 2, 'Board' => '02CC', 'Area_CC' => 'Chaguanas/Caroni'],
        //     ['id' => 3, 'Board' => '03CF', 'Area_CC' => 'Couva/Tabaquite/Talparo'],
        //     ['id' => 4, 'Board' => '04MM', 'Area_CC' => 'Diego Martin/St George West'],
        //     ['id' => 5, 'Board' => '05FF', 'Area_CC' => 'Mayaro/Rio Claro'],
        //     ['id' => 6, 'Board' => '06JJ', 'Area_CC' => 'Penal/Debe/Siparia/St Patrick East'],
        //     ['id' => 7, 'Board' => '07KK', 'Area_CC' => 'Point Fortin/ St Patrick West'],
        //     ['id' => 8, 'Board' => '08AA', 'Area_CC' => 'Port of Spain/St George Central'],
        //     ['id' => 9, 'Board' => '09HH', 'Area_CC' => 'Princes Town/Victoria East'],
        //     ['id' => 10, 'Board' => '10GG', 'Area_CC' => 'San Fernando/Victoria West'],
        //     ['id' => 11, 'Board' => '11AB', 'Area_CC' => 'San Juan/Laventille/St George East'],
        //     ['id' => 12, 'Board' => '12DD', 'Area_CC' => 'Sangre Grande/St Andrew'],
        //     ['id' => 13, 'Board' => '13LL', 'Area_CC' => 'Tobago'],
        //     ['id' => 14, 'Board' => '14EE', 'Area_CC' => 'Toco/St David'],
        //     ['id' => 15, 'Board' => '15BB', 'Area_CC' => 'Tunapuna/Piarco']
        // ]);
        
        
        // DB::table('hloes')->insert([
        //     ['Hloe_Code' => 'PS', 'Hloe_Desc' => 'Primary'],
        //     ['Hloe_Code' => 'SS', 'Hloe_Desc' => 'Secondary'],
        //     ['Hloe_Code' => 'TL', 'Hloe_Desc' => 'Tertiary'],
        //     ['Hloe_Code' => 'TV', 'Hloe_Desc' => 'Technical/Vocational'],
        //     ['Hloe_Code' => 'ZO', 'Hloe_Desc' => 'Other']
        // ]);
        
        
        // DB::table('housings')->insert([
        //     ['HOU_Code' => 'RT', 'HOU_Status' => 'Rental'],
        //     ['HOU_Code' => 'RTO', 'HOU_Status' => 'Rent to own'],
        //     ['HOU_Code' => 'MG', 'HOU_Status' => 'Mortgage'],
        //     ['HOU_Code' => 'IMH', 'HOU_Status' => 'I own my home'],
        //     ['HOU_Code' => 'IDMH', 'HOU_Status' => 'I do not own my home']
        // ]);

        // DB::table('incomes')->insert([
        //     ['INC_Code' => '1_U3K', 'INC_Desc' => 'Under 3000'],
        //     ['INC_Code' => '2_3-5', 'INC_Desc' => '3000-5000'],
        //     ['INC_Code' => '3_5-7', 'INC_Desc' => '5001-7000'],
        //     ['INC_Code' => '4_7-10', 'INC_Desc' => '7001-10,000'],
        //     ['INC_Code' => '5_10-15', 'INC_Desc' => '10,001-15,000'],
        //     ['INC_Code' => '6_O15K', 'INC_Desc' => '15,001 and above'],
        // ]);

        DB::table('age_groups')->insert([
            ['AGE_Code' => '3U', 'AGE_Desc' => 'Under 3 years'],
            ['AGE_Code' => '3-5', 'AGE_Desc' => '3-5 years'],
            ['AGE_Code' => '6-11', 'AGE_Desc' => '6-11 years'],
            ['AGE_Code' => '12-17', 'AGE_Desc' => '12-17 years'],
            ['AGE_Code' => '18A', 'AGE_Desc' => '18 and Above'],
 
        ]);
        
        // DB::table('livings')->insert([
        //     ['LIV_Code' => 'LA', 'LIV_Status' => 'Living Alone'],
        //     ['LIV_Code' => 'LIF', 'LIV_Status' => 'Living with immediate family'],
        //     ['LIV_Code' => 'LAC', 'LIV_Status' => 'Living with my adult children'],
        //     ['LIV_Code' => 'LEF', 'LIV_Status' => 'Living with extended family (e.g., spouses, parents, sibling, cousins)'],
        //     ['LIV_Code' => 'LF', 'LIV_Status' => 'Living with friends'],
        //     ['LIV_Code' => 'LR', 'LIV_Status' => 'Living with a roommate(s)'],
        // ]);
        
        // DB::table('maritals')->insert([
        //     ['MAR_Code' => 'SS', 'MAR_Status' => 'Single'],
        //     ['MAR_Code' => 'MM', 'MAR_Status' => 'Married'],
        //     ['MAR_Code' => 'DD', 'MAR_Status' => 'Divorced'],
        //     ['MAR_Code' => 'WD', 'MAR_Status' => 'Widowed'],
        //     ['MAR_Code' => 'SP', 'MAR_Status' => 'Separated'],
        //     ['MAR_Code' => 'CL', 'MAR_Status' => 'Common Law']
        // ]);

        // DB::table('sources')->insert([
        //     ['SRC_Code' => 'SM', 'SRC_Desc' => 'Social Media'],
        //     ['SRC_Code' => 'TRN', 'SRC_Desc' => 'Television/Radio/Newpaper Advertisements'],
        //     ['SRC_Code' => 'WS', 'SRC_Desc' => 'MYDNS Website'],
        //     ['SRC_Code' => 'FM', 'SRC_Desc' => 'Friend or Family Member'],
        //     ['SRC_Code' => 'OTH', 'SRC_Desc' => 'Other'],
        // ]);

        // DB::table('employs')->insert([
        //     ['EMP_Code' => 'E', 'EMP_Desc' => 'Employed'],
        //     ['EMP_Code' => 'SE', 'EMP_Desc' => 'Self Employed'],
        //     ['EMP_Code' => 'UNE', 'EMP_Desc' => 'Under-Employed'],
        //     ['EMP_Code' => 'UE', 'EMP_Desc' => 'Unemployed'],
        //     ['EMP_Code' => 'STN', 'EMP_Desc' => 'Student'],
        //     ['EMP_Code' => 'ZO', 'EMP_Desc' => 'Other'],
        // ]);


        DB::table('logins')->insert([
            ['LGN_Username' => 'aneshia.beach', 'LGN_Password' => 'Aneshia.Beach7yug!', 'LGN_Name' => 'Aneshia Beach', 'LGN_Role' => 0],
            ['LGN_Username' => 'sean.ramrattan', 'LGN_Password' => 'Sean.Ramrattan2fuy!', 'LGN_Name' => 'Sean Ramrattan', 'LGN_Role' => 0],
            ['LGN_Username' => 'anthony.goddard', 'LGN_Password' => 'Anthony.Goddard97z!', 'LGN_Name' => 'Lt. Anthony Goddard', 'LGN_Role' => 0],
            ['LGN_Username' => 'camille.cayenne', 'LGN_Password' => 'Camille.MCayenne0e3!', 'LGN_Name' => 'Camille Mohan-Cayenne', 'LGN_Role' => 0],
            ['LGN_Username' => 'marlon.knights', 'LGN_Password' => 'Marlon.Knights87u!', 'LGN_Name' => 'Prof. Marlon Knights', 'LGN_Role' => 0],
            ['LGN_Username' => 'brian.garcia', 'LGN_Password' => 'Brian.Garcia8gj!', 'LGN_Name' => 'Brian Garcia', 'LGN_Role' => 1]
        ]);
    }
}
