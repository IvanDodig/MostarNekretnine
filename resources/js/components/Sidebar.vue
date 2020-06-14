<template>
    <div class="container">
        <div class="container__cover">&nbsp;</div>
        <transition name="grow" mode="out-in">
            <div class="sidebar__toggle" @click.stop="showSidebar">
                <i class="fas fa-search"></i>
                Filter apartments
            </div>
        </transition>
        <transition name="slide" mode="out-in">
            <div
                class="sidebar"
                v-show="visible"
                :class="{ isVisible: visible }"
                ref="sidebar"
            >
                <div class="sidebar__item">
                    <label for="price">Cijena</label>
                    <input
                        type="text"
                        id="price"
                        name="price"
                        placeholder="99.99"
                    />
                </div>
                <div class="sidebar__item">
                    <label for="name">Naziv stana</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Naziv stana"
                    />
                </div>
                <div class="sidebar__item">
                    <label for="location">Lokacija</label>
                    <input
                        type="text"
                        name="location"
                        id="location"
                        placeholder="Lokacija"
                    />
                </div>
                <div class="sidebar__item">
                    <select name="categories" id="categories">
                        <option value="Jednosoban">None</option>
                        <option value="Jednosoban">Jednosoban</option>
                        <option value="Jednosoban">Jednosoban</option>
                        <option value="Jednosoban">Jednosoban</option>
                    </select>
                </div>
                <div class="sidebar__item">
                    <a href="#" class="btn">Trazi</a>
                </div>
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
            background-color: #fff;

            option {
                color: #353b48;
            }
        }
        input {
            color: #fff;
            width: 100%;
            border: 0;
            padding: 1rem 0.5rem;
            margin-bottom: 1rem;
            border-right: none;
            border-top: none;
            border-left: none;
            border-bottom: 1px solid #ddd;
            background-color: transparent;
            outline: none;
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
        i {
            font-size: 2.3rem;
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
.btn,
.btn:link,
.btn:visited,
.btn:active {
    background-color: #6abe45;
    color: #fff;
    border: 1px solid #6abe45;
    border-radius: 0.5rem;
    font-size: 1.6rem;
    font-weight: bold;
    text-transform: uppercase;
    padding: 1rem 1.8rem;
    cursor: pointer;
    transition: all 0.2s;
    outline: none;
    text-align: center;
    &:hover {
        background-color: #fff;
        color: #6abe45;
        border: 1px solid #fff;
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
