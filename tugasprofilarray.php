<?php
  //array biodata
  $data = array (
    array (
      'name'=>'Avi Oktaviani',
      'age'=>'20',
      'dateofbirth' => 'October 14, 2002',
      'city'=>'Kediri',
      'address'=>'Kh.Ahmad Dahlan 48A Kediri',
      'npm'=>'21081010227',
      'email'=>'21081010227@student.upnjatim.ac.id',
      'batch'=>'2021',
      'major'=>'informatic',
      'phone'=>'+628800888180',
    ));
  $sosmed = array (
    array (
      'ig'=>'https://www.instagram.com/avioktaa/',
      'wa'=>'https://wa.me/6282244670526',
      'linkedin'=>'https://www.linkedin.com/in/avi-oktaviani-235343218/'
    )
    );
    
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Biografi</title>
	<style>
		body {
			background-color: #f1e9d8;
			color: #ffffff;
			transition: background-color 3s ease-in-out;
		}
		.orange {
			background-color: #d6d7bb;
        }
		.nude {
			background-color: #b6b464;
		}
		.coffee {
			background-color: #a6ae5d;
		}
	</style>
    <link rel="stylesheet" href="tugasprofil.css"></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onscroll="scrollFunction()">
	
	<?php
		
	?>	

    <h1 class="helo">HELLO THERE!!</h1>    
    <p class="im">I'M AVI</p>    
    <div><img src="foto\WhatsApp Image 2022-11-20 at 21.00.53.jpeg" alt="foto profil" class="foto" class="center"></div>
    <br><br>
    <p style="font-size: 65px; color: rgb(106, 99, 84); text-align: center ;"><strong>About me</strong> </p>
    <p style="font-size: 45px; color: rgb(141, 131, 108); text-align: center;">Hey there, I’m Avi Oktaviani from Kediri. I'm a student from UPN Veteran Jawa Timur faculty of Computer Science and majoring in informatics. </p>
    <p>
        <br></br>
    </p>
	

	<div class="container">
        <table>
          <?php foreach ($data as $profil) :?>
        <tr style="text-align: center">
            <td>
            <h1 style="font-size: 50px;">PROFILE</h1>
            <div style="font-size: 30px">
                <p>Name           : <?php echo $profil['name'] ?></p>
                <p>Age            : <?php echo $profil['age'] ?></p>
				<p>Birtday		  :	<?php echo $profil['dateofbirth']?></p>
                <p>City           : <?php echo $profil['city'] ?></p>
                <p>Address        : <?php echo $profil['address'] ?></p>
                <p>NPM            : <?php echo $profil['npm'] ?></p>
                <p>Email          : <?php echo $profil['email'] ?></p>
                <p>Student Bacth  : <?php echo $profil['batch'] ?></p>
                <p>Major          : <?php echo $profil['major'] ?></p>
                <p>Phone Number   : <?php echo $profil['phone'] ?></p>
            </div>
            </td>
        </tr>
        </table>
    </div>

    <p><br></p>
    <div class="container">
        <table>
        <tr style="text-align: center;">
            <td>
            <h1 style="font-size: 50px;">SOCIAL MEDIA</h1>
            <div style="font-size: 30px">
                <p><a href="<?php echo $sosmed[0]['ig']; ?>"><i class="fa fa-instagram"> Instagram</i></p>
                <p><a href="<?php echo $whatsapp[0]['wa']; ?>"><i class="fa fa-whatsapp"> Whatsapp</i></a></p>
                <p><a href="<?php echo $linkedin[0]['linkedin']; ?>"><i class="fa fa-linkedin"> LinkedIn</i></a></p>
            </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
<script>
	function scrollFunction() {
		var scrollPosition = window.pageYOffset;
		var body = document.querySelector("body");

		if (scrollPosition < 500) {
			body.classList.remove("orange", "nude", "coffee");
		} else if (scrollPosition >= 500 && scrollPosition < 1000) {
			body.classList.add("orange");
			body.classList.remove("nude", "coffee");
		} else if (scrollPosition >= 1000 && scrollPosition < 1500) {
			body.classList.add("nude");
			body.classList.remove("orange", "coffee");
		} else {
			body.classList.add("coffee");
			body.classList.remove("orange", "nude");
		}
	}
</script>
</html>