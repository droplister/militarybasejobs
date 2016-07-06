<?php

use Curl\Curl;
use App\GeoLocCode;

use Illuminate\Database\Seeder;

class GeoLocCodeTableSeeder extends Seeder
{
    /**
     * USAJobs.gov API
     *
     * @var Curl
     */
    protected $curl;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->curl = new Curl();
        $this->curl->setHeader('Host', getenv('USAJOBS_HOST'));
        $this->curl->setHeader('User-Agent', getenv('USAJOBS_EMAIL'));
        $this->curl->setHeader('Authorization-Key', getenv('USAJOBS_KEY'));
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->fetchApiResults();

        foreach($data->CodeList[0]->ValidValue as $result)
        {
            $data = $this->fetchDataArray($result);

            GeoLocCode::createGeoLocCode(
                $data['code'],
                $data['city'],
                $data['us_county'],
                $data['country_subdivision'],
                $data['country'],
                $data['disabled']
            );
        }
    }

    /**
     * Return API Results
     *
     * @return object
     */
    private function fetchApiResults()
    {
        $this->curl->get('https://data.usajobs.gov/api/codelist/geoloccodes');

        return json_decode($this->curl->response);
    }

    /**
     * Create In-Memory Data Blob
     *
     * @return array
     */
    private function fetchDataArray($result)
    {
        // Target Data (Trimmed)
        return [
            'code' => trim($result->Code),
            'city' => trim($result->City),
            'us_county' => (property_exists($result, 'USCounty') ? trim($result->USCounty) : null),
            'country_subdivision' => (property_exists($result, 'CountrySubdivision') ? trim($result->CountrySubdivision) : null),
            'country'   => trim($result->Country),
            'disabled'  => ($result->IsDisabled === 'Yes' ? 1 : 0 ),
        ];
    }
}