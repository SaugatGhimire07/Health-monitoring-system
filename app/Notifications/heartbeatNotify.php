<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;
use App\Models\SensorData;

class heartbeatNotify extends Notification
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
        
        foreach($sensordata as $heartbeat){
            $heartbeat = $heartbeat->heartbeat;
        }

        if($heartbeat > 120 or $heartbeat < 45){
            return (new MailMessage)
                    ->line('The heartbeat of the user is abnormal.')
                    ->action('Notification Action', url('/'))
                    ->line('Please do check on him/her!');
        }
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
