<template>
    <div class="form">
        <form @submit.prevent="submit" class="form__login">
            <div class="form__login--row">
                <div class="form__login--heading heading-2">Login</div>
            </div>
            <div class="form__login--row">
                <label for="email">E-mail Address</label>
            </div>
            <div class="form__login--row">
                <input
                    type="text"
                    id="email"
                    name="email"
                    autocomplete="email"
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
                    type="text"
                    name="password"
                    autocomplete="current-password"
                    placeholder="********"
                    v-model="fields.password"
                />
                <div v-if="errors && errors.password" class="error">
                    {{ errors.password[0] }}
                </div>
            </div>

            <div class="form__login--row">
                <button type="submit" class="btn btn--primary">Login</button>
            </div>

            <div class="form__login--row form__login--bottom">
                <span class="message--1">Dont have an account?</span>
                <span class="message--2">
                    <a href>Sign up!</a>
                </span>
            </div>
            <div v-if="success" class="success">Message sent!</div>
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
                    .post("/login", this.fields)
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
