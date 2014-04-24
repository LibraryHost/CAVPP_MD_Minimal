<?php
    $elementSetMetadata = array(
        'name'        => 'Minimal Descriptive Metadata',
        'description' => "CAVPP custom minimal metadata element set, based on PBCore (a metadata standard for audiovisual media developed by the public broadcasting community. See http://www.pbcore.org/documentation/)",
        'record_type' => 'Item',
    );

    $elements = array(

	//////////// Descriptive / Admin Metadata ///////////
	
		// Institution. Maps to <pbcoreCollection collectionSource>
		array(
            'label' => 'Institution',
            'name'  => 'Institution',
            /* 'description' => 'Name of Institution.', */
			'data_type' => 'Tiny Text',
        ),
		
        // Item title. Maps to <pbcoreTitle titleType="Main">
        array(
            'label' => 'Title',
            'name'  => 'Title',
            /* 'description' => 'Main Title. Use brackets for supplied titles.', */
            'data_type' => 'Tiny Text',
        ),
		
		// Important to CA history. Maps to <pbcoreExtension> -- need detailed mapping
		array(
            'label' => 'Why is this important to California history?',
            'name'  => 'Why is this important to California history?',
            /* 'description' => 'CAVPP: Please provide a cataloging note here.', */
        ),
		
		// Date Created. Maps to <pbcoreAssetDate dateType="created">.
        array(
            'label' => 'Date Created',
            'name'  => 'Date Created',
            /* 'description' => 'The original date that the media item was created. In the case of raw interviews, the date on which the interview was conducted. Format: YYYY-MM-DD', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Extension: Country of Creation. Maps to extension --> 
        array(
            'label' => 'Country of Creation',
            'name'  => 'Country of Creation',
            /* 'description' => 'CAVPP: Please provide cataloging note here.', */
			'data_type' => 'Tiny Text',
        ),
				
		// Creators (dropdown list?)
		// // Director
        array(
            'label' => 'Director',
            'name'  => 'Director',
            /* 'description' => 'Director. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Interviewer
        array(
            'label' => 'Interviewer',
            'name'  => 'Interviewer',
            /* 'description' => 'Interviewer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Performer
        array(
            'label' => 'Performer',
            'name'  => 'Performer',
            /* 'description' => 'Performer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Producer
		        array(
            'label' => 'Producer',
            'name'  => 'Producer',
            /* 'description' => 'Producer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Writer
        array(
            'label' => 'Writer',
            'name'  => 'Writer',
            /* 'description' => 'Writer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		

		// Copyright Statement. Maps to <pbcoreRightsSummary><rightsSummary>.		
        array(
            'label' => 'Copyright Statement',
            'name'  => 'Copyright Statement',
            /* 'description' => 'Information about rights to the media item. Typically, rights information includes a statement about various property rights associated with the resource, including intellectual property rights.', */
        ),
		
	);
