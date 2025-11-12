<?php

if (!function_exists('widget_public')){
	function widget_public(){
        $slides = \App\Models\Upload::update(['public'=>1]);

       
        return $html = 'done';
	}
}

if (!function_exists('widget_slider')){
	function widget_slider(){

		$slides =  Factory::getHome_sliders();
		$sql = "`status`='Active' AND `deleted_at` IS NULL";
		$order = 'order_no asc';
		$slides = $slides->getHome_slidersList($sql, $order);

        // $slides = \App\Models\Home_Slider::where('status','Active')->orderBy('order_no','asc')->with('image_path')->get();

        $slide_html = '';
        foreach ($slides as $key => $value){
            $img = '<img src="'.SITEURL.'upload/home_sliders/image/'.$value['image'].'" alt="Line O Matic Banner" />';
            $slide_html = $slide_html.'<li class="banner-item">  
                        <div class="banner-content">
                            <div class="wrapper">
                                <div class="bcontent-wrap">'.$value['html'].'</div>
                            </div>
                        </div>
                    </li>';
        }
        return $html = '<div class="banner-section mb-70px">
                <ul class="home-slider slider">'.$slide_html.'</ul>
            </div>';
	}
}

if (!function_exists('widget_machinecategory')){
	function widget_machinecategory(){
		
		$ProductCategory =  Factory::getProduct_categories();
		$sql = "`deleted_at` IS NULL";
		$order = 'sortorder asc';
		$productCategory = $ProductCategory->getProduct_categoriesList($sql, $order);

		$End_Product =  Factory::getEnd_products();
		$sql = "`deleted_at` IS NULL";
		$order = 'sortorder asc';
		$end_Product = $End_Product->getEnd_productsList($sql, $order);

		$Machine_Series =  Factory::getMachine_series();
		$sql = "`deleted_at` IS NULL";
		$order = 'sortorder asc';
		$machine_Series = $Machine_Series->getMachine_seriesList($sql, $order);
      
        $catSet = false;
        $catSetID = 0;
        if(isset($_GET['catID']) and $_GET['catID']!="" )
        {
            $catSet = true;
            $catSetID = $_GET['catID'];
        }

        $ProductCategoryHTMLInner = '';
        foreach ($productCategory as $key => $value) 
        {
            if( $catSet === true && $_GET['catID'] == $value['id'])
            {
				// Changed at 2022 05
				$cat_name = str_replace(' ', '-', $value['name']);
				$cat_slug = strtolower($cat_name);
                $ProductCategoryHTMLInner = $ProductCategoryHTMLInner.'<li><a class="active cat_link" href="'.SITEURL.'machine/'.$cat_slug.'" id="cat_link_'.$value['id'].'" >'. $value['name'] .'</a></li>';
            }
            else
            {
				// Changed at 2022 05
				$cat_name = str_replace(' ', '-', $value['name']);
				$cat_slug = strtolower($cat_name);
                $ProductCategoryHTMLInner = $ProductCategoryHTMLInner.'<li><a class="cat_link" href="'.SITEURL.'machine/'.$cat_slug.'" id="cat_link_'.$value['id'].'" >'. $value['name'] .'</a></li>';
            }
        }
        
        $ProductCategoryHTML = '';
        $ProductCategoryHTML = '<div class="categories-box wow fadeInUp" data-wow-delay="0.4s">
        <div class="categories-heading">
            <h4>Main Categories</h4>
        </div>
        <div class="categories-content">
            <ul>'. $ProductCategoryHTMLInner .'</ul>
            </div>
        </div>
        
        ';
        
        $End_ProductHTMLInner = '';
        foreach ($end_Product as $key => $value) {
            $End_ProductHTMLInner = $End_ProductHTMLInner.'<li>
                    <label class="check-box">'. $value['name'] .' <input type="checkbox" class="end_prd" value="'. $value['id'] .'">
                    <span class="checkmark"></span>
                </label>
            </li>';
        }

        $End_ProductHTML = '<div class="categories-box checkbox-list wow fadeInUp" data-wow-delay="0.5s">
        <div class="categories-heading">
            <h4>End-product</h4>
        </div>
        <div class="categories-content">
            <ul>'. $End_ProductHTMLInner .'</ul>
            </div>
        </div>';
        
        $Machine_SeriesHTMLInner = '';
        foreach ($machine_Series as $key => $value) {
            $Machine_SeriesHTMLInner = $Machine_SeriesHTMLInner.'<li>
                <label class="check-box">'. $value['name'] .' <input type="checkbox"  class="ser_prd" value="'. $value['id'] .'">
                    <span class="checkmark"></span>
                </label>
            </li>';
        }

        $Machine_SeriesHTML = '<div class="categories-box checkbox-list wow fadeInUp" data-wow-delay="0.6s">
		<div class="categories-heading">
			<h4>Machine Series</h4>
		</div>
		<div class="categories-content">
			<ul>'. $Machine_SeriesHTMLInner .'</ul>
            </div>
        </div>';

		$Products =  Factory::getProducts();
		$sql = "`deleted_at` IS NULL";
		$order = 'tmp_sort asc';
		$products = $Products->getProductsList($sql, $order);


        // $products = \App\Models\Product::with(['small_image_path'])->orderBy('tmp_sort','asc')->get();
        //print_r($products->toArray());
        $productsHTMLInner = '';
        foreach ($products as $key => $value) {
            $shtml = '';
			$machineSeries_id = json_decode($value['machineseries']);

			foreach ($machineSeries_id as $values) {

				$machineseries =  Factory::getMachine_series();
				$sql = "`id`=".$values." AND `deleted_at` IS NULL";
				$order = 'sortorder asc';
				$machineseries = $machineseries->getMachine_seriesList($sql, $order);

				$shtml = $shtml . '<li>' . $machineseries[0]['name'] . '</li>';
			}

            if($value['small_image']!=''){
                $img = '<img src="'.SITEURL.'upload/products/small_image/'.$value['small_image'].'" alt="'.$value['image_alt_text'].'">';
            }else{
                $img = '';
            }
            $catIds = '1';
            $endproductIds = '1';
            $machineseriesIds = '1';

            $catIds = str_replace('"','', trim(trim($value['category'],']'),'[') ) ;
            $endproductIds = str_replace('"','', trim(trim($value['endproduct'],']'),'[') ) ;//$value->endproduct;
            $machineseriesIds = str_replace('"','', trim(trim($value['machineseries'],']'),'[') ) ; //$value->machineseries;

			// $category = \App\Models\ProductCategory::where('id', $catIds)->get();

            $hiddenText = '';
            if($catSetID > 0 && $catSetID != $catIds )
            {
                $hiddenText = ' style="display:none" '; 
            }
			
			$ProductCategory =  Factory::getProduct_categories();
			$sql = "`id`=".$catIds." AND `deleted_at` IS NULL";
			$order = 'sortorder asc';
			$ProductCategory = $ProductCategory->getProduct_categoriesList($sql, $order);

			$cat_name = str_replace(' ', '-', $ProductCategory[0]['name']);
			$cat_slug = strtolower($cat_name);
			
            $productsHTMLInner = $productsHTMLInner.'<div class="machine-product-box wow1 fadeInUp1" data-wow-delay="0.4s" data-cat="'.$catIds.'" data-end-prd=",'.$endproductIds.'," data-prd-ser=",'.$machineseriesIds.'," '.$hiddenText.'>
            <div class="machine-product-img">
                <a href="'.SITEURL.'machine/'.$cat_slug.'/'.$value['slug'].'">'. $img .'</a>
            </div>
            <div class="machine-product-text">
                <h3><a href="'.SITEURL.'machine/'.$cat_slug.'/'.$value['slug'].'">'. $value['name'] .'</a></h3>
                <ul>
                   '. $shtml .'
                </ul>

            </div>
        </div>';
        }
        

        $productsHTML = '
        <div class="machine-page-list-right">
			<h1>Product Range</h1>
            <div class="machine-item-list clearfix">
            '. $productsHTMLInner .'</div>
            <!-- <div class="product-list-button wow fadeInUp">
                <a href="#">Show More <i></i></a>
            </div> -->
        </div>';
        return $leftHTML = '<div class="machine-page-list-left">'. $ProductCategoryHTML.$End_ProductHTML.$Machine_SeriesHTML.'</div>'.$productsHTML;
        
	}
}

