<?php

session_start();

// Capture the referring URL
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

// Capture the current URL for UTM tracking
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$query_string = $_SERVER['QUERY_STRING'];

// Initialize or update lead source
if (!isset($_SESSION['lead_source'])) {
    if (isset($_GET['utm_source'])) {
        // Use UTM source if available
        $_SESSION['lead_source'] = ucfirst($_GET['utm_source']);
        $_SESSION['utm_source'] = $_GET['utm_source'] . ' || ' . $current_url;
    } elseif (strpos($referrer, 'facebook.com') !== false || strpos($referrer, 'instagram.com') !== false || strpos($referrer, 'fbclid=') !== false) {
        // Combine Facebook and Instagram as "Social Media"
        $_SESSION['lead_source'] = 'Social Media';
        $_SESSION['utm_source'] = $referrer . ' || ' . $current_url;
    } elseif (strpos($query_string, 'gad_source=') !== false || strpos($query_string, 'gclid=') !== false) {
        $_SESSION['lead_source'] = 'Google Ads';
    } elseif (empty($referrer)) {
        // Direct traffic
        $_SESSION['lead_source'] = 'Direct (Organic)';
        $_SESSION['utm_source'] = 'Direct || ' . $current_url;
    } else {
        // Default to Organic for other cases
        $_SESSION['lead_source'] = 'Organic';
        $_SESSION['utm_source'] = $referrer . ' || ' . $current_url;
    }
}

// Optional: Debugging output to verify session values
error_log('Lead Source: ' . $_SESSION['lead_source']);
error_log('UTM Source: ' . $_SESSION['utm_source']);


?>