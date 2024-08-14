let backendUrl = "http://localhost:8085/patient.php";

document.getElementById("fetch-patient").addEventListener("click", () => {
  fetch(backendUrl)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok " + response.statusText);
      }
      return response.json();
    })
    .then((data) => {
      console.log("Patient FHIR Data:", data);
    })
    .catch((error) => {
      console.error("There was a problem with the fetch operation:", error);
    });
});
