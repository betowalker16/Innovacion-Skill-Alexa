(function($) { 
  "use strict"; // Start of use strict
       // Clic form
  $("#register").on('click',async function(e) {
    const name = $("#exampleFirstName").val();
    const lastName = $("#exampleLastName").val();
    const email = $("#exampleInputEmail").val();
    const pass = $("#exampleInputPassword").val();
    const pass2 = $("#exampleRepeatPassword").val();
            
    if(pass != pass2) return alert("Las contraseñas no son iguales");

    const datos = new FormData();

    datos.append("name", name);
    datos.append("lastName", lastName);
    datos.append("email", email);
    datos.append("password", pass);

    const response 		= await fetch("php/register.php", {method: "POST", body: datos});
    const arrayResponse = await response.json();

    if(arrayResponse.error) return alert("No se pudo registrar");
    
    console.log(arrayResponse);
  
    window.location.href = "https://aplicaciones2.upaepcuc.com/proyecto_final/dashboard/login.html";
  });
})(jQuery); // End of use strict
  