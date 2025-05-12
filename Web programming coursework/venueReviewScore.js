class VenueReviewScore {
    constructor(reviewId, venueId, score) {
        this.reviewId = reviewId;
        this.venueId = venueId;
        this.score = score;
    }

    static calculateAverageScore(scores) {
        const averageScores = {};
        const count = {};

        // Iterate over scores array
        scores.forEach(score => {
            const venueId = score[1]; // venueId is the second item in each score array
            let scoreValue = parseInt(score[2]); // Convert score to integer

            // Check if venueId already exists
            if (!(venueId in averageScores)) {
                averageScores[venueId] = 0;
                count[venueId] = 0;
            }

            // Add score to total and increment count
            averageScores[venueId] += scoreValue;
            count[venueId]++;
        });

        // Calculate average score for each venueId
        for (const venueId in averageScores) {
            averageScores[venueId] = (averageScores[venueId] / count[venueId]).toFixed(1);
        }

        return averageScores;
    }
}