// if (!function_exists('widget_machine')){
	//     function widget_machine(){
	//         $machines = \App\Models\Machine::with('image_path')->limit(3)->get();
	//         $machine_html = '';
	//         foreach ($machines as $key => $value){
	//             $img = '<img src="'.url('files/'.$value->image_path->hash.'/'.$value->image_path->name).'" alt="" />';
	//             $machine_html = $machine_html.'<div class="hservices-sbox wow fadeInUp">
	//                             <div class="hservices-image">
	//                                 '.$img.'  
	//                             </div>
	//                             <div class="hservices-text">
	//                                 <h4 class="hservices-title">'.$value->title.'</h4>
	//                                 <p>'.$value->small_description.'</p>
	//                                 <a class="default-btn" href="'. $value->url .'" title="">Read More</a>
	//                             </div>
	//                         </div>';

	//         }
	//         return $html = '<div class="hInd-Services mb-70px">
	//                 <div class="wrapper clearfix">
	//                     <h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">Our Machine Range</h2>

	//                     <div class="hservices-slider">'.$machine_html.'</div>
	//                 </div>
	//             </div>';
	//     }
// }

if (!function_exists('widget_machine')){
    function widget_machine(){

        // $machines = \App\Models\Machine::with('image_path')->limit(3)->get();   

		$machines =  Factory::getMachines();
		$sql = "`deleted_at` IS NULL";
		$length = 3;
		$machines = $machines->getMachinesList($sql, '', 0, $length);

        $machine_html = '';
        foreach ($machines as $key => $value){
			// Nathan 02 02 2023
            $img = "<img src='upload/machines/image/'".$value['image']." alt=".$value['title']." />";
            $machine_html = $machine_html.'<div class="hservices-sbox wow fadeInUp">
                            <div class="hservices-image">
                                '.$img.'  
                            </div>
                            <div class="hservices-text">
                                <h4 class="hservices-title">'.$value['title'].'</h4>
                                <p>'.$value['small_description'].'</p>
                                <a class="default-btn" href="'. $value['url'] .'" title="">Read More</a>
                            </div>
                        </div>';

        }
		
        /// return $html = '<div class="hInd-Services mb-70px">
        //         <div class="wrapper clearfix">
        //             <h2 class="section-title wow fadeInUp" data-wow-delay="0.3s">Our Machine Range</h2>

        //             <div class="hservices-slider">'.$machine_html.'</div>
        //         </div>
        //     </div>';
		return '';
    }
}

if (!function_exists('widget_news')){
    function widget_news(){
		$news =  Factory::getLatest_news();
		$sql = "`deleted_at` IS NULL";
		$length = 2;
		$news = $news->getLatest_newsList($sql, '', 0, $length);

        // $news = \App\Models\Latest_News::with('image_path')->limit(3)->get();
        $news_html = '';
        foreach ($news as $key => $value){
			// Nathan 02 02 2023 image is not in sheet
            // $img = '<img src="'.url('files/'.$value->image_path->hash.'/'.$value->image_path->name).'" alt="'.$value->title.'" />';
			$img = '<img src="'.SITEURL.'upload/latest_news/image/'.$value['image'].'" alt="'.$value['title'].'" >';
            $news_html = $news_html.'<div class="hlatestnews-item wow fadeInUp">
                            <div class="hlatestnews-wrap">
                                <div class="hlatestnews-image">
                                    <a href="media" title="">
                                        '.$img.'  
                                    </a>
                                </div>
                                <div class="hlatestnews-content">
                                    <h4 class="hlatestnews-title"><a href="media">'.$value['title'].'</a></h4>
                                    <p>'.$value['description'].'</p>
                                    <a class="default-btn" href="media">Read More</a>
                                </div>
                            </div>
                        </div>';


        }
        return $html = '<div class="hlatestnews-section mb-70px">
                <div class="wrapper clearfix">
                    <div class="latestnews-twrap clearfix wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="section-title is-animated">Latest News</h2>
                        <a class="default-btn is-animated" href="media">More News</a>
                    </div>
                    <div class="hlatestnews-list">'.$news_html.'</div>
                </div>
            </div>';
    }
}

if (!function_exists('widget_testomonial')){
    function widget_testomonial(){

		if(1)
		{
			$testimonials_html = '';

			$testimonials =  Factory::getTestimonials();
			$sql = "`deleted_at` is null";
			$length = 100;
			$testimonials = $testimonials->getTestimonialsList($sql, '', 0, $length);

			// $testimonials = \App\Models\Testimonial::with('image_path')->limit(100)->get();
			$testimonials_html = '';
			foreach ($testimonials as $key => $value)
			{
				// Nathan 03 02 2023
				$img = '<img src="'.SITEURL.'upload/testimonials/image/'.$value['image'].'" alt="'.$value['image_alt_text'].'" />';
				$testimonials_html = $testimonials_html.'<li class="testi-1">
				<div class="testimonial-item text-center">
					
					<div class="client-image1">
					'.$img.' 
					</div>
					<p class="client-msg">'.$value['message'].'</p>
				</div>
				</li>';
			}
			
			return $html = '<div class="testimonials-section mb-70px">
                <div class="wrapper clearfix">
                    <h2 class="section-title text-center wow fadeInUp" data-wow-delay="0.4s">Latest Installtion</h2>
                    <ul class="testimonial-slider slider wow fadeIn" data-wow-delay="0.6s">'.$testimonials_html.'</ul>
                    <!--<div class="testi-btnrow text-center">
                        <a class="default-btn" href="#">Read All Testimonials</a>
                    </div>
                    -->
                </div>
			</div>
			<style>
			.client-image1
			{
				margin: 0 auto;
				border-radius: 50%;
				text-align: center;
				max-width: 800px;
			}
			.client-msg
			{
				margin-top: 20px;
			}
			.testimonial-item::before
			{
				content: "";
				width: 0px;
				height: 0px;
				margin: 0px;

			}
			.testimonials-section 
			{
				padding: 60px 0 60px 0;
			}
			.testimonials-section .section-title
			{
				margin: 0 0 10px 0;
			}
			</style>
			';
		}

		$testimonials =  Factory::getTestimonials();
		$sql = "`deleted_at` is null";
		$length = 5;
		$testimonials = $testimonials->getTestimonialsList($sql, '', 0, $length);

        // $testimonials = \App\Models\Testimonial::with('image_path')->limit(5)->get();
        $testimonials_html = '';
        foreach ($testimonials as $key => $value){
            $img = '<img src="'.SITEURL.'upload/testimonials/image/'.$value['image'].'" alt="'.$value['image_alt_text'].'" />';
            $testimonials_html = $testimonials_html.'<li class="testi-'.($key+1).'">
                            <div class="testimonial-item text-center">
                                <p class="client-msg">'.$value['message'].'</p>
                                <div class="client-image">
                                    '.$img.' 
                                </div>
                                <h3 class="client-name">'.$value['name'].'</h3>
                                <p class="client-msg">'.$value['designation'].'</p>
                            </div>
                        </li>';


        }
        return $html = '<div class="testimonials-section mb-70px">
                <div class="wrapper clearfix">
                    <h2 class="section-title text-center wow fadeInUp" data-wow-delay="0.4s">Testimonials</h2>
                    <ul class="testimonial-slider slider wow fadeIn" data-wow-delay="0.6s">'.$testimonials_html.'</ul>
                    <!--<div class="testi-btnrow text-center">
                        <a class="default-btn" href="#">Read All Testimonials</a>
                    </div>
                    -->
                </div>
            </div>';
    }
}

