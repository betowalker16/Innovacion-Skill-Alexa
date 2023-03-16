(function($) {
    "use strict"; // Start of use strict
      // Clic form
        $("#login").on('click',async function(e) {
            var email;
            var pass;
          
            email	= $("#exampleInputEmail").val();
            pass	= $("#exampleInputPassword").val();

            const datos = new FormData();

            datos.append("email", email);
            datos.append("password", pass);

            const response 		= await fetch("php/login.php", {method: "POST", body: datos});
            const arrayResponse = await response.json();

            if(arrayResponse.error) return alert("Email y/o contraseña incorrectos");
            
            console.log(arrayResponse);
          
            window.location.href = "https://aplicaciones2.upaepcuc.com/proyecto_final/dashboard/";
      });
  })(jQuery); // End of use strict
  