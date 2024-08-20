<?php

// CORS Headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Get JSON data from frontend
$data = json_decode(file_get_contents('php://input'), true);

// Create HL7 segment
$MSH = "MSH|^~\\&|APP_NAME|HOSPITAL|SYSTEM_NAME|FACILITY|" . date('YmdHis') . "||ORM^O01|123456|P|2.5";
$PID = "PID|||{$data['patientId']}^^^HOSPITAL^MR||{$data['lastName']}^{$data['firstName']}^^^MR||{$data['dob']}|{$data['gender']}";
$ORC = "ORC|NW|ORD1234||123456";
$RXE = "RXE|^{$data['medName']}|TAB||{$data['dose']}|MG||{$data['frequency']}|" . date('YmdHis');

// Concatenate all HL7 segment
$hl7Message = $MSH . "\r" . $PID . "\r" . $ORC . "\r" . $RXE;

// Return HL7v2 message to frontend
header('Content-Type: text/plain');
echo $hl7Message;

