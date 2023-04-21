function sendEmail() {
    Email.send({
      To: "edwinpelaezcaicedo@gmail.com",
      From: document.getElementById("email").value,
      Subject: "Pregunta desde mi sitio web" + document.getElementById("name").value,
      Body: "Hola,\n\nAlguien ha enviado una pregunta desde mi sitio web. La pregunta es:\n\n" + document.getElementById("question").value,
    }).then(
      message => alert("Correo enviado correctamente: " + message)
    );
  }
  
  document.getElementById("submit").addEventListener("click", function(event) {
    event.preventDefault();
    sendEmail();
  });
  