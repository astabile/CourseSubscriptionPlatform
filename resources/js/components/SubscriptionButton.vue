<template>
    <span class="btn btn-primary font-weight-bold text-uppercase" @click="subscribeCourse()" :class="{ 'subscribed' : isSubscribed }">{{ changeText }}</span>
</template>

<script>
export default {
    props: ['courseId', 'subscribed'],
    data: function() {
        return {
            isSubscribed: this.subscribed
        }
    },
    methods: {
        subscribeCourse() {
            // Toggle subscriptions
            axios.post('/courses/' + this.courseId)
                .then(response => {
                    this.isSubscribed = !this.isSubscribed;
                })
                .catch(error => {
                    // Not authorized user or internal server error
                    window.location = '/login';
                    
                });
        }
    },
    computed: {
        changeText: function() {
            return this.isSubscribed ? 'Unsubscribe' : 'Subscribe';
        }
    }
}
</script>