<html>
    <head>
        <title>Worldwide Covid-19</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <style>
        .t-li::first-letter {
            color: RED;
            font-size: 55px;
            font-weight: 700;
        }

        th {
            color: #020202;
            font-weight: 700;
            font-size: 18px;
            letter-spacing: 1px;
        }
        
        /*Styling links*/
navbar a{
    font-size: 16px;
    font-weight: 300;
    font-family: "Montserrat", sans-serif;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    -ms-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
    padding: 10px;
    -webkit-border-radius:2px;
    -moz-border-radius:2px;
    border-radius:2px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor:pointer;
    margin: 4px;
}

navbar a:hover, navbar a:active, navbar a{
    text-decoration: none;
    color: rgba(0,0,0,0.6);
}
navbar a:hover{
    background: rgba(0,0,0,0.06);
}
navbar a:active{
    color: rgba(0,0,0,0.9);
    background: rgba(0,0,0,0.1);
}
navbar a{
    color: red;
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    font-size: 14px;
    float: right;
}

/*Shadow*/
navbar .paper-shadow-bottom-z-2 {
    box-shadow: 0 8px 17px 0 rgba(0,0,0,.2);
}

/*Setting Up Navbar Layouts*/
navbar .navbar-inverse{
    color: #000;
    background: #fff;
    border:none;
    min-height: 50px;
    max-height: 50px;
    height: 50px;
}
navbar .container-fluid{
    position: absolute;
    top:0; bottom: 0;
    right:0;
    left:0;
}
navbar .navbar-body{
    display: flex;
    display: -webkit-flex;
    flex-direction: row;
    align-items: center;
    -webkit-align-items: center;
    justify-content: space-between;
    height: 100%;
    position: relative;
}
navbar div.navbar-end{
    align-items: flex-start;
    -webkit-align-items: flex-start;
}
navbar div.navbar-start,
navbar div.navbar-end{
    flex: 1;
    -webkit-flex: 1;
    display: flex;
    display: -webkit-flex;
    flex-direction: row;
    align-items: center;
    -webkit-align-items: center;
    justify-content: space-around;
}
navbar div.navbar-start .logo{
    opacity: 0.6;
    width:30px;
}

/*Integrating Two Navbars Together*/
navbar .nav{
    z-index: 2;
}
navbar .tabs{
    z-index: 1;
    position: relative;
}
navbar .tabs .navbar-body{
    padding: 0;
    margin-bottom: 0;
}

/*Styling Tabs*/
navbar .tabs .navbar-body li.active a{
    color: #333;
}
navbar .tabs .navbar-body li{
    -webkit-transition: all 0.2s cubic-bezier(0.21, 0.61, 0.36, 1);
    -moz-transition: all 0.2s cubic-bezier(0.21, 0.61, 0.36, 1);
    -ms-transition: all 0.2s cubic-bezier(0.21, 0.61, 0.36, 1);
    -o-transition: all 0.2s cubic-bezier(0.21, 0.61, 0.36, 1);
    transition: all 0.2s cubic-bezier(0.21, 0.61, 0.36, 1);
}
navbar .tabs .navbar-body li:hover{
    background: rgba(0,0,0,0.02);
}
navbar .tabs .navbar-body li:active{
    background: rgba(0,0,0,0.05);
}
navbar .tabs .navbar-body li a:hover, .tabs .navbar-body li a:active{
    background: rgba(0,0,0,0);
    color: #5bc0de;
}

/*Styling Tab Highlighter*/
navbar .tab-highlighter{
    height:2px;
    width: 50px;
    margin-top: -2px;
    background: #000;
    position: absolute;
    -webkit-transition: all 0.6s cubic-bezier(0.21, 0.61, 0.36, 1);
    -moz-transition: all 0.6s cubic-bezier(0.21, 0.61, 0.36, 1);
    -ms-transition: all 0.6s cubic-bezier(0.21, 0.61, 0.36, 1);
    -o-transition: all 0.6s cubic-bezier(0.21, 0.61, 0.36, 1);
    transition: all 0.6s cubic-bezier(0.21, 0.61, 0.36, 1);
}

/*Keyframes*/
@keyframes SwiftSlide {
    100%{
        margin-right: 0;
        opacity: 1;
    }
}
@keyframes SwiftSlideToRight {
    100%{
        opacity:0;
        margin-right: -30px;
    }
}
    </style>
    </head>
    <body onload="fetch()";>
        
          <navbar>
  <div class="navbar navbar-fixed-top navbar-inverse tabs paper-shadow-bottom-z-2">
    <div class="container-fluid">
      <ul class="navbar-body list-inline">
        <li ><a href="index.php">Statewise</a></li>
        <li class="active"><a class="active" style="cursor:default">Worldwise</a></li>
        <li><a  href="day.php">Day-Wise</a></li>
                        <li><a  href="chatbot.php">Chatbot</a></li>

      </ul>
      <div class="tab-highlighter" style="bottom:0"></div>
    </div>
  </div>
  <!--2 navbar for pushing 1 above after scrolling (Not Implemented yet.)-->
