<div class="userExperienceInfo">
    <p class="userExperienceCard">Company: <?= $experience->company_name ?></p><br>
    <p>Job Title: <?= $experience->job_title ?></p><br>
    <p>Years of experience: <?= $experience->years_experience ?> year(s)</p><br>
    <button class="editUserExperience" id="editExpButton<?= $experience->id ?>">Edit</button>
</div>

<!-- <p id="experienceUpdateStatus"></p> -->

<dialog class="editExperience" id="experience<?= $experience->id ?>">
    <div>

        <form class="updateExperienceForm"> <!-- Submitted with AJAX (NOT anymore???) -->

            <label for="company">Company Name</label>
            <input type="text" name="companyName" class="companyName" value="<?php if (isset($experience->company_name)) {
                                                                                    echo $experience->company_name;
                                                                                } else {
                                                                                }
                                                                                ?>" /><br /><br />

            <label for="jobTitle">Job Title</label>
            <input type="text" name="jobTitleUpdate" class="jobTitle" value="<?php if (isset($experience->job_title)) {
                                                                                    echo $experience->job_title;
                                                                                } else {
                                                                                }
                                                                                ?>"><br /><br />

            <label for="yearsExperience">Years Experience</label>
            <input type="number" name="yearsExperience" class="yearsExperience" min="1" max="40" value="<?php if (isset($experience->years_experience)) {
                                                                                                            echo $experience->years_experience;
                                                                                                        } else {
                                                                                                        }
                                                                                                        ?>"><br /><br />

            <input class="userIdExperience" type="hidden" name="userId" value="<?= $_SESSION['id']; ?>">
            <!-- saving the job id number into the hidden input in the elements-->
            <input class="idExperience" type="hidden" name="id" value="<?= $experience->id ?>">
            <!-- saving the job id number into the hidden input in the elements-->


            <button type="submit" class="editExpBtn" id="editBtnExperience">
                Update
            </button>

            <button type="button" class="closeEditExpBtn">
                Cancel
            </button>

            <button type="button" class="deleteExpBtn" value="<?= $experience->id ?>">
                Delete
            </button>
        </form>

    </div>
</dialog>