<template>
    <section class="w-3/4 absolute z-20 p-4 bg-gray-100 h-screen borer-r-2 shadow">
        <div class="flex items-center mb-4" @click="$emit('close')"><i class="far fa-times-circle fa-2x mr-4 hover-effect"></i> Fermer</div>
        <hr>
        <div class="flex flex-col items-start mt-4">

            <template v-if="auth">
                <a href="" class="link transition hover:text-gray-800 duration-700 transform hover:scale-110" :class="active == 'dashboard' ? 'active' : '' " title="Dashboard"><i class="far fa-compass fa-2x fa-fw mr-4"></i> Dashboard</a>
                <a href="" class="link transition hover:text-gray-800 duration-700 transform hover:scale-110" :class="active == 'eval' ? 'active' : '' " title="eval"><i class="fas fa-award fa-2x fa-fw mr-4"></i> Quiz</a>
                <a href="" class="link transition hover:text-gray-800 duration-700 transform hover:scale-110" :class="active == 'project' ? 'active' : '' " title="project"><i class="far fa-window-restore fa-2x fa-fw mr-4"></i> Projets</a>
                <a href="" class="link transition hover:text-gray-800 duration-700 transform hover:scale-110" @click.prevent="submit"><i class="fas fa-sign-out-alt fa-2x mr-4 fa-fw"></i> Se déconnecter</a>
                <form action="/logout" method="post" class="" ref="logout" v-html="csrf">
                </form>
            </template>
            <template v-else>
                <a href="/login" class="link transition hover:text-gray-800 duration-700 transform hover:scale-110"><i class="fas fa-sign-out-alt fa-2x mr-4 fa-fw"></i> Se connecter</a>
                <a href="/register" class="link transition hover:text-gray-800 duration-700 transform hover:scale-110"><i class="fas fa-sign-in-alt fa-2x mr-4 fa-fw"></i> S'inscrire</a>
            </template>
        </div>

    </section>
</template>

<script>
    export default {
        name: "Navbar",
        props: {
            active: String,
            auth: {
                type: Boolean,
            },
            csrf: String
        },
        methods: {
            submit() {
                this.$refs['logout'].submit()
            }
        }
    }
</script>

<style scoped>

</style>
