function validateEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  
  
  var email = 'b211210026@example.com';
  if (validateEmail(email)) {
    console.log('Geçerli bir e-posta adresi');
  } else {
    console.log('Geçerli bir e-posta adresi değil');
  }


  