<style> 
    .uflash {
        border: 1px solid #e7e7e7;
        border-radius: 0;
        background: #fff;
        z-index: 1000
      
    }
    
    .uflash::after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 0;
        -webkit-box-shadow: 0 1.375rem 2.25rem -0.75rem rgba(64, 64, 64, 0.13);
        box-shadow: 0 1.375rem 2.25rem -0.75rem rgba(64, 64, 64, 0.13);
        content: '';
        z-index: -1;
    }
    
    .uflash>.uflash-body {
        position: relative;
        padding: 0 0 0 10px;
        height: 100%;
        min-height: 36px;
        margin: 0 0 0 16px;
    }
    
    .uflash>.uflash-body {
        margin-left: 1rem;
    }
    
    .uflash>.uflash-body>strong {
        padding: 0 8px 0 0;
        margin: 10px 0 -10px;
    }
    
    .uflash>.uflash-body>p,
    .uflash>.uflash-body>strong {
        font-size: 14px;
        line-height: 16px;
        text-align: left;
        float: left;
    }
    
    .uflash>.uflash-body>p {
        padding: 0;
        margin: 10px 0;
    }
    
    .uflash>.uflash-body>.uflash-icon {
        margin-top: -.625rem;
    }
    
    .uflash>.uflash-body>.uflash-icon {
        height: 60%;
        position: absolute;
        left: 0;
        top: 50%;
        display: table;
        font-size: 20px;
        line-height: 20px;
        margin-top: -11px;
    }
    
    [class*=" fa-"],
    [class^=fa-] {
        font-family: feather!important;
        speak: none;
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    
    .uflash>.uflash-body::after {
        content: "";
        display: table;
        clear: both;
    }
    
    .uflash-success {
        border-color: rgba(51, 203, 129, 0.5);
        color: #33cb81;
    }
    a.success{
        color: #33cb81;
    }
    
    .uflash-icon {
        margin-top: -.625rem;
    }
    
    .uflash-danger {
        border-color: rgba(255, 82, 82, 0.5);
        color: #ff5252;
    }
    a.danger{
        color: #ff5252;
    }
    
    *,
    *::before,
    *::after {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    
    .uflash-warning {
        border-color: rgba(252, 140, 58, 0.5);
        color: #fc8c3a;
    }
    a.warning{
        color: #fc8c3a;
    }
    
    .uflash-info {
        border-color: rgba(86, 149, 254, 0.5);
        color: #5695fe;
    }
    
    @media only screen and (min-width: 568px) {
        .uflash {
            margin: 5px 0;
            border-radius: 4px;
            width: auto;
        }
        .uflash {
            display: inline-block;
            clear: both;
            position: relative;
            padding: 8px 50px 9px 0;
            min-height: 54px;
            min-width: 25%;
            max-width: 30%;
            pointer-events: all;
            cursor: default;
            transform: translateX(0);
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            z-index: 1000 ;
        }
    }
    
    @media only screen and (max-width:1050px) {
        .uflash {
            text-align: center;
            right: 0;
            left: 50%;
            width: 300px;
            margin-left: -150px;
            z-index: 1000;
        }
    }
    
    </style> 
    <script> function uflash(message, link) {
        var template=$($("#uflash-template").html());
        $(".uflash").remove();
        template.find(".uflash__body").html(message).attr("href", link || "#").end() .appendTo("body").hide().fadeIn(300).delay(2800).animate( {
            marginRight: "-100%"
        }
        , 300, "swing", function() {
            $(this).remove();
        }
        );
    }
    
    </script> 
    @if(Session::has('uflash_notifiied.message')) 
    <script id="uflash-template" type="text/template"> 
        <div class="uflash uflash-{{ Session::get('uflash_notifiied.type') }}" style="z-index: 1000;position: fixed;top: 10%;right: 0.5%;"> 
            <div class="uflash-body" style="padding-left: 33px;"> 
                <img src="/vendor/uflash/{{ Session::get('uflash_notifiied.type') }}.svg" class="uflash-icon fe-icon-help-circle" alt=""> 
                <p style="padding-left:10px"> 
                    <a href="#" class="uflash__body {{ Session::get('uflash_notifiied.type') }}" target="_blank"></a> 
                </p> 
            </div> 
        </div> 
    </script> 
    <script> 
        uflash("{{ Session::get('uflash_notifiied.message') }}", "{{ Session::get('uflash_notifiied.link') }}");
    </script> 
    @endif