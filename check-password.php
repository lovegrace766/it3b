<?php

$hash = '$2y$10$lGOSK3DlQ5RD5x3IHsM0jO1cAv1ffkjHPqLz32XQVaxbIatYtePbu';

if (password_verify('123', $hash)) {
    echo "Password 123 is correct!";
} else {
    echo "Password 123 does NOT match the hash.";
}

?>