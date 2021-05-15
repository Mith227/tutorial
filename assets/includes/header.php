<style>
    .web_name {
        color: white;
        font-size: 24px;
        font-weight: 900;
        text-transform: uppercase;
        padding: 5px 0px 0px 5px;
    }

    .menu_bar {
        background: var(--pc);
        position: fixed;
        z-index:100;
    }

    .dateTime {
        text-align: right;
        color:white;
    }
</style>
<script>
    $(document).ready(function() {
        setInterval('updateClock()', 1000);
    });

    function updateClock() {
        var currentTime = new Date();
        var currentHours = currentTime.getHours();
        var currentMinutes = currentTime.getMinutes();
        var currentSeconds = currentTime.getSeconds();

        // Pad the minutes and seconds with leading zeros, if required
        currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
        currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

        // Choose either "AM" or "PM" as appropriate
        var timeOfDay = (currentHours < 12) ? "AM" : "PM";

        // Convert the hours component to 12-hour format if needed
        currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;

        // Convert an hours component of "0" to "12"
        currentHours = (currentHours == 0) ? 12 : currentHours;

        // Compose the string for display
        var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;


        $("#clock").html(currentTimeString);
    }
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 menu_bar">
            <div class="dateTime">
                <span id="clock"></span> <span id="date"> &nbsp;&nbsp; <?php  echo date('d/m/Y'); ?> </span>
            </div>
            <h1 class="web_name"><span style="cursor:pointer" onclick="window.location.href='index.php'">Profist Microfinance</span></h1>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>