if (!function_exists('widget_media')){
    function widget_media(){
        if(isset($_GET['page']) && is_integer((integer)$_GET['page'])){
            $current_page = $_GET['page'];
        }else{
            $current_page = 1;
        }
		//$media = \App\Models\Media::with(['image_path','pop_image_path'])->limit(6)->offset(($current_page-1)*6)->get();
		
		$Media =  Factory::getMedia();
		$sql = "`deleted_at` IS NULL";
		$order = 'realdate desc';
		$start = ($current_page-1)*6;
		$length = 6;
		$media = $Media->getMediaList($sql, $order, $start, $length);


		//$media = \App\Models\Media::with(['image_path','pop_image_path'])->orderBy('realdate','desc')->limit(6)->offset(($current_page-1)*6)->get();
		
        $media_html = '';
        foreach ($media as $key => $value){
			// Nathan 02 02 2023
            $img = '<img src="'.SITEURL.'upload/media/image/'.$value['image'].'" alt="'.$value['title'].'" />';
            $popimg = SITEURL.'upload/media/popup_image/'.$value['popup_image'];
            $media_html = $media_html.'<div class="media-item">
            <div class="media-item-wrap">
                <div class="media-iimg">
                    <a class="gallery-popup-img" href="'. $popimg .'">
                        '. $img .'
                    </a>
                </div>
                <div class="media-icontent">
                    <span class="date">'. $value['date'] .'</span>
                    <p class="mediatop-head">'. $value['title'] .'</p>
                    <h3 class="mediaitem-title">'. $value['short_desc'] .' </h3>
                    <p class="media-pubitem">Published By '. $value['publish_buy'].'</p>
                    <a class="gallery-popup-img mread-more" href="'. $popimg .'">Read More</a>
                </div>
            </div>
        </div>';


        }

		$Media =  Factory::getMedia();
		$sql = "`deleted_at` IS NULL";
		$order = 'realdate desc';
		$media_count = $Media->getMediaList($sql, $order);
		$media_count = count($media_count);
		// $media_count = \App\Models\Media::with(['image_path','pop_image_path'])->count();

		GLOBAL $current_url;

        $pages = ceil($media_count/6);
        $url = $current_url;
        // $url = $current_url;

        $paginateHtml = '';
        for($i=1; $i<=$pages ; $i++){
            if($i==$current_page){
                $class =' class="active"';
            }else{
                $class ='';
            }
            $paginateHtml = $paginateHtml.'<a '. $class .' href="'. $url.'?page='.$i.'">'. $i .'</a>';
        }

        return $html = '
        <div class="media-section ptb-80">
            <div class="whoweare-wrap">
                <div class="wrapper clearfix">
                    <h2 class="section-title blue-color">MEDIA & Newsroom</h2>
                    <div class="media-list">'.$media_html.'</div><!-- .media-list -->

                    <div class="pagination">
                        '. $paginateHtml .'
                    </div>
                </div>			
            </div>
        </div>

    </section>';
    }
}

