<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;
use App\Models\SensorData;

class dataNotify extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $sensordata = DB::table('sensor_data')
                    ->select('heartbeat')
                    ->orderBy('id', 'desc')
                    ->limit(1)
                    ->get();
        
        foreach($sensordata as $heart){
            $heart = $heart->heartbeat;
        }

        $temperaturedata = DB::table('sensor_data')
                    ->select('temperature')
                    ->orderBy('id', 'desc')
                    ->limit(1)
                    ->get();

        foreach($temperaturedata as $temp){
            $temp = $temp->temperature;
        }
        
        $humiditydata = DB::table('sensor_data')
                    ->select('humidity')
                    ->orderBy('id', 'desc')
                    ->limit(1)
                    ->get();

        foreach($humiditydata as $humidity){
            $humidity = $humidity->humidity;
        }
        return (new MailMessage)
                    ->line('Heartbeat in BPM: '.$heart)
                    ->line('Temperature in °C: '.$temp)
                    ->line('Humidity in %: '.$humidity)
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
