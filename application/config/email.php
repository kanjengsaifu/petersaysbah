<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email
| -------------------------------------------------------------------------
| This file lets you define parameters for sending emails.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/libraries/email.html
|
*/
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['protocol'] = "smtp";
$config['smtp_host'] = "ssl://smtp.googlemail.com";
$config['smtp_port'] = "465";
<<<<<<< HEAD
$config['smtp_user'] = "";//also valid for Google Apps Accounts
$config['smtp_pass'] = "";
=======
$config['smtp_user'] = "yourmail@gmail.com";//also valid for Google Apps Accounts
$config['smtp_pass'] = "password"; //your email password
>>>>>>> 4bbeca48094b277d496aba35fa0fb942585b03e0



/* End of file email.php */
/* Location: ./application/config/email.php */
