<template>
	<section>
		<div class="blazon row">
			<div class="col-12 mb-5 mb-md-2 col-md-4 col-lg-2">
				<div class="div-img">
					<span class="img-icon">
						<img :src="urlsIcons.url1" alt="">
					</span>
					<span> Suntem disponibili </span>
				</div>

				<div class="blazon-text">
					<p class="text-center">Suntem usor abordabili - remediem orice neregula in 24 de ore</p>
				</div>
			</div>
			<hr/>
			<div class="col-12 mb-5 mb-md-2 col-md-4 col-lg-2">
				<div class="div-img">
					<span class="img-icon">
						<img :src="urlsIcons.url2" alt="">
					</span>
					<span> Afacere de Familie </span>
				</div>

				<div class="blazon-text">
					<p class="text-center">Suntem in familie si va tratam ca prieteni de familie</p>
				</div>
			</div>
			<hr/>
			<div class="col-12 mb-5 mb-md-2 col-md-4 col-lg-2">
				<div class="div-img">
					<span class="img-icon">
						<img :src="urlsIcons.url3" alt="">
					</span>
					<span> Peste 50 proiecte/an </span>
				</div>
				<div class="blazon-text">
					<p class="text-center">Avem zeci de clienti multumiti in fiecare an</p>
				</div>
			</div>
			<hr/>
			<div class="col-12 mb-5 mb-md-2 col-md-4 col-lg-2">
				<div class="div-img">
					<span class="img-icon">
						<img :src="urlsIcons.url4" alt="">
					</span>
					<span> Parteneri de incredere </span>
				</div>

				<div class="blazon-text">
					<p class="text-center">In 30 de ani de activitate ne-am castigat increderea partnerilor</p>
				</div>
			</div>
			<hr/>
			<div class="col-12 mb-5 mb-md-2 col-md-4 col-lg-2">
				<div class="div-img">
					<span class="img-icon">
						<img :src="urlsIcons.url5" alt="">
					</span>
					<span>  O flota de 20 macarale </span>
				</div>
				<div class="blazon-text">
					<p class="text-center">Avem o flota care sa acopere o gama vasta de servicii</p>
				</div>
			</div>
			<hr/>
			<div class="col-12 mb-5 mb-md-2 col-md-4 col-lg-2">
				
				<div class="div-img">
					<span class="img-icon last-icon">
						<img :src="urlsIcons.url6" alt="">
					</span>
					<span>  Schele Industriale </span>
				</div>

				<div class="blazon-text">
					<p class="text-center">Avem 3 tipuri de schele</p>
				</div>
				
			</div>
		</div>
	</section>
</template>

<script>
export default {
	data() {
		return {
			//imgsrc: '/assets/liebherr-vehicle-cranes.jpg'
			urlsIcons: JSON.parse(this.urls)
		}
	},
	// props: ['url1', 'url2', 'url3' ]
	props: ['urls']
}

</script>

<style scoped>

section {
	margin: 30px 15px;
}

div.blazon {
	height: auto;
	background-color: yellow;
	display: flex;
	justify-content: center;
	margin: 0;
}

div.blazon > div {
	margin-top: 20px;
}


div.div-img > span {
	display: inline-block;
	width: 47%;
	font-family: 'Giveny';
	font-weight: bold;
}

div.div-img > span.img-icon {
	vertical-align: top;
	padding-top: 10px;
}

div.div-img {
	margin-bottom: 20px;
}

div.blazon span > span {
	display: block;
}

div.blazon div.blazon-text span {
	font-size: 15px;
	
}


div.blazon span img {
	max-height: 100%;
	max-width: 100%;
	margin-top: -15px;
}


div.blazon div.div-img:hover img {
	animation: icon-misca 0.7s ease-in-out forwards;
	animation-delay: 0.1s;
	cursor: pointer;
}

div.blazon span + p {
	margin-top: 10px;
	font-size: 15px;
}

@keyframes icon-misca {
	0% {
		transform: scale(1) ;
	}
	30% {
		transform: scale(1.2) ;
	}
	85% {
		transform: scale(0.8);
	}
	100% {
		transform: scale(1);
	}
}

@media screen and (max-width: 991px) {
	div.blazon span.last-icon img {
	max-width: 100px;
	}
}

@media screen and (max-width: 768px) {
	div.blazon span img {
		margin: 0;
	}

	div.div-img span.img-icon {
		vertical-align: middle;
		margin-bottom: 0;
	}
}

@media screen and (max-width: 768px) {
	div.blazon hr {
	width: 100%;
	}
}

</style>