<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

//テストメールを送信するためのクラス　消すかテンプレにするかどうするか
class SendMailtest extends Mailable
{
    use Queueable, SerializesModels;

    //メールの全体的なデータを格納する変数
    public $mailData;

    /**
     * Create a new message instance.
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            //件名？
            subject: '件名はここに書く',
        );
    }
    
    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.sendMailtest', //送るメールのviewファイルの場所
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        //添付ファイルがあればここを操作する
        return [];
    }
}
