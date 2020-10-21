<template>
    <app-layout>
        <template slot="header">
            {{ course.title }}Mis en ligne par{{ course.user.name }}
        </template>
        <div class="py-3">
            <div class="mx-8 bg-white rounded shadow p-4">
                <div class="text-2xl">{{ course.episodes[this.currentKey].title }}</div>
                <iframe class="w-full h-screen" :src="course.episodes[this.currentKey].video_url" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="text-sm text-gray-500">{{ course.episodes[this.currentKey].description }}</div>
                <div class="mt-6">
                    <ul v-for="(episode, index) in this.course.episodes" v-bind:key="episode.id">
                        <li class="mt-3">Episode n°{{ index + 1 }} {{ episode.title }} </li>
                        <button class="text-gray-500 focus:text-indigo-500" @click="switchEpisode(index)">voir l'épisode</button>
                    </ul>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "./../../Layouts/AppLayout"
export default {
    components: {
        AppLayout
    },

    props: ['course'],

    data() {
        return {
            currentKey: 0,
            courseShow: this.course
        }
    },

    methods: {
        switchEpisode(index) {
            this.currentKey = index;

            window.scrollTo({
                top: 0,
                left: 0,
                behavior: 'smooth'
            })
        }
    },
    // mounted(){
    //     console.log(this.course);
    // }
}
</script>

<style lang="stylus">

</style>
