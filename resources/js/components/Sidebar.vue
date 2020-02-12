<template>
    <section class="sidebar bg-gray-200 w-full md:w-16 shadow">
        <div class="flex md:flex-col text-gray-600">
            <a href="" class="flex-grow p-4 hover:text-gray-700 flex justify-center hover-effect" :class="active == 'dashboard' ? 'active' : '' " title="Dashboard"><i class="far fa-compass fa-2x"></i></a>
            <a href="" class="flex-grow p-4 hover:text-gray-700 flex justify-center hover-effect" :class="active == 'eval' ? 'active' : '' " title="Evaluations"><i class="fas fa-award fa-2x"></i></a>
            <a href="" class="flex-grow p-4 hover:text-gray-700 flex justify-center hover-effect" :class="active == 'project' ? 'active' : '' " title="Projets"><i class="far fa-window-restore fa-2x"></i></a>
        </div>
    </section>
</template>

<script>
    export default {
        name: "Sidebar",
        props: {
            active: String
        }
    }
</script>

<style scoped>

</style>
