<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_lib
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function menu_navigation()
	{
		$menu = array(
			array('text' => 'Home', 'url' => ''),
			array('text' => 'Page 1', 'url' => 'page1'),
			array('text' => 'Page 2', 'url' => 'page2'),
			array('text' => 'Page 3', 'url' => 'page3'),
		);

		$page2 = $this->ci->uri->segment(2);
		$menu_active = '';
		$html = '';
		$html .= '<ul>';
		foreach ($menu as $data) {
			if ($page2 == $data['url']) {
				$menu_active = 'active';
			}
			$html .= '<li class="'.$menu_active.'">';
			$html .= anchor(base_url(). 'menu/' .$data['url'], $data['text']);
			$html .= '</li>';
		}
		$html .= '</ul>';

		return $html;
	}

	

}

/* End of file Menu_lib.php */
/* Location: ./application/libraries/Menu_lib.php */
