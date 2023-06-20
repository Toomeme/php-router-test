<?php

function breadcrumbs( $separator = ' &rsaquo; ', $home = 'Home' ) {

	$path = array_filter( explode( '/', parse_url( $_SERVER[ 'REQUEST_URI' ], PHP_URL_PATH ) ) );

	$base_url = 'https://' . $_SERVER[ 'HTTP_HOST' ] . '/';

	$breadcrumbs = array( "<a href=\"$base_url\">$home</a>" );
	$tmp = array_keys( $path );
	$last = end( $tmp );
	unset( $tmp );

	foreach ( $path as $x => $crumb ) {
		$title = ucwords(str_replace(array('.php', '-'), array('', ' '), $crumb ));
		
		if ( $x == 1 ) {
			
			$title = preg_replace('/\bAccessability\b/', 'AccessAbility', $title);
			$title = preg_replace('/\bCommunity Co Op\b/', 'Community Co-op', $title);
			$title = preg_replace('/\bCovid 19\b/', 'COVID-19', $title);
			$title = preg_replace('/\bCredit By Exam\b/', 'Credit by Exam', $title);
			$title = preg_replace('/\bEnet\b/', 'ENet', $title);
			$title = preg_replace('/\bEop\b/', 'Educational Opportunity Programs (EOP)', $title);
			$title = preg_replace('/\bGuili\b/', 'GUILI', $title);
			$title = preg_replace('/\Heerf\b/', 'HEERF', $title);
			$title = preg_replace('/\bSnap Education\b/', 'SNAP Education', $title);
			$title = preg_replace('/\bTitle Ix\b/', 'Title IX', $title);
			$breadcrumbs[] = "<a href=\"$base_url$crumb\">$title</a>";
			
		} elseif ( $x > 1 && $x < $last ) {
			$title = preg_replace('/\bAccelerated Bsn\b/', 'Accelerated BSN', $title);
			$title = preg_replace('/\bCnc\b/', 'CNC', $title);
			$title = preg_replace('/\bFnp\b/', 'FNP', $title);
			$title = preg_replace('/\bManufacturing Logistics\b/', 'Manufacturing and Logistics', $title);
			$title = preg_replace('/\bMasters Programs\b/', 'Master\'s Programs', $title);
			$title = preg_replace('/\bMedical Billing Coding\b/', 'Medical Billing and Coding', $title);
			$title = preg_replace('/\bMed\b/', 'M.Ed.', $title);
			$title = preg_replace('/\bMove\b/', 'MOVE', $title); 
			$title = preg_replace('/\bMph\b/', 'MPH', $title);
			$title = preg_replace('/\bMsn\b/', 'MSN', $title);
			$title = preg_replace('/\bMsol\b/', 'MSOL', $title);
			$title = preg_replace('/\bPmhnp\b/', 'PMHNP', $title);
			$title = preg_replace('/\bRn To Bsn\b/', 'RN-to-BSN', $title); 
			$title = preg_replace('/\bWise\b/', 'WISE', $title); 
			$tmp = "<a href=\"$base_url";
			for ( $i = 1; $i <= $x; $i++ ) {
				$tmp .= $path[ $i ] . '/';
			}
			$tmp .= "\">$title</a>";
			$breadcrumbs[] = $tmp;
			unset( $tmp );
			
		} else {
			$title = preg_replace('/\bAccelerated Bsn\b/', 'Accelerated BSN', $title);
			$title = preg_replace('/\bAdn\b/', 'ADN', $title);
			$title = preg_replace('/\bAla Ss\b/', 'Applied Liberal Arts and Social Sciences', $title);
			$title = preg_replace('/\bAnd\b/', 'and', $title);
			$title = preg_replace('/\bAprn\b/', 'APRN', $title);
			$title = preg_replace('/\bAs Degree\b/', 'AS Degree', $title);
			$title = preg_replace('/\bAsn\b/', 'ASN', $title);
			$title = preg_replace('/\Ascp\b/', 'ASCP', $title);
			$title = preg_replace('/\bBenefits And Services\b/', 'Benefits and Services', $title);
			$title = preg_replace('/\bBs Degree\b/', 'BS Degree', $title);
			$title = preg_replace('/\bBsn\b/', 'BSN', $title);
			$title = preg_replace('/\bBtam\b/', 'Business, Technology, and Advanced Manufacturing', $title);
			$title = preg_replace('/\bCbe\b/', 'CBE', $title);
			$title = preg_replace('/\bCdca\b/', 'CDCA', $title);
			$title = preg_replace('/\bCertificate 18 Credit\b/', 'Certificate 18-credit', $title);
			$title = preg_replace('/\bCcn\b/', 'College Central Network', $title);
			$title = preg_replace('/\bCnc\b/', 'CNC', $title);
			$title = preg_replace('/\bClt\b/', 'CLT', $title);
			$title = preg_replace('/\bCma\b/', 'CMA', $title);
			$title = preg_replace('/\bCpt\b/', 'CPT', $title);
			$title = preg_replace('/\bEr\b/', 'ER', $title);
			$title = preg_replace('/\bEvents Awards\b/', 'Award Ceremony', $title);
			$title = preg_replace('/\bEvents Regalia\b/', 'Regalia Distribution', $title);
			$title = preg_replace('/\bFafsa\b/', 'FAFSA', $title);
			$title = preg_replace('/\bFaq\b/', 'FAQ', $title);
			$title = preg_replace('/\bFnp\b/', 'FNP', $title);
			$title = preg_replace('/\bGed\b/', 'GED', $title);
			$title = preg_replace('/\Health And Safety\b/', 'Health and Safety', $title);
			$title = preg_replace('/\Hs Students\b/', 'High School Students', $title);
			$title = preg_replace('/\Hvac\b/', 'HVAC', $title);
			$title = preg_replace('/\bId\b/', 'ID', $title);
			$title = preg_replace('/\bIn Ct\b/', '', $title);
			$title = preg_replace('/\Information Faculty Staff\b/', 'Information for Faculty and Staff', $title);
			$title = preg_replace('/\Information Graduates\b/', 'Information for Graduates', $title);
			$title = preg_replace('/\Information Parents Guests\b/', 'Information for Parents and Guests', $title);
			$title = preg_replace('/\Lgbtq\b/', 'LGBTQ+', $title);
			$title = preg_replace('/\bLpn To BSN\b/', 'LPN-to-BSN', $title);
			$title = preg_replace('/\bManufacturing Logistics\b/', 'Manufacturing and Logistics', $title);
			$title = preg_replace('/\bMasters\b/', 'Graduate Students', $title);
			$title = preg_replace('/\bMedical Billing Coding\b/', 'Medical Billing and Coding', $title);
			$title = preg_replace('/\bMed\b/', 'M.Ed.', $title);
			$title = preg_replace('/\bMove\b/', 'MOVE', $title);
			$title = preg_replace('/\bMph\b/', 'MPH', $title);
			$title = preg_replace('/\bMsn\b/', 'MSN', $title);
			$title = preg_replace('/\bMsol\b/', 'MSOL', $title);
			$title = preg_replace('/\bNbcot Cota\b/', 'NBCOT-COTA', $title);
			$title = preg_replace('/\bNbdhe\b/', 'NBDHE', $title);
			$title = preg_replace('/\bNbrc\b/', 'NBRC', $title);
			$title = preg_replace('/\bNclex\b/', 'NCLEX', $title);
			$title = preg_replace('/\bNursing Hprof\b/', 'Nursing and Health Professions', $title);
			$title = preg_replace('/\bOf\b/', 'of', $title);
			$title = preg_replace('/\bOtr\b/', 'OTR', $title);
			$title = preg_replace('/\Policies Guidelines\b/', 'Policies and Guidelines', $title);
			$title = preg_replace('/\Pregnancy Parenting\b/', 'Pregnancy and Parenting', $title);
			$title = preg_replace('/\Prevention Education\b/', 'Prevention and Education', $title);
			$title = preg_replace('/\bPmhnp\b/', 'PMHNP', $title);
			$title = preg_replace('/\bRa\b/', 'RA', $title);
			$title = preg_replace('/\bRma\b/', 'RMA', $title);
			$title = preg_replace('/\bRn\b/', 'RN', $title);
			$title = preg_replace('/\bRn To Bsn\b/', 'RN-to-BSN', $title);
			$title = preg_replace('/\bRsco\b/', 'RSCO', $title);
			$title = preg_replace('/\bSnap\b/', 'SNAP', $title);
			$title = preg_replace('/\bStem\b/', 'STEM', $title);
			$title = preg_replace('/\bTo\b/', 'to', $title);
			$title = preg_replace('/\bTsa\b/', 'TSA', $title);
			$title = preg_replace('/\bUb\b/', 'UB', $title);
			$title = preg_replace('/\bUca\b/', 'UCA', $title);
			$title = preg_replace('/\bUdl\b/', 'UDL', $title);
			$title = preg_replace('/\bView Awards\b/', 'View Your Financial Aid Awards', $title);
			$title = preg_replace('/\bWise\b/', 'WISE', $title); 
			$title = preg_replace('/\bWorkshops And Activities\b/', 'Workshops and Activities', $title);
			$breadcrumbs[] = "$title";
		}
	}

	return implode( $separator, $breadcrumbs );
}

?>
