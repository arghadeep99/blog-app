<template>
     <div class="card-body">
        <div class="card" >
            <div class="card-body">
                <h4 class="card-title"><a href="{{ url }}" class="ancor-no-decoration" >{{ title }}</a></h4>

                <p class="card-text">{{ body }}</p>
                
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: ['blog'],

    data () {
        return {
            url: 'bqhssqs',
            title: 'bqhssqs',
            body: 'bqhssqs'
        }
    }

}
</script>