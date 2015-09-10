

<link rel="stylesheet" href="css/map.css"/>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script type="text/javascript" src="js/map.js"></script> 
<script type="text/javascript">
    window.addEvent('domready', function() {
        var mapParam = {'div': 'GoogleMapCanvas', 'center': {'lat': '40.72027', 'lng': '-74.09551'}, wheel: true,route:false,userPoint:false,clickable:false,bigIcon:true};
        var restParam={
                i:1,
                id:19119,
                title:"Pizza Plus",
                lat:"40.72027",
                lng:"-74.09551"
            };
        var map= new RestsMap(mapParam); 
        map.newPoint(restParam);
        map.info("<div class='RestBox Ballon'>"+$('rest_info').get('html')+"</div>",map.markers[restParam.id].getPosition());
    });
</script>