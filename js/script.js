	

	function opennav() {
		document.getElementById('nav').style.width='80%';
		document.getElementById('main').style.opacity='0.6';
		document.getElementById('banner').style.opacity='0.6';
		document.getElementById('Q-links').style.opacity='0.6';
	}

	function closenva() {
		document.getElementById('nav').style.width='0';
		document.getElementById('main').style.opacity='0.999';
		document.getElementById('banner').style.opacity='0.999';
		document.getElementById('Q-links').style.opacity='0.999';
	}

	function openContact() {
		document.getElementById('contact-overlay').style.display='block';
	}

	function closeContact() {
		document.getElementById('contact-overlay').style.display='none';
	}



	window.addEventListener("load", function(){
		document.querySelector('.loader-container').style.display='none';
	})

	mybutton= document.getElementById("scrolltop");

		function scrolltop() {
			document.body.scrollTop= 0;
		}

		function scrolltop() {
			document.documentElement.scrollTop= 0;
		}
	