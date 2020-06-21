<?php
# Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';

use Mailgun\Mailgun;

$start           = new DateTime();
$data['dtstart'] = $start;

$format = 'Ymd\THis\Z';

// Set defaults
$data = array(
	'VERSION:'       => '2.0',
	'PRODID:'        => ' -//Conference7//C7 Inviter 1.0//EN',
	'CALSCALE:'      => 'GREGORIAN',
	'BEGIN:'         => 'VEVENT',
	'DTSTART:'       => $start->format( $format ),
	'DTEND:'         => $start->format( $format ),
	'DTSTAMP:'       => $start->format( $format ),
	'UID:'           => uniqid( 'c7_' ),
	'CREATED:'       => $start->format( $format ),
	'DESCRIPTION:'   => '',
	'LAST-MODIFIED:' => $start->format( $format ),
	'LOCATION:'      => '',
	'SUMMARY:'       => '',
	'URL;VALUE=URI:' => '',
	'ORGANIZER;'     => '',
	'TRANSP:'        => 'OPAQUE',
	'END:'           => 'VEVENT',
);

// Set offset
$modifier = 0;
if ( isset( $_POST['utc_offset_minutes'] ) && ! empty( $_POST['utc_offset_minutes'] ) ) {
	$offset = $_POST['utc_offset_minutes'];
	$modifier = ( $offset > 0 ? '+' : '' ) . $offset . ' minutes';
}

if ( isset( $_POST['date_start'] ) && ! empty( $_POST['date_start'] ) ) {

	$start = DateTime::createFromFormat('d/m/Y H:i', $_POST['date_start']);

	// Add offset
	$start->modify( $modifier );

	$data['DTSTART:'] = $start->format( $format );
	$data['DTSTAMP:'] = $start->format( $format );
}

if ( isset( $_POST['date_end'] ) && ! empty( $_POST['date_end'] ) ) {
	$end = DateTime::createFromFormat('d/m/Y H:i', $_POST['date_end']);

	// Add offset
	$end->modify( $modifier );

	$data['DTEND:'] = $end->format( $format );
} else {
	// Set end date based on start date + 1 hour.
	$end = clone $start;
	$end->modify( '+1 hour' );
	$data['DTEND:'] = $end->format( $format );
}

if ( isset( $_POST['location'] ) && ! empty( $_POST['location'] ) ) {
	$data['LOCATION:'] = $_POST['location'];
}

if ( isset( $_POST['description'] ) && ! empty( $_POST['description'] ) ) {
	$data['DESCRIPTION:'] = json_encode( $_POST['description'] );
	$data['DESCRIPTION:'] .= json_encode( "\n\n---\nInvite created with the C7 Inviter: invite.conference7.com" );
}

if ( isset( $_POST['summary'] ) && ! empty( $_POST['summary'] ) ) {
	$data['SUMMARY:'] = $_POST['summary'];
}

if ( isset( $_POST['url'] ) && ! empty( $_POST['url'] ) ) {
	$data['URL;VALUE=URI:'] = $_POST['url'];
}

if ( isset( $_POST['organizer'] ) && ! empty( $_POST['organizer'] ) ) {
	$data['ORGANIZER;'] = 'CN=' . $_POST['organizer'] . ':MAILTO:' . $_POST['organizer_email'];
}

$invite = 'BEGIN:VCALENDAR' . "\n";
foreach ( $data as $key => $rule ) {
	$invite .= $key . $rule . "\n";
}
$invite .= 'END:VCALENDAR';

if ( $_POST['send_email'] ) {

	$output = array(
		'status'  => 200,
		'message' => 'Succesfully delivered'
	);

	if ( ! isset( $_POST['email_address'] ) || empty( $_POST['email_address'] ) ) {
		$output['status']  = 500;
		$output['message'] = 'No e-mail address provided';
	}

	$dotenv = Dotenv\Dotenv::createImmutable( dirname( dirname( __DIR__ ) ) );
	$dotenv->load();

	$api_key = $_ENV['MAILGUN_API'];
	$domain  = 'inviter.conference7.com';

	$mg = Mailgun::create( $api_key, 'https://api.eu.mailgun.net' ); // For EU servers

	$args = array(
		'from'       => 'C7 Inviter <noreply@inviter.conference7.com>',
		'to'         => $_POST['email_address'],
		'subject'    => 'Invitation for ' . $_POST['summary'],
		'text'       => "Hi Marinus,\n\n We're excited to announce our April 2021 event and would love to have you here. \n\n We've added an invite to mark your calendar.\n\n Cheers,\n - The C7 Team",
		'attachment' => [
			[ 'fileContent' => $invite, 'filename' => 'invite.ics' ]
		]
	);
	$mg->messages()->send( $domain, $args );

	header( 'Content-Type: application/json' );
	echo json_encode( $output );
	die;

} else {
	header( 'Content-Type: text/calendar; charset=utf-8' );
	header( 'Content-Disposition: attachment; filename=invite.ics' );
	echo $invite;
}