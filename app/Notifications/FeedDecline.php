<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;
class FeedDecline extends Notification
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
        'link'  => 'products',
        'pages' => 'Produits',
        'title' => 'l\'admin à refuser l\'alimentaion de votre stock',
        'picture' => 'agreement.png',
       ];
    }
}
