<?php
    if ($i == 0 OR $prevDate != strtotime($bookedMeetings[$i]->date)) {
    ?>
    <div class="bookedMeetingCard">
        <div class="bookedDate">
            <p><?= calDateToStr($bookedMeetings[$i]->date)?></p>
        </div>
        <div class="meetingSubCard">
                <p><?= $bookedMeetings[$i]->first_name . " " . $bookedMeetings[$i]->last_name?> </p>
                <p>-</p>
                <p class="bookedJob"><?= $bookedMeetings[$i]->title?></p>
                <p>-</p>
                <p><?= substr($bookedMeetings[$i]->time_start, 0, 5)?></p>

            <form action="index.php?action=cancelMeeting" method="POST">
                <input type="hidden" name="reserveID" value="<?=$bookedMeetings[$i]->id?>">
                <button>X</button>
            </form>
            <input type="checkbox" name="cancel" value="<?=$bookedMeetings[$i]->id?>">
        </div>
    <?php
        $prevDate = strtotime($bookedMeetings[$i]->date);
    } else {
        ?>
        <div class="meetingSubCard">
                <p><?= $bookedMeetings[$i]->first_name . " " . $bookedMeetings[$i]->last_name?> </p>
                <p>-</p>
                <p class="bookedJob"><?= $bookedMeetings[$i]->title?></p>
                <p>-</p>
                <p><?= substr($bookedMeetings[$i]->time_start, 0, 5)?></p>
            
            <form action="index.php?action=cancelMeeting" method="POST">
                <input type="hidden" name="reserveID" value="<?=$bookedMeetings[$i]->id?>">
                <button>X</button>
            </form>
            <input type="checkbox" name="cancel" value="<?=$bookedMeetings[$i]->id?>">
        </div>
    <?php
    }
    // if next day if different close the div for this card
    if (!empty($bookedMeetings[$i+1]->date) AND $bookedMeetings[$i+1]->date != $bookedMeetings[$i]->date) {
        ?>
        </div> 
        <?php
    // or if it's the last entry.
    } else if (empty($bookedMeetings[$i+1]->date)) {
        ?>
        </div> 
        <?php
    }
    ?>