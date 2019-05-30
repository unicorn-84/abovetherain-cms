<template>

    <table class="table table-dark border-secondary table-bordered text-center">
        <thead>
        <tr>
            <th></th>
            <th class="p-3 text-truncate" v-for="day in days">{{ day }}</th>
        </tr>
        </thead>
        <tbody>
        <tr v-if="events.length === 0">
            <td class="lead text-center" :colspan="days.length + 1">Тренировки отсутствуют</td>
        </tr>
        <tr v-for="(event, key) in events">
            <th class="align-middle">{{ key }}</th>
            <template v-for="item in event">
                <td class="align-middle border-0 text-left p-4 p-lg-2" v-if="item" :style="{
                            backgroundColor: item.bg_color,
                            color: item.text_color
                            }">
                    <div class="h5 text-truncate mb-1">
                        <a :href="'/services/' + item.service.slug" class="text-reset">{{ item.service.title
                            }}</a>
                    </div>
                    <div class="mb-1">{{ item.start_time }}-{{ item.end_time }}</div>
                    <div class="h6 text-truncate mb-1">
                        <a :href="'/coaches/' + item.coach.slug" class="text-reset">{{ item.coach.title }}</a>
                    </div>
                    <div v-if="item.content" v-html="item.content"></div>
                </td>
                <td class="border-0" v-else></td>
            </template>
        </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        props: [
            'events',
            'days',
            'times',
        ],
        mounted() {
            this.update();
        },
        name: "scheduleComponent",
        methods: {
            update: function () {
                console.log(this.events);
            }
        }
    }
</script>
