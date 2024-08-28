//HOME HOVERING EFFECT

var typingeffect = new Typed(".hoveringtext",{
  strings : ["Trustworthy.","Trustworthy.", "Reliable.", "Empathetic.", "Respectful."],
  loop: true,
  typeSpeed : 70,
  backSpeed: 80,
  backDelay: 1500
})


const nav = document.querySelector('nav');

window.addEventListener('scroll', () => {
  if(window.scrollY >= 50) {
      nav.classList.add('active_nav');
  }else {
      nav.classList.remove('active_nav');
  }
}
)


//MENU ACTIVE EFFECT

const li=document.querySelectorAll(".links");
const sec=document.querySelectorAll("section");

function activeMenu(){
let len=sec.length;
while(--len && window.scrollY + 97 < sec[len].offsetTop){}
li.forEach(ltx =>ltx.classList.remove("active"));
li[len].classList.add("active");
}
activeMenu();
window.addEventListener("scroll", activeMenu);


//Message delete
function openPopup(){
  var Name = document.getElementById('fname');
  var phone = document.getElementById('pn');
  var address = document.getElementById('add');
  var email = document.getElementById('em');
  var subject = document.getElementById('sub');
  var msg = document.getElementById('msg');

  if(Name.value === '' || phone.value === '' || address.value === '' || email.value === '' || subject.value === '' || msg.value === ''){
  }
  else{
      setTimeout(() => {
          Name.value = '';
          phone.value ='';
          address.value = '';
          subject.value = '';
          email.value = '';
          msg.value = '';
      }, 2000);
  }
}


function message(){
  var Name = document.getElementById('name');
  var email = document.getElementById('email');
  var address = document.getElementById('address');
  var phone = document.getElementById('phone');
  var sub = document.getElementById('subject');
  var msg = document.getElementById('msg');
  const success = document.getElementById('success');
  const danger = document.getElementById('danger');

  if(Name.value === '' || email.value === '' || address.value === '' || phone.value === '' || sub.value === '' || msg.value === ''){
      danger.style.display = 'block';
  }
  else{
      setTimeout(() => {
          Name.value = '';
          email.value = '';
          address.value = '';
          phone.value = '';
          sub.value = '';
          msg.value = '';
      }, 2000);

      success.style.display = 'block';
  }


  setTimeout(() => {
      danger.style.display = 'none';
      success.style.display = 'none';
  }, 4000);

}


//Message del
let btnmess = document.querySelector('button');
let inputs = document.querySelectorAll('input');

btnmess.addEventListener('click', () =>{
  inputs.forEach(input => input.value = '');
})



//POP UP MESSAGE DIALOG

let popup = document.getElementById("popup");
function openPopup(){
popup.classList.add("open-popup");
}
function closePopup(){
  popup.classList.remove("open-popup");
}
