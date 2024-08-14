<?php
// En-têtes CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Gérer les requêtes OPTIONS (prévol)
if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    http_response_code(200);
    exit();
}

header("Content-type: application/fhir+json");

$patientFile = "../fhir/patient.json";

if (file_exists($patientFile)) {
    $patientData = file_get_contents($patientFile);

    echo $patientData;
} else {
    http_response_code(404);
    echo json_encode(["error" => "Patient file not found"]);
}
