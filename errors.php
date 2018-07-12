<?php
function loginError($errors) {
    if (count($errors) > 0):
        echo '<div class="error">';
        foreach ($errors as $error):
            echo '<p>' . $error . '</p>';
        endforeach;
    echo '</div>';
    endif;
}


function registerError($errors) {
    if (count($errors) > 0):
        echo '<div class="error">';
        foreach ($errors as $error):
            echo '<p>' . $error . '</p>';
        endforeach;
        echo '</div>';
    endif;
}