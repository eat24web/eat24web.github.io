<script type="text/javascript">
function mobile_detector(){
     var mobile =(/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
     var userAgent = navigator.userAgent.toLowerCase();
     if ((userAgent.search("android") > -1) && !(userAgent.search("mobile") > -1)){
        var option = confirm("It looks like you're hungry with an Android tablet. Tap 'OK' to see our full pretty site, or 'Cancel' for our mobile site.")
        if(!option){
           window.location = "/mobile.html"; 
         }
     }
     else if (mobile) {
         window.location = "/mobile.html"; 
     }
}
mobile_detector();
</script>