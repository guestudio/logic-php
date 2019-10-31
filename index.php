<?php

include_once __DIR__ . 'lib/mail.php';

class Gue {
  public function send_mail($from, $to, $subject, $message) {
		return GueMail::send_mail($from, $to, $subject, $message);
	}
}
