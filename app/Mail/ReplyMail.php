<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


//ユーザー新規登録時に自動送信するためのクラス
class ReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    //メールの全体的なデータを格納する変数
    public $mailData;

    /**
     * Create a new message instance.
     */
    public function __construct($maildata)
    {
        $this->mailData = $maildata;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            //件名
            subject: 'お問い合わせの件について',
        );
    }
    
    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.replySendMail', //メールの文章の場所
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
