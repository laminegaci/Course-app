<template>
    <app-layout>
        <template slot="header">
            Formations
        </template>
        <div v-for="course in this.CourseList" :key="course.id">
            <div>{{ course.title }}</div>
            <div>{{ course.description }}</div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "./../../Layouts/AppLayout";
export default {
    components: {
        AppLayout
    },
    data: function() {
        return {
            CourseList: this.courses
        }
    },
    props: ['courses'],
    mounted() {
        console.log(this.CourseList);
    }
}
</script>

<style lang="stylus">

</style>
