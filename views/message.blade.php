<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
.uflash{
    font-family: Arial, sans-serif;
    position: fixed;
    top: 10%;
    right: 0.5%;
    min-width: 15em;
    min-height: 4em;
    padding: 15px;
    padding-left: 70px;
    margin-bottom: 1.875rem;
}
.uflash__body-notified-danger ,
.uflash__body-notified-dark{
    color: #fff;
}

.uflash-notified{
    color: #3985a3;
    background-color: #cfeffa;
    border-color: #9fc8d9;
    border-radius: 3px;
}
.notified-progress{
    width: 0;
	height: 4px;
	background: rgba(255,255,255,0.3);
	position: absolute;
	bottom: 0px;
	left: 2%;
	border-radius: 3px;
	box-shadow: 
		inset 0 1px 1px rgba(0,0,0,0.05), 
        0 -1px 0 rgba(255,255,255,0.6);

}
.uflash-notified-danger{
    color: #c6efff ;
    background-color: #da5b34;
    border-color: #554745;
    border-radius: 3px;
    
}
.uflash-notified-dark{
    color: #c6efff ;
    background-color: #292625;
    border-color: #554745;
    border-radius: 3px;
}
.notified-icon{
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 45px;
    float: left;
    padding-top: 10px;
    font-size: 1.4rem;
    text-align: center;
    font-weight: 700;
    font-size: 30px;
    border-right: 1px solid;
}

@media only screen and (max-width:1050px) {
    .uflash {
        text-align: center;
        right: 0;
        left: 50%;
        width: 300px;
        margin-left: -150px;
    }
}


</style>

<script>
    function uflash(message, link) {
        var template = $($("#uflash-template").html());
        $(".uflash").remove();
        template.find(".uflash__body").html(message).attr("href", link || "#").end()
         .appendTo("body").hide().fadeIn(300).delay(2800).animate({
            marginRight: "-100%"
        }, 300, "swing", function() {
            $(this).remove();
        });
    }
</script>

@if(Session::has('uflash_notifiied.message'))

<script id="uflash-template" type="text/template">
    <div class="uflash uflash-{{ Session::get('uflash_notifiied.type') }}">
        <div class="notified-icon">
            <i class="fa fa-exclamation" aria-hidden="true"></i>
        </div>
        <a href="#" class="uflash__body uflash__body-{{ Session::get('uflash_notifiied.type') }}" target="_blank"></a>
    </div>
</script>

<script>
    uflash("{{ Session::get('uflash_notifiied.message') }}", "{{ Session::get('uflash_notifiied.link') }}");
</script>
@endif