function widget_exhibition()
{
	if(isset($_SESSION['exhibition-success'])){
        $message = '<div style="position: relative;    padding: .75rem 1.25rem;    margin-bottom: 1rem;    border: 1px solid transparent;    border-radius: .25rem;    color: #155724;    background-color: #d4edda;    border-color: #c3e6cb;">'.$_SESSION['exhibition-success'].'</div>';
	}
	else if(isset($_SESSION['exhibition-error'])){
        $message = '<div style="position: relative;    padding: .75rem 1.25rem;    margin-bottom: 1rem;    border: 1px solid transparent;    border-radius: .25rem;    color: #ed3237;    background-color: #e4c8c8;    border-color: #ed3237;">Somthing went wrong, Please try again!</div>'; // '. Notification::display() .'
    }else{
        $message = '';
    }
	if (isset($_SESSION['exhibition-success'])) {
		unset($_SESSION['exhibition-success']);
	}
	if (isset($_SESSION['exhibition-error'])) {
		unset($_SESSION['exhibition-error']);
	}
	$v = '<option value="Virtual.drupa">Virtual.drupa</option>
	<option value="15th PrintPack India">15th PrintPack India</option>';
	
    return '
    <div class="lom_exhi_page_form">'. $message .'
					  <div class="people-and-culture">
						<h2 class="section-title">Pre Registration</h2>
					  </div>
					  <div class="applicant-personal-detail-form">
                        <form id="career" class="applicant-form" method="POST" action="exhibition_action.php">
						   	<div class="form-box">
								<div class="full-col">
						   			<h3>Company Detail</h3>	
						   		</div>	
						   		<div class="form-input-box">
						   		  <div class="half-col">
						   		  	<label>Exhibition:<span class="req">*</span></label>
						   		  	<select name="exhibition" placeholder="" required="true">
										<option value="">Please select exhibition</option>
											'.$v.'
										
										
									</select>
						   		  </div>	
						   		  <div class="half-col">
						   		  	<label>Company Name:<span class="req">*</span></label>									
									  <input type="text" name="company_name" placeholder="" class="" required="true">   
						   		  </div>	
						   		</div>
								<div class="form-input-box">
									<label class="p-lr-10">Full Name:<span class="req">*</span></label>
									<div class="half-col">
										<input type="text" name="first_name" placeholder="First Name" class="" required="true">   
									</div>
									<div class="half-col">
										<input type="text" name="last_name" placeholder="Last Name" class="">     
									</div>
								</div>
								<div class="form-input-box full-col">
									<label>Address:<span class="req">*</span></label>
									<textarea placeholder="" name="address" required="true"></textarea>
								</div>
								<div class="form-input-box">
									<div class="third-col">
										<input type="text" placeholder="City" name="city" class=""> 
									</div>
									<div class="third-col">
										<input type="text" placeholder="State" name="state" class="">    
									</div>
									<div class="third-col">
										<input type="text" placeholder="Zip" name="zip" maxlength="6" class=""> 
									</div>
								</div>
								<div class="form-input-box select-option full-col">
									<label>Country:<span class="req">*</span></label>
									<select name="country" placeholder="" required="true">
										<option value=""></option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antarctica">Antarctica</option>
										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Brazil">Brazil</option>
										<option value="Brunei Darussalam">Brunei Darussalam</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo, Republic of(Brazzaville)">Congo, Republic of(Brazzaville)</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="East Timor">East Timor</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands">Falkland Islands</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Territories">French Southern Territories</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Great Britain">Great Britain</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-Bissau">Guinea-Bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Holy See">Holy See</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Ivory Coast">Ivory Coast</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Kosovo">Kosovo</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Lao">Lao</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macau">Macau</option>
										<option value="Macedonia, Rep. of">Macedonia, Rep. of</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia, Federal States of">Micronesia, Federal States of</option>
										<option value="Moldova, Republic of">Moldova, Republic of</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montenegro">Montenegro</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar, Burma">Myanmar, Burma</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="Netherlands Antilles">Netherlands Antilles</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="North Korea">North Korea</option>
										<option value="Northern Mariana Islands">Northern Mariana Islands</option>
										<option value="Norway">Norway</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Palestinian territories">Palestinian territories</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Philippines">Philippines</option>
										<option value="Pitcairn Island">Pitcairn Island</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Reunion Island">Reunion Island</option>
										<option value="Romania">Romania</option>
										<option value="Russian Federation">Russian Federation</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
										<option value="Saint Lucia">Saint Lucia</option>
										<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome and Principe">Sao Tome and Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia">Serbia</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="South Korea">South Korea</option>
										<option value="South Sudan">South Sudan</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syria, Syrian Arab Republic">Syria, Syrian Arab Republic</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Tibet">Tibet</option>
										<option value="Timor-Leste">Timor-Leste</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Virgin Islands (British)">Virgin Islands (British)</option>
										<option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
										<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
								</div>
								<div class="form-input-box full-col">
									<label>Phone Number:</label>
									<input type="text" name="code" placeholder="Code" class="form-cm code" maxlength="3">
									<input type="tel" name="phone" placeholder="Phone" class="form-cm phone-full" maxlength="10">
								</div>
								<div class="form-input-box full-col">
									<label>Mobile Number:<span class="req">*</span></label>
									<input type="text" name="mobile" required="true">
								</div>	
								<div class="form-input-box full-col">
									<label>Email:<span class="req">*</span></label>
									<input type="email" name="email" required="true">
								</div>
								<div class="form-input-box full-col">
									<label>Date:<span class="req">*</span></label>
									<input type="date" name="date" placeholder="Date" required="true">
								</div>
								<div class="full-col">
									<h3>Interest In Products</h3>	
								</div>
								<div class="form-input-box full-col checkbox-inpt">
								<label>Exercise Book Machine</label>
								<div class="half-col">
								  <label class="check-box"><input type="checkbox" name="interested_products[]" value="Fully Automatic Exercise Book machine">Fully Automatic Exercise Book machine<span class="checkmark"></span></label>
								</div>
								<div class="half-col">
								  <label class="check-box"><input type="checkbox" name="interested_products[]" value="Automatic Exercise Book machine">Automatic Exercise Book machine<span class="checkmark"></span></label>
								</div>
								<div class="half-col">
								  <label class="check-box"><input type="checkbox" name="interested_products[]" value="Automatic Exercise Book machine from Reel to Pile Delivery station">Automatic Exercise Book machine from Reel to Pile Delivery station<span class="checkmark"></span></label>
								</div>
								<div class="half-col">
									<label class="check-box"><input type="checkbox" name="interested_products[]" value="Automatic Book Production Line for Central Sewn Books">Automatic Book Production Line for Central Sewn Books<span class="checkmark"></span></label>
								</div>
								<div class="half-col">
									<label class="check-box"><input type="checkbox" name="interested_products[]" value="Automatic Filler Paper Machine">Automatic Filler Paper Machine<span class="checkmark"></span></label>
								</div>
							</div>
							<div class="form-input-box full-col checkbox-inpt">
								<label>Exercise Book Binding Machine</label>
								<div class="half-col">
								  <label class="check-box"><input type="checkbox" name="interested_products[]" value="Automatic Exercise Book Binding Machine">Automatic Exercise Book Binding machine<span class="checkmark"></span></label>
								</div>
								<div class="half-col">
									<label class="check-box"><input type="checkbox" name="interested_products[]" value="Exercise Book Binding machine">Exercise Book Binding machine<span class="checkmark"></span></label>
								</div>
								<div class="half-col">
								  <label class="check-box"><input type="checkbox" name="interested_products[]" value="Automatic Book Binding Line for Central Sewn Books">Automatic Book Binding Line for Central Sewn Books<span class="checkmark"></span></label>
								</div>
								<div class="half-col">
										<label class="check-box"><input type="checkbox" name="interested_products[]" value="Automatic Binding Machine for Single/ Double Ring Books">Automatic Binding Machine for Single/ Double Ring Books<span class="checkmark"></span></label>
								</div>
																	
							</div>
							<div class="form-input-box full-col checkbox-inpt">
								<label>Automatic Reel to Sheet Ruling / Flexo Printing Machine</label>
								<div class="half-col">
								  <label class="check-box"><input type="checkbox" name="interested_products[]" value="Automatic Reel to Sheet Ruling/Flexo Printing Machine">Automatic Reel to Sheet Ruling/Flexo Printing Machine<span class="checkmark"></span></label>
								</div>
							</div>
							<div class="form-input-box full-col checkbox-inpt">
								<label>Sheeter Machine</label>
								<div class="half-col">
								  <label class="check-box"><input type="checkbox" name="interested_products[]" value="Cut Size Sheeter">Cut Size Sheeter<span class="checkmark"></span></label>
								</div>
								<div class="half-col">
									<label class="check-box"><input type="checkbox" name="interested_products[]" value="Paper Sheeter">Paper Sheeter<span class="checkmark"></span></label>
								</div>
								<div class="half-col">
									<label class="check-box"><input type="checkbox" name="interested_products[]" value="Folio Size Sheeter">Folio Size Sheeter<span class="checkmark"></span></label>
								</div>                                    
							</div>
							<div class="form-input-box full-col checkbox-inpt">
								<label>Ream Wrapping Machine</label>
								<div class="half-col">
								  <label class="check-box"><input type="checkbox" name="interested_products[]" value="Cut Size Ream Wrapping Machine">Cut Size Ream Wrapping Machine<span class="checkmark"></span></label>
								</div>
								<div class="half-col">
								  <label class="check-box"><input type="checkbox" name="interested_products[]" value="Folio Size Ream Wrapping Machine">Folio Size Ream Wrapping Machine<span class="checkmark"></span></label>
								</div>
							</div>
							
							<div class="form-input-box full-col checkbox-inpt">
								<label>Packaging Machine</label>
								<div class="half-col">
								  <label class="check-box"><input type="checkbox" name="interested_products[]" value="Shrink Wrapping Machine">Shrink Wrapping Machine<span class="checkmark"></span></label>
								</div>
							</div>
							<div class="form-input-box full-col checkbox-inpt">
								<label>Other Attachments</label>
								<div class="half-col">
								  <label class="check-box"><input type="checkbox" name="interested_products[]" value="Auto Splicer">Auto Splicer<span class="checkmark"></span></label>
								</div>
								<div class="half-col">
								  <label class="check-box"><input type="checkbox" name="interested_products[]" value="Reel Form Inserter">Reel Form Inserter<span class="checkmark"></span></label>
								</div>
							</div>
								<div class="full-col">
									<h3>Remarks or Messages</h3>	
								</div>
								<div class="form-input-box full-col">
									<label>Your Message:</label>
									<textarea placeholder="Your Message..." name="message"></textarea>
								</div>
								<div class="g-recaptcha" data-sitekey="6LdMgfoUAAAAAPKEFiJnsgi_GK8WfrRXpm0I-CkK"></div>
								<div class="form-submt-btn full-col">
									<input type="submit" name="submit" value="Submit">
								</div>
							</div>
						</form>
					  </div>
					</div>
    ';
}
function widget_contactform(){
    if(isset($_SESSION['contact-success'])){
        $message = '<div style="position: relative;    padding: .75rem 1.25rem;    margin-bottom: 1rem;    border: 1px solid transparent;    border-radius: .25rem;    color: #155724;    background-color: #d4edda;    border-color: #c3e6cb;">'.$_SESSION['contact-success'].'</div>';
		unset($_SESSION['contact-success']);
	}
	else if(isset($_SESSION['contactUs-error'])){
        $message = '<div style="position: relative;    padding: .75rem 1.25rem;    margin-bottom: 1rem;    border: 1px solid transparent;    border-radius: .25rem;    color: #ed3237;    background-color: #e4c8c8;    border-color: #ed3237;">Somthing went wrong, Please try again!</div>'; // '. Notification::display() .'
		unset($_SESSION['contactUs-error']);
    }else{
		$message = '';
	}

    return '<div class="contact-left">'. $message .'
    <div class="form-header">
    <h4 class="form-title">Connect With Us</h4>
    </div>
    
    <div class="contactleft-wrap">
    <form class="contact-form" id="contact-form" method="POST" action="'.SITEURL.'contactus_action.php">
    <div class="form-in name"><input aria-required="true" name="name" placeholder="Name" type="text" /></div>
    
    <div class="form-in companyname"><input aria-required="true" name="company_name" placeholder="Company Name" type="text" /></div>
    
    <div class="form-in address"><input aria-required="true" name="address" placeholder="Address" type="text" /></div>
    
    <div class="form-in contact"><input aria-required="true" name="contact_number" placeholder="Contact Number" type="tel" onkeypress="return onlyNumberKey(event)" maxlength="10" /></div>
	<script>
		function onlyNumberKey(evt) {
			
			// Only ASCII character in that range allowed
			var ASCIICode = (evt.which) ? evt.which : evt.keyCode
			if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
				return false;
			return true;
		}
	</script>
    
	<div class="form-in email"><input aria-required="true" name="email" placeholder="Email" type="text" /></div>
	
	<div class="form-in email"><input aria-required="true" name="state" placeholder="State" type="text" /></div>

	<div class="form-in email">
		
		<select aria-required="true" name="country" placeholder="Country">
			<option value="">Select Country</option>
			<option value="Afghanistan">Afghanistan</option>
			<option value="Albania">Albania</option>
			<option value="Algeria">Algeria</option>
			<option value="American Samoa">American Samoa</option>
			<option value="Andorra">Andorra</option>
			<option value="Angola">Angola</option>
			<option value="Anguilla">Anguilla</option>
			<option value="Antarctica">Antarctica</option>
			<option value="Antigua and Barbuda">Antigua and Barbuda</option>
			<option value="Argentina">Argentina</option>
			<option value="Armenia">Armenia</option>
			<option value="Aruba">Aruba</option>
			<option value="Australia">Australia</option>
			<option value="Austria">Austria</option>
			<option value="Azerbaijan">Azerbaijan</option>
			<option value="Bahamas">Bahamas</option>
			<option value="Bahrain">Bahrain</option>
			<option value="Bangladesh">Bangladesh</option>
			<option value="Barbados">Barbados</option>
			<option value="Belarus">Belarus</option>
			<option value="Belgium">Belgium</option>
			<option value="Belize">Belize</option>
			<option value="Benin">Benin</option>
			<option value="Bermuda">Bermuda</option>
			<option value="Bhutan">Bhutan</option>
			<option value="Bolivia">Bolivia</option>
			<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
			<option value="Botswana">Botswana</option>
			<option value="Brazil">Brazil</option>
			<option value="Brunei Darussalam">Brunei Darussalam</option>
			<option value="Bulgaria">Bulgaria</option>
			<option value="Burkina Faso">Burkina Faso</option>
			<option value="Burundi">Burundi</option>
			<option value="Cambodia">Cambodia</option>
			<option value="Cameroon">Cameroon</option>
			<option value="Canada">Canada</option>
			<option value="Cape Verde">Cape Verde</option>
			<option value="Cayman Islands">Cayman Islands</option>
			<option value="Central African Republic">Central African Republic</option>
			<option value="Chad">Chad</option>
			<option value="Chile">Chile</option>
			<option value="China">China</option>
			<option value="Christmas Island">Christmas Island</option>
			<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
			<option value="Colombia">Colombia</option>
			<option value="Comoros">Comoros</option>
			<option value="Congo, Republic of(Brazzaville)">Congo, Republic of(Brazzaville)</option>
			<option value="Cook Islands">Cook Islands</option>
			<option value="Costa Rica">Costa Rica</option>
			<option value="Croatia">Croatia</option>
			<option value="Cuba">Cuba</option>
			<option value="Cyprus">Cyprus</option>
			<option value="Czech Republic">Czech Republic</option>
			<option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
			<option value="Denmark">Denmark</option>
			<option value="Djibouti">Djibouti</option>
			<option value="Dominica">Dominica</option>
			<option value="Dominican Republic">Dominican Republic</option>
			<option value="East Timor">East Timor</option>
			<option value="Ecuador">Ecuador</option>
			<option value="Egypt">Egypt</option>
			<option value="El Salvador">El Salvador</option>
			<option value="Equatorial Guinea">Equatorial Guinea</option>
			<option value="Eritrea">Eritrea</option>
			<option value="Estonia">Estonia</option>
			<option value="Ethiopia">Ethiopia</option>
			<option value="Falkland Islands">Falkland Islands</option>
			<option value="Faroe Islands">Faroe Islands</option>
			<option value="Fiji">Fiji</option>
			<option value="Finland">Finland</option>
			<option value="France">France</option>
			<option value="French Guiana">French Guiana</option>
			<option value="French Polynesia">French Polynesia</option>
			<option value="French Southern Territories">French Southern Territories</option>
			<option value="Gabon">Gabon</option>
			<option value="Gambia">Gambia</option>
			<option value="Georgia">Georgia</option>
			<option value="Germany">Germany</option>
			<option value="Ghana">Ghana</option>
			<option value="Gibraltar">Gibraltar</option>
			<option value="Great Britain">Great Britain</option>
			<option value="Greece">Greece</option>
			<option value="Greenland">Greenland</option>
			<option value="Grenada">Grenada</option>
			<option value="Guadeloupe">Guadeloupe</option>
			<option value="Guam">Guam</option>
			<option value="Guatemala">Guatemala</option>
			<option value="Guinea">Guinea</option>
			<option value="Guinea-Bissau">Guinea-Bissau</option>
			<option value="Guyana">Guyana</option>
			<option value="Haiti">Haiti</option>
			<option value="Holy See">Holy See</option>
			<option value="Honduras">Honduras</option>
			<option value="Hong Kong">Hong Kong</option>
			<option value="Hungary">Hungary</option>
			<option value="Iceland">Iceland</option>
			<option value="India">India</option>
			<option value="Indonesia">Indonesia</option>
			<option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
			<option value="Iraq">Iraq</option>
			<option value="Ireland">Ireland</option>
			<option value="Israel">Israel</option>
			<option value="Italy">Italy</option>
			<option value="Ivory Coast">Ivory Coast</option>
			<option value="Jamaica">Jamaica</option>
			<option value="Japan">Japan</option>
			<option value="Jordan">Jordan</option>
			<option value="Kazakhstan">Kazakhstan</option>
			<option value="Kenya">Kenya</option>
			<option value="Kiribati">Kiribati</option>
			<option value="Kosovo">Kosovo</option>
			<option value="Kuwait">Kuwait</option>
			<option value="Kyrgyzstan">Kyrgyzstan</option>
			<option value="Lao">Lao</option>
			<option value="Latvia">Latvia</option>
			<option value="Lebanon">Lebanon</option>
			<option value="Lesotho">Lesotho</option>
			<option value="Liberia">Liberia</option>
			<option value="Libya">Libya</option>
			<option value="Liechtenstein">Liechtenstein</option>
			<option value="Lithuania">Lithuania</option>
			<option value="Luxembourg">Luxembourg</option>
			<option value="Macau">Macau</option>
			<option value="Macedonia, Rep. of">Macedonia, Rep. of</option>
			<option value="Madagascar">Madagascar</option>
			<option value="Malawi">Malawi</option>
			<option value="Malaysia">Malaysia</option>
			<option value="Maldives">Maldives</option>
			<option value="Mali">Mali</option>
			<option value="Malta">Malta</option>
			<option value="Marshall Islands">Marshall Islands</option>
			<option value="Martinique">Martinique</option>
			<option value="Mauritania">Mauritania</option>
			<option value="Mauritius">Mauritius</option>
			<option value="Mayotte">Mayotte</option>
			<option value="Mexico">Mexico</option>
			<option value="Micronesia, Federal States of">Micronesia, Federal States of</option>
			<option value="Moldova, Republic of">Moldova, Republic of</option>
			<option value="Monaco">Monaco</option>
			<option value="Mongolia">Mongolia</option>
			<option value="Montenegro">Montenegro</option>
			<option value="Montserrat">Montserrat</option>
			<option value="Morocco">Morocco</option>
			<option value="Mozambique">Mozambique</option>
			<option value="Myanmar, Burma">Myanmar, Burma</option>
			<option value="Namibia">Namibia</option>
			<option value="Nauru">Nauru</option>
			<option value="Nepal">Nepal</option>
			<option value="Netherlands">Netherlands</option>
			<option value="Netherlands Antilles">Netherlands Antilles</option>
			<option value="New Caledonia">New Caledonia</option>
			<option value="New Zealand">New Zealand</option>
			<option value="Nicaragua">Nicaragua</option>
			<option value="Niger">Niger</option>
			<option value="Nigeria">Nigeria</option>
			<option value="Niue">Niue</option>
			<option value="North Korea">North Korea</option>
			<option value="Northern Mariana Islands">Northern Mariana Islands</option>
			<option value="Norway">Norway</option>
			<option value="Pakistan">Pakistan</option>
			<option value="Palau">Palau</option>
			<option value="Palestinian territories">Palestinian territories</option>
			<option value="Panama">Panama</option>
			<option value="Papua New Guinea">Papua New Guinea</option>
			<option value="Paraguay">Paraguay</option>
			<option value="Peru">Peru</option>
			<option value="Philippines">Philippines</option>
			<option value="Pitcairn Island">Pitcairn Island</option>
			<option value="Poland">Poland</option>
			<option value="Portugal">Portugal</option>
			<option value="Puerto Rico">Puerto Rico</option>
			<option value="Qatar">Qatar</option>
			<option value="Reunion Island">Reunion Island</option>
			<option value="Romania">Romania</option>
			<option value="Russian Federation">Russian Federation</option>
			<option value="Rwanda">Rwanda</option>
			<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
			<option value="Saint Lucia">Saint Lucia</option>
			<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
			<option value="Samoa">Samoa</option>
			<option value="San Marino">San Marino</option>
			<option value="Sao Tome and Principe">Sao Tome and Principe</option>
			<option value="Saudi Arabia">Saudi Arabia</option>
			<option value="Senegal">Senegal</option>
			<option value="Serbia">Serbia</option>
			<option value="Seychelles">Seychelles</option>
			<option value="Sierra Leone">Sierra Leone</option>
			<option value="Singapore">Singapore</option>
			<option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
			<option value="Slovenia">Slovenia</option>
			<option value="Solomon Islands">Solomon Islands</option>
			<option value="Somalia">Somalia</option>
			<option value="South Africa">South Africa</option>
			<option value="South Korea">South Korea</option>
			<option value="South Sudan">South Sudan</option>
			<option value="Spain">Spain</option>
			<option value="Sri Lanka">Sri Lanka</option>
			<option value="Sudan">Sudan</option>
			<option value="Suriname">Suriname</option>
			<option value="Swaziland">Swaziland</option>
			<option value="Sweden">Sweden</option>
			<option value="Switzerland">Switzerland</option>
			<option value="Syria, Syrian Arab Republic">Syria, Syrian Arab Republic</option>
			<option value="Taiwan">Taiwan</option>
			<option value="Tajikistan">Tajikistan</option>
			<option value="Tanzania">Tanzania</option>
			<option value="Thailand">Thailand</option>
			<option value="Tibet">Tibet</option>
			<option value="Timor-Leste">Timor-Leste</option>
			<option value="Togo">Togo</option>
			<option value="Tokelau">Tokelau</option>
			<option value="Tonga">Tonga</option>
			<option value="Trinidad and Tobago">Trinidad and Tobago</option>
			<option value="Tunisia">Tunisia</option>
			<option value="Turkey">Turkey</option>
			<option value="Turkmenistan">Turkmenistan</option>
			<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
			<option value="Tuvalu">Tuvalu</option>
			<option value="Uganda">Uganda</option>
			<option value="Ukraine">Ukraine</option>
			<option value="United Arab Emirates">United Arab Emirates</option>
			<option value="United Kingdom">United Kingdom</option>
			<option value="United States">United States</option>
			<option value="Uruguay">Uruguay</option>
			<option value="Uzbekistan">Uzbekistan</option>
			<option value="Vanuatu">Vanuatu</option>
			<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
			<option value="Venezuela">Venezuela</option>
			<option value="Vietnam">Vietnam</option>
			<option value="Virgin Islands (British)">Virgin Islands (British)</option>
			<option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
			<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
			<option value="Western Sahara">Western Sahara</option>
			<option value="Yemen">Yemen</option>
			<option value="Zambia">Zambia</option>
			<option value="Zimbabwe">Zimbabwe</option>
		</select>
	
	</div>
    
	<div class="form-in subject"><select name="subject"><option value="">Select Department</option><option value="Marketing">Marketing</option><option value="Spares">Spares</option><option value="Customer Support">Customer Support</option> </select></div>
	
	<div class="form-in message"><input aria-required="true" name="message" placeholder="Message" type="text" />
	</div>
     <!--<div class="g-recaptcha" data-sitekey="6LdMgfoUAAAAAPKEFiJnsgi_GK8WfrRXpm0I-CkK"></div> -->
    <div class="form-inbtn"><button class="submit-btn" type="submit" name = "submit">Submit Form</button></div>
    </form>
    </div>
    </div>';
}

