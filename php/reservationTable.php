<?php
 header("Access-Control-Allow-Origin: *");
/*
 * Example PHP implementation used for the index.html example
 */
 
// DataTables PHP library
include( "../lib/DataTables.php" );
 
// Alias Editor classes so they are easy to use
use
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Mjoin,
    DataTables\Editor\Options,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate,
    DataTables\Editor\ValidateOptions;
 
// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'rezervacija' )
    ->fields(
        Field::inst( 'id' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'A first name is required' ) 
            ) ),
        Field::inst( 'ime' )
            ->validator( Validate::notEmpty( ValidateOptions::inst()
                ->message( 'A last name is required' )  
            ) ),
        Field::inst( 'broj_ljudi' ),
        Field::inst( 'datum' ),
        Field::inst( 'napomena' )
    )
    ->process( $_POST )
    ->json();