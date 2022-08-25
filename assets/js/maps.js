var map;
var metro = null;
var minLat = 0, maxLat = 0, minLng = 0, maxLng = 0;

window.onload = function () {
	ymaps.ready(initMap);
	
};

function showMap() {
	if (!map) {
		setTimeout(showMap, 1000);
		return;
	}
	
	if ($('.map-on-skidka').hasClass("hidden")) {
		$('.map-on-skidka').removeClass("hidden");
		
		setTimeout(function(){
			if (minLat > 0 && minLng > 0 && maxLat > 0 && maxLng > 0) {
				if (minLat != maxLat || minLng != maxLng) {
					map.setBounds([
						               /* Координаты юго-западного угла области просмотра карты */
						               [minLat, minLng],
						               /* Координаты северо-восточного угла области просмотра карты */
						               [maxLat, maxLng]
					               ]
					);
				} else {
					showOnMap(minLat + "," + minLng);
				}
			}
		}, 500);
	}
}



function displayMap() {
	if (!map) {
		setTimeout(displayMap, 1000);
		return;
	}
	
	if ($('.map-on-skidka').hasClass("hidden")) {
		$('.map-on-skidka').removeClass("hidden");
		
		setTimeout(function(){
			if (minLat > 0 && minLng > 0 && maxLat > 0 && maxLng > 0) {
				if (minLat != maxLat || minLng != maxLng) {
					map.setBounds([
						               /* Координаты юго-западного угла области просмотра карты */
						               [minLat, minLng],
						               /* Координаты северо-восточного угла области просмотра карты */
						               [maxLat, maxLng]
					               ]
					);
				} else {
					showOnMap(minLat + "," + minLng, false);
				}
			}
		}, 500);
	}
}


function initMap() {
    
	if ($('#YMapsID').length == 0) {
		return;
	}
	
	map = new ymaps.Map('YMapsID', {center: [55.76, 37.64], zoom: 7, behaviors: ["default", "scrollZoom"]});
    
	map.controls.add('mapTools');
	map.controls.add('typeSelector');
	map.controls.add('zoomControl');
	map.controls.add('scaleLine');
    
	showBranchOfficesOnTheMap();
}

function showBranchOfficesOnTheMap() {
	var points = [];
    var bounds = [];
    
    $('.skidka-320>tbody>tr').each(function(){
    	var officeData = $(this);
    	
    	var officeId = 1;
    	var name = officeData.find('.tdaddress').first().html();
    	var description = $(officeData).find('.tdaddress').first().html()+$(officeData).find('.tdaddress').next().html();    	
    	//console.log($(officeData).attr("position"));
    	if ($(officeData).attr("position") && $(officeData).attr("position").length > 4 && $(officeData).attr("position").indexOf("null") < 0) {
        	var point = new pointData(officeId++, $(officeData).attr("position"), name, description);
        	points[points.length] = point;
    	}
        
    });
//	console.log("points",points);
    if($('#tcaddress').length > 0 && $('#tcaddress').attr("position").length > 4){
		var point = new pointData(1, $('#tcaddress').attr("position"), $('#tcaddress').attr("title"), $('#tcaddress').attr("title"));
        points[points.length] = point;
    }
        console.log(points);

 	// Добавляем метки на карту
 	if (points.length > 0) {
 		minLat = points[0].point[0];
	    maxLat = points[0].point[0];
	    minLng = points[0].point[1];
	    maxLng = points[0].point[1];
 		
        for (var i = 0, l = points.length; i < l; i++) {
        	var lat  = points[i].point[0];
	    	var lng  = points[i].point[1];
	    	
	    	if (lat < minLat) {
	    		minLat = lat;
	    	} else if (lat > maxLat) {
	    		maxLat = lat;
	    	}
	    	
	    	if (lng < minLng) {
	    		minLng = lng;
	    	} else if (lng > maxLng) {
	    		maxLng = lng;
	    	}
        	
        	bounds[bounds.length] = points[i].point;
        	
        	// Создаем метку.
	    	var placemark = new ymaps.Placemark(points[i].point, {
	    	    balloonContent: points[i].description,
	    	    iconContent: "P",
	    	    style: "plain#redPoint"
	    	}, {
	    	    // Отключаем кнопку закрытия балуна.
	    	    balloonCloseButton: true,
	    	    // Балун будем открывать и закрывать кликом по иконке метки.
	    	    hideIconOnBalloonOpen: true
	    	});

	    	// Добавляет метку на карту
	    	map.geoObjects.add(placemark);
        }
        
     	// Применяем область показа к карте
        if (points.length == 1) {
	    	map.setCenter([minLat, minLng]);
	    	map.setZoom(10);
	    } else {
	    	map.setBounds([
                     /* Координаты юго-западного угла области просмотра карты */
                     [minLat, minLng],
                     /* Координаты северо-восточного угла области просмотра карты */
                     [maxLat, maxLng]
                 ]
            );
	    }
    } else {
    	$('#YMapsID').hide();
    }
}

function pointFromString (val) {
	var parts = val.split(',');
	return [parseFloat(parts[0]), parseFloat(parts[1])];
}

function showOnMap(coordString, scrollToMap) {
	if ($('.map-on-skidka').hasClass("hidden")) {
		$('.map-on-skidka').removeClass("hidden");
		
		setTimeout(function(){
			var current = pointFromString(coordString);
			map.setCenter(current, 13);
		}, 500);
	} else {
		var current = pointFromString(coordString);
		map.setCenter(current, 13);
	}
	
	scrollToMap = typeof scrollToMap !== 'undefined' ? scrollToMap : false;
	
	if (scrollToMap && !isScrolledIntoView($('.map-on-skidka').first())) {
		showElement($('.map-on-skidka').first());
	}
}


function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
    var elemTop = $(elem).offset().top;
    var elemBottom = $(elem).offset().top + $(elem).height();
    
    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function pointData(id, pointStr, name, description, logo){
	this.id=id
	this.point=pointFromString(pointStr)
	this.name=name
	this.description=description
}

function showElement(elem) {
    var elemBottom = $(elem).offset().top + $(elem).height();
    
    $('html, body').animate({scrollTop: elemBottom - $(window).height()}, 500);
}