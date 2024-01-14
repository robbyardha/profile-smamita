<?php

function truncateString($inputString, $maxLength)
{
    // Check if the length of the string is greater than the maximum allowed length
    if (strlen($inputString) > $maxLength) {
        // Cut the string to the maximum allowed length
        $truncatedString = substr($inputString, 0, $maxLength);

        // Append "..." to the truncated string
        $truncatedString .= '...';

        return $truncatedString;
    }

    // If the string is within the allowed length, return it as is
    return $inputString;
}