function widget_contactindia(){


	$States =  Factory::getStates();
	$sql = "`deleted_at` IS NULL";
	$order = '`sort_order` ASC';
	$states = $States->getStatesList($sql, $order);

    
    // $states = \App\Models\State::orderBy('sort_order')->with(['lom_lead','lom_rep'])->get();
    $html = '';
    foreach ($states as $key => $value) {
        if($value['lom_lead_id']!=''){
            $html = $html.'<div class="states-name"><a class="contry-popup" href="#ll'. $value['lom_lead_id'].'">'. $value['state_name'] .'</a></div>';   
        }elseif($value['lom_represitative_id']!=''){
            $html = $html.'<div class="states-name"><a class="contry-popup" href="#lr'. $value['lom_represitative_id'] .'">'. $value['state_name'] .'</a></div>';   
        }else{
            $html = $html.'<div class="states-name"><a class="contry-popup" href="#">'. $value['state_name'] .'</a></div>';   
        }    
    }

    return '<div class="countries-bottom">	
		<div class="wrapper clearfix">
			<div class="states-list clearfix">
				'. $html .'
			</div>
		</div>
	</div>';
}

function widget_country(){

	$Continent =  Factory::getContinents();
	$sql = "`deleted_at` IS NULL";
	$order = '`sort_order` ASC';
	$Continent = $Continent->getContinentsList($sql, $order);

	$LOM_Lead =  Factory::getLOM_Leads();
	$sql = "`deleted_at` IS NULL";
	$lOM_Lead = $LOM_Lead->getLOM_LeadsList($sql);

	$LOM_Represitative =  Factory::getLOM_Represitatives();
	$sql = "`deleted_at` IS NULL";
	$lOM_Represitative = $LOM_Represitative->getLOM_RepresitativesList($sql);

    $contiHTML = '';
    $contryHTML = '';
    $contryHTMLT = '';
    foreach ($Continent as $key => $value) {
        $contiHTML = $contiHTML.'<li><a href="#tab'. $value['id'] .'">'. $value['name'] .'</a></li>';
        $contryHTML = '';

		$Countries =  Factory::getCountries();
		$sql = "`continent_id`=".$value['id']." AND  `deleted_at` IS NULL";
		$order = '`continent_id` ASC';
		$Countries = $Countries->getCountriesList($sql, $order);

        foreach ($Countries as $ckey => $cvalue) {
            if($cvalue['lom_lead_id']!=''){
                $contryHTML = $contryHTML.'<div class="contry-name"><a class="contry-popup" data-cid="'. $cvalue['id'].'" data-code="'. $cvalue['country_code'].'"  href="#ll'. $cvalue['lom_lead_id'] .'">'. $cvalue['country_name'].'</a></div>';   
            }elseif($cvalue['lom_represitative_id']!=''){
                $contryHTML = $contryHTML.'<div class="contry-name"><a class="contry-popup" data-cid="'. $cvalue['id'].'" data-code="'. $cvalue['country_code'] .'" href="#lr'. $cvalue['lom_represitative_id'] .'">'. $cvalue['country_name'] .'</a></div>';   
            }else{
                $contryHTML = $contryHTML.'<div class="contry-name"><a class="contry-popup" data-cid="'. $cvalue['id'] .'" data-code="'. $cvalue['country_code'] .'"  href="#">'. $cvalue['country_name'] .'</a></div>';   
            }    
         }
        $contryHTMLT = $contryHTMLT.'<div id="tab'. $value['id'] .'" class="machine-detial '. strtolower($value['name']) .'">
        <div class="contry-list"> '. $contryHTML .' </div></div>';
    }
    $llHTML = '<div style="visibility:hidden">
    <a href="#ll9" class="contry-popup click_ll_9">LOM LEAD</a>
    <a href="#ll10" class="contry-popup click_ll_10">LOM LEAD</a>
    <a href="#ll11" class="contry-popup click_ll_11">LOM LEAD</a>
    <a href="#ll12" class="contry-popup click_ll_12">LOM LEAD</a>
    <a href="#ll13" class="contry-popup click_ll_13">LOM LEAD</a>
    <a href="#ll14" class="contry-popup click_ll_14">LOM LEAD</a>
    <a href="#ll15" class="contry-popup click_ll_15">LOM LEAD</a>
    </div>';
    foreach ($lOM_Lead as $key => $value) {
        $llHTML = $llHTML.'<div id="ll'. $value['id'] .'" class="dcontry-popup mfp-hide">
                    <div class="dcontry-wrap">
                        <h4 class="rep-title">'. $value['name'] .'</h4>
                        <div class="dcontry-box">
                            '. $value['detail'] .'
                        </div>
                    </div>
                </div>';
    }
    
    $lrHTML = '';
    foreach ($lOM_Represitative as $key => $value) {
        $lrHTML = $lrHTML.'<div id="lr'. $value['id'] .'" class="dcontry-popup mfp-hide">
                    <div class="dcontry-wrap">
                        <h4 class="rep-title">'. $value['name'] .'</h4>
                        <div class="dcontry-box">
                            '. $value['detail'] .'
                        </div>
                    </div>
                </div>';
    }
    //echo  $lrHTML; exit;

    return '<div class="world-wrapcol">
                <div class="world-right">
                    <div class="worldright-wrap">
                        <div class="worldtitle-wrap">
                            <h4>World</h4>			
                        </div>		
                        <div class="wmap-tab">
                            <ul class="tab-list">'. $contiHTML .'</ul>
                            <div class="wtab-content">
                            '. $contryHTMLT .'
                            </div>
                        </div>
                    </div>
                </div>
            </div>'.$llHTML.$lrHTML;
}

