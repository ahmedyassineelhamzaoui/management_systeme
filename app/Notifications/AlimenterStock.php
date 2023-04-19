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
    private $product;
    private $user_id;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($product,$user_id)
    {
        $this->product = $product;
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
       return [
        'accept' => 'yes',
        'link'  => 'products',
        'product' => $this->product,
        'pages' => 'Produits',
        'title' => 'a demandé l\'alimentation de son stock',
        'user'  => auth()->user()->name,
        'picture' => 'packages.png',
        'user_id' => $this->user_id
       ];
    }
}
