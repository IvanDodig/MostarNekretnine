<template>
	<div class="container">
		<div class="container__cover">&nbsp;</div>
		<transition name="grow" mode="out-in">
			<div class="sidebar__toggle" @click.stop="showSidebar">
				<svg
					aria-hidden="true"
					focusable="false"
					data-prefix="fas"
					data-icon="search"
					class="svg-inline--fa fa-search fa-w-16"
					role="img"
					xmlns="http://www.w3.org/2000/svg"
					viewBox="0 0 512 512"
				>
					<path
						fill="currentColor"
						d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"
					/>
				</svg>
				Filter apartments
			</div>
		</transition>
		<transition name="slide" mode="out-in">
			<div class="sidebar" v-show="visible" :class="{ isVisible: visible }" ref="sidebar">
				<form action="">
					<div class="sidebar__item">
						<label for="price">Cijena</label>
						<input type="number" id="price" name="odcijena" placeholder="od" />
						<input type="number" id="price" name="docijena" placeholder="do"/>
					</div>
					<div class="sidebar__item">
						<label for="location">Lokacija</label>
						<select name="categories" id="categories">
							<option value="Hrvatske Mladeži">Hrvatske Mladeži</option>
							<option value="Vukovarska">Vukovarska</option>
							<option value="Splitska">Splitska</option>
						</select>
					</div>
					<div class="sidebar__item">
						<button type="submit">Traži</button>
					</div>
				</form>
			</div>
		</transition>
	</div>
</template>

<script>
export default {
	data() {
		return {
			visible: false
		};
	},

	methods: {
		showSidebar() {
			this.visible = !this.visible;
			const cont = document.querySelector(".container__cover");
			if (this.visible) {
				cont.style.opacity = 1;
				cont.style.visibility = "visible";
			}
			if (!this.visible) {
				cont.style.opacity = 0;
				cont.style.visibility = "hidden";
			}
		}
	},
	mounted() {
		document.addEventListener("mouseup", e => {
			const sidebar = document.querySelector(".sidebar");
			const toggle = document.querySelector(".sidebar__toggle");
			if (
				e.target != toggle &&
				e.target != sidebar &&
				e.target.parentNode != sidebar &&
				e.target.parentNode.parentNode != sidebar
			) {
				document.querySelector(".container__cover").style.opacity = 0;
				document.querySelector(".container__cover").style.visibility =
					"hidden";
				this.visible = false;
			}
		});
	}
};
</script>

<style lang="scss" scoped>
@import "../../sass/_base.scss";

.container__cover {
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	position: fixed;
	z-index: 10;
	opacity: 0;
	visibility: hidden;
	transition: all 0.3s;
	background-color: rgba(#000, 0.8);
	filter: blur(1);
}
.sidebar {
	background: #353b48;
	transform: translateX(-25rem);
	position: fixed;
	z-index: 15;
	left: 0;
	top: 10vh;
	transition: all 0.3s;
	width: 25rem;
	height: 90vh;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: space-around;
	color: #fff;
	@media only screen and(max-width:37.5em) {
		top: 15vh;
	}
	&__item {
		width: 80%;
		display: flex;
		align-items: center;
		flex-direction: column;
		select {
			width: 100%;
			padding: 0.5rem 1rem;
			outline: none;
			margin-top: 1.5rem;
			font-size: 1.5rem;
			border-radius: 0.5em;
			background-color: #f1f1f1;

			option {
				color: $grey-dark;
			}
		}
		label {
			margin-bottom: 1rem;
		}
		input {
			color: #000;
			width: 100%;
			border: 0;
			padding: 0.8rem 0.5rem;
			margin-bottom: 1rem;
			border-right: none;
			border-top: none;
			border-left: none;
			border-bottom: 2px solid #aaa;
			background-color: #aaa;
			outline: none;
			transition: all 0.2s;
		}
		input:focus {
			border-bottom: 2px solid $color-tertiary;
		}
	}
	&__toggle {
		z-index: 20;
		padding: 1rem 1.5rem;
		position: fixed;
		top: 10vh;
		width: 25rem;
		left: 0;
		display: flex;
		justify-content: space-around;
		align-items: center;
		background: #4c4d4e;
		cursor: pointer;
		color: #fff;
		transition: all 0.3s;

		@media only screen and(max-width:37.5em) {
			top: 15vh;
		}
		svg {
			width: 2.3rem;
			height: 2.3rem;
			margin-right: 2rem;
		}
	}
	&__toggle:hover {
		background-color: #626364;
	}
	&__toggle:active {
		background-color: #b5b8b9;
	}

	&__item:first-child {
		margin-top: 5rem;
	}
	&__item:last-child {
		flex: 0;
		flex-basis: 20%;
	}
}

.isVisible {
	transform: translateX(0);
}
.isVisible ~ .showcase {
	background-color: red;
}
.slide-enter-active,
.slide-leave-active {
	transition: all 0.3s;
	transform: translateX(0);
}
.slide-enter,
.slide-leave-to {
	transform: translateX(-25rem);
}
</style>
