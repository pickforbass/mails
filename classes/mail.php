<?php
ini_set("error_reporting", E_ALL);

class mail
{
    private $from;
    private $subject;
    private $content;
    private $headers = array();

    public function __construct($from, $subject, $content)
    {
        $this->headers[] = "From: " . $from;
        $this->subject = $subject;
        $this->content = $content;
        if(mail('quentin.fortier@gmail.com', $this->subject, $this->content, implode("\r\n", $this->headers)))
        {
            echo "Votre mail a bien été envoyé.";

        }else{
            echo "Votre mail n'a pas été envoyé";
        }
    }
}