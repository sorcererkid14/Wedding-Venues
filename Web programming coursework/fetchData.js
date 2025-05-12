
let venue = [];
let catering = [];
let venueBooking = [];
let venueReviewScores = [];

let venueInfo = [];
let venueBookingInfo = [];
let venueReviewInfo = [];

let weekendPrice = [];
let weekdayPrice = [];
let latitude = [];
let longitude = [];


let dateInfo;
let partySizeInfo;
let cateringGradeInfo;


fetch("fetchData.php")
.then(response => {
    if (!response.ok) {
        throw new Error('Network response was not ok');
    }
    return response.json();
})
.then(responseData => {

    
    // venue_review_score
    for (let i = 0; i < responseData.venue_review_score.length; i++) {

        let venueReviewData = [
            responseData.venue_review_score[i].review_id,
            responseData.venue_review_score[i].venue_id,
            responseData.venue_review_score[i].score
        ];

        venueReviewScores.push(venueReviewData);

        
        let venueReviewInstance = new VenueReviewScore(venueReviewScores[i][0], venueReviewScores[i][1], venueReviewScores[i][2]);
        venueReviewInfo.push(venueReviewInstance);

    }
    
    const averageScores = VenueReviewScore.calculateAverageScore(venueReviewScores);


    // catering
    const cateringOptionsMap = new Map();
    for (let i = 0; i < responseData.catering.length; i++) {

        let cateringData = [
            responseData.catering[i].venue_id,
            responseData.catering[i].grade,
            responseData.catering[i].cost
        ];

        catering.push(cateringData);

        let cateringInstance = new Catering(catering[i][0], catering[i][1], catering[i][2]);
        
        if (!cateringOptionsMap.has(catering[i][0])) {
            cateringOptionsMap.set(catering[i][0], []);
        }


        cateringOptionsMap.get(catering[i][0]).push(cateringInstance);
    }



    // venue_booking
    for (let i = 0; i < responseData.venue_booking.length; i++) {

        let venueBookingData = [
            responseData.venue_booking[i].venue_id,
            responseData.venue_booking[i].booking_date
        ];

        venueBooking.push(venueBookingData);

        let venueBookingIstance = new VenueBooking(venueBooking[i][0], venueBooking[i][1]);
        venueBookingInfo.push(venueBookingIstance);
    }

// Map
// Initialize the map
const map = L.map('map').setView([51.505, -0.09], 6); // Set center and zoom level

// Add a tile layer (optional)
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

    // venue
    for (let i = 0; i < responseData.venue.length; i++) {

        let venueData = [
            responseData.venue[i].venue_id,
            responseData.venue[i].name,
            responseData.venue[i].capacity,
            responseData.venue[i].weekend_price,
            responseData.venue[i].weekday_price,
            responseData.venue[i].licensed,
            responseData.venue[i].latitude,
            responseData.venue[i].longitude
        ];

        weekendPrice.push(responseData.venue[i].weekend_price);
        weekdayPrice.push(responseData.venue[i].weekday_price);
        

        venue.push(venueData);

        const cateringOptions = cateringOptionsMap.get(venue[i][0]) || [];
        let venueInstance = new Venue(venue[i][0], venue[i][1], venue[i][2], venue[i][3], venue[i][4], venue[i][5], venue[i][6], venue[i][7], averageScores[i+1], cateringOptions, venueBookingInfo.filter(booking => booking.venueId === venueData[0]), "wedding"+ i +"H.jpg");
        let venueCardHtml = venueInstance.generateCardHtml();
        document.getElementsByClassName('row')[0].innerHTML += venueCardHtml;
        venueInfo.push(venueInstance);

        L.marker([venueInfo[i].latitude, venueInfo[i].longitude]).addTo(map)
        .bindPopup(`<b>${venueInfo[i].name}</b>`)
        .openPopup();

    }

    // console.log(venueInfo[0].bookings);
    // console.log(dateInfo);

    function takeInfo() {
        let dateDiv = document.getElementById('available');
        let partySizeDiv = document.getElementById('capacity');
        let cateringGradeDiv = document.getElementById('catering');
    
        dateDiv.addEventListener("input", function() {
            const inputValue = this.value.trim();
            dateInfo = toString(inputValue);
            

            for(let i = 0; i < venueInfo.length; i++) {
                for(let j = 0; j < venueInfo[i].bookings.length; j++) {
                    if (dateInfo === venueInfo[i].bookings[j]) {
                        // console.log(venueInfo[i].name);

                    } else {
                        // console.log("none");
                    }
                }
            }

            console.log(inputValue);
        });
    
        partySizeDiv.addEventListener('input', function() {
            const inputValue = this.value.trim();
            partySizeInfo = inputValue;
            console.log("Party size input:", inputValue);
        });
    
        cateringGradeDiv.addEventListener('input', function() {
            const inputValue = this.value.trim();
            cateringGradeInfo = inputValue;
            console.log("Catering grade input:", inputValue);
        });
    
    }
    document.addEventListener("DOMContentLoaded", function() {
        takeInfo();
    });
    
    




    const ctx = document.getElementById('venuePricesChart').getContext('2d');

    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Central Plaza', 'Pacific Towers Hotel', 'Sky Center Complex', 'Sea View Tavern', 'Ashby Castle', 'Fawlty Towers', 'Hilltop Mansion', 'VHaslegrave Hotel', 'Forest Inn', 'Southwestern Estate'],
            datasets: [{
                label: 'Weekday Price',
                data: weekdayPrice,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }, {
                label: 'Weekend Price',
                data: weekendPrice,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

   

})
.catch(error => {
    console.error('Error fetching data:', error);
})

