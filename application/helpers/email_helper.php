<?php
error_reporting(0);
function kirim_email($email, $subject, $message)
{
    $ci = get_instance();
    $ci->load->library('email');
    $config['protocol'] = "smtp";
    $config['smtp_host'] = "srv46.niagahoster.com";
    $config['smtp_crypto'] = "ssl";
    $config['smtp_port'] = "465";
    $config['smtp_user'] = "admin@vortex.biz.id";
    $config['smtp_pass'] = "@1234567890";
    $config['charset'] = "iso-8859-1";
    $config['mailtype'] = "html";
    $config['newline'] = "\r\n";
    $ci->email->initialize($config);
    $ci->email->from('admin@vortex.biz.id', "Toko Online");
    $ci->email->to("$email");
    $ci->email->subject("$subject");
    $ci->email->message("$message");
    $ci->email->send();
}
