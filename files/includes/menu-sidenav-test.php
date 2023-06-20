<?php 
        $json = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/files/includes/nav_ids.json');

        $array = json_decode($json, true);

        $decoded_json = getInfo($id_nav, $array['sidenavs']);

        $title = $decoded_json["title"];
        $links = $decoded_json["location"];
        $names = $decoded_json["name"];
        $sub = $decoded_json["sub"];

        $linkarr = explode(",", $links);
        $namearr = explode(",", $names);
        $subarr = explode(",", $sub);
        $navlinks = array_combine($namearr, $linkarr);

        function getInfo($id, $array) {
            foreach($array as $index=>$json) {
                if($json['id'] == $id) {
                    return $json;
                }
            }
        }

?>

<div id="side-nav" class="navbar navbar-default" style="margin: 0px !important; padding: 0px !important;">
	<div class="container-fluid">
		<div class="row">
			<div class="navbar-header" data-bs-toggle="collapse" data-bs-target="#sideNav" aria-expanded="false" aria-controls="sideNav">
            <a class="navbar-brand d-block d-sm-none" href="#">In This Section</a> </div>
			<div class="collapse show navbar-collapse" id="sideNav">
				<ul class="nav navbar-nav">
                    <?php 
                    foreach($navlinks as $key => $value) {
                    if ($key == $title){
                    echo('<li class="d-flex side-nav-header mb-1"><a href='.$value.'>'.$key.'</a></li>'."\n");
                    }
                    else if (in_array($key, $subarr))
                    {
                    echo('<li class="my-1 sub"><a href='.$value.' style="display:block !important;">'.$key.'</a></li>'."\n");    
                    }
                    else
                    {
                    echo('<li class="my-1"><a href='.$value.' style="display:block !important;">'.$key.'</a></li>'."\n");    
                    }
                    }
                    ?>
				</ul>
			</div>
		</div>
	</div>
</div>

