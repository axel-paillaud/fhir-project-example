let backendUrl = "http://localhost:8085/patient.php";

document.getElementById("fetch-patient").addEventListener("click", () => {
  fetch(backendUrl);
});
