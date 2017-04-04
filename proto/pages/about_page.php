<?php 
	include_once('../config/init.php');

	$smarty->assign('style','css/AboutPage.css');
	$smarty->display('../templates/common/header.tpl'); ?>

            <div id="about-body" class="container-fluid">
                <div id="AboutImage" class="col-md-4">
                    <img class="img-responsive" src="../images/About.jpg">
                </div>
                <div id="AboutText" class="col-md-8">
                    <h1> About </h1>
                    <p> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel magna ullamcorper, dictum turpis ut, 
                        auctor sem. Integer nec mattis ante, eu suscipit nisl. Cras ornare mi arcu, sit amet consequat ante 
                        egestas a. Proin blandit tellus quis consequat blandit. Donec tincidunt arcu sit amet nibh rhoncus 
                        dignissim. Aliquam ullamcorper viverra ex, eu varius ante scelerisque quis. Aenean ante nulla, rhoncus 
                        eget efficitur quis, vestibulum ut ex.
                    </p>

                    <p>
                        Curabitur at neque nec eros laoreet finibus in nec tortor. Fusce sit amet interdum enim. Donec sed urna 
                        vitae nibh fermentum posuere nec ut ex. Ut diam urna, bibendum at eros ut, varius tristique velit. Duis 
                        aliquet erat in leo dignissim porttitor. Nulla facilisi. Suspendisse bibendum tempus venenatis. 
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce faucibus, 
                        ipsum sit amet ultrices scelerisque, ipsum nunc ultricies quam, in euismod augue ligula lacinia lectus. 
                        Nulla ut viverra nibh.
                    </p>
                    
                    <p>
                        Quisque varius eu lacus ac scelerisque. Quisque a odio odio. Curabitur elementum nisl at vulputate auctor. 
                        Nulla enim mi, pharetra ut erat sed, pretium sagittis dui. Nam a magna odio. Maecenas sem est, dictum non 
                        dictum eget, convallis non tortor. Suspendisse in enim in diam malesuada fringilla sit amet sit amet risus. 
                        Praesent ipsum sem, congue congue egestas id, egestas id arcu. Mauris a tortor volutpat, tincidunt nisl ac, 
                        semper sapien. In laoreet mauris nec lacus facilisis tincidunt. Donec porta ut libero id consequat. Suspendisse 
                        bibendum euismod odio, et dignissim leo cursus ac. 
                    </p>
                </div>
            </div>

<?php $smarty->display('../templates/common/footer.tpl'); ?>