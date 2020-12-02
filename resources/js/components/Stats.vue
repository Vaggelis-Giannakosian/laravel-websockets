<template>
    <div>
        <h1 class="text-3xl text-grey-darkest leading-none">STATS</h1>


        <div class="mt-5">
            <ul>
                <li>
                    <strong>Total Lessons:</strong> {{ lessons }}
                </li>
                <li>
                    <strong>Total Series:</strong> {{ series }}
                </li>
            </ul>
        </div>


    </div>


</template>

<script>
    export default {
        name: "Stats",
        data() {
            return {
                lessons: 0,
                series: 0
            }
        },
        created(){
            axios.get('http://websockets.test/stats').then( ({ data }) => {
                this.lessons = data.lessons
                this.series = data.series
            })
        }

    }
</script>

<style scoped>

</style>
