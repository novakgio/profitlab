
google.maps.event.addDomListener(window, 'load', init);

function init() {
	var mapOptions = {
		zoom: 14,
		center: new google.maps.LatLng(41.7096082, 44.8005073), // New York
		};

	var mapElement = document.getElementById('map');

	var map = new google.maps.Map(mapElement, mapOptions);

	var marker = new google.maps.Marker({
		title:"მარკეტინგისა და საზოგადოებასთან ურთიერთობის საკონსულტაციო კომპანია",
		position: new google.maps.LatLng(41.7096082, 44.8005073),
		map: map
	});
}
