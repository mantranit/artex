<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/6/2015
 * Time: 12:50 PM
 */
function content_shortcode_button($atts, $content = null)
{
    $attributes = shortcode_atts( array(
        'url' => '#',
        'target' => '_self'
    ), $atts );
    $stringHtml = '';
    $stringHtml .= '<a href="' . $attributes['url'] . '" target="' . $attributes['target'] . '">';
    $stringHtml .= '<span class="button">' . do_shortcode($content) . '</span>';
    $stringHtml .= '</a>';
    return $stringHtml;
}
add_shortcode( 'button', 'content_shortcode_button' );