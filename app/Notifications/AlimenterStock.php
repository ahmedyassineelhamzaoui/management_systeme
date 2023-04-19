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
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
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
       ];
    }
}
