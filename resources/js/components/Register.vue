<template>
    <div class="form">
        <form @submit.prevent="submit" class="form__login">
            <div class="form__login--row">
                <div class="form__login--heading heading-2">Register</div>
            </div>
            <div class="form__login--row">
                <label for="email">Name</label>
            </div>

            <div class="form__login--row">
                <input
                    type="text"
                    id="name"
                    name="name"
                    autocomplete="name"
                    autofocus
                    placeholder="Your name"
                    v-model="fields.name"
                />
                <div v-if="errors && errors.name" class="error">
                    {{ errors.name[0] }}
                </div>
            </div>
            <div class="form__login--row">
                <label for="email">E-mail Address</label>
            </div>

            <div class="form__login--row">
                <input
                    type="email"
                    id="email"
                    name="email"
                    autocomplete="email"
                    autofocus
                    placeholder="name@gmail.com"
                    v-model="fields.email"
                />
                <div v-if="errors && errors.email" class="error">
                    {{ errors.email[0] }}
                </div>
            </div>
            <div class="form__login--row">
                <label for="password">Password</label>
            </div>
            <div class="form__login--row">
                <input
                    id="password"
                    type="password"
                    name="password"
                    autocomplete="new-password"
                    placeholder="********"
                    v-model="fields.password"
                />
                <div v-if="errors && errors.password" class="error">
                    {{ errors.password[0] }}
                </div>
            </div>
            <div class="form__login--row">
                <label for="password-confrim">Confirm password</label>
            </div>
            <div class="form__login--row">
                <input
                    id="password-confirm"
                    type="password"
                    name="password-confirmation"
                    autocomplete="new-password"
                    placeholder="********"
                    v-model="fields.confirmPassword"
                />
                <div v-if="errors && errors.confirmPassword" class="error">
                    {{ errors.confirmPassword[0] }}
                </div>
            </div>
            <div class="form__login--row">
                <button type="submit" class="btn-primary">Register</button>
            </div>
            <div class="form__login--row form__login--bottom">
                <span class="message--1">Dont have an account?</span>
                <span class="message--2"><a href="">Sign up!</a> </span>
            </div>
        </form>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            fields: {},
            errors: {},
            success: false,
            loaded: true
        };
    },
    methods: {
        submit() {
            if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};
                axios
                    .post("/register", this.fields)
                    .then(response => {
                        this.fields = {}; //Clear input fields
                        this.loaded = true;
                        this.success = true;
                    })
                    .catch(error => {
                        this.loaded = true;
                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors || {};
                        }
                    });
            }
        }
    }
};
</script>

<style>
.error {
    color: rgb(224, 43, 43);
    font-size: 1.4rem;
    margin-bottom: 1.5rem;
}
</style>
