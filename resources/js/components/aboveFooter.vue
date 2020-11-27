<template>
	<section>
		<slot name="slot1"> </slot> <!-- CSS pentru sloturi se face in component nu in parinte   -->		
	</section>
</template>
<script>
export default {
	data() {
		return {
			//imgsrc: '/assets/liebherr-vehicle-cranes.jpg'
		}
	},
}

</script>
<style scoped>
/* css pentru elemente venite din master.blade */
section {
	padding: 0 15px;
}

h1, h2, h3, h4, h5, h6, li, p, ul { border: 0; margin: 0; padding: 0;}
ol, ul {list-style: none;}

li {display: list-item;}

h4 {
    font-weight: 400;
	font-size: 40px;
	text-align: center;
    line-height: 24px;
	margin: 25px 0;
	position: relative;
}

h4.skewedAnimation::before {
	position: absolute;
	content: '';
	width: 80%;
	height: 200%;
	background-image: linear-gradient(to right,#000, #ffe600);
	pointer-events: none;
	top: -12px;
	left: 0;
	border-right: 5px solid #000;
	transform: skewX(-35deg);
	animation: skewedReveal 4s 1 forwards;
}


p {
    line-height: 18px;
	width: 95vw;
	margin: 0 auto 30px 0;
	line-height: 2;
	text-align: center;
}

.caroufredsel_wrapper {
	display: block; 
	text-align: start; 
	position: relative; 
	top: auto; 
	right: auto; 
    bottom: auto; 
	left: auto; 
	width: 800px; 
	height: 500px; 
	margin: 0px; 
	overflow: hidden
}

.grid_3.carousel-article .caroufredsel_wrapper{
    width: 100% !important;
}

.carousel-article {
    width: 100%;
	overflow: hidden;
    margin-bottom: 50px;
}

.grid_3.carousel-article .carousel-li > li{
    /* width: 220px; */
    margin-right: 0;
}
 
.carousel-pagination {
    text-align: center;
    float: left;
	margin-top: 10px;
	display: block;
}

/* div.carousel-pagination > a {
	background: url('/assets/slider/btn.png') no-repeat;
	display: inline-block;
    width: 19px;
    height: 5px;
    margin: 0 5px 0 0;
} */

.carousel-pagination a.selected {
    background: url('/assets/slider/btn-active.png') no-repeat;
    cursor: default;
}

.carousel-pagination a span {
    display: none;
}

div.first-row {
	padding: 0 20px;
	overflow: hidden;
}

@keyframes skewedReveal {
	20% {
		width: 30px;
		border-right: 5px solid #ffe600;
		background-color: #000;
	}
	25% { width: 30px;
		border-right: unset;
		background-color: transparent;
	}
	30% { width: 30px;
		border-right: 5px solid #000;
		background-color: transparent;
	}
	35% { width: 30px;
		border-right: unset;
		background-color: transparent;
	}
	40% { width: 30px;
		border-right: 5px solid #000;
		background-color: transparent;
	}
	45% { width: 30px;
		border-right: unset;
		background-color: transparent;
	}
	50% { width: 30px;
		border-right: 5px solid #000;
		background-color: transparent;
	}
	55% { width: 30px;
		border-right: unset;
		background-color: transparent;
	}

	60% { width: 30px;
		border-right: 5px solid #000;
		background-color: transparent;
	}

	100% {
		width: 0;
		border-right: unset;
	}
}

@media screen and (max-width: 750px) {
	p {
		width: 80vw;
	}
}

</style>