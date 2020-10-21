<template>
    <app-layout>
        <template slot="header">
            Formations
        </template>
        <div class="py-3" v-for="course in this.CourseList" :key="course.id">
            <div class="mx-8 bg-white rounded shadow p-4">
                <div class="text-sm text-gray-500">Mis en ligne par{{ course.user.name }}</div>
                <div class="flex justify-between items-center">
                    <div class="text-4xl">{{ course.title }}</div>
                    <div class="text-sm text-gray-400">{{ course.episodes_count }} épisode</div>
                </div>
                <div class="text-sm text-gray-500">{{ course.description }}</div>
                <a :href="'course/' + course.id" class="bg-indigo-700 text-white px-2 py-1 text-sm inline-block rounded hover:bg-indigo-500">Voir la formation</a>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "./../../Layouts/AppLayout";
export default {
    components: {
        AppLayout
    },

    props: ['courses'],

    data: function() {
        return {
            CourseList: this.courses
        }
    },

    // mounted() {
    //     console.log(this.CourseList);
    // }
}
</script>

<style lang="stylus">

</style>
