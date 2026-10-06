// COMMON FORM VALIDATION
document.addEventListener('DOMContentLoaded',()=>{
 document.querySelectorAll('form[data-validate]').forEach(form=>{
  form.addEventListener('submit',e=>{
   let ok=true;
   form.querySelectorAll('[required]').forEach(f=>{
    f.classList.remove('invalid');
    if((f.type==='checkbox'&&!f.checked)||!f.value.trim()){f.classList.add('invalid');ok=false;}
   });
   form.querySelectorAll('input[type=email]').forEach(f=>{
    if(f.value&&!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(f.value)){f.classList.add('invalid');ok=false;}
   });
   const p=form.querySelector('[name=password]'), c=form.querySelector('[name=confirm_password]');
   if(p&&c&&p.value!==c.value){c.classList.add('invalid');ok=false;alert('Passwords do not match.');}
   if(!ok){e.preventDefault();alert('Please fill the required fields correctly.');}
  });
 });
});
