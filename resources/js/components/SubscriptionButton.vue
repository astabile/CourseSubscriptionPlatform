<template>
    <span class="btn btn-primary d-block font-weight-bold text-uppercase" @click="subscribeCourse(); changeText()" :class="{ 'subscribed' : isSubscribed }" ref="btnToggle">Subscribe</span>
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
        }, 
        changeText() {
            this.$refs.btnToggle.innerText = this.isSubscribed ? 'Unsubscribe' : 'Subscribe';
        }
    }
}
</script>