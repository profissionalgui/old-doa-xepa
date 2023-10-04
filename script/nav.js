const avatarImg = document.getElementById('avatar-img');
const avatarInput = document.getElementById('avatar-input');

avatarInput.addEventListener('change', function() {
  const file = avatarInput.files[0];
  const reader = new FileReader();
  reader.readAsDataURL(file);
  reader.onload = function() {
    avatarImg.src = reader.result;
    localStorage.setItem('avatar', reader.result);
  }
});

if (localStorage.getItem('avatar')) {
  avatarImg.src = localStorage.getItem('avatar');
}