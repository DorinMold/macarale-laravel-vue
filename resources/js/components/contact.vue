<template>
	<section>
		<h2 class="container mb-5 bg-info text-white p-4 text-center"> Contacteaza-ne </h2>
		<keep-alive>
			<form id="formularContact" class="container" action="/contact" method="POST" @submit="submitForm">
				<input type="hidden" name="_token" :value="csrf">
				<div class="row">
					<div class="px-4 my-3 col-sm-6">
						<input name="nume" type="text" placeholder="Numele d-voastra *" 
							class="form-control" v-model="fields.nume" @blur="validateString">
						<div v-bind:class="{alertmessage:true}">{{ errNume }} </div>
					</div>
					
					<div class="px-4 my-3 col-sm-6">
						<input name="email" type="email" placeholder="Email *" class="form-control" v-model="fields.email">
						<div v-bind:class="{alertmessage:true}">{{ errors.email }} </div>
					</div>
					
				</div>
				<div class="row">
					<div class="px-4 my-3 col-sm-6">
						<input name="firma" type="text" placeholder="Firma" 
							class="form-control" v-model="fields.firma" v-on:focusout="validateString">
						<div v-bind:class="{alertmessage:true}">{{ errors.firma }} </div>
					</div>
					<div class="px-4 my-3 col-sm-6">
						<input name="telefon" type="text" placeholder="Numar de telefon*"
							@focusout="telefonChange" class="form-control" v-model="fields.telefon">
						<div v-bind:class="{alertmessage:true}">{{ errors.telefon }} </div>
					</div>
				</div>
					<textarea name="mesaj" cols="30" rows="10" class="my-3 form-control" 
							v-model="fields.mesaj" @focusout="validateMesaj"></textarea>
					<div v-bind:class="{alertmessage:true}">{{ errors.mesaj }} </div>
				<button type="submit" id="submit-button" class="mt-3 mb-5 btn btn-info"> Trimite </button>
			</form>
		</keep-alive>
		<div class="modal" id="modal-popup" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Modal body text goes here.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save changes</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
		</div>

	</section>
</template>
<script>
export default {
	mounted() {
		this.errors = JSON.parse(this.errs);
		if (this.errors.nume || this.errors.email || this.errors.telefon || this.errors.mesaj ) {
			//document.querySelector('#formularContact').scrollIntoView() ;
			document.querySelector('.splash').style.display = 'none';
			setTimeout( ()=> window.scrollTo(0, document.getElementById('formularContact').offsetTop - 120), 300 );
		} else {
			window.scrollTo(0, 0);
		}
	},
	data() {
		return {
			//imgsrc: '/assets/liebherr-vehicle-cranes.jpg'
			csrf:  document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
			fields: {
				_token: "",
				nume: "",
				email: "",
				firma: "",
				telefon: "",
				mesaj: ""
			},
      		errors: {
				  nume: "",
				  telefon: "",
				  mesaj: ""
			  },
			  i: 0
		}
	},
	props:{'errs' : { type: String },'dataold':{type: Object}},
	created() {
		console.log(this.dataold);
		this.fields.nume = this.dataold.nume ? this.dataold.nume : '';
		this.fields.telefon = this.dataold.telefon;
		this.fields.email = this.dataold.email;
		this.fields.mesaj = this.dataold.mesaj;
	},
	methods: {
		telefonChange (e) {
			if(e.target.value.length < 12) {
				//if (this.fields.telefon.length < 10) 
				// $('#modal-popup').modal('show');
				this.i++;
				let reg = new RegExp('^[0-9]{1,}$');
				if (!reg.test(this.fields.telefon)) {
					this.errors.telefon = 'Numele contine caractere ne-numerice';
				} else {
					let telefon = e.target.value.replace(/[ .]/g, '');
					this.fields.telefon = telefon.substr(0,4) + '.' + telefon.substr(4,3) + '.' + telefon.substr(7,3);
				}
			} 
			if (e.target.value.length < 10 || e.target.value.length > 13) 
			    { 
					this.i++;
					this.errors.telefon = 'Lungime nr telefon incorecta';
					this.fields.telefon = this.fields.telefon.replace(/[.]/g, '');
				} else {
					this.i++;
					this.errors.telefon = "";
				}
		},
		validateString(e) {
			let val = e.target.value;
			//let reg = new RegExp('[\\\0-9*/<>,.+-=()!?|"\' {}]|[\\[\\]]');
			let reg = new RegExp('^[a-zA-Z]{1,}[a-zA-Z ]{1,}$');
			if (!reg.test(val)) {
				switch (e.target.name) {
					case "nume":
						if (e.target.value.length >= 0) {
							this.i++;
							this.errors.nume = 'Numele contine caractere nepotrivite';
						}
						//alert(this.errNume);
						break;
					case "firma":
						if (e.target.value.length > 0) {
							this.i++;
						 	this.errors.firma = 'Numele de firma contine caractere nepotrivite';
						} 
				}
			} else {
				switch (e.target.name) {
					case "nume":
						this.i++;
						this.errors.nume = '';
					case "firma": 
						this.i++;
						this.errors.firma = '';
				}
			}
		},
		validateMesaj(e) {
			if (e.target.value.length < 20) {
				this.errors.mesaj = "Mesajul trebuie sa contina cel putin 20 caractere";
			} else {
				this.errors.mesaj = "";
			}
		},
		submitForm(e) {
			e.preventDefault();
			alert('ddd');
			if ( Object.values(this.errors).some((x) => x!='') ) {
				return false;
			} else {
				document.forms[0].submit();
			}
		}
	},
	computed: {
		errNume() {
			let a = this.i;
			let error = this.errors.nume;
			return error;
		},
		errTelefon() {
			let a = this.i;
			let error = this.errors.telefon;
			return error;
		},
		errFirma() {
			let a = this.i;
			let error = this.errors.firma;
			return error;
		}
	}
}
</script>
<style scoped>
/* css pentru elemente venite din master.blade */
.alertmessage {
	color: red;
}

</style>