<?php

function make_widget($keyword){
	if(function_exists($keyword)){
		return $keyword();
	}else{
		return '['.$keyword.']';
	}
}

function make_static_block($keyword){
	$temp = str_replace('staticblock_', '', $keyword);

	$block =  Factory::getStatic_Blocks();
    $sql = '`key`="'.$temp.'" && `deleted_at` IS NULL';
    $block = $block->fetchAll($sql);
	$block = $block[0];

	if($block!=''){
		return $block['value'];
	}else{
		return $keyword;
	}
	
}

function analize_string($keyword){
	$keyword = str_replace('[', '', $keyword);
	$keyword = str_replace(']', '', $keyword);
	
	$temp = explode('_',$keyword);
	$arr['full_keyword'] = $keyword;
	if(isset($temp[0])){
		$arr['type'] = $temp[0];
	}else{
		$arr['type'] = NULL;
	}	
	return $arr;
}

function RandomString()
{
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randstring = '';
	for ($i = 0; $i < 8; $i++) {
		$randstring = $randstring.$characters[rand(0,61)];
	}
	return $randstring;
}

function renderMenuItemFront($id, $label, $url, $allData)
{
    // Model info
    $info = (object) array();
    $info->id = $id;
    $info->name = $label;
    $info->url = $url;
    $info->allData = $allData;

    // Menu HTML
    //$html = '<a href="' . SITEURL . '/' . $info->url . '">' . $info->name . "</a>";
    $html = '<a href="' . $info->url . '">' . $info->name . "</a>";

    return $html;
}

function MenuTreeListFront($parent_id = 0, $menu_type_id)
{
    $objFront_menu = Factory::getFront_menu();
    $sql = "parent = " . $parent_id . " AND menu_type_id = " . $menu_type_id;
    $order = "hierarchy ASC";

    $Front_menuList = $objFront_menu->getFront_menuList($sql, $order);
    $items = '';
    if (count($Front_menuList) > 0) {
        $menu_class =  (($Front_menuList[0]['parent'] != 0)? "class='sub-menu'" : '');
        $items .= '<ul '.$menu_class.'>';

        foreach ($Front_menuList as $row) {
            if ($row['id'] != 31) {
                $items .= "<li>";
                $items .= renderMenuItemFront($row['id'], $row['name'], $row['url'], $row);
                $items .= MenuTreeListFront($row['id'], $menu_type_id);
                $items .= "</li>";
            } else {
                $items .= "<li>";
                $items .= renderMenuItemFront($row['id'], $row['name'], $row['url'], $row);
                $items .= MenuTreeListFront($row['id'], $menu_type_id);

                $objStatic_Blocks = Factory::getStatic_blocks();
                $sql = "`key` = 'megamenu'";
                $static_blocks = $objStatic_Blocks->getStatic_blocksList($sql);

                $items .= $static_blocks[0]['value'];
                $items .= "</li>";
            }
        }
        $items .= '</ul>';
    }

    return $items;
}

function checkMachineCategory($category) {
	
	$machineCate_name = str_replace('-', ' ', $category);
    $category_slug = ucwords($machineCate_name);

	$ProductCategory =  Factory::getProduct_categories();
    $sql = "`name`='".$category_slug."' AND `deleted_at` IS NULL";
    $order = 'sortorder asc';
    $productCategory = $ProductCategory->getProduct_categoriesList($sql, $order);

	if(!empty($productCategory)) {
		return true;
	} else {
        return false;
    }

}

function checkMachine($category_name, $machine_slug) 
{
    $machineCate_name = str_replace('-', ' ', $category_name);
    $category_slug = ucwords($machineCate_name);
    
    $ProductCategory =  Factory::getProduct_categories();
    $sql = "`name`='".$category_slug."' AND `deleted_at` IS NULL";
    $order = 'sortorder asc';
    $productCategory = $ProductCategory->getProduct_categoriesList($sql, $order);

    $Products =  Factory::getProducts();
    $sql = '`slug`="'.$machine_slug.'" AND '.' `category`=\'["'. $productCategory[0]['id'] .'"]\'  AND `deleted_at` IS NULL';
    $order = 'tmp_sort asc';
    $product = $Products->getProductsList($sql, $order);

	if(!empty($product)) {
		return true;
	} else {
        return false;
    }
}