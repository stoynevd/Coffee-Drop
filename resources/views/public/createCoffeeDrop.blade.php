@extends('layouts/public')

@section('content')
    <div id="coffeedrop">
        <div class="row">
            <div class="col-12 ml-5">
                <h3> Create a new Coffee Drop Location </h3>
            </div>
            <div class="col-2 ml-5">
                <h3>  Postcode </h3>
                <input v-model="dropDetails.postcode" type="text" placeholder="Your postcode">
            </div>
            <div class="col-2 ml-5">
                <h4> Monday </h4>
                <h5> Opening time </h5>
                <input v-model="dropDetails.opening_times.monday" type="text" placeholder="Opening Time">
                <h5> Closing time </h5>
                <input v-model="dropDetails.closing_times.monday" type="text" placeholder="Closing Time">
            </div>
            <div class="col-2 ml-5">
                <h4> Tuesday </h4>
                <h5> Opening time </h5>
                <input v-model="dropDetails.opening_times.tuesday" type="text" placeholder="Opening Time">
                <h5> Closing time </h5>
                <input v-model="dropDetails.closing_times.tuesday" type="text" placeholder="Closing Time">
            </div>
            <div class="col-2 ml-5">
                <h4> Wednesday </h4>
                <h5> Opening time </h5>
                <input v-model="dropDetails.opening_times.wednesday" type="text" placeholder="Opening Time">
                <h5> Closing time </h5>
                <input v-model="dropDetails.closing_times.wednesday" type="text" placeholder="Closing Time">
            </div>
            <div class="col-2 ml-5">
                <h4> Thursday </h4>
                <h5> Opening time </h5>
                <input v-model="dropDetails.opening_times.thursday" type="text" placeholder="Opening Time">
                <h5> Closing time </h5>
                <input v-model="dropDetails.closing_times.thursday" type="text" placeholder="Closing Time">
            </div>
            <div class="col-2 ml-5">
                <h4> Friday </h4>
                <h5> Opening time </h5>
                <input v-model="dropDetails.opening_times.friday" type="text" placeholder="Opening Time">
                <h5> Closing time </h5>
                <input v-model="dropDetails.closing_times.friday" type="text" placeholder="Closing Time">
            </div>
            <div class="col-2 ml-5">
                <h4> Saturday </h4>
                <h5> Opening time </h5>
                <input v-model="dropDetails.opening_times.saturday" type="text" placeholder="Opening Time">
                <h5> Closing time </h5>
                <input v-model="dropDetails.closing_times.saturday" type="text" placeholder="Closing Time">
            </div>
            <div class="col-2 ml-5">
                <h4> Sunday </h4>
                <h5> Opening time </h5>
                <input v-model="dropDetails.opening_times.sunday" type="text" placeholder="Opening Time">
                <h5> Closing time </h5>
                <input v-model="dropDetails.closing_times.sunday" type="text" placeholder="Closing Time">
            </div>
            <div class="col-12 ml-5">
                <button @click="createNewLocation()"> Create a new Coffe Drop location </button>
            </div>
        </div>
    </div>
    <script>
    new Vue ({
        el: '#coffeedrop',
        data: () => ({
            dropDetails: {
                postcode: '',
                opening_times: {
                    monday: '',
                    tuesday: '',
                    wednesday: '',
                    thursday: '',
                    friday: '',
                    saturday: '',
                    sunday: ''
                },
                closing_times: {
                    monday: '',
                    tuesday: '',
                    wednesday: '',
                    thursday: '',
                    friday: '',
                    saturday: '',
                    sunday: ''
                }
            }
        }),
        mounted () {
        },
        methods: {
            createNewLocation(){
                self = this
                axios.post('/createNewLocation', self.dropDetails)
                .then(function (response){
                    if(response.data.success) {
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
