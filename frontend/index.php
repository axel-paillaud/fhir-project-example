<?php $title = "FHIR/HL7v2 Example"; ?>

<?php ob_start(); ?>

<h1 class="title">FHIR/HL7 Project Example</h1>

<p>For FHIR usage example, go to <a href="/fhir-example.php">FHIR Example</a></p>
<p>For HL7 conversion example, go to <a href="/hl7-example.php">Convert to HL7v2 Example</a></p>

<?php $content = ob_get_clean(); ?>

<?php include './components/layout.php'; ?>

