const areaList = [
    "MP Nagar",
    "Kolar Road",
    "Arera Colony",
    "Shahpura",
    "Bairagarh",
    "Indrapuri",
    "Ashoka Garden",
    "Habibganj",
    "Bawadiya Kalan",
    "Railway Colony"
];

// OPEN POPUP
function openPopup() {
    document.getElementById("locationPopup").classList.remove("hidden");
    document.getElementById("overlay").classList.remove("hidden");
}


// CLOSE POPUP
function closePopup() {
    document.getElementById("locationPopup").classList.add("hidden");
    document.getElementById("overlay").classList.add("hidden");
    clearSuggestions();
}


// DETECT LOCATION
function detectLocation() {
    document.getElementById("locationInput").value = "Bhopal, Madhya Pradesh, India";
    addressSelected();
}


// MANUAL SEARCH → SHOW SUGGESTIONS
document.getElementById("locationInput").addEventListener("input", function () {
    let text = this.value.trim();
    if (text.length < 1) {
        clearSuggestions();
        return;
    }

    let filtered = areaList.filter(a =>
        a.toLowerCase().includes(text.toLowerCase())
    );

    showSuggestions(filtered);
});


// SHOW SUGGESTION LIST
function showSuggestions(list) {
    const box = document.getElementById("suggestionsList");
    box.innerHTML = "";
    box.classList.remove("hidden");

    list.forEach(area => {
        let li = document.createElement("li");
        li.innerText = area;
        li.onclick = () => {
            document.getElementById("locationInput").value = area;
            addressSelected();
            clearSuggestions();
        };
        box.appendChild(li);
    });
}


// CLEAR SUGGESTION LIST
function clearSuggestions() {
    document.getElementById("suggestionsList").innerHTML = "";
    document.getElementById("suggestionsList").classList.add("hidden");
}


// SELECTED ADDRESS SHOW IN BOX
function addressSelected() {
    let val = document.getElementById("locationInput").value;
    if (val.trim() !== "") {
        document.getElementById("selectedAddress").innerText = val;
        document.getElementById("addressBox").classList.remove("hidden");
        document.getElementById("errorMsg").classList.add("hidden");
    }
}


// REMOVE ADDRESS
function clearLocation() {
    document.getElementById("locationInput").value = "";
    document.getElementById("addressBox").classList.add("hidden");
    clearSuggestions();
}


// STEP 1 → STEP 2
function goToStep2() {
    let value = document.getElementById("locationInput").value.trim();

    if (value === "") {
        document.getElementById("errorMsg").classList.remove("hidden");
        return;
    }

    document.getElementById("step1").classList.add("hidden");
    document.getElementById("step2").classList.remove("hidden");
}


// BACK TO STEP 1
function backToStep1() {
    document.getElementById("step2").classList.add("hidden");
    document.getElementById("step1").classList.remove("hidden");
}


// FINAL SUBMIT
function finishSelection() {
    let vehicle = document.querySelector("input[name='vehicle']:checked");

 if (!vehicle) {   
        document.getElementById("vehicleError").classList.remove("hidden");
        return;
    }

    document.getElementById("vehicleError").classList.add("hidden");

    closePopup();
    window.location.href = "<?php echo base_url('services'); ?>";
}

// details popup
document.addEventListener("DOMContentLoaded", function () {

    const detailsData = {
        // ---------------- BASIC WASH ----------------
    basic: {
        title: "Basic Wash (₹700) – Wash & Wax",
        points: [
            "Engine Bay Cleaning",
            "Door Jambs Cleaning",
            "Wheel Cleaning",
            "Floor Mat Cleaning",
            "Tyre Dressing",
            "Interior Air Blowing",
            "Interior Wet Wipe",
            "Windows Cleaning"
        ]
    },

    // ---------------- PRO WASH ----------------
    pro: {
        title: "Pro Wash (₹1200) – Foam Wash",
        points: [
            "Basic Wash",
            "Tar Stain Removal",
            "Bug Stain Removal",
            "Premium Polishing",
            "Interior Dressing",
            "Interior Vacuum Cleaning"
        ]
    },

    // ---------------- CERAMIC WASH ----------------
    ceramic: {
        title: "Ceramic Wash (₹1500) – Ceramic Shampoo",
        points: [
            "Pro Wash",
            "Hybrid Ceramic Coating"
        ]
    },

    // ---------------- DEEP INTERIOR ----------------
    deep: {
        title: "Deep Interior Cleaning (₹1800)",
        points: [
            "Pro Wash",
            "PLVR Cleaning",
            "PLVR Dressing",
            "Windows Cleaning (Interior & Exterior)",
            "Boot Cleaning"
        ]
    },
    };

    // Open Modal
    document.querySelectorAll(".details-popup").forEach(btn => {
        btn.addEventListener("click", function (e) {
            e.preventDefault();

            let type = this.getAttribute("data-details");
            let data = detailsData[type];

            document.getElementById("detailsTitle").innerText = data.title;

            let list = document.getElementById("detailsList");
            list.innerHTML = "";
            data.points.forEach(p => {
                list.innerHTML += `<li>${p}</li>`;
            });

            document.getElementById("detailsModal").style.display = "flex";
        });
    });

    const modal = document.getElementById("detailsModal");

    // Close Button
    document.querySelector(".close-btn").addEventListener("click", function () {
        modal.style.display = "none";
    });

    // Background close
    modal.addEventListener("click", function (e) {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });

});

// why choose us 
const buttons = document.querySelectorAll('.tab-btn-1');
    const tabImage = document.getElementById('tab-image');

    const images = {
        img1: 'assets/images/home-page/carAndBike-img.png',
        img2: 'assets/images/home-page/carAndBike-acce.png',
        img3: 'assets/images/home-page/carAndBike-insurance.png'
    };

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            buttons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');
            // Change image
            const imgKey = button.getAttribute('data-img');
            tabImage.src = images[imgKey];
        });
    });

// search bar
// Select elements
const openBtn = document.getElementById('openSearch');
const closeBtn = document.getElementById('closeSearch');
const popup = document.getElementById('popupSearch');
const overlay = document.getElementById('searchOverlay');

// Open popup
openBtn.addEventListener('click', () => {
    popup.style.display = 'flex';
    overlay.style.display = 'block';
});

// Close popup
closeBtn.addEventListener('click', () => {
    popup.style.display = 'none';
    overlay.style.display = 'none';
});

overlay.addEventListener('click', () => {
    popup.style.display = 'none';
    overlay.style.display = 'none';
});
