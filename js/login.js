
  document.getElementById('loginbuton').addEventListener('click', 
  function(){
    document.querySelector('.bg-modal').style.display = 'none';
    document.querySelector('.modal-opac-signup').style.display = 'none';
    document.querySelector('.bg-modal').style.display = 'flex';
    document.querySelector('.modal-opac').style.display = 'flex';
  });

  document.querySelector('.close').addEventListener('click', 
  function() {
    document.querySelector('.bg-modal').style.display = 'none';
    document.querySelector('.modal-opac').style.display = 'none';
  });

  document.getElementById('signupbuton').addEventListener('click', 
  function(){
    document.querySelector('.bg-modal').style.display = 'none';
    document.querySelector('.modal-opac').style.display = 'none';
    document.querySelector('.bg-modal').style.display = 'flex';
    document.querySelector('.modal-opac-signup').style.display = 'flex';
  });

  document.querySelector('.closesign').addEventListener('click', 
  function(){
    document.querySelector('.bg-modal').style.display = 'none';
    document.querySelector('.modal-opac-signup').style.display = 'none';
  });

  document.getElementById('addbuton').addEventListener('click', 
  function(){
    document.querySelector('.bg-modal').style.display = 'flex';
    document.querySelector('.modal-opac-signup').style.display = 'flex'; 
  });

  document.querySelector('.closesign').addEventListener('click', 
  function(){
    document.querySelector('.bg-modal').style.display = 'none';
    document.querySelector('.modal-opac-signup').style.display = 'none';
  });
  