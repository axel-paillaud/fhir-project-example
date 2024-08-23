let backendHl7Url = "http://localhost:8085/convert_to_hl7.php";

document.getElementById('js-patient-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Get form data
    let formData = {
        patientId: document.getElementById('patientId').value,
        firstName: document.getElementById('firstName').value,
        lastName: document.getElementById('lastName').value,
        dob: document.getElementById('dob').value,
        gender: document.getElementById('gender').value,
        medName: document.getElementById('medName').value,
        dose: document.getElementById('dose').value,
        frequency: document.getElementById('frequency').value
    };
    
    // Send form data to backend
    fetch(backendHl7Url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(formData),
    })
    .then(response => response.text())
    .then(data => {
        // Show response to frontend 
        console.log('HL7 Message:', data);
        document.getElementById('js-hl7-result').value = data;
    });
});

