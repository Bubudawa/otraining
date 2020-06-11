<?php

/**
 *  Search Form
 */


function wp_search_form($form) { 

    $form = '
        <section class="search search-form">
            <form role="search" method="get" action="' . home_url( '/' ) . '" >
                <label class="screen-reader-text" for="s">' . __('',  'domain') . '</label>
                <input type="search" class="search-field" value="' . get_search_query() . '" name="s" id="s" placeholder="Rechercher une formation" />
                <div class="submit-button">
                    <button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </form>
        </section>';

    return $form;
}

add_filter( 'get_search_form', 'wp_search_form' );