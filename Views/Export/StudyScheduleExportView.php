<div class="export_study_schedule_container">
    <div class="study_schedule_container_header">
        <h2>Studienablaufplan exportieren</h2>
    </div>
    <form method="POST">
        <label for="export_studySchedule_course">Studiengang wählen</label>
        <select id="export_studySchedule_course" name="export_studySchedule_course">
            <?php
            if($result->num_rows) {
                foreach($result as $course) {
                ?>
                    <option value="<?php echo $course["ID"];?>"><?php echo $course["name"];?></option>
                <?php
                }
            }
            ?>
        </select>

        <button type="submit" name="export_studySchedule_submit">Exportieren</button>
    </form>
</div>