<?php

namespace App;

class MailConfig
{
	public $host                    = 'mail.ched.com.gh';
	public $SMTPAuth                = true;
	public $username                = 'summaryreports@ched.com.gh';
	public $password                = 'summaryreports@2019';
	public $SMTPSecure              = 'ssl';
	public $port                    = '465';
	public $SMTPDebug               = 0;
	public $fromAddress             = 'summaryreports@ched.com.gh';
	public $fromAddressName         = 'Daily Report';
	public $debug                   = false;
	public $attachmentDirectoryPath = '../public/PDFs/';
	public $subject                 = 'Today\'s Report';

	public function body($data) {
		return 'This is a test';
	}

	public function altBody($data) {
		return 'This is a test';
	}
}