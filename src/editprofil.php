<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<head>
	
	<title>ToDo</title>
	<link rel="stylesheet" type="text/css" media="all" href="css.css" />
<body>
<header>	
			
			<div id="tes">
			<br></br>
			<h1 id="logo"><a href="dashboard.html"><img src="images/logo2.png"/></a>
			<input name="search" size="30" type="text" maxlength="20"><img src="images/search-icon.png"/>
			</div>
	
</header>
		
<script type ="text/javascript">
	var checkusername = /^[A-Za-z0-9 ]{6,20}$/;
	var checkpwd=  /^[A-Za-z0-9!@#$%^&*()_]{8,20}$/;
	var checkname= /^.+\ (\[?)([A-Za-z]{1,15})(\]?)$/;
	var emailvalid = /^[a-zA-Z]{2,15}(\]?)+\@(\[?)[a-zA-Z0-9\-\_\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/;

	/*function validatefoto()
{
var extensions = new Array("jpg","jpeg");
var foto = document.form.foto.value;
var image_length = document.form.foto.value.length;
var pos = foto.lastIndexOf('.') + 1;
var ext = foto.substring(pos, image_length);
var final_ext = ext.toLowerCase();
for (i = 0; i < extensions.length; i++)
{
if(extensions[i] == final_ext)
{
return true;
}

}

return false;
}*/

	function validate ()
	{
	var name= document.form.username;
	var pwd = document.form.password;
	var checkconfirm=document.form.confirm;
	var fullname=document.form.fullname;
	var email=document.form.email;
	var tanggal=document.form.birth;
	var foto=document.form.foto;
	
	
	/*atribut pengecekan foto
	var foto_length= document.form.foto.value.length;
	var pos= foto.lastIndexof('.')+1;
	var ext=foto.substring(pos, foto_length);
	var final_ext= ext.toLowerCase();*/
	
	
	
	if	(!checkusername.test(name.value))
		{							
		document.getElementById("salah username").innerHTML="Nama harus lebih dari 6 karakter";
		name.focus();
		return false;}
	else if (!checkpwd.test(pwd.value))
		{document.getElementById("salah password").innerHTML="password harus lebih dari 8 karakter";
		pwd.focus();
		return false;
		}
	else if ((pwd.value==name.value)||(pwd.value==email.value))
		{document.getElementById("salah sama").innerHTML="password tidak boleh sama dengan email atau username!";
		pwd.focus();
		return false;
		}
	else if (checkconfirm.value!=pwd.value)
	{document.getElementById("salah tidaksama").innerHTML="password tidak cocok!";
		checkconfirm.focus();
		return false;
	}
	else if(!checkname.test(fullname.value))
	{document.getElementById("salah tidaklengkap").innerHTML="Nama minimal terdiri dari dua kata dipisah spasi";
		fullname.focus();
		return false;
	}
	
	else if (!emailvalid.test(email.value))
	{document.getElementById("salah email").innerHTML="email tidak valid!";
		email.focus();
		return false;
	}
	
	
	else if (pwd.value==email.value)
		{document.getElementById("salah samapassword").innerHTML="Email tidak boleh sama dengan password!";
		email.focus();
		return false;
		}
	
	else if (tanggal.value==0)
	{
	document.getElementById("salah tanggal").innerHTML="Tanggal harus dipilih!";
		tanggal.focus();
		return false;
		
	}
	/*else if (!validatefoto())
	{
	
		document.getElementById("salah foto").innerHTML="foto harus jpg,jpeg";
		foto.focus();
		return false;
		
	}*/
	else if (foto.value==0)
	{
	
		document.getElementById("salah foto").innerHTML="foto harus diisi";
		foto.focus();
		return false;
		
	}
	
	
	else
		{return true;}
	}
		
		
	</script>
	
</head>

<body>

<header >	
			
			<div id="tes">
			<br></br>
			<h1 id="site-title"> 
			</div>
		
	</header>

		<div id="elemenkiri">
		<div id="primary">
			<div id="content" role="main">
					<article class="post">	
					<header class="entry-header">
							<h1 class="entry-title"><a href="#"> EDIT PROFILE</a></h1>
					<form name="form" action="editprofilsukses.php" method="post" onsubmit="return validate();"  enctype='multipart/form-data'>
					
					<strong>Change Full Name </strong> <br />
					<input name="fullname" type="text" size="30" maxlength="30">
					<div id="salah tidaklengkap"> </div>							
					<br/>
					
					<!--<strong>Upload New Avatar</strong> <br />
					<input name="foto" type="file" size="30" >
					<div id="salah foto"> </div>
					
					
					<strong>Change Birthdate</strong> <br />
					<input name="birth" type="date" >
					<div id="salah tanggal"> </div>
					<br/>-->
					
					<strong>Change Password </strong> <br />
					<input name="password" type="password" size="30" maxlength="20" >
					<div id="salah password"> </div>
					<div id="salah sama"> </div>
					<br/>
					
					<strong>Confirm Change Password </strong> <br />
					<input name="confirm" type="password" size="30" maxlength="20"> 
					<div id="salah tidaksama"> </div>
					<br/>
					
					<br/>
					
					<input type="submit" name="btnsubmit" value="Submit" >
					</form>
					
					
	
					</header>	
					</article>		
				</div>			
			</div>
					
		

		<footer id="colophon">
			<div id="site-generator">
				<p>&copy; <a href="#">AAA</a>-IF3038 Pemrograman Internet 2013 <br />
				</p>
			</div>
		</footer>
	</div>
	
</div>	
</body>