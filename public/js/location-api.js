'use strict'

let countryEl = document.querySelector(`#country-select`);
let stateEl = document.querySelector(`#state-select`);
let cityEl = document.querySelector(`#city-select`);

let coordinatesArr = [];

const APIKEY = '007bfe931083d15f797bbdfdbee17275';

const renderCountries = function(){
    $.ajax({
        url: `http://battuta.medunes.net/api/country/all/?key=${APIKEY}`,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        type: "get",
        dataType: 'jsonp',
        success: function(response){
            for (const country of response) {
                $('#country-select').append(new Option(country.name, country.code))
            }
        },
        error: function(response){
            console.log(response);
        }
    });
}

const renderState = function(countryCode){
    $.ajax({
        url: `http://battuta.medunes.net/api/region/${countryCode}/all/?key=${APIKEY}`,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        type: "get",
        dataType: 'jsonp',
        success: function(response){
            for (const state of response) {
                $('#state-select').append(new Option(state.region, state.code))
            }
        },
        error: function(response){
            console.log(response);
        }
    });
}

const renderCity = function(countryCode,stateName){
    $.ajax({
        url: `https://battuta.medunes.net/api/city/${countryCode}/search/?region=${stateName}&key=${APIKEY}`,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        type: "get",
        dataType: 'jsonp',
        success: function(response){
            coordinatesArr = [];
            for (const state of response) {
                $('#city-select').append(new Option(state.city, state.city))   
                coordinatesArr.push({
                    'City' : state.city,
                    'Latitude' : state.latitude,
                    'Longitude' : state.longitude
                })
            }
        },
        error: function(response){
            console.log(countryCode,stateName);
        }
    });
}

const clearSelectField = function(select_id){
    const selectElement = document.getElementById(`${select_id}`);
    
    var i, L = selectElement.options.length - 1;
    for(i = L; i >= 0; i--) {
        selectElement.remove(i);
    }
}

renderCountries();
$("#country-select").change(function(){
    clearSelectField(`state-select`);
    clearSelectField(`city-select`);
    renderState(this.value);
})

$("#state-select").change(function(){
    clearSelectField(`city-select`);
    renderCity(countryEl.value, this.value);
})

$("#city-select").change(function(){
    for (const city of coordinatesArr) {
        if (city['City'] == this.value){
            document.getElementById(`lat-id`).value = city[`Latitude`];
            document.getElementById(`long-id`).value = city[`Longitude`];
        } 
    }

})
