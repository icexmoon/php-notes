<?php
function never_func(): never
{
    while (true) {
        sleep(1);
    }
}
never_func();
