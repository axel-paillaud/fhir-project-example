<?php $title = "HL7v2 Conversion Example"; ?>

<?php ob_start(); ?>

<h1 class="title mt-16">Send and convert to HL7v2 example</h1>

<div class="form-result-container">

    <form id="js-patient-form" class="patient-form">
        <div>
            <h2>Informations du patient</h2>
            <div class="form-container">
                <label for="patientId">ID Patient:</label>
                <input type="text" id="patientId" name="patientId"><br><br>
            </div>

            <div class="form-container">
                <label for="firstName">Prénom:</label>
                <input type="text" id="firstName" name="firstName"><br><br>
            </div>

            <div class="form-container">
                <label for="lastName">Nom:</label>
                <input type="text" id="lastName" name="lastName"><br><br>
            </div>

            <div class="form-container">
                <label for="dob">Date de Naissance:</label>
                <input type="date" id="dob" name="dob"><br><br>
            </div>

            <div class="form-container">
                <label for="gender">Sexe:</label>
                <select id="gender" name="gender">
                    <option value="M">Homme</option>
                    <option value="F">Femme</option>
                </select><br><br>
            </div>
        </div>

        <div>
            <h2>Médicaments administrés</h2>

            <div class="form-container">
                <label for="medName">Nom du médicament:</label>
                <input type="text" id="medName" name="medName"><br><br>
            </div>

            <div class="form-container">
                <label for="dose">Dose:</label>
                <input type="text" id="dose" name="dose"><br><br>
            </div>

            <div class="form-container">
                <label for="frequency">Fréquence:</label>
                <input type="text" id="frequency" name="frequency"><br><br>
            </div>

            <input type="submit" value="Envoyer">
        </div>
    </form>

    <div class="result-container">
        <h3>Result</h3>
        <textarea rows="10" cols="80" id="js-hl7-result"></textarea>
    </div>
</div>

<script src="assets/js/hl7.js"></script>

<?php $content = ob_get_clean(); ?>

<?php include './components/layout.php'; ?>

