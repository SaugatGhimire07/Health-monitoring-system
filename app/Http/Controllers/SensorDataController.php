<?php

namespace App\Http\Controllers;
use App\Models\SensorData;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SensorDataController extends Controller
{
    public function index()
    {
        $sensordata = DB::table('sensor_data')
                    ->select('heartbeat')
                    ->orderBy('id', 'desc')
                    ->limit(1)
                    ->get();

        $falldetecteddata = DB::table('sensor_data')
                    ->select('fall_detection')
                    ->orderBy('id', 'desc')
                    ->limit(1)
                    ->get();

        $temperaturedata = DB::table('sensor_data')
                        ->select('temperature')
                        ->orderBy('id', 'desc')
                        ->limit(1)
                        ->get();

        $humiditydata = DB::table('sensor_data')
                        ->select('humidity')
                        ->orderBy('id', 'desc')
                        ->limit(1)
                        ->get();

        return view('home', compact('sensordata', 'temperaturedata', 'falldetecteddata', 'humiditydata'));
    }

    public function analyticsdata()
    {
        $alldata = DB::select('select * from sensor_data');

        return view('analytics', ['alldata' => $alldata]);
    }

    public function mindata()
    {
        $minheartbeat = DB::table('sensor_data')->min('heartbeat');
        $maxheartbeat = DB::table('sensor_data')->max('heartbeat');

        $minECG = DB::table('sensor_data')->min('ecg_readings');
        $maxECG = DB::table('sensor_data')->max('ecg_readings');

        $minHumidity = DB::table('sensor_data')->min('humidity');
        $maxHumidity = DB::table('sensor_data')->max('humidity');

        $minTemp = DB::table('sensor_data')->min('temperature');
        $maxTemp = DB::table('sensor_data')->max('temperature');

        return view('profile', compact('minheartbeat', 'maxheartbeat', 'minECG', 'maxECG', 'minHumidity', 'maxHumidity', 'minTemp', 'maxTemp'));
    }


    public function ecgChart()
    {
        $time_array = array();
        $time_data = SensorData::orderBy('created_at', 'ASC')->pluck('created_at');

        $ecgDataArray = array();
        $ecg_data = SensorData::select('ecg_readings')->pluck('ecg_readings');

        $time_array = $time_data;
        $ecgDataArray = $ecg_data;
        return view('ecgChart',['Time' => $time_array, 'Data' => $ecgDataArray]);
    }

}