<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;
class FeedAccept extends Notification
{
    use Queueable;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {

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
       return [
        'accept' => 'no',
        'user'   => $user->name,
        'user_id' => $user->id,
        'link'  => 'products',
        'pages' => 'Produits',
        'title' => 'l\'admin à accepter l\'alimentaion de votre stock',
        'picture' => 'agreement.png',
       ];
    }
}
