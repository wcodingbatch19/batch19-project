<?php
    $title = "Calendar";
    ob_start();
?>
<link rel="stylesheet" href="./public/css/calendar.css">
<script defer src="./public/js/calendar.js"></script>

<div class="cal-container">
    <div class="cal">
        <div>
            <button class="prev"><-</button>
            <button class="next">-></button>
        </div>
    
        <table class="calendar"></table>
    
        <div>
            <button class="undo">undo all</button>
            <button class="submit">submit</button>
        </div>
    </div>
    <div class="bottom">
        <div id="confirmChoices">
            <h1>Please confirm your selection:</h1>
            <p>TODO: Update dynamically</p>
        </div>
        <div id="confirmedContainer">
        </div>
    </div>
</div>
    <script>
        const entries = <?php echo json_encode($result); ?>;
    </script>

<?php 
$content = ob_get_clean();
require('./view/template.php');
?>