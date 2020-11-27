<template>
	<div id="macarale">
		<div id="macara-1"> 
		</div>
		<section id="prezentare">
			<div class="prezentare-mob">
				<h1> Cu o macara poti face multe </h1>
				<br/>
				<h3> <span> Inchirieri </span> &nbsp;  &nbsp; <span> Automacarale </span> &nbsp; &nbsp;<span> Oradea </span> </h3>
				<br/>
				<p> Suntem o firma mica si de aceea suntem flexibili, </p> <p> mobili si aproape de clienti  </p>
				<br/>
			</div>
			
			<div class="prezentare-but">
				<button class="btn btn-lg"> SERVICII </button> &nbsp;
				<button class="btn btn-lg btn-primary"> CONTACT </button>
			</div>
		</section>
	</div>
</template>
<script>
export default {
	data() {
		return {
			//imgsrc: '/assets/liebherr-vehicle-cranes.jpg'
		}
	}
}

</script>
<style scoped>
div#macarale {
	position: relative;
}

div#macarale section#prezentare {
	position: absolute;
	padding-top: 60px;
	top: 0;
	width: 100%;
	opacity: 1;
	/* animation: prezentareUnu 1.5s forwards 1s; */
	text-align: center;
	color: seashell;
	height: 100%;
}

div#macarale section#prezentare div.prezentare-mob {
	position: absolute;
	width: 100%;
	top:90px;
}

div#macarale section#prezentare div.prezentare-mob p {
	font-size: 17px;
}

div#macarale section#prezentare div.prezentare-but {
	position: absolute;
	width: 100%;
	bottom: 80px;
}

div#macarale section#prezentare h3 {
	position: relative;
	animation: prezentareh3 0.7s forwards;
}

div#macarale section#prezentare h3 span {

	display: inline-block;
	color: lawngreen;
}

/* div#macarale div#prezentare h3 span:nth-child(1) {
	animation: prezentareh3 1s forwards 1s;
}

div#macarale div#prezentare h3 span:nth-child(2) {
	position: relative;
	animation: prezentareh3 1.5s forwards 1s;
}

div#macarale div#prezentare h3 span:nth-child(3) {
	position: relative;
	animation: prezentareh3 2s forwards 1s;
} */

div#macara-1 {
	background-image: url('../../../public/assets/macara1.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	background-position-y: bottom;
	height: 550px;
	filter: blur(2px);
    -webkit-filter: blur(2px);
    -moz-filter: blur(2px);
    -o-filter: blur(2px);
	-ms-filter: blur(2px);
	position: relative;
}

div#macara-1::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
	background: rgb(0, 0, 0, 0.5)
}

div#macarale section#prezentare p:nth-of-type(2) {
	margin-top: -15px;
}

section#prezentare p {
	position: relative;
	animation: prezentarep 0.5s forwards;
}

div#macarale section#prezentare button:first-of-type {
	background-color: rgb(255, 230, 0);
	padding-left: 40px;
	padding-right: 40px;
}
div#macarale section#prezentare button:first-of-type:hover {
	background-color: rgb(255, 180, 0);
}

/* @keyframes prezentareUnu {
	0% {
		top: 0;
	}
	100% {
		top: 100px;
		opacity: 1;
	}
} */

@keyframes prezentareh3 {
	/* 0% {
		opacity: 0;
		top: -500px;
	}
	100% {
		top: 0;
		opacity: 1;
	} */

	0% {
		opacity: 0;
		bottom: -1000px;
	}
	100% {
		opacity: 1;
		bottom: 0px;
	}

}

@keyframes prezentarep {
	0% {
		opacity: 0;
		left: -1000px;
	}
	100% {
		opacity: 1;
		left: 0px;
	}

}

@media screen and (max-width: 768px) {
	div#macarale section#prezentare h3 {
		font-size: 20px;
	}

	div#macarale section#prezentare h1 {
		font-size: 28px;
	}

	div#macarale section#prezentare p {
		font-size: 17px;
	}	

	/* div#macarale div#prezentare {
		
	} */
}
</style>