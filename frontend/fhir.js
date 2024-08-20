let backendFhirUrl = "http://localhost:8085/patient.php";

document.getElementById("js-fetch-patient").addEventListener("click", () => {
    fetch(backendFhirUrl)
        .then((response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok " + response.statusText);
            }
            return response.json();
        })
        .then((data) => {
            console.log("Patient FHIR Data:", data);

            // Extract FHIR resources 
            const patientName =
                data.name[0].given.join(" ") + " " + data.name[0].family;
            const patientId = data.identifier[0].value;
            const patientGender = data.gender;
            const patientBirthDate = data.birthDate;

            // Show Patient info
            document.getElementById("patient-info").innerHTML = `
                <p><strong>ID:</strong> ${patientId}</p>
                <p><strong>Name:</strong> ${patientName}</p>
                <p><strong>Gender:</strong> ${patientGender}</p>
                <p><strong>Birth Date:</strong> ${patientBirthDate}</p>
            `;

            // Show FHIR Narrative
            const narrativeDiv = data.text.div;
            document.getElementById("patient-narrative").innerHTML = narrativeDiv;
        })
        .catch((error) => {
            console.error("There was a problem with the fetch operation:", error);
        });
});

