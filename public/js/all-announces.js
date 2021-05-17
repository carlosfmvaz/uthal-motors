"use strict";

const renderAnnounces = function (announces){
    
    document.getElementById('all-announces-content').innerHTML = "";

    for (let i = 0; i < announces.length; i++) {
        let htmlElements = document.createElement(`div`);
        htmlElements.className = `announce-item`; 
        htmlElements.innerHTML =  `
            <div class="row announce-body">
                <div class="col-md-4 announce-img-div">
                    <img src="/${announces[i]['image']}" alt="">
                </div>
                <div class="col-md-4 col-sm-12 annonce-overview-features">
                    <p><b>${announces[i]['v_brand'] + ' ' + announces[i]['v_model']}</b></p>
                    <p><i class="fas fa-map-marker-alt"></i> ${announces[i]['city']} </p>
                    <div class="car-options">
                        <p><i class="fas fa-tint"></i> ${announces[i]['v_color']}</p>
                        <p><i class="fas fa-car"></i> SUV </p>
                    </div>
                    <p class="minimal-description">${announces[i]['v_desciption']}</p>
                </div>
                <div class="col-md-4 col-sm-12 annonce-pricing">
                    <div class="row">
                        <!-- <div class="discount-div col-md-12">
                            <span>-35%</span>
                        </div> -->
                        <div class="price-text-div col-md-12">
                            <span>Price</span>
                        </div>
                    </div>
                    <div class="discount-values">
                        <!-- <div class="row">
                            <span class="discount-price">$ 80.800</span>
                        </div> -->
                        <div class="row">
                            <span>${announces[i]['v_price']}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="btn-details-div">
                            <a href="/announces/announce-details/${announces[i]['id']}"
                                class="btn btn-success col-md-16">View Details</a>
                        </div>
                    </div>
                </div>
        </div>`;
        document.getElementById('all-announces-content').appendChild(htmlElements);
    }

}

const filterAnnounces = function(){
    let selectEl = document.getElementById('form-select');
    
    $.ajax({
        url: "filter-announces",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        type: "post",
        data: {
            type: `${selectEl.value}`
        },
        dataType: 'json',
        success: function(response){
            renderAnnounces(response);
        },
        error: function(response){
            console.log(response)
        }
    });

}

window.onload = function(){
    $.ajax({
        url: "filter-announces",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        type: "post",
        data: {
            type: 'All'
        },
        dataType: 'json',
        success: function(response){
            renderAnnounces(response);
        },
    });
}



