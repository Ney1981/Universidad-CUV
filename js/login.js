function setToken() {
  sessionStorage.setItem("token", "YWd1c3RpbmlhbmE6NDU2YWd1c3Q=");
  window.location.href = "areapersonal.php"; //! Cambiar dependiendo si es estudiante o docente
}

function goHome() {
  window.location.href = "index.php";
}
