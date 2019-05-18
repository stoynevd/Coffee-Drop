@extends('layouts/public')

@section('content')
    <div id="coffeedrop">
        <div class="row">
            <div class="col ml-5">
                <h3> Enter your postcode to check the nearest Coffee Drop </h3>
                    <input v-model="postcode" type="text" placeholder="Your postcode">
                    <button @click="checkPostcode()"> Check Your Postcode </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ml-5">
                <h3> Result: </h3>
            </div>
            <div class="col-12 ml-5" v-if="result == ''">
                No results were found.
            </div>
            <div class="col-12 ml-5" v-else>
                Location: @{{ result.location.postcode }} - @{{ result.distance }} miles;
            </div>
        </div>
    </div>
    <script>
    new Vue ({
        el: '#coffeedrop',
        data: () => ({
            postcode: '',
            result: ''
        }),
        mounted () {
        },
        methods: {
            checkPostcode () {
                self = this
                axios.get('/getNearestLocation/' + self.postcode)
                .then(function (response){
                    if(response.data.success) {
                        self.result = response.data.result;
                    }
                    else {
                        new Noty({ type: 'error', text: response.data.message, timeout: 5000, theme: 'metroui' }).show();
                    }
                });
            },
        }
    });
    </script>
@stop
