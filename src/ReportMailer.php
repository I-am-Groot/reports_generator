<?php

namespace App;

use App\Model;
use App\MailConfig;
use App\ViewLoader;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ReportMailer extends Model
{
	public $mailer;
	protected $config;
	protected $bodyView = '../views/mail-body.php';
	protected $altBodyView = '../views/mail-alt-body.php';

	public function __construct() {
		parent::__construct();
		$this->getGeneratedReport();
		$this->viewLoader = new ViewLoader();
		$this->config = new MailConfig();
		$this->mailer = new PHPMailer($this->config->debug);
		$this->configuration();
	}

	public function configuration() {
		$this->mailer->SMTPDebug  = $this->config->SMTPDebug;
		$this->mailer->isSMTP();
		$this->mailer->Host       = $this->config->host;
		$this->mailer->SMTPAuth   = $this->config->SMTPAuth;
		$this->mailer->Username   = $this->config->username;
		$this->mailer->Password   = $this->config->password;
		$this->mailer->SMTPSecure = $this->config->SMTPSecure;
		$this->mailer->Port       = $this->config->port;

		$this->mailer->setFrom($this->config->fromAddress, $this->config->fromAddressName);
	}

	public function setToAddress() {
		if (empty($this->generatedRecords[0]->email)) {
			throw new Exception("No email addresses have been specified.", 1);
		}

		$this->mailer->addAddress($this->generatedRecords[0]->email);
	}

	public function initContent() {
		$this->mailer->Subject = $this->config->subject;

		$this->mailer->Body = $this->viewLoader
									->setTemplatePath($this->bodyView)
									->render([
										'reportData' => $this->generatedRecords[0]
									]);

		$this->mailer->AltBody = $this->viewLoader
										->setTemplatePath($this->altBodyView)
										->render([
											'reportData' => $this->generatedRecords[0]
										]);
	}

	public function initAttachment($filePath) {
		$this->mailer->addAttachment($filePath, 'Daily Report');
	}

	public function commenceDispatch() {
		if (sizeof($this->generatedRecords) == 0) {
			return;
		}

		$filePath = rtrim($this->config->attachmentDirectoryPath, '/')
					. '/' . $this->generatedRecords[0]->report_file_id . '.pdf';

		try {
			$this->setToAddress();
			$this->initContent();
			$this->initAttachment($filePath);
			$this->mailer->send();
		}
		catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$this->mailer->ErrorInfo}";
		}

		return (empty($this->mailer->ErrorInfo))
		? $this->setReportSentStatus($this->generatedRecords[0]->id)
		: null;
	}
}