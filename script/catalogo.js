document.getElementById("whatsapp-btn").addEventListener("click", function() {
  // Número de telefone ou link para o WhatsApp
  var phoneNumber = `+5581988260798`; // Substitua pelo número de telefone desejado

  // Redirecionar para o WhatsApp
  window.location.href = "https://api.whatsapp.com/send?phone=" + phoneNumber;
});
