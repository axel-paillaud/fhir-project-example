<?php $title = "FHIR Patient Example"; ?>
<?php ob_start(); ?>

<h1 class="title">FHIR Patient example</h1>
<button id="js-fetch-patient">Fetch Patient Data</button>

<div class="subtitle">Patient Information</div>
<div id="patient-info">
    <!-- Patient Information here -->
</div>

<div class="subtitle">FHIR Narrative</div>
<div id="patient-narrative">
    <!-- FHIR Narrative here -->
</div>

<script src="assets/js/fhir.js"></script>

<?php $content = ob_get_clean(); ?>

<?php include './components/layout.php'; ?>
