class Venue {
    constructor(venueId, name, capacity, weekendPrice, weekdayPrice, licensed, latitude, longitude, ratingScore, cateringOptions, bookings,  imageUrl) {
        this.venueId = venueId;
        this.name = name;
        this.capacity = capacity;
        this.weekendPrice = weekendPrice;
        this.weekdayPrice = weekdayPrice;
        this.licensed = licensed;
        this.latitude = latitude;
        this.longitude = longitude;
        this.imageUrl = imageUrl;
        this.ratingScore = ratingScore;
        this.cateringOptions = cateringOptions || [];
        this.bookings = bookings || [];
    }

    generateCardHtml() {

        let alcohol = this.licensed === 1 ? "Yes" : "No";

        let starsHtml = "";
        for (let i = 0; i < 4; i++) {
            starsHtml += '<i class="bi bi-star-fill text-warning"></i>';
        }

        let cateringGradesHtml = "";
        if (this.cateringOptions.length > 0) {
            cateringGradesHtml = "<h5>Catering Grades</h5>";
            this.cateringOptions.forEach(catering => {
                cateringGradesHtml += `<p class="card-text ">Grade: ${catering.grade} - Cost(£ per person): ${catering.cost}</p>`;
            });
        }

        return `
        <div class="container d-flex align-items-center justify-content-center flex-wrap col-lg-4 col-md-6 mb-4">

            <div class="box venue-card card d-flex align-items-stretch shadow p-3 mb-5 bg-white rounded">

                <div class="venue-image">
                    <img class="card-img-top" src="${this.imageUrl}" alt="${this.name}">
                </div>

                <div class="venue-info card-body h-100 info">
                    <h3 class="card-title lucida">${this.name}</h3>
                    
                    
                    <h5>Price</h5>
                    <p class="card-text ">Weekend Price(£ per day): ${this.weekendPrice}</p>
                    <p class="card-text ">Weekday Price(£ per day): ${this.weekdayPrice}</p>

                    <h5>Additional Info</h5>
                    <p class="card-text">Capacity: ${this.capacity}</p>
                    <p class="card-text ">Licensed for Alcohol: ${alcohol}</p>
                    
                    <div class="rating-stars badge bg-light text-dark myStars">${starsHtml} ${this.ratingScore}</div>
                    <br><br>
                    ${cateringGradesHtml}
                    <a href="#map" class="card-link p-3 mb-5">Map</a>
                </div>

            </div>
        </div>
        `;
    }
    
}