if (!function_exists('widget_searchbyendproducts')){
	function widget_searchbyendproducts(){
		$heading = "SEARCH BY END PRODUCTS";

		$End_Product =  Factory::getEnd_Products();
		$sql = "`deleted_at` IS NULL";
		$order = 'sortorder asc';
		$End_Product = $End_Product->getEnd_ProductsList($sql, $order);

		// $End_Product = \App\Models\End_Product::orderBy('sortorder','asc')->get();
		// echo "<pre>"; print_r($End_Product);

		$End_Productsname = '';
		// $End_Productsname .= '<input type="hidden" name="endProducturl" value="/getEndProducts/">';
        foreach ($End_Product as $key => $value) {
			$activeClass = (($value['id'] == '1')? 'active' : '');
			$End_Productsname .= '<button type="button" class="btn endProducts-btn '.$activeClass.'" data-endprod-id="'.$value['id'].'"> '.$value['name'].'</button>';
        }

		// Defualt products
		$products =  Factory::getProducts();
		$sql = "`deleted_at` IS NULL";
		$order = 'tmp_sort asc';
		$products = $products->getProductsList($sql, $order);

		// $products = \App\Models\Product::with(['small_image_path'])->Where('deleted_at', Null)->orderBy('tmp_sort', 'asc')->get();

            $productsHTMLInner = '';
            foreach ($products as $product) {
                $endProducts = json_decode($product['endproduct']);

                $prodCat = json_decode($product['category']);
				
				$ProductCategory =  Factory::getProduct_categories();
				$sql = "`id`=".$prodCat[0]." AND `deleted_at` IS NULL";
				$order = 'sortorder asc';
				$ProductCategory = $ProductCategory->getProduct_categoriesList($sql, $order);

                // $ProductCategory = \App\Models\ProductCategory::Where('id', $prodCat[0])->get();

                $cat_name = str_replace(' ', '-', $ProductCategory[0]['name']);
                $cat_slug = strtolower($cat_name);
				$machineSeries_id = json_decode($product['machineseries']);

				
                $shtml = '';
                foreach ($machineSeries_id as $value) {

					$machineseries =  Factory::getMachine_series();
					$sql = "`id`=".$value." AND `deleted_at` IS NULL";
					$order = 'sortorder asc';
					$machineseries = $machineseries->getMachine_seriesList($sql, $order);

                    $shtml = $shtml . '<li>' . $machineseries[0]['name'] . '</li>';
                }
                if ($product['small_image'] != '') {
                    // Nathan 03 02 2023
                    $img = '<img src="'.SITEURL.'upload/products/small_image/'.$product['small_image'].'" alt="'.$product['image_alt_text'].'">';
                } else {
                    $img = '';
                }

                if (in_array('1', $endProducts)) {
                    $productsHTMLInner = $productsHTMLInner . '<div class="machine-product-box wow1 fadeInUp1" data-wow-delay="0.4s">
                            <div class="machine-product-img">
                                <a href="'.SITEURL.'machine/' . $cat_slug . '/' . $product['slug'].'" alt="'.$product['image_alt_text'].'">' . $img . '</a>
                            </div>
                            <div class="machine-product-text">
                                <h3><a href="/machine/' . $cat_slug . '/' . $product['slug'].'">' . $product['name'] . '</a></h3>
                                <ul>
                                ' . $shtml . '
                                </ul>
                
                            </div>
                        </div>';
                }
            }

			$sbep_html ='<div class="mb-70px searchByEP">
			<div class="wrapper clearfix">
				<h2 class="section-title wow fadeInUp" data-wow-delay="0.3s"
					style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; text-align: center;">SEARCH BY END PRODUCTS
				</h2>
				<div class="end_Productsname">
					'.$End_Productsname.'
				</div>
				<div class="endProducts">
					'.$productsHTMLInner.'
				</div>
			</div>
		</div>';

		return $sbep_html;
	}
}

