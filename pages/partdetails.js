
const partsData = {
    1: {
        image: "../images/airfilter.png",
        name: "Air Filter",
        price: "₹500",
        brand: "Performance",
        condition: "Refurbished",
        availability: "In Stock",
        description: "High-quality part designed for optimal performance and durability. Compatible with multiple vehicle models.",
        rating: "★★★★☆ (4.2/5 based on 56 reviews)",
        reviews: [
            { user: "John D.", rating: "★★★★★", text: "Great part, works perfectly in my car. Fast shipping too!", date: "August 10, 2025" },
            { user: "Sarah M.", rating: "★★★★☆", text: "Good quality, but installation was a bit tricky.", date: "August 5, 2025" }
        ],
        relatedParts: ["Clutchplate - ₹2000", "Brake Pads - ₹800", "Oil Filter - ₹600"]
    },
    2: {
        image: "../images/brakepad.png",
        name: "Brake Pads",
        price: "₹800",
        brand: "OEM Parts",
        condition: "New",
        availability: "In Stock",
        description: "High-quality OEM part designed for optimal performance and durability. Compatible with multiple vehicle models.",
        rating: "★★★★☆ (4.2/5 based on 56 reviews)",
        reviews: [
            { user: "Arthur", rating: "★★★★★", text: "Didn't Think this would be true, but great quality", date: "August 9, 2024" },
            { user: "Sarah", rating: "★★☆☆☆", text: "Late Delivery.", date: "August 5, 2025" }
        ],
        relatedParts: ["Air Filter - ₹500", "Clutchplate - ₹2000"]
    },
    3: {
        image: "../images/clutchplate.png",
        name: "Clutchplate",
        price: "₹2000",
        brand: "Performance",
        condition: "Refurbished",
        availability: "In Stock",
        description: "High-quality part designed for optimal performance and durability. Compatible with multiple vehicle models.",
        rating: "★★★★☆ (4.2/5 based on 56 reviews)",
        reviews: [
            { user: "Deigo", rating: "★★★☆☆", text: "Was Not the in the greatest condition but works", date: "August 9, 2024" },
            { user: "Manu Kumar", rating: "★★★★☆", text: "Good quality, but installation was a bit tricky.", date: "August 5, 2025" }
        ],
        relatedParts: ["Brake Pads - ₹800", "Oil Filter - ₹600"]
    },
    4: {
        image: "../images/sparkplug.png",
        name: "Spark Plugs",
        price: "₹400",
        brand: "OEM Parts",
        condition: "New",
        availability: "In Stock",
        description: "High-quality OEM part designed for optimal performance and durability. Compatible with multiple vehicle models.",
        rating: "★★★★☆ (4.0/5 based on 30 reviews)",
        reviews: [
            { user: "Mike T.", rating: "★★★★☆", text: "Easy to install, works great.", date: "July 15, 2025" }
        ],
        relatedParts: ["Air Filter - ₹500", "Brake Pads - ₹800"]
    },
    5: {
        image: "../images/headlight.png",
        name: "Headlight",
        price: "₹2500",
        brand: "Performance",
        condition: "Refurbished",
        availability: "In Stock",
        description: "High-quality part designed for optimal performance and durability. Compatible with multiple vehicle models.",
        rating: "★★★☆☆ (3.8/5 based on 25 reviews)",
        reviews: [
            { user: "Lisa R.", rating: "★★★☆☆", text: "Good brightness, but fitting was tricky.", date: "August 1, 2025" }
        ],
        relatedParts: ["Air Filter - ₹500", "Clutchplate - ₹2000"]
    }
};

// Get part ID from URL query parameter
const urlParams = new URLSearchParams(window.location.search);
const partId = urlParams.get('id');

// Populate page with part data
if (partsData[partId]) {
    const part = partsData[partId];
    document.getElementById('part-image').src = part.image;
    document.getElementById('part-name').textContent = part.name;
    document.getElementById('part-price').textContent = part.price;
    document.getElementById('part-brand').textContent = part.brand;
    document.getElementById('part-condition').textContent = part.condition;
    document.getElementById('part-availability').textContent = part.availability;
    document.getElementById('part-description').textContent = part.description;
    document.getElementById('part-rating').textContent = part.rating;

    // Populate reviews
    const reviewsContainer = document.getElementById('part-reviews');
    reviewsContainer.innerHTML = part.reviews.map(review => `
        <div>
            <p>${review.user} ${review.rating}</p>
            <p>${review.text}</p>
            <p>Posted on ${review.date}</p>
        </div>
    `).join('');

    // Populate related parts
    const relatedPartsContainer = document.getElementById('related-parts');
    relatedPartsContainer.innerHTML = part.relatedParts.map(part => `<li>${part}</li>`).join('');
} else {
    document.getElementById('part-name').textContent = "Part Not Found";
}

// Review submission function
function submit() {
    console.log("function call ayyi :D!")
    const reviewText = document.getElementById("review-text").value.trim();
    if (reviewText=="") {
        alert("Nothing to submit, Review Empty");
    } else {
        alert("Review Submitted Successfully!");
        document.getElementById("review-text").value = "";
    }
}