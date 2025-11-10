$(document).ready(function() {
  $('#applicationForm').on('submit', function(e) {
    let name = $('#name').val().trim();
    let email = $('#email').val().trim();
    let phone = $('#phone').val().trim();

    if (name === '' || email === '' || phone === '') {
      alert('Please fill all required fields!');
      e.preventDefault();
    } else if (!/^[0-9]{10}$/.test(phone)) {
      alert('Please enter a valid 10-digit phone number!');
      e.preventDefault();
    }
  });
});
