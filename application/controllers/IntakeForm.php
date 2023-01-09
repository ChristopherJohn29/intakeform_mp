<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IntakeForm extends CI_Controller{
	
	public function index()
	{
        $this->load->model('IntakeFormModel');

        $data['supermd'] = $this->IntakeFormModel->getSuperMd();
		$this->load->view('form', $data);
	}

    public function submit()
	{

        $this->load->model('IntakeFormModel');

        $date = strtotime($this->input->post('pi_dob'));
        $dob = date('Y-m-d',  $date);

        $date_discharge = strtotime($this->input->post('rvr_date_discharged'));
        $discharge = date('Y-m-d',  $date_discharge);
        date_default_timezone_set("America/New_York");

		$data = [
			'pi_patient_name' => $this->input->post('pi_patient_name'),
			'pi_dob' => $dob,
            'pi_phone' => $this->input->post('pi_phone'),
            'pi_gender' => $this->input->post('pi_gender'),
            'pi_address' => $this->input->post('pi_address'),
            'pi_language' => $this->input->post('pi_language'),
            'tov' => $this->input->post('tov'),
            'ii_medicare' => $this->input->post('ii_medicare'),
            'ii_ssn' => $this->input->post('ii_ssn'),
            'rvr_reason_for_visit' => $this->input->post('rvr_reason_for_visit'),
            'rvr_hospital' => $this->input->post('rvr_hospital'),
            'rvr_date_discharged' => $discharge,
            'rvr_reason_for_visit_request' => $this->input->post('rvr_reason_for_visit_request'),
            'rvr_additional_comment' => $this->input->post('rvr_additional_comment'),
            'pf_name_of_facility' => $this->input->post('pf_name_of_facility'),
            'pf_address' => $this->input->post('pf_address'),
            'pf_contact_person' => $this->input->post('pf_contact_person'),
            'pf_email' => $this->input->post('pf_email'),
            'pf_phone' => $this->input->post('pf_phone'),
            'pf_fax' => $this->input->post('pf_fax'),
            'preferred_smd' => $this->input->post('preferred_smd'),
            'date_of_sent' => date('Y-m-d')
		];




        if($this->IntakeFormModel->save($data)){

            $tmpDir = sys_get_temp_dir() . '/';
            $html = $this->load->view('homevisitrequest/pdf', $data, true);

            $this->load->library(['email', 'PDF']);

            $config = array(
                'wordwrap'  => true,
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.bizmail.yahoo.com',
                'smtp_port' => 465,
                'smtp_user' => 'info@themobiledrs.com',
                'smtp_pass' => 'ucjemnxyefywdbyw',
                'mailtype'  => 'html',
                'newline' 	=> "\r\n"
            );

            $this->email->initialize($config);

            $filename = 'Home Visit Form PDF';
            $this->pdf->generate_hv($html, $tmpDir . $filename);

            $this->email->from('info@themobiledrs.com', 'The MobileDrs');
            // $this->email->reply_to('michelle@themobiledrs.com', 'The MobileDrs');
            $this->email->to($data['pf_email']);
            $this->email->subject('Home visit request form');
            $this->email->message('Attached is a copy of the Home Visit Request form submitted to The Mobile Drs.');
            $this->email->attach($tmpDir . $filename . '.pdf', 'attachment', $filename . '.pdf');

            $send = $this->email->send();


            $this->email->from('info@themobiledrs.com', 'The MobileDrs');
            // $this->email->reply_to('michelle@themobiledrs.com', 'The MobileDrs');
            $this->email->to('Intake@themobilemd.com');
            $this->email->subject('Home visit request form');
            $this->email->message('Attached is a copy of the Home Visit Request form submitted to The Mobile Drs.');
            $this->email->attach($tmpDir . $filename . '.pdf', 'attachment', $filename . '.pdf');

            $send = $this->email->send();

            $_SESSION['saved'] = true;
            redirect('IntakeForm/thankyou');
        }
    
	}

    public function thankyou(){
        if($_SESSION['saved']) {
            unset($_SESSION['saved']);
            $this->load->view('thankyou');
        } else {
            redirect('IntakeForm/index');
        }
    }
}
