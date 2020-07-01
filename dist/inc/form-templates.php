<?php if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * College Everywhere Interest Form
 * Template for WPForms.
 */
class WPForms_Template_college_everywhere_interest_form extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'College Everywhere Interest Form';

		// Template slug
		$this->slug = 'college_everywhere_interest_form';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 29,
	'fields' => array (
		8 => array (
			'id' => '8',
			'type' => 'text',
			'label' => 'Full Name',
			'required' => '1',
			'size' => 'large',
			'limit_count' => '1',
			'limit_mode' => 'characters',
		),
		3 => array (
			'id' => '3',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'large',
		),
		6 => array (
			'id' => '6',
			'type' => 'phone',
			'label' => 'Phone',
			'format' => 'us',
			'required' => '1',
			'size' => 'large',
		),
		24 => array (
			'id' => '24',
			'type' => 'address',
			'label' => 'Address',
			'scheme' => 'us',
			'size' => 'large',
			'address2_hide' => '1',
			'city_placeholder' => 'City',
			'state_placeholder' => 'State',
			'state_default' => 'Select a State',
			'postal_placeholder' => 'Zipcode',
			'sublabel_hide' => '1',
		),
		11 => array (
			'id' => '11',
			'type' => 'checkbox',
			'label' => 'Are you a Military Student?',
			'choices' => array (
				1 => array (
					'label' => 'Military Student?',
				),
			),
			'choices_images_style' => 'modern',
			'input_columns' => 'inline',
			'label_hide' => '1',
		),
	),
	'settings' => array (
		'form_title' => 'College Everywhere Interest Form',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'submit_class' => 'btn btn-primary float-right',
		'honeypot' => '1',
		'offline_form' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'notification_name' => 'Default Notification',
				'email' => '{admin_email}',
				'subject' => 'New Entry: Workshop Registration Form',
				'sender_name' => 'College Everywhere',
				'sender_address' => '{admin_email}',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'name' => 'Default Confirmation',
				'type' => 'message',
				'message' => '<p>Thanks for contacting us! We will be in touch with you shortly.</p>',
				'message_scroll' => '1',
				'page' => '6',
			),
		),
	),
	'providers' => array (
		'constant-contact' => array (
			'connection_5efb6817199fb' => array (
				'connection_name' => 'College Everywhere',
				'account_id' => '5efb56d347d84',
				'list_id' => '1811809982',
				'fields' => array (
					'email' => '3.value.email',
					'full_name' => '8.value.name',
					'first_name' => '',
					'last_name' => '',
					'work_phone' => '6.value.text',
					'url' => '',
					'address' => '24.value.address',
					'job_title' => '',
					'company_name' => '11.value.text',
				),
			),
		),
	),
	'meta' => array (
		'template' => 'college_everywhere_interest_form',
	),
);
	}
}
new WPForms_Template_college_everywhere_interest_form;
endif; ?>