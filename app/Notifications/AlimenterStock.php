<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;
class AlimenterStock extends Notification
{
    use Queueable;
    private $feeding;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    
   
    public function toDatabase($notifiable)
    {
       $user = User::find($this->user_id);
       return [
        'accept' => 'yes',
        'user'   => $user->name,
        'user_id' => $user->id,
        'link'  => 'products',
        'pages' => 'Produits',
        'title' => 'a demandé l\'alimentation de son stock',
        'picture' => 'packages.png',
       ];
    }
}
