var RestsMap = new Class({
    
    Implements: [Options,Events],
    
    options: {
        div: '',
        icon: '/static/v4/images/google_maps/map_man.png',
        center: {lat: -25.344, lng: 131.036},
        zoom: 14,
        wheel: false,
        bigIcon:false,
        clickable:true,
        userPoint:true,
        route:true,
        directionPanel: null
    },

    initialize: function(options) {
        this.setOptions(options);
        this.markers = {};
        this.activeMarker=-1;
        this.center = new google.maps.LatLng(this.options.center.lat, this.options.center.lng);
     
        this.map = new google.maps.Map($(this.options.div), {
          zoom: this.options.zoom,
          center: this.center,
          scrollwheel: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        if(this.options.userPoint){
            this.rest = new google.maps.Marker({ position: this.center, icon: this.options.icon, map: this.map, title: 'My Place'});
        }
        
        this.directionsDisplay = new google.maps.DirectionsRenderer();
        this.directionsDisplay.setMap(this.map);
        this.directionsDisplay.suppressMarkers = true;
        if (this.options.directionPanel) this.directionsDisplay.setPanel($(this.options.directionPanel));
        this.directionsService = new google.maps.DirectionsService();
        this.infowindow = new google.maps.InfoWindow();

        //google.maps.event.addListener(this.map, 'click', this.addPoint.bind(this));
        //this.draw();
    },
    addPoint: function(event) {
        this.newPoint(event.latLng)
    },

    newPoint: function(param){  
     var ic;
     if(this.options.bigIcon){
        ic="http://chart.apis.google.com/chart?chst=d_map_spin&chld=.7|0|ffff00|13|b|"+param.i;
     }else{
        ic='http://chart.apis.google.com/chart?chst=d_map_spin&chld=.5|0|ff343e|11|b|' + param.i;
     }  
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(param.lat, param.lng),
        map: this.map,
        icon: ic, 
        title: param.title,
        draggable: false,
        i:param.i
      });
      this.markers[param.id]=marker;
      google.maps.event.addListener(marker, 'click',  this.click.bind(this, [param]));
   
    },
    click: function(param){
        if(!this.option.clickable) return;
        var point = this.markers[param.id].getPosition();
        if(this.options.userPoint && this.options.route){
            var request = {
                origin: this.center, 
                destination: point,
                travelMode: google.maps.DirectionsTravelMode.DRIVING
            };
            var self = this;
            this.directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    self.directionsDisplay.setDirections(response);
                }
            });
        }else{}            
        
        this.map.setCenter(point);            
        
        if(this.activeMarker!=-1){
            oldMarker=this.markers[this.activeMarker];
            oldMarker.setIcon("http://chart.apis.google.com/chart?chst=d_map_spin&chld=.5|0|ff343e|11|b|"+oldMarker.i);
                
        }
        this.activeMarker=param.id;
        marker=this.markers[param.id];
        marker.setIcon("http://chart.apis.google.com/chart?chst=d_map_spin&chld=.7|0|ffff00|13|b|"+marker.i);
                    
        var content = param.content
        if (param.click) {
            content = param.click(param.id);
        }
        if (content){
            this.info(content, point);            
        }
    },
    info: function(content, point){
            this.infowindow.setOptions({
                content: content,
                position: point
            });
            this.infowindow.open(this.map);
    }


});