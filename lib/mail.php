<?php
class GueMail {
  public static function send_mail($from, $to, $subject, $message) {
    $headers = 'From: ' . $from . '\r\n';
    return mail($to, $subject, $message, $headers);
	}
}
