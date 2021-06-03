
const charactersList = document.getElementById('charactersList');
const searchBar = document.getElementById('searchBar');

searchBar.addEventListener('keyup', (e) => {
	if (e.keyCode == 13) {
	loadCars();
	}
});

const displayCars = (car) => {
    const htmlString = `
            <li class="character">
                <h2>${car.vehicle_reg_num}</h2>
                <p>Car Model: ${car.vehicle_model}</p>
				<p>City: ${car.vehicle_city}</p>
				<p>Country: ${car.vehicle_country}</p>
				<p>Is the vehicle clear?: ${car.vehicle_clearance}</p>
            </li>
        `;
    charactersList.innerHTML = htmlString;
};


    const loadCars = async () => {
    try {
		
		
		const searchString = searchBar.value.toLowerCase();
		console.log(searchString);
		let searchJson= "vehicle_reg_num=" + searchString;
        console.log(searchJson);
		const res = await fetch('./displayapi.php',{ 
		method: 'POST',headers: {'Content-Type': 'application/x-www-form-urlencoded'}, body: searchJson});
		let registeredcars = await res.json();
		//console.log(registeredcars);
        if(registeredcars != ""){
		displayCars(registeredcars);
		}
    }catch (err) {
        console.error(err);
    }
};

