<template>
	<section class="mijloc-parag my-5">
		<div class="mijloc-parag">
			<div class="row">
				<div class="col-sm-5 py-5"> 
					<h2 class="text-left">Niciun tel nu este prea inalt cand folosesti o macara</h2>
					<br/>
					<p> Macaralele sunt pasiunea noastra. Lucrand cu noi o sa intelegeti aceste cuvinte si de ce. </p>
					<p> Avantajul unei afaceri mici, asa cum suntem noi, este ca nu avem ierarhii de decizii. Trecem la actiune mai repede decat altii si ne facem treaba bine. </p>
				</div>
				<div class="col-sm-7">  
					<div class="thumbnails">
						<div class="thumbnail"> 
							<div class="thumbnail-title"> Ursache e solutia </div>
							<span class="thumbnail-subdiv"> XXX XXXX XXXX RRRR DDD TTTT  EEEE </span>
						</div>
						<div class="thumbnail"> 
							<div class="thumbnail-title"> Ursache e solutia </div>
							<span class="thumbnail-subdiv"> XXX XXXX XXXX RRRR DDD TTTT  EEEE </span>
						</div>
						<div class="thumbnail"> 
							<div class="thumbnail-title"> Ursache e solutia </div>
							<span class="thumbnail-subdiv"> XXX XXXX XXXX RRRR DDD TTTT  EEEE </span>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="mijloc-fixed p-5 mt-5">
			<div class="text-interior">
				<h3> Ai nevoie de o macara? </h3>
				<p> Contactează-ne telefonic la numarul de mai jos pentru o discutie amicala  </p>

				<p class="telefon"> <i class="fa fa-mobile-alt"> </i> &nbsp; Suna la: 0734 593 884 </p>
			</div>
		</div>
		
	</section>
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

div.mijloc-parag {
	font-size: 25px;
}

div.mijloc-parag div.row {
	margin: auto 0;
}

div.mijloc-fixed {
	background-image: url('../../../public/assets/liebherr-vehicle-cranes.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	
	position: relative;
	background-attachment: fixed;
	z-index: 1;
	color: snow;
}

div.mijloc-fixed:before {
	position: absolute;
	content: '';
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgb(0, 0, 0, 0.5);
}

div.mijloc-fixed .text-interior {
	position: relative;
	z-index: 1;
	padding: 65px 10px;

}

div.blazon div.div-img:last-of-type span img {
	width: 100px;
}

p.telefon {
	color: #ffe600;
	font-size: 20px;
	background: black;
	width: fit-content;
	padding: 10px;
}

p.telefon i {
	color: #28a745;
	font-size: 20px;
}

div.thumbnails {
	height: 100%;
	object-fit: cover;
	background-image: url('../../../public/assets/liebherr-vehicle-cranes.jpg');
	clip-path: polygon(10% 0, 100% 0, 100% 100%, 0% 100%);
	padding: 5% 0 15%;
}

div.thumbnails div.thumbnail {
	margin: 0 3% 1% 10%;
	color: snow;
	background-color: rgba(0,0,0, 0.4);
	padding: 10px 20px;
	position: relative;
	box-sizing: border-box;
	line-height: 2.5;
	overflow: visible;
}

/* div.thumbnail > div {
	color: snow;
	background-color: rgba(0,0,0, 0.4);
	padding: 20px;
	margin: 0 3% 0 10%;
} */

div.thumbnail > span {
	top: 100%;
	left: 0;
	width: 100%;
	position: absolute;
	color: #000;
	background-color: #ffe600;
	margin: 0 0 3%;
	padding: 14px 25px;
	display: none;
	z-index: 100;
	pointer-events: none;
}

/* div.thumbnail > div:hover + span {
	height: 20%;
	padding: 10px 20px;
	visibility: visible;
	transition: height 0.5s;
} */

/* div.thumbnail div.thumbnail-subdiv {
	height: auto;
	transform: scaleY(0);
	box-sizing: border-box;
} */

</style>