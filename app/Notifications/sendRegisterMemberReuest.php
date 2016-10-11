<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class sendRegisterMemberReuest extends Notification
{
    use Queueable;
    public $request;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
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
        return (new MailMessage)
            ->from(config('mail.from.address'))
            ->subject('New Membership Registration')
            ->line('name : '.$this->request['name'])
            ->line('phone : '.$this->request['name'])
            ->line('email : '.$this->request['email'])
            ->line('country : '.$this->request['country'])
            ->line('address: '.$this->request['address'])
            ->line('id: '.$this->request['id'])
            ->line('date_attendance : '.$this->request['date_attendance'])
            ->line('training_center : '.$this->request['training_center'])
            ->line('membership_type : '.$this->request['membership_type'])
            ->action('Visit Our site', config('app.url'));
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
