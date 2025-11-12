<?php
class Factory
{
	public static function getAdminUser($id = null)
	{
		return new AdminUser($id);
	}

	public static function getEmails($id = null)
	{
		return new Emails($id);
	}

	public static function getStatic_blocks($id = null)
	{
		return new Static_blocks($id);

	}
	public static function getContinents($id = null)
	{
		return new Continents($id);
	}
	public static function getQuote_requests($id = null)
	{
		return new Quote_requests($id);
    }
	public static function getContact_us_messages($id = null)
	{
		return new Contact_us_messages($id);
	}
	public static function getHome_sliders($id = null)
	{
		return new Home_sliders($id);
	}
	public static function getLatest_news($id = null)
	{
		return new Latest_news($id);
	}
	public static function getMachines($id = null)
	{
		return new Machines($id);
	}
	public static function getMedia($id = null)
	{
		return new Media($id);
	}
	public static function getExhibitions($id = null)
	{
		return new Exhibitions($id);
	}
	public static function getTestimonials($id = null)
	{
		return new Testimonials($id);
	}
	public static function getCareers($id = null)
	{
		return new Careers($id);
	}
	public static function getPages($id = null)
	{
		return new Pages($id);
	}
	public static function getLom_leads($id = null)
	{
		return new Lom_leads($id);
	}
	public static function getLom_represitatives($id = null)
	{
		return new Lom_represitatives($id);
	}
	public static function getStates($id = null)
	{
		return new States($id);
	}
	public static function getCountries($id = null)
	{
		return new Countries($id);
	}
	public static function getGalleries($id = null)
	{
		return new Galleries($id);
	}
	public static function getGallery_images($id = null)
	{
		return new Gallery_images($id);
	}
	public static function getMenu_types($id = null)
	{
		return new Menu_types($id);
	}
	public static function getProduct_categories($id = null)
	{
		return new Product_categories($id);
	}
	public static function getEnd_products($id = null)
	{
		return new End_products($id);
	}
	public static function getUnit_wise_features($id = null)
	{
		return new Unit_wise_features($id);
	}
	public static function getMachine_series($id = null)
	{
		return new Machine_series($id);
	}
	public static function getProducts($id = null)
	{
		return new Products($id);
	}
	public static function getFront_menu($id = null)
	{
		return new Front_menu($id);
	}
	public static function getJob_posting($id = null)
	{
		return new Job_posting($id);
	}
}
