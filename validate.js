function validate(){ 
	var name=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var pass=document.getElementById('pass').value;
	var repass=document.getElementById('repass').value;
	var mobile=document.getElementById('mob').value;
	var re=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(re.test(email))
		{
			if(pass.length >=8)
			{
				if(pass==repass)
					{
						if(mobile.length==10)
							alert("Form submitted successfully !");
						else
							alert("Invalid mobile number");
					}	
				else
					alert("Passwords do not match");
			}
			else
				alert("Invalid password");
		}
		else
			alert("Invalid email");
}