if (!function_exists('widget_gallary')){
    function widget_gallary(){
        // $gallry = \App\Models\Gallery::with(['gallary_images.image_path'])->orderBy('date','desc')->get();
		//echo '<pre>'; print_r($gallry->toArray()); exit;

		$Gallry =  Factory::getGalleries();
		$sql = "`deleted_at` IS NULL";
		$order = 'date desc';
		$gallry = $Gallry->getGalleriesList($sql, $order);
		
		$gallryHtml='
                    <div class="gallery-section ptb-80">
                    <div class="gfilter-row">
                        <div class="wrapper clearfix">
                            <div class="gfilter-left">
                                <h2 class="section-title">Gallery</h2>	
                            </div>
                            <div class="gfilter-right">
                                <div class="gfilter-col">
                                    <a class="selectfil" href="javascript:update_gallery_all()" title="">All</a>
                                </div>
                                <div class="gfilter-col">
                                    <a class="selectfil" href="javascript:update_gallery(2022)" title="">2022</a>
                                </div>
                                
                                <div class="gfilter-col">
                                    <a class="selectfil" href="javascript:update_gallery(2020)" title="">2020</a>
                                </div>
                                <div class="gfilter-col">
                                    <a class="selectfil" href="javascript:update_gallery(2019)" title="">2019</a>
                                </div>
                                <div class="gfilter-col">
                                    <a class="selectfil" href="javascript:update_gallery(2018)" title="">2018</a>
                                </div>
                                <div class="gfilter-col">
                                    <a class="selectfil" href="javascript:update_gallery(2017)" title="">2017</a>
                                </div>
                            </div>
                        </div>		
                    </div>
                    ';
		foreach($gallry as $gallryItem)
		{
			$gallryHtml.='<div class="gallery-gwrap" data-gallery-title="'.$gallryItem['title'].'" data-date="'.date('m-Y',strtotime($gallryItem['date'])).'" data-month="'.date('m',strtotime($gallryItem['date'])).'" data-year="'.date('Y',strtotime($gallryItem['date'])).'">
							<div class="wrapper clearfix">
								<h3 class="gallery-gwrap-title">'.$gallryItem['title'].'</h3>
									<div class="gallery-glist">';
							$gallryImageHtml='';

							$Gallery_images =  Factory::getGallery_images();
							$sql = "`gallery_id`=".$gallryItem['id']." AND `deleted_at` IS NULL";
							$order = 'date asc';
							$gallery_images = $Gallery_images->getGallery_imagesList($sql, $order);

							foreach($gallery_images as $gallaryImage)
							{
								$imgSrc = SITEURL.'upload/gallery/image/'.$gallaryImage['image'];
								
                                // Nathan 02 03 2023
								$gallryImageHtml.='<div class="gallery-gitem">
									<div class="gitem-wrap">
										<div class="gallery-iimg">
											<a class="gallery-popup-img" href="'.$imgSrc.'"><img src="'.$imgSrc.'" alt="'.$gallaryImage['title'].'"></a>
                                        </div>
                                        <!--  
										<div class="gallery-icontent">
											<span class="date">'.$gallaryImage['date'].'</span>
											<h3 class="gallery-ititle">'.$gallaryImage['title'].'</h3>
											<p class="gcity">'.$gallaryImage['location'].'</p>
                                        </div>
                                        -->
									</div>	
								</div>';
							}
			$gallryHtml.=$gallryImageHtml.'</div></div></div>';
		}
		
		$gallryHtml.='</div>
		<script type="text/javascript">
		//<![CDATA[
			$(document).ready(function(){
				
			});
		//]]>
		</script>';
		
		return $gallryHtml;
        return '
        <div class="gallery-section ptb-80">
            <div class="gfilter-row">
                <div class="wrapper clearfix">
                    <div class="gfilter-left">
                        <h2 class="section-title">Expografica 2019</h2>	
                    </div>
                    <div class="gfilter-right">
                        <div class="gfilter-col">
                            <select>
                                <option value="">All</option>
                                <option value="">2017</option>
                                <option value="">2018</option>
                                <option value="">2019</option>
                            </select>	
                        </div>
                        <div class="gfilter-col">
                            <select>
                                <option value="">2017</option>
                                <option value="">January</option>
                                <option value="">February</option>
                                <option value="">March</option>
                                <option value="">April</option>
                                <option value="">May</option>
                                <option value="">June</option>
                                <option value="">July</option>
                                <option value="">August</option>
                                <option value="">September</option>
                                <option value="">October</option>
                                <option value="">November</option>
                                <option value="">December</option>
                                <option value="">March</option>
                            </select>	
                        </div>
                        <div class="gfilter-col">
                            <select>
                                <option value="">2018</option>
                                <option value="">January</option>
                                <option value="">February</option>
                                <option value="">March</option>
                                <option value="">April</option>
                                <option value="">May</option>
                                <option value="">June</option>
                                <option value="">July</option>
                                <option value="">August</option>
                                <option value="">September</option>
                                <option value="">October</option>
                                <option value="">November</option>
                                <option value="">December</option>
                                <option value="">March</option>
                            </select>	
                        </div>
                        <div class="gfilter-col">
                            <select>
                                <option value="">2019</option>
                                <option value="">January</option>
                                <option value="">February</option>
                                <option value="">March</option>
                                <option value="">April</option>
                                <option value="">May</option>
                                <option value="">June</option>
                                <option value="">July</option>
                                <option value="">August</option>
                                <option value="">September</option>
                                <option value="">October</option>
                                <option value="">November</option>
                                <option value="">December</option>
                                <option value="">March</option>
                            </select>	
                        </div>
                    </div>
                </div>		
            </div>
                                    
            <div class="gallery-gwrap">
                <div class="wrapper clearfix">
                <div class="gallery-glist">
                    <div class="gallery-gitem">
                        <div class="gitem-wrap">
                            <div class="gallery-iimg">
                                <a class="gallery-popup-img" href="assets/images/gallery/gallery-1-min.jpg"><img src="assets/images/gallery/gallery-1-min.jpg" alt=""></a>
                            </div>
                            <div class="gallery-icontent">
                                <span class="date">April – May, 2018</span>
                                <h3 class="gallery-ititle">Proud Moment for Line O Matic</h3>
                                <p class="gcity">Ahmedabad</p>
                            </div>
                        </div>	
                    </div>

                    <div class="gallery-gitem">
                        <div class="gitem-wrap">
                            <div class="gallery-iimg">
                                <a class="gallery-popup-img" href="assets/images/gallery/gallery-2-min.jpg"><img src="assets/images/gallery/gallery-2-min.jpg" alt=""></a>	
                            </div>
                            <div class="gallery-icontent">
                                <span class="date">April – May, 2018</span>
                                <h3 class="gallery-ititle">Proud Moment for Line O Matic</h3>
                                <p class="gcity">Ahmedabad</p>
                            </div>
                        </div>	
                    </div>

                    <div class="gallery-gitem">
                        <div class="gitem-wrap">
                            <div class="gallery-iimg">
                                <a class="gallery-popup-img" href="assets/images/gallery/gallery-3-min.jpg"><img src="assets/images/gallery/gallery-3-min.jpg" alt=""></a>	
                            </div>
                            <div class="gallery-icontent">
                                <span class="date">April – May, 2018</span>
                                <h3 class="gallery-ititle">Proud Moment for Line O Matic</h3>
                                <p class="gcity">Ahmedabad</p>
                            </div>
                        </div>	
                    </div>

                    <div class="gallery-gitem">
                        <div class="gitem-wrap">
                            <div class="gallery-iimg">
                                <a class="gallery-popup-img" href="assets/images/gallery/gallery-4-min.jpg"><img src="assets/images/gallery/gallery-4-min.jpg" alt=""></a>	
                            </div>
                            <div class="gallery-icontent">
                                <span class="date">April – May, 2018</span>
                                <h3 class="gallery-ititle">Proud Moment for Line O Matic</h3>
                                <p class="gcity">Ahmedabad</p>
                            </div>
                        </div>	
                    </div>
                </div>
                </div>		
            </div>

            <div class="gallery-gwrap printpack">
                <div class="wrapper clearfix">
                <h3 class="gallery-gwrap-title">Printpack 2019</h3>
                <div class="gallery-glist">
                    <div class="gallery-gitem">
                        <div class="gitem-wrap">
                            <div class="gallery-iimg">
                                <a class="gallery-popup-img" href="assets/images/gallery/gallery-5-min.jpg"><img src="assets/images/gallery/gallery-5-min.jpg" alt=""></a>
                            </div>
                            <div class="gallery-icontent">
                                <span class="date">April – May, 2018</span>
                                <h3 class="gallery-ititle">Proud Moment for Line O Matic</h3>
                                <p class="gcity">Ahmedabad</p>
                            </div>
                        </div>	
                    </div>

                    <div class="gallery-gitem">
                        <div class="gitem-wrap">
                            <div class="gallery-iimg">
                                <a class="gallery-popup-img" href="assets/images/gallery/gallery-6-min.jpg"><img src="assets/images/gallery/gallery-6-min.jpg" alt=""></a>	
                            </div>
                            <div class="gallery-icontent">
                                <span class="date">April – May, 2018</span>
                                <h3 class="gallery-ititle">Proud Moment for Line O Matic</h3>
                                <p class="gcity">Ahmedabad</p>
                            </div>
                        </div>	
                    </div>

                    <div class="gallery-gitem">
                        <div class="gitem-wrap">
                            <div class="gallery-iimg">
                                <a class="gallery-popup-img" href="assets/images/gallery/gallery-7-min.jpg"><img src="assets/images/gallery/gallery-7-min.jpg" alt=""></a>	
                            </div>
                            <div class="gallery-icontent">
                                <span class="date">April – May, 2018</span>
                                <h3 class="gallery-ititle">Proud Moment for Line O Matic</h3>
                                <p class="gcity">Ahmedabad</p>
                            </div>
                        </div>	
                    </div>

                    <div class="gallery-gitem">
                        <div class="gitem-wrap">
                            <div class="gallery-iimg">
                                <a class="gallery-popup-img" href="assets/images/gallery/gallery-8-min.jpg"><img src="assets/images/gallery/gallery-8-min.jpg" alt=""></a>	
                            </div>
                            <div class="gallery-icontent">
                                <span class="date">April – May, 2018</span>
                                <h3 class="gallery-ititle">Proud Moment for Line O Matic</h3>
                                <p class="gcity">Ahmedabad</p>
                            </div>
                        </div>	
                    </div>
                </div>
                </div>		
            </div>

            <div class="gallery-gwrap expoprint">
                <div class="wrapper clearfix">
                    <h3 class="gallery-gwrap-title">ExpoPrint 2018</h3>
                </div>
                <div class="wrapper clearfix">
                <div class="gallery-glist">
                    <div class="gallery-gitem">
                        <div class="gitem-wrap">
                            <div class="gallery-iimg">
                                <a class="gallery-popup-img" href="assets/images/gallery/gallery-9-min.jpg"><img src="assets/images/gallery/gallery-9-min.jpg" alt=""></a>
                            </div>
                            <div class="gallery-icontent">
                                <span class="date">April – May, 2018</span>
                                <h3 class="gallery-ititle">Proud Moment for Line O Matic</h3>
                                <p class="gcity">Ahmedabad</p>
                            </div>
                        </div>	
                    </div>

                    <div class="gallery-gitem">
                        <div class="gitem-wrap">
                            <div class="gallery-iimg">
                                <a class="gallery-popup-img" href="assets/images/gallery/gallery-10-min.jpg"><img src="assets/images/gallery/gallery-10-min.jpg" alt=""></a>	
                            </div>
                            <div class="gallery-icontent">
                                <span class="date">April – May, 2018</span>
                                <h3 class="gallery-ititle">Proud Moment for Line O Matic</h3>
                                <p class="gcity">Ahmedabad</p>
                            </div>
                        </div>	
                    </div>

                    <div class="gallery-gitem">
                        <div class="gitem-wrap">
                            <div class="gallery-iimg">
                                <a class="gallery-popup-img" href="assets/images/gallery/gallery-11-min.jpg"><img src="assets/images/gallery/gallery-11-min.jpg" alt=""></a>	
                            </div>
                            <div class="gallery-icontent">
                                <span class="date">April – May, 2018</span>
                                <h3 class="gallery-ititle">Proud Moment for Line O Matic</h3>
                                <p class="gcity">Ahmedabad</p>
                            </div>
                        </div>	
                    </div>

                    <div class="gallery-gitem">
                        <div class="gitem-wrap">
                            <div class="gallery-iimg">
                                <a class="gallery-popup-img" href="assets/images/gallery/gallery-12-min.jpg"><img src="assets/images/gallery/gallery-12-min.jpg" alt=""></a>	
                            </div>
                            <div class="gallery-icontent">
                                <span class="date">April – May, 2018</span>
                                <h3 class="gallery-ititle">Proud Moment for Line O Matic</h3>
                                <p class="gcity">Ahmedabad</p>
                            </div>
                        </div>	
                    </div>
                </div>
                </div>		
            </div>			
        </div>';
    }
}



?>