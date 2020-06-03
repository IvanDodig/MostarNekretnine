<template>
    <nav>
        <ul class="navigation">
            <h1 class="heading-1">User heading</h1>
            <div class="navigation-items">
                <router-link to="/" tag="li" exact>
                    <font-awesome-icon icon="home" class="icon-home" />Home
                </router-link>
                <router-link to="/about" tag="li">
                    <font-awesome-icon icon="user" class="icon-user" />About
                </router-link>
                <router-link to="/skills" tag="li">
                    <font-awesome-icon
                        icon="balance-scale-left"
                        class="icon-skills"
                    />Skills
                </router-link>
            </div>
        </ul>
    </nav>
</template>

<script>
export default {
    name: "Header",
    props: {}
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.navigation {
    align-items: center;
    display: flex;
    background-color: transparent;
    list-style-type: none;
    position: absolute;
    width: 100%;
    justify-content: space-between;
    z-index: 20;
}

li {
    display: inline-block;
    font-size: 2rem;
    font-weight: 300;
    padding: 1rem 2rem;
    align-self: stretch;
    margin: 0 2rem;
    color: $grey-light-1;
    transition: all 0.3s;
    cursor: pointer;
    transition: color 0.2s, background-color 0.2s;
    color: rgba($color: $grey-light-1, $alpha: 0.7);
    .icon-home,
    .icon-skills,
    .icon-user {
        transition: all 0.5s;
    }
    .icon-home {
        font-size: 2rem;
        margin-right: 1rem;
    }
    .icon-user {
        font-size: 2rem;
        margin-right: 1rem;
    }
    .icon-skills {
        font-size: 2rem;
        margin-right: 1rem;
    }
}
li:hover {
    background-color: $color-primary;
}
.router-link-active {
    color: $grey-light-1;
    border-bottom: 1px solid $color-tertiary;
    .icon-home,
    .icon-skills,
    .icon-user {
        color: $color-tertiary;
    }
}
</style>
