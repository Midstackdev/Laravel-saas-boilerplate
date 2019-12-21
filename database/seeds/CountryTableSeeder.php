<?php

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'United States of America',
                'dial_code' => '1'
            ],
            [
                'name' => 'Canada',
                'dial_code' => '1'
            ],
            [
                'name' => 'Russia',
                'dial_code' => '7'
            ],
            [
                'name' => 'Kazakhstan',
                'dial_code' => '7'
            ],
            [
                'name' => 'Egypt',
                'dial_code' => '20'
            ],
            [
                'name' => 'South Africa',
                'dial_code' => '27'
            ],
            [
                'name' => 'Greece',
                'dial_code' => '30'
            ],
            [
                'name' => 'Netherlands',
                'dial_code' => '31'
            ],
            [
                'name' => 'Belgium',
                'dial_code' => '32'
            ],
            [
                'name' => 'France',
                'dial_code' => '33'
            ],
            [
                'name' => 'Spain',
                'dial_code' => '34'
            ],
            [
                'name' => 'Hungary',
                'dial_code' => '36'
            ],
            [
                'name' => 'Italy',
                'dial_code' => '39'
            ],
            [
                'name' => 'Romania',
                'dial_code' => '40'
            ],
            [
                'name' => 'Switzerland',
                'dial_code' => '41'
            ],
            [
                'name' => 'Austria',
                'dial_code' => '43'
            ],
            [
                'name' => 'United Kingdom',
                'dial_code' => '44'
            ],
            [
                'name' => 'Guernsey',
                'dial_code' => '44'
            ],
            [
                'name' => 'Isle of Man',
                'dial_code' => '44'
            ],
            [
                'name' => 'Jersey',
                'dial_code' => '44'
            ],
            [
                'name' => 'Denmark',
                'dial_code' => '45'
            ],
            [
                'name' => 'Sweden',
                'dial_code' => '46'
            ],
            [
                'name' => 'Norway',
                'dial_code' => '47'
            ],
            [
                'name' => 'Poland',
                'dial_code' => '48'
            ],
            [
                'name' => 'Germany',
                'dial_code' => '49'
            ],
            [
                'name' => 'Peru',
                'dial_code' => '51'
            ],
            [
                'name' => 'Mexico',
                'dial_code' => '52'
            ],
            [
                'name' => 'Cuba',
                'dial_code' => '53'
            ],
            [
                'name' => 'Argentina',
                'dial_code' => '54'
            ],
            [
                'name' => 'Brazil',
                'dial_code' => '55'
            ],
            [
                'name' => 'Chile',
                'dial_code' => '56'
            ],
            [
                'name' => 'Colombia',
                'dial_code' => '57'
            ],
            [
                'name' => 'Venezuela',
                'dial_code' => '58'
            ],
            [
                'name' => 'Malaysia',
                'dial_code' => '60'
            ],
            [
                'name' => 'Australia',
                'dial_code' => '61'
            ],
            [
                'name' => 'Indonesia',
                'dial_code' => '62'
            ],
            [
                'name' => 'Philippines',
                'dial_code' => '63'
            ],
            [
                'name' => 'New Zealand',
                'dial_code' => '64'
            ],
            [
                'name' => 'Singapore',
                'dial_code' => '65'
            ],
            [
                'name' => 'Thailand',
                'dial_code' => '66'
            ],
            [
                'name' => 'Japan',
                'dial_code' => '81'
            ],
            [
                'name' => 'Korea',
                'dial_code' => '82'
            ],
            [
                'name' => 'Vietnam',
                'dial_code' => '84'
            ],
            [
                'name' => 'China',
                'dial_code' => '86'
            ],
            [
                'name' => 'Turkey',
                'dial_code' => '90'
            ],
            [
                'name' => 'India',
                'dial_code' => '91'
            ],
            [
                'name' => 'Pakistan',
                'dial_code' => '92'
            ],
            [
                'name' => 'Afghanistan',
                'dial_code' => '93'
            ],
            [
                'name' => 'Sri Lanka',
                'dial_code' => '94'
            ],
            [
                'name' => 'Myanmar',
                'dial_code' => '95'
            ],
            [
                'name' => 'Iran',
                'dial_code' => '98'
            ],
            [
                'name' => 'Morocco',
                'dial_code' => '212'
            ],
            [
                'name' => 'Algeria',
                'dial_code' => '213'
            ],
            [
                'name' => 'Tunisia',
                'dial_code' => '216'
            ],
            [
                'name' => 'Libya',
                'dial_code' => '218'
            ],
            [
                'name' => 'Gambia',
                'dial_code' => '220'
            ],
            [
                'name' => 'Senegal',
                'dial_code' => '221'
            ],
            [
                'name' => 'Mauritania',
                'dial_code' => '222'
            ],
            [
                'name' => 'Mali Republic',
                'dial_code' => '223'
            ],
            [
                'name' => 'Guinea',
                'dial_code' => '224'
            ],
            [
                'name' => 'Ivory Coast',
                'dial_code' => '225'
            ],
            [
                'name' => 'Burkina Faso',
                'dial_code' => '226'
            ],
            [
                'name' => 'Niger',
                'dial_code' => '227'
            ],
            [
                'name' => 'Togo',
                'dial_code' => '228'
            ],
            [
                'name' => 'Benin',
                'dial_code' => '229'
            ],
            [
                'name' => 'Mauritius',
                'dial_code' => '230'
            ],
            [
                'name' => 'Liberia',
                'dial_code' => '231'
            ],
            [
                'name' => 'Sierra Leone',
                'dial_code' => '232'
            ],
            [
                'name' => 'Ghana',
                'dial_code' => '233'
            ],
            [
                'name' => 'Nigeria',
                'dial_code' => '234'
            ],
            [
                'name' => 'Chad',
                'dial_code' => '235'
            ],
            [
                'name' => 'Central African Republic',
                'dial_code' => '236'
            ],
            [
                'name' => 'Cameroon',
                'dial_code' => '237'
            ],
            [
                'name' => 'Cape Verde Islands',
                'dial_code' => '238'
            ],
            [
                'name' => 'Sao Tome and Principe',
                'dial_code' => '239'
            ],
            [
                'name' => 'Gabon',
                'dial_code' => '241'
            ],
            [
                'name' => 'Congo,
                Democratic Republ',
                'dial_code' => '243'
            ],
            [
                'name' => 'Angola',
                'dial_code' => '244'
            ],
            [
                'name' => 'Guinea-Bissau',
                'dial_code' => '245'
            ],
            [
                'name' => 'Seychelles',
                'dial_code' => '248'
            ],
            [
                'name' => 'Sudan',
                'dial_code' => '249'
            ],
            [
                'name' => 'Rwanda',
                'dial_code' => '250'
            ],
            [
                'name' => 'Ethiopia',
                'dial_code' => '251'
            ],
            [
                'name' => 'Somalia',
                'dial_code' => '252'
            ],
            [
                'name' => 'Djibouti',
                'dial_code' => '253'
            ],
            [
                'name' => 'Kenya',
                'dial_code' => '254'
            ],
            [
                'name' => 'Tanzania',
                'dial_code' => '255'
            ],
            [
                'name' => 'Uganda',
                'dial_code' => '256'
            ],
            [
                'name' => 'Burundi',
                'dial_code' => '257'
            ],
            [
                'name' => 'Mozambique',
                'dial_code' => '258'
            ],
            [
                'name' => 'Zambia',
                'dial_code' => '260'
            ],
            [
                'name' => 'Madagascar',
                'dial_code' => '261'
            ],
            [
                'name' => 'Reunion',
                'dial_code' => '262'
            ],
            [
                'name' => 'Zimbabwe',
                'dial_code' => '263'
            ],
            [
                'name' => 'Namibia',
                'dial_code' => '264'
            ],
            [
                'name' => 'Malawi',
                'dial_code' => '265'
            ],
            [
                'name' => 'Lesotho',
                'dial_code' => '266'
            ],
            [
                'name' => 'Botswana',
                'dial_code' => '267'
            ],
            [
                'name' => 'Swaziland',
                'dial_code' => '268'
            ],
            [
                'name' => 'Mayotte Island',
                'dial_code' => '269'
            ],
            [
                'name' => 'Aruba',
                'dial_code' => '297'
            ],
            [
                'name' => 'Faroe Islands',
                'dial_code' => '298'
            ],
            [
                'name' => 'Greenland',
                'dial_code' => '299'
            ],
            [
                'name' => 'Gibraltar',
                'dial_code' => '350'
            ],
            [
                'name' => 'Portugal',
                'dial_code' => '351'
            ],
            [
                'name' => 'Luxembourg',
                'dial_code' => '352'
            ],
            [
                'name' => 'Ireland',
                'dial_code' => '353'
            ],
            [
                'name' => 'Iceland',
                'dial_code' => '354'
            ],
            [
                'name' => 'Albania',
                'dial_code' => '355'
            ],
            [
                'name' => 'Malta',
                'dial_code' => '356'
            ],
            [
                'name' => 'Cyprus',
                'dial_code' => '357'
            ],
            [
                'name' => 'Finland',
                'dial_code' => '358'
            ],
            [
                'name' => 'Bulgaria',
                'dial_code' => '359'
            ],
            [
                'name' => 'Lithuania',
                'dial_code' => '370'
            ],
            [
                'name' => 'Latvia',
                'dial_code' => '371'
            ],
            [
                'name' => 'Estonia',
                'dial_code' => '372'
            ],
            [
                'name' => 'Moldova',
                'dial_code' => '373'
            ],
            [
                'name' => 'Armenia',
                'dial_code' => '374'
            ],
            [
                'name' => 'Belarus',
                'dial_code' => '375'
            ],
            [
                'name' => 'Andorra',
                'dial_code' => '376'
            ],
            [
                'name' => 'Monaco',
                'dial_code' => '377'
            ],
            [
                'name' => 'San Marino',
                'dial_code' => '378'
            ],
            [
                'name' => 'Ukraine',
                'dial_code' => '380'
            ],
            [
                'name' => 'Serbia',
                'dial_code' => '381'
            ],
            [
                'name' => 'Montenegro',
                'dial_code' => '382'
            ],
            [
                'name' => 'Croatia',
                'dial_code' => '385'
            ],
            [
                'name' => 'Slovenia',
                'dial_code' => '386'
            ],
            [
                'name' => 'Bosnia-Herzegovina',
                'dial_code' => '387'
            ],
            [
                'name' => 'Macedonia',
                'dial_code' => '389'
            ],
            [
                'name' => 'Czech Republic',
                'dial_code' => '420'
            ],
            [
                'name' => 'Slovakia',
                'dial_code' => '421'
            ],
            [
                'name' => 'Liechtenstein',
                'dial_code' => '423'
            ],
            [
                'name' => 'Falkland Islands',
                'dial_code' => '500'
            ],
            [
                'name' => 'Belize',
                'dial_code' => '501'
            ],
            [
                'name' => 'Guatemala',
                'dial_code' => '502'
            ],
            [
                'name' => 'El Salvador',
                'dial_code' => '503'
            ],
            [
                'name' => 'Honduras',
                'dial_code' => '504'
            ],
            [
                'name' => 'Nicaragua',
                'dial_code' => '505'
            ],
            [
                'name' => 'Costa Rica',
                'dial_code' => '506'
            ],
            [
                'name' => 'Panama',
                'dial_code' => '507'
            ],
            [
                'name' => 'Haiti',
                'dial_code' => '509'
            ],
            [
                'name' => 'Guadeloupe',
                'dial_code' => '590'
            ],
            [
                'name' => 'Bolivia',
                'dial_code' => '591'
            ],
            [
                'name' => 'Guyana',
                'dial_code' => '592'
            ],
            [
                'name' => 'Ecuador',
                'dial_code' => '593'
            ],
            [
                'name' => 'French Guiana',
                'dial_code' => '594'
            ],
            [
                'name' => 'Paraguay',
                'dial_code' => '595'
            ],
            [
                'name' => 'Martinique',
                'dial_code' => '596'
            ],
            [
                'name' => 'Suriname',
                'dial_code' => '597'
            ],
            [
                'name' => 'Uruguay',
                'dial_code' => '598'
            ],
            [
                'name' => 'Netherlands Antilles',
                'dial_code' => '599'
            ],
            [
                'name' => 'Timor-Leste',
                'dial_code' => '670'
            ],
            [
                'name' => 'Guam',
                'dial_code' => '1671'
            ],
            [
                'name' => 'Brunei',
                'dial_code' => '673'
            ],
            [
                'name' => 'Nauru',
                'dial_code' => '674'
            ],
            [
                'name' => 'Papua New Guinea',
                'dial_code' => '675'
            ],
            [
                'name' => 'Tonga',
                'dial_code' => '676'
            ],
            [
                'name' => 'Solomon Islands',
                'dial_code' => '677'
            ],
            [
                'name' => 'Vanuatu',
                'dial_code' => '678'
            ],
            [
                'name' => 'Fiji Islands',
                'dial_code' => '679'
            ],
            [
                'name' => 'Cook Islands',
                'dial_code' => '682'
            ],
            [
                'name' => 'Samoa',
                'dial_code' => '685'
            ],
            [
                'name' => 'New Caledonia',
                'dial_code' => '687'
            ],
            [
                'name' => 'French Polynesia',
                'dial_code' => '689'
            ],
            [
                'name' => 'Korea',
                'dial_code' => '850'
            ],
            [
                'name' => 'HongKong',
                'dial_code' => '852'
            ],
            [
                'name' => 'Macau',
                'dial_code' => '853'
            ],
            [
                'name' => 'Cambodia',
                'dial_code' => '855'
            ],
            [
                'name' => 'Laos',
                'dial_code' => '856'
            ],
            [
                'name' => 'Bangladesh',
                'dial_code' => '880'
            ],
            [
                'name' => 'International',
                'dial_code' => '882'
            ],
            [
                'name' => 'Taiwan',
                'dial_code' => '886'
            ],
            [
                'name' => 'Maldives',
                'dial_code' => '960'
            ],
            [
                'name' => 'Lebanon',
                'dial_code' => '961'
            ],
            [
                'name' => 'Jordan',
                'dial_code' => '962'
            ],
            [
                'name' => 'Syria',
                'dial_code' => '963'
            ],
            [
                'name' => 'Iraq',
                'dial_code' => '964'
            ],
            [
                'name' => 'Kuwait',
                'dial_code' => '965'
            ],
            [
                'name' => 'Saudi Arabia',
                'dial_code' => '966'
            ],
            [
                'name' => 'Yemen',
                'dial_code' => '967'
            ],
            [
                'name' => 'Oman',
                'dial_code' => '968'
            ],
            [
                'name' => 'Palestine',
                'dial_code' => '970'
            ],
            [
                'name' => 'United Arab Emirates',
                'dial_code' => '971'
            ],
            [
                'name' => 'Israel',
                'dial_code' => '972'
            ],
            [
                'name' => 'Bahrain',
                'dial_code' => '973'
            ],
            [
                'name' => 'Qatar',
                'dial_code' => '974'
            ],
            [
                'name' => 'Bhutan',
                'dial_code' => '975'
            ],
            [
                'name' => 'Mongolia',
                'dial_code' => '976'
            ],
            [
                'name' => 'Nepal',
                'dial_code' => '977'
            ],
            [
                'name' => 'Tajikistan',
                'dial_code' => '992'
            ],
            [
                'name' => 'Turkmenistan',
                'dial_code' => '993'
            ],
            [
                'name' => 'Azerbaijan',
                'dial_code' => '994'
            ],
            [
                'name' => 'Georgia',
                'dial_code' => '995'
            ],
            [
                'name' => 'Kyrgyzstan',
                'dial_code' => '996'
            ],
            [
                'name' => 'Uzbekistan',
                'dial_code' => '998'
            ],
            [
                'name' => 'Bahamas',
                'dial_code' => '1242'
            ],
            [
                'name' => 'Barbados',
                'dial_code' => '1246'
            ],
            [
                'name' => 'Anguilla',
                'dial_code' => '1264'
            ],
            [
                'name' => 'Antigua and Barbuda',
                'dial_code' => '1268'
            ],
            [
                'name' => 'Virgin Islands,
                British',
                'dial_code' => '1284'
            ],
            [
                'name' => 'Cayman Islands',
                'dial_code' => '1345'
            ],
            [
                'name' => 'Bermuda',
                'dial_code' => '1441'
            ],
            [
                'name' => 'Grenada',
                'dial_code' => '1473'
            ],
            [
                'name' => 'Turks and Caicos Islands',
                'dial_code' => '1649'
            ],
            [
                'name' => 'Montserrat',
                'dial_code' => '1664'
            ],
            [
                'name' => 'Saint Lucia',
                'dial_code' => '1758'
            ],
            [
                'name' => 'Dominica',
                'dial_code' => '1767'
            ],
            [
                'name' => 'St. Vincent and The Gren',
                'dial_code' => '1784'
            ],
            [
                'name' => 'Puerto Rico',
                'dial_code' => '1787'
            ],
            [
                'name' => 'Dominican Republic',
                'dial_code' => '1809'
            ],
            [
                'name' => 'Dominican Republic2',
                'dial_code' => '1829'
            ],
            [
                'name' => 'Dominican Republic3',
                'dial_code' => '1849'
            ],
            [
                'name' => 'Trinidad and Tobago',
                'dial_code' => '1868'
            ],
            [
                'name' => 'Saint Kitts and Nevis',
                'dial_code' => '1869'
            ],
            [
                'name' => 'Jamaica',
                'dial_code' => '1876'
            ],
            [
                'name' => 'Congo',
                'dial_code' => '242'
            ]
        ];

        Country::insert($countries);
    }
}
