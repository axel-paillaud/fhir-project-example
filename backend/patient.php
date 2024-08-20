<?php
// CORS Headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

header("Content-type: application/fhir+json");

$patientFile = "../fhir/patient.json";

if (file_exists($patientFile)) {
    $patientData = file_get_contents($patientFile);

    echo $patientData;
} else {
    http_response_code(404);
    echo json_encode(["error" => "Patient file not found"]);
}

