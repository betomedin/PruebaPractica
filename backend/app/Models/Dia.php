<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    use HasFactory;
    protected $fillable = ["fecha", "descripcion", "estado", "imagenes"];
    protected $casts = ["imagenes" => "json"];

    public static function getImages()
    {
        $today = (new DateTime())->format('Y-m-d');
        // $today = "2022-04-15";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.nasa.gov/planetary/apod?date=" . $today . "&api_key=DEMO_KEY",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = json_decode(curl_exec($curl));
        curl_close($curl);

        if (isset($response->media_type) and $response->media_type == "image") {
            $dia = Dia::where("fecha", $today)->first();
            $dia->imagenes = $response;
            $dia->save();
            return $response;
        }
    }
}
