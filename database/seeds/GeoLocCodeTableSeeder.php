<?php

use App\GeoLocCode;

use Illuminate\Database\Seeder;

class GeoLocCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curl = new Curl\Curl();
        $curl->setHeader('Host', 'data.usajobs.gov');
        $curl->setHeader('User-Agent', 'anderson@familymedia.org');
        $curl->setHeader('Authorization-Key', 'ihiSsm6bZyeduqt5xgrrTIaUapFcvuPO5zJzwT4eX6I=');
        $curl->get('https://data.usajobs.gov/api/codelist/geoloccodes');

        $data = json_decode($curl->response);

        foreach($data->CodeList[0]->ValidValue as $result)
        {
            $code = trim($result->Code);
            $city = trim($result->City);
            $us_county = (property_exists($result, 'USCounty') ? trim($result->USCounty) : null);
            $country_subdivision = (property_exists($result, 'CountrySubdivision') ? trim($result->CountrySubdivision) : null);
            $country = trim($result->Country);
            $disabled = ($result->IsDisabled === 'Yes' ? 1 : 0 );

            GeoLocCode::createGeoLocCode($code, $city, $us_county, $country_subdivision, $country, $disabled);
        }
    }
}