</navbar>
 <div class="container-fluid">
     <h4 style="text-align: center;padding:20px;font-weight:700" class="t-li">World-Wide COVID-19 </h4>
       
    <div class="table-responsive" style="padding: 10px">
        <table class="table table-bordered table-dark" style="text-align: center" id="tbval" >
            <thead style="text-transform:uppercase;background:#eee;color:#010101;">
                <tr>
                    <th>Country</th>
                    <th>NewConfirmed</th>
                    <th>TotalConfirmed</th>
                    <th>NewDeaths</th>
                    <th>TotalDeaths</th>
                    <th>NewRecovered</th>
                    <th>TotalRecovered</th>
                </tr>
            </thead>
    </table>
   </div>
 </div>
 <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
 <script>
 
 function fetch(){
    $.get("https://api.covid19api.com/summary", 
    
    function (data){
        // console.log(data['Countries'].length);
        
        var tbval = document.getElementById('tbval');
        for(var i=1; i<(data['Countries'].length); i++){
            var x = tbval.insertRow();
            x.insertCell(0);
            
            tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
            tbval.rows[i].cells[0].style.background = '#7a4a91';
            tbval.rows[i].cells[0].style.color = '#fff';
            
            x.insertCell(1);
            tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['NewConfirmed'];
            tbval.rows[i].cells[1].style.background = '#4bb7d8';
            tbval.rows[i].cells[1].style.color = '#fff';
            
             x.insertCell(2);
            tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
            tbval.rows[i].cells[2].style.background = '#f36e23';
            tbval.rows[i].cells[2].style.color = '#fff';
            
             x.insertCell(3);
            tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['NewDeaths'];
            tbval.rows[i].cells[3].style.background = '#4bb7db';
            tbval.rows[i].cells[3].style.color = '#fff';
            
             x.insertCell(4);
            tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['TotalDeaths'];
            tbval.rows[i].cells[4].style.background = '#9cc850';
            tbval.rows[i].cells[4].style.color = '#fff';
            
             x.insertCell(5);
            tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
            tbval.rows[i].cells[5].style.background = '#f36e23';
            tbval.rows[i].cells[5].style.color = '#fff';
            
             x.insertCell(6);
            tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['TotalRecovered'];
            tbval.rows[i].cells[6].style.background = '#9cc850';
            tbval.rows[i].cells[6].style.color = '#fff';
            
        }
        
    })
}
    /*Textbox Events*/
$(document).on('focusin', 'navbar input.search-textbox', function(){
    if($(this).val() <= 0){
        var parent = $(this).closest('div.search');
        parent.addClass('focused');
    }
});
$(document).on('focusout', 'navbar input.search-textbox', function(){
    if($(this).val() <= 0){
        var parent = $(this).closest('div.search');
        parent.removeClass('focused');
    }
});
$(document).on('click', 'navbar .search', function(){
    $(this).children('input.search-textbox').focus();
});

/*Text Key Events for Animating Icons i.e. .ico-btn*/
$(document).on('keyup', 'navbar input.search-textbox', function(){
    var parent = $(this).closest('div.search');
    var phrase = $(this).val(),
        phrase_length = phrase.length;

    if(phrase_length >= 2){
        parent.addClass('multi-char');
        if(!parent.hasClass('not-null')){
            parent.addClass('not-null');
        }

    }
    else if(phrase_length == 1){
        parent.addClass('not-null');
        parent.removeClass('multi-char');
    }
    else if(phrase_length <= 0){
        parent.removeClass('not-null');
        parent.removeClass('multi-char');
    }
});

/*Tab Highlighter Functionality*/
$(document).on('click', 'navbar .tabs ul.navbar-body li a', function(){
    var $this = $(this);
    TabHighlighter.set($this);
    $this.closest('li').siblings('.active').removeClass('active');
    $this.closest('li').addClass('active');
});
var TabHighlighter = {
    set: function($this){
        $('.tab-highlighter').css({
            'left':  $this.closest('li').offset().left,
            'width': $this.closest('li').outerWidth()
        });
    },
    refresh: function(){
        var $this = $('.tabs ul.navbar-body li.active a');
        $('.tab-highlighter').css({
            'left':  $this.closest('li').offset().left,
            'width': $this.closest('li').outerWidth()
        });
    }
};
$(window).resize(function(){
    TabHighlighter.refresh();
});
$(document).ready(function(){
	TabHighlighter.refresh();
});


</script>
 </body>
</html>