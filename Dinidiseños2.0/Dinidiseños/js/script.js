const formulario = document.querySelector('.formulario'),
      inputs = document.querySelectorAll('.formulario input'),
      sign_in_container = document.querySelector('.sign-in-container'),
      sign_up_container = document.querySelector('.sign-up-container');

    
      document.addEventListener('click', e => {
        if (e.target.matches ('.ok-account')){
            sign_in_container.style.display= 'block';
            sign_up_container.style.display='none';
            document.querySelector('.error_notify').classList.remove('active');
        } else if (e.target.matches('.no-account')){
            sign_up_container.style.display="block";
            sign_in_container.style.display="none";
            document.querySelector('.error_notify').classList.remove('active');


        }
      })

      const expresiones_regulares = {
            nombre: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
            password: /^.{4,12}$/,
            email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/
      }
       
      const campos = {
        name:false,
        password:false,
        email:false,
      }


     const validarformulario = (e) => {
      switch (e.target.name) {
        case "nombre":
            validarcampo(expresiones_regulares.nombre, e.target.value,"name");
            break;
        case "email":
            validarcampo(expresiones_regulares.email, e.target.value,"email");
            break;
        case "password":
            validarcampo(expresiones_regulares.password, e.target.value,"password");
         
            break;
      
        default:
            break;
      }
     } 
     const validarcampo =(expresion,input, campo) => {
        if (expresion.test(input)) {
            document.getElementById(campo).classList.remove('error');
            campos[campo] = true;
            
        } else {
            document.getElementById(campo).classList.add('error');
            campos[campo] = false;
            
        }
     }


      inputs.forEach((input) => {
        input.addEventListener('keyup', validarformulario);
        input.addEventListener('blur', validarformulario);
      });

      formulario.addEventListener('submit', e => {
        
        if (campos.name && campos.password && campos.email){
            document.querySelector('.check_notify').classList.add('active');
            document.querySelector('.error_notify').classList.remove('active');

            setTimeout(() => {
            document.querySelector('.check_notify').classList.remove('active');
                
            }, 4000);
        }else{
            document.querySelector('.error_notify').classList.add('active');
            document.querySelector('.check_notify').classList.remove('active');

 
        }

      })